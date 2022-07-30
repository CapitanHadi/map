<?php //defined('BASE_PATH') OR die("permision denide!") ;

function getConfig(){

    return 1;
}

function getCoorentUrl(){

    return 1;
}

function redirect($url){
    header("Location: $url");
    die();
}

function diePage($msg){#کارش اینه پیام دلخواه مارا نشان و به عنوان پارامتر گرفته و دای را اعمال میکند
    echo "<div style='padding: 30px; width: 80%; margin: 50px auto; background: #f9dede; border: 1px solid #cca4a4; color: #521717; border-radius: 5px; font-family: sans-serif;'>$msg</div>";
    die() ;
}

function message($msg,$cssClass = 'info'){
    echo "<div class='$cssClass' style='padding: 20px; width: 80%; margin: 10px auto; background: #f9dede; border: 1px solid #cca4a4; color: #521717; border-radius: 5px; font-family: sans-serif;'>$msg</div>";
}


function isAjaxRequest(){# اینجا چک میکنیم که درخواست ما ایجکس است یا نه که درون ارایه سرور یک قسمت هستدکه میگوید

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
       return true ;
    }
    return false ;
}
 function dd($var){ # یه تابع برای نمایش بهتر ور دامپ این تابع تو لاراول بیشتر هستش
    echo "<pre style='color : red ; z-index: 999; position: relative; background: #fff; padding: 10px; margin: 10px; border-radius: 10px; border-left: 3px solid #8b2254;'>" ;
    var_dump($var) ;
    echo "</pre>" ;
 }

 function site_url($uri =''){
    return BASE_URL . $uri ;
 }