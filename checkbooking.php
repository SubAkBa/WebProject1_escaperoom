<?php
    $namedata = $_POST["namedata"];
    $bookdata = $_POST["bookdata"];
    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131") or die("데이터 베이스 접속 실패 !!");

    $sql = "SELECT* FROM CUSTOMER WHERE user_bookingnumber = '".$bookdata."' AND user_name = '".$namedata."'";

    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($ret);

    if($row)
    {
        $g_name = $row['user_name'];
        $g_thema = $row['user_thema'];
        $g_date = $row['user_date'];
        $g_time = $row['user_time'];
        $g_member = $row['user_memebernumber'];
        $g_mobile1 = $row['user_mobile1'];
        $g_mobile2 = $row['user_mobile2'];
        $g_booknum = $row['user_bookingnumber'];
    }
    else
    {
        ?>
        <script>
            alert("예약되어 있지 않습니다.");
            location.href = "check booking.html";
        </script>
        <?php
    }
    mysqli_close($con);
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>웹프로젝트</title>
    <link rel="stylesheet" href="css/check bookingphp.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/check booking2.js"></script>
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
            <h2>예약확인 <span id="smalltext">(check booking)</span></h2>
        </div>
        <div id="secondarticle">
            <form action="cancelbooking.php" method="post" id="cbook">
                <table cellspacing="0">
                    <colgroup>
                        <col width="20%">
                        <col width="80%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>예약자 이름</th>
                            <td style="font-weight:bold"><?php echo $g_name ?></td>
                        </tr>
                        <tr>
                            <th>예약 번호</th>
                            <td style="font-weight:bold"><?php echo $g_booknum ?></td>
                        </tr>
                        <tr>
                            <th>예약 날짜</th>
                            <td style="font-weight:bold"><?php echo $g_date ?></td>
                        </tr>
                        <tr>
                            <th>예약 시간</th>
                            <td style="font-weight:bold"><?php echo $g_time ?></td>
                        </tr>
                        <tr>
                            <th>인원수</th>
                            <td style="font-weight:bold"><?php echo $g_member ?></td>
                        </tr>
                        <tr>
                            <th>예약 테마</th>
                            <td style="font-weight:bold"><?php echo $g_thema ?></td>
                        </tr>
                        <tr>
                            <th>연락처</th>
                            <td style="font-weight:bold"><?php echo $g_mobile1 ?><?php echo $g_mobile2 ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="finaletype" colspan="2">
                                <input type="hidden" value="<?php echo $bookdata ?>" name="booknum">
                                <input type="button" onclick="firstbooking();" value="처음으로" class="buttontype">
                                <input type="submit" value="예약취소" class="buttontype"> 
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
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