<?php
    $datedata = $_POST["dated"];
    $themadata = $_POST["themad"];
    $timedata = $_POST["timed"];
    $namedata = $_POST["named"];
    $membernumberdata = $_POST["membernumberd"];
    $phonenumber1data = $_POST["phonenumber1d"];
    $phonenumber2data = $_POST["phonenumber2d"];
    $bookingnumberdata = $_POST["bookingnumberd"];

    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131") or die("데이터베이스 접속 실패 !!");

    $sql1 = "SELECT* FROM CUSTOMER WHERE user_bookingnumber='$bookingnumberdata' ";
    $ret1 = mysqli_query($con, $sql1);
    $row = mysqli_fetch_array($ret1);

    if($row)
    {
        $msg = "이미 예약되어 있습니다.";
    }
    else
    {
        $msg = "예약이 완료되었습니다.";
        $sql = "INSERT INTO CUSTOMER VALUES
        ('$namedata', '$themadata', '$datedata', '$timedata', '$membernumberdata', '$phonenumber1data', '$phonenumber2data', '$bookingnumberdata')";
        $ret = mysqli_query($con, $sql);
    }

    mysqli_close($con);
?>

<script>
    alert("<?php echo $msg ?>");
</script>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>웹프로젝트</title>
    <link rel="stylesheet" href="css/booking4.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/booking4.js"></script>
</head>
<body>
    <div id="container">
    <header>
        <a href="main_display.php"><img id="logotype" src="images/main_logo.JPG" alt="메인로고"></a>
        <ul>
            <li><a href="reason.html">reason</a></li>
            <li><a href="notice.html">notice</a></li>
            <li><a href="rooms.html">rooms</a></li>
            <li><a href="booking.html">booking</a></li>
            <li><a href="check booking.html">check booking</a></li>
            <li><a href="q&a.html">q&a</a></li>
        </ul>
    </header>
    <section>
        <div id="firstarticle">
            <h2>예약하기 <span id="smalltext">(booking)</span></h2>
            <img src="images/booking4_picture.gif" style="margin-bottom:30px">
        </div>
        <div id="secondarticle">
            <table cellspacing="0" style="text-align:center;">
                <tr>
                    <td style="font-size:50px"><?php echo $msg ?></td>
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