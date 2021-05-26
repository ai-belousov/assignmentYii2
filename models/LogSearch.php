<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;
use app\models\Log;
use Yii;

/**
 * LogAnalysisSearch represents the model behind the search form of `app\models\LogAnalysis`.
 */
class LogSearch extends Log
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cpu_x64'], 'integer'],
            [['ip', 'data', 'start_data', 'end_data','url', 'os', 'os_version', 'browser', 'browser_version', 'user_agent_origin'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'log_analysis';
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {

        $la_search = Log::find();

        $top_browser = Log::find()
            ->select([
                '*',
                'RANK() OVER(PARTITION by data_b ORDER BY count_b desc) rnk'
            ])
            ->from(
                $add = Log::find()
                    ->select(['data data_b', 'browser', 'count(browser) count_b'])
                    ->from($la_search)
                    ->groupBy(['data_b','browser'])
            );


        $top_url = Log::find()
            ->select([
                '*',
                'RANK() OVER(PARTITION by data ORDER BY count desc) rnk2'
            ])
            ->from(
                $add2 = Log::find()
                    ->select(['data data', 'count(1) count', 'url'])
                    ->from($la_search)
                    ->groupBy(['url','data'])
            );

        $query = Log::find()
            ->select(['*'])
            ->from([
                'browser' => $top_browser
            ])
            ->rightJoin(
                ['url' => $top_url],
                'url.data = browser.data_b'
            )
            ->where(['and',
                ['rnk'=>1],
                ['rnk2'=>1]
            ]);

        // add conditions that should always apply here
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'attributes' => [
                    'data',
                    'count',
                    'url',
                    'browser'
                ]
            ]
        ]);

        // $dataProvider->setSort([
        // 'attributes' => [
        //     'id',
        //     'fullName' => [
        //         'asc' => ['first_name' => SORT_ASC, 'last_name' => SORT_ASC],
        //         'desc' => ['first_name' => SORT_DESC, 'last_name' => SORT_DESC],
        //         'label' => 'Full Name',
        //         'default' => SORT_ASC
        //     ],
        //     'country_id'
        // ]
    // ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            return $dataProvider;
        }

        $la_search->andFilterWhere([
            // 'id' => $this->id,
            'data' => $this->data,
            'cpu_x64' => $this->cpu_x64,
            'os'=> $this->os,
        ]);
        // $top_browser->andFilterWhere([
        //     // 'id' => $this->id,
        //     'data' => $this->data,
        //     // 'cpu_x64' => $this->cpu_x64,
        //     // 'os_version'=> $this->os_version,
        // ]);
        // $pre_query_search->andFilterWhere(['like', 'url', $this->url]);
            // ->andFilterWhere(['like', 'os', $this->os])
            // ->andFilterWhere(['like', 'os_version', $this->os_version])
            // ->andFilterWhere(['like', 'browser', $this->browser])
            // ->andFilterWhere(['like', 'browser_version', $this->browser_version])
            // ->andFilterWhere(['like', 'user_agent_origin', $this->user_agent_origin]);
            // 
            // Запроса для задания
            // По оси X – даты, по оси Y – доля (% от числа запросов) для трех самых популярных браузеров
            // 
            // select t1.data, t1.browser, t1.count/t2.count*100 percent
            // from (
            //     SELECT *, RANK() OVER(PARTITION by data ORDER BY count desc) rnk
            //     FROM (
            //         select `data`, browser , count(browser) count
            //         from log_analysis
            //         group by `data` , browser
            //     ) main
            // ) t1
            // right join 
            // (
            //     select data, count(browser) count
            //     from log_analysis
            //     group by data
            // ) t2
            //     on t1.data = t2.data
            // WHERE rnk <= 3


        return $dataProvider;
    }
}
