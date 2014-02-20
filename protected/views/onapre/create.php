<?php
/* @var $this OnapreController */
/* @var $model Onapre */

$this->breadcrumbs=array(
	'Onapre'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Onapre</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>