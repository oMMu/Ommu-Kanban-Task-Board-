<?php
/**
 * Kanban Task History Pauses (kanban-task-history-pause)
 * @var $this HistorypauseController 
 * @var $model KanbanTaskHistoryPause
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
		'Kanban Task History Pauses'=>array('manage'),
		$model->pause_id=>array('view','id'=>$model->pause_id),
		'Update',
	);
?>

<div class="form">
	<?php echo $this->renderPartial('/o/history_pause/_form', array('model'=>$model)); ?>
</div>
