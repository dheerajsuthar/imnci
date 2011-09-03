<?php
$this->breadcrumbs=array(
	'Mother Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MotherDetails', 'url'=>array('index')),
	array('label'=>'Manage MotherDetails', 'url'=>array('admin')),
);
?>

<h1>Create MotherDetails</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>