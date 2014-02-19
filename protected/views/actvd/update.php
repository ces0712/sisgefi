<?php
/* @var $this ActvdController */
/* @var $model Actvd */

$this->breadcrumbs=array(
	'Actividad'=>array('index'),
	$model->co_actvd=>array('view','id'=>$model->co_actvd),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_actvd)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Actividad <?php echo $model->co_actvd; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>