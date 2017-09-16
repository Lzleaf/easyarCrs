<?php
	/**
	 * Created by PhpStorm.
	 * User: ZhaoLi
	 * Date: 2016/11/29
	 * Time: 18:56
	 */
	class EasyArData{
		public $value = array();

		public function setImage($value){
			$this->value['image']=$value;
		}
		public function setDate($bool = false){
			if($bool)
				$this->value['date']=urlencode(date("Y-m-d\TH:i:s").'.000Z');
			else
				$this->value['date']=date("Y-m-d\TH:i:s").'.000Z';
		}
		public function setAppKey(){
			$this->value['appKey']=\EasyAR::Key;
		}
		public function setActive($value){
			$this->value['active']=$value;
		}
		public function setName($value){
			$this->value['name']=$value;
		}
		public function setSize($value){
			$this->value['size']=$value;
		}
		public function setMeta($value){
			$this->value['size']=$value;
		}
		public function setType($value){
			$this->value['type']=$value;
		}
		public function setSignature($value){
			$this->value['signature']=$value;
		}

	}
	class EasyArApi{
		public function sortData($data){
			ksort($data);
			reset($data);
			$str = '';
			foreach($data as $key=>$val){
				$str = $str.$key.$val;
			}
			$str = sha1($str.EasyAR::Secret);
			return $str;
		}
	}