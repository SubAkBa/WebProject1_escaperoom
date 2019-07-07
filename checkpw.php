<?php
    $bnum = $_POST["num"];

    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131");
    $sql = "SELECT PW FROM QnABOARD WHERE BOARDNUM = '".$bnum."'";
    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($ret);

    echo $row['PW'];
?>