<?php

/**
 * This is the model class for table "fzs_ppto_mm_fmldo".
 *
 * The followings are the available columns in table 'fzs_ppto_mm_fmldo':
 * @property integer $id_ppto_mm_fmldo
 * @property integer $co_ppto_mm_fmldo
 * @property integer $co_ppto_mm_plfdo
 * @property string $mnto_1
 * @property string $mnto_2
 * @property string $mnto_3
 * @property string $mnto_4
 * @property string $mnto_5
 * @property string $mnto_6
 * @property string $mnto_7
 * @property string $mnto_8
 * @property string $mnto_9
 * @property string $mnto_10
 * @property string $mnto_11
 * @property string $mnto_12
 * @property string $mnto_ttl
 * @property integer $vrsn
 * @property integer $por_vrbl_mcrnoca
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 *
 * The followings are the available model relations:
 * @property PptoMmPlfdo $coPptoMmPlfdo
 */
class PptoMmFmldo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'fzs_ppto_mm_fmldo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('co_ppto_mm_plfdo, por_vrbl_mcrnoca', 'required'),
			array('co_ppto_mm_fmldo, co_ppto_mm_plfdo, vrsn, por_vrbl_mcrnoca', 'numerical', 'integerOnly'=>true),
			array('mnto_1, mnto_2, mnto_3, mnto_4, mnto_5, mnto_6, mnto_7, mnto_8, mnto_9, mnto_10, mnto_11, mnto_12, mnto_ttl, usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
			array('fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ppto_mm_fmldo, co_ppto_mm_fmldo, co_ppto_mm_plfdo, mnto_1, mnto_2, mnto_3, mnto_4, mnto_5, mnto_6, mnto_7, mnto_8, mnto_9, mnto_10, mnto_11, mnto_12, mnto_ttl, vrsn, por_vrbl_mcrnoca, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
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
			'coPptoMmPlfdo' => array(self::BELONGS_TO, 'PptoMmPlfdo', 'co_ppto_mm_plfdo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ppto_mm_fmldo' => 'Id Ppto Mm Fmldo',
			'co_ppto_mm_fmldo' => 'Codigo de Formulacion',
			'co_ppto_mm_plfdo' => 'Codigo de Planificacion',
			'mnto_1' => 'Enero',
			'mnto_2' => 'Febrero',
			'mnto_3' => 'Marzo',
			'mnto_4' => 'Abril',
			'mnto_5' => 'Mayo',
			'mnto_6' => 'Junio',
			'mnto_7' => 'Julio',
			'mnto_8' => 'Agosto',
			'mnto_9' => 'Septiembre',
			'mnto_10' => 'Octubre',
			'mnto_11' => 'Noviembre',
			'mnto_12' => 'Diciembre',
			'mnto_ttl' => 'Monto Total',
			'vrsn' => 'Version',
			'por_vrbl_mcrnoca' => '% variable macroeconomica',
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

		$criteria->compare('id_ppto_mm_fmldo',$this->id_ppto_mm_fmldo);
		$criteria->compare('co_ppto_mm_fmldo',$this->co_ppto_mm_fmldo);
		$criteria->compare('co_ppto_mm_plfdo',$this->co_ppto_mm_plfdo);
		$criteria->compare('mnto_1',$this->mnto_1,true);
		$criteria->compare('mnto_2',$this->mnto_2,true);
		$criteria->compare('mnto_3',$this->mnto_3,true);
		$criteria->compare('mnto_4',$this->mnto_4,true);
		$criteria->compare('mnto_5',$this->mnto_5,true);
		$criteria->compare('mnto_6',$this->mnto_6,true);
		$criteria->compare('mnto_7',$this->mnto_7,true);
		$criteria->compare('mnto_8',$this->mnto_8,true);
		$criteria->compare('mnto_9',$this->mnto_9,true);
		$criteria->compare('mnto_10',$this->mnto_10,true);
		$criteria->compare('mnto_11',$this->mnto_11,true);
		$criteria->compare('mnto_12',$this->mnto_12,true);
		$criteria->compare('mnto_ttl',$this->mnto_ttl,true);
		$criteria->compare('vrsn',$this->vrsn);
		$criteria->compare('por_vrbl_mcrnoca',$this->por_vrbl_mcrnoca);
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
	 * @return PptoMmFmldo the static model class
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

            if (parent::beforeSave()) {
            
                if ($this->co_ppto_mm_fmldo == null || $this->co_ppto_mm_fmldo == 0 || $this->co_ppto_mm_fmldo == '')
                    $this->co_ppto_mm_fmldo = 1;

                $maxCo = Yii::app()->db->createCommand()
                        ->select('max(vrsn) as max')
                        ->from('fzs_ppto_mm_fmldo')
                        ->queryScalar();

                $this->mnto_1 = str_replace(",", "", $this->mnto_1);
                $this->mnto_2 = str_replace(",", "", $this->mnto_2);
                $this->mnto_3 = str_replace(",", "", $this->mnto_3);
                $this->mnto_4 = str_replace(",", "", $this->mnto_4);
                $this->mnto_5 = str_replace(",", "", $this->mnto_5);
                $this->mnto_6 = str_replace(",", "", $this->mnto_6);
                $this->mnto_7 = str_replace(",", "", $this->mnto_7);
                $this->mnto_8 = str_replace(",", "", $this->mnto_8);
                $this->mnto_9 = str_replace(",", "", $this->mnto_9);
                $this->mnto_10 = str_replace(",", "", $this->mnto_10);
                $this->mnto_11 = str_replace(",", "", $this->mnto_11);
                $this->mnto_12 = str_replace(",", "", $this->mnto_12);

                $this->mnto_ttl = $this->mnto_1 + $this->mnto_2 + $this->mnto_3 + $this->mnto_4 + $this->mnto_5 + $this->mnto_6 + $this->mnto_7 + $this->mnto_8 + $this->mnto_9 + $this->mnto_10 + $this->mnto_11 + $this->mnto_12;

                if ($this->isNewRecord) {
                    $maxCo = Yii::app()->db->createCommand()
                            ->select('max(co_ppto_mm_fmldo) as max')
                            ->from('fzs_ppto_mm_fmldo')
                            ->queryScalar();
                    $this->co_ppto_mm_fmldo = $maxCo + 1;

                    $this->vrsn = $maxCo + 1;
                } else {
                    $this->usr_modf = Yii::app()->user->id;

                    $this->vrsn = $maxCo + 1;

                    
                    //Guardando historico
                    $actPptoMmFmldo = Yii::app()->db->createCommand()
                            ->select('*')
                            ->from('fzs_ppto_mm_fmldo')
                            ->where('co_ppto_mm_fmldo=:co_ppto_mm_fmldo', array(':co_ppto_mm_fmldo' => $this->co_ppto_mm_fmldo))
                            ->queryAll();

                    $hysPptoMmFmldo = new PptoMmFmldoHyst();
                    foreach ($actPptoMmFmldo as $row){
                        $hysPptoMmFmldo->co_ppto_mm_plfdo = $row['co_ppto_mm_plfdo'];
                        $hysPptoMmFmldo->co_ppto_mm_fmldo = $row['co_ppto_mm_fmldo'];
                        $hysPptoMmFmldo->mnto_1 = $row['mnto_1'];
                        $hysPptoMmFmldo->mnto_2 = $row['mnto_2'];
                        $hysPptoMmFmldo->mnto_3 = $row['mnto_3'];
                        $hysPptoMmFmldo->mnto_4 = $row['mnto_4'];
                        $hysPptoMmFmldo->mnto_5 = $row['mnto_5'];
                        $hysPptoMmFmldo->mnto_6 = $row['mnto_6'];
                        $hysPptoMmFmldo->mnto_7 = $row['mnto_7'];
                        $hysPptoMmFmldo->mnto_8 = $row['mnto_8'];
                        $hysPptoMmFmldo->mnto_9 = $row['mnto_9'];
                        $hysPptoMmFmldo->mnto_10 = $row['mnto_10'];
                        $hysPptoMmFmldo->mnto_11 = $row['mnto_11'];
                        $hysPptoMmFmldo->mnto_12 = $row['mnto_12'];
                        $hysPptoMmFmldo->mnto_ttl = $row['mnto_ttl'];
                        $hysPptoMmFmldo->vrsn = $row['vrsn'];
                        $hysPptoMmFmldo->por_vrbl_mcrnoca = $row['por_vrbl_mcrnoca'];
                        $hysPptoMmFmldo->fe_crea = $row["fe_crea"];
                        $hysPptoMmFmldo->fe_modf = $this->fe_modf;
                        $hysPptoMmFmldo->usr_crea = $row["usr_crea"];
                        $hysPptoMmFmldo->usr_crea = Yii::app()->user->id;
                        $hysPptoMmFmldo->in_stat = 'I';                    
                    }
                    $hysPptoMmFmldo->save();
                    
                }

                return true;
            } else {
                return false;
            }
        }   
        
}
