<?php
include_once PATH . '/views/header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col-md-10 order-md-1 my-4">
                <h5 class="mb-4">Данные парсинга <a target="_blank" href="http://color.romanuke.com">сайта</a></h5>
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <p>Кол-во картинок:</p>
                        </div>
                        <div class="col-md-1">

                            <input type="number" name="count" class="form-control" id="count" placeholder="" value="11" min="1" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Заполните пожалуйста поле
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-1">
                            <label>Цвета</label>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color_red" class="form-control" id="color-red" placeholder="" value="7"><span>Красный</span>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color_" class="form-control" id="color-" placeholder="" value="8"><span>Красный</span>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color1" class="form-control" id="product_name" placeholder="" value="9"><span>Красный</span>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color1" class="form-control" id="product_name" placeholder="" value="10"><span>Красный</span>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color1" class="form-control" id="product_name" placeholder="" value="11"><span>Красный</span>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color1" class="form-control" id="product_name" placeholder="" value="12"><span>Красный</span>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color1" class="form-control" id="product_name" placeholder="" value="13"><span>Красный</span>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color1" class="form-control" id="product_name" placeholder="" value="14"><span>Красный</span>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color1" class="form-control" id="product_name" placeholder="" value="15"><span>Красный</span>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color1" class="form-control" id="product_name" placeholder="" value="16"><span>Красный</span>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color1" class="form-control" id="product_name" placeholder="" value="17"><span>Красный</span>
                        </div>
                        <div class="col-md-1">
                            <input type="checkbox" name="color1" class="form-control" id="product_name" placeholder="" value="18"><span>Красный</span>
                        </div>
                    </div>

                    <br class="m-3">
                    <button class="btn btn-lg" type="submit" name="getColorsInfo">Выбрать цвета</button>
                </form>
            </div>
        </div>
    </div>


<?php
include_once PATH . '/views/footer.php';