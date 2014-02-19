<?php
/* @var $this CodSapController */
/* @var $model CodSap */

$this->breadcrumbs=array(
	'Codidos Sap'=>array('index'),
	$model->co_cod_sap,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_cod_sap)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_cod_sap),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Ver Codigo Sap #<?php echo $model->co_cod_sap; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_cod_sap',
		//'co_cod_sap',
		'nb_cod_sap',
		'ds_cod_sap',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		//'in_stat',
		'tx_desc',
	),
)); ?>
