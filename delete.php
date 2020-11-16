<?php
$userId = $param['id'];
deleteUser($userId);
?>
<div class="container">
<h1>Пользователь удалён</h1>
    <a class="btn btn-sm btn-outline-secondary" href="/">На главную </a>
</div>
<?php

//if (!isset($_POST['id'])){
//    include 'partials/not_found.php';
//    exit;
//}



header("/");
