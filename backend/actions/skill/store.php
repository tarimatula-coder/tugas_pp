<?php
include '../../app.php';

if(isset($_POST['tombol'])){
$skill = escapeString($_POST['skill']);
$percent = escapeString($_POST['percent']);
$description = escapeString($_POST['description']);


    $qInsert = "INSERT INTO skills(skill, percent, description ) VALUES('$skill', '$percent', '$description' )";
    if (mysqli_query($connect, $qInsert)){
         echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/skill/index.php';
    </script>
            ";
    }else{
    echo "
    <script>    
        alert('Data gagal ditambah : " . mysqli_error($connect) . "');
        window.location.href='../../pages/skill/create.php';
    </script>
    ";
}
    }

?>