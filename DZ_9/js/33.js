function as(n){
    var sum =0;
   for(var i =0;i<(a.toString().length);i++){
    sum=sum+parseInt(a.toString().substr(i,1));
   }
   if(sum>9){
    return as(sum )
   }else{
    return sum
   }
}
console.log(as(2134658))