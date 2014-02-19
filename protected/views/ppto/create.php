<?php
/* @var $this PptoController */
/* @var $model Ppto */

$this->breadcrumbs=array(
	'Presupuesto'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Presupuesto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>