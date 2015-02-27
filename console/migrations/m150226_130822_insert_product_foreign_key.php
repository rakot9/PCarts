<?php

use yii\db\Schema;
use yii\db\Migration;

class m150226_130822_insert_product_foreign_key extends Migration
{
    public $tablePrefix;
    public $tableName;

    public function before()
    {
        $this->tablePrefix = Yii::$app->getDb()->tablePrefix;
        $this->tableName = $this->tablePrefix. 'product';
    }

    public function up()
    {
        $this->before();

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->addForeignKey('fk_description', $this->tableName, 'product_description_id', $this->tablePrefix.'product_description', 'description_id');//, 'CASCADE', 'CASCADE'
    }

    public function down()
    {
        $this->before();
        $this->dropForeignKey('fk_description', $this->tableName);
        $this->dropTable($this->tableName);
    }
}
