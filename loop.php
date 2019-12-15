<?php 
for ($i = 'a'; $i <= 'z'; $i++) 
echo "$i\n";

$array1=array("a" => "one", "b" => "two", "c" => "three");
extract($array1);

$a = '';
switch (TRUE) {
	case ($a == 'A'):
	echo 'Yay it is A';
	break;

	case ($a == 'B'):
	echo 'Yahoo! Its B!';
	break;

	case ($a == null):
	echo 'Its Null';
	break;
}
