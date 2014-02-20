<?php
/* @var $this OnapreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Onapre',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Onapres</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
