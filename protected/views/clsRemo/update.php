<?php
/* @var $this ClsRemoController */
/* @var $model ClsRemo */

$this->breadcrumbs=array(
	'Clase Remo'=>array('index'),
	$model->co_cls_remo=>array('view','id'=>$model->co_cls_remo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_cls_remo)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Clase Remo <?php echo $model->co_cls_remo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>