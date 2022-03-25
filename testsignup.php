<!DOCTYPE html>
<html lnag="ko">
    <head>
        <meta charset="UTF-8">
        <title>네이버 : 회원가입</title>
        <link rel="stylesheet" href="testsignup.css">
        
    </head>
    <body>
        
        <!-- wrapper -->
        <div id="wrapper">

            <!-- content-->
            <div id="content">
                <!-- ID -->
                <div>                   
                    <input type="text" id="id" name="id" class="text-field" placeholder="아이디">                                    
                    <span class="error_next_box"></span>
                </div>

                <!-- PW1 -->
                <div>
                    <input type="password" name="password" id="password" class="text-field" placeholder="비밀번호">   
                    <span class="error_next_box"></span>
                </div>

                <!-- PW2 -->
                <div>
                <input type="password" name="repassword" id="repassword" class="text-field" placeholder="비밀번호 확인">   
                <span class="error_next_box"></span>
                </div>

                <!-- NAME -->
                <div>
                <input type="text" name="name" id="name" class="text-field" placeholder="이름">                                    
                <span class="error_next_box"></span>
                </div>

               

                <!-- EMAIL -->
                <div>
                <input type="text" name="email" id="email" class="text-field" placeholder="이메일">                                    
                <span class="error_next_box"></span>
                </div>

                <!-- JOIN BTN-->
                <div class="btn_area">
                    <button type="button" id="btnJoin">
                        <span>가입하기</span>
                    </button>
                </div>

                

            </div> 
            <!-- content-->

        </div> 
        <!-- wrapper -->
    <script src="testsignup.js"></script>
    </body>
</html>