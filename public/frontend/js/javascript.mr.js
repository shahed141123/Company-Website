/*================/// Nav Menu Style page ///==============*/
//--Menu Open & hide
function fnClick(e){
    var $dd = $(this).next();
    // console.log($dd, this);
    $('.manege_nav').not($dd).removeClass('menu_btn_active');
    $dd.toggleClass('menu_btn_active');
};



//-- hiding menu when clicked outside menu
$('body').click(e => {
    var mainMenu = document.getElementById('Main_menu');
    const elements = [];

    var element = e.target;
    while (element) {
        elements.unshift(element);
        element = element.parentNode;
    }
    // console.log(elements);

    if (!elements.includes(mainMenu)) {
        [...$('.manege_nav')].forEach(nav => {
            if (nav.classList.contains('menu_btn_active')) {
                nav.classList.remove('menu_btn_active');
            }
        })
    }
})

//open menu
$('.country-btn-portugal').click(fnClick);
$('.country-btn-uk').click(fnClick);

//close if menu clicked
$('#mclose').click(()=>{
  $('.manege_nav').removeClass('menu_btn_active');
});

//--Mobile Menu
function switchMenuVisible() {

    var query = document.getElementById('Main_menu');
    if (query.classList.contains('display_none')) {
        query.classList.remove('display_none');
        query.classList.add('display_block');
    }
    else{
            query.classList.remove('display_block');
            query.classList.add('display_none');
    }
};

//----- Sub Sub Menu Show Hide
[].slice.call(document.querySelectorAll('.toggleDetails')).forEach(function(e){e.onclick = function(){
    this.parentElement.querySelector('.details').classList.toggle('hidden')
}});

//----Close (not use)
function hide(){
    document.getElementById('closeDiv').style.display = 'none';
};

//-----Search Mobile
function switchSearchVisible() {

    var query = document.getElementById('Search_menu');
    if (query.classList.contains('display_none')) {
        query.classList.remove('display_none');
        query.classList.add('display_block');
    }
    else{
            query.classList.remove('display_block');
            query.classList.add('display_none');
    }
};
function iconMenu() {
    var query = document.getElementById('iconMenu');
    if (query.classList.contains('fa-bars')) {
        query.classList.remove('fa-bars');
        query.classList.add('fa-xmark');
    }
    else{
            query.classList.remove('fa-xmark');
            query.classList.add('fa-bars');
    }
};
function iconSearch() {
    var query = document.getElementById('iconSearch');
    if (query.classList.contains('fa-magnifying-glass')) {
        query.classList.remove('fa-magnifying-glass');
        query.classList.add('fa-xmark');
    }
    else{
            query.classList.remove('fa-xmark');
            query.classList.add('fa-magnifying-glass');
    }
};

/*================/// Login And Signup Page ///==============*/
const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
if(signupBtn){
    signupBtn.onclick = (() => {
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
    });
}
    if(loginBtn){
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
    }
   if(signupLink){
    signupLink.onclick = (() => {
        signupBtn.click();
        return false;
    });
   }
/*================///User Dashboar Sidebar page ///==============*/
var lastState = false;

function userDashboardSidebarClicked() {
    if (lastState) {
        //open
        lastState = false
        document.getElementById("mySidebar").style.width = "320px";
        document.getElementById("Content_Wrapper").style.marginLeft = "320px";
        document.getElementById("userSideButton_wrapper").style.display = "none";
    } else {
        //close
        lastState = true
        document.getElementById("mySidebar").style.width = "0px";
        document.getElementById("Content_Wrapper").style.marginLeft = "0px";
        document.getElementById("userSideButton_wrapper").style.display = "block";
    }
}

//---------Sidebar menu Show Hide----------
$(document).ready(function () {
    $(".accordion-heading").click(function () {
        if ($(".accordion-body").is(':visible')) {
            $(".accordion-body").slideUp(600);
            $(".plusminus").text('+')
        }
        else {
            $(this).next(".accordion-body").slideDown(600);
            $(this).children(".plusminus").text('-');
        }
    });
});

/*================///Feedback page ///==============*/
//feedback open or close
var lastState = false;

function feedbackButtonClicked() {
if (!lastState) {
    //open
    lastState = true
    document.getElementById("feedback_Sidebar").style.cssText = "width: 380px; right:0px;";
    document.getElementById("feedback_btn").style.marginLeft = "380px";
    document.getElementById("sidebarButton_fb").style.right = "338px";
} else {
    //close
    lastState = false
    document.getElementById("feedback_Sidebar").style.cssText = "width: 0px; right:-18px;";
    document.getElementById("feedback_btn").style.marginLeft = "0px";
    document.getElementById("sidebarButton_fb").style.right = "-40px";
}
}
//-----feedback Details Btn
function feedbackVisible() {
if (document.getElementById('feedback').style.display == 'none') {
    document.getElementById('feedback').style.display = 'flex';
    document.getElementById('feedback_details').style.display = 'none';
}
else {
    document.getElementById('feedback').style.display = 'none';
    document.getElementById('feedback_details').style.display = 'block';
}
}
/*================///Feedback End ///==============*/



/*================///Cookies page ///==============*/
//----Check Box Show Hide
function myCheckboxbtn() {
    var checkBox = document.getElementById("myCheckboxbtn");
    var btn = document.getElementById("btn_show");
    if (checkBox.checked == true) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}
function myCheckboxbtn1() {
    var checkBox = document.getElementById("myCheckboxbtn1");
    var btn = document.getElementById("btn_show");
    if (checkBox.checked == true) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}
function myCheckboxbtn2() {
    var checkBox = document.getElementById("myCheckboxbtn2");
    var btn = document.getElementById("btn_show");
    if (checkBox.checked == true) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}
//-----Cookies Details Btn
function switchVisible() {
    if (document.getElementById('Cookies').style.display == 'none') {
        document.getElementById('Cookies').style.display = 'flex';
        document.getElementById('Cookies_details').style.display = 'none';
    }
    else {
        document.getElementById('Cookies').style.display = 'none';
        document.getElementById('Cookies_details').style.display = 'block';
    }
}
//-----Cookies Text Show hide
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("actives");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
/*================///Cookies page End Section///==============*/



/*================///Sidebar Tab Content Change///==============*/
//----Tab button content show hide
function openCity(evt, cityName) {
    var i, tab_cookises_tabcontent, tablinks;
    tab_cookises_tabcontent = document.getElementsByClassName("tab_cookises_tabcontent");
    for (i = 0; i < tab_cookises_tabcontent.length; i++) {
        tab_cookises_tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

/*==============///Sidebar Tab Content Change End///=============*/



































//-------hide than show------btn(#show)----show(.menu)
$(document).ready(function () {
    $('#show').click(function () {
        $('.menu').toggle("slide");
    });
});

/*
<div class="toggle"></div>

.toggle{
    height:48px;
    width:48px;
    margin-top: 20px;
    float: left;
    background-image:url("../images/icon/menu-icon.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
.toggle.expanded{
    position: absolute;
    margin-left: 250px;
    margin-top: 32px;
    transition: 2s;
    height:20px;
    width:20px;
    background-image:url("../images/icon/left-arrow.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

//-----image button hide show---div-btn(.toggle)---show(.content)
$(document).ready(function(){
var $content = $(".content").hide();
$(".toggle").on("click", function(e){
    $(this).toggleClass("expanded");
    $content.slideToggle();
});
});
*/
//-------------

// $('#click_advance').click(function() {
//     $('#display_advance').toggle('1000');
//     $("i", this).toggleClass("fa-solid fa-chevron-left fa-solid fa-align-left");
// });

