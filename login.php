<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="select.php">ログイン</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="login_act.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>メールアドレス：<input type="text" name="email"></label><br>
     <label>パスワード：<input type="text" name="password"></label><br>
     <input type="submit" value="ログイン">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
</body>
</html>