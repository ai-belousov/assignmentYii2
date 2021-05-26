<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "log_analysis".
 *
 * @property int $id
 * @property string|null $ip
 * @property string|null $data_time
 * @property string|null $url
 * @property string|null $user_agent_os
 * @property string|null $user_agent_os_version
 * @property string|null $user_agent_browser
 * @property string|null $user_agent_browser_version
 * @property int|null $user_agent_cpu_x64
 * @property string|null $user_agent_origin
 */
class Log extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $count;
    public static function tableName()
    {
        return 'log_analysis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['from_date', 'to_date'], 'date'],
            [['url', 'user_agent_origin'], 'string'],
            [['cpu_x64'], 'integer'],
            [['ip', 'os', 'os_version', 'browser', 'browser_version'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
            'data' => 'Дата',
            'url' => 'Самый популярный Url',
            'os' => 'Операционная система',
            'os_version' => 'User Agent Os Version',
            'browser' => 'Самый популярный браузер',
            'browser_version' => 'User Agent Browser Version',
            'cpu_x64' => 'Архитектура',
            'user_agent_origin' => 'User Agent Origin',
            'count' => 'Количество запросов'
        ];
    }
}
