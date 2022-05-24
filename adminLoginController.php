<?php
include "/AppServ/www/portfolio/adminModel.php";

class AdminLoginController{

    private $username;
    private $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function loginAdmin(){
        if($this->emptyInput() == false){
            header("Location: admin.php?status=emptyInput");
            exit();
        }
        
        getAdmin($this->username, $this->password);
    }
    
    private function emptyInput(){
        $result = true;
        if(empty($this->username) || empty($this->password))
        {
            $result = false;
        }
        return $result;
    }
}

?>