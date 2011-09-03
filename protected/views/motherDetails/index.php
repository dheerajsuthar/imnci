<?php
$this->breadcrumbs=array(
	'Mother Details',
);

$this->menu=array(
	array('label'=>'Create MotherDetails', 'url'=>array('create','pid'=>'101')),
	array('label'=>'Manage MotherDetails', 'url'=>array('admin')),
);
?>

<h1>Mother Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
