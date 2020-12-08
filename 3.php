<?php
    function getMaxAndMinCountInArrayString($array) {
        $max = 0;
        $min = 1000000000000000;
        foreach ($array as &$value) {
            $count = strlen($value);
            if ($count > $max) {
                $max = $count;
            }
            if ($count < $min) {
                $min = $count;
            }
        }

        return [$min, $max];
    }

    $strings = array('abcd', 'abc', 'de', 'hjjj', 'g', 'wer');
    $result = getMaxAndMinCountInArrayString($strings);

    print_r($result);
?>