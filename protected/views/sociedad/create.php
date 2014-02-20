<?php
/* @var $this SociedadController */
/* @var $model Sociedad */

$this->breadcrumbs=array(
	'Sociedad'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Sociedad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>