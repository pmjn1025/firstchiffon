<?php
//중요!!!!!!!: 세션을 시작하기 전에 항상 session_start를 해야한다. 즉 session과 관계있는 모든 곳에서 반드시 제일 위에 아래와 같이
//php 테그안에 session_start();를 선언하고 세션을 활용해야만한다.
// Start the session
session_start();


include $_SERVER['DOCUMENT_ROOT']."/db.php";

if(isset($_SESSION['id'])){
    
    echo "<h5>{$_SESSION['id']} 님 환영합니다.</h5>";

    }else{
    echo "<script>alert('로그인 해주세요.'); history.back();</script>";
} 


$buyername =$_POST['buyername'];
$phonenumber =$_POST['phonenumber'];
$title =$_POST['title'];
$totalmoney = $_POST['totalmoney'];
$zip =$_POST['zip'];
$addr1 =$_POST['addr1'];
$addr2 =$_POST['addr2'];
$content =$_POST['content'];

// 총금액은 여기서 계산해서 db에 저장하자

echo $buyername;
echo "<br>";
echo $phonenumber;
echo "<br>";
echo $title;
echo "<br>";
echo $totalmoney;
echo "<br>";
echo $zip;
echo "<br>";
echo $addr1;
echo "<br>";
echo $addr2;
echo "<br>";
echo $content;
echo "<br>";

// echo $id;
// echo "<br>";
// echo $category;
// echo "<br>";
// echo $title;
// echo "<br>";
// echo $subtitle;
// echo "<br>";
// echo $price;
// echo "<br>";
// echo $quantity.'개';
// echo "<br>";
// echo $size;
// echo "<br>";
// echo $color.'색상';
// echo "<br>";
// echo $img;
// echo "<br>";
// echo $totalmoney;
// echo "<br>";

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://service.iamport.kr/js/iamport.payment-1.1.5.js"></script>
    <title>테스트 페이지</title>
</head>

<body>


    <div id="divBtnDelete" style="display: none;">
        <p>아임 서포트 결제 모듈 테스트 해보기</p>
        <button id="check_module" type="button">아임 서포트 결제 모듈 테스트 해보기</button>
    </div>


    <script>
    // 자동 버튼 클릭

    // $(document).ready(function(){
    // 		$("#tmpBtn").trigger('click');
    // 		// 또는 $("#tmpBtn").click();
    // 	});


    $(document).ready(function() {
        $("#check_module").trigger('click')
        var IMP = window.IMP; // 생략가능
        IMP.init('imp04795706');
        // 'iamport' 대신 부여받은 "가맹점 식별코드"를 사용
        // i'mport 관리자 페이지 -> 내정보 -> 가맹점식별코드
        IMP.request_pay({
            pg: 'inicis', // version 1.1.0부터 지원.
            /* 
                'kakao':카카오페이, 
                html5_inicis':이니시스(웹표준결제)
                    'nice':나이스페이
                    'jtnet':제이티넷
                    'uplus':LG유플러스
                    'danal':다날
                    'payco':페이코
                    'syrup':시럽페이
                    'paypal':페이팔
                */
            pay_method: 'card',
            /* 
                'samsung':삼성페이, 
                'card':신용카드, 
                'trans':실시간계좌이체,
                'vbank':가상계좌,
                'phone':휴대폰소액결제 
            */
            merchant_uid: 'merchant_' + new Date().getTime(),
            /* 
                merchant_uid에 경우 
                https://docs.iamport.kr/implementation/payment
                위에 url에 따라가시면 넣을 수 있는 방법이 있습니다.
                참고하세요. 
                나중에 포스팅 해볼게요.
             */
            name: '<?php echo $title?>',
            //결제창에서 보여질 이름
            amount: <?php echo $totalmoney?>,
            //가격 
            //buyer_email: 'iamport@siot.do',
            buyer_name: '<?php echo $buyername?>',
            buyer_tel: '<?php echo $phonenumber?>',
            buyer_addr: '서울특별시 강남구 삼성동',
            buyer_postcode: '<?php echo $zip?>',
            m_redirect_url: 'https://www.yourdomain.com/payments/complete'
            /*  
                모바일 결제시,
                결제가 끝나고 랜딩되는 URL을 지정 
                (카카오페이, 페이코, 다날의 경우는 필요없음. PC와 마찬가지로 callback함수로 결과가 떨어짐) 
                */
        }, function(rsp) {
            console.log(rsp);
            if (rsp.success) {
                var msg = '결제가 완료되었습니다.';
                msg += '고유ID : ' + rsp.imp_uid;
                msg += '상점 거래ID : ' + rsp.merchant_uid;
                msg += '결제 금액 : ' + rsp.paid_amount;
                msg += '카드 승인번호 : ' + rsp.apply_num;
                // 해당 상품번호 검색해서 컬럼삭제하는 코드 만들기.
                // 결제완료페이지
                location.href = 'viewhomelogin.php';
            } else {
                var msg = '결제에 실패하였습니다.';
                msg += '에러내용 : ' + rsp.error_msg;
                location.href = 'viewhomelogin.php';

            }
            alert(msg);
        });
    });
    </script>
</body>

</html>