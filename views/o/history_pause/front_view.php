<?php
/**
 * Kanban Task History Pauses (kanban-task-history-pause)
 * @var $this HistorypauseController 
 * @var $model KanbanTaskHistoryPause
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2013 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-kanban-task
 *
 */

	$this->breadcrumbs=array(
		'Kanban Task History Pauses'=>array('manage'),
		$model->pause_id,
	);
?>

<?php //begin.Messages ?>
<?php
if(Yii::app()->user->hasFlash('success'))
	echo $this->flashMessage(Yii::app()->user->getFlash('success'), 'success');
?>
<?php //end.Messages ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pause_id',
		'task_id',
		'pause_date',
		'pause_condition',
		'unpause_date',
	),
)); ?>

<div class="dialog-content">
</div>
<div class="dialog-submit">
	<?php echo CHtml::button('Close', array('id'=>'closed')); ?>
</div>
