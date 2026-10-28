<?php

namespace BrainGames\Games;

function  isPrime($number): bool {

if ($number < 2) {
	return false;
}

$limit = sqrt($number);
for ($i = 2; $i  <= $limit; $i++) {
	if ($number % $i === 0) {
		return false;
		}
	}
return true;
}


function prime()
{
$number = random_int(1, 100);
$Answer = isPrime($number) ? 'yes' : 'no';
$question = (string) $number;
return [$question, $Answer];
}
