<?php
$host="127.0.0.1";
$userName="test";
$password="Abc123456.";
if($connID=mysqli_connect($host,$userName,$password)) {
    echo "<script type='text/javascript'>alert('数据库连接成功');</script>\n";
}else{
    echo "<script type='text/javascript'>alert('数据库连接失败');</script>\n";
}
mysqli_query($connID,"set names utf8");
