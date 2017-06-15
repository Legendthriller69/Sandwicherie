<?php
	class Email{
		var $mail;
		var $conn;
		public function __construct(){
			require('phpmailer/PHPMailerAutoload.php');
			$this->mail=new PHPMailer;
			$mail = $this->mail;
			
			/*$mail->isSMTP(); 
			$mail->SMTPSecure = 'ssl';                                 // Set mailer to use SMTP
            $mail->Host = 'elara.kreativmedia.ch';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true; // Authentication must be disabled
            $mail->Username = 'maxime.betrisey@cobwebsite.ch';
            $mail->Password = 'maxime397809'; // Leave this blank
            $mail->Port = 465;    
			$mail->setFrom('maxime.betrisey@cobwebsite.ch', 'Maxime Bétrisey');
			$mail->isHTML(true);*/

			$mail->isSMTP(); 
			$mail->SMTPSecure = 'ssl';                                
            $mail->Host = 'smtp.gmail.com'; 
            $mail->SMTPAuth = true; 
            $mail->Username = 'pedroferreira.1870@gmail.com';
            $mail->Password = 'raw_1870';
            $mail->Port = 465;    
			$mail->setFrom('pedroferreira.1870@gmail.com', 'Fresh Sandwich');
			$mail->isHTML(true);

			
		}
		public function mailling($dest,$msg){
			$mail = $this->mail;
			$mail->addAddress($dest);
			$mail->Subject = 'Here is the subject';
			$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			}	
		}

		public function formulaireContact($nom, $email, $content){
			$mail = $this->mail;
			$mail->addAddress('pedroferreira.1870@gmail.com');
			$mail->Subject = 'Formulaire de contact';
			$mail->CharSet = 'UTF-8'; 
			$mail->Body    = '
			<html>
				<head>
					<meta charset="utf-8">
				</head>
				<body>
					<p>Bonjour à toi membre de la team FreshSandwich,</p>
					<p>Dans cet email tu trouveras les informations que '.$nom. ' vous a envoyé par le formulaire de contact.</p>
					<h3>Contenu du message</h3>
					<p>'.$content.'</p>
					<p>Vous pouvez joindre cette personne grâce à son email : <a href="mailto:'.$email.'">'.$email.'</a></p>
					<p>Meilleures salutations.</p>
				</body>
			</html>
			';
			$mail->AltBody = 'Bonjour à toi membre de la team FreshSandwich,
			Dans cet email tu trouveras les informations que '.$nom.' vous a envoyé par le formulaire de contact.
			
			Contenu du message
			'.$content.'
			
			Vous pouvez joindre cette personne grâce à son email : '.$email.'

			Meilleures salutations.
			';
			
			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			}
			return 'email sent';
		}
		
		public function sendCV($nom, $prenom, $tel, $email, $adresse, $npa, $ville, $file = null){
			$mail = $this->mail;
			$mail->addAddress('pedroferreira.1870@gmail.com');
			$mail->Subject = 'Demande d\'emploi';
			$mail->CharSet = 'UTF-8';
			if($file != null)			
				$mail->addAttachment($file);			
			$mail->Body    = '
			<html>
				<head>
					<meta charset="utf-8">
				</head>
				<body>
					<p>Bonjour à toi membre de la team FreshSandwich,</p>
					<p>Vous avez reçu une nouvelle demande d\'emploi de la part de '.$prenom.' '.$nom.'. Annexé se trouve son CV.</p>
					<h3>Informations</h3>
					<p>Nom : '.$nom.'</p>
					<p>Prénom : '.$prenom.'</p>
					<p>Téléphone : '.$tel.'</p>
					<p>E-mail : '.$email.'</p>
					<p>Adresse : '.$adresse.'</p>
					<p>NPA : '.$npa.'</p>
					<p>Ville : '.$ville.'</p>
					<p>Tu peux joindre cette personne grâce à son email : <a href="mailto:'.$email.'">'.$email.'</a></p>
					<p>Meilleures salutations.</p>
				</body>
			</html>
			';
			$mail->AltBody = '';
			
			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			}
			return 'email sent';
		}
	}
?>