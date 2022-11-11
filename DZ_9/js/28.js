function da(arr = [1]){
    for(var i = 1;i<10;i++){
        var str ='';
        for(var j = 0;j<i;j++){
            str +=i;
        }
        arr.push(str)
    }
    console.log(arr);
}
da();
