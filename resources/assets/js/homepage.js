$(document).ready(function(){

   $('.row_bar').click(function(){
      $(this).children('.hidden_menu').toggle();
   });

   $('.modify_btn').click(function(){
      var rows = $(this).parents('.row_bar').find('.row_itms').not('.id').not('.actions');

      var fieldsToFill = $('#modify_form_cnt').find('.data_cnt');
      //make a loop for each row of the table
      rows.each(function(){
         var className = $(this).attr('class');
         var textToPass = $(this).text();

         fieldsToFill.each(function(){
            if(className.includes($(this).attr('id'))){
               //check if the value has the symbol € and remove it
               if(textToPass.includes('€')){
                  textToPass = textToPass.replace("€", "");
               }
               $(this).val(textToPass);
            }
         });
      });

      $('#modify_form_cnt').show();
      $('.actions_itms').css('pointer-events', 'none');
   });

   $('#esc_btn').click(function(){
      $('#modify_form_cnt').hide();
      $('.actions_itms').css('pointer-events', 'auto');
   });
});
