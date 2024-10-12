<?php
class ProcessRegister {
  public $name, $email, $password, $confirmPass, $errors;
    public function __construct()
    {
        if (!isset($_SESSION)) session_start();

        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->confirmPass = $_POST['confirm_password'];
        $this->errors = [];
        
    }

    public function authorization(){

      if(isset($_SESSION['auth'])){
        header('Location: index.php');
        die();
      }
      if ($_SERVER['REQUEST_METHOD'] === "GET") {
        header("Location: register.php");
        die();
      }

      return $this;
    }

    public function authentication(){
      $_SESSION['auth'] = [
        'name' => $this->name,
        'email' => $this->email
      ];

      return $this;
    }
    public function validate()
    {
      $this->validateName();
      $this->validateEmail();
      $this->validatePassword();

      if (count($this->errors) > 0) {
        $_SESSION['errors'] = $this->errors;
        header("Location: register.php");
        die();
      }

          
      $_SESSION['errors'] = [];

      return $this;
    }

  /**
   * required
   * min 8
   * max 12
   */
  private function validatePassword(){

    if(empty($this->password)){
      $this->errors['password'][]="Password should not be empty!";
    }

    
    if ($this->password !== $this->confirmPass) {
        $this->errors['password'][] = "Password does not match";
    }

    if (
      strlen($this->password) < 8 ||
      strlen($this->password) > 12
    ) {
        $this->errors['password'][] = "Password must be between 8 and 12 characters";
    }


    return $this;
  }

  private function validateEmail(){
    /**
     * required
     * email
     */
    if(empty($this->email)){
      $this->errors['email'][]="Email is Required";
    }
  
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
      $this->errors['email'][]="Email is Invalid Format";
    }

    return $this;

  }
  private function validateName(){

    if(empty($this->name)){
      $this->errors['name'][]="Name is Required";
    }
  
    if((int)$this->name && is_numeric((int)($this->name))){
      $this->errors['name'][]="Name is Invalid";
    }
  
    if(strlen($this->name) > 50){
      $this->errors['name'][]="Name is too long";
    }  


    return $this;
  }


    public function save()
    { 
      return $this;
    }
    public function redirection(){
    
      // redirection...
      header("Location: index.php");
      die();
    }

}
