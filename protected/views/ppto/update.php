<?php
/* @var $this PptoController */
/* @var $model Ppto */

$this->breadcrumbs=array(
	'Presupuesto'=>array('index'),
	$model->co_ppto=>array('view','id'=>$model->co_ppto),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_ppto)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Presupuesto <?php echo $model->co_ppto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>