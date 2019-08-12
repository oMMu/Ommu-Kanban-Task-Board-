<?php
/**
 * Kanban User Divisions (kanban-user-division)
 * @var $this DivisionController 
 * @var $model KanbanUserDivision
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2013 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-kanban-task
 *
 */

	$this->breadcrumbs=array(
		'Kanban User Divisions'=>array('manage'),
		Yii::t('phrase', 'Create'),
	);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>