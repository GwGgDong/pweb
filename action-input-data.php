<?php
//cek button    
    if ($_POST['Submit'] == "Submit") {
    $    = $_POST[''];
    $            = $_POST[''];
    $        = $_POST[''];
    $            = $_POST[''];
    $        = $_POST[''];
    //validasi data data kosong
    if (empty($_POST[''])||empty($_POST[''])||empty($_POST[''])||empty($_POST[''])) {
        ?>
            <script language="JavaScript">
                alert('Data Harap Dilengkapi!');
                document.location='download-script-form-input-data.php';
            </script>
        <?php
    }
    else {
    include "../../koneksi-tutor.php";
    //cek NIM di database
    $cek=mysql_num_rows (mysql_query("SELECT id_mahasiswa FROM apotek WHERE id_mahasiswa='$_POST[id_mahasiswa]'"));
    if ($cek > 0) {
    ?>
        <script language="JavaScript">
        alert('');
        document.location='download-script-form-input-data.php';
        </script>
    <?php
    }
    //Masukan data ke Table
    $input    ="INSERT INTO apotek (,,,,) VALUES ('$','$','$','$','$')";
    $query_input =mysql_query($input);
    if ($query_input) {
    //Jika Sukses
    ?>
        <script language="JavaScript">
        alert('Input Data Berhasil');
        document.location='download-script-form-input-data.php';
        </script>
    <?php
    }
    else {
    //Jika Gagal
    echo "Input Data Gagal!, Silahkan diulangi!";
    }
//Tutup koneksi engine MySQL
    mysql_close($Open);
    }
}
?>