<?php

/**
 * This is the model class for table "tbl_keeper".
 *
 * The followings are the available columns in table 'tbl_keeper':
 * @property integer $keeper_id
 * @property string $keeper_name
 * @property string $keeper_description
 * @property string $keeper_birthday
 */
class MdlKeeper extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MdlKeeper the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_keeper';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('keeper_name', 'length', 'max'=>50),
			array('keeper_description', 'length', 'max'=>80),
			array('keeper_birthday', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('keeper_id, keeper_name, keeper_description, keeper_birthday', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'keeper_id' => 'Keeper',
			'keeper_name' => 'Keeper Name',
			'keeper_description' => 'Keeper Description',
			'keeper_birthday' => 'Keeper Birthday',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('keeper_id',$this->keeper_id);

		$criteria->compare('keeper_name',$this->keeper_name,true);

		$criteria->compare('keeper_description',$this->keeper_description,true);

		$criteria->compare('keeper_birthday',$this->keeper_birthday,true);

		return new CActiveDataProvider('MdlKeeper', array(
			'criteria'=>$criteria,
		));
	}
}