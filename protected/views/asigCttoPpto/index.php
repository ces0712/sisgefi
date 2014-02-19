<?php
/* @var $this AsigCttoPptoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asig Ctto Pptos',
);

$this->menu=array(
	array('label'=>'Create AsigCttoPpto', 'url'=>array('create')),
	array('label'=>'Manage AsigCttoPpto', 'url'=>array('admin')),
);
?>

<h1>Asig Ctto Pptos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
