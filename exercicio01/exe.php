<?php
function retornalinha($input){
    return $input;
}
$stream = fopen('input.txt', 'r');

while (feof($stream) === false) {
    $row = explode(' ', retornalinha(fgets($stream)));
    if (count($row) > 1) {
        $lenStr = strlen($row[1]);
        for ($i = 0; $i <= $lenStr - $row[0]; $i++){
            if ( substr_count($row[1], substr($row[1], $i, $row[0])) > 1 ){
                $word[substr($row[1], $i, $row[0])] = substr_count($row[1], substr($row[1], $i, $row[0]));
            }
        }
        echo array_search(max($word), $word) . "\n";
        unset($word);
    }
}

fclose($stream);
