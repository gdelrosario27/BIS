<?php

class m130605_185708_create_keeper_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_keeper', array(
			'keeper_id' => 'pk',
			'keeper_name' => 'varchar(50)',
			'keeper_description' => 'varchar(80)',
			'keeper_birthday' => 'datetime',
			)
		);
		$this->insert('tbl_keeper',array(
			'keeper_name' => 'Juan Pablo Ramil',
			'keeper_description' => 'White guy with yellow dangling Eyes',
			'keeper_birthday' => '01-01-01 01:01'
			));
		$this->insert('tbl_keeper',array(
			'keeper_name' => 'Juanita Pelaez',
			'keeper_description' => 'Black Guy. You know',
			'keeper_birthday' => '01-01-01 01:01'
			));
	}

	public function down()
	{
        $this->dropTable('tbl_keeper');
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