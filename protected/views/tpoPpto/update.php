<?php
/* @var $this TpoPptoController */
/* @var $model TpoPpto */

$this->breadcrumbs=array(
	'Tipo Presupuesto'=>array('index'),
	$model->nb_tpo_ppto=>array('view','id'=>$model->nb_tpo_ppto),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->nb_tpo_ppto)),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo Presupuesto <?php echo $model->nb_tpo_ppto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>