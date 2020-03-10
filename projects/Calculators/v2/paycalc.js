function calc() 
	{
   		var hrlyPay = document.getElementById('hourly_wage').value;
		var hours = document.getElementById('weekly_hours').value;

		var overtimeHours, overtimeHrlyPay, overtimePay, regularPay, salary, pay;
		var tax = 0.27;

		if (hours > 40)
		{
			overtimeHours = hours - 40;
			overtimeHrlyPay = hrlyPay * 1.5;
			overtimePay = overtimeHours * overtimeHrlyPay;
			regularPay = (hrlyPay * 40);
			pay = regularPay + overtimePay;
			salary = pay*52;
			var wageTax = pay * tax;
			afterTaxes = pay - wageTax
			var html = 	
    		'</br>Your total pay is $' + pay.toFixed(2) + 
			'</br> Your overtime pay is $' + overtimePay.toFixed(2) + 
			'</br> Your regular pay is $' + regularPay.toFixed(2) + 
			'</br> Your salary is $' + salary.toFixed(2) + ' without overtime calculated ' +
			'</br> Your pay minus taxes is roughly $' + afterTaxes.toFixed(2);
		}
		else if (hours <= 40)
		{
			regularPay = hrlyPay*hours;
			pay = regularPay;
			salary = regularPay*52;
			wageTax = regularPay * tax;
			afterTaxes = regularPay - wageTax
			var html = 	
    		'</br>Your total pay is $' + pay.toFixed(2) + 
			'</br> Your regular pay is $' + regularPay.toFixed(2) + 
			'</br> Your salary is $' + salary.toFixed(2) + ' without overtime calculated ' +
			'</br> Your pay minus taxes is roughly $' + afterTaxes.toFixed(2);
		}
    		document.getElementById('result').innerHTML = html;
	}
	/*document.getElementById('calc').addEventListener('click', calc);*/