<?php
/* @var $this SociedadController */
/* @var $model Sociedad */

$this->breadcrumbs=array(
	'Sociedad'=>array('index'),
	$model->co_socd=>array('view','id'=>$model->co_socd),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_socd)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Sociedad <?php echo $model->co_socd; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>