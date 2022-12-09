<?php



    //incluindo classe esudantes 
    include_once('classes/student.php');

    //classe controle dos estudantes 
    class controllerEstudents
    {
        //atributos 
        private $estudent;

        //metodos 

        //metodo construtor 
        public function __construct(){
            $this->student = new student();
        }

        //função index - listar 
        public function  index(){
            $result = $this->estudiante->list();
            return $result;
        }


        //função criador estudante
        public function create($name , $age , $birth_date, $RA, $note1, $note2, $note3){

            //media
            $average = (($note1 + $note2 + $note3) / 3); 

            $this->student->set("nome" , $cedula);
            $this->student->set("idade" , $age);
            $this->student->set("data_nascimento" , $birth_date);
            $this->student->set("RA" , $RA);
            $this->student->set("media" , $average);

            $result = $this->student->create();
            return $result;
        }


        // metodo deletar 
        public function remove($id_student){     
            $this->student->set("id_estudante", $id_student);
            $this->student->remove();
        }


        // metodo visualizar 
        public function look($id_student){
            $this->student->set("id_estudante", $id_student);
            /*dados*/$dices = $this->student->look();
            return $dices;
        }

        // metodo atualização       
        public function update($id_student, $name, $age, $birth_date, $RA){
            $this->student->set('id_estudante',$id_student);
            $this->student->set('name',$name);
            $this->student->set('age',$age);
            $this->student->set('birth_date',$birth_date);
            $this->student->set('birth_date',$RA);
    
            $this->student->update();
        }





    }