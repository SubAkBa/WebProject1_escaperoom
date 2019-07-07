<?php
    $datedata = $_POST["date"];
    $themadata = $_POST["thema"];
    $timedata = $_POST["time"];
    $namedata = $_POST["name"];
    $pricedata = $_POST["price"];
    $depositdata = $_POST["deposit"];
    $persondata = $_POST["person"];
    $depositdatedata = $_POST["depositdate"];
    $phonenumber1data = $_POST["phonenumber1"];
    $phonenumber2data = $_POST["phonenumber2"];
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>웹프로젝트</title>
    <link rel="stylesheet" href="css/booking3.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/booking3.js"></script>
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
            <h2>예약하기 <span id="smalltext">(booking)</span></h2>
            <img src="images/booking3_picture.gif">
        </div>
        <div id="secondarticle">
            <form action="booking4.php" method="post" name="info" id="info">
                <table cellspacing="0">
                    <colgroup>
                        <col width="20%">
                        <col width="80%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>테마(room)</th>
                            <td style="font-weight:bold"><?php echo $themadata ?></td>
                        </tr>
                        <tr>
                            <th>예약일시(date)</th>
                            <td style="font-weight:bold"><?php echo $datedata ?></td>
                        </tr>
                        <tr>
                            <th>시간</th>
                            <td style="font-weight:bold"><?php echo $timedata ?></td>
                        </tr>
                        <tr>
                            <th>인원</th>
                            <td style="font-weight:bold"><?php echo $persondata ?></td>
                        </tr>
                        <tr>
                            <th>테마가격</th>
                            <td style="font-weight:bold"><?php echo $pricedata ?></td>
                        </tr>
                        <tr>
                            <th>예약금 결제</th>
                            <td id="deposittext">10,000원</td>
                        </tr>
                        <tr>
                            <th>결제방식</th>
                            <td style="font-weight:bold"><?php echo $depositdata ?></td>
                        </tr>
                        <tr>
                            <th>입금계좌</th>
                            <td>
                                <select id="selecttype">
                                    <option value="notselect">=== 입금 계좌를 선택해주세요 ===</option>
                                    <option value="account">손원주 165802-04-172851</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>입금자명</th>
                            <td><input type="text" class="inputtype" style="font-weight:bold" value="<?php echo $namedata ?>"></td>
                        </tr>
                        <tr>
                            <th>입금예정일</th>
                            <td><input type="text" class="inputtype" style="font-weight:bold" value="<?php echo $depositdatedata ?>"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="finaletype" colspan="2">
                                <input type="hidden" value="<?php echo $namedata ?>" name="named">
                                <input type="hidden" value="<?php echo $themadata ?>" name="themad">
                                <input type="hidden" value="<?php echo $datedata ?>" name="dated">
                                <input type="hidden" value="<?php echo $timedata ?>" name="timed">
                                <input type="hidden" value="<?php echo $persondata ?>" name="membernumberd">
                                <input type="hidden" value="<?php echo $phonenumber1data ?>" name="phonenumber1d">
                                <input type="hidden" value="<?php echo $phonenumber2data ?>" name="phonenumber2d">
                                <input type="hidden" value="<?php echo $phonenumber2data ?>" name="bookingnumberd" id="bookingnum">
                                <input type="button" onclick="firstbooking();" value="처음으로" class="buttontype">
                                <input type="button" onclick="prevbooking();" value="이전으로" class="buttontype">
                                <input type="submit" value="결제하기" class="buttontype">
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