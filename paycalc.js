function calc() 
	{
   		var hrlyPay = document.getElementById('hourly_wage').value;
    	var hours = document.getElementById('weekly_hours').value;
 		var overtimeHours = hours - 40;
		var overtimeHrlyPay = hrlyPay * 1.5;
		var overtimePay = overtimeHours * overtimeHrlyPay;
		var regularPay = (hrlyPay * 40);
		var tax = 0.3;
		var salary;

		if (hours > 40)
		{
			var pay = regularPay + overtimePay;
			salary = regularPay*52;
			var wageTax = pay * tax;
			afterTaxes = pay - wageTax;
		}
		else if (hours <= 40)
		{
			pay = 0;
			regularPay = hrlyPay*hours;
			salary = regularPay*52;
			wageTax = regularPay * tax;
			afterTaxes = regularPay - wageTax;
		}

    		var html = 	
    		'Your total pay is $' + pay.toFixed(2) + 
			'</br> Your overtime pay is $' + overtimePay.toFixed(2) + 
			'</br> Your regular pay is $' + regularPay.toFixed(2) + 
			'</br> Your salary is $' + salary.toFixed(2) + ' without overtime calculated ' +
			'</br> Your pay minus taxes is roughly $' + afterTaxes.toFixed(2);
	
    		document.getElementById('result').innerHTML = html;
	}
	document.getElementById('say').addEventListener('click', calc);