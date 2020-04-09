		var limit = 10;
		var secret_number = Math.floor(Math.random() * 100 + 1);
	
		window.addEventListener('load', function () {
			var time = new Date();
			var hours = time.getHours();
			if (hours > 12) {hours -= 12;}
			document.getElementById("time").innerHTML = "<strong>Time Now is " + hours + ":" + time.getMinutes() + "</strong>";
		
			
					});

			function guess() {
			
				var time = new Date();
				var hours = time.getHours();
				if (hours > 12) {hours -= 12;}
				document.getElementById("time").innerHTML = "<strong>Time Now is " + hours + ":" + time.getMinutes() + "</strong>";
				
						if (limit > 0) {
							var guess = document.getElementById("guess").value;
							if (isNaN(guess)) {
							alert(guess + " is not a number. " + limit + " guesses are left!");
							limit--;
							return false;
							}
							else if (guess > secret_number) {
								result = "Guess is too high. " + limit + " guesses are left!"; 
							}
							else if (guess < secret_number) {
								result = "Guess is too low. " + limit + " guesses are left!"; 
							} else {
								result = "You got it! The Secret Number is <strong>" + secret_number + "</strong><br> Try Guessing My New Number!"; 
								secret_number = Math.floor(Math.random() * 100 + 1);
								limit = 11;
							}
							limit--;
						}
						else {
						   result ="<strong>Game Over</strong> - Too Many Guesses. <br> Secret Number was " + secret_number + "<br>Try Guessing my New Number!";
						   limit = 10;
						   secret_number = Math.floor(Math.random() * 100 + 1);
						}
				document.getElementById("result").innerHTML = result;
			}