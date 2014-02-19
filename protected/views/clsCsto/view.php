<?php
/* @var $this ClsCstoController */
/* @var $model ClsCsto */

$this->breadcrumbs=array(
	'Clase Costo'=>array('index'),
	$model->co_cls_csto,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_cls_csto)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_cls_csto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Ver Clase de Costo #<?php echo $model->co_cls_csto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_cls_csto',
		//'co_cls_csto',
		'nb_cls_csto',
		'ds_cls_csto',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		//'in_stat',
		'tx_desc',
	),
)); ?>
