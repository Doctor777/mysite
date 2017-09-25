<html>
<head>
    <title>Мій сайт новин на mvc</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="/template/css/style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td background="/template/images/index_02.gif">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <!--<td width="38%"><img src="/template/images/index_01.gif" width="380" height="166" alt=""></td-->
                    <td class="c_header">Мій сайт новин на mvc</td>
                    <td width="62%">
                        <table class="c_header_right"width="100%" border="0" cellspacing="10" cellpadding="0">
                            <tr>
                        <!--        <td width="47%" class="white-text">your very cool description goes here</td>-->
                                <td width="53%">
                                    <table width="100%" border="0" cellspacing="10" cellpadding="0">
                                        <tr>
                                           <td width="7%"><img src="/template/images/index_05.jpg" width="33"
                                                                height="32" alt=""></td>
                                            <td width="93%" class="white-text">Tel. +421 47 4514 161<br>
                                                info@yourverycool.com
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td height="231" background="/template/images/index_08.jpg" class="c_header_up">
            <table width="100%" border="0" cellspacing="10" cellpadding="0">
                <tr>
                    <td width="6%">&nbsp;</td>
                    <td width="94%">
                        <table width="100%" border="0" cellspacing="10" cellpadding="0">
                            <tr>
                                <td><h2 class="white-text"><strong>Ми пропонуємо Вам:</strong></h2></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="10" cellpadding="0">
                                        <tr>
                                            <td width="3%"><img src="/template/images/Arrow.gif" width="20" height="20">
                                            </td>
                                            <td width="97%" class="white-text">Завжди свіжі новини
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="/template/images/Arrow.gif" width="20" height="20"></td>
                                            <td class="white-text">Огляди подій
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="/template/images/Arrow.gif" width="20" height="20"></td>
                                            <td class="white-text">Анонси
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td><a href="#"><img src="/template/images/index_09.gif" alt="" width="197" height="41" border="0"></a>
                    </td>
                    <td><a href="#"><img src="/template/images/index_10.gif" alt="" width="131" height="41" border="0"></a>
                    </td>
                    <td><a href="#"><img src="/template/images/index_11.gif" alt="" width="129" height="41" border="0"></a>
                    </td>
                    <td><a href="#"><img src="/template/images/index_12.gif" alt="" width="129" height="41" border="0"></a>
                    </td>
                    <td><img src="/template/images/index_13.jpg" width="414" height="41" alt=""></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td><img src="/template/images/index_14.jpg" width="1000" height="44" alt=""></td>
    </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="10" cellpadding="0">
                <tr>
                    <td width="29%" align="center" valign="top">
                        <table width="211" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><a href="#"><img src="/template/images/index_20.gif" alt="" width="211" height="30"
                                                     border="0"></a></td>
                            </tr>
                            <tr>
                                <td><a href="#"><img src="/template/images/index_23.gif" alt="" width="211" height="39"
                                                     border="0"></a></td>
                            </tr>
                            <tr>
                                <td><a href="#"><img src="/template/images/index_26.gif" alt="" width="211" height="36"
                                                     border="0"></a></td>
                            </tr>
                            <tr>
                                <td><a href="#"><img src="/template/images/index_27.gif" alt="" width="211" height="40"
                                                     border="0"></a></td>
                            </tr>
                            <tr>
                                <td><a href="#"><img src="/template/images/index_28.gif" alt="" width="211" height="42"
                                                     border="0"></a></td>
                            </tr>
                        </table>
                    </td>
                    <td width="71%" valign="top">
                        <table class="c_news" width = "100%" border = "0" cellspacing = "10" cellpadding = "0" >
                        <?php foreach ($newsList as $newsItem):?>

                            <tr >
                                <td class="c_title"><?php echo $newsItem['title'];?> </td >
                            </tr >
                            <tr >
                                <td> <?php echo $newsItem['date'];?> </td>
                                <!--<td bgcolor = "#BED780" ><img src = "/template/images/spacer.gif" width = "1" height = "1" ></td-->
                            </tr >
                            <tr >
                                <td >
                                    <table width = "100%" border = "0" cellspacing = "10" cellpadding = "0" >
                                        <tr>
                                            <!--<td width = "3%" ><img src = "/template/images/index_24.jpg" width = "115"
                                                                height = "113" alt = "" ></td >-->
                                      <!--      <td width = "97%" > Lorem ipsum dolor sit amet, consectetur adi piscing
                                                elit .<br >
    Mauris quis dolor ac ante dapibus rhoncus . Nam ut ligula .<br >
    Maecenas ut mi varius magna faucibus aliquam . Vestibulum < br>
                                                volutpat . Vestibulum mi enim, sagittis ac .
                                            </td >-->

                                        <td> <?php echo $newsItem['short_content'];?> </td>
                                            </tr>
                                        <tr>
                                            <td><a href="/news/<?php echo $newsItem['id'];?>">читати далі...</a></td>


                                        </tr >
                                    </table >
                                    <?php endforeach;?>


                                </td>
                            </tr>
                            <tr>
                                <td><h2>Products</h2></td>
                            </tr>
                            <tr>
                                <td bgcolor="#BED780"><img src="/template/images/spacer.gif" width="1" height="1"></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="10" cellpadding="0">
                                        <tr>
                                            <td width="19%"><img src="/template/images/index_32.jpg" width="117"
                                                                 height="93" alt=""></td>
                                            <td width="19%"><img src="/template/images/index_34.jpg" width="113"
                                                                 height="93" alt=""></td>
                                            <td width="22%"><img src="/template/images/index_36.jpg" width="116"
                                                                 height="93" alt=""></td>
                                            <td width="40%"><img src="/template/images/index_38.jpg" width="113"
                                                                 height="93" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td class="p"><a href="#"><img src="/template/images/index_45.gif" alt=""
                                                                           width="88" height="29" border="0"></a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="53" background="/template/images/index_48.gif">
            <table width="100%" border="0" cellspacing="10" cellpadding="0">
                <tr>
                    <td width="25%" align="center" class="green-text"><a href="#">Terms of Use</a> | <a href="#">Privacy
                            Statement </a></td>
                    <td width="75%" align="center" class="white-text">Copyright &copy; Sitename.com. All rights
                        reserved. Design by Stylish <a href="http://www.stylish/template.com"
                                                       style="color:#fff; text-decoration:none;">Web /templates</a></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>