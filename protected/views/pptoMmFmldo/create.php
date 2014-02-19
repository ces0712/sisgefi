<?php
/* @var $this PptoMmFmldoController */
/* @var $model PptoMmFmldo */

$this->breadcrumbs=array(
	'Presupuesto'=>array('index'),
	'Formulacion',
);

$this->menu=array(
	//array('label'=>'List PptoMmFmldo', 'url'=>array('index')),
	//array('label'=>'Manage PptoMmFmldo', 'url'=>array('admin')),
        array('label'=>'Ver Presupuesto', 'url'=>array('ppto/view', 'id'=>$_GET['co_ppto'])),
);
?>

<h1>Formulacion de presupuesto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>