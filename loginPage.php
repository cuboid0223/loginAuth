<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <?php 
        include 'navbar.php';
    ?>
    <form action="login.php" method="post">
        <h2>login</h2>
        <!-- 當後端將 error 透過網址傳回並接收到錯誤 顯示錯誤 -->
        <?php if(isset($_GET['error'])){?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php }?>



        <label for="">Account</label>
        <input type="text" name='account' placeholder="Account"><br>
        <label for="">Password</label>
        <input type="password" name='password' placeholder="Password"><br>
        <button type="submit">Submit</button>
        <!-- <a href="signup.php" class="signupHref">have an account?</a> -->
    </form>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>