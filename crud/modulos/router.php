<?php


    class router
    {
        //carregar visualizar 
        public function loadLook($look){

            switch ($look) {
                case 'create':
                    include_once('look/'.$look.'.php');
                    break;

                case 'look':
                    include_once('look/'.$look.'.php');
                    break;

                case 'update':
                    include_once('look/'.$look.'.php');
                    break;

                case 'remove':
                    include_once('look/'.$look.'.php');
                    break;
            
                default:
                    include_once ('look/error.php');
                    break;
            }
        }

        // função de validação 
        public function validateGet($variable){
            if(empty($variable)){
                include_once("index.php");
            }else{
                return true;
            }
        }
    }