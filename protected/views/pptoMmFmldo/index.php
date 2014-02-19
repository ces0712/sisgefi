<?php
/* @var $this PptoMmFmldoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ppto Mm Fmldos',
);

$this->menu=array(
	array('label'=>'Create PptoMmFmldo', 'url'=>array('create')),
	array('label'=>'Manage PptoMmFmldo', 'url'=>array('admin')),
);
?>

<h1>Ppto Mm Fmldos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
