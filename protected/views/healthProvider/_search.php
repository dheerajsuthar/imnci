<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sub_center_name'); ?>
		<?php echo $form->textField($model,'sub_center_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anm_name'); ?>
		<?php echo $form->textField($model,'anm_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anm_number'); ?>
		<?php echo $form->textField($model,'anm_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asso_asha_name'); ?>
		<?php echo $form->textField($model,'asso_asha_name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asha_number'); ?>
		<?php echo $form->textField($model,'asha_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'facility'); ?>
		<?php echo $form->textField($model,'facility',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->