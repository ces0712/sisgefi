<?php
/* @var $this PptoMmPlfdoController */
/* @var $model PptoMmPlfdo */

$this->breadcrumbs=array(
	'Planificacion Mensual'=>array('index'),
	'Historial',
);

$this->menu=array(
	array('label'=>'Ver Presupuesto', 'url'=>array('ppto/view', 'id'=>$_GET["co_ppto"])),
);


?>

<h1>Historial de Plan de compra del presupuesto #<?php echo $_GET["co_ppto"]; ?></h1>

<?php 

    //Filtrando Contratos Asociados
    $criterios = new CDbCriteria;
    $criterios->condition = "co_plan_cpra=:co_plan_cpra";
    $criterios->order = "vrsn ASC";
    $criterios->params = array(':co_plan_cpra'=> $_GET["co_plan_cpra"]);
    
    $arrPlanCpraHyst = new CActiveDataProvider(PlanCpraHyst::model(), array('criteria'=>$criterios) );
    
    $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'plan-cpra-hyst',
        'dataProvider'=>$arrPlanCpraHyst,
        'columns'=>array(
                'vrsn',
                array('header'=>'Familia', 'value'=>'$data->nb_fmla', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Co. Sap', 'value'=>'$data->nb_cod_sap', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Ene', 'value'=>'$data->cntd_1', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Feb', 'value'=>'$data->cntd_2', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Mar', 'value'=>'$data->cntd_3', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Abr', 'value'=>'$data->cntd_4', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'May', 'value'=>'$data->cntd_5', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Jun', 'value'=>'$data->cntd_6', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Jul', 'value'=>'$data->cntd_7', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Ago', 'value'=>'$data->cntd_8', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Sep', 'value'=>'$data->cntd_9', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Oct', 'value'=>'$data->cntd_10', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Nov', 'value'=>'$data->cntd_11', 'htmlOptions'=>array('width' => '8%;')),
                array('header'=>'Dic', 'value'=>'$data->cntd_12', 'htmlOptions'=>array('width' => '8%;')),

        ),
    ));
    
    
?>
