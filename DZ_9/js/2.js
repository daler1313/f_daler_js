function raz(a,b){
    if(a<=1 && b>=3){
        a+=b
        console.log("Сумма переменных ровна: ",a) 
    }
    else{
        a-=b
        console.log("Разность переменных ровна:",a) 
    }
}
raz(1,3)