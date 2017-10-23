<?php
include_once (ROOT.'/header.php');
if (isset($_POST['publicate_blog_comment'])){
    Blog::AddBlogComment($_POST['id'], $_POST['comment_area'] );
}
?>


<?php if (isset($blogList)): ?>
    <?php foreach ($blogList as $blogItem): ?>
        <div id="blog">
            <div id="blog_title">
                <?php echo $blogItem['title']; ?>
            </div>
            <img class="blog_left_img" src="/template/images/index_32.jpg" alt="">
            <div id="blog_date">
                <?php echo $blogItem['date']; ?>
            </div>
            <div id="blog_short_content">
                <?php echo $blogItem['short_content']; ?>
                <a href="/blog/<?php echo $blogItem['id']; ?>">читати далі...</a>
            </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <br>
    <br>
    <div id="blog_title">
        <?php echo $blogItem['title']; ?>
    </div>
    <div id="blog_date">
        <?php echo $blogItem['date']; ?>
    </div>
    <img class="blog_left_img" src="/template/images/index_32.jpg" alt="">

    <div class="blog_content">
        <?php echo $blogItem['content']; ?>
    </div>
<br>
    <br>
    <?php if (isset($_SESSION['user'])): ?>
        <hr>
        <p align="center"><b>Коментарі : </b></p><br>

        <form name="comment_blog" method="post" action="">

           <input  type="hidden" name="id" value=<?php echo $blogItem['id']?>>
            </p>
            <p><b>Ваше ім'я :</b>   <?php echo $_SESSION['login']?><br>
                <textarea name="comment_area" cols="40" rows="5" placeholder="Введіть текст коментаря"> </textarea> </p>
            <p><input type="submit" name="publicate_blog_comment" value="Опублікувати">
                <input type="reset" value="Очистити"> </p>
        </form>

        <?php endif; ?>
    <br>
    <br>
<?php endif; ?>
<?php
include_once (ROOT.'/footer.php');
?>

