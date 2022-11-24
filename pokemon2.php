<?php

class pokemon2{

    public $ataque1;
	public $vida1;
	public $habilidad1;

	//getters
	public function getAtaque1(){
		return $this->ataque1;
	}
	public function getVida1(){
		return $this->vida1;
	}
	public function getHabilidad1(){
		return $this->habilidad1;
	}

	//setters
	public function setAtaque1($value1){
		$this->ataque1=$value1;
	}

	public function setHabilidad1($value1){
		$this->habilidad1=$value1;
	}

	public function setVida1($value1){
		$this->vida1=$value1;
	}

	//calcula el IMC accediendo a las propiedades

    public function vida(){
		
        $result = $this->vida1-($this->ataque1) ;
		 $msg=0;

        if ( $result> 0 ) {
              
            
            $vi = $this->habilidad1;
    
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

	//calcula el IMC accediendo mediante los métodos get
	//public function imc2(){
		//return $this->getPeso() / ($this->getAltura() * $this->getAltura());

	//}

    

}

?>