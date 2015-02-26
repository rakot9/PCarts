<?php

use yii\db\Schema;
use yii\db\Migration;

class m150226_130821_create_description_table extends Migration
{
    public $tablePrefix;
    public $tableName;

    public function before()
    {
        $this->tablePrefix = Yii::$app->getDb()->tablePrefix;
        $this->tableName = $this->tablePrefix. 'product_description';
    }

    public function up()
    {
        $this->before();

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=MyISAM';
        }

        $this->createTable($this->tableName, [
            'description_id' => Schema::TYPE_PK,
            'description' => Schema::TYPE_TEXT . '(255) NOT NULL'
        ], $tableOptions);
    }

    public function down()
    {
        $this->before();
        $this->dropTable($this->tableName);
    }
}
