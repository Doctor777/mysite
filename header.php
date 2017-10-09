<html>
<head>
    <title>Мій сайт на mvc</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="/template/css/style.css" rel="stylesheet" type="text/css">
</head>

<?php
//$errors=$_SESSION['errors'];
if (isset($errors) && is_array($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li> - <?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" height="150px" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td background="/template/images/index_02.gif">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td class="c_header">Мій сайт на mvc</td>

                    </td>
                    <td>
                        <div class="c_avtoriz">
                        <?php if (!isset($_SESSION['user'])):?>

                                <form  action="" method="post">
                                    <!-- <i>Авторизація</i><br>-->
                                    <input type="text" name="login" placeholder="login...">
                                    <input type="password" name="password" placeholder="*******">
                                    <button type="submit" name='vhod'>
                                        <i>Вхід</i>
                                    </button>
                                    <!--<button type="submit"-->
                                    <br><a href="#"><i>Зареєструватися</i></a>
                                    <!--</button>-->
                                </form>

                        <?php else:?>
                        <form  action="" method="post">
                            <button type="submit" name='vyhod'>
                                <i>Вихід</i>
                            </button>
                        </form>
                        <?php endif; ?>
                        </div>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>
<div class="container">
    <nav>
        <ul class="mcd-menu">
            <li>
                <a href="../">
                    <i class="fa fa-home"></i>
                    <strong>На головну</strong>
                    <small>home page</small>
                </a>
            </li>


            <li>
                <a href="../news/" class="active">
                    <i class="fa fa-globe"></i>
                    <strong>Новини</strong>
                    <small>news</small>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-comments-o"></i>
                    <strong>Блог</strong>
                    <small>blog</small>
                </a>
                <ul>
                    <li><a href="#"><i class="fa fa-globe"></i>Подія №1</a></li>
                    <li>
                        <a href="#"><i class="fa fa-group"></i>Подія №2</a>
                        <ul>
                            <li><a href="#"><i class="fa fa-female"></i>Подія №3</a></li>
                            <li>
                                <a href="#"><i class="fa fa-male"></i>Подія №4</a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-leaf"></i>About</a></li>
                                    <li><a href="#"><i class="fa fa-tasks"></i>Skills</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-trophy"></i>Rewards</a></li>
                    <li><a href="#"><i class="fa fa-certificate"></i>Certificates</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-gift"></i>
                    <strong>Улюблене</strong>
                    <small>favorite</small>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-edit"></i>
                    <strong>Про нас</strong>
                    <small>about us</small>
                </a>
            </li>

            <li class="float">
                <i class="c_search"></i>
                <input type="text" placeholder="search...">
                <button type="submit" class="c_search"><i>пошук</i>
                </button>
                </a>
                <a href="" class="search-mobile">
                    <i class="fa fa-search"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>

</body>
</html>