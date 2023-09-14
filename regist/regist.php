<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/min-style.css">
    <link  rel="stylesheet" href="../css/loader.css">
    <link rel="shortcut icon" href="../img/logo-removebg-preview.png" type="image/x-icon">
   
 

    
    
    <title>Вход</title>
</head>
<body>
  <?php
    require"db.php";
    $nadpis = '';
    $nadpiso = '';
    $data = $_POST;
    if( isset($data['do_signup']))
    {
      //здесь регистрируем
      $errors = array();//массив для ошибок
      if( trim($data['email']) == '' )
      {
        $errors[] = 'Введите E-mail!';
      }
      
      if( trim($data['password']) == '' )
      {
        $errors[] = 'Введите Пароль!';
      }
      
      if( trim($data['password_2']) != $data['password'] )
      {
        $errors[] = 'Введите Повторный Пароль!';
      }
      
      if( empty($errors))
      {
        // всё хорошо можно регестриравать )
        $user = R::dispense('users');
        $user->email = $data['email'];
        $user->password = password_hash($data['password'],PASSWORD_DEFAULT);
        $user->join_date = time();
        #R::store($user);
        $nadpis = '<div style="color: #1be600;">Вы успешно зарегались</div>';
      } else {
        $nadpiso = '<div style="color: red;">'.array_shift($errors).'</div>';
        
      }
      
    }
    $data = $_POST;
    if( isset($data['do_login']))
    {
      
    }
      //здесь регистрируем
    
  ?>
  <div  class="preloader" id="preloader">
      <div id="loader"></div> <!-- анимация  -->
   </div>
  
   <nav class="menu">
      <ul class="topmenu">
         <li><a href="#">Личный кабинет</a></li>
         <li><a href="../index.html"><svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="30.000000pt" height="30.000000pt" viewBox="0 0 920.000000 920.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,920.000000) scale(0.100000,-0.100000)"
fill="#dfe0e2" stroke="none">
<path d="M2430 6949 c-75 -30 -150 -107 -179 -184 -30 -78 -26 -187 8 -255 16
-32 288 -311 954 -977 l932 -933 -932 -933 c-666 -666 -938 -945 -954 -977
-34 -68 -38 -177 -8 -255 30 -80 104 -154 184 -184 78 -30 187 -26 255 8 32
16 311 288 978 954 l932 932 933 -932 c666 -666 945 -938 977 -954 68 -34 177
-38 255 -8 80 30 154 104 184 184 30 78 26 187 -8 255 -16 32 -288 311 -954
978 l-932 932 932 933 c666 666 938 945 954 977 34 68 38 177 8 255 -30 80
-104 154 -184 184 -78 30 -187 26 -255 -8 -32 -16 -311 -288 -978 -954 l-932
-932 -933 932 c-666 665 -945 938 -977 954 -66 33 -186 37 -260 8z"/>
</g>
</svg>
</a></li>
         
      </ul>
   </nav>
   
        <form class="form__user"  id="register" action="" method="POST">
            <div class="form__napr">
                <label class="avt" id="log">Авторизация </label><span><pre>|</pre></span><label class="zar" id="reg"> Регистрация</label>
            </div><br>
            <div class="form_napr">
               <input class="pass" type="email" name="email" placeholder="E-mail" value="<?php echo @$data['email']?>">
               <input class="pass" type="password" name="password" placeholder="Пароль" value="<?php echo @$data['password']?>">
               <input class="pass" type="password" name="password_2" placeholder="Повтор паролья" value="<?php echo @$data['password_2']?>">
            </div>
            <div class="form_napr1">
              <?php echo $nadpis; ?>
              <?php echo $nadpiso; ?>
               <button class="button__login" id="but_log" name="do_signup">Зарегистрироваться</button>
            </div>
        </form>




        <form class="form__user" id="sing" action="" method="POST">
            <div class="form__napr">
                <label class="avt" id="log">Авторизация </label><span><pre>|</pre></span><label class="zar" id="reg">Регистрация</label>
            </div><br>
            <div class="form_napr">
               <input class="pass" type="email" name="email" placeholder="E-mail" value="<?php echo @$data['email']?>">
               <input class="pass" type="password" name="password" placeholder="Пароль" value="<?php echo @$data['password']?>">
            </div>
            <div class="form_napr1">
              
              
               <button class="but__login" id="but_vot" name="do_login">Войти</button>
            </div>
        </form>
   
    <script src="js/script.js"></script>
    <script src="../js/loader.js"></script>
</body>
</html>