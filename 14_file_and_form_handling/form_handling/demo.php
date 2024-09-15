<input type="hidden" 
       name="token"
       value="b3f44c1eb885409c222fdb78c125f5e7050ce4f3d15e8b15ffe51678dd3a33d3a18dd3">

<input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">

<?php

$_SESSION['token'] = md5(uniqid(mt_rand(), true));

<?php

$token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);

if (!$token || $token !== $_SESSION['token']) {
    // return 405 http status code
    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
    exit;
} else {
    // process the form
}