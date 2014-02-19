<?php
/* @var $this ActvdController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actividad',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
);
?>

<h1>Actividades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
