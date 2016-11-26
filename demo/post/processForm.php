<?
	$str = 'vasya1234_'; // 6 - 32


	$arr = [];
	var_dump( preg_match('/^\w{6,32}$/i',$str, $arr) ); 
	var_dump($arr);


// Квантификаторы
/*
	
a{3} - aaa
a{1,3} - a  aa  aaa

[0-3]{2} - 00 11 01 10 12 22 ...

a{1,} - a aa aaa aaaa aaaaa 
a{0,}

*/


// диапазоны


//  \s   \b
// \w - a-z, A-Z, _, 0-9 

// abc[^0-9abgt]


/*
 \d
 \w
 \s
 \b


[ \ ^ $ . | ? * + ( ).

 \W
 \D
 \S
 \B
*/  
?>