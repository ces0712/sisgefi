<?php
/* @var $this ActvdController */
/* @var $model Actvd */

$this->breadcrumbs=array(
	'Actividad'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestion', 'url'=>array('admin')),
);
?>

<h1>Crear Actividad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>