<?php

use yii\db\Schema;
use yii\db\Migration;

class m150226_123316_create_product_table extends Migration
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
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=MyISAM';
        }

        $this->createTable($this->tableName, [
            'product_id' => Schema::TYPE_PK,
            'product_name' => Schema::TYPE_STRING . '(255) NOT NULL',
            'product_model' => Schema::TYPE_STRING . '(255) NOT NULL',
            'product_mf_id' => Schema::TYPE_INTEGER .' UNSIGNED NOT NULL DEFAULT 0',
            'product_total_photos' => Schema::TYPE_INTEGER .' UNSIGNED NOT NULL DEFAULT 0',
            'product_category_id' => Schema::TYPE_INTEGER .' UNSIGNED NOT NULL',
            'product_description_id' => Schema::TYPE_INTEGER .' UNSIGNED DEFAULT NULL',
            'product_occurrence_time' => Schema::TYPE_TIMESTAMP . ' DEFAULT NOW()'
        ], $tableOptions);

        $this->addForeignKey('fk_description', $this->tableName, 'product_description_id', $this->tablePrefix.'description', 'description_id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->before();
        $this->dropForeignKey('fk_description', $this->tableName);
        $this->dropTable($this->tableName);
    }
}
