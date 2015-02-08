<?php

class m130602_142516_default_real_user extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_user',array(
			'id' => 'pk',
			'username' => 'varchar(50) NOT NULL',
			'password' => 'varchar(80) NOT NULL',
			'email'=>'varchar(50) NOT NULL'
			)
		);
		$this->insert('tbl_user',array(
			'username' => 'admin',
			'password' => md5('password'),
			'email' => "awesome@gmail.com",
			));
	}

	public function down()
	{
		$this->dropTable('tbl_user');
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