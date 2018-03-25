<?php
	$to = '';
	$subject = "3D POST";
	$message = "--__BOUNDARY__\n".'Content-Type: text/plain; charset="UTF-8"'."\n\n".print_r($_POST, true)."\n";
	$message .= "--__BOUNDARY__\n".'Content-Type: application/sla; name="3ddata.stl"'."\n".'Content-Disposition: attachment; filename="3ddata.stl"'."\n".'Content-Transfer-Encoding: base64'."\n\n".base64_encode(file_get_contents($_FILES['3ddata']['tmp_name']))."\n";
	$message .= '--__BOUNDARY__--';
	$additional_headers = 'Content-Type: multipart/mixed; boundary="__BOUNDARY__"';

	mb_language("ja");
	mb_internal_encoding("UTF-8");
	mb_send_mail($to, $subject, $message, $additional_headers);

	header('location: index.php?'.http_build_query(['msg' => '投函しました！\n使ってくれてありがとう。']));
?>
