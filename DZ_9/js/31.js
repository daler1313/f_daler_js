 let str = ('var_text_hello');
 function dal(str) {
 let arr = str.split('_');
 for(let i = 1; i < arr.length; i++){
 		arr[i] = (arr[i]);
 	}
 	return arr.join('');
 }

  alert(dal(str));
