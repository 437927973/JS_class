<!doctype html> 
<html> 
<head> 
  <meta charset="UTF-8"> 
  <title>登录系统</title> 
</head> 
<body> 
  <?php 
    session_start();//登录系统开启一个session内容 
    $username=$_REQUEST["username"];//获取html中的用户名（通过post请求） 
    $password=$_REQUEST["password"];//获取html中的密码（通过post请求） 
  
//  $conn=mysql_connect("localhost","root","root");//连接mysql 数据库，账户名root ，密码root     
//  if (!$conn) { 
//    die('数据库连接失败'.$mysql_error()); 
//  } 
//  mysql_select_db("eyunzhu_DB",$conn);//use user_info数据库；
    
    $conn = mysqli_connect('localhost','root','root','eyunzhu_db')or ('error');//新连接方式	     
    $dbusername=null; 
    $dbpassword=null;
    
    $result=mysqli_query($conn,"select * from eyunzhu_user where username ='{$username}' and user_state =1;");//查出对应用户名的信息，isdelete表示在数据库已被删除的内容 
    while ($row=mysqli_fetch_array($result)) {//while循环将$result中的结果找出来 
      $dbusername=$row["username"]; 
      $dbpassword=$row["password"]; 
    } 
    
//  $result=mysql_query("select * from eyunzhu_user where username ='{$username}' and user_state =1;");//查出对应用户名的信息，isdelete表示在数据库已被删除的内容 
//  while ($row=mysql_fetch_array($result)) {//while循环将$result中的结果找出来 
//    $dbusername=$row["username"]; 
//    $dbpassword=$row["password"]; 
//  } 
  
    
    if (is_null($dbusername)) {//用户名在数据库中不存在时跳回login.html界面 
  ?> 
  <script type="text/javascript"> 
    alert("用户名不存在"); 
    window.location.href="login.html"; 
  </script> 
  <?php 
    } 
    else { 
      if ($dbpassword!=$password){//当对应密码不对时跳回login.html界面 
  ?> 
  <script type="text/javascript"> 
    alert("密码错误"); 
    window.location.href="login.html"; 
  </script> 
  <?php 
      } 
      else { 
        $_SESSION["username"]=$username; 
        $_SESSION["code"]=mt_rand(0, 100000);//给session附一个随机值，防止用户直接通过调用界面访问welcome.php 
  ?> 
  <script type="text/javascript"> 
    window.location.href="go.html"; 
  </script> 
  <?php 
      } 
    } 
  //mysql_close($conn);//关闭数据库连接，如不关闭，下次连接时会出错 (针对于mysql_connect（）;)
  ?> 
</body> 
</html>
