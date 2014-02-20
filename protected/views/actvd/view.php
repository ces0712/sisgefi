<?php
/* @var $this ActvdController */
/* @var $model Actvd */

$this->breadcrumbs=array(
	'Actividad'=>array('index'),
	$model->co_actvd,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_actvd)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_actvd),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestion', 'url'=>array('admin')),
);
?>

<h1>Ver Actividad #<?php echo $model->co_actvd; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_actvd',
		//'co_actvd',
		'nb_actvd',
		'ds_actvd',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		//'in_stat',
		'tx_desc',
	),
)); ?>
