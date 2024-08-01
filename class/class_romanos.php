<?php

// CONVETER NÚMEROS ARÁBICOS EM ROMANOS

class Cliente {
    
    public $romano;
    public $arabico;
    public $todos_romanos  = array('I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII', 'XIII', 'XIV', 'XV', 'XVI', 'XVII', 'XVIII', 'XIX', 'XX', 'XXI', 'XXII', 'XXIII', 'XXIV', 'XXV', 'XXVI', 'XXVII', 'XXVIII', 'XXIX', 'XXX', 'XXXI', 'XXXII', 'XXXIII', 'XXXIV', 'XXXV', 'XXXVI', 'XXXVII', 'XXXVIII', 'XXXIX', 'XL', 'XLI', 'XLII', 'XLIII', 'XLIV', 'XLV', 'XLVI', 'XLVII', 'XLVIII', 'XLIX', 'L', 'LI', 'LII', 'LIII', 'LIV', 'LV', 'LVI', 'LVII', 'LVIII', 'LIX', 'LX', 'LXI', 'LXII', 'LXIII', 'LXIV', 'LXV', 'LXVI', 'LXVII', 'LXVIII', 'LXIX', 'LXX', 'LXXI', 'LXXII', 'LXXIII', 'LXXIV', 'LXXV', 'LXXVI', 'LXXVII', 'LXXVIII', 'LXXIX', 'LXXX', 'LXXXI', 'LXXXII', 'LXXXIII', 'LXXXIV', 'LXXXV', 'LXXXVI', 'LXXXVII', 'LXXXVIII', 'LXXXIX', 'XC', 'XCI', 'XCII', 'XCIII', 'XCIV', 'XCV', 'XCVI', 'XCVII', 'XCVIII', 'XCIX', 'C');

    public function converterRomano() {

        // CÓDIGO DE CONVERSÃO DE ALGARISMO
        $todos_arabicos = array();
        $entrada        = $this->romano;
        $posicao        = 0;
        $numeros        = 1;

        foreach ($this->todos_romanos as $num) {
            $num;
            array_push($todos_arabicos, $numeros);
            $numeros++;
        }

        foreach ($this->todos_romanos as $valor) {
            $valor;
            if ($this->todos_romanos[$posicao] == $entrada) {
                $converter = $todos_arabicos[$posicao];
                break;
            }

            else {
                $converter = "O algarismo não pode ser convertido!";
            }

            $posicao++;
        }

        return $converter;
    }

    public function converterArabico() {

        // CÓDIGO DE CONVERSÃO DE ALGARISMO
        $todos_arabicos = array();
        $entrada        = $this->arabico;
        $posicao        = 0;
        $numeros        = 1;

        foreach ($this->todos_romanos as $num) {
            $num;
            array_push($todos_arabicos, $numeros);
            $numeros++;
        }

        foreach ($todos_arabicos as $valor) {
            $valor;
            if ($todos_arabicos[$posicao] == $entrada) {
                $converter = $this->todos_romanos[$posicao];
                break;
            }

            else {
                $converter = "O algarismo não pode ser convertido!";
            }

            $posicao++;
        }

        return $converter;
    }
}

?>