<?php
include 'database.php';

class cart {
        private $c_username;
		private $c_pid;

public function show_Cart_content_u($c_username) {
			$DB = new  DaBa();
			$data=$DB->show_Cart_content($c_username) ;
         return $data;
		}
    
    public function remove_Cart_product_u($c_pid) {
			$DB = new  DaBa();
			$data=$DB->remove_Cart_product($c_pid);
         return $data;
		}
    
    
    
}
?>