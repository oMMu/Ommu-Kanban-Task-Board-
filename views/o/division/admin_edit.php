<?php
/**
 * Kanban User Divisions (kanban-user-division)
 * @var $this DivisionController 
 * @var $model KanbanUserDivision
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2013 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu-kanban-task
 *
 */

	$this->breadcrumbs=array(
		'Kanban User Divisions'=>array('manage'),
		$model->name=>array('view','id'=>$model->division_id),
		'Update',
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>