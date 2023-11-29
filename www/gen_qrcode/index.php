<?php    
    session_start();
    include('../Config.php');
    // include('../security1.php');
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    if (isset($_REQUEST['data'])) { 
    
        //it's very important!
        if (trim($_REQUEST['data']) == '')
            die('data cannot be empty! <a href="?">back</a>');
            
        // user data
        $ename = md5($_REQUEST['data'].$errorCorrectionLevel.$matrixPointSize).'.png';
        $filename = $PNG_TEMP_DIR.$ename;
        //insert to database 
        $idp = $_POST["id"];
        $image_name = $ename;
        $sql = "INSERT INTO tb_qr (IDStudent,qr_code) values ('$idp','$image_name')";
        $chk = mysqli_query($conn,$sql);

        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2); 

    }
//     if($_SESSION['Status'] == "Admin"){
//         echo "<script>
//                 alert('สำเร็จ');
//                 window.location ='../admin/project_add.php?ID=".$idp."';
//             </script>";
//         }
// else if($_SESSION['Status'] == "Teacher"){
//         echo "<script>
//                 alert('สำเร็จ');
//                 window.location ='../th4.php?ID=".$idp."';
//             </script>";
//         }
 else {    
    
        //default data
        echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
        QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    }    
        
    //display generated file
   // echo '<img src="'.$PNG_WEB_DIR.$filename.'" /><hr/>';  
    // benchmark
if($_SESSION['Status'] == "Admin"){
        echo "<script>
                alert('สำเร็จ');
                window.location ='../admin/project_add.php?ID=".$idp."';
            </script>";
        }
else if($_SESSION['Status'] == "Teacher"){
        echo "<script>
                alert('สำเร็จ');
                window.location ='../Teacher/th4.php?ID=".$idp."';
            </script>";
        }
else if($_SESSION['Status'] == "Checking"){
        echo "<script>
                alert('สำเร็จ');
                window.location ='../Checking/ck4.php?ID=".$idp."';
            </script>";
        }

 ?>
<!--  window.location ='test.php?ID=".$idp."'; --> <!-- นี้คือตัวเดิมก่อนเปลี่ยน -->
<!-- <?php //header("location:pages/examples/project_add.php"); ?> ตัวที่เสริมเข้ามา -->