<html>
<head><meta charset="utf-8"></head>
<body>

삼각형 :밑변과 높이를 입력으로 받아서 면적을 출력한다<br>
밑변:<?php echo $_POST["width"]; ?><br>
높이:<?php echo $_POST["height"]; ?><br>
면적:<?php echo $_POST["width"]*$_POST["height"]/2; ?><br>
직사각형 :가로와 세로를 입력으로 받아서 면적을 출력한다<br>   
밑변:<?php echo $_POST["width"]; ?><br>
높이:<?php echo $_POST["height"]; ?><br>
면적:<?php echo $_POST["width"]*$_POST["height"]; ?><br>
원 :반지름을 입력으로 받아서 면적을 출력한다<br>
반지름:<?php echo $_POST["radius"]; ?><br>
면적:<?php echo 3.14*$_POST["radius"]^2; ?><br>
직육면체 : 가로, 세로, 높이를 입력으로 받아서 체적을 출력한다.<br>   
밑변:<?php echo $_POST["width"]; ?><br>
높이:<?php echo $_POST["height"]; ?><br>
세로:<?php echo $_POST["length"]; ?><br>
면적:<?php echo $_POST["width"]*$_POST["height"]*$_POST["length"]; ?><br>
원통 : 반지름과 높이를 입력으로 받아서 체적을 출력한다<br>
반지름:<?php echo $_POST["radius"]; ?><br>
높이:<?php echo $_POST["height"]; ?><br>
면적:<?php echo 3.14*$_POST["radius"]^2*$_POST["height"]; ?><br>
구 : 반지름을 입력으로 받아서 체적을 출력한다<br>   
반지름:<?php echo $_POST["radius"]; ?><br>
면적:<?php echo 4/3*3.14*$_POST["radius"]^3; ?><br>

</body>
</html>