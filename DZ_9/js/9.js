let arr = ['пн', 'вт', 'ср', 'чт', 'пт','сб', 'вс'];
var day = date('N');

for ( var d in arr){
    if (d == arr[day-1]) 
    document.write('<i>'+d+'</i>');
    else
    document.write (d+' ');
} 