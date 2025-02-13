<?php 
$longg=$_GET['long'];
$latt=$_GET['lat'];
//echo $longg;
$pesan='Lokasi dari user adalah Longtitude : '.$longg.' dan latitude : '.$latt;
//echo $pesan;
$notujuan="6282186427595";
$userkey = 'gnb6d0';
    $passkey = '18831kyv0o';
    $url = 'https://gsm.zenziva.net/api/sendWA/';
    $curlHandle = curl_init();
    curl_setopt($curlHandle, CURLOPT_URL, $url);
    curl_setopt($curlHandle, CURLOPT_HEADER, 0);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
    curl_setopt($curlHandle, CURLOPT_POST, 1);
    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
        'userkey' => $userkey,
        'passkey' => $passkey,
        'nohp' => $notujuan,
        'pesan' => $pesan
    ));
    $results = json_decode(curl_exec($curlHandle), true);
    curl_close($curlHandle);
    echo "<script>alert('Notifikasi berhasil dikirim!');window.location='http://sinjay.id-apps.my.id/akses.php'</script>";
 ?>
