<?php
include_once 'config.php';

$o_pars_color_rom = new ParserColorRomanuke();
//$pdf = new Pdf();

if(isset($_POST['gen_pdf'])){
    //$pdf->generFile();
}elseif(isset($_POST['updateInfo'])){
    $ar_src_titles = $o_pars_color_rom->updateInfo($_POST);
    include_once PATH . '/views/color_rom/parsing_update.php';
}elseif(isset($_POST['getColorsInfo'])){
    $ar_src_titles = $o_pars_color_rom->getInfo($_POST);
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
