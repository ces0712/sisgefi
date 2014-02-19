<?php
/* @var $this ClsCstoController */
/* @var $model ClsCsto */

$this->breadcrumbs=array(
	'Cls Cstos'=>array('index'),
	$model->co_cls_csto=>array('view','id'=>$model->co_cls_csto),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClsCsto', 'url'=>array('index')),
	array('label'=>'Create ClsCsto', 'url'=>array('create')),
	array('label'=>'View ClsCsto', 'url'=>array('view', 'id'=>$model->co_cls_csto)),
	array('label'=>'Manage ClsCsto', 'url'=>array('admin')),
);
?>

<h1>Update ClsCsto <?php echo $model->co_cls_csto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>