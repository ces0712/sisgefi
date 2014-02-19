<?php
/* @var $this CecoController */
/* @var $model Ceco */

$this->breadcrumbs=array(
	'Cecos'=>array('index'),
	$model->co_ceco,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_ceco)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_ceco),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Ver Ceco #<?php echo $model->co_ceco; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_ceco',
		//'co_ceco',
		'nb_ceco',
		'gcia_1nvl',
		'gcia_2nvl',
		'edo',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		//'in_stat',
		'tx_desc',
	),
)); ?>
