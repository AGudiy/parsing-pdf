<?php
include_once PATH . '/views/header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 order-md-1 my-4">
                <h3 class="mb-4 text-center text-primary">Редактировать данные</h3>
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="row">
                        <?php
                        foreach ($ar_src_titles as $k => $src_and_title):
                            ?>
                            <div class="col-md-4 mb-3">
                                <label class="">
                                    <input type="checkbox" value="<?= $src_and_title['img_src'] ?>" name="<?= $k ?>" class="check1">
                                    <span class="span1">
                                        <img width="300px" class="m-3" src="<?= $src_and_title['img_src'] ?>">
                                        <div class="card-body">
                                            <p class="card-text"><?= $src_and_title['h3'] ?></p>
                                        </div>
                                    </span>
                                </label>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>

                    <br class="m-3">
                    <button class="btn btn-lg btn-danger" type="submit" name="updateInfo">Заменить картинки</button>
                    <input type="">
                </form>
            </div>
        </div>
    </div>

<?php
include_once PATH . '/views/footer.php';