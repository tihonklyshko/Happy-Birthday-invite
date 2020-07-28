<!DOCTYPE html>
<html>
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Приглашение</title>
   <style>
      .header {
         height: 100vh;
         background-color: #eee;
         background-image: url(https://pictures.s3.yandex.net/frontend-developer/free-course/cover.jpg);
         background-size: cover;
         background-position: center;
         display: flex;
         align-items: center;
         justify-content: space-around;
      }

      .main {
         background-color: white;
         height: 60vh;
         width: 70vw;
         display: flex;
         text-align: center;
         align-items: center;
         justify-content:  space-around;
      }
   </style>
 </head>
 <body> 
   <header class="header">
        <div class="main">
            <div>
                <h1>Привет, 
                    <?php
                        $name = htmlspecialchars($_GET["name"]);
                        echo $name . "!";
                        // echo ($_GET["url"]);
                    ?>
                </h1>
                <h2>Приглашаю тебя на мой день рождения.</h2>
                <h2>22 июля 16:00</h2>
                <h2>Фиолентовское шоссе, 1/5 "Мир гонок"</h2>
                <h2>+7978 060-46-45</h2>
            </div>
        </div>
    </header>
    
 </body>
</html>