<?php
$this->breadcrumbs=array(
	'Health Providers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HealthProvider', 'url'=>array('index')),
	array('label'=>'Create HealthProvider', 'url'=>array('create')),
	array('label'=>'Update HealthProvider', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HealthProvider', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HealthProvider', 'url'=>array('admin')),
	array('label'=>'Create Mother Details','url'=>array('motherDetails/create','pid'=>$model->hp_id)),
);
?>

<h1>View HealthProvider #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sub_center_name',
		'anm_name',
		'anm_number',
		'asso_asha_name',
		'asha_number',
		'facility',
	),
)); ?>
