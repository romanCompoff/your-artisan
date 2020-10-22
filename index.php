<?php

include 'vendor/autoload.php';

use vatal\artisan\Controller\BaseController;
use Vatal\Artisan\Model\BaseModel;
use vatal\artisan\core\DB;



$uri = $_SERVER['REQUEST_URI'];
$uriParts = explode( "/", $uri);

unset($uriParts[0]);
$uriParts = array_values($uriParts);

$controller = new BaseController();

if(isset($uriParts[0]) && isset($uriParts[1]) && $uriParts[1] != ""){

	$controllers = $controller->indexAction($uriParts[0] , $uriParts[1]);

	
}elseif(isset($uriParts[0]) && $uriParts[0] !== ''){

	$controllers = $controller->oneCityAction($uriParts[0]);

}else{

	$controllers = $controller->homeAction();
}



$controller->render();

// $filename = 'pages/123pc-repair.txt';
// $filename = '123.xlsx';
// mkdir('pages/321');


// $bookshelf = ['vrn2','Воронеж','Ремонт компов','89204555200','пnава'];
// $city = serialize($bookshelf);      // PHP формат сохраняемого значения.
// $bookshelf = json_encode($bookshelf);  // JSON формат сохраняемого значения.
// file_put_contents($filename, $bookshelf, FILE_APPEND);
// открываем файл, если файл не существует,
//делается попытка создать его
// $fp = fopen($filename, "w");
 
// записываем в файл текст
// fwrite($fp, $bookshelf);
 
// закрываем
// fclose($fp);

// Чтение.
// $data = file_get_contents($filename);
// $data[1] = sprintf('[%s]', $data[1]);
// $bookshelf = json_decode($data[1], TRUE); // Если нет TRUE то получает объект, а не массив.

// $bookshelf = unserialize($data);


//Считывание эксель файла и создание папок с файлами
//******************************************************************************************************************
// require_once __DIR__ . '/PHPExcel/Classes/PHPExcel/IOFactory.php';

// $xls = PHPExcel_IOFactory::load(__DIR__ . '/123.xlsx');

// $xls->setActiveSheetIndex(0);
// $sheet = $xls->getActiveSheet();


// Cоздание папок с файлами из считанного массива $sheet
//******************************************************************************************************************
// function rMass($m)
// {
// $mass5 = explode( '|=|', $m);
// $r = rand(0 ,count($mass5));
// $res = $mass5[$r];
// return $res;
// }
// function rMass1($m)
// {
// $mass5 = explode( '|=|', $m);
// $r = rand(0 ,count($mass5)-1);
// $res = $mass5[$r];
// return $res;
// }

// $mass = $sheet->toArray();

// foreach ($mass as $row) {

// $row5 = rMass1($row[5]);
// $row5 .= ' в ';
// $row5 .= $row[4];
// $row5 .= ' ';
// $row5 .= rMass($row[6]);



// $row6 = rMass1($row[5]);
// $row6 .= ' в ';
// $row6 .= $row[4];
// $row6 .= ' ';
// $row6 .= rMass($row[6]);
// $row6 .= ' ';
// $row6 .= rMass($row[7]);
// $row6 .= '     ';
// $row6 .= rMass($row[8]);
// $row6 .= ' ';
// $row6 .= rMass($row[9]);
// $row6 .= ' ';
// $row6 .= rMass($row[10]);
// $str = str_replace('&amp;', '&', $row6);
// $str = str_replace('&nbsp;', ' ', $str);


// $row = array_splice($row, 0, 7);

	// $row[5] = preg_replace('/\s+/', " ", trim($row5));
	// $row[6] = preg_replace('/\s+/', " ", trim($row6));


	// $dir = sprintf('pages/%s', $row[0]);
		// if(!is_dir($dir)) {
			// mkdir($dir, 0777, true);
		// }
	// $filename = sprintf('%s/%s.html', $dir, $row[1]);
	
	// $bookshelf = json_encode($row);
	// var_dump($bookshelf);
	
	// $fp = fopen($filename, "w");
	// fwrite($fp, $bookshelf);
 
	// fclose($fp);
  
// }

//Внесение в БД данных из считанного массива $sheet
//******************************************************************************************************************
 	// function addPost($row)
	
		// {
			// $db = DB::getConnect();
			// $sql = sprintf("INSERT INTO %s (city, job, phone, rusCity, rusCity2) VALUES (:city, :job, :phone, :rusCity, :rusCity2)", 'artisanjobs');
			// $stmt = $db->prepare($sql);
			// $stmt->execute([
			// 'city' => $row[0],
			// 'job' => sprintf("%s.html", $row[1]),
			// 'phone' => $row[2],
			// 'rusCity' => $row[3],
			// 'rusCity2' => $row[4]
			// ]);
		// }
// foreach ($sheet->toArray() as $row) {
	
	// addPost($row);
// }
