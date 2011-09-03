<?php
$this->breadcrumbs=array(
	'Mother Details'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MotherDetails', 'url'=>array('index')),
	array('label'=>'Create MotherDetails', 'url'=>array('create')),
	array('label'=>'Update MotherDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MotherDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MotherDetails', 'url'=>array('admin')),
);
?>

<h1>View MotherDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'hp_id',
		'id',
		'name',
		'husband_name',
		'phone',
		'dob',
		'jsy_beneficiary',
		'caste',
		'address',
	),
)); ?>
