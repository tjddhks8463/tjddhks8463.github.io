<?php
$link = mysqli_connect("localhost", 'root', '','amusementpark');
?>
<html lang="ko">
<meta charset="UTF-8">
<body>


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 2px solid #000000;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
<form action="homework4.php" method="GET">
고객이름: <input type="text" name="name">
<input type="submit" value="합계" > <br>
<br>
<table>
  <tr>
    <th>No</th>
    <th>구분</th>
    <th colspan="2">어린이</th>
    <th colspan="2">어른</th>
    <th>비고</th>

</tr>
  <tr>
    <td>1</td>
    <td>입장권 </td>
    <td>7000</td>
    <td><select name="select1">
    <option value="0" selected>0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select></td>
    <td>10000</td>
    <td><select name="select2">
    <option value="0" selected>0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select></td></td>
    <td>입장</td>
  </tr>
  <tr>
    <td>2</td>
    <td>BIG3 </td>
    <td>12000 </td>
    <td><select name="select3">
    <option value="0" selected>0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select></td>
    <td>16000 </td>
    <td><select name="select4">
    <option value="0" selected>0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select> </td>
    <td>입장+놀이3종</td>
  </tr>
  <tr>
    <td>3</td>
    <td>자유이용권</td>
    <td>21000</td>
    <td><select name="select5">
    <option value="0" selected>0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select></td>
    <td>26000</td>
    <td><select name="select6">
    <option value="0" selected>0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select></td>
    <td>입장+놀이자유</td>
  </tr>
  <tr>
    <td>4</td>
    <td>연간이용권</td>
    <td>70000</td>
    <td><select name="select7">
    <option value="0" selected>0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select></td>
    <td>90000</td>
    <td><select name="select8">
    <option value="0" selected>0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select></td>
    <td>입장+놀이자유</td>
  </tr>
</table>
</form>
<?php 
$today = date("Y:m:d H:i:s a");
echo date("Y년m월d일 H시i분 a ") . "<br>";
if (isset($_GET["name"]) && isset ($_GET["select1"]) && isset($_GET["select2"])
  && isset ($_GET["select3"])&& isset ($_GET["select4"])
  && isset ($_GET["select5"])&& isset ($_GET["select6"])
  && isset ($_GET["select7"])&& isset ($_GET["select8"])) {
    echo $_GET["name"].  " 고객님 사랑합니다" ."<br>";
    echo "어린이 입장권 ". $_GET["select1"].  "매" ."<br>"; 
    echo "어른 입장권 ". $_GET["select2"].  "매" ."<br>";
    echo "어린이 BIG3 ". $_GET["select3"].  "매" ."<br>"; 
    echo "어른 BIG3 ". $_GET["select4"].  "매" ."<br>";
    echo "어린이 자유이용권 ". $_GET["select5"].  "매" ."<br>"; 
    echo "어른 자유이용권 ". $_GET["select6"].  "매" ."<br>";
    echo "어린이 연간이용권 ". $_GET["select7"].  "매" ."<br>"; 
    echo "어른 연간이용권 ". $_GET["select8"].  "매" ."<br>";
    $total = 7*$_GET["select1"]+10*$_GET["select2"]+12*$_GET["select3"]+16*$_GET["select4"]+
    21*$_GET["select5"]+26*$_GET["select6"]+70*$_GET["select7"]+90*$_GET["select8"];
    echo "합계: ". $total*1000 . "원입니다." . "<br>";

   $sql=" INSERT INTO  `users` ".  
   "VALUES ('$today',  '$_GET[name]',  
   '$_GET[select1]',  '$_GET[select2]',  
   '$_GET[select3]',  '$_GET[select4]',  
   '$_GET[select5]',  '$_GET[select6]', 
   '$_GET[select7]',  '$_GET[select8]')";
  //echo "SQL:". $sql . "<br>";
   mysqli_query($link,$sql);  
   mysqli_close($link);
}
?>
</body>
</html>
