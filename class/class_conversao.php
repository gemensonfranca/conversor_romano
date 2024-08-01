<?php

class Conversao {
    
    public $romano;
    public $arabico;
    public $todos_romanos_mai = array('I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII', 'XIII', 'XIV', 'XV', 'XVI', 'XVII', 'XVIII', 'XIX', 'XX', 'XXI', 'XXII', 'XXIII', 'XXIV', 'XXV', 'XXVI', 'XXVII', 'XXVIII', 'XXIX', 'XXX', 'XXXI', 'XXXII', 'XXXIII', 'XXXIV', 'XXXV', 'XXXVI', 'XXXVII', 'XXXVIII', 'XXXIX', 'XL', 'XLI', 'XLII', 'XLIII', 'XLIV', 'XLV', 'XLVI', 'XLVII', 'XLVIII', 'XLIX', 'L', 'LI', 'LII', 'LIII', 'LIV', 'LV', 'LVI', 'LVII', 'LVIII', 'LIX', 'LX', 'LXI', 'LXII', 'LXIII', 'LXIV', 'LXV', 'LXVI', 'LXVII', 'LXVIII', 'LXIX', 'LXX', 'LXXI', 'LXXII', 'LXXIII', 'LXXIV', 'LXXV', 'LXXVI', 'LXXVII', 'LXXVIII', 'LXXIX', 'LXXX', 'LXXXI', 'LXXXII', 'LXXXIII', 'LXXXIV', 'LXXXV', 'LXXXVI', 'LXXXVII', 'LXXXVIII', 'LXXXIX', 'XC', 'XCI', 'XCII', 'XCIII', 'XCIV', 'XCV', 'XCVI', 'XCVII', 'XCVIII', 'XCIX', 'C');
    public $todos_romanos_min = array('i', 'ii', 'iii', 'iv', 'v', 'vi', 'vii', 'viii', 'ix', 'x', 'xi', 'xii', 'xiii', 'xiv', 'xv', 'xvi', 'xvii', 'xviii', 'xix', 'xx', 'xxi', 'xxii', 'xxiii', 'xxiv', 'xxv', 'xxvi', 'xxvii', 'xxviii', 'xxix', 'xxx', 'xxxi', 'xxxii', 'xxxiii', 'xxxiv', 'xxxv', 'xxxvi', 'xxxvii', 'xxxviii', 'xxxix', 'xl', 'xli', 'xlii', 'xliii', 'xliv', 'xlv', 'xlvi', 'xlvii', 'xlviii', 'xlix', 'l', 'li', 'lii', 'liii', 'liv', 'lv', 'lvi', 'lvii', 'lviii', 'lix', 'lx', 'lxi', 'lxii', 'lxiii', 'lxiv', 'lxv', 'lxvi', 'lxvii', 'lxviii', 'lxix', 'lxx', 'lxxi', 'lxxii', 'lxxiii', 'lxxiv', 'lxxv', 'lxxvi', 'lxxvii', 'lxxviii', 'lxxix', 'lxxx', 'lxxxi', 'lxxxii', 'lxxxiii', 'lxxxiv', 'lxxxv', 'lxxxvi', 'lxxxvii', 'lxxxviii', 'lxxxix', 'xc', 'xci', 'xcii', 'xciii', 'xciv', 'xcv', 'xcvi', 'xcvii', 'xcviii', 'xcix', 'c');

    public function converterRomano() {

        // CÓDIGO DE CONVERSÃO DE ALGARISMO
        $todos_arabicos = array();
        $entrada        = $this->romano;
        $posicao        = 0;
        $numeros        = 1;

        foreach ($this->todos_romanos_mai as $num) {
            $num;
            array_push($todos_arabicos, $numeros);
            $numeros++;
        }

        foreach ($this->todos_romanos_mai as $valor) {
            $valor;
            if ($this->todos_romanos_mai[$posicao] === $entrada OR $this->todos_romanos_min[$posicao] === $entrada) {
                $converter = $todos_arabicos[$posicao];
                break;
            }

            else{
                $converter = "O algarismo não pode ser convertido!";
            }

            $posicao++;
        }

        if ($converter === "O algarismo não pode ser convertido!") {
            $_SESSION['flash_error'] = $converter;
        }

        return $converter;
    }

    public function converterArabico() {

        // CÓDIGO DE CONVERSÃO DE ALGARISMO
        $todos_arabicos = array();
        $entrada        = $this->arabico;
        $posicao        = 0;
        $numeros        = 1;

        foreach ($this->todos_romanos_mai as $num) {
            $num;
            array_push($todos_arabicos, $numeros);
            $numeros++;
        }

        foreach ($todos_arabicos as $valor) {
            $valor;
            if ($todos_arabicos[$posicao] == $entrada) {
                $converter = $this->todos_romanos_mai[$posicao];
                break;
            }

            else {
                $converter = "O algarismo não pode ser convertido!";
                $_SESSION['flash_error'] = $converter;
            }

            $posicao++;
        }

        return $converter;
    }
}

?>