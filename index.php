<?php 

define('TEMPLATES_DIR', 'http://localhost/ecom/routes/templates/');
define('STORAGE_DIR', 'http://localhost/ecom/routes/templates/storage/upload-files/');

include("include.php");
	

$urlParts = parse_url($_SERVER['REQUEST_URI']);
$url = $urlParts['path'];


$indexPHPPosition = strpos($url,'index.php');



$route =null;

if (false !==$indexPHPPosition) {
	$route = substr($url, $indexPHPPosition);
	$route = str_replace('index.php', '', $route);

}


			$ip = get_ip();	
			$brand = whileData($sql='SELECT * FROM brands') ;
			$cat = whileData($sql='SELECT * FROM categories') ;

			$sql="SELECT count(*) FROM cart WHERE ip_adress='$ip'";
			;
			$count_cart  =ExecuteNUM($sql);



							//начало вызов index.php 
if (!$route) {
	
			require 'routes/actions/index.php';
 			exit();
}

		//добавить в корзину
if (strpos($route, '/cart/add/') !== false) {
			require 'routes/actions/cartAdd.php';
			header("Location: " .$baseUrl."index.php");
			exit();
}	 

//просмотреть детали	1.подкл функ и вызов передаем ID prod 2. вызов темлате details
if (strpos($route, '/details') !== false) {
				require 'routes/actions/details.php';
				exit();
}

					//// авторизаия пользователя
if (strpos($route, '/login') !== false) {
				require 'routes/actions/login.php';
				exit();	
}

				// регистрация пользователя
if(strpos($route,'/register') !== false){
				require 'routes/actions/register.php';
				exit();
}

				// поисковик
if(strpos($route,'/search') !== false){
				require 'routes/actions/search.php';
				exit();
}

			// категория товаров
if(strpos($route,'/brand') !== false){
				require 'routes/actions/brand.php';
				exit();
}

			// сортировка бренду  товаров
if(strpos($route,'/cat') !== false){
				
				require 'routes/actions/cat.php';
				exit();
}


			// перехок на страницу home

if(strpos($route,'/home') !== false){
		
				require 'routes/actions/home.php';
 				exit();
 				header("Location: ".$baseUrl."index.php");
}

// перехок на страницу all products
if(strpos($route,'/all_products') !== false){
	
  		  
 				require 'routes/actions/all_products.php';
				exit();
}

if(strpos($route,'/my_account') !== false){

				require 'routes/actions/my_account.php';
 				exit();
 				
}

if(strpos($route,'/cart') !== false){
	
				include("routes/templates/cart.php");
 				exit();
 				
}

if(strpos($route,'/contact') !== false){
		
				require 'routes/actions/contact.php';
 				exit();
				
}
if(strpos($route,'/logout') !== false){
		
				require 'routes/actions/logout.php';
 				exit();
}
if(strpos($route,'/checkout') !== false){
	
				require 'routes/actions/checkout.php';
 				exit();
}
if(strpos($route,'/del_fromcart') !== false){
	
				require 'routes/del_fromcart.php';
 				exit();
}
if (strpos($route, '/likes') !== false) {
			require 'routes/actions/likes.php';
			header("Location: " .$baseUrl."index.php");
			exit();
}	 