<?php
defined('EXEC') or die;

class Phone {
	
	public function get($id){
		
		$db = dataBase::pdo();
		$getPhone = $db->query("SELECT * FROM crm_phones WHERE phone_id={$id}");
		$phone = $getPhone->fetch();
		
		if($phone){
			return $phone;
		}else{
			return false;
		}
		
	}
	
	public function getAll(){
		
		$db = dataBase::pdo();
		$getPhones = $db->query("SELECT * FROM crm_phones");
		$phones = $getPhones->fetch();
		
		if($phones){
			return $phones;
		}else{
			return false;
		}
		
	}
	
	public function add($data){
		//if(Rules::settingsWorkshop($main)){
			
		//}
	}
	public function update($id,$data){
		//if(Rules::settingsWorkshop($main)){
			
		//}
	}
	public function block($id){
		//if(Rules::settingsWorkshop($main)){
			
		//}
	}
	public function remove($id){
		//if(Rules::settingsWorkshop($main)){
			
		//}
	}
	
}
?>