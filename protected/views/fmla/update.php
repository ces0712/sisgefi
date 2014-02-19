<?php
/* @var $this FmlaController */
/* @var $model Fmla */

$this->breadcrumbs=array(
	'Familia'=>array('index'),
	$model->co_fmla=>array('view','id'=>$model->co_fmla),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_fmla)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Familia<?php echo $model->co_fmla; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>