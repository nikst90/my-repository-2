<?php
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
		]
	];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="number" name="num_1" placeholder="enter number" value="<?php echo isset($_GET['num_1']) ? $_GET['num_1'] : '' ?>">
		<!-- <input type="text" name="symbol" placeholder="+-*/" value="<?php echo isset($_GET['symbol']) ? $_GET['symbol'] : '' ?>"> -->
		<select name="symbol">
			<?php 
			foreach ($actions as $action) {
				$selected = isset($_GET['symbol']) && $_GET['symbol'] == $action['value'] ? ' selected="selected"' : '';
				echo sprintf('<option value="%s"%s>%s</option>', $action['value'], $selected, $action['name']);
			}
			?>

			<option value="-1">-1</option>

			<!-- <?php foreach ($actions as $action): ?>
			<option value="+"<?php echo isset($_GET['symbol']) && $_GET['symbol'] == $action['value'] ? ' selected="selected"' : '' ?>><?php echo $action['name'] ?></option>
			<?php endforeach;?> -->

			<!-- <option value="+"<?php echo isset($_GET['symbol']) && $_GET['symbol'] == '+' ? ' selected="selected"' : '' ?>>Plus</option>
			<option value="-"<?php echo isset($_GET['symbol']) && $_GET['symbol'] == '-' ? ' selected="selected"' : '' ?>>Minus</option>
			<option value="*"<?php echo isset($_GET['symbol']) && $_GET['symbol'] == '*' ? ' selected="selected"' : '' ?>>Multiply</option>
			<option value="/"<?php echo isset($_GET['symbol']) && $_GET['symbol'] == '/' ? ' selected="selected"' : ''?>>Divide</option> -->
		</select>
		<input type="number" name="num_2" placeholder="enter number" value="<?php echo isset($_GET['num_2']) ? $_GET['num_2'] : '' ?>">

		<button type="submit">Submit</button>
	</form>
	<?php 
		if (isset($_GET['num_1'], $_GET['num_2'], $_GET['symbol'])) {
			// $result = $_GET['num_1'] + $_GET['num_2'];

			$error_symbol = TRUE;

			foreach ($actions as $action) {
				if ($action['value'] == $_GET['symbol']) {
					$error_symbol = FALSE;
				}
			}

			if ($error_symbol) {
				echo '<h1 style="color:red">Bad action</h1>';
			} else {
				switch ($_GET['symbol']) {
					case '+':
						$result = $_GET['num_1'] + $_GET['num_2'];
						break;

					case '-':
						$result = $_GET['num_1'] - $_GET['num_2'];
						break;

					case '*':
						$result = $_GET['num_1'] * $_GET['num_2'];
						break;

					case '/':
						$result = $_GET['num_1'] / $_GET['num_2'];
						break;
					
					// default:
					// 	// $result = -1;
					// 	break;
				}

				echo '<h1> Sum: ' . $result . '</h1>';
			}
		}
	?>
</body>
</html>