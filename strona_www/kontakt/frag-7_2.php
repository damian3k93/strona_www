<div id="formularz">
<form>
        
    <label>Imie i nazwisko</label>
    <input name="name" placeholder="Imię i Nazwisko">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="adres e-mail">
            
    <label>Wiadomość</label>
    <textarea name="message" placeholder="Napisz tu wiadomość"></textarea>
            
    <input id="submit" name="submit" type="submit" value="Wyślij">
        
</form>
</div>

<?php
$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];

$odkogo = "";
$dokogo = "d.milewski93@gmail.com";


$tytul = "Formularz kontaktowy";

$wiadomosc = "";
$wiadomosc .= "Imie i nazwisko: " . $name . "\n";
$wiadomosc .= "Email: " . $email . "\n";
$wiadomosc .= "Wiadomość: " . $message . "\n";

$naglowek = "";
$naglowek .= "Od:" . $odkogo . " \n";
$naglowek .= "Content-Type:text/plain;charset=utf-8";

$sukces = mail($dokogo, $tytul, $wiadomosc, $naglowek);

if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=potwierdzenie.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>