<?php

/**
 * This is the model class for table "mother_details".
 */
class MotherDetails extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'mother_details':
	 * @var string $hp_id
	 * @var integer $id
	 * @var string $name
	 * @var string $husband_name
	 * @var integer $phone
	 * @var string $dob
	 * @var string $jsy_beneficiary
	 * @var string $caste
	 * @var string $address
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return MotherDetails the static model class
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
		return 'mother_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hp_id', 'required'),
			array('phone', 'numerical', 'integerOnly'=>true),
			array('hp_id, caste', 'length', 'max'=>10),
			array('name, husband_name', 'length', 'max'=>20),
			array('jsy_beneficiary', 'length', 'max'=>1),
			array('address', 'length', 'max'=>50),
			array('dob', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('hp_id, id, name, husband_name, phone, dob, jsy_beneficiary, caste, address', 'safe', 'on'=>'search'),
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
			'hp' => array(self::BELONGS_TO, 'HealthProvider', 'hp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'hp_id' => 'Hp',
			'id' => 'ID',
			'name' => 'Name',
			'husband_name' => 'Husband Name',
			'phone' => 'Phone',
			'dob' => 'Dob',
			'jsy_beneficiary' => 'Jsy Beneficiary',
			'caste' => 'Caste',
			'address' => 'Address',
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

		$criteria->compare('hp_id',$this->hp_id,true);

		$criteria->compare('id',$this->id);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('husband_name',$this->husband_name,true);

		$criteria->compare('phone',$this->phone);

		$criteria->compare('dob',$this->dob,true);

		$criteria->compare('jsy_beneficiary',$this->jsy_beneficiary,true);

		$criteria->compare('caste',$this->caste,true);

		$criteria->compare('address',$this->address,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

	public function getJSYOptions(){
		return array(
			'Y'=>'Yes',
			'N'=>'No',
		);
	}

}
