<?php




include_once (ROOT.'/header.php');

$blogList = Blog::getBlogList();
?>

<link rel="stylesheet" href="../template/css/adminpanel.css" type="text/css" media="all" />
<div class="c_img">


<!-- Container -->
<div id="container">
	<div class="shell">
		<!-- Message OK -->
<!--		<div class="msg msg-ok">
			<p><strong>Your file was uploaded succesifully!</strong></p>
			<a href="#" class="close">close</a>
		</div>-->
		<!-- End Message OK -->

		<!-- Message Error -->
		<div class="msg msg-error">
            <?php if (isset($add_blog_errors) && is_array($add_blog_errors)): ?>

                <?php foreach ($add_blog_errors as $add_blog_error): ?>
                    <p><strong> <?php echo $add_blog_error; ?></strong></p>
			<a href="#" class="close">close</a>
                <?php endforeach; ?>

            <?php endif; ?>
		</div>
		<!-- End Message Error -->
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>

			<!-- Content -->
			<div id="content">

				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Список блогів</h2>
						<div class="right">
							<label>пошук блогу</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="пошук" />
						</div>
					</div>
					<!-- End Box Head -->

					<!-- Table -->

                    <div class="table">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Назва</th>
								<th>Дата</th>
								<th>Автор</th>
								<th width="110" class="ac">Керування контентом</th>
							</tr>
                            <?php if (isset($blogList)): ?>
                            <?php foreach ($blogList as $blogItem): ?>

							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="/blog/<?php echo $blogItem['id']; ?>"><?php echo $blogItem['title']; ?></a></h3></td>
								<td><?php echo $blogItem['date']; ?></td>
								<td><a href="#"><?php echo $blogItem['author_name']; ?></a></td>
								<td><a href="#" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							    <?php endforeach; ?>
                            <?php endif; ?>
						</table>


						<!-- Pagging -->
						<div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div>
						<!-- End Pagging -->

					</div>
					<!-- Table -->

				</div>
				<!-- End Box -->

				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Додати новий блог</h2>
					</div>
					<!-- End Box Head -->

					<form action="/addblog/" name="add_blog" method="post">

						<!-- Form -->
						<div class="form">
								<p>
									<span class="req"></span>
									<label>Назва блогу <span>(Обов'язкове поле)</span></label>
									<input type="text" class="field size1" placeholder="мін 5 та макс 100 символів" name="blog_title" />
								</p>
                            	<p>
									<span class="req"></span>
									<label>Контент <span>(Обов'язкове поле)</span></label>
									<textarea name="blog_content" class="field size1" placeholder="мін 5 та макс 100 символів" rows="10" cols="30"></textarea>
								</p>

						</div>
						<!-- End Form -->

						<!-- Form Buttons -->
						<div class="buttons">
							<input type="button" class="button" value="перегляд" />
							<input type="submit" class="button" value="опублікувати" />
						</div>
						<!-- End Form Buttons -->
					</form>
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->

			<!-- Sidebar -->
			<div id="sidebar">

				<!-- Box -->
				<div class="box">

					<!-- Box Head -->
					<div class="box-head">
						<h2>Керування</h2>
					</div>
					<!-- End Box Head-->

					<div class="box-content">
					<!--	<a href="#" class="add-button"><span>Add new Article</span></a>
						<div class="cl">&nbsp;</div>-->

						<p class="select-all"><input type="checkbox" class="checkbox" /><label>виділити все</label></p>
						<p><a href="#">Видалити вибране</a></p>

						<!-- Sort -->
						<div class="sort">
							<label>Сортувати за: </label>
							<select class="field">
								<option value="">Назвою</option>
								<option value="">Датою</option>
								<option value="">Автором</option>
							</select>
						</div>
						<!-- End Sort -->

					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->

			<div class="cl">&nbsp;</div>
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->
</div>

<?php
include_once (ROOT.'/footer.php');
?>


