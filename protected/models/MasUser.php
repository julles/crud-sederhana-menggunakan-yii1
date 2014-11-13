<?php

/**
 * This is the model class for table "mas_user".
 *
 * The followings are the available columns in table 'mas_user':
 * @property string $nip
 * @property string $username
 * @property string $nama
 * @property string $password
 * @property integer $role_id
 *
 * The followings are the available model relations:
 * @property MasRole $role
 */
class MasUser extends CActiveRecord
{
	public $verifikasi_password;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mas_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('role_id', 'numerical', 'integerOnly'=>true),
			array('nip', 'length', 'max'=>15),
			array('username, nama', 'length', 'max'=>40),
			array('password', 'length', 'max'=>225),
			array('password , nip , username,role_id' , 'required'),
			array('nip , username' , 'unique'),
			array('verifikasi_password' , 'compare' , 'compareAttribute' => 'password'),
			array('verifikasi_password , password ' , 'length' , 'min' => 6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nip, username, nama, password, role_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	 
	 public function beforeSave()
	 {
		if(parent::beforeSave())
		{
			$this->password = inc::enkrip($this->password);
			return true;
		}
	 }
	 
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'role' => array(self::BELONGS_TO, 'MasRole', 'role_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nip' => 'Nip',
			'username' => 'Username',
			'nama' => 'Nama',
			'password' => 'Password',
			'role_id' => 'Role',
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

		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role_id',$this->role_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MasUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
