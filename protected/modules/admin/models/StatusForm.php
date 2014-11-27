<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class StatusForm extends CFormModel
{
	public $status_id;
	public $user_id;
	public $status_text;
	public $status_pict;
	public $status_file;
	public $status_like;
	public $status_comment;
	public $user_created_date;
	public $user_modified_date;
	public $saveType;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			array('status_id, user_id, status_text, status_pict, status_like, status_comment, user_created_date, user_modified_date, saveType', 'required'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'status_id' => 'StatusID',
			'user_id' => 'UserID',
			'status_text' => 'StatusText',
			'status_pict' => 'StatusPict',
			'status_like' => 'StatusLike',
			'status_comment' => 'StatusComment'
		);
	}

	public function save(){
		$d = strtotime($this->user_date);
		$date = date("Y-m-d", $d);
		$this->user_created_date = date("Y-m-d H:i:s"); 
		if($this->saveType=='add'){
			$data = new TStatus;
			$data->status_id = $this->status_id;
			$data->user_id = $this->user_id;
			$data->status_text = $this->status_text;
			$data->status_pict = $this->status_pict;
			$data->status_like = $this->status_like;
			$data->status_comment = $this->status_comment;
			$data->user_created_date = $this->user_created_date;
			$data->user_modified_date = $this->user_modified_date;
			$data->save();
		}else{
			$data = TStatus::model()->find(array('condition'=>'user_id=:userid','params'=>array(':userid'=>$_GET['i'])));
			if($data->email != $this->email){
				$date = date("Y-m-d H:i:s");
				$data->updateByPk($_GET['i'],array(
	                $data = new TStatus;
					'status_id' = $this->status_id,
					'user_id' = $this->user_id,
					'status_text' = $this->status_text,
					'status_pict' = $this->status_pict,
					'status_like' = $this->status_like,
					'status_comment' = $this->status_comment,
	                'user_modified_by'=> $date,
	                'user_modified_date'=> $date));
			}else{
				$data->updateByPk($_GET['i'],array(
	                'status_id' = $this->status_id,
					'user_id' = $this->user_id,
					'status_text' = $this->status_text,
					'status_pict' = $this->status_pict,
					'status_like' = $this->status_like,
					'status_comment' = $this->status_comment,
	                'user_modified_by'=> $date,
	                'user_modified_date'=> $date));
			}
		}
	}

	public function edit(){
		$i=$_GET['i'];
		$criteria = new CDbCriteria;
		$criteria->addSearchCondition('user_id',$i,true,'=');
		$data=TStatus::model()->find($criteria);
		$this->username = $data->username;
		$this->fullname = $data->fullname;
		$this->email = $data->email;
		$this->user_date = $data->user_date;
		$this->gender = $data->gender;
		$this->user_created_date = $data->user_created_date;
		$this->user_modified_by = $data->user_modified_by;
		$this->user_modified_date = $data->user_modified_date;
		$this->saveType = 'edit';
	}
}
