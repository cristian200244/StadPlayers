<?php
class Modelo {
    private  $valor;

    public function __construct($valorInicial)
    {
        $this->valor = $valorInicial;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function suma($cantidad)
    {
        $this->valor +=$cantidad;
    }

    public function resta($cantidad)
    {
        $this->valor -=$cantidad;
    }
}
?>