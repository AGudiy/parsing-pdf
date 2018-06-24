<?php
include_once PATH . '/views/header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col-md-10 order-md-1 my-4">
                <h5 class="mb-4">Данные парсинга <a target="_blank" href="http://color.romanuke.com">сайта</a></h5>
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <p>Кол-во картинок:</p>
                        </div>
                        <div class="col-md-2">
                            <input type="number" name="count" class="form-control" id="count" placeholder="" value="11"
                                   min="1" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Заполните пожалуйста поле
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label class="mr-4">Два цвета:</label>
                        </div>
                        <div class="col-md-10">
                            <span id="span-red"><input type="checkbox" name="color7" class="single-checkbox m-2" id="color-red" placeholder=""
                                         value="7"></span>
                            <span id="span-orange"><input type="checkbox" name="color8" class="single-checkbox m-2" id="color-orange" placeholder=""
                                         value="8"></span>
                            <span id="span-yellow"><input type="checkbox" name="color9" class="single-checkbox m-2" id="color-yellow" placeholder=""
                                         value="9"></span>
                            <span id="span-green"><input type="checkbox" name="color10" class="single-checkbox m-2" id="color-green" placeholder=""
                                         value="10"></span>
                            <span id="span-blue"><input type="checkbox" name="color11" class="single-checkbox m-2" id="color-blue" placeholder=""
                                         value="11"></span>
                            <span id="span-blue-1"><input type="checkbox" name="color12" class="single-checkbox m-2" id="color-blue-1" placeholder=""
                                                          value="12"></span>
                            <span id="span-pink"><input type="checkbox" name="color13" class="single-checkbox m-2" id="color-pink" placeholder=""
                                                          value="13"></span>
                            <span id="span-purple"><input type="checkbox" name="color14" class="single-checkbox m-2" id="color-purple" placeholder=""
                                                          value="14"></span>
                            <span id="span-brown"><input type="checkbox" name="color15" class="single-checkbox m-2" id="color-brown" placeholder=""
                                         value="15"></span>
                            <span id="span-gray"><input type="checkbox" name="color16" class="single-checkbox m-2" id="color-gray" placeholder=""
                                         value="16"></span>
                            <span id="span-while"><input type="checkbox" name="color17" class="single-checkbox m-2" id="color-white" placeholder=""
                                         value="17"></span>
                            <span id="span-black"><input type="checkbox" name="color18" class="single-checkbox m-2" id="color-black" placeholder=""
                                         value="18"></span>
                        </div>
                    </div>

                    <br class="m-3">
                    <button class="btn btn-lg btn-primary" type="submit" name="getColorsInfo">Выбрать цвета</button>
                </form>
            </div>
        </div>
    </div>


<?php
include_once PATH . '/views/footer.php';