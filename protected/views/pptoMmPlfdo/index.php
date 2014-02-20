<?php
/* @var $this PptoMmPlfdoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ppto Mm Plfdos',
);

$this->menu=array(
	array('label'=>'Create PptoMmPlfdo', 'url'=>array('create')),
	array('label'=>'Manage PptoMmPlfdo', 'url'=>array('admin')),
);
?>

<h1>Ppto Mm Plfdos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
