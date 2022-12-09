<?php



    class Conection
    {
        // atributos 
        private $host;
        private $bdname;
        private $user;
        private $password;


        // metodos 

        public function __construct(){
            $this-> host  = "localhost";
            $this-> user = "root";
            $this-> bdname = "test_crud";   
            $this-> password = "";

            $con = mysqli_connect($this->host, $this->user, $this->password);
            if($con){
                mysqli_select_bd($this->bdname, $con);
            }else{
                die(mysqli_error());
            }
            
        }

        public function cosultasSimples($sql){
            mysqli_query($sql);
        }

        public function consultarRetorno($sql){
            $consulta = mysqli_query($sql);
            return $consulta;
        }
    }


