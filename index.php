<!DOCTYPE html>
<html lang="ja">
 <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <?php
   mb_internal_encoding("utf-8");
   $pdo = new PDO("mysql:dbname=keijiban;host=localhost;","root","");
   
   
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
      <div class="title">
        <h1>プログラミングに役立つ掲示板</h1>
      </div>   
      <form class = "box" method ="post" action = "insert.php">
        <div class ="entry">
            <h3>入力フォーム</h3>
        </div>
        <div>   
            <label>ハンドルネーム</label>
            <br>
            <input type ="text" class = "text" size = "50" name ="handlename">
        </div>
        <div>
            <label>タイトル</label>
            <br>
            <input type ="text" class = "text" size = "50" name ="title">
        </div>
        <div>
            <label>コメント</label>
            <br>
            <textarea cols = "35" rows ="7" name ="comments"></textarea>
        </div>
        <div>
            <input type ="submit" class = "submit" value ="送信する">
        </div>
      </form>
    </div>


    <div class="right">
       <ul>  
         <div class = "title2"><h3>人気の記事</h3></div>
         <p>PHPのおすすめ本</p>
         <p>PHPmyadminの使い方</p>
         <p>今人気のエディタtop5</p>
         <p>HTMLの基礎</p>
       </ul>
       <ul>
         <div class = "title3"><h3>おすすめリンク</h3></div>
         <p>インターノウス株式会社</p>
         <p>XAMPPのダウンロード</p>
         <p>Eclipseのダウンロード</p>
         <p>Braketsのダウンロード</p>
       </ul>
       <ul>
         <div class = "title4"><h3>カテゴリ</h3></div>
         <p>HTML</p>
         <p>PHP</p>
         <p>MySQL</p>
         <p>JavaScript</p>
       </ul>
     </div>

     <?php
     $stmt = $pdo-> query("select * from keijiban");
     while($row = $stmt->fetch()){
        echo"<div class ='kiji'>";
          echo"<h3>".$row['title']."</h3>";
          echo"<div class ='contents'>";
            echo $row['comments'];
            echo"<div class ='handlename'>posted by".$row['handlename']."</div>";
           echo"</div>";
        echo"</div>";
     }
    ?>

   
     </div>
   </main>
   <footer>
     <div class="foot"> 
       <p>copyright©internous 4each blog the which provides A to Z about programing.</p>
     </div>
   </footer>
   </body>
</html>