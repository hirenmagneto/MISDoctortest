<?php

/**
 * This is the model class for table "tbl_product".
 *
 * The followings are the available columns in table 'tbl_product':
 * @property integer $product_id
 * @property integer $prod_category_id
 * @property string $product_name
 * @property string $product_desc
 * @property string $series_name
 * @property string $operation_type
 * @property string $features
 * @property string $prod_width
 * @property string $prod_projection
 * @property string $frame_colour
 * @property string $cassette_size
 * @property string $leg_screw
 * @property string $mandatory_bolt
 * @property string $torsion_bar
 * @property string $adjustable_pitch
 * @property string $roller_tube
 * @property string $arm_cables
 * @property string $springs
 * @property string $front_bar
 * @property string $arm
 * @property string $wall_bracket
 * @property string $soffit_bracket
 * @property string $worm_gear
 * @property string $motor_remote
 * @property string $manual_motor
 * @property string $power_cord_plug
 * @property string $fabric
 * @property string $mildew_resistant
 * @property string $water_repellent
 * @property string $meta_title
 * @property string $meta_key
 * @property string $meta_description
 * @property integer $isactive
 * @property string $created_by
 * @property string $created_on
 * @property string $updated_by
 * @property string $updated_on
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prod_category_id, series_name, operation_type, features, prod_width, prod_projection, frame_colour, cassette_size, leg_screw, mandatory_bolt, torsion_bar, adjustable_pitch, roller_tube, arm_cables, springs, front_bar, arm, wall_bracket, soffit_bracket, worm_gear, motor_remote, manual_motor, power_cord_plug, fabric, mildew_resistant, water_repellent, meta_title, meta_key, meta_description, isactive', 'required'),
			array('prod_category_id, isactive', 'numerical', 'integerOnly'=>true),
			array('operation_type, prod_width, prod_projection, frame_colour, cassette_size, leg_screw, mandatory_bolt, torsion_bar, adjustable_pitch, roller_tube, arm_cables, springs, front_bar, arm, wall_bracket, soffit_bracket, worm_gear, motor_remote, manual_motor, power_cord_plug, fabric, mildew_resistant, water_repellent, meta_title, meta_key', 'length', 'max'=>500),
			array('features', 'length', 'max'=>2000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('product_id, prod_category_id, series_name, operation_type, features, prod_width, prod_projection, frame_colour, cassette_size, leg_screw, mandatory_bolt, torsion_bar, adjustable_pitch, roller_tube, arm_cables, springs, front_bar, arm, wall_bracket, soffit_bracket, worm_gear, motor_remote, manual_motor, power_cord_plug, fabric, mildew_resistant, water_repellent, meta_title, meta_key, meta_description, isactive', 'safe', 'on'=>'search'),
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
			'product_id' => 'Product',
			'prod_category_id' => 'Product Category',
			'product_name' => 'Product Name',
			'product_desc' => 'Product Description',
			'series_name' => 'Series Name',
			'operation_type' => 'Operation Type',
			'features' => 'Features',
			'prod_width' => 'Width (ft)',
			'prod_projection' => 'Projection (ft)',
			'frame_colour' => 'Frame Colour',
			'cassette_size' => 'Cassette Size',
			'leg_screw' => 'Screws - Lag Screws',
			'mandatory_bolt' => 'Screws - Masonry Bolt',
			'torsion_bar' => 'Torsion Bar',
			'adjustable_pitch' => 'Adjustable Pitch',
			'roller_tube' => 'Roller Tube',
			'arm_cables' => 'Arm Cables',
			'springs' => 'Springs',
			'front_bar' => 'Front Bar',
			'arm' => 'Arm',
			'wall_bracket' => 'Wall Mounting Bracket',
			'soffit_bracket' => 'Soffit Mounting Bracket',
			'worm_gear' => 'Worm Gear',
			'motor_remote' => 'Motor with Remote',
			'manual_motor' => 'Manual Override Motor',
			'power_cord_plug' => 'Power Cord & Power Plug',
			'fabric' => 'Fabric',
			'mildew_resistant' => 'UV, Fade, Mildew Resistant',
			'water_repellent' => 'Water Repellant',
			'meta_title' => 'Meta Title',
			'meta_key' => 'Meta Key',
			'meta_description' => 'Meta Description',
			'isactive' => 'Is Active',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'updated_by' => 'Updated By',
			'updated_on' => 'Updated On',
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

		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('prod_category_id',$this->prod_category_id);
		$criteria->compare('product_name',$this->product_name,true);
		$criteria->compare('product_desc',$this->product_desc,true);
		$criteria->compare('series_name',$this->series_name,true);
		$criteria->compare('operation_type',$this->operation_type,true);
		$criteria->compare('features',$this->features,true);
		$criteria->compare('prod_width',$this->prod_width,true);
		$criteria->compare('prod_projection',$this->prod_projection,true);
		$criteria->compare('frame_colour',$this->frame_colour,true);
		$criteria->compare('cassette_size',$this->cassette_size,true);
		$criteria->compare('leg_screw',$this->leg_screw,true);
		$criteria->compare('mandatory_bolt',$this->mandatory_bolt,true);
		$criteria->compare('torsion_bar',$this->torsion_bar,true);
		$criteria->compare('adjustable_pitch',$this->adjustable_pitch,true);
		$criteria->compare('roller_tube',$this->roller_tube,true);
		$criteria->compare('arm_cables',$this->arm_cables,true);
		$criteria->compare('springs',$this->springs,true);
		$criteria->compare('front_bar',$this->front_bar,true);
		$criteria->compare('arm',$this->arm,true);
		$criteria->compare('wall_bracket',$this->wall_bracket,true);
		$criteria->compare('soffit_bracket',$this->soffit_bracket,true);
		$criteria->compare('worm_gear',$this->worm_gear,true);
		$criteria->compare('motor_remote',$this->motor_remote,true);
		$criteria->compare('manual_motor',$this->manual_motor,true);
		$criteria->compare('power_cord_plug',$this->power_cord_plug,true);
		$criteria->compare('fabric',$this->fabric,true);
		$criteria->compare('mildew_resistant',$this->mildew_resistant,true);
		$criteria->compare('water_repellent',$this->water_repellent,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_key',$this->meta_key,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('isactive',$this->isactive);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('updated_on',$this->updated_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
        
    public function getProname()
    {
       return $this->series_name.' '.$this->operation_type;
    }
}
