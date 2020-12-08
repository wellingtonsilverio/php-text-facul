<?php
    function convertArrayStringToUppercase($array) {
        $return = [];
        foreach ($array as &$value) {
            array_push($return, strtoupper($value));
        }

        return $return;
    }

    $cor = array('A' => 'Azul', 'B' => 'Verde', 'c' => 'Vermelho');
    $result = convertArrayStringToUppercase($cor);

    print_r($result);
?>