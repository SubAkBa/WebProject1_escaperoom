<?php
    $bookdata = $_POST["booknum"];
    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131") or die("데이터 베이스 접속 실패 !!");

    $sql = "DELETE FROM CUSTOMER WHERE user_bookingnumber = '".$bookdata."'";

    $ret = mysqli_query($con, $sql);

    mysqli_close($con);
?>


<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>웹프로젝트</title>
    <link rel="stylesheet" href="css/cancelbooking.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/cancel booking.js"></script>
</head>
<body>
    <div id="container">
    <header>
        <a href="main_display.html"><img id="logotype" src="images/main_logo.JPG" alt="메인로고"></a>
        <ul>
            <li><a href="reason.html">reason</a></li>
            <li><a href="notice.html">notice</a></li>
            <li><a href="rooms.html">rooms</a></li>
            <li><a href="booking.html">booking</a></li>
            <li><a href="check booking.html">check booking</a></li>
            <li><a href="q&a.php">q&a</a></li>
        </ul>
    </header>
    <section>
        <div id="firstarticle">
            <h2>예약취소 <span id="smalltext">(cancel booking)</span></h2>
        </div>
        <div id="secondarticle">
            <table cellspacing="0">
                <tr>
                    <td style="font-size:50px">예약이 취소되었습니다.</td>
                </tr>
                <tr>
                    <td><input type="button" onclick="firstbookingpage();" value="확인" class="buttontype"></td>
                </tr>
            </table>
        </div>
    </section>
    <footer>
        <ul>
            <li>주소 : 공주대학교 천안공과대학 8층</li>
            <li>대표 : 손원주</li>
            <li>전화번호 : 010-5157-9214</li>
            <li>이메일 : sonwonjoo@naver.com</li>
            <li>Copyright ⓒ REASON All Right Reserved</li>
        </ul>
    </footer>
    </div>
</body>
</html>