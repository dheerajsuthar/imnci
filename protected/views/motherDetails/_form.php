<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mother-details-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hp_id'); ?>
		<?php echo $form->textField($model,'hp_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'husband_name'); ?>
		<?php echo $form->textField($model,'husband_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'husband_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
		<?php echo $form->textField($model,'dob'); ?>
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jsy_beneficiary'); ?>
		<?php echo $form->dropDownList($model,'jsy_beneficiary',$model->getJSYOptions()); ?>
		<?php echo $form->error($model,'jsy_beneficiary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caste'); ?>
		<?php echo $form->textField($model,'caste',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'caste'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
