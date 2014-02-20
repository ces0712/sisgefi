<?php

/**
 * This is the model class for table "fzs_fmla".
 *
 * The followings are the available columns in table 'fzs_fmla':
 * @property integer $id_fmla
 * @property integer $co_fmla
 * @property string $nb_fmla
 * @property string $ds_fmla
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 *
 * The followings are the available model relations:
 * @property PlanCpra[] $planCpras
 */
class Fmla extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fzs_fmla';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_fmla', 'required'),
			array('co_fmla', 'numerical', 'integerOnly'=>true),
			array('nb_fmla', 'length', 'max'=>30),
			array('ds_fmla, tx_desc', 'length', 'max'=>100),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('fe_crea, fe_modf', 'safe'),
                    
                        //Valida unique key
                        array('nb_fmla', 'unique', 'attributeName'=>'nb_fmla'),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_fmla, co_fmla, nb_fmla, ds_fmla, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc, dataLista', 'safe', 'on'=>'search'),
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
			'planCpras' => array(self::HAS_MANY, 'PlanCpra', 'nb_fmla'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_fmla' => 'Id Fmla',
			'co_fmla' => 'Codigo familia',
			'nb_fmla' => 'Familia',
			'ds_fmla' => 'Descripción',
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

		$criteria->compare('id_fmla',$this->id_fmla);
		$criteria->compare('co_fmla',$this->co_fmla);
		$criteria->compare('nb_fmla',$this->nb_fmla,true);
		$criteria->compare('ds_fmla',$this->ds_fmla,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('tx_desc',$this->tx_desc,true);

                $criteria->addSearchCondition('concat(nb_fmla, " - ", ds_fmla)', $this->dataLista); 
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Fmla the static model class
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
            if($this->co_fmla==null || $this->co_fmla==0 ||  $this->co_fmla=='')
                $this->co_fmla=1;

            if($this->isNewRecord)
            {
                  $maxCo = Yii::app()->db->createCommand()
                   ->select('max(co_fmla) as max')
                   ->from('fzs_fmla')
                   ->queryScalar();
                                
                  $this->co_fmla = $maxCo + 1;

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
                return $this->nb_fmla . ' - ' . $this->ds_fmla;
        }
        
}
