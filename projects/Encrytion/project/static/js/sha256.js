function sha256Cipher() 
	{
   		var message = document.getElementById('sha256Inp').value;
   		var shift = Math.round(Math.random() * 25)
   		var encryptedMsg = ""
   		for (var i=0; i<message.length; i++)
   		{
    		// Get the character we'll be appending
    		var c = message[i];
    			// If it's a letter...
    		if (c.match(/[a-z]/i)) 
    			{
    				// Get its code
    				var code = message.charCodeAt(i);
    				// Uppercase letters
    				if ((code >= 65) && (code <= 90))
    					c = String.fromCharCode(((code - 65 + shift) % 26) + 65);
    				// Lowercase letters
    				else if ((code >= 97) && (code <= 122))
    					c = String.fromCharCode(((code - 97 + shift) % 26) + 97);
    			}
    		// Append
    		encryptedMsg += c;
		}

    	var html = 	
    	'</br>Your shift value was ' + shift + ' and your original message was, ' + 
    	message + '. Your encrypted message is ' + 
    	encryptedMsg;
	
    	document.getElementById('sha256').innerHTML = html;
	}
	document.getElementById('sha256Encrypt').addEventListener('click', sha256Cipher);