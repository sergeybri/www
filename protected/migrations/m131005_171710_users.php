<?php

class m131005_171710_users extends CDbMigration
{
	public function up()
	{
        $this->createTable('users',array(
            'id' => 'pk',
            'nickname' => 'varchar(20) NOT NULL',
            'password' => 'varchar(50) NOT NULL',
            'firstname'=>'varchar(50) NOT NULL',
            'lastname'=>'varchar(50) NOT NULL',
            'sex'=>'tinyint COMMENT "0-mail, 1-female"',
            'country'=>'int',
            'city'=>'varchar(50)',
            'dateofbirth'=>'datetime',
            'height'=>'varchar(50)',
            'religion'=>'varchar(50)',
            'maritalstatus'=>'varchar(100)',
            'occupation'=>'varchar(100)',
            'education'=>'varchar(200)',
            'smoker'=>'tinyint COMMENT "0-no, 1-yes"',
            'description'=>'varchar(600)',
            'email'=>'varchar(20)',
            'lookingforanagerange'=>'varchar(20)',
            'idealmatchdescription'=>'varchar(600)',
            'photo'=>'int(11)',
            'delete_denied' => 'tinyint',
            'deleted' => 'tinyint DEFAULT 0',
        ));
	}

	public function down()
	{
        $this->dropTable('users');
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