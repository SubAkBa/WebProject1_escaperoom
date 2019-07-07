<?php
    $ti = $_POST["ti"];
    $na = $_POST["na"];
    $th = $_POST["th"];
    $ta = $_POST["ta"];
    $pw = $_POST["pw"];
    $bn = $_POST["bn"];
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>웹프로젝트</title>
    <link rel="stylesheet" href="css/writing.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/writing.js"></script>
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
        <h1>q&a</h1>
        <form action="writing.php" method="post" id="writeform">
            <table cellspacing="0">
                <tr>
                    <th>제목</th>
                    <td><input type="text" name="TITLE" value="<?= $ti ?>" autocomplete="off" class="texttype" id="title" autofocus></td>
                </tr>
                <tr>
                    <th>작성자</th>
                    <td><input type="text" name="NAME" value="<?= $na ?>" autocomplete="off" class="texttype" id="name"></td>
                </tr>
                <tr>
                    <th>비밀번호</th>
                    <td><input type="password" name="PW" value="<?= $pw ?>" autocomplete="off" class="pwtype" id="pw"></td>
                </tr>
                <tr>
                    <th>테마</th>
                    <td>
                        <select name="THEMA" class="selecttype" id="themas">
                            <option value="0">테마를 선택해주세요.</option>
                            <option value="다크나이트">다크나이트</option>
                            <option value="컨저링1">컨저링 1</option>
                            <option value="쏘우">쏘우</option>
                            <option value="트라이앵글">트라이앵글</option>
                            <option value="28주후">28주후</option>
                            <option value="셜록홈즈">셜록홈즈</option>
                            <option value="투모로우">투모로우</option>
                            <option value="컨저링2">컨저링 2</option>
                            <option value="다크나이트라이즈">다크나이트라이즈</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea rows="10" cols="80" id="areatype" name="TEXTCONTENT"><?= $ta ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" value="등록하기" class="buttontype">
                        <input type="button" value="수정하기" onclick="updatesql();" class="buttontype">
                        <input type="button" value="목록으로" onclick="backpage();" class="buttontype">
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
    </div>
</body>
</html>