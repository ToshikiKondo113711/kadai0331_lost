<?php
//1.GETでidを取得
$user_id = $_GET["user_id"];

//2.DB接続
try {
  $pdo = new PDO('mysql:dbname=kadai0331_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
$sql = 'DELETE FROM register_func WHERE user_id = :user_id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT); 
$status = $stmt->execute();


if($status==false){
 
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);

}else{
  //select.phpへリダイレクト
  header("Location: select.php");
  exit;

}



?>