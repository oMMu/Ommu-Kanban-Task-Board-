<?php
/**
 * Kanban Tasks (kanban-tasks)
 * @var $this TaskController 
 * @var $model KanbanTasks 
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2013 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/Kanban-Task
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Kanban Tasks'=>array('manage'),
		$model->task_id=>array('view','id'=>$model->task_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>