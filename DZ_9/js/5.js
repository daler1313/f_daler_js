function sum(str = [1,2,3,4]){
    let b = str[0];
    for(var i = 1; i<str.length;i++){
        b = b*str[i];
       
    }
    console.log(b);

}
sum([2,3,4,5])