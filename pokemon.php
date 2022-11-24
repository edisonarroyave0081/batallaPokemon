<?php

class pokemon{
   
    public $ataque;
	public $vida;
	public $habilidad;
	
    
	//getters
	
	
	public function getAtaque(){
		return $this->ataque;
	}
	public function getVida(){
		return $this->vida;
	}
	public function getHabilidad(){
		return $this->habilidad;
	}


	//setters
	
	public function setAtaque($value){
		$this->ataque=$value;
	}

	public function setHabilidad($value){
		$this->habilidad=$value;
	}

	public function setVida($value){
		$this->vida=$value;
	}
   

	//calcula el IMC accediendo a las propiedades
	public function ataque(){

        $result = $this->vida-($this->ataque) ;
		 $msg=0;

        if ( $result> 0 ) {
              
            
            $vi = $this->habilidad;
    
            switch ($vi) {
                case "fuego":
                    $msg = $result*0.14;
                            
                    break;
                case "agua":
                    $msg = 	 $result*0.12;
                    break;
               case "electrico":
                        $msg = 	 $result*0.13;
                        break;
            case "tierra":
                            $msg = 	 $result*0.11;
                            break;
                  default:          
             
            }
        }
        return $msg;
    }

	}
 


    



?>