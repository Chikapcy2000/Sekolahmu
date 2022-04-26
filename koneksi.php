<?php
    $conn = mysqli_connect('localhost:3307','root','','sekolamu');
    if(!$conn){
        echo 'gagal terhubung ke database';
    }
?> 