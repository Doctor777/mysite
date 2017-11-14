<?php
include_once (ROOT.'/header.php');
?>

    <link rel="stylesheet" href="/template/css/adminpanel.css" type="text/css" media="all" />
    <br>
    <div class="box">
    <!-- Box Head -->
    <div class="box-head">
        <h2>Редагувати права користувачів</h2>
    </div>

        <div class="box-content">
            <form method="post">
            <table width="30%" border="0" cellspacing="5" cellpadding="0">
                <tr>
                    <th width="5">id</th>
                    <th>Ім'я</th>
                    <th>Емейл</th>
                    <th>Статус онлайн</th>
                    <th>Права</th>

                </tr>

                <?php if (isset($userslist)): ?>
                    <?php foreach ($userslist as $userItem): ?>

                        <tr>
                            <td><?php echo $userItem['id'].'|'; ?></td>
                            <td><?php if ($userItem['banned']!=1):echo $userItem['login']; else: echo "<del><font color = 'red'>".$userItem['login']."</font></del>"; endif; ?></td>
                            <td><?php echo $userItem['email']; ?></td>
                            <?php if ($userItem['online']==1):?>
                                <td>online</td>
                                <?php else: echo "<td> </td>"?>
                            <?php endif;?>
                            <td><select>
                                    <option>user</option>
                                    <option>privileged user</option>
                                    <option>admin</option>
                                </select></td>
                            <td><input type="checkbox"  {

                            }"></td>
                            <td><input type="checkbox"></td><td>
                               <td><input type="checkbox"></td>
                        </tr>


                    <?php endforeach; ?>
                <?php endif;?>
            </table>
                <p><input type="submit" value="Внести зміни"></p>
            </form>
        </div>
    </div>



<?php
include_once (ROOT.'/footer.php');
?>