jQuery(document).ready(function($){
     var $abouturl=$('.siteurl').val();
     
    //  if($abouturl=='')
    //  {
    //     $("#exampleModal").modal('show');
      
    //  }else if($abouturl=='about'){
    //       $("#aboutmodal").modal('show');
    //  }
    $(document).on('click','.firstmodalbtn',function(){
        var validated =  true;
        $('.newfirstmodal input').each(function(key,item){
            if($(item).val() == ''){
                validated = false;
                $(item).css('border','1px solid red');
               $( "<label class='error'>This field is required!</label>" ).insertAfter( $(item) );
            }else{
                validated = true;
            }
        });
        if(validated){
            $('.newfirstmodal').css({'visibility':'hidden','position':'absolute'});
            $('.firstmodalbtn').css({'visibility':'hidden','position':'absolute'});
            $('.newsecondmodal').show();
            $('.secondmodalbtn').show();
            $('.secondprogressbar').show();
            $('.firstprogressbar').css({'visibility':'hidden','position':'absolute'});
        }
    });    
    
        $(document).on('click','.secondmodalbtn',function(){
                    var validated =  true;
        $('.newsecondmodal input').each(function(key,item){
            if($(item).val() == ''){
                validated = false;
                $(item).css('border','1px solid red');
               $( "<label class='error'>This field is required!</label>" ).insertAfter( $(item) );
            }else{
                validated = true;
            }
        });
        console.log();
        if(validated){
              $('.newsecondmodal').hide();
             $('.secondmodalbtn').hide();
             $('.newthridmodal').show();
             $('.thirdmodalbtn').show();
             $('.secondprogressbar').hide();
             $('.thirdprogressbar').show();
        }
    });    
    
        $(document).on('click','.thirdmodalbtn',function(){
        $('#exampleModal').modal('hide');
        });    
    
    $(document).on('click','#menu-item-468 a,#menu-item-127 a',function(e){
        e.preventDefault();
         $("#aboutmodal").modal('show');
    });
    
    
    
    $(document).on('click','#move_steps',function(){
        var step = $(this).attr('data-step');
        var validated =  true;
        // if(step == 2){
            
        //     $('.first_step input').each(function(key,item){
        //         if($(item).val() == ''){
        //             validated = false;
        //             $(item).css('border','1px solid red');
        //         }else{
        //             validated = true;
        //         }
        //     });

        //     if(validated){
                
        //         $('.first_step').css({'visibility':'hidden','position':'absolute'});
        //         $('.firstprogressbar').css('width','66%');
        //         $('.second_step').show();
        //         $('#move_back').show();
        //         $('#move_steps').attr('data-step',3);
        //     }
            
        // }
        
        // if(step == 3){
            
        //     $('.second_step input').each(function(key,item){
        //         if($(item).val() == ''){
        //             validated = false;
        //             $(item).css('border','1px solid red');
        //         }else{
        //             validated = true;
        //         }
        //     });
            
             
            
        //     if(validated){
                
        //         $('.second_step').css({'visibility':'hidden','position':'absolute'});
        //         $('.firstprogressbar').css('width','100%');
        //         $('.3rd_step').show();
        //         $('#move_back').show();
        //         $('#move_back').attr('data-step',2);
        //         $('#move_steps').hide();
        //         $('#submit_form').show();
                
        //     }
            
        // }
        
        
        if(step == 2){
            
            $('.first_step input').each(function(key,item){
                var fullnamefield=$('.fullnamefield').val();
                var contactnamefield=$('.contactnamefield').val();
                var emailnamefield=$('.emailnamefield').val();
                if(fullnamefield== '' && emailnamefield=='' && contactnamefield==''){
                       validated = false;
                     $('.fullnamefield').css('border','1px solid red');
                     $('.contactnamefield').css('border','1px solid red');
                     $('.emailnamefield').css('border','1px solid red');
                }
                else if(fullnamefield== ''){
                    validated = false;
                    $('.fullnamefield').css('border','1px solid red');
                }else if(contactnamefield== ''){
                    validated = false;
                    $('.contactnamefield').css('border','1px solid red');
                }else if(emailnamefield== ''){
                    validated = false;
                    $('.emailnamefield').css('border','1px solid red');
                }else{
                    validated = true;
                }
            });

            if(validated){
                
                $('.first_step').css({'visibility':'hidden','position':'absolute'});
                $('.firstprogressbar').css('width','50%');
                $('.second_stepnew').show();
                $('#move_back').show();
                $('#move_steps').attr('data-step',3);
            }
            
        }
        
        if(step == 3){
            
            $('.second_stepnew input').each(function(key,item){
                if($(item).val() == ''){
                    validated = false;
                    $(item).css('border','1px solid red');
                }else{
                    validated = true;
                }
            });
            
             
            
            if(validated){
                
                $('.second_stepnew').css({'visibility':'hidden','position':'absolute'});
                $('.firstprogressbar').css('width','66%');
                $('.second_step').show();
                $('#move_back').show();
                $('#move_back').attr('data-step',3);
               $('#move_steps').attr('data-step',4);
                
            }
            
        }
        
        
        if(step == 4){
             $('.second_step input').each(function(key,item){
                if($(item).val() == ''){
                    validated = false;
                    $(item).css('border','1px solid red');
                }else{
                    validated = true;
                }
            });
            
             
            
            if(validated){
                
                $('.second_step').css({'visibility':'hidden','position':'absolute'});
                $('.firstprogressbar').css('width','100%');
                $('.3rd_step').show();
                $('#move_back').show();
                $('#move_back').attr('data-step',4);
                $('#move_steps').hide();
                $('#submit_form').show();
                
            }
          
            
        }
        
    });
    
    $(document).on('click','#move_back',function(){
        var step = $(this).attr('data-step');
        if(step == 1){
            
                $('.first_step').css({'visibility':'visible','position':'unset'});
                $('.firstprogressbar').css('width','33%');
                $('.second_stepnew').hide();
                $('#move_back').hide();
                $('#move_steps').attr('data-step',2);
        }else if(step == 2){
                $('.firstprogressbar').css('width','33%');
                $('.first_step').css({'visibility':'visible','position':'unset'});
                $('.second_stepnew').hide();
                $('#move_back').hide();
                $('#move_steps').attr('data-step',2);
                $('#submit_form').hide();
        }else if(step == 3){
                $('.firstprogressbar').css('width','50%');
                $('.second_stepnew').css({'visibility':'visible','position':'unset'});
                $('.second_step').hide();
                $('#move_back').attr('data-step',2);
                 $('#move_steps').attr('data-step',3);
                $('#submit_form').hide();
                 $('#move_steps').show();
        }else if(step == 4){
                $('.firstprogressbar').css('width','66%');
                $('.second_step').css({'visibility':'visible','position':'unset'});
                $('.3rd_step').hide();
                $('#move_back').attr('data-step',3);
                $('#move_steps').attr('data-step',4);
                $('#submit_form').hide();
                 $('#move_steps').show();
        }
        
    });
    
    
    
    $(document).on('click','#submit_form',function(){
        var ele = $(this);
        if($('input[name="housing_benefit"]').val() == "" ){
            $('input[name="housing_benefit"]').css('border','1px solid red');
            return false;
        }
        
            var deposit_form  =  new FormData($('#deposit_request_form')[0]);
	        deposit_form.append('action','add_deposit_request');
                $.ajax({
    				url: js_data.ajax_url_frontend,
    				method:'POST',
					data: deposit_form,
					contentType: false,
					processData: false,
					dataType:'json',
    				beforeSend: function(){
    						ele.html('Depositing <i class="fa fa-spin fa-spinner"></i>');
    				},
    				success: function(data) {
    				    
    				    if(data.error){
    				        alert(data.message);
    				    }else{
    				        $('#deposit_request_form')[0].reset();
    				        ele.removeAttr('id');
    				        ele.html('Deposited <i class="fa fa-check-circle"></i>');
    				        Swal.fire({
    						  icon: 'success',
    						  title: 'Submitted !',
    						  showConfirmButton: false,
    						  text: data.message,
    						  //text:'Thank you for submitting your claim. We will review your information and contact you to discuss shortly.',
    						  timer: 3000
    						});
    				    }
    				    
    				}
            });
        
    });
    
    $(document).on('click','.firstmodalcross',function(){
        
        var checkfill = false;
       $('#exampleModal .modal-body input[type="text"]').each(function(key,item){
           if($(item).val() != ""){
               console.log($(item).val());
               checkfill = true;
           }
       })
       
          $('#exampleModal .modal-body input[type="email"]').each(function(key,item){
           if($(item).val() != ""){
               console.log($(item).val());
               checkfill = true;
           }
       })
       if(checkfill){
               
           var response = confirm("Are you sure you want to close?");
    		if(response == true){
    		$('#exampleModal').modal('hide');
    		}
       }else{
           $('#exampleModal').modal('hide');
       }
    });


    // $(document).on('click','#claimnowbtn a ,#menu-item-130 a',function(e){
    //   e.preventDefault();
    //   $("#exampleModal").modal('show');
    // });
    
    $(document).on('click','.check_deposit',function(){
        var checkfill = false;
       $('#aboutmodal .modal-body input').each(function(key,item){
           if($(item).val() != ""){
               console.log('Hello');
               checkfill = true;
           }
       })    
       if(checkfill){
           var response = confirm("Are you sure you want to close?");
    		if(response == true){
    		$('#aboutmodal').modal('hide');
    		}
       }else{
           $('#aboutmodal').modal('hide');
       }
    });
    
    $(document).on('click','#menu-item-448 a,#menu-item-449 a',function(e){
         e.preventDefault();
       $(window).scrollTop($('#contactUs').offset().top); 
       $('.your-name input').focus();
        
    });
    
    $(document).on('keyup','#deposit_request_form input',function(){
        
        if($(this).val() != ""){
            $(this).css('border','1px solid gainsboro');
        }else{
            $(this).css('border','1px solid red');
        }
        
    });
    
    
        $(document).on('change','.returned_in_full',function(){
        
        if($(this).val()== "no"){
            $('.howmuchrerturn').show();
        }else{
            $('.howmuchrerturn').hide();
        }
        
    });
    
    $(document).on('click','.custom-control-input',function(){
        
        if($(this).is(':checked') && $(this).val() == 'Yes'){
            $('.how_many_box').show();
        }else{
            $('.how_many_box').hide();
            $('.how_many_input_fields').html('');
        }
        
    })
    
    $(document).on('change','.how_many',function(){
        if($(this).val() != "0"){
          var count = Number($(this).val());
          var htlm_field = "";
          for(var i = 1;i <= count ; i++){
              
              htlm_field += '<div class="form-row rowmodal"><div class="col"><div class="form-group"><input type="email" name="email_tenancy_'+i+'" class="form-control form_modal datefield fillfont" placeholder="Enter Email.."></div></div><div class="col"><div class="form-group"><input type="text" name="name_tenance_'+i+'" class="form-control form_modal datefield fillfont" placeholder="Enter Name.."></div></div></div>';
              
          }
          
          $('.how_many_input_fields').html(htlm_field);
        
        }
        
    })
    
   
    
});
