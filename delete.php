<?php
    $bnum = $_POST["num"];

    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131");
    $query1 = "UPDATE QnABOARD SET TITLE = '삭제된 글입니다.', NAME = '없음', BDATE = '없음', THEMA = '없음', PW = '0', TEXTCONTENT = '없음' WHERE BOARDNUM = '".$bnum."'";

    mysqli_query($con, $query1);

    $msg = "삭제 되었습니다.";

    echo $msg;
?>