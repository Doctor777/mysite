<?php
include_once (ROOT.'/header.php');
?>


<?php if (isset($blogList)): ?>

    <?php foreach ($blogList as $blogItem): ?>
        <div id="blog">
            <div id="blog_title">
                <?php echo $blogItem['title']; ?>
            </div>

            <div id="blog_date">
                <?php echo $blogItem['date']; ?>
            </div>
            <div id="blog_content">
            <?php if ($blogItem['preview']!=""):?>
                <?php echo '<img class="blog_left_img" id="blog_list_img" src='.$blogItem['preview'].'>'; ?>
                <?php else: echo '<img class="blog_left_img" src="/template/images/noimage.png">'; ?>
                <?php endif;?>
                <div class="blog_short_content">
                <?php echo $blogItem['short_content']; ?>
                <a href="/blog/<?php echo $blogItem['id']; ?>">   читати далі...</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

<?php else: ?>
    <br>
    <br>
<div id="blog">
    <div id="blog_title">
        <?php echo $blogItem['title']; ?>
    </div>
    <div id="blog_date">
        <?php echo $blogItem['date']; ?>
    </div>
    <div class="blog_content">
        <?php if ($blogItem['preview']!=""):?>
            <?php echo '<img class="blog_left_img"  src='.$blogItem['preview'].'>'; ?>
        <?php else: echo '<img class="blog_left_img" src="/template/images/noimage.png">'; ?>
        <?php endif;?>

        <?php echo htmlspecialchars_decode($blogItem['content'], ENT_QUOTES); ?>
    </div>
</div>
<br>
    <br>
    <hr>
    <p align="center"><b>Коментарі : </b></p><br>

<?php $blogCommentlist = Blog::getBlogCommentsList($blogItem['id'])?>
<?php if ($blogCommentlist): ?>
<?php foreach ($blogCommentlist as $blogCommentItem): ?>
            <div id="blog_comment">
            <?php echo $blogCommentItem['created']; ?><br>
    <?php echo $blogCommentItem['username']; ?><br>
    <?php echo $blogCommentItem['comment']; ?><br>
            </div>
            <br>
  <?php endforeach; ?>

        <?php else:?>
        <?php echo '<p align="center"><b>Поки що ніхто не додав жодного коментаря</b></p><br>'; ?>
    <?php endif;    ?>
    <?php if (isset($_SESSION['user'])): ?>

        <form name="comment_blog" method="post" action="">

           <input  type="hidden" name="id" value=<?php echo $blogItem['id']?>>
            </p>
            <p><b>Ваше ім'я :</b>   <?php echo $_SESSION['login']?><br>
                <textarea name="comment_area" cols="40" rows="5" placeholder="Введіть текст коментаря"></textarea> </p>
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

