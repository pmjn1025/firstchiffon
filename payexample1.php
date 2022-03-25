
<!DOCTYPE html>
<html>
    <head>
        <title>INIpayMobile</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta name="ROBOTS" content="ALL" />
    </head>
    <body onload="genOid()">
        <script type="text/javascript">
			function genOid() { 
				var f = document.payForm;
				f.P_OID.value = "inicisTestOid"+Date.now();
			}
        
           function paySubmit(method){
                var actionUrl = "https://mobile.inicis.com/smart/payment/";
                
                var f = document.payForm;
                
                f.action = actionUrl;

				//가맹점에서 인증/승인 처리할 가맹점 URL 설정
                //f.P_NEXT_URL.value = "";
                f.P_INI_PAYMENT.value = method;
				
                if(method == "CARD"){
                    if(navigator.platform == "iPhone"){
                        f.P_RESERVED.value += "&app_scheme=naversearchapp://";       //아이폰 앱에서 결제 진행하는 경우 앱 스키마 값 설정(사용하는 앱이 네이버 앱인 경우에 설정한 값)
                    }
                } else if(method == "BANK"){
                    if(navigator.platform == "iPhone"){
                        f.P_RESERVED.value += "iosapp=Y&app_scheme=naversearchapp://";   //아이폰 앱에서 결제 진행하는 경우 설정(사용하는 앱이 네이버 앱인 경우에 설정한 값)
                    }
                } else if(method == "VBANK"){
					//가상계좌 입금통보 받을 URL 설정
                    f.P_NOTI_URL.value = "";
                } else if(method == "MOBILE"){
					//상점 계약 여부에 따른 설정값 상이
                    f.P_HPP_METHOD.value = "1";
                }
                //alert(f.P_NEXT_URL.value);
                f.submit();
            }
        </script>
        <style>
            body { margin: 0 auto; }
            .container { width:100%; margin:0 auto;}
            .header { width:100%; height:50px; color:#fff; background:#000; line-height:50px; text-size:20px; text-align:center; }
            .under-line { border-bottom:solid #ccc 1px; }
            ul {list-style-type:none; text-align:center; padding:0; }
            ul li { margin-top:10px; }
            ul li input { width:80%; height:55px; }
			.orderInfo {padding:20px 20px; border:1px solid #ccc; margin:20px auto; width:80%; text-align:center;}
			.orderInfo input { width:50%; line-height:27px; height:27px; margin-bottom:5px; }
        </style>
		<form name="payForm" id="payForm" method="post" target="_self" accept-charset="euc-kr">
			<div id="container">
				
				


				
				<!-- readonly 입력 필드가 읽기 전용임을 명시 -->
				<div class="orderInfo">
					결제금액  : <input type="text" name="P_AMT" value="1000" /> <br/>
					주문번호  : <input type="text" name="P_OID" value="" /> <br/>
					이 메 일 : <input type="text" name="P_EMAIL" value="" /> <br/>
					사용자명  : <input type="text" name="P_UNAME" value="테스트 사용자명" /> <br/>
					상 품 명 : <input type="text" name="P_GOODS" value="테스트 상품명" />
				</div>

				<div class="under-line"></div>

				<div id="paymentBtn">
					<ul>
						<li><input type="button" id="wcard" value="신용카드" onclick="paySubmit('CARD');"/></li>
						<li><input type="button" id="bank" value="계좌이체" onclick="paySubmit('BANK');"/></li>
						<li><input type="button" id="hpp" value="휴대폰" onclick="paySubmit('MOBILE');"/></li>
						<li><input type="button" id="vbank" value="가상계좌" onclick="paySubmit('VBANK');"/></li>
					</ul>
				</div>
			</div>

			
			<input type="hidden" name="P_MID" value="INIpayTest" />
			
			<input type="hidden" name="P_NEXT_URL" value="https://www.inicis.com/Support_new/inipaymobile/Demo_INIpayResult.php" />
			<input type="hidden" name="P_NOTI_URL" value="https://www.inicis.com/Support_new/inipaymobile/Demo_INIpayVBResult.php" />
			<input type="hidden" name="P_HPP_METHOD" value="1" />
			<input type="hidden" name="P_RESERVED" value="" />
			<input type="hidden" name="P_INI_PAYMENT" value="" />
        </form>
    </body>
</html>

