<?php

use yii\db\Schema;

class m140527_084418_auto_number extends \yii\db\Migration
{

    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%auto_number}}', [
            'group' => Schema::TYPE_STRING . '(32) NOT NULL',
            'number' => Schema::TYPE_INTEGER,
            'optimistic_lock' => Schema::TYPE_INTEGER,
            'update_time' => Schema::TYPE_INTEGER,
            'PRIMARY KEY ([[group]])'
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%auto_number}}');
    }
}