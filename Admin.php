<?php
include 'user.php';

class Admin extends User{
       
   
    public function addproduct_A($pname,$price,$pdesc,$pimg)
    {
            $this->pname=$pname;
			$this->price=$price;
			$this->pdesc=$pdesc;
            $this->pimg=$pimg;
            $DB = new  DaBa();
			$check=$DB->Insertproduct($pname,$price,$pdesc,$pimg);
    }
    
    public function Updateproduct_A($pname,$p_new_name,$price,$pdesc,$pimg)
    {
            $this->pname=$pname;
			$this->price=$price;
			$this->pdesc=$pdesc;
          
            $this->pimg=$pimg;
            $DB = new  DaBa();
			$check=$DB->UpdateProduct($pname,$p_new_name,$price,$pdesc,$pimg);
    }
    public function Deleteproduct_A($pname)
    {
            $this->pname=$pname;
            $DB = new  DaBa();
			$check=$DB->Deleteproduct($pname);
    }
    
    
      public function view_feedback_A(){
			$DB = new  DaBa();
			$data=$DB->view_feedback();
            return $data;
		}
    
    
     private static $object ;
    
    
   private function __construct(){
       
   }
    public static function get_instance(){
        if(!self::$object)
            self::$object = new static();
        return  self::$object ; 
    }
    public function set($key ,$value)
    {
        $this->$key=$value;
    }
    public function get($key)
    {
       return $this->$key;
    }
}

//$A = new Admin();






?>