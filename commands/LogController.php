<?php


namespace app\commands;

use yii\console\{Controller,ExitCode};
use UAParser\Parser;
use app\models\LogAnalysis;
use Yii;

/**
 * Класс загрузки логов в базу данных
 */
class LogController extends Controller
{
    private $arr_content = [];
    private $regex = '/^\S.+?(?= )|(?<=\[).+?(?=\])|(?<= \").+?(?=\")/';
    private $regex_architecture = '/x64_64|AMD64|amd64|Win64|WOW64|x86_64|x86-64|x64;/';
    private $in_date_format = 'd/M/Y:H:i:s T';
    private $out_date_format = 'Y-m-d H:i:s';

    /**
     * Добавление данных из файла логов из корня сайта
     * фомат логов: 127.0.0.1 - - [21/Mar/2019:00:20:06 +0300] "GET /favicon/favicon-32.png HTTP/1.1" 200 1306 "http://modimio.loc/icms/catalog/catalog_edit?id=4" "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.75 Safari/537.36"
     * @param  string $filename имя файла
     * @return код  ответ консоли
     */
    public function actionIndex($filename = '')
    {
        if ('' === $filename) {
            echo "Файл логов не указан\n";
        } else {
            try {
                $content = file_get_contents($filename, true);
                $this->arr_content = explode("\n", $content);
                echo "Файл подключен\n";
            } catch (\Exception $e) {
                echo "Файл не найден \n";
            }
            $parser_ua = Parser::create();
            $count = 0;
            if (0 < count($this->arr_content)) {
                echo 'Идёт добавление данных ';
                $data = [];
                foreach ($this->arr_content as $value) {
                    if ($value <> 0){
                        $log = new LogAnalysis();
                        preg_match_all($this->regex, $value, $matches);
                        // берем первую выборку
                        $ip_data_method_url_ua = $matches[0];

                        // находим x64 системы
                        preg_match($this->regex_architecture, $ip_data_method_url_ua[4] ?? '', $architecture);

                        // преобразуем дату и время для mySql
                        if (!empty($ip_data_method_url_ua[1])){
                            $date_time = \DateTime::createFromFormat($this->in_date_format, $ip_data_method_url_ua[1]);
                            $out_data_time = $date_time->format($this->out_date_format); 
                        }

                        // парсим браузер и ОС
                        $result_parser = $parser_ua->parse($ip_data_method_url_ua[4] ?? '');

                        $data[] = [
                            $ip_data_method_url_ua[0] ?? '', 
                            $out_data_time,
                            $ip_data_method_url_ua[3] ?? '',
                            $result_parser->os->family, 
                            $result_parser->os->toVersion(),
                            $result_parser->ua->family,
                            $result_parser->ua->toVersion(),
                            isset($architecture[0]) ? 1 : 0,
                            $ip_data_method_url_ua[4] ?? ''
                        ];
                        if ($count++ % 1000 == 0) {
                            echo ".";
                        }
                    }
                }
                try{
                    echo "\nВыполняется обработка запроса";
                    Yii::$app->db->createCommand()->batchInsert('log_analysis', ['ip', 'data_time', 'url', 'user_agent_os', 'user_agent_os_version', 'user_agent_browser', 'user_agent_browser_version', 'user_agent_cpu_x64', 'user_agent_origin'], $data)->execute();
                    echo "\nДобавлено: {$count} зап.";
                } catch (\Exception $e){
                    echo "\nОшибка при добавлении в базу";
                }
            }
        }
        return ExitCode::OK;
    }
}
