jQuery(function(){
  var j = jQuery;
  var addInput = '#kuantitas1';
  var n = 1;
  j(addInput).val(n);
  j('#plus1').on('click', function(){
    j(addInput).val(++n); //penambahan value jika tekan +
  })

  j('#min1').on('click', function(){
      if (n >= 2) {
      j(addInput).val(--n); //pengurangan value jika tekan -
    }
  });

});
