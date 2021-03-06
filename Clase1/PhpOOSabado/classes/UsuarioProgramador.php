<?php
require_once "Usuario.php";
class UsuarioProgramador extends Usuario{
    public $lenguaje;
    public $nivel_cafe;
    
    public function __construct($n, $e, $c, $leng = "PHP", $nc=10) {
        //llamada al constructor del padre
        parent::__construct($n, $e, $c);
        $this->lenguaje = $leng;
        $this->nivel_cafe = $nc;
    }
    
    public function programar() {
        
        if($this->nivel_cafe > 40) {
            return "<p>Programando en {$this->lenguaje}....</p>";
        } else {
            return "<p>Necesito mas cafe...</p>";
        }        
    }
    
    public function presentarse() {
        $retorno1 = parent::presentarse();
        return "<div style=\"color:red\"$retorno1<p>Y programo en {$this->lenguaje}</p></div>";
    }    
   
    
}

