<?php
/* @var $this PptoMmPlfdoController */
/* @var $model PptoMmPlfdo */

$this->breadcrumbs=array(
	'Planificacion Mensual'=>array('index'),
	'Historial',
);

$this->menu=array(
	array('label'=>'Ver Presupuesto', 'url'=>array('ppto/view', 'id'=>$_GET['co_ppto'])),
);


?>

<h1>Historial de planificaciones del presupuesto #<?php echo $_GET["co_ppto"]; ?></h1>

<?php 

    //Filtrando Contratos Asociados
    $criterios = new CDbCriteria;
    $criterios->condition = "co_ppto=:co_ppto";
    $criterios->order = "vrsn ASC";
    $criterios->params = array(':co_ppto'=> $_GET["co_ppto"]);
    
    $arrPlanificaciones = new CActiveDataProvider(PptoMmPlfdoHyst::model(), array('criteria'=>$criterios) );

    $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'ppto-mm-plfdo-grid',
        'dataProvider'=>$arrPlanificaciones,
        'columns'=>array(
                'vrsn',
                array('header'=>'Ene', 'value'=>'$data->mnto_1', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Feb', 'value'=>'$data->mnto_2', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Mar', 'value'=>'$data->mnto_3', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Abr', 'value'=>'$data->mnto_4', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'May', 'value'=>'$data->mnto_5', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Jun', 'value'=>'$data->mnto_6', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Jul', 'value'=>'$data->mnto_7', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Ago', 'value'=>'$data->mnto_8', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Sep', 'value'=>'$data->mnto_9', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Oct', 'value'=>'$data->mnto_10', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Nov', 'value'=>'$data->mnto_11', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Dic', 'value'=>'$data->mnto_12', 'htmlOptions'=>array('width' => '8%;')),

        ),
    )); 
    
    
?>
