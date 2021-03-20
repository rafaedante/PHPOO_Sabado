<?php


class Usuario2 {
      // atributos    
    public $nombre ;   
    public $clave ;
    static protected $jub = 65;


    public function __construct($n,  $c) {
        //definir el estado interno del objeto (instancia)
        $this->nombre = $n;        
        $this->clave = $c;
    }
    
    public function __sleep() {
        return array('nombre');
    }
    
    public function setClaveInterna($c) {
        $this->clave = $c;
    }
    
    public function __wakeup() {
        $this->setClaveInterna("abc000");
    }
    
    function setJubilacion($valor) {
        self::$jub= $valor;
    }
    
    function verDatos() {
        echo "$this->nombre<br>";
        echo "Edad Jubilacion: ".self::$jub."<hr>";
    }
    
    // simulacion polimorfismo
    public function representar($p1=false, $p2=false) {
        if($p1==false && $p2==false) {
            //logica 1
            return $this->representar1();
        }
        if($p1="html") {
            if($p2) {
                if(gettype($p2)=="boolean"){
                    //logica 3
                    return $this->representar3();
                }else {
                    //logica 4
                    return $this->representar4($p2);
                }
            } else {
                //logica 2
                return $this->representar2();
            }
        }
    }
    
    private function representar1() {
        return $this->nombre;
    }
    
    private function representar2() {
        return '<h1>'.$this->nombre.'</h1>';
    }
    
    private function representar3() {
        return '<p style="color:red">'.$this->nombre.'</p>';
    }
    
    private function representar4($color) {
        return '<h1><p style="color:'.$color.'">'.$this->nombre.'</p></h1>';
    }
}
