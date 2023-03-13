<?php



//require_once __DIR__.'/Bootstrap.php';
$subject = "Booking";
$to = "thewildwest533@gmail.com";
$name = $email = $phone = $date = $time = $people = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $date = test_input($_POST["date"]);
    $time = test_input($_POST["time"]); 
    $people = test_input($_POST["people"]);
    $message = test_input($_POST["message"]); 
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone =" . $phone."\r\n Date =" . $date."\r\n Time =" . $time."\r\n People =" . $people.
 "\r\n Message =" . $message;
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