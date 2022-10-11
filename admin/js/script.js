function addZero(i) {
    if (i < 10) {i = "0" + i}
    return i;
  }
function doDate()
{
    let str = "";
    let now = new Date();

    str += addZero(now.getHours()) +":" + addZero(now.getMinutes()) + ":" + addZero(now.getSeconds());
    document.getElementById("todaysDate").innerHTML = str;
}
setInterval(doDate, 1000);


// отлавиливаем кнопку 
if(document.querySelector(".update")){
  document.querySelector(".update").onclick = function(){
    document.querySelector(".redaction").style.display = "block";
    document.querySelector(".info").style.display ="none";
  }
}

//активное меню 

let link = document.querySelectorAll('.menu_link');
let url = document.location.href;
for(let i = 0; i < link.length; i++){
    if(url == link[i].href){
        link[i].className += ' activ';
    }
}