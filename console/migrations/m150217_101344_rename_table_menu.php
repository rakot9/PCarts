<?php

use yii\db\Schema;
use yii\db\Migration;

class m150217_101344_rename_table_menu extends Migration
{
	public $tablePrefix;
    public $tableName;

    public function before()
    {
    	$this->tablePrefix = Yii::$app->getDb()->tablePrefix;
    	$this->tableName = $this->tablePrefix. 'menu';
    }

    public function up()
    {
    	$this->before();
    	$strSQL = "CREATE TABLE ". $this->tableName ." LIKE menu";
    	$this->execute($strSQL);
    	$strSQL = "INSERT INTO ". $this->tableName ." SELECT * FROM menu";
    	$this->execute($strSQL);
    	$strSQL = "DROP TABLE IF EXISTS menu ";
    	$this->execute($strSQL);
    }

    public function down()
    {
        $this->before();
        $strSQL = "CREATE TABLE menu LIKE " . $this->tableName;
    	$this->execute($strSQL);
    	$strSQL = "INSERT INTO menu SELECT * FROM " . $this->tableName;
    	$this->execute($strSQL);
    	$strSQL = "DROP TABLE  IF EXISTS " .$this->tableName;
    	$this->execute($strSQL);
    }
}
