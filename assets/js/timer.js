
var countdown = new Date("Jan 5,2020 13:00:00").getTime();

var x = setInterval(
		function(){
			var now = new Date().getTime();
			var distance = countdown - now;
			var days = Math.floor(distance/(1000*60*60*24));
			var hours = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
			var minutes = Math.floor((distance%(1000*60*60))/(1000*60));
			var seconds = Math.floor((distance%(1000*60))/(1000));

			document.getElementById("timer").innerHTML = "<i class='fas fa-clock'></i> Time Left: "+days+ ":"+ hours+":"+ minutes+":"+ seconds ;
			document.getElementById("start-btn").disabled = true;
			if(distance < 0){
				clearInterval(x);
				document.getElementById("timer").innerHTML = "Start Contest";
				document.getElementById("start-btn").disabled = false;
			}

		},1000);




	