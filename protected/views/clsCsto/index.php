<?php
/* @var $this ClsCstoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clase Costo',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Clases de Costo</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
