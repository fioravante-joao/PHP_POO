<?php
class Terreno
{
    // definindo propriedades
    private $preco;
    private $largura;
    private $comprimento;

    // definindo o metodo construtor
    public function __construct(float $xPreco, float $xLargura, fload $xComprimento )
    {
        $this->preco = $xPreco;
        $this->largura = $xLargura;
        $this->comprimento = $xComprimento;
    }
    // definindo metodo para calculo da area
    public function calcularArea()
    {
        return $this->largura * $this->comprimento;
    }
}
?>