<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_center_name')); ?>:</b>
	<?php echo CHtml::encode($data->sub_center_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anm_name')); ?>:</b>
	<?php echo CHtml::encode($data->anm_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anm_number')); ?>:</b>
	<?php echo CHtml::encode($data->anm_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asso_asha_name')); ?>:</b>
	<?php echo CHtml::encode($data->asso_asha_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asha_number')); ?>:</b>
	<?php echo CHtml::encode($data->asha_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facility')); ?>:</b>
	<?php echo CHtml::encode($data->facility); ?>
	<br />


</div>