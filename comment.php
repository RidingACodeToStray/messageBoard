<?php
include_once("connect.php");
//trim,返回字符串 str  去除首尾空白字符后的结果。如果不指定第二个参数,则去除普通控制，制表符，换行符，回车符，空字节符，垂直制表符
//htmlspecialchars() 函数把预定义的字符转换为 HTML 实体
$user = htmlspecialchars(trim($_POST['user']));
$txt = htmlspecialchars(trim($_POST['txt']));
if(empty($user)){
    $data = array("code"=>355,"message"=>"昵称不能为空！");
    echo json_encode($data);
    exit;
}
if(empty($txt)){
    $data = array("code"=>356,"message"=>"内容不能为空");
    echo json_encode($data);
    exit;
}
$time = date("Y-m-d H:i:s");
$query=mysqli_query($link,"insert into comments(user,comment,addtime)values('$user','$txt','$time')");
if($query)  {
    $data = array("code" => 1, "message"=>"success","user" => $user , "txt" => $txt);
    echo json_encode($data);
}
