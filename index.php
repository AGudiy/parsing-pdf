<?php
include_once 'config.php';

if(isset($_POST['getColorsInfo'])){
    $o_pars_color_rom = new ParserColorRomanuke();
    $ar_src_titles = $o_pars_color_rom->getInfo();
    include_once PATH . '/views/color_rom/parsing_update.php';
}else{
    include_once PATH . '/views/color_rom/parsing_form.php';
}



//preg_match_all('/<li>(.*)<\/li>/Uis', $html, $data_li);
//echo '<pre>';
//var_dump($data_li);

//echo $html;

//отображаем и редактируем данные


//генерируем pdf документ
