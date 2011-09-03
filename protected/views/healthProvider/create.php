<?php
$this->breadcrumbs=array(
	'Health Providers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HealthProvider', 'url'=>array('index')),
	array('label'=>'Manage HealthProvider', 'url'=>array('admin')),
);
?>

<h1>Create HealthProvider</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>