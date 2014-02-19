<?php
/* @var $this PlanCpraController */
/* @var $model PlanCpra */

$this->breadcrumbs=array(
	'Plan de Compra'=>array('index'),
	$model->co_plan_cpra=>array('view','id'=>$model->co_plan_cpra),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List PlanCpra', 'url'=>array('index')),
	//array('label'=>'Create PlanCpra', 'url'=>array('create')),
	//array('label'=>'View PlanCpra', 'url'=>array('view', 'id'=>$model->co_plan_cpra)),
	//array('label'=>'Manage PlanCpra', 'url'=>array('admin')),
        array('label'=>'Ver Presupuesto', 'url'=>array('ppto/view', 'id'=>$_GET['co_ppto'])),
);
?>

<h1>Actualizar Plan de Compra <?php echo $model->co_plan_cpra; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>