<?php
include_once PATH . '/views/header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 order-md-1 my-4">
                <h5 class="mb-4">Редактировать данные</h5>
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="row">
                        <?php
                        foreach ($ar_src_titles as $src_and_title):
                            ?>
                            <div class="col-md-4 mb-3">
                                <img width="300px" src="<?= $src_and_title['img_src'] ?>">
                                <div class="card-body">
                                    <p class="card-text"><?= $src_and_title['h3'] ?></p>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>

                    <br class="m-3">
                    <button class="btn btn-lg" type="submit" name="updateColors">Обновить цвета</button>
                </form>
            </div>
        </div>
    </div>


<?php
include_once PATH . '/views/footer.php';