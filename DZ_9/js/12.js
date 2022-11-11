function mima(a=[]){
    
var max = 1;
var min = 1;
for(var i = 0;i<a.length;i++){
    if (a[i]>max) max=a[i];
    if (a[i]<min) min=a[i];
}
console.log(max);
console.log(min);   
}
mima([2,5,8,9,7,1]);
