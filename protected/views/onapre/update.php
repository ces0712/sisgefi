<?php
/* @var $this OnapreController */
/* @var $model Onapre */

$this->breadcrumbs=array(
	'Onapre'=>array('index'),
	$model->co_onpe=>array('view','id'=>$model->co_onpe),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_onpe)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Onapre <?php echo $model->co_onpe; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>