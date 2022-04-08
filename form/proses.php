<?php
    $nama  =$_POST['nama'];
    $Email =$_POST['Email'];
    $tlpn  =$_POST['tlpn'];
    $pesan =$_POST['pesan'];
    echo "<script>window.location = 'https://api.whatsapp.com/send?phone=$tlpn&text=$pesan'</script>";
?>