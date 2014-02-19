<?php

/**
 * This is the model class for table "fzs_tpo_ppto".
 *
 * The followings are the available columns in table 'fzs_tpo_ppto':
 * @property integer $id_tpo_ppto
 * @property integer $nb_tpo_ppto
 * @property string $nb_tpo_ppto
 * @property string $ds_tpo_ppto
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 *
 * The followings are the available model relations:
 * @property Ppto[] $pptos
 */
class TpoPpto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fzs_tpo_ppto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_tpo_ppto', 'required'),
			array('nb_tpo_ppto', 'numerical', 'integerOnly'=>true),
			array('nb_tpo_ppto', 'length', 'max'=>30),
			array('ds_tpo_ppto', 'length', 'max'=>60),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
			array('fe_crea, fe_modf', 'safe'),
                    
                        //Valida unique key
                        array('nb_tpo_ppto', 'unique', 'attributeName'=>'nb_tpo_ppto'),
                        
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tpo_ppto, nb_tpo_ppto, nb_tpo_ppto, ds_tpo_ppto, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
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
			'pptos' => array(self::HAS_MANY, 'Ppto', 'nb_tpo_ppto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tpo_ppto' => 'Id Tpo Ppto',
			'nb_tpo_ppto' => 'Codigo Tipo Presupuesto',
			'nb_tpo_ppto' => 'Tipo presupuesto',
			'ds_tpo_ppto' => 'Descripción',
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

		$criteria->compare('id_tpo_ppto',$this->id_tpo_ppto);
		$criteria->compare('nb_tpo_ppto',$this->nb_tpo_ppto);
		$criteria->compare('nb_tpo_ppto',$this->nb_tpo_ppto,true);
		$criteria->compare('ds_tpo_ppto',$this->ds_tpo_ppto,true);
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
	 * @return TpoPpto the static model class
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
            if($this->nb_tpo_ppto==null || $this->nb_tpo_ppto==0 ||  $this->nb_tpo_ppto=='')
                $this->nb_tpo_ppto=1;

            if($this->isNewRecord)
            {
                  $maxCo = Yii::app()->db->createCommand()
                   ->select('max(nb_tpo_ppto) as max')
                   ->from('fzs_tpo_ppto')
                   ->queryScalar();
                                
                  $this->nb_tpo_ppto = $maxCo + 1;

              }else{
                  $this->usr_modf = Yii::app()->user->id;
              }

             return true;
         }
         else
         return false;
        }
}
