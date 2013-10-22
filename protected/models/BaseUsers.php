<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $nickname
 * @property string $password
 * @property string $firstname
 * @property string $lastname
 * @property integer $sex
 * @property integer $country
 * @property string $city
 * @property string $dateofbirth
 * @property string $height
 * @property string $religion
 * @property string $maritalstatus
 * @property string $occupation
 * @property string $education
 * @property integer $smoker
 * @property string $description
 * @property string $email
 * @property string $lookingforanagerange
 * @property string $idealmatchdescription
 * @property integer $photo
 * @property integer $delete_denied
 * @property integer $deleted
 */
class BaseUsers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nickname, password, firstname, lastname', 'required'),
			array('sex, country, smoker, photo, delete_denied, deleted', 'numerical', 'integerOnly'=>true),
			array('nickname, email, lookingforanagerange', 'length', 'max'=>20),
			array('password, firstname, lastname, city, height, religion', 'length', 'max'=>50),
			array('maritalstatus, occupation', 'length', 'max'=>100),
			array('education', 'length', 'max'=>200),
			array('description, idealmatchdescription', 'length', 'max'=>600),
			array('dateofbirth', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nickname, password, firstname, lastname, sex, country, city, dateofbirth, height, religion, maritalstatus, occupation, education, smoker, description, email, lookingforanagerange, idealmatchdescription, photo, delete_denied, deleted', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nickname' => 'Nickname',
			'password' => 'Password',
			'firstname' => 'First name',
			'lastname' => 'Last name',
			'sex' => 'Sex',
			'country' => 'Country',
			'city' => 'City',
			'dateofbirth' => 'Date of birth',
			'height' => 'Height',
			'religion' => 'Religion',
			'maritalstatus' => 'Marital status',
			'occupation' => 'Occupation',
			'education' => 'Education',
			'smoker' => 'smoker',
			'description' => 'Description',
			'email' => 'Email',
			'lookingforanagerange' => 'Looking for an age range',
			'idealmatchdescription' => 'Ideal match description',
			'photo' => 'Photo',
			'delete_denied' => 'Delete Denied',
			'deleted' => 'Deleted',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('country',$this->country);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('dateofbirth',$this->dateofbirth,true);
		$criteria->compare('height',$this->height,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('maritalstatus',$this->maritalstatus,true);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('smoker',$this->smoker);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('lookingforanagerange',$this->lookingforanagerange,true);
		$criteria->compare('idealmatchdescription',$this->idealmatchdescription,true);
		$criteria->compare('photo',$this->photo);
		$criteria->compare('delete_denied',$this->delete_denied);
		$criteria->compare('deleted',$this->deleted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BaseUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
