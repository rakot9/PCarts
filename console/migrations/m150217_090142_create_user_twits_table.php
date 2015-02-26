<?php

use yii\db\Schema;
use yii\db\Migration;

class m150217_090142_create_user_twits_table extends Migration
{
	public $tablePrefix;
    public $tableName;

    public function before()
    {
    	$this->tablePrefix = Yii::$app->getDb()->tablePrefix;
    	$this->tableName = $this->tablePrefix. 'user_twits';
    }

    public function up()
    {
    	$this->before();

		$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'id' => Schema::TYPE_PK,
            'id_user' => Schema::TYPE_INTEGER . ' NOT NULL',
            'twit_title' => Schema::TYPE_STRING . '(32) NOT NULL',
            'twit_comment' => Schema::TYPE_STRING . ' NOT NULL',
            'twit_created_at' => Schema::TYPE_INTEGER . ' UNSIGNED NOT NULL',
            'twit_published_at' => Schema::TYPE_INTEGER . ' UNSIGNED',
            'twit_updated_at' => Schema::TYPE_INTEGER . ' UNSIGNED',
            'twit_is_show' => Schema::TYPE_SMALLINT . ' UNSIGNED NOT NULL DEFAULT 1',
        	'twit_type_alert' => Schema::TYPE_SMALLINT . ' UNSIGNED'

        ], $tableOptions);

        $this->createIndex('twit_id', $this->tableName , 'id', true);
        $this->addForeignKey('fk_user', $this->tableName, 'id_user', $this->tablePrefix.'user', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
    	$this->before();
    	$this->dropForeignKey('fk_user', $this->tableName);
      	$this->dropIndex('twit_id', $this->tableName);
   	  	$this->dropTable($this->tableName);
    }
}
