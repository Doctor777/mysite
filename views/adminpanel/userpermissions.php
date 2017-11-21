<?php
include_once (ROOT.'/header.php');
?>

    <link rel="stylesheet" href="/template/css/adminpanel.css" type="text/css" media="all" />
    <br>
    <div class="box">
    <!-- Box Head -->
    <div class="box-head">
        <h2>Редагувати групи користувачів</h2>
    </div>

        <div class="box-content">
            <form name="user_group_edit" method="post">
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
                                    <option>admin</option>
                                </select></td>

                        </tr>


                    <?php endforeach; ?>
                <?php endif;?>
            </table>
                <p><input type="submit" value="Внести зміни"></p>
            </form>
        </div>
    </div>
<!--блок редагування прав груп пористувачів-->
    <div class="box">
        <!-- Box Head -->
        <div class="box-head">
            <h2>Редагувати права груп користувачів</h2>
        </div>

        <div class="box-content">
            <form action="" name="permissions_group_edit" method="post">
                <table width="30%" border="0" cellspacing="5" cellpadding="0">
                <?php $rolelist = Adminpanel::getRolesList()?>


                    <tr>
                        <th width="5">id</th>
                        <th>Група</th>

                        <th>Бачити коментарі</th>
                        <th>Редагувати коментарі</th>
                        <th>Видаляти коментарі</th>
                        <th>Видалити групу</th>
                    </tr>
                         <?php if (isset($rolelist)): ?>
                    <?php foreach ($rolelist as $roleItem): ?>
                            <tr>
                                <td><?php echo $roleItem['id']?></td>
                                <td><?php echo $roleItem['role']?></td>

                                <td><input type="checkbox" name="view_comments=<?php echo $roleItem['id']?>"></td>
                                <td><input type="checkbox" name="edit_comments=<?php echo $roleItem['id']?>"></td>
                                <td><input type="checkbox" name="delete_comments=<?php echo $roleItem['id']?>"></td>
                                <td><button type="submit" name="delete_group"> Видалити </button></td>

                            </tr>
                            <?php endforeach;?>
                            <?php endif;?>
                    <table width="30%" border="0" cellspacing="5" cellpadding="0">
                        <tr><td><label>Додати нову групу користувачів</label></td></tr>
<td><input type="text" name="add_group_name" placeholder="Назва групи" />
                        <button type="submit" name="Add_group">Додати</button></td>
</tr>

                </table>
                    <br>
                <p><input type="submit" name="edit_rules" value="Внести зміни"></p>
            </form>
        </div>
    </div>



<?php
include_once (ROOT.'/footer.php');
?>