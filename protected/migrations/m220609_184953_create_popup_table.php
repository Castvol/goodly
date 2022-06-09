<?php

class m220609_184953_create_popup_table extends CDbMigration
{
	public function up()
	{
        $this->createTable('popup', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
            'show' => 'integer(1) unsigned NOT NULL DEFAULT 1',
            'views' => 'integer unsigned NOT NULL DEFAULT 0',
        ));
	}

	public function down()
	{

        $this->dropTable('popup');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}