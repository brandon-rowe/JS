function tipCalc() 
	{
   		var tb = document.getElementById('total_bill').value;
    	var tp = document.getElementById('tip_percentage').value;
 		var percentage = tp / 100;
 		var tip = percentage * tb;

    	var html = 	
    	'</br>Your total bill is $' + tb.toFixed(2);
		'</br> Your tip is $' + tip.toFixed(2);
	
    	document.getElementById('tip').innerHTML = html;
	}
	document.getElementById('som').addEventListener('click', tipCalc);