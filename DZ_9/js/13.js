function Arr(arr = []){
    var sr = 0;
    for(var i =0; i<arr.length;i++){
        sr+=arr[i];
    }
    sr = sr/arr.length;
    console.log(sr);
}
Arr([2,5,4,7,5,6])