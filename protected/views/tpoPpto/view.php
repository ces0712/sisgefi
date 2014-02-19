<?php
/* @var $this TpoPptoController */
/* @var $model TpoPpto */

$this->breadcrumbs=array(
	'Tipo Presupuesto'=>array('index'),
	$model->nb_tpo_ppto,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->nb_tpo_ppto)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nb_tpo_ppto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo Presupuesto #<?php echo $model->nb_tpo_ppto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_tpo_ppto',
		//'nb_tpo_ppto',
		'nb_tpo_ppto',
		'ds_tpo_ppto',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		//'in_stat',
		'tx_desc',
	),
)); ?>
