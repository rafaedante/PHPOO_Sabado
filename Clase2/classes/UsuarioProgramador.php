<?php
require_once "Usuario.php";
class UsuarioProgramador extends Usuario{
    private $lenguaje;
    private $nivel_cafe;
    
    public function __construct($n, $e, $c, $leng = "PHP", $nc=10) {
        //llamada al constructor del padre
        parent::__construct($n, $e, $c);
        $this->lenguaje = $leng;
        $this->nivel_cafe = $nc;
    }
    
    public function programar() {
        
        if($this->nivel_cafe > 40) {
            return "<p>{$this->nombre} esta programando en {$this->lenguaje}....</p>";
        } else {
            return "<p>Necesito mas cafe...</p>";
        }        
    }
    
    public function presentarse() {
        $retorno1 = parent::presentarse();
        return "<div style=\"color:red\"$retorno1<p>Y programo en {$this->lenguaje}</p></div>";
    }
    
    // getters
    public function getLenguaje() {
        return $this->lenguaje;
    }
    
     public function getNivelCafe() {
        return $this->nivel_cafe;
    }
    
    // settres
    public  function setLenguaje($l) {
        $this->lenguaje = $l;
    }
   
      public  function setNivelcafe($nc) {
        $this->nivel_cafe = $nc;
    }
}

