<?php
/* @var $this FmlaController */
/* @var $model Fmla */

$this->breadcrumbs=array(
	'Familia'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Familia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>