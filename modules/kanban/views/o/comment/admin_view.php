<?php
/**
 * Kanban Task Comments (kanban-task-comment)
 * @var $this CommentController
 * @var $model KanbanTaskComment
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2013 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/Kanban-Task
 * @contact (+62)856-299-4114
 *
 */

$this->breadcrumbs=array(
	'Kanban Task Comments'=>array('manage'),
	$model->comment_id,
);
?>

<?php //begin.Messages ?>
<?php
if(Yii::app()->user->hasFlash('success'))
	echo Utility::flashSuccess(Yii::app()->user->getFlash('success'));
?>
<?php //end.Messages ?>

<?php $this->widget('application.components.system.FDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'comment_id',
		'publish',
		'task_id',
		'user_id',
		'comment',
		'creation_date',
	),
)); ?>

<div class="dialog-submit">
	<input id="closed" name="yt0" type="button" value="Cancel" /></div>
