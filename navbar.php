<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  session_start(); ?> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li> 
                <?php  if($_SESSION['user_auth'] == 1): ?>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Management</a>
                    </li>
                <?php endif; ?> 
                <?php if($_SESSION['user_auth'] == 1 or $_SESSION['user_auth'] == 2){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php">User Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                   
                <?php }elseif($_SESSION['user_auth'] != 1 or $_SESSION['user_auth'] != 2 ){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="loginPage.php">login</a>
                    </li>
                <?php  };?>
                <!--  -->
                
            </ul>
            </div>
        </div>
    </nav>
    
</body>
</html>