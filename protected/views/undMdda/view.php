<?php
/* @var $this UndMddaController */
/* @var $model UndMdda */

$this->breadcrumbs=array(
	'Unidad de Medida'=>array('index'),
	$model->co_und_mdda,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_und_mdda)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_und_mdda),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Ver Unidad de Medida #<?php echo $model->co_und_mdda; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_und_mdda',
		//'co_und_mdda',
		'nb_und_mdda',
		'ds_und_mdda',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		//'in_stat',
		'tx_desc',
	),
)); ?>
