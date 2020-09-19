<?php
$numberOne = $_POST['num1'];
$maths = $_POST['sign'];
$numberTwo = $_POST['num2'];
$result;
$precision = $_POST['decimal'];

If ($maths === '+' ) {
	$result = $numberOne + $numberTwo;
} else if ($maths === '-') {
	$result = $numberOne -= $numberTwo;
} else if ($maths === '/') {
	$result = $numberOne /= $numberTwo;
} else if ($maths === '*') {
	$result = $numberOne *= $numberTwo;
} else if ($maths === '**') {
	$result = $numberOne **= $numberTwo;
} else if ($maths === '/') {
	$result = $numberOne /= $numberTwo;
} else if($maths === '%') {
	$result = $numberOne %= $numberTwo;
} else {
	$result = 'Can\'t solve this please.';
}




header('location: /index.html?result=' . round($result, $precision))
?>