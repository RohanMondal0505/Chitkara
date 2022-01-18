// Recent Activity
var checkbox = document.querySelectorAll('.noticeSec .checkbox span');
var notice = document.querySelectorAll('.noticeSec .notice-items .items');
var topbar = document.querySelectorAll('.noticeSec .checkbox span .span');


function showPanel(panelIndex) {
    checkbox.forEach(function (node) {
        node.style.backgroundColor = "";
        node.style.color = "";
        node.style.borderBottom = "";
    });
    checkbox[panelIndex].style.backgroundColor = "white";
    checkbox[panelIndex].style.color = "#000";
    checkbox[panelIndex].style.borderBottom = "none";
    
    topbar.forEach(function (node) {
        node.style.backgroundColor = "";
    });
    topbar[panelIndex].style.backgroundColor = "rgb(255, 125, 4,.9)";
    
    notice.forEach(function (node) {
        node.style.display = "none";
    });
    notice[panelIndex].style.display = "block";
    notice[panelIndex].style.backgroundColor = "#fff";
}
showPanel(0);

// Recent Activity Section ---- Notice
function addListItem(d,m,y){
    const addNotice = document.getElementById('addNotice');
    const list = document.createElement('li');
    const p = document.createElement('p');
    const img = document.createElement('img');
    const a = document.createElement('a');
    const span = document.createElement('span');
    
    
    p.innerText =  d + '-' + m + '-' + y;
    p.className = 'date';
    
    img.src ='../../Images/red-bullet.png';
    
    a.innerHTML ='<p class="pst">Print Fee Receipt Print Fee Receipt Print Fee Receipt Print Fee Receipt</p><p class="pnd">coexam <img src="../../Images/new.gif"></p>';
    a.setAttribute('href' , '#');
    a.setAttribute('id', 'li');
    a.addEventListener('click', clickToShow)
    
    let ww = 'https://hp.chitkara.edu.in//Interface/index.php';
    span.innerHTML = `<a href="${ww}" target="_blank"><img src="../../Images/download.gif"></a>`;
    
    list.appendChild(p);
    list.appendChild(img);
    list.appendChild(a);
    list.appendChild(span);
    
    addNotice.prepend(list);
}
addListItem(25,"Jan",20);
addListItem(10,"Feb",20);
addListItem(05,"May",20);

let date = new Date();
function myFunction() {
    var month = new Array();
    month[0] = "Jan";
    month[1] = "Feb";
    month[2] = "Mar";
    month[3] = "Apr";
    month[4] = "May";
    month[5] = "Jun";
    month[6] = "Jul";
    month[7] = "Aug";
    month[8] = "Sep";
    month[9] = "Oct";
    month[10] = "Nov";
    month[11] = "Dec";
    
    var n = month[date.getMonth()];
    return n
}
addListItem(date.getDate(), myFunction() , date.getFullYear());




// Recent Activity Section --- Update
function addUpdateList(d,m,y){
    const addUpdate = document.getElementById('addUpdate');
    const list = document.createElement('li');
    const p = document.createElement('p');
    const img = document.createElement('img');
    const a = document.createElement('a');
    const span = document.createElement('span');
    
    
    p.innerText =  d + '-' + m + '-' + y;
    p.className = 'date';

    img.src ='../../Images/red-bullet.png';
    
    a.innerText ='Fee Due for: 1 SEM(JULY TO DEC 18) Print Fee Receipt';
    a.setAttribute('href' , '#');
    a.setAttribute('id', 'li');
    
    let ww = 'https://hp.chitkara.edu.in//Interface/index.php';
    span.innerHTML = '<a href="' + ww + '" target="_blank"><img src="../../Images/download.gif"></a>';
    
    list.appendChild(p);
    list.appendChild(img);
    list.appendChild(a);
    list.appendChild(span);
    
    addUpdate.prepend(list);
}
addUpdateList(25,"Jan",20);

addUpdateList(date.getDate(), myFunction() , date.getFullYear());



//clickToShow
function clickToShow() {
    var show = document.querySelector('.noticeSec .notice-items .notice-pop-up-box');
    if (show.style.display == "")
        show.style.display = "block";
    else
        show.style.display = "";
}



//  Calender
var dt = new Date();

function RenderDate() {

    dt.setDate(1);
    var day = dt.getDay();

    var end_date = new Date(dt.getFullYear(), dt.getMonth() + 1, 0).getDate();

    var prev_date = new Date(dt.getFullYear(), dt.getMonth(), 0).getDate();

    var today = new Date();

    var months = [
        "January", "February", "March",
        "April", "May", "June",
        "July", "August", "September",
        "October", "November", "December"
    ];


    document.getElementById("month").innerHTML = months[dt.getMonth()] + " " + dt.getFullYear();

    var cells = "";

    for (x = day; x > 0; x--) {
        cells += "<div class='perv-date'>" + (prev_date - x + 1) + "</div>";
    }
    for (i = 1; i <= end_date; i++) {
        if (i == today.getDate() && dt.getMonth() == today.getMonth()) {
            cells += "<div class='today'>" + i + "</div>";
        } else {
            cells += "<div>" + i + "</div>";
        }
    }

    document.getElementsByClassName("days")[0].innerHTML = cells;

}

function moveDate(para) {
    if (para == 'prev')
        dt.setMonth(dt.getMonth() - 1);
    else if (para == 'next')
        dt.setMonth(dt.getMonth() - 1);

    RenderDate();
}



// Carousel
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        items:1
    })
});




// Back to Top
$(document).ready(function () {
    var offset = 220;
    var duration = 500;
    $(window).scroll(function () {
        if ($(this).scrollTop() > offset) {
            $('.back-to-top').fadeIn(duration);
        } else {
            $('.back-to-top').fadeOut(duration);
        }
    });

    $('.back-to-top').click(function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, duration);
        return false;
    })
}); 