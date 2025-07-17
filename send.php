<?php
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        $name = htmlspecialchars(trim($_POST["name"]));
        $email = htmlspecialchars(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars(trim($_POST["message"]));

        $to = "kropisz.jakub15@gmail.com";
        $subject = " Nowa wiadomość z portfolio od $name";
        $body = "Imię: $name\nEmail: $email\nWiadomość:\n$message";

        $headers = "From: $email";

        if(mail($to, $subject, $body, $headers))
        {
            echo "<p>Wiadomość wysłana pomyślnie!</p>";
        }
        else
        {
            echo "<p>Coś poszło nie tak. Spróbuj ponownie później.</p>";
        }
    }
    else
    {
        echo "<p>Niepoprawna metoda żądania.</p>";
    }
?>