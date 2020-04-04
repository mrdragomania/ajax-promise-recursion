<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="../js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<button type="button" onclick="sendRequest()">Send me</button>
</body>
<script>
	let arrayOfCheckedItems = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	let length = (arrayOfCheckedItems.length) - 1;
	function sendRequest() {
		
		ajaxRequest();
		// let length = (arrayOfCheckedItems.length);
		// let lengthInverse = 0;

		// let interval = setInterval(() => {
		// 	if(lengthInverse === length)  {
		// 		clearInterval(interval);
		// 		throw new Error;
		// 	}
			
		//     ++lengthInverse;
		// }, 500);

		
	}

	function ajaxRequest() {

		let promise = new Promise(function(resolve, reject) {
			$.ajax({
		        type: 'POST',
		        url: "looper.php",
		        data: {data: arrayOfCheckedItems[length]}
		    }).done(() => {
		    	// console.log(length);
		    	setTimeout(() => {
		    		resolve();
		    	}, 500);
		    });
		});
		promise.then(
			() => {
				if(length !== -1) {
					console.log(length);
					--length;
					ajaxRequest();
				}
			},
			() => {}
		);
		// console.log(test);
		// $.ajax({
	 //        type: 'POST',
	 //        url: "looper.php",
	 //        data: {data: test[length]}
	 //    }).done(function(data) {
	 //    	setTimeout(() => {
	 //    		if((length - 1) > -1) {
		//     		--length
		//     		ajaxRequest(length);
		//     	}
	 //    	}, 500);
	 //    	console.log(length);
	 //        // console.log(JSON.parse(data));
	 //    }).fail(function(data) {
	 //        // console.log(JSON.parse(data));
	 //    }).always(function(data) {

	 //    });
	}
</script>
</html>