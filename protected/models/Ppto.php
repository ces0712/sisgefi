<?php

/**
 * This is the model class for table "fzs_ppto".
 *
 * The followings are the available columns in table 'fzs_ppto':
 * @property integer $id_ppto
 * @property integer $co_ppto
 * @property string $nb_ceco
 * @property integer $nb_tpo_ppto
 * @property string $nb_cls_remo
 * @property string $nb_cls_csto
 * @property string $nb_actvd
 * @property string $mpp_onpe
 * @property string $frma_pago
 * @property string $mneda_ppto
 * @property string $mneda_pago
 * @property string $dscpcion
 * @property string $priodd
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 *
 * The followings are the available model relations:
 * @property AsigCttoPpto[] $asigCttoPptos
 * @property PlanCpra[] $planCpras
 * @property Actvd $nbActvd
 * @property Onapre $mppOnpe
 * @property Ceco $nbCeco
 * @property ClsCsto $nbClsCsto
 * @property ClsRemo $nbClsRemo
 * @property TpoPpto $nbTpoPpto
 * @property PptoMmPlfdo[] $pptoMmPlfdos
 */
class Ppto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fzs_ppto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_ceco', 'required'),
			array('co_ppto', 'numerical', 'integerOnly'=>true),
			array('nb_ceco, nb_tpo_ppto, nb_cls_remo, nb_cls_csto, nb_actvd, frma_pago, mneda_ppto, mneda_pago', 'length', 'max'=>30),
			array('mpp_onpe', 'length', 'max'=>60),
			array('dscpcion', 'length', 'max'=>600),
			array('priodd', 'length', 'max'=>5),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
			array('fe_crea, fe_modf', 'safe'),
                    
                        //Valida foreing key
                        array('nb_actvd', 'exist',
                                'allowEmpty' => true,
                                'attributeName' => 'nb_actvd',
                                'className' => 'Actvd',
                                'message' => 'La Actividad no existe',
                                'skipOnError'=>true
                            ),
                    
                   
                        array('mpp_onpe', 'exist',
                                'allowEmpty' => true,
                                'attributeName' => 'mpp_onpe',
                                'className' => 'Onapre',
                                'message' => 'La Onapre no existe',
                                'skipOnError'=>true
                            ),
                    
                        array('nb_ceco', 'exist',
                                'allowEmpty' => true,
                                'attributeName' => 'nb_ceco',
                                'className' => 'Ceco',
                                'message' => 'El Ceco no existe',
                                'skipOnError'=>true
                            ),
                    
                        array('nb_cls_csto', 'exist',
                                'allowEmpty' => true,
                                'attributeName' => 'nb_cls_csto',
                                'className' => 'ClsCsto',
                                'message' => 'La Clase de Costo no existe',
                                'skipOnError'=>true
                            ),
                    
                        array('nb_tpo_ppto', 'exist',
                                   'allowEmpty' => true,
                                   'attributeName' => 'nb_tpo_ppto',
                                   'className' => 'TpoPpto',
                                   'message' => 'Tipo Presupuesto no existe',
                                   'skipOnError'=>true
                               ),

                        array('nb_cls_remo', 'exist',
                                   'allowEmpty' => true,
                                   'attributeName' => 'nb_cls_remo',
                                   'className' => 'ClsRemo',
                                   'message' => 'La Clase Remo no existe',
                                   'skipOnError'=>true
                            ),
                            
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ppto, co_ppto, nb_ceco, nb_tpo_ppto, nb_cls_remo, nb_cls_csto, nb_actvd, mpp_onpe, frma_pago, mneda_ppto, mneda_pago, dscpcion, priodd, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			
                        'asigCttoPptos' => array(self::HAS_MANY, 'AsigCttoPpto', 'co_ppto'),
			'planCpras' => array(self::HAS_MANY, 'PlanCpra', 'co_ppto'),
			'pptoMmPlfdos' => array(self::HAS_MANY, 'PptoMmPlfdo', 'co_ppto'),
                    
                        'nbActvd' => array(self::BELONGS_TO, 'Actvd', 'nb_actvd'),
			'nbTpoPpto' => array(self::BELONGS_TO, 'TpoPpto', 'nb_tpo_ppto'),
                        'mppOnpe' => array(self::BELONGS_TO, 'Onapre', 'mpp_onpe'),
			'nbCeco' => array(self::BELONGS_TO, 'Ceco', 'nb_ceco'),
			'nbClsCsto' => array(self::BELONGS_TO, 'ClsCsto', 'nb_cls_csto'),
			'nbClsRemo' => array(self::BELONGS_TO, 'ClsRemo', 'nb_cls_remo'),
			'nbTpoPpto' => array(self::BELONGS_TO, 'TpoPpto', 'nb_tpo_ppto'),
			
                         
                );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ppto' => 'Id Ppto',
			'co_ppto' => 'Codigo Presupuesto',
			'nb_ceco' => 'Centro de costo',
			'nb_tpo_ppto' => 'Tipo de presupuesto',
			'nb_cls_remo' => 'Clase Remo',
			'nb_cls_csto' => 'Clase de costo',
			'nb_actvd' => 'Tipo de actividad',
			'mpp_onpe' => 'Mapping Onapre',
			'frma_pago' => 'Forma de pago',
			'mneda_ppto' => 'Moneda presupuestada',
			'mneda_pago' => 'Moneda de pago',
			'dscpcion' => 'Descripción de la actividad',
			'priodd' => 'Prioridad',
			'fe_crea' => 'Creado el',
			'fe_modf' => 'Modificado el',
			'usr_crea' => 'Creado por',
			'usr_modf' => 'Modificado por',
			'in_stat' => 'Estatus',
			'tx_desc' => 'Observaciones',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_ppto',$this->id_ppto);
		$criteria->compare('co_ppto',$this->co_ppto);
		$criteria->compare('nb_ceco',$this->nb_ceco,true);
		$criteria->compare('nb_tpo_ppto',$this->nb_tpo_ppto,true);
		$criteria->compare('nb_cls_remo',$this->nb_cls_remo,true);
		$criteria->compare('nb_cls_csto',$this->nb_cls_csto,true);
		$criteria->compare('nb_actvd',$this->nb_actvd,true);
		$criteria->compare('mpp_onpe',$this->mpp_onpe,true);
		$criteria->compare('frma_pago',$this->frma_pago,true);
		$criteria->compare('mneda_ppto',$this->mneda_ppto,true);
		$criteria->compare('mneda_pago',$this->mneda_pago,true);
		$criteria->compare('dscpcion',$this->dscpcion,true);
		$criteria->compare('priodd',$this->priodd,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('tx_desc',$this->tx_desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ppto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function behaviors()
        {
                return array(
                        'CTimestampBehavior' => array(
                            'class' => 'zii.behaviors.CTimestampBehavior',
                            'createAttribute' => 'fe_crea',
                            'updateAttribute' => 'fe_modf',
                            'setUpdateOnCreate' => true,
                        ),

                        'BlameableBehavior' => array(
                            'class' => 'application.components.BlameableBehavior',
                            'createdByColumn' => 'usr_crea',
                            'updatedByColumn' => 'usr_modf',
                        ),
                    
                        'ActiveRecordLogableBehavior' => 'application.components.ActiveRecordLogableBehavior',
                );
        }
        
        
        public function beforeSave()
        {

        if (parent::beforeSave())
        {
            if($this->co_ppto==null || $this->co_ppto==0 ||  $this->co_ppto=='')
                $this->co_ppto=1;
        
            if($this->nb_tpo_ppto=='') $this->nb_tpo_ppto = NULL;
            if($this->nb_cls_remo=='') $this->nb_cls_remo = NULL;
            if($this->nb_actvd=='') $this->nb_actvd = NULL;
            if($this->nb_cls_csto=='') $this->nb_cls_csto = NULL;
            if($this->mpp_onpe=='') $this->mpp_onpe = NULL;
            
            if($this->isNewRecord)
            {
                  $maxCo = Yii::app()->db->createCommand()
                   ->select('max(co_ppto) as max')
                   ->from('fzs_ppto')
                   ->queryScalar();
                                
                  $this->co_ppto = $maxCo + 1;

              }else{
                  $this->usr_modf = Yii::app()->user->id;
              }

             return true;
         }
         else
         return false;
        }
        
}
