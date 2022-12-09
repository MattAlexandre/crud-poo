<?php

    //classe  conection 
    include_once('conection.php');


    class student
    {
        //id
        private $id_student;
        //nome
        private $name;
        //idade
        private $age;
        //nascimento 
        private $birth_date;
        // registro aluno
        private $RA;

        private $con;

        //metodos 


        //metodo construtor 
        public function __construct(){
            $this->con = new conection();
        }

        // setando os valores 
        public function set(/*atributo*/ $attributes, /*conteudo*/$content){
            $this->$attributes = $content;
        }

        // pegando os valores 
        public function get($attributes){
            return $this->$attributes;
        }

        // metodo visualizar estudantes 
        public function list(){
            $sql =  "SELECT * FROM estudantes";

            $result = $this->con->consultaRetorno($sql);
            return $result;
        }

        //metodo de criação 
        public function create(){

            $sql2 = "SELECT * FROM  estudantes WHERE RA = '{$this->RA}'";
            $result = $this->con->consultaRetorno($sql2);
            $num = mysqli_num_rows($result);


            if($num != 0){
                return false;
            }else{
                $sql = "INSERT INTO  estudantes(nome,idade,data_nascimento,RA) 
                VALUES ('{$this->name}','{$this->age}','{$this->birth_date}','{$this->RA}' NOW())";
                $this->con->consultaSimples($sql);
                return true;
            }
           
        }

        //metodo remover 
        public function remove(){
            $sql = " DELETE FROM estudantes WHERE id_estudantes = '{$this->id_student}'";
            $this->con->consultaSimples($sql);
        }

        //metodo visualizar 
        public function look(){
            $sql = " SELECT * FROM estudantes WHERE id_estudantes = '{$this->id_student}' LIMIT 1";
            $result =  $this->con->consultaRetorno($sql);
            $row = mysqli_fetch_assoc($result);

            //set 
            $this->id_student =  $row['id_estudantes'];
            $this->name = $row['nome'];
            $this->age = $row['idade'];
            $this->birth_date = $row['data_nascimento'];
            $this-> RA = $row['RA'];

            return $row;
        }

        //metodo atualizar 
        public function update(){
            $sql = " UPDATE estudantes SET nome='{$this->name}',  idade='{$this->age}, data_nascimento='{$this->birth_data}', RA='{$this->RA}' WHERE id_estudante = '{$this->id_tudet}' ";
            $this->con->consultaSimples($sql);
        }

    }