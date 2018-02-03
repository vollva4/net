<?php
$animals = [
	'afrika' => ['Mammuthus columbi', 'Loxodonta', 'Hexaprotodon liberiensis', 'Potamochoerus porcus','Papio' ],
	'europe' => ['Ursus arctos', 'Erinaceus concolor', 'Corsac'],
	'north america' => ['Ovis', 'Bison', 'Canis lycaon'],
	'south america' => ['Vicugna', 'Hydrochoerus', 'Tremarctos ornatus'],
	'australia' => ['Macropus giganteus', 'Phascolarctos cinereus', 'Vombatus'],
];
$twowords = [];
foreach ($animals as $continent => $names) {
	foreach ($names as $name ) {
		$new = strpos($name, ' ');
		if ($new != false) {
			$twowords [] = $name;
		}
	}
}
/*echo '<pre>';
print_r($twowords);*/
foreach ($twowords as $key => $value) {
	$name = explode(' ', $value);
	$first[] = array_shift($name);
	$second[] = array_pop($name);
};
shuffle($first);
shuffle($second);
for ($i=0; $i < 9 ; $i++) { 
	echo $first[$i],' ',$second[$i],', ';
};
/*echo '<pre>';
print_r($first);
echo '<pre>';
print_r($second);
?>
$result = [];
foreach ($animals as $countinent) {
    $result = array_merge($result, array_filter($countinent, function ($item){ return count(explode(' ', $item)) === 2; }) );
}
print_r($result);*/