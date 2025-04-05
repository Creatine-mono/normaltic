<html>
    <head>
        <title>로그인페이지</title>
        <style>
            body{
                text-align: center;
                margin:200px;
                background-image: url(https://images.wallpaperscraft.com/image/single/soldier_helmet_art_123765_2048x1152.jpg)
                }
           .password_input input{
            width: 300px;
            margin: 0px auto;
            padding: 10px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(134, 68, 68, 0.1);
            font-family: "Bytesized", sans-serif;
            font-weight: 400;
                font-style: normal;
                font-weight: bold;
            }
            .login_input input{
            width: 300px;
            margin: 0px auto;
            padding: 10px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(138, 68, 68, 0.34);
            font-family: "Bytesized", sans-serif;
            font-weight: 400;
                font-style: normal;
                font-weight: bold;
            }
        .submit input {
            width: 300px;
            padding: 10px;
            margin-top: 20px;
            background-color:rgba(136, 65, 65, 0.9);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: "Bytesized", sans-serif;
            font-weight: 400;
                font-style: normal;
                font-weight: bold;
            }
        h2 {
            color: rgba(49, 49, 42, 0.88);
            font-family: "Bytesized", sans-serif;
             font-weight: 400;
                font-style: normal;
                font-weight: bold;

        }
        </style>
    </head>
    <body>
        <class="container">
        <h2>LOGIN</h2>
        <h1>
            <form method="post" id="login-form">
                    <div class="login_input">
                    <input type="text" name= "id" placeholder="id">
                    </div>
                <div class="password_input">                    
                    <input type="password" name="passwd" placeholder="password">
                </div>
                <div class="submit">                    
                    <input type="submit" value="login">
                </div>   
            </form>
        </h1>
        <?php
           $id = $_POST['id'];
           $pw = $_POST['passwd'];

           if ($id == 'admin' && $pw == 'admin1234'){
                echo "<script>alert('로그인 성공');</script>";
           }
           else {
                echo "<script>alert('로그인이 잘못됨');</script>";
            }
            ?>
    </body>
</html>