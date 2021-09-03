<?php
/**
* Template Name: Contact Page*
*
*/
get_header(); ?>





  <form class="contact-form form-default"  method="POST" action="javascript:void(null);">
      <input type="hidden" name="project_name" value="NAME">
      <input type="hidden" name="admin_email" value="EMAIL">
      <input type="hidden" name="form_subject" value="URLSITE">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group field">
                <input type="text" name="name" class="form-control" id="inputName" value=""  placeholder="Your Name">
            </div>
            <div class="form-group field">
                <input type="text" name="text" class="form-control phone" id="inputPhone" required="" value="" placeholder="Your Phone (required)">
            </div>
            <div class="form-group field">
                <input type="text" name="email" class="form-control" id="inputEmail" value="" placeholder="Your Email">
            </div>
            <div class="form-group field">
                <input type="text" name="subject" class="form-control" id="inputSubject" value="" placeholder="Subject">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <textarea name="message" class="form-control" rows="7" placeholder="Your Message" id="textareaMessage"></textarea>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button  type="submit" name="send" class="btn">SEND MESSAGE</button>
    </div>
  </form> 
  
  
    <!-- //// MODAL //// --> 
    <div id="saccsse" action="" method="post" style="display: none; border-radius: 6px;" >
        <div class="content_modal cont__hill">
          
          <h3>  Thanks! We will contact you. </h3>
		
        </div>
    </div>

  
  
  
 <script>

      $("[name=send]").click(function () {

          $(":input.error").removeClass('error');
//          $(":select.error").removeClass('error');
          $(":input").parent('.field').removeClass('border_dashed');
          $("select").parent('.field').removeClass('border_dashed');
     
          $(".allert").remove();
          var error;
          var btn = $(this);
          var ref = btn.closest('form').find('[required]');
          var msg = btn.closest('form').find('input, textarea, select');


          var send_btn = btn.closest('form').find('[name=send]');

           $(ref).each(function() {
              if ($(this).val() == '') {
                  var errorfield = $(this);
                  $(this).addClass('error').parent('.field') /*.append('<span class="allert">Fill this field</span>') */;
                  error = 1;
                  $(":input.error:first");
                  return;
              } else {
                  var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                  if ($(this).attr("type") == 'email') {
                      if(!pattern.test($(this).val())) {
  //                        $("[name=email]").val('');
                          $(this).addClass('error').parent('.field') /*.append('<span class="allert">Enter a valid e-mail</span>') */;
                          error = 1;
                          $(":input.error:first");
                      }
                  }
                  var patterntel = /^()[0-9]{9,18}/i;
                  if ( $(this).attr("type") == 'tel') {
                      if(!patterntel.test($(this).val())) {
  //                        $("[name=phone]").val('');
                          $(this).addClass('error').parent('.field') /*.append('<span class="allert">Enter a valid phone number</span>') */;
                          error = 1;
                          $(":input.error:first");
                      }
                  }

                
              }

  });

          if (!(error == 1)) {
              $(send_btn).each(function () {
                  $(this).attr('disabled', true);
              });
              $(function () {
                  var form = $(this).closest('form'),
                      name = form.find('.name').val();
                  if ($(this).val() == '') {


                      $.ajax({
                          type: 'POST',
                          url: '/send.php',
                        
              
                          data: msg,
                          success: function() {
                              $('form').trigger("reset");
                              setTimeout(function(){  $("[name=send]").removeAttr("disabled"); }, 1000);
                            
//                             window.location.href = '/success';
                            
                              $.fancybox.open({
                                src  : '#saccsse',
                                type : 'inline',
                                'autoScale' : false,
                                'padding' :0,
                                 opts : {
                                    afterShow : function( instance, current ) {
                                        console.info( 'done!' );
                                    }
                                },
        

                                'onComplete' : function(){
                                    $('#fancybox-content').css({height:'800px',width:'675px'});
                                }
                               });

                          },
                          error: function(xhr, str) {
                              alert('ERROR: ' + xhr.responseCode);
                          }
                      });

                  }


              });
          } ;


          return false;
      });



 $('[class*="phone"]').mask("+1(999) 999-9999");
  
  
   
 </script>
   

<?php get_footer();
