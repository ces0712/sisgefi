<?php
/* @var $this PptoMmPlfdoController */
/* @var $model PptoMmPlfdo */

$this->breadcrumbs=array(
	'Planificacion Mensual'=>array('index'),
	$model->co_ppto_mm_plfdo=>array('view','id'=>$model->co_ppto_mm_plfdo),
	'Actualizar',
);

if ( !is_array($model->pptoMmFmldos) || empty($model->pptoMmFmldos) ) {
    $sumintMmFmldo = array (
       //'/pptoMmFmldo/create','co_ppto_mm_plfdo'=>$model->co_ppto_mm_plfdo
       '/pptoMmFmldo/create','co_ppto_mm_plfdo'=>$model->co_ppto_mm_plfdo,'co_ppto'=>$model->co_ppto
    );
}else{
    $sumintMmFmldo = array (
       '/pptoMmFmldo/update','id'=>$model->pptoMmFmldos[0]->co_ppto_mm_fmldo,'co_ppto_mm_plfdo'=>$model->co_ppto_mm_plfdo,'co_ppto'=>$model->co_ppto
    );
}

$this->menu=array(
	//array('label'=>'List PptoMmPlfdo', 'url'=>array('index')),
	//array('label'=>'Create PptoMmPlfdo', 'url'=>array('create')),
	//array('label'=>'View PptoMmPlfdo', 'url'=>array('view', 'id'=>$model->co_ppto_mm_plfdo)),
	//array('label'=>'Manage PptoMmPlfdo', 'url'=>array('admin')),
        array('label'=>'Ver Presupuesto', 'url'=>array('ppto/view', 'id'=>$_GET['co_ppto'])),
        array('label'=>'Formular', 'url'=>'#', 'linkOptions'=>array('submit'=>$sumintMmFmldo)),
);
?>

<h1>Planificacion Mensual de Presupuesto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>