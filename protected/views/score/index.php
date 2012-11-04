<?php
/* @var $this ScoreController */
/* @var $model Score */

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('score-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Scores</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'score-grid',
  'cssFile' => false,
  'enableSorting' => false,
  'itemsCssClass' => 'table table-striped',
	'dataProvider'=>$model->search(),
	'filter'=>null,
	'columns'=>array(
		'score',
		'username',
		array( 'name' => 'scoredate', 'value' => 'date( "M j, G:i a",strtotime($data->scoredate))' )
	),
)); ?>
