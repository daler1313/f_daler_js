function fda(arr = ['a']){
    var str = 'a';
    for(var i =0;i<7;i++){
        arr.push(str);
        str = str + 'a';
    }
    console.log(arr);
}
fda()

