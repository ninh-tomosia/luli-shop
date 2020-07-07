$(document).ready(function () {

     var quantitiy = 1;
     $('.quantity-right-plus').click(function (e) {

          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($('#quantity').val());

          // If is not undefined

          $('#quantity').val(quantity + 1);


          // Increment

     });

     $('.quantity-left-minus').click(function (e) {
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($('#quantity').val());

          // If is not undefined

          // Increment
          if (quantity > 1) {
               $('#quantity').val(quantity - 1);
          }
          if (quantity < 1) {
               $('#quantity').val(1);
          }
     });

     $('#quantity').change(function (e) {
          var quantity = parseInt($('#quantity').val());
          if (quantity < 1) {
               $('#quantity').val(1);
          }
     });
     $('ul li a').click(function () {
          $('li a').parent().removeClass("active");
          $(this).parent().addClass("active");
     });

     function readURL(input) {
          if (input.files && input.files[0]) {
               var reader = new FileReader();

               reader.onload = function (e) {
                    $('#img-user').attr('src', e.target.result);
               }

               reader.readAsDataURL(input.files[0]);
          }
     }

     $("#inpImg").change(function () {
          readURL(this);
     });

     $("#inpName").change(function () {
          var name = document.getElementById("name-user");
          var value = $('#inpName').val();
          name.innerHTML = "";
          name.innerHTML = value;
     });

     $('#cf_password').change(function(){
          var cf_value = document.getElementById('cf_password');
          cf_value = cf_value.val();
          var ps_value = $('#password').val();
          var lb_cf = document.getElementById('lb_cf_pass');
          if(cf_value != ps_value){
               lb_cf.innerText = "Mật khẩu không đúng!";
          }else{
               lb_cf.innerText = "";
          }

     });
});

