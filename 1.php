<!doctype html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>

<body>
    <a href="javascript:void(0);" onclick="goActEvent()">ajax로 값 전달</a>
    <button type="button" onclick="event123()">post</button>

    <input type="text" name="id" id="id" class="registerform" value="">

    <script>
    function event123() {

        //localStorage.setItem('event1', 'event_ok');
        location.href = '/3.php';

    }

    <
    button type = "button"
    onclick = "event123()" > post < /button>

    // ajax로 값 전달
    function goActEvent() {
        var input = document.getElementById("id").value;
        $.ajax({
            url: '2.php',
            data: {
                param1: '10',
                param2: '20',
                param3: input
            },
            type: 'POST',
            dataType: 'json',
            success: function(result) {
                if (result.success == false) {
                    alert(result.msg);
                    return;
                }
                alert(result.data);
            }
        });
    }
    </script>
</body>

</html>