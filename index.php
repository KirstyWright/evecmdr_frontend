<?php
error_reporting(E_ALL);
if (!isset($_GET['path']) || empty($_GET['path']))
{
    header('Location: /home');
    die;
}
if (!file_exists(__DIR__."/includes/".$_GET['path'].".inc.php")) {
    http_response_code(404);
    $_GET['path'] = "404";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Kirsty Wright - web developer. My home website &amp; portfolio.">
    <meta name="keywords" content="Kirsty Wright,php,developer">
    <meta name="author" content="Kirsty Wright">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KW - <?=$_GET['path']?></title>
    <?php if ($_GET['path'] == 'cv'):?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php else:?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <?php endif;?>
    <link rel="stylesheet" href="/main.css?r=3.5">
    <script src="/script/main.js?r=1"></script>
</head>
<?php
if ($_GET['path'] == 'cv') {
    ?>
    <body style="padding-top:10px;">
    <?php
    include(__DIR__."/includes/cv.inc.php");
} else {
?>
<body style="padding-top:4rem;">
    <div class="container">
        <?php if ($_GET['path'] !== 'home'):?>
            <a id="header_left" class='normal-link' href='/home'>&lt;&lt; Back home</a>
        <?php endif;?>
        <?php include(__DIR__."/includes/".$_GET['path']).".inc.php";?>
    </div>
    <?php } ?>
</body>
</html>
