<?php
    if($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        $name = htmlspecialchars(trim($_POST["name"]));
        $email = htmlspecialchars(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars(trim($_POST["message"]));

        $to = "mangomustrard@gmail.com";
        $subject = "Wiadomość z formularza StylowyFryz";
        $body = "Imię: $name\nEmail: $email\n\n$message";

        $headers = "From: $email";

        if(mail($to, $subject, $body, $headers))
        {
            echo "<p>Wiadomość wysłana pomyślnie!</p>";
        }
        else
        {
            echo "<p>Wysyłka się nie powiodła.</p>";
        }
    }
    else
    {
        echo "<p>Nieprawidłowe żądanie.</p>";
    }
?>
//nie działa bo to github
