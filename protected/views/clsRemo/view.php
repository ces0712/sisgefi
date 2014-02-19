<?php
/* @var $this ClsRemoController */
/* @var $model ClsRemo */

$this->breadcrumbs=array(
	'Clase Remo'=>array('index'),
	$model->co_cls_remo,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualzar', 'url'=>array('update', 'id'=>$model->co_cls_remo)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_cls_remo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Ver Clase Remo #<?php echo $model->co_cls_remo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_cls_remo',
		//'co_cls_remo',
		'nb_cls_remo',
		'ds_cls_remo',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		'in_stat',
		'tx_desc',
	),
)); ?>
