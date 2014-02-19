<?php
/* @var $this CecoController */
/* @var $model Ceco */

$this->breadcrumbs=array(
	'Cecos'=>array('index'),
	$model->co_ceco=>array('view','id'=>$model->co_ceco),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_ceco)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Ceco <?php echo $model->co_ceco; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>