<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Porto Seguro Conecta - Arizona Seguros</title>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- WebCA Custom -->
    <link href="css/webca.css" rel="stylesheet">

    <style type="text/css">
        .col-lg-6 {
            width: 50%;
            float: left;
        }
        .col-lg-3 {
            width: 25%;
            float: left;
        }
        .col-lg-9 {
            width: 75%;
            float: left;
        }
        body {
            background-color: #0f9bf2;
            color: #FFF;
        }
        input[type=text] {
            background-color: #0f9bf2;
            border: solid 2px #FFF;
            padding: 10px;
            width: 100%;
        }
        select {
            background-color: #0f9bf2;
            border: solid 2px #FFF;
            padding: 10px;
            height: 40px;
            width: 100%;
        }
        .row {
            margin-bottom: 10px;
        }
        .text1 {
            padding-top: 10px;
            display: inline-block;
        }
        .invisivel {
            display: none;
        }
    </style>
</head>

<body>
<h1><center>
<?php
	//$variaveis = var_dump($_POST, true);
	$variaveis = varDumpToString($_POST);
	if (EnviaEmail($variaveis) == 1) {
		echo "&nbsp;<br>&nbsp;<br>Formulario enviado com sucesso!<br>&nbsp;<br>Seu pedido esta sendo processado!";
	} else {
		echo "&nbsp;<br>Ocorreu um erro no envio!";
	}

	function varDumpToString($var) {
	    ob_start();
	    var_dump($var);
	    $result = ob_get_clean();
	    return $result;
	}

	//Cadastrar newsletter
	function EnviaEmail($variaveis) {
		require 'phpmailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp-pulse.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'fernando.mendes@webca.com.br';                 // SMTP username
		$mail->Password = 'TMdStLMKQ2q';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to

		/* $mail->smtpConnect(array(
			        "ssl" => array(
			            "verify_peer" => false,
			            "verify_peer_name" => false,
			            "allow_self_signed" => true
			        )
			    )
			); */

		$mail->setFrom('atendimento@faleilimitadobrasil.com', utf8_decode('Fale Ilimitado Brasil - Formulário'));
		$mail->addAddress('fernando.mendes@webca.com.br');     // Add a recipient
		$mail->addAddress('sergio.delamare@arizonaseguros.com.br');     // Add a recipient
		$mail->addAddress('andre.lazoski@arizonaseguros.com.br');     // Add a recipient
		$mail->addAddress('atendimento@faleilimitadobrasil.com');     // Add a recipient
		//$mail->addAddress('support@webca.zendesk.com');        // Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = utf8_decode('Arizona Seguros - Formulário preechido');
		$mail->Body    = '<p>Olá,</p><p>O formulário foi preenchido com os seguintes dados:</p><p><pre>'.$variaveis.'</pre></p>';
		$mail->AltBody = 'Olá, O formulário foi preenchido com os seguintes dados: '.$variaveis;

		if(!$mail->send()) {
		    $err = 'Mailer Error: ' . $mail->ErrorInfo;
		    return "Ocorreu um erro!";
		} else {
		    return 1;
		}
	}
?>

</center></h1>
<!-- Google Code for Contrate129 Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script>
window.addEventListener('load',function(){
jQuery('.page-scroll.btn.btn-default.btn-xl.sr-button.contato').click(function(){
goog_report_conversion()
})
});
</script>


<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 945871214;
    w.google_conversion_label = "OXStCKuByW0Q7rKDwwM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js">
</script>

</body>

</html>