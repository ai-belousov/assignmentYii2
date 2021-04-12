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
            'dataTime' => Schema::TYPE_DATETIME,
            'url' => Schema::TYPE_TEXT,
            'uaOs' => Schema::TYPE_STRING,
            'uaOsVersion' => Schema::TYPE_STRING,
            'uaBrowser' => Schema::TYPE_STRING,
            'uaBrowserVersion' => Schema::TYPE_STRING,
            'uaCPUx64' => Schema::TYPE_BOOLEAN,
            'uaOrigin' => Schema::TYPE_TEXT,
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
