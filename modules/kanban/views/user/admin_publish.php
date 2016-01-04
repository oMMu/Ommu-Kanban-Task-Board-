<?php
/**
 * Kanban Users (kanban-users)
 * @var $this UserController * @var $model KanbanUsers * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

$this->breadcrumbs=array(
	'Kanban Users'=>array('manage'),
	'Status',
);
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'kanban-users-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

	<div class="dialog-content">
		<?php echo $model->status == 1 ? Phrase::trans(280,0) : Phrase::trans(279,0)?>
	</div>
	<div class="dialog-submit">
		<?php echo CHtml::submitButton($title, array('onclick' => 'setEnableSave()')); ?>
		<?php echo CHtml::button(Phrase::trans(174,0), array('id'=>'closed')); ?>
	</div>
	
<?php $this->endWidget(); ?>
