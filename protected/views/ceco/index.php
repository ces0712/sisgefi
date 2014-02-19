<?php
/* @var $this CecoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cecos',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Cecos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
