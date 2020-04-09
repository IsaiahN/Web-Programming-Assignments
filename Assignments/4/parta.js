	function loopHours() {
		var n 	  		= 1;
		var hours 		= 0;
		var total 		= 0;
		var hourly_wage = 15;
		var table = document.getElementById("employees");
			while (hours >= 0) {
				hours = prompt("Employee #" + n + ":\nEnter Their Hours This Week:");
				if (isNaN(hours)) {
					alert("Enter a valid number (Integers)");
					
				} else {
				
					var weekly_pay
					if (hours > 40) {
						hours_overflow 	= hours - 40;
						weekly_pay 		= (hourly_wage * 40) + ((hourly_wage * 1.5) * hours_overflow);
						
					}
					else if (hours > 0) {
						weekly_pay 		= (hourly_wage * hours);
					} else {
					break;
					}
					
					  total += weekly_pay;
					  var employee 		 = table.insertRow();
					  var index 		 = employee.insertCell(0);
					  var no_hours 		 = employee.insertCell(1);
					  var week_pay 		 = employee.insertCell(2);
					  index.innerHTML 	 = n;
					  no_hours.innerHTML = hours + " hours";
					  week_pay.innerHTML = "$" + parseFloat(weekly_pay);
					  n++;
				
				}
			}
			
			document.getElementById("total").innerHTML = "Total Pay: $" +parseFloat(total);
		}
		window.addEventListener('load', function () {
			loopHours();
		});
		