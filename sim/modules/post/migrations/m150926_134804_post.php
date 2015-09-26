<?php

use yii\db\Schema;
use yii\db\Migration;

class m150926_134804_post extends Migration
{
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(11),
            'name' => $this->string(255)->notNull(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->string(255),
            'body' => $this->text(),
            'creator' => $this->integer(11)->notNull(),
            'status' => $this->string(255)->notNull(),
            'slug' => $this->string(255)->notNull(),
            'publishedTime' => $this->integer(11)->notNull(),
            'featuredImage' => $this->integer(11),
            'type' => $this->string(255)->notNull(),
            'visibility' => $this->string(255)->notNull(),
            'password' => $this->string(255)->notNull(),
            'metaData' => $this->text(),
            'note' => $this->text(),
            'createdBy' => $this->integer(11)->notNull(),
            'createdTime' => $this->integer(11)->notNull(),
            'updatedBy' => $this->integer(11)->notNull(),
            'updatedTime' => $this->integer(11)->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('post');

        return false;
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
