<?php
/* @var $this PptoMmFmldoController */
/* @var $model PptoMmFmldo */

$this->breadcrumbs=array(
	'Presupuesto'=>array('index'),
	$model->co_ppto_mm_fmldo=>array('view','id'=>$model->co_ppto_mm_fmldo),
	'Formulacion',
);

$this->menu=array(
	//array('label'=>'List PptoMmFmldo', 'url'=>array('index')),
	//array('label'=>'Create PptoMmFmldo', 'url'=>array('create')),
	//array('label'=>'View PptoMmFmldo', 'url'=>array('view', 'id'=>$model->co_ppto_mm_fmldo)),
	//array('label'=>'Manage PptoMmFmldo', 'url'=>array('admin')),
        array('label'=>'Ver Presupuesto', 'url'=>array('ppto/view', 'id'=>$_GET['co_ppto'])),
);
?>

<h1>Actualizar Formulación #<?php echo $model->co_ppto_mm_fmldo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>