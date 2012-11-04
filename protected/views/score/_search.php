<?php
/* @var $this ScoreController */
/* @var $model Score */
/* @var $form CActiveForm */
?>

<div>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100, 'placeholder' => 'username' )); ?>
		<?php echo CHtml::submitButton('Search', array( 'class' => 'btn', 'style' => 'margin-top:-10px;' ) ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
