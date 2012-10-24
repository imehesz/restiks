<?php
/* @var $this ScoreController */
/* @var $model Score */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'score-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ik_id'); ?>
		<?php echo $form->textField($model,'ik_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ik_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_id'); ?>
		<?php echo $form->textField($model,'d_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'d_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score'); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scoredate'); ?>
		<?php echo $form->textField($model,'scoredate',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'scoredate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->