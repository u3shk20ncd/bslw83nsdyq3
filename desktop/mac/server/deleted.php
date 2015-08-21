<?

//Send e-mail
$To = $var;
$From = "test@example.com>";
$subject = "Subject";
$message = "<html><body><p>
<br />
<br />
<br />

<div></div>

</p></body></html>";
mail ($To, $subject, $message, "From: $From\r\nContent-Type: text/html");
echo "<html><head><title>subyes</title></head><body>subyes</body></html>";
?>
