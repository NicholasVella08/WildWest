<?php



//require_once __DIR__.'/Bootstrap.php';
$subject = "Contact Us";
$to = "thewildwest533@gmail.com";
$name = $email =  $topic = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $topic = test_input($_POST["subject"]);
    $message = test_input($_POST["message"]); 
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $topic."\r\n Message =" . $message;
$headers = "From: ". $email . "\r\n" . "CC: ". $email;

mail($to,$subject,$txt,$headers);

header('Location: index.html');
// if($email!=NULL){
//     
//     header("Location: index.php");
//     exit();
// }

//echo $twig->render('book.html');
?>