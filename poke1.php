<?php

    class Poke1{

        private $nombre;
       

        public function __construct($nombre) {
            $this->nombre = $nombre;
           
        }
        
        public function get_nombre(){
            return $this->nombre;
        }
       
    }
?>