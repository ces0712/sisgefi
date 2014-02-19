<?php
/* @var $this PptoMmPlfdoController */
/* @var $model PptoMmPlfdo */

$this->breadcrumbs=array(
	'Planificacion Mensual'=>array('index'),
	'Create',
);


$this->menu=array(
	//array('label'=>'List PptoMmPlfdo', 'url'=>array('index')),
	//array('label'=>'Manage PptoMmPlfdo', 'url'=>array('admin')),
        array('label'=>'Ver Presupuesto', 'url'=>array('ppto/view', 'id'=>$_GET['co_ppto'])),
);
?>

<h1>Planificacion Mensual de Presupuesto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>