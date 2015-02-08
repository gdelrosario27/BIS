<?php

class m130609_150312_create_resident_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_resident',array(
					'resid'		=>	'pk',
					'surname'	=>	'varchar(100)',
					'firstname'	=>	'varchar(100)',
					'middlename'=>	'varchar(100)',
					'extension'	=>	'varchar(20)',
					'dateOfBirth'=>	'datetime',
					'birthplace'=>	'varchar(100)',
					'sex'		=>	'varchar(6)',
					'civilStatus'=>	'varchar(45)',
					'citizenship'=>	'varchar(45)',
					'height'	=>	'int',
					'weight'	=>	'int',
					'bloodType'	=>	'varchar(3)',
					'PagibigNo'	=>	'varchar(50)',
					'telephoneNumber'	=>	'varchar(50)',
					'mobileNumber'	=>	'varchar(50)',
					'emailAddress'	=>	'varchar(50)',
					'TINNo'	=>	'varchar(50)',
					'ElemGrad'	=>	'varchar(50)',
					'HighSchoolGrad'	=>	'varchar(50)',
					'CollegeGrad'	=>	'varchar(50)',
					'CurrentStatus'	=>	'varchar(50)',
			));
	}

	public function down()
	{
		$this->dropTable('tbl_resident');
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