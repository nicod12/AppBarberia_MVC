<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token) {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {
        //Crear el objeto de mail
       $mail = new PHPMailer();
       $mail->isSMTP(); 
       $mail->Host = 'smtp.mailtrap.io';
       $mail->SMTPAuth = true;
       $mail->Port = 2525;
       $mail->Username = 'b66c8002e80e98';
       $mail->Password = 'fa810c45838a3d';
       
       $mail->setFrom('admin@bienesraicess.com');
       $mail->addAddress('admin@bienesraicess.com', 'AppSalon.com');
       $mail->Subject = 'Confirma tu cuenta';

       // Set HTML
       $mail->isHTML(TRUE);
       $mail->CharSet = 'UTF-8'; 

       $contenido = "<html>";
       $contenido .= "<p><strong>Hola ". $this->email . "</strong> Has creado tu cuenta en App
       Salon, Confirma tu cuenta presionando en el siguiente enlace</p>";
       $contenido .= "<p>Presiona aqui: <a href='http://localhost:3000/confirmar-cuenta?token=" 
       . $this->token . "'>Confirmar Cuenta</a> </p>";
       $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
       $contenido .= "</html>";
       $mail->Body = $contenido;

       //Enviar el mail
       $mail->send();
    }

    public function enviarInstrucciones() {
         //Crear el objeto de mail
        $mail = new PHPMailer();
        $mail->isSMTP(); 
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'b66c8002e80e98';
        $mail->Password = 'fa810c45838a3d';
        
        $mail->setFrom('admin@bienesraicess.com');
        $mail->addAddress('admin@bienesraicess.com', 'AppSalon.com');
        $mail->Subject = 'Restablece tu Contraseña';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8'; 

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola ". $this->nombre . "</strong> Has solicitado reestablecer tu contraseña
        , sigue el siguiente enlace para hacerlo</p>";
        $contenido .= "<p>Presiona aqui: <a href='http://localhost:3000/recuperar?token=" 
        . $this->token . "'>Reestablecer Contraseña</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        //Enviar el mail
        $mail->send();
    }
}