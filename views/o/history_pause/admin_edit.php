<?php
/**
 * Kanban Task History Pauses (kanban-task-history-pause)
 * @var $this HistorypauseController 
 * @var $model KanbanTaskHistoryPause
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2013 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-kanban-task
 *
 */

	$this->breadcrumbs=array(
		'Kanban Task History Pauses'=>array('manage'),
		$model->pause_id=>array('view','id'=>$model->pause_id),
		Yii::t('phrase', 'Update'),
	);
?>

<div class="form">
	<?php echo $this->renderPartial('/o/history_pause/_form', array('model'=>$model)); ?>
</div>
