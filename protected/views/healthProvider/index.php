<?php
$this->breadcrumbs=array(
	'Health Providers',
);

$this->menu=array(
	array('label'=>'Create HealthProvider', 'url'=>array('create')),
	array('label'=>'Manage HealthProvider', 'url'=>array('admin')),
);
?>

<h1>Health Providers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
