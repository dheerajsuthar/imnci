<?php
class MotherDetailsTest extends CDbTestCase{
	public $fixtures=array(
		'mother_details'=>'MotherDetails',
		);
/*	public function testCRUD(){
		$newMD = new MotherDetails;
		$newMDName = 'shobha';
		$newMD->setAttributes(
			array(
				'id'=>3,
				'name'=>$newMDName,
				'husband_name'=>'Munna',
				'phone'=>433335,
				'dob'=>'2010-01-01 00:00:00',
				'jsy_beneficiary'=>'Y',
				'caste'=>'banh',
				'address'=>'84 1K'
			)
		);
	
	$this->assertTrue($newMD->save(false));
		$retrievedMD = MotherDetails::model()->findByPk($newMD->id);
		$this->assertTrue($retrievedMD instanceof MotherDetails);
		$this->assertEquals($newMDName,$retrievedMD->name);
	}
*/
	public function testCreate(){
		$newMD = new MotherDetails;
		$newMDName = 'sushma';
		$newMD->setAttributes(
			array(
				'id'=>3,
				'name'=>$newMDName,
				'husband_name'=>'Munna',
				'phone'=>433335,
				'dob'=>'2010-01-01 00:00:00',
				'jsy_beneficiary'=>'Y',
				'caste'=>'banh',
				'address'=>'84 1K'
			)
		);

	}
}
?>
