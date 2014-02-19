<?php

/**
 * This is the model class for table "fzs_ctrto".
 *
 * The followings are the available columns in table 'fzs_ctrto':
 * @property integer $id_ctrto
 * @property integer $co_ctrto
 * @property string $nro_ctrto
 * @property string $nb_socd
 * @property integer $por_incrto
 * @property string $fcia_aumto
 * @property integer $mnto
 * @property string $fe_inicio
 * @property string $fe_fin
 * @property string $in_stat_ctrto
 * @property string $frma_pago
 * @property string $mneda_pago
 * @property string $mnto_pago
 * @property string $fgra_jrdca
 * @property string $rzon_scial
 * @property string $observaciones
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 *
 * The followings are the available model relations:
 * @property AsigCttoPpto[] $asigCttoPptos
 * @property Sociedad $nbSocd
 */
class Ctrto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fzs_ctrto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_socd, fe_inicio, in_stat_ctrto, fgra_jrdca, rzon_scial', 'required'),
			array('co_ctrto, por_incrto', 'numerical', 'integerOnly'=>true),
			array('nro_ctrto, in_stat_ctrto, frma_pago, fgra_jrdca, co_pvdr', 'length', 'max'=>30),
			array('nb_socd, fcia_aumto, mnto, mneda_pago, mnto_pago, usr_crea, usr_modf', 'length', 'max'=>10),
			array('rzon_scial', 'length', 'max'=>50),
                        array('observaciones', 'length', 'max'=>300),
                        array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
                        array('fe_fin, fe_crea, fe_modf', 'safe'),
                    
                        //Valida foreing key
                        array('nb_socd', 'exist',
                                'allowEmpty' => true,
                                'attributeName' => 'nb_socd',
                                'className' => 'Sociedad',
                                'message' => 'La Sociedad no existe',
                                'skipOnError'=>true
                             ),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ctrto, co_ctrto, nro_ctrto, nb_socd, por_incrto, fcia_aumto, mnto, fe_inicio, fe_fin, in_stat_ctrto, frma_pago, mneda_pago, mnto_pago, fgra_jrdca, rzon_scial, co_pvdr, observaciones, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc, dataLista', 'safe', 'on'=>'search'),
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
			'asigCttoPptos' => array(self::HAS_MANY, 'AsigCttoPpto', 'co_ctrto'),
			'nbSocd' => array(self::BELONGS_TO, 'Sociedad', 'nb_socd'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ctrto' => 'Id Ctrto',
			'co_ctrto' => 'Codigo Contrato',
			'nro_ctrto' => 'Nro. de Contrato',
			'nb_socd' => 'Sociedad',
			'por_incrto' => 'Porcentaje de incremento',
			'fcia_aumto' => 'Frecuecia de incremento',
			'mnto' => 'Monto',
			'fe_inicio' => 'Fecha inicio',
			'fe_fin' => 'Fecha fin',
			'in_stat_ctrto' => 'Estatus/Condicion',
			'frma_pago' => 'Forma de pago',
			'mneda_pago' => 'Moneda de pago',
			'mnto_pago' => 'Monto a pagar',
			'fgra_jrdca' => 'Figura Juridica',
			'rzon_scial' => 'Razon Social',
                        'co_pvdr' => 'Codigo del Proveedor',
			'observaciones' => 'Observaciones',
			'fe_crea' => 'Creado el',
			'fe_modf' => 'Modificado el',
			'usr_crea' => 'Creado por',
			'usr_modf' => 'Modificado por',
			'in_stat' => 'Estados',
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

		$criteria->compare('id_ctrto',$this->id_ctrto);
		$criteria->compare('co_ctrto',$this->co_ctrto);
		$criteria->compare('nro_ctrto',$this->nro_ctrto,true);
		$criteria->compare('nb_socd',$this->nb_socd,true);
		$criteria->compare('por_incrto',$this->por_incrto);
		$criteria->compare('fcia_aumto',$this->fcia_aumto,true);
		$criteria->compare('mnto',$this->mnto,true);
		$criteria->compare('fe_inicio',$this->fe_inicio,true);
		$criteria->compare('fe_fin',$this->fe_fin,true);
		$criteria->compare('in_stat_ctrto',$this->in_stat_ctrto,true);
		$criteria->compare('frma_pago',$this->frma_pago,true);
		$criteria->compare('mneda_pago',$this->mneda_pago,true);
		$criteria->compare('mnto_pago',$this->mnto_pago,true);
		$criteria->compare('fgra_jrdca',$this->fgra_jrdca,true);
		$criteria->compare('rzon_scial',$this->rzon_scial,true);
                $criteria->compare('co_pvdr',$this->co_pvdr,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('tx_desc',$this->tx_desc,true);
                
                //$criteria->addSearchCondition('concat(nro_ctrto, " / ", nb_socd, " / ", rzon_scial)', $this->dataLista); 

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ctrto the static model class
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
            if($this->co_ctrto==null || $this->co_ctrto==0 ||  $this->co_ctrto=='')
                $this->co_ctrto=1;

            $this->mnto_pago = str_replace(",", "", $this->mnto_pago);
            $this->mnto = str_replace(",", "", $this->mnto);
            if($this->nro_ctrto=='') $this->nro_ctrto = NULL;
            
            
            if($this->isNewRecord)
            {
                  $maxCo = Yii::app()->db->createCommand()
                   ->select('max(co_ctrto) as max')
                   ->from('fzs_ctrto')
                   ->queryScalar();
                                
                  $this->co_ctrto = $maxCo + 1;

              }else{
                  $this->usr_modf = Yii::app()->user->id;
              }

             return true;
         }
         else
         return false;
        }
        
        public function getDataLista()
        {
                return $this->nro_ctrto . ' / ' . $this->nb_socd . ' / ' . $this->rzon_scial;
        }
}
