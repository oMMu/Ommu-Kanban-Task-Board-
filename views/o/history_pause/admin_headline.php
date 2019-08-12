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
		'Headline',
	);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kanban-task-history-pause-form',
	'enableAjaxValidation'=>true,
)); ?>

	<div class="dialog-content">
        Are you sure you want to headline this item?
	</div>
	<div class="dialog-submit">
		<?php echo CHtml::submitButton('Headline', array('onclick' => 'setEnableSave()')); ?>
		<?php echo CHtml::button('Cancel', array('id'=>'closed')); ?>
	</div>
	
<?php $this->endWidget(); ?>
