<?php
/* @var $this ClsCstoController */
/* @var $model ClsCsto */

$this->breadcrumbs=array(
	'Clase Costo'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestion', 'url'=>array('admin')),
);
?>

<h1>Crear Clase de Costo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>