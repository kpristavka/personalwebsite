<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $datetime = date("Y-m-d H:i:s");
    $filesize = filesize("formdata.txt");
    $filename = "formdata.txt";
    if ($filesize > 1000000){
        $filename = "formdata_" . date("Ymd_His") . ".txt";
    }
    $fp = fopen($filename, "a");
    $savestring = $datetime . "," . $name . "," . $email . "," . $subject . "," . $message . "\r\n";

    $msg = "kpristavka.com has the following message:\n" . $savestring;
    mail("kpristavka@gmail.com","email from kpristavka.com php sctipt",$msg);

    fwrite($fp, $savestring);
    fclose($fp);

    header("Location: " . $_SERVER['REQUEST_URI']);//redirects to the same page
}
exit();

?>