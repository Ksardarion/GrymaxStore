<?php
  require_once '../sys/init.php';
?>
<!DOCTYPE html>
<!-- saved from url=(0043)https://semantic-ui.com/examples/login.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login Example - Semantic</title>
  <link rel="stylesheet" type="text/css" href="./authentication_files/reset.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/site.css">

  <link rel="stylesheet" type="text/css" href="./authentication_files/container.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/grid.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/header.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/image.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/menu.css">

  <link rel="stylesheet" type="text/css" href="./authentication_files/divider.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/segment.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/form.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/input.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/button.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/list.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/message.css">
  <link rel="stylesheet" type="text/css" href="./authentication_files/icon.css">

  <script src="./authentication_files/jquery.min.js.завантаження"></script>
  <script src="./authentication_files/form.js.завантаження"></script>
  <script src="./authentication_files/transition.js.завантаження"></script>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>
<?php if (userAuth::isAuthorized()): ?>
<h1>Your are already registered!</h1>
<?php else: ?>
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="/store/images/Logo/logo.png" class="image">
      <div class="content">
        Створити обліковий запис
      </div>
    </h2>
    <form method="post" class=" ajax ui large form" action="authentication_files/authAjax.php">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="nickname" name="username" placeholder="nickname">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password1" placeholder="Password">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password2" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">Зареєструватися</div>
      </div>

      <div class="main-error ui error message"></div>
        <input type="hidden" name="act" value="register">
    </form>

    <div class="ui message">
      <a href="/store/authentication/authentication.php">Увійти</a> в наявний обліковий запис
    </div>
  </div>
</div>
<?php endif;?>

<script src="authentication_files/ajaxAuthForm.js"></script>

</body></html>