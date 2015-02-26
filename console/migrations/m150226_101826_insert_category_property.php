<?php

use yii\db\Schema;
use yii\db\Migration;

class m150226_101826_insert_category_property extends Migration
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

    	$db = new PDO(Yii::$app->db->dsn , Yii::$app->db->username, Yii::$app->db->password);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);

		if($sql = file_get_contents('console/migrations/tbl_category_property.sql'))
		{
			try {
			    $db->exec($sql);
			}
			catch (PDOException $e)
			{
			    echo $e->getMessage();
			    die();
			}
		}

    }

    public function down()
    {
        $this->before();
        $this->trunkateTable($this->tableName);
    }
}
