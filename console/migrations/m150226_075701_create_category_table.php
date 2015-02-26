<?php

use yii\db\Schema;
use yii\db\Migration;

class m150226_075701_create_category_table extends Migration
{
	public $tablePrefix;
    public $tableName;

    public function before()
    {
    	$this->tablePrefix = Yii::$app->getDb()->tablePrefix;
    	$this->tableName = $this->tablePrefix. 'category';
    }

    public function up()
    {
    	$this->before();

		$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=MyISAM';
        }

        $this->createTable($this->tableName, [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(255) NOT NULL',
        	'parent_id' => Schema::TYPE_INTEGER . ' UNSIGNED DEFAULT NULL',
        	'system' => Schema::TYPE_INTEGER . ' UNSIGNED NOT NULL DEFAULT 0',
        	'sort' => Schema::TYPE_INTEGER . ' UNSIGNED DEFAULT NULL',
        	'alias_id' => Schema::TYPE_INTEGER . ' UNSIGNED NOT NULL DEFAULT 0',
        	'parser_priority' => Schema::TYPE_INTEGER . ' UNSIGNED NOT NULL DEFAULT 0'
        ], $tableOptions);
    }

    public function down()
    {
        $this->before();
   	  	$this->dropTable($this->tableName);
    }
}
