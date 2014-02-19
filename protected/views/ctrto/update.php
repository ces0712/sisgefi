<?php
/* @var $this CtrtoController */
/* @var $model Ctrto */

$this->breadcrumbs=array(
	'Contrato'=>array('index'),
	$model->co_ctrto=>array('view','id'=>$model->co_ctrto),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_ctrto)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Contrato <?php echo $model->co_ctrto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>