<?php
	$file= "Text.txt";
    $document = fopen($file, 'r');
    $output   = fread($document, filesize("Text.txt"));
    $display  = readfile($file);

    $vcount  = 0;
    $ccount = 0;
    $dcount = 0;
    $scount = 0;
    $str = strtolower($output);
    
    for($i=0;$i<strlen($str);$i++)
    {
        if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u')
        {
             $vcount++;
        }
        else if($str[$i]>='a' && $str[$i]<='z'){
             $ccount++;
        }else if($str[$i]>='0' && $str[$i]<='9'){
            $dcount++;
       }else{
           $scount++;
       }
    }

    //no.of lines in file
    $lines = count(file($file));
    echo "<br>The number of lines : " .$lines."<br>";

    //no.of words
    $wordCount = str_word_count($str);
    echo "The number of words : " .$wordCount."<br>";
    
    //no.of characters
    $chars = preg_replace('/\s+/', '', $str); 
    $num_c= strlen($chars);
    echo "The number of characters without space: " .$num_c."<br>";
    $numChar = mb_strlen($str);
    echo "The number of characters with space : " .$numChar."<br>";

    echo "The number of vowels : " .$vcount."<br>";
    echo "The number of consonants : " .$ccount."<br>";
    echo "The number of digits : " .$dcount."<br>";
    $sc=$scount-$dcount;
    echo "The number of special characters : " .$sc."<br>";


    //size of file
    $size = filesize($file);
    echo "The file size : " .$size;
    echo"<br/>";
   
?>