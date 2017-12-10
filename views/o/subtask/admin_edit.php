<?php
/**
 * Kanban Task Subs (kanban-task-sub)
 * @var $this SubtaskController 
 * @var $model KanbanTaskSub 
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2013 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu-kanban-task
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Kanban Task Subs'=>array('manage'),
		$model->subtask_id=>array('view','id'=>$model->subtask_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>