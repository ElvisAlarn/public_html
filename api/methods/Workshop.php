<?php
defined('EXEC') or die;

class Workshop {
	
	public function get($main){
		
		$db = dataBase::pdo();
		$getWorkshop = $db->query("SELECT * FROM crm_workshops WHERE workshop_id=1");
		$workshop = $getWorkshop->fetch();
		
		if($workshop){
			return $workshop;
		}else{
			return false;
		}
		
	}
	
	public function getAll($main){
		
		$db = dataBase::pdo();
		$getWorkshops = $db->query("SELECT * FROM crm_workshops");
		$workshops = $getWorkshops->fetch();
		
		if($workshops){
			return $workshops;
		}else{
			return false;
		}
		
	}
	
	public function add($main){
		if(Rules::settingsWorkshop($main)){
			
		}
	}
	public function update($main){
		if(Rules::settingsWorkshop($main)){
			
		}
	}
	public function block($main){
		if(Rules::settingsWorkshop($main)){
			
		}
	}
	public function remove($main){
		if(Rules::settingsWorkshop($main)){
			
		}
	}
	
}
?>