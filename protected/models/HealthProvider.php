<?php

/**
 * This is the model class for table "health_provider".
 */
class HealthProvider extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'health_provider':
	 * @var string $id
	 * @var string $sub_center_name
	 * @var string $anm_name
	 * @var integer $anm_number
	 * @var string $asso_asha_name
	 * @var integer $asha_number
	 * @var string $facility
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return HealthProvider the static model class
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
		return 'health_provider';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
//			array('id', 'required'),
			array('anm_number, asha_number', 'numerical', 'integerOnly'=>true),
			array('id, facility', 'length', 'max'=>10),
			array('sub_center_name, anm_name, asso_asha_name', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sub_center_name, anm_name, anm_number, asso_asha_name, asha_number, facility', 'safe', 'on'=>'search'),
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
			'motherDetails' => array(self::HAS_MANY, 'MotherDetails', 'hp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sub_center_name' => 'Sub Center Name',
			'anm_name' => 'Anm Name',
			'anm_number' => 'Anm Number',
			'asso_asha_name' => 'Asso Asha Name',
			'asha_number' => 'Asha Number',
			'facility' => 'Facility',
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

		$criteria->compare('id',$this->id,true);

		$criteria->compare('sub_center_name',$this->sub_center_name,true);

		$criteria->compare('anm_name',$this->anm_name,true);

		$criteria->compare('anm_number',$this->anm_number);

		$criteria->compare('asso_asha_name',$this->asso_asha_name,true);

		$criteria->compare('asha_number',$this->asha_number);

		$criteria->compare('facility',$this->facility,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
