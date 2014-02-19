<?php
/* @var $this CtrtoController */
/* @var $model Ctrto */

$this->breadcrumbs=array(
	'Contrato'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Contrato</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>