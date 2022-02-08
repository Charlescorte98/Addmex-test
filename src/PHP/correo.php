<?php   

    $destino = "doctor.perks98@gmail.com";

if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && ($_POST['email']) && ($_POST['celular']) && ($_POST['msg'])) {
        $name = ($_POST['name']);
        $email = ($_POST['email']);
        $celular = ($_POST['celular']);
        $msg = ($_POST['msg']);

        $header = "From: noreply@adddmex.com" . "\r\n";
        $header .= "Reply-To: noreply@adddmex.com" . "\r\n";
        $header .= "X-Mailer: PHP/". phpversion();

        $mail = mail($destino,$email,$celular,$msg,$header);
        if ($mail) {
            echo "<h4>!Mail Enviado Exitosamente¡</h4>";
            header('Location: index.html');
        }
        header('Location: ../../index.html');
    }
}

?>
