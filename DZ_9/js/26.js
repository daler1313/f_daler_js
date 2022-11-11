function as(a ,b){
    let t = true;
    let f = false;
    a+=b;
    if(a>10){
        console.log(t);
        return t;
    }
    else{
        console.log(f);
        return f;
    }
}
as(5,6);