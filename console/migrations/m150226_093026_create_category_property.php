<?php

use yii\db\Schema;
use yii\db\Migration;

class m150226_093026_create_category_property extends Migration
{
    public $tablePrefix;
    public $tableName;

    public function before()
    {
    	$this->tablePrefix = Yii::$app->getDb()->tablePrefix;
    	$this->tableName = $this->tablePrefix. 'category_property';
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
            'property_id' => Schema::TYPE_PK,
            'category_id' => Schema::TYPE_INTEGER .' UNSIGNED NOT NULL',
            'property_parent_id' => Schema::TYPE_INTEGER . ' UNSIGNED DEFAULT NULL',
            'property_type' => "enum('str','int','moreof','oneof','bool') NOT NULL DEFAULT 'str'",
            'property_name' => Schema::TYPE_STRING . '(255) NOT NULL',
            'property_unit' => Schema::TYPE_STRING . '(20) NOT NULL',
            'property_ord' => Schema::TYPE_INTEGER .' UNSIGNED NOT NULL',
            'is_prop_group' => Schema::TYPE_INTEGER .' UNSIGNED NOT NULL DEFAULT 0',
            'select_value' => Schema::TYPE_TEXT            
        ], $tableOptions);
    }

    public function down()
    {
        $this->before();
   	  	$this->dropTable($this->tableName);
    }
}
