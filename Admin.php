<?php
include 'user.php';

class Admin extends User{
       
   
    public function addproduct_A($pname,$price,$pdesc,$pimg)
    {
            $this->pname=$pname;
			$this->price=$price;
			$this->pdesc=$pdesc;
            $this->pimg=$pimg;
            $DB = DaBa::get_instance();
			$check=$DB->Insertproduct($pname,$price,$pdesc,$pimg);
    }
    
    public function Updateproduct_A($pname,$p_new_name,$price,$pdesc,$pimg)
    {
            $this->pname=$pname;
			$this->price=$price;
			$this->pdesc=$pdesc;
          
            $this->pimg=$pimg;
          $DB = DaBa::get_instance();
			$check=$DB->UpdateProduct($pname,$p_new_name,$price,$pdesc,$pimg);
    }
    public function Deleteproduct_A($pname)
    {
            $this->pname=$pname;
             $DB = DaBa::get_instance();
			$check=$DB->Deleteproduct($pname);
    }
    
    
      public function view_feedback_A(){
			 $DB = DaBa::get_instance();
			$data=$DB->view_feedback();
            return $data;
		}
    
    
    
}

//$A = new Admin();






?>