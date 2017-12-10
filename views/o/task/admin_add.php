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
 * @link https://github.com/ommu/ommu-kanban-task
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Kanban Tasks'=>array('manage'),
		'Create',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>