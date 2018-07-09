<?php
/**
 * Kanban Tasks (kanban-tasks)
 * @var $this TaskController 
 * @var $model KanbanTasks 
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2013 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-kanban-task
 *
 */

$this->breadcrumbs=array(
	'Kanban Tasks'=>array('manage'),
	$model->task_id,
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
		'task_id',
		'publish',
		'project_id',
		'cat_id',
		'division_id',
		'user_id',
		'number',
		'current_action',
		'task_name',
		'task_desc',
		'priority',
		'due_date',
		'reschedule_date',
		'overtime',
		'overtime_date',
		'task_status',
		'progress_date',
		'progress_by',
		'done_date',
		'done_by',
		'tested_date',
		'tested_by',
		'tested_status',
		'tested_verified',
		'subtask',
		'subtask_done',
		'comment',
		'creation_date',
		'creation_by',
		'updated_date',
		'updated_by',
	),
)); ?>

<div class="dialog-submit">
	<input id="closed" name="yt0" type="button" value="Cancel" /></div>
