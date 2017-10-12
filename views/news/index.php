<?php
include_once (ROOT.'/header.php');
?>


<?php if (isset($newsList)): ?>
<?php foreach ($newsList as $newsItem): ?>
    <div id="news">
        <div id="news_title">
        <?php echo $newsItem['title']; ?>
        </div>
        <img class="news_left_img" src="/template/images/index_32.jpg" alt="">
        <div id="news_date">
        <?php echo $newsItem['date']; ?>
        </div>
        <div id="news_short_content">
        <?php echo $newsItem['short_content']; ?>
        <a href="/news/<?php echo $newsItem['id']; ?>">читати далі...</a>
        </div>
    </div>
<?php endforeach; ?>
<?php else: ?>
    <br>
    <br>
    <div id="news_title">
        <?php echo $newsItem['title']; ?>
    </div>
    <div id="news_date">
        <?php echo $newsItem['date']; ?>
    </div>
    <img class="news_left_img" src="/template/images/index_32.jpg" alt="">

    <div class="news_content">
        <?php echo $newsItem['content']; ?>
    </div>
    <br>
    <br>
<?php endif; ?>
<?php
include_once (ROOT.'/footer.php');
?>

