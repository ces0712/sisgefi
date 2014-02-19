<?php
/* @var $this PlanCpraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plan Cpras',
);

$this->menu=array(
	array('label'=>'Create PlanCpra', 'url'=>array('create')),
	array('label'=>'Manage PlanCpra', 'url'=>array('admin')),
);
?>

<h1>Plan Cpras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
