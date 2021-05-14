<?
    require_once('acesso.php');
    require "../PHPMailer/Exception.php";
    require "../PHPMailer/OAuth.php";
    require "../PHPMailer/PHPMailer.php";
    require "../PHPMailer/POP3.php";
    require "../PHPMailer/SMTP.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    class Mensagem{
        private $para = null;
        private $assunto = null;
        private $mensagem = null;

        public function __get($atrib){
            return $this->$atrib;
        }
        public function __set($atrib, $valor){
            $this->$atrib = $valor;
        }
        public function mensagemValida(){
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
                return false;
            }
            return true;
        }
    }
    $mensagem = new Mensagem();
    $mensagem->__set("para",$_POST['email']);

    if(!$mensagem->mensagemValida()){
        header('location:../site/comprar.php?campo_vazio=true');
        die();
    }else{
        
//Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'testweb6663@gmail.com';                     //SMTP username
        $mail->Password   = 'Lennon1940';                               //SMTP password
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('testweb6663@gmail.com');
        $mail->addAddress($mensagem->__get('para'));     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Compra Efetuada!!';
        $mail->Body    = '<h1> Você comprou o jogo ' . $produto[$id]['nome']."</h1> <br> <p>Valor pago R$".$produto[$id]['preco']."</p>";

        $mail->send();
        header('Location:../index.php?status=true');
    } catch (Exception $e) {
        header('Location:../index.php');
    }
        }
?>
