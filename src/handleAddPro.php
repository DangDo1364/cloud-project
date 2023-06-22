<?php
ob_start();

require_once ('../config/dbhelper.php');

if(!empty($_POST)){
    $name = '';
    $gia = '';
    if(isset($_POST['gia']) && isset($_POST['name']) )
    {
        $name = $_POST['name'];
        $gia = $_POST['gia'];
        $hinhanh = $_POST['hinhanh'];
        $kichthuoc = $_POST['kichthuoc'];
        $chieucaoyen = $_POST['chieucaoyen'];
        $kichthuocbanh = $_POST['kichthuocbanh'];
        $dongco = $_POST['dongco'];
        $cc = $_POST['cc'];
        $congsuat = $_POST['congsuat'];
        $ccnhot = $_POST['ccnhot'];
        $ccxang = $_POST['ccxang'];
        $phanh = $_POST['phanh'];
        $hopso = $_POST['hopso'];
        $noidung = $_POST['noidung'];
        $tenhang = $_POST['tenhang'];
    }
    
    if(!empty($name) && !empty($gia)){
        $sql = "INSERT INTO sanpham VALUES (NULL,'".$name."','".$gia."','".$hinhanh."'
        ,'".$kichthuoc."','".$chieucaoyen."','".$kichthuocbanh."','".$dongco."',
        '".$cc."','".$congsuat."','".$ccnhot."','".$ccxang."','".$phanh."','".$hopso."','".$noidung."','".$tenhang."')";       
        
        execute($sql);     
        header("Location: product.php?tenhang='".$tenhang."'");
    }
}
?>
