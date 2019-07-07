window.onload = function(){
    
    var themazone = document.getElementById("themalist");
    var themalist = themazone.getElementsByTagName("a");
    var timezone = document.getElementById("timelist");
    var timelist = timezone.getElementsByTagName("a");
    var bookvalue = document.getElementById("datetext");
    var themavalue = document.getElementById("thematext");
    var timevalue = document.getElementById("timetext");
    var date = document.getElementById("bookdate");
    var bool = [false, false];
    
    document.getElementById("bookform").onsubmit = function()
    {
        
        if(date.value == "")
        {
            alert("날짜를 선택해주세요!");
            return false;
        }
        else if(bool[0] == false)
        {
            alert("테마를 선택해주세요!");
            return false;
        }
        else if(bool[1] == false)
        {
            alert("시간을 선택해주세요!");
            return false;
        }
        else
            bookvalue.value = date.value;

    }

    for(var i=0;i<themalist.length;i++)
    {
        themalist[i].onclick = function()
        {
            var imgzone = document.getElementById("imglist").children[0];
            var k = this.id;
            for(var j=0;j<themalist.length;j++)
                themalist[j].style.backgroundColor = "black";

            switch(k)
            {
            case "0":
                themavalue.value = "다크나이트";
                break;
            case "1":
                themavalue.value = "컨저링1";
                break;
            case "2":
                themavalue.value = "쏘우";
                break;
            case "3":
                themavalue.value = "트라이앵글";
                break;
            case "4":
                themavalue.value = "28주후";
                break;
            case "5":
                themavalue.value = "셜록홈즈";
                break;
            case "6":
                themavalue.value = "투모로우";
                break;
            case "7":
                themavalue.value = "컨저링2";
                break;
            case "8":
                themavalue.value = "다크나이트라이즈";
                break;
            }

            timezone.style.visibility = "visible";
            this.style.backgroundColor = "gray";
            imgzone.src = this.href;
            bool[0] = true;

            return false;
        }

        timelist[i].onclick=function()
        {
            var t = this.id;

            for(var j=0;j<timelist.length;j++)
                timelist[j].style.backgroundColor = "black";

            switch(t)
            {
            case "0":
                timevalue.value = "10:30";
                break;
            case "1":
                timevalue.value = "11:50";
                break;
            case "2":
                timevalue.value = "13:10";
                break;
            case "3":
                timevalue.value = "14:30";
                break;
            case "4":
                timevalue.value = "15:50";
                break;
            case "5":
                timevalue.value = "17:10";
                break;
            case "6":
                timevalue.value = "18:30";
                break;
            case "7":
                timevalue.value = "19:50";
                break;
            case "8":
                timevalue.value = "21:10";
                break;
            }

            bool[1] = true;
            
            this.style.backgroundColor = "gray";

            return false;
        }
    }
}