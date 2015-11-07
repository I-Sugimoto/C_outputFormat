<?php
$m = 71;
$n = 5;

if(($m <=0) && ($n < 2))
{
    echo "mは、正の整数を入力してください。". "<br>";
    echo "nは、2以上の数を入力してください。". "<br>";
} 
elseif($m <= 0) 
{
	echo "mは、正の整数を入力してください。";
}
elseif($n < 2) 
{
	echo "nは、2以上の数を入力してください。";
}
else
{
	$val = str_pad($m, $n, 0, STR_PAD_LEFT);
	echo $val;
}
