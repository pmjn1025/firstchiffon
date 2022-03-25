/*변수 선언*/
//#이 이거 css할때 아이디를 나타내는 기호이다. 따라서 intpt type에 name이아니라 id를 입력한다.
//javascript에서 input값을 받아올때 키값으로 name을 줄수 없나??
//name은 id와는 다르게 중복사용이 가능하지만 id나 class같이 CSS에는 접근할 수 없다는 특징을 가지고 있다???? 그럼 js도???

var id = document.querySelector('#id');
var pw1 = document.querySelector('#password');
var pwMsg = document.querySelector('#alertTxt');
var pwImg1 = document.querySelector('#password_img1');
var pw2 = document.querySelector('#repassword');
var pwImg2 = document.querySelector('#repassword_img1');
var pwMsgArea = document.querySelector('.int_pass');
var userName = document.querySelector('#name');
var email = document.querySelector('#email');
var error = document.querySelectorAll('.error_next_box');

//순서대로 배열을 지정했다. 이 순서대로 회원가입 틀을 만들자! 

/*이벤트 핸들러 연결*/

id.addEventListener("focusout", checkId);
pw1.addEventListener("focusout", checkPw);
pw2.addEventListener("focusout", comparePw);
userName.addEventListener("focusout", checkName);
email.addEventListener("focusout", isEmailCorrect);


/*콜백 함수*/

function checkId() {
    var idPattern = /[a-zA-Z0-9_-]{5,20}/;
    if(id.value === "") {
        error[0].innerHTML = "필수 정보입니다.";
        error[0].style.display = "block";
    } else if(!idPattern.test(id.value)) {
        error[0].innerHTML = "5~20자의 영문 소문자, 숫자와 특수기호(_,-)를 사용해 주세요..";
        error[0].style.display = "block";
    } else {
        error[0].innerHTML = "적합한 아이디입니다.";
        error[0].style.color = "#000";
        error[0].style.display = "block";
    }
}

function checkPw() {
    var pwPattern = /[a-zA-Z0-9~!@#$%^&*()_+|<>?:{}]{3,16}/;
    if(pw1.value === "") {
        error[1].innerHTML = "필수 정보입니다.";        
        error[1].style.display = "block";
    } else if(!pwPattern.test(pw1.value)) {
        error[1].innerHTML = "3~16자 영문 대 소문자, 숫자, 특수문자를 사용하세요.";       
        error[1].style.display = "block";
       
    } else {
        error[1].style.display = "적합한 비밀번호입니다.";
       
    }
}

function comparePw() {
    if(pw2.value === pw1.value) {        
        error[2].style.display = "none";
    } else if(pw2.value !== pw1.value) {
       
        error[2].innerHTML = "비밀번호가 일치하지 않습니다.";
        error[2].style.display = "block";
    } 

    if(pw2.value === "") {
        error[2].innerHTML = "필수 정보입니다.";
        error[2].style.display = "block";
    }
}

function checkName() {
    var namePattern = /[a-zA-Z가-힣]/;
    if(userName.value === "") {
        error[3].innerHTML = "필수 정보입니다.";
        error[3].style.display = "block";
    } else if(!namePattern.test(userName.value) || userName.value.indexOf(" ") > -1) {
        error[3].innerHTML = "한글과 영문 대 소문자를 사용하세요. (특수기호, 공백 사용 불가)";
        error[3].style.display = "block";
    } else {
        error[3].style.display = "none";
    }
}

function isEmailCorrect() {
    var emailPattern = /[a-z0-9]{2,}@[a-z0-9-]{2,}\.[a-z0-9]{2,}/;

    if(email.value === ""){ 
        error[4].innerHTML = "필수 정보입니다.";
        error[4].style.display = "block"; 
    } else if(!emailPattern.test(email.value)) {
        error[4].innerHTML = "이메일 형식에 맞춰 주세요.";
        error[4].style.display = "block";
    } else {
        error[4].style.display = "none"; 
    }

}

