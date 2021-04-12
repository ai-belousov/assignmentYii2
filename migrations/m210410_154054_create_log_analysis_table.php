<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%log_analysis}}`.
 */
class m210410_154054_create_log_analysis_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {   
        $this->createTable('{{%log_analysis}}', [
            'id' => Schema::TYPE_PK,
            'ip' => Schema::TYPE_STRING,
            'data_time' => Schema::TYPE_DATETIME,
            'url' => Schema::TYPE_TEXT,
            'user_agent_os' => Schema::TYPE_STRING,
            'user_agent_os_version' => Schema::TYPE_STRING,
            'user_agent_browser' => Schema::TYPE_STRING,
            'user_agent_browser_version' => Schema::TYPE_STRING,
            'user_agent_cpu_x64' => Schema::TYPE_BOOLEAN,
            'user_agent_origin' => Schema::TYPE_TEXT,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%log_analysis}}');
    }
}
