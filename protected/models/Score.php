<?php

/**
 * This is the model class for table "score".
 *
 * The followings are the available columns in table 'score':
 * @property integer $id
 * @property string $ik_id
 * @property string $d_id
 * @property string $username
 * @property integer $score
 * @property string $scoredate
 */
class Score extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Score the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'score';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('score', 'numerical', 'integerOnly'=>true),
                        array( 'score,ik_id,d_id,username,scoredate', 'required' ),
			array('ik_id, d_id, username, scoredate', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ik_id, d_id, username, score, scoredate', 'safe', 'on'=>'search'),
		);
	}

        public function beforeValidate(){
          $model = Score::model()->findByAttributes(
            array(
              'ik_id'     => $this->ik_id,
              'd_id'      => $this->d_id,
              'scoredate' => $this->scoredate,
              'score'     => $this->score
            )
          );

          if( $model ) {
            # this record already exists, only the name can be different
            $username = $this->username;
            $this->setAttributes( $model->getAttributes(), false );
            $this->username = $username;
            $this->isNewRecord=false;
          }

          return parent::beforeValidate();
        }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ik_id' => 'Ik',
			'd_id' => 'D',
			'username' => 'Username',
			'score' => 'Score',
			'scoredate' => 'Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('ik_id',$this->ik_id,true);
		$criteria->compare('d_id',$this->d_id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('score',$this->score);
		$criteria->compare('scoredate',$this->scoredate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
