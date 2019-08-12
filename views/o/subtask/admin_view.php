<?php
/**
 * Kanban Task Subs (kanban-task-sub)
 * @var $this SubtaskController 
 * @var $model KanbanTaskSub 
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2013 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-kanban-task
 *
 */

$this->breadcrumbs=array(
	'Kanban Task Subs'=>array('manage'),
	$model->subtask_id,
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
		'subtask_id',
		'done_status',
		'task_id',
		'user_id',
		'subtask_name',
		'action_date',
		'action_by',
		'creation_date',
	),
)); ?>

<div class="dialog-submit">
	<input id="closed" name="yt0" type="button" value="Cancel" /></div>
