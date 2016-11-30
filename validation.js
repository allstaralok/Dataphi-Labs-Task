
$(function () {
    
    $.validator.setDefaults({
        errorPlacement: function (error, element) {
      if (element.prop('type') === 'text') {
          
        error.insertAfter(element.parent()).addClass('errot');
      } else {
        error.insertAfter(element);
      }
    }
    });
    
  $("#newpatient").validate({
    rules: {
      first_name: {
        required: true,
        minlength: 3,
        lettersonly:true,
        nowhitespace: true
      },
      
      last_name: {
          required: false
      },
      
      age: {
          required: true,
          range: [1,122],
          digits: true
      },
      
      mobile:{
      
      required: true,
      digits: true,
      minlength: 10
      }
    }
    
  });

});