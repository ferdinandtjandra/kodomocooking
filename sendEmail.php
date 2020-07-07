<?php  

// $base_url = "https://" . $_SERVER["HTTP_HOST"];
$base_url = "http://" . $_SERVER["HTTP_HOST"] ."/kodomocooking";

 
//if user access except LP , redirect to top 
if (empty($_POST['from_lp'])) {
     header("Location: {$base_url}"); 
     exit;
}

//i save data to session for validation
session_start();  
$_SESSION = $_POST;


//i set requirement
$required = [
    'name',
    'tel',
    'address',
    'email',
    'note'
]; 

foreach ($required as $value) {

    if(empty($_POST[$value])) {
        header("Location: {$base_url}/?e=1#formease");
        exit;
    }
} 

//email validation
if (!empty($_POST['email'])) {
   if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) {
    //if ok , we dont care 
    } else {
        header("Location: {$base_url}/?e_email=1#formease"); 
        exit;
    } 
}

// validation ok , so session destory
session_destroy();



mb_language("Japanese");
mb_internal_encoding("UTF-8");
$to = 'f.yuya.yamamoto@gmail.com';
$subject = '料理教室にお問い合わせがありました。';
$subject = mb_convert_encoding($subject, "ISO-2022-JP", "UTF-8,EUC-JP,auto");
$message = "氏名（漢字）：
            {$_POST['name']}
            電話番号：
            {$_POST['tel']}
            メールアドレス：
            {$_POST['email']}
            住所：
            {$_POST['address']}
            お問い合わせ内容：
            {$_POST['note']}";

 

$message = mb_convert_encoding($message, "ISO-2022-JP", "UTF-8,EUC-JP,auto");

$headers = "From: " .mb_encode_mimeheader("ease") ."<f.yuya.yamamoto@gmail.com>";

$send_mail =  mail($to, $subject, $message, $headers);

if($send_mail) {
    // header("Location: {$base_url}/thanks.php");  
    header("Location: {$base_url}");  
    exit;
} else {
    header("Location: {$base_url}/?e=1#formease"); 
    exit;
}

?>