<?php

/**
 * This is the model class for table "tbl_contact_us".
 *
 * The followings are the available columns in table 'tbl_contact_us':
 * @property integer $table_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property string $phone
 * @property string $address_1
 * @property string $address_2
 * @property string $country
 * @property string $state
 * @property string $zip_code
 * @property string $city
 * @property string $series
 * @property string $operation
 * @property string $size
 * @property string $model_number
 * @property string $series_number
 * @property string $date_of_purchase
 * @property string $store_of_purchare
 * @property string $subject
 * @property string $comment
 * @property string $upload_file
 * @property string $fabric_color_1
 * @property string $fabric_color_2
 * @property string $enquiry_type
 * @property string $ip_address
 * @property string $country_name
 * @property string $created_on
 */
class ContactUs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_contact_us';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//	array('first_name, last_name, email_address, phone, address_1, address_2, country, state, zip_code, city, series, operation, size, model_number, series_number, date_of_purchase, store_of_purchare, subject, comment, upload_file, fabric_color_1, fabric_color_2, enquiry_type, ip_address, country_name, created_on', 'required'),
		//	array('first_name, last_name, email_address, address_1, address_2, enquiry_type', 'length', 'max'=>255),
		//	array('phone, country, state, zip_code, city, series, operation, size, model_number, series_number, date_of_purchase, store_of_purchare, subject, upload_file, fabric_color_1, fabric_color_2, ip_address, country_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
		//	array('table_id, first_name, last_name, email_address, phone, address_1, address_2, country, state, zip_code, city, series, operation, size, model_number, series_number, date_of_purchase, store_of_purchare, subject, comment, upload_file, fabric_color_1, fabric_color_2, enquiry_type, ip_address, country_name, created_on', 'safe', 'on'=>'search'),
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
			'table_id' => 'Table',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email_address' => 'Email Address',
			'phone' => 'Phone Number',
			'address_1' => 'Address Line 1',
			'address_2' => 'Address Line 2',
			'country' => 'Country Name',
			'state' => 'State Name',
			'zip_code' => 'Zip Code',
			'city' => 'City Name',
			'series' => 'Series Type',
			'operation' => 'Operation Type',
			'size' => 'Size',
			'model_number' => 'Model Number',
			'series_number' => 'Series Number',
			'date_of_purchase' => 'Date Of Purchase',
			'store_of_purchare' => 'Store Of Purchase',
			'subject' => 'Subject',
			'comment' => 'Comment',
			'upload_file' => 'Uploaded File',
			'fabric_color_1' => 'Fabric Color 1',
			'fabric_color_2' => 'Fabric Color 2',
			'enquiry_type' => 'Enquiry Type',
			'ip_address' => 'Ip Address',
			'country_name' => 'Country Name',
			'created_on' => 'Contact Date Time',
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

		$criteria->compare('table_id',$this->table_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('address_1',$this->address_1,true);
		$criteria->compare('address_2',$this->address_2,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip_code',$this->zip_code,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('series',$this->series,true);
		$criteria->compare('operation',$this->operation,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('model_number',$this->model_number,true);
		$criteria->compare('series_number',$this->series_number,true);
		$criteria->compare('date_of_purchase',$this->date_of_purchase,true);
		$criteria->compare('store_of_purchare',$this->store_of_purchare,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('upload_file',$this->upload_file,true);
		$criteria->compare('fabric_color_1',$this->fabric_color_1,true);
		$criteria->compare('fabric_color_2',$this->fabric_color_2,true);
		$criteria->compare('enquiry_type',$this->enquiry_type,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('country_name',$this->country_name,true);
		$criteria->compare('created_on',$this->created_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ContactUs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
