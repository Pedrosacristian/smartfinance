<?php

function readDate($instructions)
 {
    $dateTyped = null;
    $checkIsDate = false;

    while ($dateTyped == null) {
        print_r($instructions);
        $dateTyped = stream_get_line(STDIN, 1024, PHP_EOL);

        $exploded = explode('/' , $dateTyped);

        if(count($exploded) == 3) {
            $day = intval($exploded[0]);
            $month = intval($exploded[1]);
            $year = intval($exploded[2]);

            $checkIsDate = checkdate($day, $month, $year);
        }

        if ($checkIsDate == false) {
            print_r('A data' . $dateTyped . "não é valida" . PHP_EOL);
            $dateTyped = null;
        }
    }
return $dateTyped;

 } 

 function readFloat($instructions)
 {
    $floatTyped = null;
    $checkIsFloat = false;
    
    while ($floatTyped == null) {
        print_r($instructions);
        $floatTyped = stream_get_line(STDIN, 1024, PHP_EOL);
        
        $checkIsFloat = filter_var($floatTyped, FILTER_VALIDATE_FLOAT);

        if($checkIsFloat == false) {
            print_r('O valor digitado deve ser um numero decimal' . PHP_EOL);
            $floatTyped = null;
        }
    }
    return $floatTyped;
 }

 function readString($instructions)
 {
    print_r($instructions);
    return stream_get_line(STDIN, 1024,PHP_EOL);
 }

 function readFileToArray($type, $filePath)
 {
    $lines = [];

    $recipesArray = file($filePath);

    for ($i = 0; $i < count($recipesArray); ++$i)
    { 
        $lineArray = str_getcsv($recipesArray[$i]);

       $lines[] = [
        'type' => $type,
        'description' => $lineArray[0],
        'value' => $lineArray[1],
        'date' => $lineArray[2],
       ] ; 
    }
    return $lines;
 }