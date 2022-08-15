<!DOCTYPE html>
<html lang="ja">
 <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="style.css">
     <h1></h1>
 </head>
 <body>
  <?php
 mb_internal_encoding("utf-8");
   $pdo = new PDO("mysql:dbname=keijiban;host=localhost;","root","");
   $pdo->exec("insert into keijiban(handelename,title,comments)value
   ('".POST[handlename]."','".POST[title]."','".POST[comments]."');");
   header("Location:index.php")
   ?>
 
   <header>
   <img src ="4eachblog_logo.jpg" class="logo">
   <ul class="menu">
   <li>トップ</li>
       <li>プロフィール</li>
       <li>4eachについて</li>
       <li>登録フォーム</li>
       <li>問い合わせ</li>
       <li>その他</li>
     </ul>
   </header>
 
 
   <main>
     <div class="left">
      <div class="lefttitle">
        <h1>プログラミングに役立つ掲示板</h1>
      </div>      
       <form method ="post" action = "insert.php">
        <div class ="entry">
            <h1>入力フォーム</h1>
        </div>
        <div>   
            <label>ハンドルネーム</label>
            <br>
            <input type ="text" class = "text" size = "35" name ="handlename">
        </div>
        <div>
            <label>タイトル</label>
            <br>
            <input type ="text" class = "text" size = "35" name ="title">
        </div>
        <div>
            <label>コメント</label>
            <br>
            <textarea cols = "35" rows ="7" name ="commments"></textarea>
        </div>
        <div>
            <input type ="submit" class = "submit" value ="送信する">
        </div>
    </form>
   
   </main>
  
   <footer>
     <div class="foot"> 
       <p>copyright©internous 4each blog the which provides A to Z about programing. </p>
     </div>
   </footer>
   </body>
</html>