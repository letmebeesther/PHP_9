<?php
   session_start();
   unset($_SESSION["username"]);  #unset 함수 사용하여 섹션값 삭제
?>
<html>
<head>
<meta charset="utf-8">
<link href="../css/style.css" rel="stylesheet">
</head>
<body>
<ul>
    <li><?= "userid 세션 : ".$_SESSION["userid"]."<br>" ?></li>
    <li><?= "username 세션 : ".$_SESSION["username"]."<br>" ?></li>
    <li><?= "username 세션이 삭제되었습니다!" ?></li>
</ul>
</body>
</html>
