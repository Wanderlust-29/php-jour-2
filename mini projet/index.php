<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $linkedin = isset($_POST['linkedin']) ? $_POST['linkedin'] : '';
    $github = isset($_POST['github']) ? $_POST['github'] : '';
    $bio = isset($_POST['bio']) ? $_POST['bio'] : '';
    $loisir1 = !empty($_POST['loisir1']) ? "<li>{$_POST['loisir1']}</li>" : '';
    $loisir2 = !empty($_POST['loisir2']) ? "<li>{$_POST['loisir2']}</li>" : '';
    $loisir3 = !empty($_POST['loisir3']) ? "<li>{$_POST['loisir3']}</li>" : '';
    $loisir4 = !empty($_POST['loisir4']) ? "<li>{$_POST['loisir4']}</li>" : '';
    $html = isset($_POST['html']) ? '<li>HTML</li>' : '';
    $css = isset($_POST['css']) ? '<li>CSS</li>' : '';
    $js = isset($_POST['js']) ? '<li>JavaScript</li>' : '';
    $php = isset($_POST['php']) ? '<li>PHP</li>' : '';
    $sql = isset($_POST['sql']) ? '<li>SQL</li>' : '';
    $sass = isset($_POST['sass']) ? '<li>Sass</li>' : '';
    $bootstrap = isset($_POST['bootstrap']) ? '<li>Bootstrap</li>' : '';
    $symphony = isset($_POST['symphony']) ? '<li>Symphony</li>' : '';
    $laravel = isset($_POST['laravel']) ? '<li>Laravel</li>' : '';
    $ps = isset($_POST['ps']) ? '<li>Photoshop</li>' : '';
    $ai = isset($_POST['ai']) ? '<li>Illustrator</li>' : '';
    $xd = isset($_POST['xd']) ? '<li>XD</li>' : '';
    $figma = isset($_POST['figma']) ? '<li>Figma</li>' : '';
    $fr = isset($_POST['fr']) ? '<li>Français</li>' : '';
    $ang = isset($_POST['ang']) ? '<li>Anglais</li>' : '';
    $ara = isset($_POST['ara']) ? '<li>Arabe</li>' : '';
    $bre = isset($_POST['bre']) ? '<li>Breton</li>' : '';
    
    if (isset($_POST['colors'])) {
        if ($_POST['colors'] === "blue") {
            $cvColor = '<header class="blue">';
        } elseif ($_POST['colors'] === "red") {
            $cvColor = '<header class="red">';
        } else {
            $cvColor = '<header class="grey">';
        }
    } else {
        $cvColor = '<header class="blue">';
    }

    include 'cv.phtml';
} else {
    include 'formulaire.phtml';
}
?>
