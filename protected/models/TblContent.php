<?php

/**
 * This is the model class for table "tbl_content".
 *
 * The followings are the available columns in table 'tbl_content':
 * @property integer $content_id
 * @property integer $layout_id
 * @property integer $menu_id
 * @property integer $album_id
 * @property string $content_title
 * @property string $content_title_slug
 * @property string $content_desc
 * @property string $meta_key
 * @property string $meta_title
 * @property string $meta_description
 * @property integer $isactive
 * @property string $created_on
 * @property string $created_by
 * @property string $updated_on
 * @property string $updated_by
 */
class TblContent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('layout_id, menu_id, content_title, content_title_slug, content_desc, meta_key, meta_title, meta_description, isactive, created_on, created_by, updated_on, updated_by', 'required'),
			array('layout_id, menu_id, album_id, isactive', 'numerical', 'integerOnly'=>true),
			array('content_title, content_title_slug, meta_key, meta_title', 'length', 'max'=>500),
			array('created_by, updated_by', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('content_id, layout_id, menu_id, album_id, content_title, content_title_slug, content_desc, meta_key, meta_title, meta_description, isactive, created_on, created_by, updated_on, updated_by', 'safe', 'on'=>'search'),
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
            'layout' => array(self::BELONGS_TO, 'TblLayout', 'layout_id'),
            'menu' => array(self::BELONGS_TO, 'TblMenu', 'menu_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'content_id' => 'Content',
			'layout_id' => 'Layout',
			'menu_id' => 'Menu',
			'album_id' => 'Album',
			'content_title' => 'Content Title',
			'content_title_slug' => 'Content Title Slug',
			'content_desc' => 'Content Desc',
			'meta_key' => 'Meta Key',
			'meta_title' => 'Meta Title',
			'meta_description' => 'Meta Description',
			'isactive' => 'Isactive',
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

		$criteria->compare('content_id',$this->content_id);
		$criteria->compare('layout_id',$this->layout_id);
		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('album_id',$this->album_id);
		$criteria->compare('content_title',$this->content_title,true);
		$criteria->compare('content_title_slug',$this->content_title_slug,true);
		$criteria->compare('content_desc',$this->content_desc,true);
		$criteria->compare('meta_key',$this->meta_key,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_description',$this->meta_description,true);
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
	 * @return TblContent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
