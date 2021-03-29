<?php

$text1 = 'The quick " " brown fox';
echo preg_replace("/ /", "", $text1);

echo "\n\n";

$text2 = '$123,34.00A';
echo preg_replace("/([^0-9.,])+/", "", $text2);

echo "\n\n";

$text3 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.\n";
echo $text3;
echo preg_replace("/(\n+)+/", "", $text3);

echo "\n\n";

$text4 = "The quick brown [fox].";
preg_match('/\[(.*?)\]/', $text4, $match);
echo $match[1];
?>