<?php
/* @var $this UndMddaController */
/* @var $model UndMdda */

$this->breadcrumbs=array(
	'Unidad de Medida'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Unidad de Medida</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>