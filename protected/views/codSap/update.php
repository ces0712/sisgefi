<?php
/* @var $this CodSapController */
/* @var $model CodSap */

$this->breadcrumbs=array(
	'Codigo Sap'=>array('index'),
	$model->co_cod_sap=>array('view','id'=>$model->co_cod_sap),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_cod_sap)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Codigo Sap <?php echo $model->co_cod_sap; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>