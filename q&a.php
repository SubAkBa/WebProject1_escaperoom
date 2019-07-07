<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>웹프로젝트</title>
    <link rel="stylesheet" type="text/css" href="css/q&a.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
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
        <h1>q&a</h1>
        <form action="writing.php" method="post">
            <table cellspacing="0">
                <colgroup>
                    <col width="10%">
                    <col width="45%">
                    <col width="15%">
                    <col width="15%">
                    <col width="15%">
                </colgroup>
                <tr id="firstrow">
                    <td colspan="5">
                        <select name="category" class="selecttype">
                            <option value="title">제목</option>
                            <option value="writer">작성자</option>
                            <option value="theme">방테마</option>
                        </select>
                        <input type="text" name="search" class="inputtype" autofocus autocomplete="off">
                        <input type="submit" value="검색" class="buttontype1">
                    </td>
                </tr>
                <tr id="secondrow">
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>날짜</th>
                    <th>방테마</th>
                </tr>
                <?php
                    header("Content-Type: text/html; charset=utf-8");
                    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131");
                    $sql = "SELECT * FROM QnABOARD ORDER BY BOARDNUM DESC";
                    $ret = mysqli_query($con, $sql);

                    while($row = mysqli_fetch_assoc($ret))
                    {
                        $datetimedata = explode(' ',$row['BDATE']);
                        $dated = $datetimedata[0];
                        $timed = $datetimedata[1];
                        if($dated == Date("Y-m-d"))
                            $row['BDATE'] = $timed;
                        else
                            $row['BDATE'] = $dated;
                ?>
                    <tr>
                        <td><?=$row['BOARDNUM']?></td>
                        <td><a href="javascript:ChkPw(<?=$row['BOARDNUM']?>);"><?=$row['TITLE']?></a></td>
                        <td><?=$row['NAME']?></td>
                        <td><?=$row['BDATE']?></td>
                        <td><?=$row['THEMA']?></td>
                    </tr>
                    <script>
                        function ChkPw(n)
                        {
                            $.post("checkpw.php", {num : n}, function(result1){
                                var pwdata = result1;
                                
                                if(pwdata == "0")
                                {
                                    alert("삭제된 글입니다.");
                                    return false;
                                }
                                else
                                {
                                    var chkpw = prompt("비밀번호를 입력해주세요.", "");

                                    if(chkpw == pwdata)
                                        location.href = "writing.php?BOARDNUM=" + n;
                                    else
                                        alert("비밀번호가 틀렸습니다.");
                                }
                            });
                        }
                    </script>
                <?php
                    }
                    mysqli_close($con);
                ?>
                <tr>
                    <td colspan="3"></td>
                    <td colspan="2">
                        <div id="writingtype"><a href="write.php">글 올리기</a></div>
                    </td>
                </tr>
            </table>
        </form>
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
</body>
</html>