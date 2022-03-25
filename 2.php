<?php

	try {
		
		## param1
		$param1 = $_POST['param1'];
		if(!$param1) {
			throw new exception('param1 값이 없습니다.');
		}

		## param2
		$param2 = $_POST['param2'];
		if(!$param2) {
			throw new exception('param2 값이 없습니다.');
		}

		$param3 = $_POST['param3'];

		## 합
		$sum = $param1 + $param2;

		## 마무리
		$result['success']	= true;
		$result['data']		= "{$param1} 더하기 {$param2} 는 {$sum}입니다. 그리고 벨류값은 {$param3}입니다.";


	} catch(exception $e) {
		
		$result['success']	= false;
		$result['msg']		= $e->getMessage();
		$result['code']		= $e->getCode();

	} finally {
	
		echo json_encode($result, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

	}
    ?>