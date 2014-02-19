<?php
/* @var $this SociedadController */
/* @var $model Sociedad */

$this->breadcrumbs=array(
	'Sociedad'=>array('index'),
	$model->co_socd,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_socd)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_socd),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Ver Sociedad #<?php echo $model->co_socd; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_socd',
		//'co_socd',
		'nb_socd',
		'ds_socd',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		//'in_stat',
		'tx_desc',
	),
)); ?>
