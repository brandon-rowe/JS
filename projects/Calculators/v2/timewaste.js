function wastetime() 
	{
   		var task = document.getElementById('waste_task').value;
    	var minutes = document.getElementById('waste_min').value;
    	var hours = minutes/60
 		var weeklyTime = hours * 7
 		var monthlyTime = hours * 30
 		var yearlyTime = hours * 365

    	var html = 	
    	'</br>You waste ' + weeklyTime.toFixed(2) + ' hours per week, ' + 
    	monthlyTime.toFixed(2) + ' hours per month, and ' + 
    	yearlyTime.toFixed(2) + ' hours per year. Doing' + task;
	
    	document.getElementById('waste').innerHTML = html;
	}
	document.getElementById('time').addEventListener('click', wastetime);