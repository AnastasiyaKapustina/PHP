<?php
	define('COPYRIGHT', 'Веб-мастер');
	setlocale(LC_ALL, "russian");

	$day = strftime('%d');
	$mon = strftime('%m');
	$year = strftime('%Y');
	$hour = (int) strftime('%H');
		$welcome = '';
		if		($hour >= 0  and  $hour < 6) 	
				$welcome = 'Доброй ночи';
		elseif  ($hour >= 6  and  $hour < 12) 	
				$welcome = 'Доброе утро';
		elseif  ($hour >= 12 and $hour < 18) 	
				$welcome = 'Добрый день';
		elseif  ($hour >= 18 and $hour < 23) 	
				$welcome = 'Доброй вечер';


	$left_menu = [
		['link' => 'Домой', 'href' => 'index.php'],
		['link' => 'О нас', 'href' => 'index.php?id=about'],
		['link' => 'Контакты', 'href' => 'index.php?id=contact'],
		['link' => 'FOR', 'href' => 'for.php'],
		['link' => 'WHILE', 'href' => 'while.php'],
		['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
		['link' => 'Браузеры', 'href' => 'browsers.php?id=table']
		
	];
	
	$title = 'НашСайт';
	$header = "$welcome, Гость";
	$id = strtolower(strip_tags(trim($_GET['id'])));
	switch($id) {
		case 'about': {			
			$title = 'О сайте';
			$header = 'О нашем сайте';
			break;
		}
		
		case 'contact': {			
			$title = 'Контакты';
			$header = 'Обратная связь';
			break;
		}
		case 'table': {			
			$title = 'Таблица умножения';
			$header = 'Таблица умножения';
			break;
		}
		
	}
?>