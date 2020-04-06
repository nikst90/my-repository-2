<?php
// require '../../functions.php';
// require '../../../functions.php';

require '/Users/kirilcalkin/Sites/code-academy/back-end/functions.php';

require './calc.php';

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
<body>
	<div class="container mt-5">
		<?php if ($error_symbol): ?>
		<h1 class="text-danger"><?php echo $error_symbol; ?></h1>
		<?php elseif($result): ?>
		<h1><?php echo $result; ?></h1>
		<?php endif;?>
		<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input name="num_1" type="text" class="form-control d-inline-block w-25" value="<?php echo isset($_GET['num_1']) ? $_GET['num_1'] : '' ?>">

			<!-- <input type="text" class="form-control d-inline-block w-25" name="symbol" placeholder="+-*/" value="<?php echo isset($_GET['symbol']) ? $_GET['symbol'] : '' ?>"> -->

			<select name="symbol" class="form-control d-inline-block w-25">
			<?php
				foreach ($actions as $action) {
					// $selected = isset($_GET['symbol']) && $_GET['symbol'] == $action['value'] ? ' selected="selected"' : '';

					// if (isset($_GET['symbol']) && $_GET['symbol'] == $action['value']) {
					// 	$selected = ' selected="selected';
					// } else {
					// 	$selected = '';
					// }

					$selected = '';

					if (isset($_GET['symbol']) && $_GET['symbol'] == $action['value']) {
						$selected = ' selected="selected"';
					}

					echo sprintf('<option value="%s" %s>%s</option>', $action['value'], $selected, $action['name']);
				}
			?>
			</select>

			<input name="num_2" type="text" class="form-control d-inline-block w-25" value="<?php echo isset($_GET['num_2']) ? $_GET['num_2'] : '' ?>">
			
			<button class="btn btn-success">Submit</button>
			<a class="btn btn-danger" href="<?php echo $_SERVER['PHP_SELF']; ?>">Clear</a>
		</form>
	</div>
</body>
</html>