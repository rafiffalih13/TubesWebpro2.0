function vlds(evt) {
  var even = evt || window.event;
  var karakter = even.keyCode || even.which;
  karakter = String.fromCharCode( karakter );
  var regex = /[0-9]|\./;
  if( !regex.test(karakter) ) {
    even.returnValue = false;
    if(even.preventDefault) even.preventDefault();
  }
};
