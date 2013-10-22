<?php

class m131005_190450_files extends CDbMigration
{
	public function up()
	{
        $this->createTable('files',array(
            'id' => 'pk',
            'path' => 'varchar(50) NOT NULL',
            'type' => 'int NOT NULL COMMENT "1-картинка, 2-видео"',
            'delete_denied' => 'tinyint',
            'deleted' => 'tinyint DEFAULT 0'
        ));
	}

	public function down()
	{
        $this->dropTable('files');
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