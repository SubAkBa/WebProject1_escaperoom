<?php
    $datedata = $_POST["date"];
    $themadata = $_POST["thema"];
    $timedata = $_POST["time"];
?>

<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>웹프로젝트</title>
    <link rel="stylesheet" href="css/booking2.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/booking2.js"></script>
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
        <div id="firstarticle" style="width:100%">
            <h2>예약하기 <span id="smalltext">(booking)</span></h2>
            <img src="images/booking2_picture.gif" style="margin-bottom:30px">
        </div>
        <div id="secondarticle">
            <form action="booking3.php" method="post" name="info" id="info">
                <table cellspacing="0">
                    <colgroup>
                        <col width="20%">
                        <col width="80%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>테마(room)</th>
                            <td style="font-weight:bold" id="th" name="thema"><?php echo $themadata ?></td>
                        </tr>
                        <tr>
                            <th>예약일시(date)</th>
                            <td style="font-weight:bold" id="da" name="date"><?php echo $datedata ?></td>
                        </tr>
                        <tr>
                            <th>시간</th>
                            <td style="font-weight:bold" id="ti" name="time"><?php echo $timedata ?></td>
                        </tr>
                        <tr>
                            <th>인원</th>
                            <td>
                                <select name="guestnumber" class="selecttype" id="price">
                                    <option id="0" value="0원">인원을 선택해주세요.</option>
                                    <option id="1" value="24,000원">1</option>
                                    <option id="2" value="44,000원">2</option>
                                    <option id="3" value="60,000원">3</option>
                                    <option id="4" value="72,000원">4</option>
                                    <option id="5" value="80,000원">5</option>
                                    <option id="6" value="84,000원">6</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>예약자명</th>
                            <td>
                                <input type="text" id="user_name" class="inputtype" autocomplete="off" name="name">
                            </td>
                        </tr>
                        <tr>
                            <th>연락처</th>
                            <td>
                                <select name="guestphonenumber1" class="selecttype" id="user_p0">
                                    <option value="010">010</option>
                                    <option value="011">011</option>
                                    <option value="016">016</option>
                                    <option value="017">017</option>
                                    <option value="018">018</option>
                                    <option value="019">019</option>
                                </select>
                                <input type="text" name="guestphonenumber2" autocomplete="off" maxlength="4" class="inputtype" id="user_p1" value="">
                                <input type="text" name="guestphonenumber3" autocomplete="off" maxlength="4" class="inputtype" id="user_p2" value="">
                            </td>
                        </tr>
                        <tr>
                            <th>이메일</th>
                            <td>
                                <label>
                                    <input type="text" class="inputtype" autocomplete="off" id="user_prevemail" value="">
                                    @
                                    <select name="emailselect" class="selecttype" id="user_nextemail">
                                        <option value="selectingemail">주소를 골라주세요.</option>
                                        <option value="naver.com">naver.com</option>
                                        <option value="nate.com">nate.com</option>
                                        <option value="gmail.com">gmail.com</option>
                                        <option value="hanmail.net">hanmail.net</option>
                                        <option value="hotmail.com">hotmail.com</option>
                                    </select>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th>예약금</th>
                            <td>10,000원</td>
                        </tr>
                        <tr>
                            <th>참가요금</th>
                            <td id="txt" style="font-weight:bold" name="price" value="0원"></td>
                        </tr>
                        <tr>
                            <th>결제방식</th>
                            <td>
                                <label><input type="radio" name="payment" value="신용카드" id="d1">신용카드</label>
                                <label><input type="radio" name="payment" value="계좌이체" id="d2">계좌이체</label>
                                <label><input type="radio" name="payment" value="가상계좌" id="d3">가상계좌</label>
                                <label><input type="radio" name="payment" value="무통장입금" id="d4">무통장입금</label>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2">
                                <ul id="warningtype">
                                    <li>테마시작시간으로 부터 24시간 이내 취소시에는 선결제액 환불이 되지 않으니 주의바랍니다.</li>
                                    <li>예약금만 선결제 하신 경우에는, 현장에서 선결제하신 예약금을 제외한 차액만 추가 결제하시면 됩니다.</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td style="border:none" colspan="2">
                                <textarea rows="12" class="areatype" readonly>
개인정보 수집, 이용 및 제공 등에 관한 고지사항
이용자 본인은 아래의 개인정보가 사실임을 확인하며, 아래와 같이 개인정보를 수집 및 이용하는 것에 동의합니다.

[개인정보의 수집 및 이용목적]
- 비회원 예매서비스 제공
- 예약 정보를 확인 및 관리하고, 필요 시 예약 이행 여부 확인을 위해 예약자에게 연락을 취할 목적 등

[수집하는 개인정보의 항목]
- 필수입력사항 : 이용자의 식별을 위한 정보
- 입력정보 : 이름, 휴대폰번호, 이메일 주소

[개인정보의 보유 및 이용기간]
개인정보의 수집목적 또는 제공 받은 목적이 달성되면 즉시 파기합니다. 다만, 상법 등 관련 법령의 규정에 의하여 거래관련 관리 의무 관계의 확인 등을 이유로 대금결제및재화들 의공급에관한기록에 의거 5년간 보유합니다.
* 개인 정보 제공에 동의하지 않을 권리가 있으며 개인 정보 제공에 동의하지 않을 경우 비회원 서비스는 제공되지 않습니다.

[기술적/관리적 보호대책]
- 리즌은 서버 및 네트워크 관련 보안시스템을 갖추고 있습니다. 방화벽 등 해킹 등 외부침입에 대비하여 각 서버마다 침입차단시스템 및 취약점 분석시스템 등을 갖추어 ‘이용자’가 제공한 개인정보보호에 만전을 기하고 있습니다. 개인 정보 취급직원 최소화는 물론 각 직원별 개인정보 접근권한을 달리하고, 수시보안교육을 통해 본 방침의 준수를 강조하고 있습니다.
- 리즌은 “이용자” 개인의 실수나 기본적인 인터넷의 위험성 때문에 일어나는 일들에 대해 책임을 지지 않습니다.
- 그 외 내부 관리자의 실수나 기술관리 상의 사고로 인해 개인정보의 상실, 유출, 변조, 훼손이 유발될 경우 더큐이스케이프는 즉각“이용자”에게 사실을 알리고 적절한 대책과 보상을 강구할 것입니다.
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="finaletype" colspan="2">
                                <label><input type="checkbox" name="agreeing" id="agreeing">개인정보처리방침에 동의합니다.</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="finaletype" colspan="2">
                                <input type="hidden" id="datetext" name="date" value="">
                                <input type="hidden" id="thematext" name="thema" value="">
                                <input type="hidden" id="timetext" name="time" value="">
                                <input type="hidden" id="persontext" name="person" value="인원">
                                <input type="hidden" id="pricetext" name="price" value="가격">
                                <input type="hidden" id="deposittext" name="deposit" value="결제">
                                <input type="hidden" id="nametext" name="name" value="이름">
                                <input type="hidden" id="depositdatetext" name="depositdate" value="입금날짜">
                                <input type="hidden" id="phonenumbertext1" name="phonenumber1" value="연락처1">
                                <input type="hidden" id="phonenumbertext2" name="phonenumber2" value="연락처2">
                                <input type="button" onclick="firstbooking();" class="buttontype" value="처음으로">
                                <input type="button" onclick="prevbookingpage();" class="buttontype" value="이전으로">
                                <input type="submit" class="buttontype" value="다음으로">
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