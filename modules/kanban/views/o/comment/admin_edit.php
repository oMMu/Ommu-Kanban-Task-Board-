<?php
/**
 * Kanban Task Comments (kanban-task-comment)
 * @var $this CommentController
 * @var $model KanbanTaskComment 
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
		'Kanban Task Comments'=>array('manage'),
		$model->comment_id=>array('view','id'=>$model->comment_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>