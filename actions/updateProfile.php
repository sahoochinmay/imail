<?php
include '../config/config.php';
if (!isLoggedin()) {
    header("Location:login.php");
    exit;
}

// $sender = $_SESSION["email"];
// $receiver = $_POST["to"];
// $sub = $_POST["sub"];
// $msg = $_POST["msg"];
// $attachment = null;
// $target = $_POST['target'];

if (isset($_POST['btnSave'])) {
    echo "Btn save clicked";
    
    // $sql = "Insert Into mail Values(NULL,'$sender','$receiver',now(),'$sub','sent',1,'$msg','$sender','$attachment')";
    // if (mysqli_query($conn, $sql)) {
    //     $sql = "Select id from UserDetails Where ID='$receiver'";
    //     $res = mysqli_query($conn, $sql);
    //     $n = mysqli_num_rows($res);
    //     if ($n == 0) {
    //         $sql = "Insert Into mail Values(NULL,'admin@imail.com','$sender',now(),'Mail Sent Fail','inbox',1,'Unable to Send Mail due to Invlid Receipent <b>$receiver</b>: $sub -> $msg','$sender','')";
    //         mysqli_query($conn, $sql);
    //     } else {
    //         $sql = "Insert Into mail Values(NULL,'$sender','$receiver',now(),'$sub','inbox',0,'$msg','$receiver','$attachment')";
    //         mysqli_query($conn, $sql);
    //     }
    // } else {
    //     echo "<script>alert('Unable to send Mail');</script>";
    // }
    // header("Location:../sentmails.php");
    // exit;
}
// if (isset($_POST['btnSave'])) {
//     echo "<br/>Saving Mail";
//     if (isset($_POST['mid'])) {
//         $sql = "Update draft Set Sender='$sender', Receiver='$receiver',DtTime=now(), Sub='$sub', message='$msg', Attachment='$attachment' Where Mid=$_POST[mid]";
//         mysqli_query($conn, $sql);
//         echo "<br/>Mail Saved";
//     } else {
//         $sql = "Insert Into draft Values(NULL,'$sender','$receiver',now(),'$sub','draft',1,'$msg','$sender','$attachment')";
//         mysqli_query($conn, $sql);
//         echo "<br/>Mail Saved";
//         header("Location:../drafts.php");
//         exit;
//     }
// }
	// header("Location:../inbox.php");
	// exit;
