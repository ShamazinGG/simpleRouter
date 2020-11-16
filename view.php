<?php

//var_dump($param);
//if (!isset($param['id'])){
//    include 'partials/not_found.php';
//    exit;
//}

$userId = $param['id'];
//var_dump($userId);
$user = getUserById($userId);
if (!$user) {
//    include 'partials/not_found.php';
    exit;
}

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Информация о пользователе: <b><?php echo $user['login'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">Редактировать</a>
            <form method="post" action="delete.php" style="display: inline-block">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn  btn-danger" value="Удалить"
                        onclick="return confirm('Вы уверены, что хотите удалить пользователя?')">Удалить</button>

            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Логин:</th>
                <td><?php echo $user['login'] ?></td>
            </tr>
            <tr>
                <th>Имя:</th>
                <td><?php echo $user['name'] ?></td>
            </tr>
            <tr>
                <th>Фамилия:</th>
                <td><?php echo $user['surname'] ?></td>
            </tr>
            <tr>
                <th>Дата рождения:</th>
                <td><?php echo $user['birthdate'] ?></td>
            </tr>
            <tr>
                <th>email:</th>
                <td><?php echo $user['email'] ?></td>
            </tr>
            <tr>
                <th>Адрес:</th>
                <td><input name="address" value="<?php echo $user['address'] ?>" class="form-control"></td>
<!--                <td>--><?php //echo $user['address'] ?><!--</td>-->
            </tr>


            </tbody>

        </table>

    </div>

</div>




<?php include 'partials/footer.php'; ?>
