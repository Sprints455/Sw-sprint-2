<?php
class DaBa{
		public $Servername;
		public $Username;
		public $Password;
		public $DBname;
    
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

		protected function connect(){
			$this->Servername="localhost";
			$this->Username="root";
			$this->Password="";
			$this->DBname="sw2_sprint2";
			$conn =new mysqli($this->Servername,$this->Username,$this->Password,$this->DBname);
			return $conn;
		}

    
  
    
    public function Insertuser($username,$email,$password,$address){
                $sql ="INSERT INTO  user(username,email,password,address) 
                VALUES ('$username','$email','$password','$address') ";
                $result=$this->connect()->query($sql);
                return $result;
             }    
     
    
    
    public function getAllUsers(){
                $sql="SELECT * FROM  user";
                $result=$this->connect()->query($sql);
                $numRows=$result->num_rows;
                if($numRows > 0){
                    while ($row=$result->fetch_assoc()) {
                        $data[]=$row;
                    }
                    return $data;
                }
            }    
    
    
    public function CheckUser($username,$password){
				$datas=$this->getAllUsers();
               foreach ( (array)$datas as $data) {
                if($username==$data['username']&&$password==$data['password'])
                {
                    	$_SESSION['username']=$username;
		                	header('location:product.php');
                }	
						
                   
			}
        
                 
					
    }
     
		 
    
    public function Insertproduct($pname,$price,$pdesc,$pimg){
			$sql =  " INSERT INTO  product
            (name,price,product_desc,img) 
			                   VALUES
                     ('$pname','$price','$pdesc','$pimg') ";
  			$result=$this->connect()->query($sql);
		   	return $result;
		 }
  
     public function UpdateProduct($pname,$p_new_name,$price,$pdesc,$pimg)
     {
			$sql =  " Update  product set   name='$p_new_name' , price='$price' , product_desc='$pdesc' , img='$pimg'  where  name= '$pname' ";
           
  			$result=$this->connect()->query($sql);
		   	return $result;
		 }
    
       
   public function Deleteproduct($pname)
    {
        $sql = "DELETE  FROM product WHERE name='$pname'";
            
        	$result=$this->connect()->query($sql);
		   	return $result;
    }
    
     public function displayproudect()  
    {
            $sql ="SELECT * FROM product ";
            $result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows > 0){
				while ($row=$result->fetch_assoc()) {
					$data[]=$row;
				}
			
           
                	return $data;
			}
      

    }
    
  
    
   
    
    
    public function InsertFeedback($sp2_username,$sp2_info){
			$sql =  " INSERT INTO  sprint2_feadback
            (sp2_username,sp2_info) VALUES('$sp2_username','$sp2_info') ";
  			$result=$this->connect()->query($sql);
		   	return $result;
		 }
    public function view_feedback()  
    {
            $sql ="SELECT * FROM sprint2_feadback";
            $result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows > 0){
				while ($row=$result->fetch_assoc()) {
					$data[]=$row;
				}
			
           
                	return $data;
			}
      

    }
     
    
   public function getAllcart($c_username,$c_pid){
                $sql="SELECT id , c_username , c_pid FROM   sprint2_cart WHERE c_username='$c_username' AND c_pid='$c_pid'";
      
                $result=$this->connect()->query($sql);
                $numRows=$result->num_rows;
                if($numRows > 0){
                    while ($row=$result->fetch_assoc()) {
                        $data[]=$row;
                    }
                    return $data;
                }
        else{
            $data[]=[];
            return $data;
        }
            }  
    
    
    
     public function push_into_Cart($c_username,$c_pid){

         $datas=$this->getAllcart($c_username,$c_pid);
          foreach ((array)$datas as $data) {
                if($c_username != $data['c_username'] && $c_pid != $data['c_pid'])
                {
                    	
                        $sql =  "INSERT INTO  sprint2_cart (c_username,c_pid) VALUES('$c_username','$c_pid') ";
  			           $result=$this->connect()->query($sql);
		   	           return $result;
                     
                }
               
              
                                      
               }
			
		 }
     public function show_Cart_content($c_username)  
    {
        
            $sql =" SELECT   * FROM product INNER JOIN sprint2_cart ON product.id=sprint2_cart.c_pid WHERE sprint2_cart.c_username='$c_username'";
         
            $result=$this->connect()->query($sql);
			$numRows=$result->num_rows;
			if($numRows > 0){
				while ($row=$result->fetch_assoc()) {
					$data[]=$row;
				}
			
           
                	return $data;
			}
      

    }
      public function remove_Cart_product($c_pid)
    {
        $sql = "DELETE  FROM sprint2_cart WHERE id='$c_pid'";
            
        	$result=$this->connect()->query($sql);
		   	return $result;
    }

    
    
    
    
    
    
}
?>