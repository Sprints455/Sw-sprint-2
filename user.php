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
            $DB = new  DaBa();
			$check=$DB->CheckUser($username,$password);
		}
    
    

     public function displayproudect_u(){
			$DB = new  DaBa();
			$data=$DB->displayproudect();
            return $data;
		}
    
    
    
    public function InsertFeedbacku($sp2_username,$sp2_info){
			$this->sp2_username=$sp2_username;
			$this->p2_info=$sp2_info;
            $DB = new  DaBa();
			$check=$DB->InsertFeedback($sp2_username,$sp2_info);
		 }
   
    
    
    
  
    
}

$u =new User();
//$u->Login('admin',123);
//$u->Login("mahmoudelwan",555);

?>