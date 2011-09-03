<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'health-provider-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_center_name'); ?>
		<?php echo $form->textField($model,'sub_center_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'sub_center_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anm_name'); ?>
		<?php echo $form->textField($model,'anm_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'anm_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anm_number'); ?>
		<?php echo $form->textField($model,'anm_number'); ?>
		<?php echo $form->error($model,'anm_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asso_asha_name'); ?>
		<?php echo $form->textField($model,'asso_asha_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'asso_asha_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asha_number'); ?>
		<?php echo $form->textField($model,'asha_number'); ?>
		<?php echo $form->error($model,'asha_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facility'); ?>
		<?php echo $form->textField($model,'facility',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'facility'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
