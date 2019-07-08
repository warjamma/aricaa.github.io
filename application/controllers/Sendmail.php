<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('mail/PHPMailerAutoload.php');
class Sendmail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('sendmail_view');
	}
	public function do_send()
	{
		//Nhận về thông tin
		$ten=$this->input->post('ten');
		$nguoigui=$this->input->post('nguoigui');
		$noidung=$this->input->post('noidung');


		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp1.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'lgold141@gmail.com';                 // SMTP username
		
		$mail->Password = 'vbopqddiklnzkqqx';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom('quang@gmail.com', 'Quản trị web');
		$mail->addAddress($ten, 'Quang');     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		// $mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = $nguoigui;
		$mail->Body    = $noidung;
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'Thư đã được gửi';
		}
	}

}

/* End of file Sendmail.php */
/* Location: ./application/controllers/Sendmail.php */