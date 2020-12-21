<?php
#echo "hello";
session_start();
include "db_conn.php";

if( isset($_POST['account']) && isset($_POST['password'])){

    function validate($data){// 驗證機制？
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



    $account = validate($_POST['account']) ;
    $password =  validate($_POST['password']);

    

    if(empty($account)){ //如果 姓名 是空的
        header("Location: index.php?error= Account is required");
        exit();
        
    }else if(empty($password)){// 如果 密碼 是空的
        header("Location: index.php?error= Password is required");// 在網址上有變化
        exit();

    }else{// 如果 姓名、密碼 都有輸入
        $sql = "select * from test_school where account = '$account' and password = '$password' ";
        $result = mysqli_query($connect, $sql);
        echo mysqli_num_rows($result);
        if(mysqli_num_rows($result) === 1){// 如果有這個人，回傳 true
                $row = mysqli_fetch_assoc($result);
                if($row['account'] === $account and $row['password'] === $password){// 如果 資料庫有這個人
                    $_SESSION['account'] = $row['account'];
                    $_SESSION['user_auth'] = $row['user_auth'];
                    //echo "<br/> user_auth: ".$row['user_auth'];
                   
                    $_SESSION['id'] = $row['id'];

                    header("Location: index.php");// 轉址到 index.php
                    exit();
                }else{// 如果 沒有這個人
                    header("Location: index.php?error= Incorrect Account or Password1");
                    exit();
                }
        }else{
            header("Location: index.php?error= Incorrect Account or Password2");
            exit();
            
        }
    }

}else{
    header("Location: index.php?error");
    exit();
}

?>