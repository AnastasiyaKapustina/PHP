
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$cols = abs((int) $_POST['cols']);
$rows = abs((int) $_POST['rows']);
$color = trim(strip_tags($_POST['color']));
}
$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $rows : 10;
$color = ($color) ? $color : 'AntiqueWhite';
?>
<!-- Область основного контента -->
			<form action='<?= $_SERVER['REQUEST_URI']?>' method='POST'>
			<label>Количество столбцов: </label><br/>
			<input name='cols' type='text' value="<?= @$_POST['cols']?>" /><br/>
			<label>Количество строк: </label><br/>
			<input name='rows' type='text' value="<?= @$_POST['rows']?>" /><br/>
			<label>Цвет: </label><br/>
			<input name='color' type='text' value="<?= @$_POST['color']?>" /><br/><br/>
			<input type='submit' value='Создать' />
			<!-- Таблица -->
			<table border = '4'>
			<?php
				drawTable($cols, $rows, $color);						
			?>
			</table>
			<!-- Таблица -->
<!-- Область основного контента -->
