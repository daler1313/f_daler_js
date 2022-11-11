
function sa(arr = [[1, 2, 3], [4, 5], [6]]){
    var sum;
    for(var i =0;i<arr.length;i++){
        for(var j =0 ; j<arr.length;j++){
            sum+=arr[i][j];
        }
    }
    console.log(sum)
    
}
sa()

