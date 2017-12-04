<?php
include_once(ROOT . '/header.php');
?>

    <link rel="stylesheet" href="/template/css/adminpanel.css" type="text/css" media="all"/>
    <br>
    <div class="box">
        <!-- Box Head -->
        <div class="box-head">
            <h2>Редагувати блог</h2>
        </div>
        <?php if (isset($blogItem)): ?>
        <div class="form">
            <form action="/adminpanel/blogedit/<?php echo $blogItem['id'] ?>" enctype="multipart/form-data"
                  method="post">

                <!-- Form -->

                <p>
                    <span class="req"></span>
                    <label>Назва блогу <span>(Обов'язкове поле)</span></label>
                    <input type="text" class="field size1" value="<?php echo $blogItem['title'] ?>"
                           placeholder="мін 5 та макс 100 символів" name="blog_title"/>
                </p>
                <p>
                    <span class="req"></span>
                    <label>Контент <span>(Обов'язкове поле)</span></label>
                    <textarea name="blog_content" class="field size1" placeholder="мін 5 та макс 100 символів" rows="10"
                              cols="30"><?php echo $blogItem['content'] ?></textarea>
                </p>

                <p><label>Загрузка фото</label></p>
                <?php if ($blogItem['preview'] != ""): ?>
                    <?php echo '<img class="blog_edit_img"  src=' . $blogItem['preview'] . '>'; ?>
                <?php endif; ?>
                <p><input style="width: 240px" type="file" name="photo" multiple accept="image/*,image/jpeg"
                          value="<?php echo $blogItem['preview'] ?>"></p>


                <div class="buttons">
                    <input type="button" class="button" value="перегляд"/>
                    <input type="submit" name="edit_blog" class="button" value="опублікувати"/>
                </div>

                <?php else :
                echo $res; ?>
            </form>


            <?php endif; ?>
        </div>
    </div>
<?php
include_once(ROOT . '/footer.php');
?>