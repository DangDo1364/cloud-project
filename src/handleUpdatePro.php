<?php

ob_start();

require_once ('../config/dbhelper.php');

if(!empty($_POST)){
        
        $id = $_POST['id'];
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
        $tenhang = $_POST['tenhang'];

    
        $sql = "UPDATE sanpham 
        SET tensp = '".$name."' ,gia = '".$gia."', hinhanh = '".$hinhanh."' ,kichthuoc = '".$kichthuoc."', chieucaoyen = '".$chieucaoyen."',sizebanh = '".$kichthuocbanh."',engine = '".$dongco."',
        CC = '".$cc."',congsuat = '".$congsuat."' ,CCnhot = '".$ccnhot."',CCxang = '".$ccxang."',phanh = '".$phanh."' ,gear = '".$hopso."',tenhang = '".$tenhang."' 
        WHERE id = '".$id."'";

        execute($sql);
        
        header('Location: product.php?tenhang='.$tenhang.'');
    }
?>