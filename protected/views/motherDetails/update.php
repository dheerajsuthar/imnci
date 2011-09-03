<?php
$this->breadcrumbs=array(
	'Mother Details'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MotherDetails', 'url'=>array('index')),
	array('label'=>'Create MotherDetails', 'url'=>array('create')),
	array('label'=>'View MotherDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MotherDetails', 'url'=>array('admin')),
);
?>

<h1>Update MotherDetails <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>