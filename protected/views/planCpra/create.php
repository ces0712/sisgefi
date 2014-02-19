<?php
/* @var $this PlanCpraController */
/* @var $model PlanCpra */

$this->breadcrumbs=array(
	'Plan de Compras'=>array('index'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'Listar', 'url'=>array('index')),
	//array('label'=>'Gestionar', 'url'=>array('admin')),
        array('label'=>'Ver Presupuesto', 'url'=>array('ppto/view', 'id'=>$_GET['co_ppto'])),
);
?>

<h1>Crear Plan de Compra</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>