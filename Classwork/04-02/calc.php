<?php

// dd($_GET['num_1'], $_GET['num_2'], $_GET['symbol']);

$actions = [
	[
		'name'  => 'Plus',
		'value' => '+'
	],
	[
		'name'  => 'Minus',
		'value' => '-'
	],
	[
		'name'  => 'Multiply',
		'value' => '*'
	],
	[
		'name'  => 'Divide',
		'value' => '/'
	],
	[
		'name'  => 'POW',
		'value' => '**'
	]
];

$error_symbol = FALSE;
$result       = FALSE;

if (isset($_GET['num_1'], $_GET['num_2'], $_GET['symbol'])) {
	if (in_array($_GET['symbol'], array_column($actions, 'value')) == FALSE) {
		$error_symbol = 'Bad Action';
	}

	if ($error_symbol == FALSE) {
		$num_1 = (int) $_GET['num_1'];
		$num_2 = (int) $_GET['num_2'];

		switch ($_GET['symbol']) {
			case '+':
				$result = $num_1 + $num_2;
				break;

			case '-':
				$result = $num_1 - $num_2;
				break;

			case '*':
				$result = $num_1 * $num_2;
				break;

			case '/':
				$result = $num_1 / $num_2;
				break;

			case '**':
				$result = $num_1 ** $num_2;
				break;
		}
	}
}