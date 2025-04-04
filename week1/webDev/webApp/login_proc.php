<?php
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($id === 'admin' && $password === 'admin1234') {
        $message = "<p class='success'> 로그인 성공 </p>";
    } else {
        $message = "<p class='error'> 아이디 또는 비밀번호가 잘못되었습니다. </p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>로그인페이지</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="login-form">
        <h1>LOGIN</h1>

        <?= $message ?>

        <form method="POST" action="login.php">
            <div class="int-area">
                <input type="text" name="id" id="id" autocomplete="off">
                <label for="id">USER NAME</label>
            </div>
            <div class="int-area">
                <input type="password" name="password" id="pw" autocomplete="off">
                <label for="pw">PASSWORD</label>
            </div>
            <div class="btn-area">
                <button type="submit">LOGIN</button>
            </div>
        </form>
    </section>
</body>
</html>

