<?php
    if (isset($_POST['submit'])) {
        $name= $_POST['nama'];
        $jk= $_POST['jk'];

        echo "Nama Anda: ".$name. "</br>";
        echo "Jenis Kelamin: ".$jk. "</br>";
    }
?>