<?php

/**
 * This is the model class for table "tbl_news".
 *
 * The followings are the available columns in table 'tbl_news':
 * @property integer $news_id
 * @property string $news_title
 * @property string $news_title_slug
 * @property string $news_content
 * @property string $news_date
 * @property string $created_on
 * @property string $meta_key
 * @property string $meta_title
 * @property string $meta_description
 * @property integer $isactive
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('news_title, news_title_slug, news_content, news_date, meta_key, meta_title, meta_description, isactive', 'required'),
			array('isactive', 'numerical', 'integerOnly'=>true),
			array('news_title, news_title_slug, meta_key, meta_title', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('news_id, news_title, news_title_slug, news_content, news_date, created_on, meta_key, meta_title, meta_description, isactive', 'safe', 'on'=>'search'),
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
			'news_id' => 'News',
			'news_title' => 'News Title',
			'news_title_slug' => 'News Title Slug',
			'news_content' => 'News Content',
			'news_date' => 'News Date',
			'created_on' => 'Created On',
			'meta_key' => 'Meta Key',
			'meta_title' => 'Meta Title',
			'meta_description' => 'Meta Description',
			'isactive' => 'Is Active',
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

		$criteria->compare('news_id',$this->news_id);
		$criteria->compare('news_title',$this->news_title,true);
		$criteria->compare('news_title_slug',$this->news_title_slug,true);
		$criteria->compare('news_content',$this->news_content,true);
		$criteria->compare('news_date',$this->news_date,true);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('meta_key',$this->meta_key,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('isactive',$this->isactive);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
