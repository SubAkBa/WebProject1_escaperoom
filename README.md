# 3학년 1학기 웹프로젝트 (방탈출카페 예약 사이트)
  
1. main_display.html
* 메인 화면이며, 화면의 동그라미에 마우스 커서를 가져다 대면 사진이 fadein, fadeout 된다.  
  
2. reason.html
* 로고가 아닌 메뉴 바의 reason을 클릭하면 나오며, 간단하게 방탈출 소개 & 주의사항을 알려주는 화면.  

3. notice.html
* 예약에 관한 정보와 함께 가격들을 알려주는 화면.

4. room.html
* 방 테마들의 종류를 소개해주는 화면. 각 테마별로 소개와 함께 예약을 할 수 있다.
* 방 화면 : darkknight.html / conjuring1.html / saw.html / triangle.html / 28weekslater.html / sherlockholmes.html / tomorrow.html / conjuring2.html / darkknightrises.html

5. booking.html
* 본격적으로 예약에 들어가는 화면이며, 날짜 / 테마 / 시간을 선택하고 예약을 진행하게 된다.  
* 예약 관련 파일 : booking2.php, booking3.php, booking4.php

6. check booking.html
* 예약 확인 화면이며, 예약 당시 이름과 연락처 예약번호를 입력하여 DB에 조회하게 된다.

  6-1. checkbooking.php
  * 예약이 되어 있지 않다면 알림창으로 '예약이 되어  있지 않습니다.'라고 뜨며, 예약이 되어 있다면 DB에 저장되어 있는 예약 당시 정보들 (이름, 테마, 날짜, 시간, ...) 을 가져와 보여주는 화면
	
  6-2. cancelbooking.php
  * 예약을 취소하고 난 뒤의 화면

7. q&a.php
* DB에 저장된 게시글들을 가져와 보여주는 화면

	7-1. checkpw.php
	* 게시글을 보고 싶을 때 걸려있는 비밀번호가 맞는지 확인하기 위한 파일
	
	7-2. write.php
	* 게시글을 작성하는 화면
	
	7-3. writing.php
	* DB에 있는 게시글을 조회하는 화면

8. Last N Line.ttf
* 적용된 폰트
