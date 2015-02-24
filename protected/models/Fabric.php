<?php

/**
 * This is the model class for table "tbl_fabric".
 *
 * The followings are the available columns in table 'tbl_fabric':
 * @property integer $fabric_id
 * @property string $fabric_code
 * @property string $colour_name
 * @property string $product_ids
 * @property string $fabric_thumb
 * @property string $fabric_big
 * @property string $house_1
 * @property string $house_2
 * @property integer $isactive
 * @property string $created_on
 * @property string $created_by
 * @property string $updated_on
 * @property string $updated_by
 */
class Fabric extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_fabric';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fabric_code,  colour_name, product_ids, fabric_thumb, fabric_big, house_1, house_2, isactive', 'required', 'on'=>'insert'),
            array('fabric_code, colour_name, product_ids, isactive', 'required', 'on'=>'update'),
            //array('fabric_thumb, fabric_big, house_1, house_2', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fabric_id, fabric_code, colour, colour_name, product_ids, fabric_thumb, fabric_big, house_1, house_2, isactive, created_on, created_by, updated_on, updated_by', 'safe', 'on'=>'search'),
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
			'fabric_id' => 'Fabric',
			'fabric_code' => 'Fabric Code',
			'colour_name' => 'Colour Name',
			'product_ids' => 'Select Product',
			'fabric_thumb' => 'Fabric Thumbnail',
			'fabric_big' => 'Fabric Large Image',
			'house_1' => 'House 1 Image',
			'house_2' => 'House 2 Image',
			'isactive' => 'Is Active',
			'created_on' => 'Created On',
			'created_by' => 'Created By',
			'updated_on' => 'Updated On',
			'updated_by' => 'Updated By',
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

		$criteria->compare('fabric_id',$this->fabric_id);
		$criteria->compare('fabric_code',$this->fabric_code,true);
		$criteria->compare('colour_name',$this->colour_name,true);
		$criteria->compare('product_ids',$this->product_ids,true);
		$criteria->compare('fabric_thumb',$this->fabric_thumb,true);
		$criteria->compare('fabric_big',$this->fabric_big,true);
		$criteria->compare('house_1',$this->house_1,true);
		$criteria->compare('house_2',$this->house_2,true);
		$criteria->compare('isactive',$this->isactive);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('updated_on',$this->updated_on,true);
		$criteria->compare('updated_by',$this->updated_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Fabric the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}
