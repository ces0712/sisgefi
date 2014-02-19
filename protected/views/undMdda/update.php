<?php
/* @var $this UndMddaController */
/* @var $model UndMdda */

$this->breadcrumbs=array(
	'Unidad de Medida'=>array('index'),
	$model->co_und_mdda=>array('view','id'=>$model->co_und_mdda),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->co_und_mdda)),
	array('label'=>'Gestonar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Unidad de Medida <?php echo $model->co_und_mdda; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>