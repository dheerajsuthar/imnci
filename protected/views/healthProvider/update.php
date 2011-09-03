<?php
$this->breadcrumbs=array(
	'Health Providers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HealthProvider', 'url'=>array('index')),
	array('label'=>'Create HealthProvider', 'url'=>array('create')),
	array('label'=>'View HealthProvider', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HealthProvider', 'url'=>array('admin')),
);
?>

<h1>Update HealthProvider <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>