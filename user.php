<?php
include 'database.php';

class User {

		private $username;
		private $email;
		private $password;
        private $address;
      
    public function Login($username,$password){
			$this->username=$username;
			$this->password=$password;
             $DB = DaBa::get_instance();
			$check=$DB->CheckUser($username,$password);
		}
    
    

     public function displayproudect_u(){
			 $DB = DaBa::get_instance();
			$data=$DB->displayproudect();
            return $data;
		}
    
    
    
    public function InsertFeedbacku($sp2_username,$sp2_info){
			$this->sp2_username=$sp2_username;
			$this->p2_info=$sp2_info;
    $DB = DaBa::get_instance();
			$check=$DB->InsertFeedback($sp2_username,$sp2_info);
		 }
    
    
     public function Push_into_Cart_u($c_username,$c_pid){
			$this->c_username=$c_username;
			$this->c_pid=$c_pid; 
         $DB = DaBa::get_instance();
			$check=$DB->push_into_Cart($c_username,$c_pid);
		 }
   
    
    
    
  
    
}

$u =new User();
//$u->Login('admin',123);
//$u->Login("mahmoudelwan",555);

?>