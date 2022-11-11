function as (arr=[]){
    for (var i = 0; i < arr.length; i++) {
        if (arr[i] == 'сб' || arr[i] == 'вс') {
            document.write(arr[i] + '<b>' + ' ');
        } else {
            document.write(arr[i] + ' ');
        }
    }
}

as(['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'])