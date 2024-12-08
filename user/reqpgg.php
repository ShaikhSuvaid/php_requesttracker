<?php
    session_start();
    $conn=mysqli_connect("localhost","root","","purchasetracker");
if (isset($_POST['insert'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $dept = $_POST['dept'];
    $designation = $_POST['designation'];
    $assassa = $_POST['assassa'];
    $department = $_POST['department'];
    $itmcgr = $_POST['itmcgr'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $dadd = $_POST['dadd'];
    $state = $_POST['state'];
    $region = $_POST['region'];
    $remail = $_POST['remail'];
    $ccemail = $_POST['ccemail'];
    $details = $_POST['details'];
    $quote = $_POST['quote'];
    $file_nameo = $_FILES['fileo']['name'];
    $file_tmp = $_FILES['fileo']['tmp_name'];
    move_uploaded_file($file_tmp,"upload-img/". $file_nameo);
    $vnameone = $_POST['vnameone'];
    $vphoneone = $_POST['vphoneone'];
    $oqa = $_POST['oqa'];
    $file_namet = $_FILES['filetwo']['name'];
    $file_tmp = $_FILES['filetwo']['tmp_name'];
    move_uploaded_file($file_tmp,"upload-img/". $file_namet);
    $vnametwo = $_POST['vnametwo'];
    $vphonetwo = $_POST['vphonetwo'];
    $tqa = $_POST['tqa'];
    $file_nameth = $_FILES['fileth']['name'];
    $file_tmp = $_FILES['fileth']['tmp_name'];
    move_uploaded_file($file_tmp,"upload-img/". $file_nameth);
    $vnamethree = $_POST['vnamethree'];
    $vphonethree = $_POST['vphonethree'];
    $thqa = $_POST['thqa'];
    $file_name = $_FILES['fileman']['name'];
    $file_tmp = $_FILES['fileman']['tmp_name'];
    move_uploaded_file($file_tmp,"upload-img/". $file_name);


    $id = "SELECT * FROM `requests` ORDER BY sr DESC LIMIT 1";
    $chr = mysqli_query($conn, $id);
    if(mysqli_num_rows($chr)>0){
        if($r = mysqli_fetch_assoc($chr)){
            $uid = $r['reqid'];
            $gn = str_replace("PR", "", $uid);
            $ii = $gn + 1;
            $gs = str_pad($ii, 7, 0, STR_PAD_LEFT);
            $i = ("PR".$gs);

            $qry = "INSERT INTO `requests` (`reqid`,`name`,`email`,`contact`,`dept`,`designation`,`assassa`,`department`,`itmcgr`,`area`,`city`,`dadd`,`state`,`region`,`remail`,`ccemail`,`details`,`quote`,`fileo`,`vnameone`,`vphoneone`,`oqa`,`filet`,`vnametwo`,`vphonetwo`,`tqa`,`fileth`,`vnamethree`,`vphonethree`,`thqa`,`fileman`) VALUES ('$i','$name','$email','$contact','$dept','$designation','$assassa','$department','$itmcgr','$area','$city','$dadd','$state','$region','$remail','$ccemail','$details','$quote','$file_name','$vnameone','$vphoneone','$oqa','$file_name','$vnametwo','$vphonetwo','$tqa','$file_name','$vnamethree','$vphonethree','$thqa','$file_name')";
            $qry_run = mysqli_query($conn, $qry);
            if ($qry_run) {
                echo "Requestor Name : ".$name . '<br>' . '<br>' . "Request-ID : " .$i . '<br>' . '<br>' . "جزاک اللہ خیر". '<br>' . '<br>' . '<br>' ."Aapki Request Create Hogayi Hai, Aap ke Nigran ke approval ke baad is par kaam shuru kiya jaega. انشاء اللہ" . '<br>' . '<br>' . " Aap ki request agar Rs 10,000/- se kam ho, toh isme purchase majlis ke taraf se approval ki hajat nahi hai. Baraye karam aap maliyat se direct rabita kijiye." .'<br>' . '<br>' . "Baraye karam note karlein: Agar 2 din mein approval nahi mila toh hum log iss request ko reject / cancel kar denge.". '<br>' . '<br>' . "Aap iss request ki status humare iss portal aap ko login karne ke baad Dashboard per nazar ayegi". '<br>' . '<br>' . "REGARDS,". '<br>' . '<br>' . "PURCHASE DEPARTMENT,". '<br>' . "DAWAT E ISLAMI HIND". '<br>' . '<br>' . "SUNDAY/ORGANISATION LISTED HOLIDAYS CLOSED". '<br>' . '<br>' . '<br>' . '<a href="dashboard.php">Back To Home Page</a>';
            }
            else{
                echo "Aapki Request Submit Nahi Hui Hai !!". '<br>' . '<br>' . '<a href="dashboard.php">Back To Home Page</a>';
            }
        }
    }else{

        $i = "PR0000001";
        $qry = "INSERT INTO `requests` (`reqid`,`name`,`email`,`contact`,`dept`,`designation`,`assassa`,`department`,`itmcgr`,`area`,`city`,`dadd`,`state`,`region`,`remail`,`ccemail`,`details`,`quote`,`fileo`,`vnameone`,`vphoneone`,`oqa`,`filet`,`vnametwo`,`vphonetwo`,`tqa`,`fileth`,`vnamethree`,`vphonethree`,`thqa`,`fileman`) VALUES ('$i','$name','$email','$contact','$dept','$designation','$assassa','$department','$itmcgr','$area','$city','$dadd','$state','$region','$remail','$ccemail','$details','$quote','$file_name','$vnameone','$vphoneone','$oqa','$file_name','$vnametwo','$vphonetwo','$tqa','$file_name','$vnamethree','$vphonethree','$thqa','$file_name')";
        $qry_run = mysqli_query($conn, $qry);
            if ($qry_run) {
                echo "Requestor Name : ".$name . '<br>' . '<br>' . "Request-ID : " .$i . '<br>' . '<br>' . "جزاک اللہ خیر". '<br>' . '<br>' . '<br>' ."Aapki Request Create Hogayi Hai, Aap ke Nigran ke approval ke baad is par kaam shuru kiya jaega. انشاء اللہ" . '<br>' . '<br>' . " Aap ki request agar Rs 10,000/- se kam ho, toh isme purchase majlis ke taraf se approval ki hajat nahi hai. Baraye karam aap maliyat se direct rabita kijiye." .'<br>' . '<br>' . "Baraye karam note karlein: Agar 2 din mein approval nahi mila toh hum log iss request ko reject / cancel kar denge.". '<br>' . '<br>' . "Aap iss request ki status humare iss portal aap ko login karne ke baad Dashboard per nazar ayegi". '<br>' . '<br>' . "REGARDS,". '<br>' . '<br>' . "PURCHASE DEPARTMENT,". '<br>' . "DAWAT E ISLAMI HIND". '<br>' . '<br>' . "SUNDAY/ORGANISATION LISTED HOLIDAYS CLOSED". '<br>' . '<br>' . '<br>' . '<a href="dashboard.php">Back To Home Page</a>';
            }
            else{
                echo "Aapki Request Submit Nahi Hui Hai !!". '<br>' . '<br>' . '<a href="dashboard.php">Back To Home Page</a>';
            }
    }
    $qt="UPDATE requests SET lquote = LEAST(oqa,tqa,thqa)";
    $resul=mysqli_query($conn,$qt);
}
?>
<?php
if($qry){
$to=$_POST['remail'];
$subject="New Request : $i";
$body="السلام عليكم ورحمة الله وبركاته\n\nAapke Shobe se $name bhai ($designation) ne request ki hai, jis ki details zail mei maujood hai.\n\nRequest-ID:$i\nRequest Category:$itmcgr\nRequest Short Description:$details\nQuotations Attached:$quote\n\n\nBaraye karam aap is request se Mutafique / sahamat hain toh isko approve kar dijiye, aur agar mutafique / sahamat nahi toh mail Not approved likhar kar reply karein\n\n\nNote:\n1) Apke approval ke baad hi is request par kaam hoga.\n2) Agar do din mein approval nahi aata hai to hum ye request cancel/reject kar denge.\n3) Mail/WhatsApp per message, call se behtar hai, isme asaani hoti hai.Agar sakth hajat ho to hi phone per rabta karein.\n\n\n\nPURCHASE DEPARTMENT\nDAWAT E ISLAMI HIND\n\nSUNDAY & ORGANIZATION LISTED HOLIDAYS CLOSED";
$cc=$_POST['ccemail'];
$bcc="purchase.dih@gmail.com";

$boundary=md5(time());

$headers='From: Shaikh Suvaid <purchase.khadim3@gmail.com>' . "\r\n";
$headers='Cc: $cc' . "\r\n";
$headers='Bcc: $bcc' . "\r\n";
$headers='MIME-Version: 1.0' . "\r\n";
$headers="Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

foreach($_FILES['fileo']['tmp_name'] as $key => $tmp_name) {
    $attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileo']['tmp_name'][$key])));
    $filename = $_FILES['fileo']['name'][$key];
    $filetype = $_FILES['fileo']['type'][$key];
    $filesize = $_FILES['fileo']['size'][$key];
    $filedata = "--$boundary\r\n";
    $filedata .= "Content-Type: $filetype; name=\"$filename\"\r\n";
    $filedata .= "Content-Disposition: attachment; filename=\"$filename\"\r\n";
    $filedata .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $filedata .= "$attachment\r\n";
    $filedata .= "--$boundary--\r\n";
    $message .= $filedata;
}
$message .= "--$boundary\r\n";
$message .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
$message .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$message .= "$body\r\n";


if (mail($to, $subject, $message, $headers)) {
    echo "Email successfully sent to $to...";
} else {
    echo "Email sending failed...";
}
}
?>