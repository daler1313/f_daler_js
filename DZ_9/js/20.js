function da(str){
    if (str.substr(0, 7) == 'http://') {
	console.log('Да');
} else {
	console.log('Нет');
}

}

da('http://phphtml');
