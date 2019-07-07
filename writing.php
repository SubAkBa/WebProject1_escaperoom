<?php
    $title = $_POST["TITLE"];
    $name = $_POST["NAME"];
    $thema = $_POST["THEMA"];
    $pw = $_POST["PW"];
    $textarea = $_POST["TEXTCONTENT"];

    $con = mysqli_connect("localhost", "jinhui0131", "tlswlsgml1", "jinhui0131");
    $sqll = "SELECT* FROM QnABOARD";
    $mresult = mysqli_query($con, $sqll);

    $bnum = $_REQUEST["BOARDNUM"];
    $chk = "none";
    $n = 1;

    while($roww = mysqli_fetch_array($mresult))
    {
        if($bnum == $n)
            $chk = "inquire";
        $n++;
    }

    if($chk == "inquire")
    {    
        $sql1 = "SELECT* FROM QnABOARD WHERE BOARDNUM = '".$bnum."'";
        $ret3 = mysqli_query($con, $sql1);
        $row = mysqli_fetch_assoc($ret3);

        $title = $row["TITLE"];
        $name = $row["NAME"];
        $thema = $row["THEMA"];
        $textarea = $row["TEXTCONTENT"];
        $pw = $row["PW"];
        $msg = "조회 되었습니다.";
    }
    else if($chk == "none")
    {
        $query = "SELECT * FROM QnABOARD ORDER BY BOARDNUM DESC";
        $result = mysqli_query($con,$query);
        $data = mysqli_fetch_assoc($result);
        
        $sql = "INSERT INTO QnABOARD VALUES
        (null, '$title', '$name', null, '$pw', '$thema', '$textarea')";
        $ret2 = mysqli_query($con, $sql);

        $bnum = $data["BOARDNUM"]+1;
        $msg = "등록 되었습니다.";
    }
?>

<script>
    alert("<?=$msg ?>");

    function backpage(){
        var result = confirm("목록으로 돌아가시겠습니까?");

        if(result){
            location.href = "q&a.php";
        }
    }
    
    function deleteWriting(){
        var result = confirm("게시물을 삭제하시겠습니까?");

        if(result){
            var pwchk = prompt("비밀번호를 입력해주세요.", "");
            if(pwchk == "<?=$pw?>")
            {
                $.post("delete.php", {num : "<?=$bnum?>"}, function(result1){
                    alert(result1);
                    location.href = "q&a.php";
                });
            }
            else
                alert("비밀번호가 틀렸습니다.");
        }
        else
            return false;
    }

</script>
    
<?php
    mysqli_close($con);
?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>웹프로젝트</title>
    <link rel="stylesheet" href="css/writing2.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
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
        <form action="write.php" method="post" id="writed">
            <table cellspacing="0">
                <tr>
                    <th>제목</th>
                    <td id="title"><?php echo $title ?></td>
                </tr>
                <tr>
                    <th>작성자</th>
                    <td><?php echo $name ?></td>
                </tr>
                <tr>
                    <th>테마</th>
                    <td><?php echo $thema ?></td>
                </tr>
                <tr>
                    <td colspan="2" id="textareatype">
                        <?php echo $textarea ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="hidden" name="bn" value="<?php echo $bnum ?>">
                        <input type="hidden" name="ti" value="<?php echo $title ?>">
                        <input type="hidden" name="na" value="<?php echo $name ?>">
                        <input type="hidden" name="th" value="<?php echo $thema ?>">
                        <input type="hidden" name="ta" value="<?php echo $textarea ?>">
                        <input type="hidden" name="pw" value="<?php echo $pw ?>">
                        <input type="submit" value="수정하기" class="buttontype">
                        <input type="button" value="삭제하기" onclick="deleteWriting();" class="buttontype">
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