<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
</head>
<body>
    <?php 
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $email = $_POST['email'];
        $password= $_POST['password'];
        if($email =="b221210025@sakarya.edu.tr" && $password=="b221210025"){
            echo "Başarıyla giriş yaptınız!  "; 
            echo "  Hoşgeldin".$email;
        }
        else {
            echo "Kullanıcı adı veya şifre hatalı!  ";
            echo "  Tekrar deneyiniz!";
        }
       
    }
    ?>
</body>
</html>