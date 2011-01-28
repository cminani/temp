<?php

/**
 * This is the model class for table "LabActivity".
 *
 * The followings are the available columns in table 'LabActivity':
 * @property integer $activity_id
 * @property string $name
 * @property string $date
 * @property string $start_time
 * @property string $end_time
 * @property string $description
 */
class Lab_Activity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Lab_Activity the static model class
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
		return 'LabActivity';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, date, start_time, end_time, description', 'required'),
			array('name, description', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('activity_id, name, date, start_time, end_time, description', 'safe', 'on'=>'search'),
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
			'activity_id' => 'Activity',
			'name' => 'Name',
			'date' => 'Date',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'description' => 'Description',
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

		$criteria->compare('activity_id',$this->activity_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('date',$this->date,true);
		

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}