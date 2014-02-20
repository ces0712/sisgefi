<?php
/* @var $this UndMddaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unidad de Medida',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Unidad de Medida</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
