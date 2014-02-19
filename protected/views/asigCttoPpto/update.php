<?php
/* @var $this AsigCttoPptoController */
/* @var $model AsigCttoPpto */

$this->breadcrumbs=array(
	'Asig Ctto Pptos'=>array('index'),
	$model->co_asig_ctto_ppto=>array('view','id'=>$model->co_asig_ctto_ppto),
	'Update',
);

$this->menu=array(
	array('label'=>'List AsigCttoPpto', 'url'=>array('index')),
	array('label'=>'Create AsigCttoPpto', 'url'=>array('create')),
	array('label'=>'View AsigCttoPpto', 'url'=>array('view', 'id'=>$model->co_asig_ctto_ppto)),
	array('label'=>'Manage AsigCttoPpto', 'url'=>array('admin')),
);
?>

<h1>Update AsigCttoPpto <?php echo $model->co_asig_ctto_ppto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>