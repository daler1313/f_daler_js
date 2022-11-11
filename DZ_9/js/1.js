function day(n, lang= {
    'ru':['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота','Воскресенье'],
    'en':['M','Tu','Wed','Td','Fri','Sat','San'],
     }){
    console.log (lang['ru'][n-1]);
 }
 day(3);