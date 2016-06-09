<?php

if(isset($_REQUEST['authcode'])){
    session_start();
    if(strtolower($_REQUEST['authcode']) == $_SESSION['authcode']){
        echo "ok!";
}else{
    echo "false!";
}
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>验证码</title>
    <style type="text/css">
    img{border: 1px solid;
        width: 100px;height: 30px;}
    </style>
</head>
<body>
    <form action="form.php" method="post">
    <p>验证码图片：<img src="./arr1.php?r=<?php echo rand();?>"></p>
    <p>请输入验证码：<input type="text" name="authcode" value=""></p>
    <p><button>Submit</button></p>
    </form>
</body>
</html>