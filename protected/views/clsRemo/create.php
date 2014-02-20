<?php
/* @var $this ClsRemoController */
/* @var $model ClsRemo */

$this->breadcrumbs=array(
	'Clase Remo'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Clase Remo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>