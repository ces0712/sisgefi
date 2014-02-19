<?php
/* @var $this CodSapController */
/* @var $model CodSap */

$this->breadcrumbs=array(
	'Codigos Sap'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Crear Codigos Sap</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>