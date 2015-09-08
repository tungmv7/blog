<?php

use yii\db\Schema;
use yii\db\Migration;

class m150908_092745_create_module_schema extends Migration
{
    public function up()
    {
        $this->createTable('module', [
            'id' => $this->primaryKey(11),
            'uniqueId' => $this->string(255)->notNull(),
            'isCoreModule' => $this->boolean()->notNull(),
            'status' => $this->integer(2)->notNull(),
            'createdBy' => $this->integer(11)->notNull(),
            'createdTime' => $this->integer(11)->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('module');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
