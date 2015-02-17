<?php

use yii\db\Schema;
use yii\db\Migration;

class m150203_084457_insert_admin_user extends Migration
{
    public $tablePrefix;
    public $tableName;

    public function before()
    {
        $this->tablePrefix = Yii::$app->getDb()->tablePrefix;
        $this->tableName = $this->tablePrefix. 'user';
    }

    public function up()
    {
        $this->before();

    	$strSQL = 'INSERT INTO '.$this->tableName.' 
    					(`username`,
						 `auth_key`,
						 `password_hash`,
						 `password_reset_token`,
						 `email`,
						 `role`,
						 `status`,
						 `created_at`,
						 `updated_at`
    					) 
					VALUES (
    					"admin", 
    					"njJmAz0bdbvTdhQ0JgCtJj6ErReAGxxS", 
    					"$2y$13$ULgEY7sPCbiRUpemGsMnO.4UdAviq0aV0tx2F0X2XP8IwhO8v5.zW", 
    					null, 
    					"admin@admin.ru", 
    					"10", 
    					"10", 
    					"1422947639", 
    					"1422947639")';
			
    	$this->execute($strSQL);
    }

    public function down()
    {
        $this->before();

    	if($this->execute("DELETE FROM ".$this->tableName."  WHERE username = 'admin'") == 0)
	        return true;
	    else
	    	return true;
    }
}
