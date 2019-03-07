	
	var hours = 35;
	var hrlyPay = 20;
	var overtimeHours = hours - 40;
	var overtimeHrlyPay = hrlyPay * 1.5;
	var overtimePay = overtimeHours * overtimeHrlyPay;
	var regularPay = (hrlyPay * 40);
	if (hours > 40)
	{
		var pay = regularPay + overtimePay;
		document.write("Your overtime pay is " + pay);
	}
	else if (hours <= 40)
	{
		regularPay = hrlyPay*hours;
		document.write("Your regular pay is " + regularPay);
	}
	else
	{
		document.write("Please enter valid numbers.");
	}