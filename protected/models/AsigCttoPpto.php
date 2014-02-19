<?php

/**
 * This is the model class for table "fzs_asig_ctto_ppto".
 *
 * The followings are the available columns in table 'fzs_asig_ctto_ppto':
 * @property integer $id_asig_ctto_ppto
 * @property integer $co_asig_ctto_ppto
 * @property integer $co_ctrto
 * @property integer $co_ppto
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 *
 * The followings are the available model relations:
 * @property Ctrto $coCtrto
 * @property Ppto $coPpto
 */
class AsigCttoPpto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fzs_asig_ctto_ppto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('co_ctrto, co_ppto', 'required'),
			array('co_asig_ctto_ppto, co_ctrto, co_ppto', 'numerical', 'integerOnly'=>true),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
			array('fe_crea, fe_modf', 'safe'),
                    
                         //valida unique key compuesto
                        array('*', 'compositeUniqueKeysValidator'),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_asig_ctto_ppto, co_asig_ctto_ppto, co_ctrto, co_ppto, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
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
			'coCtrto' => array(self::BELONGS_TO, 'Ctrto', 'co_ctrto'),
			'coPpto' => array(self::BELONGS_TO, 'Ppto', 'co_ppto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_asig_ctto_ppto' => 'Id Asig Ctto Ppto',
			'co_asig_ctto_ppto' => 'Codigo Asignacion Contrato/Presupuesto',
			'co_ctrto' => 'N° de Contrato / Sociedad / Razon Social',
			'co_ppto' => 'Codigo del presupuesto',
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

		$criteria->compare('id_asig_ctto_ppto',$this->id_asig_ctto_ppto);
		$criteria->compare('co_asig_ctto_ppto',$this->co_asig_ctto_ppto);
		$criteria->compare('co_ctrto',$this->co_ctrto,true);
		$criteria->compare('co_ppto',$this->co_ppto,true);
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
	 * @return AsigCttoPpto the static model class
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
                    
                        'ECompositeUniqueKeyValidatable' => array(
                            'class' => 'application.components.ECompositeUniqueKeyValidatable',
                            'uniqueKeys' => array(
                                'attributes' => 'co_ctrto, co_ppto',
                                'errorMessage' => 'El contrato ya se encuentra asignado a este presupuesto'
                            )
                        ),
                );
        }
        
        
        public function beforeSave()
        {

        if (parent::beforeSave())
        {
            if($this->co_asig_ctto_ppto==null || $this->co_asig_ctto_ppto==0 ||  $this->co_asig_ctto_ppto=='')
                $this->co_asig_ctto_ppto=1;
        
            
            if($this->isNewRecord)
            {
                  $maxCo = Yii::app()->db->createCommand()
                   ->select('max(co_asig_ctto_ppto) as max')
                   ->from('fzs_asig_ctto_ppto')
                   ->queryScalar();
                                
                  $this->co_asig_ctto_ppto = $maxCo + 1;

              }else{
                  $this->usr_modf = Yii::app()->user->id;
              }

             return true;
         }
         else
         return false;
        }
        
        
        public function compositeUniqueKeysValidator() {
            $this->validateCompositeUniqueKeys();
        }
        
       
        
}
