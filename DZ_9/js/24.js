function check(a) {
  for (var q=1; q<a.length; ++q) {
    if (a[q] == a[q-1]) {
      return 'да';
    }
  }
  
  
  return 'нет';
}
console.log(check([3, 2, 2, 12]));