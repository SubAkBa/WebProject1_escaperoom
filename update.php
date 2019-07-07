<?php
    $bnum = $_POST["num"];

    $title = $_POST["titled"];
    $name = $_POST["named"];
    $thema = $_POST["themad"];
    $textarea = $_POST["textad"];
    $pw = $_POST["pwd"];

    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131");
    $query2 = "UPDATE QnABOARD SET TITLE = '$title', NAME = '$name', PW = '$pw', THEMA = '$thema', TEXTCONTENT = '$textarea' WHERE BOARDNUM = '$bnum'";
    
    mysqli_query($con, $query2);

    $msg = "수정 되었습니다.";

    echo $msg;
?>