let str = '123456';
function fd(str ) {
    str = str.split('');
    for (var i=0; i<str.length;i+=2){
        str.splice(i, 0, str.splice(i+1, 1))
    }
    
}
alert(dal(s))


