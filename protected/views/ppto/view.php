<?php
/* @var $this PptoController */
/* @var $model Ppto */

$this->breadcrumbs=array(
	'Presupuesto'=>array('index'),
	$model->co_ppto,
);


if ( !is_array($model->pptoMmPlfdos) || empty($model->pptoMmPlfdos) ) {
    $sumintMmPlfdo = array (
       '/pptoMmPlfdo/create','co_ppto'=>$model->co_ppto
    );
}else{
    $sumintMmPlfdo = array (
       '/pptoMmPlfdo/update','id'=>$model->pptoMmPlfdos[0]->co_ppto_mm_plfdo,'co_ppto'=>$model->co_ppto
    );
}


$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->co_ppto)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->co_ppto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestionar', 'url'=>array('admin')),
        
        array('label'=>'Asignar Contrato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('/asigCttoPpto/create','co_ppto'=>$model->co_ppto))),
        array('label'=>'Planificar', 'url'=>'#', 'linkOptions'=>array('submit'=>$sumintMmPlfdo)),
        array('label'=>'Plan de Compra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('/planCpra/create','co_ppto'=>$model->co_ppto))),
    
);
?>

<h1>Ver Presupuesto #<?php echo $model->co_ppto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_ppto',
		'co_ppto',
		'nb_ceco',
		'nb_tpo_ppto',
		'nb_cls_remo',
		'nb_cls_csto',
		'nb_actvd',
		'mpp_onpe',
		'frma_pago',
		'mneda_ppto',
		'mneda_pago',
		'dscpcion',
		'priodd',
		'fe_crea',
		'fe_modf',
		'usr_crea',
		'usr_modf',
		//'in_stat',
		//'tx_desc',
	),
)); ?>

<br/>
<h2>Contratos asociados</h2>
<?php 
    
    //Filtrando Contratos Asociados
    $criterios = new CDbCriteria;
    $criterios->condition = "co_ppto=:co_ppto";
    $criterios->params = array(':co_ppto'=> $model->co_ppto);
    
    $arrContratos = new CActiveDataProvider(AsigCttoPpto::model(), array('criteria'=>$criterios) );

    //Mostrando Contratos Asociados
    $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'asig-ctto-grid',
        'dataProvider'=> $arrContratos,
        'columns'=>array(
            'coCtrto.dataLista::N° de Contrato / Sociedad / Razon Social',
            'coCtrto.mneda_pago',
            array('header'=>'Monto',
                        'value'=>'$data->coCtrto->mnto',
                        'htmlOptions'=>array('style' => 'text-align: right;')),
            'coCtrto.frma_pago',
            'tx_desc',
            
            array(
                'class'=>'CButtonColumn',
                'template'=>'{delete}',
                'deleteButtonUrl'=>'Yii::app()->createUrl("/asigCttoPpto/delete", array("id" =>  $data["co_asig_ctto_ppto"]))',
            ),
        ),
        
    )); /**/
?>

<table>
    <tr>
        <td style="vertical-align: top">
            
            <br/>
            <h2>Planificacion Mensual</h2>
            <?php 

                //Filtrando planificacion mensual del presupuesto
                $arrPlanificacion = PptoMmPlfdo::model()->findBySql('select * from fzs_ppto_mm_plfdo where co_ppto='.$model->co_ppto);

                if(isset($arrPlanificacion)){
                    $this->widget('zii.widgets.CDetailView', array(
                        'data'=>$arrPlanificacion,
                        'attributes'=>array(
                                'mnto_1',
                                'mnto_2',
                                'mnto_3',
                                'mnto_4',
                                'mnto_5',
                                'mnto_6',
                                'mnto_7',
                                'mnto_8',
                                'mnto_9',
                                'mnto_10',
                                'mnto_11',
                                'mnto_12',
                                'mnto_ttl',
                                array('label'=>CHtml::link(CHtml::encode('Version'), array('pptoMmPlfdo/versiones', 'co_ppto'=>$model->co_ppto)),
                                        'type'=>'raw',
                                        'value'=>$arrPlanificacion->vrsn),
                                'tx_desc',
                        ),
                     ));
                }else{ echo "No se encontro planificación"; }
            ?>
        </td>
        <td>
            
            <br/>
            <h2>Presupuesto Formulado</h2>
            <?php 

                if ( is_array($model->pptoMmPlfdos) && !empty($model->pptoMmPlfdos) ) {
                
                    //Filtrando formulacion mensual del presupuesto
                    $arrFormulacion = PptoMmFmldo::model()->findBySql('select * from fzs_ppto_mm_fmldo where co_ppto_mm_plfdo='.$model->pptoMmPlfdos[0]->co_ppto_mm_plfdo);

                    if(isset($arrFormulacion)){
                        $this->widget('zii.widgets.CDetailView', array(
                            'data'=>$arrFormulacion,
                            'attributes'=>array(
                                    'mnto_1',
                                    'mnto_2',
                                    'mnto_3',
                                    'mnto_4',
                                    'mnto_5',
                                    'mnto_6',
                                    'mnto_7',
                                    'mnto_8',
                                    'mnto_9',
                                    'mnto_10',
                                    'mnto_11',
                                    'mnto_12',
                                    'mnto_ttl',
                                    array('label'=>CHtml::link(CHtml::encode('Version'), array('pptoMmFmldo/versiones', 'co_ppto_mm_plfdo'=>$model->pptoMmPlfdos[0]->co_ppto_mm_plfdo,'co_ppto'=>$model->co_ppto)),
                                        'type'=>'raw',
                                        'value'=>$arrFormulacion->vrsn),
                                    'tx_desc',
                            ),
                         ));
                    }else{ echo "No se encontro formulacion"; }
                }else{ echo "No se encontro formulacion"; }
            ?>
        </td>
    </tr>
</table>

<br/>
<h2>Plan de Compra</h2>
<?php 
    
    //Filtrando Contratos Asociados
    $criterios = new CDbCriteria;
    $criterios->condition = "co_ppto=:co_ppto";
    $criterios->params = array(':co_ppto'=> $model->co_ppto);
    
    $arrPlanCpra = new CActiveDataProvider(PlanCpra::model(), array('criteria'=>$criterios) );

    //Mostrando Contratos Asociados
    $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'asig-plan-cpra',
        'dataProvider'=> $arrPlanCpra,
        'columns'=>array(
            'actv_plan_cpra::Avtividad',
            'nbUndMdda.dataLista::Und. Medida',
            'nbFmla.dataLista::Familia',
            'nbCoSap.dataLista::Cod. Sap',
            'cntd_1::Ene',
            'cntd_2::Feb',
            'cntd_3::Mar',
            'cntd_4::Abr',
            'cntd_5::May',
            'cntd_6::Jun',
            'cntd_7::Jul',
            'cntd_8::Ago',
            'cntd_9::Sep',
            'cntd_10::Oct',
            'cntd_11::Nov',
            'cntd_12::Dic',
            array(
                'name'=>'Ver',
                'type'=>'raw',
                'value'=>'CHtml::link(CHtml::encode($data["vrsn"]),array("planCpra/versiones","co_plan_cpra"=>$data["co_plan_cpra"],"co_ppto"=>'.$model->co_ppto.'))',
                'htmlOptions'=>array('style' => 'text-align: center;')
                ),
            array(
                'class'=>'CButtonColumn',
                'template'=>'{update}{delete}',
                'updateButtonUrl'=>'Yii::app()->createUrl("/planCpra/update", array("id" =>  $data["co_plan_cpra"],"co_ppto" =>  $data["co_ppto"]))',
                'deleteButtonUrl'=>'Yii::app()->createUrl("/planCpra/delete", array("id" =>  $data["co_plan_cpra"]))',
            ),
        ),
        
    )); /**/
?>

