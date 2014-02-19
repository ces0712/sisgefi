<?php
/* @var $this CecoController */
/* @var $model Ceco */

$this->breadcrumbs=array(
	'Ceco'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Ceco</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>