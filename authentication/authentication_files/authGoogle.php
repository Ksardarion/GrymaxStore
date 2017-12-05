<?php
require_once '../../sys/init.php';
if (isset($_GET['code'])) {
    $result = false;

    $params = array(
        'client_id'     => GOOGLE_CLIENT_ID,
        'client_secret' => GOOGLE_CLIENT_SECRET,
        'redirect_uri'  => REDIRECT_FROM_GOOGLE,
        'grant_type'    => 'authorization_code',
        'code'          => $_GET['code']
    );

    $url = 'https://accounts.google.com/o/oauth2/token';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, urldecode(http_build_query($params)));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($curl);
    curl_close($curl);
    $tokenInfo = json_decode($result, true);

    if (isset($tokenInfo['access_token'])) {
        $params['access_token'] = $tokenInfo['access_token'];

        $userInfo = json_decode(file_get_contents('https://www.googleapis.com/oauth2/v1/userinfo' . '?' . urldecode(http_build_query($params))), true);
        if (isset($userInfo['id'])) {
            $result = true;
        }
    }

    if ($result) {
        $sql = "SELECT * FROM `users` WHERE `googleId` = ? LIMIT 1";
        $getUser = DB::connect()->prepare($sql);
        $getUser->execute(Array($userInfo['id']));
        $currUser = $getUser->fetch();

        if($currUser){
            $currUser = new User($currUser['id']);
            $_SESSION['user_id'] = $currUser->id;
            if($_SESSION['user_id'] > 0){
                $_SESSION['msg'] = 'Автентифікація успішна';
            }
            header('Location: ../../index.php');
        } else {
            $fullName = explode(' ', $userInfo['name']);
            $sql = "INSERT INTO `users` (`created` ,`login`, `googleId`, `email`, `lastName`, `firstName`, `avatarPath`) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $newUser = DB::connect()->prepare($sql);
            $addingRes = $newUser->execute(Array(grymaxShop::today(), $userInfo['email'], $userInfo['id'], $userInfo['email'], $fullName[1], $fullName[0], $userInfo['picture']));

            ##If user successfully registered - we need to auth him##
            if ($addingRes == true){
                $sql = "SELECT * FROM `users` WHERE `googleId` = ? LIMIT 1";
                $getUser = DB::connect()->prepare($sql);
                $getUser->execute(Array($userInfo['id']));
                $currUser = $getUser->fetch(PDO::FETCH_ASSOC);
                ##Auth user after registration##
                $currUser = new User($currUser['id']);
                var_dump($currUser);
                $_SESSION['user_id'] = $currUser->id;
                if($_SESSION['user_id'] > 0){
                    $_SESSION['msg'] = 'Реєстрація за допомогою Google успішна';
                }
                header('Location: ../../index.php');
            }
        }
    }

}