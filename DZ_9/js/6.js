function df(sar =[]){
    for(var i= 0;i<sar.length ;i++){
        if (sar[i] > 3 && sar[i] < 10) {
            document.write(sar[i]+'<br>');
        }
    }
}
df([3,4,5,6,4])