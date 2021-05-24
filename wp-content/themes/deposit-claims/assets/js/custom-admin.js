jQuery(document).ready(function($){
    
    
    $(document).on('click','.btn-get-details',function(){
        var ele = $(this);
        var data_id = $(this).attr('data-id');
        $.ajax({
				url: js_admin_data.ajax_url,
				type: "POST",
				data: { 'action': 'get_data_request',data_id:data_id},
				dataType: "json",
				beforeSend: function() {
					ele.html('Loading <i class="fa  fa-spinner fa-spin"></i> ');
				},
				success: function(data) {
					ele.html('View Details');
					var detail =  data.details;
					var files  = data.files;
					var tenancy_names  = data.tenancy_names;
					var files_html = "";
					var tenancy_htmls = "";
					if(files.length > 0){
    					for(i = 0 ; i < files.length ; i++){
    					    var single = files[i];
    					    files_html += "<div class='col-sm-3'><img src='"+single.image_url+"' width='100%'></div>";
    					}
					}else{
					    files_html = "<p style='color:red' class='text-center'> No Files Uploaded! </p>";
					}
					
					if(tenancy_names.length > 0){
    					for(i = 0 ; i < tenancy_names.length ; i++){
    					    var single = tenancy_names[i];
    					    tenancy_htmls += '<div class="col-sm-12 border-bottom-margin"><div class="col-sm-6"><div class="row"><div class="col-sm-6"><p><b>Email</b>  </p></div><div class="col-sm-6"><p> '+single.email_address+' </p></div></div></div><div class="col-sm-6"><div class="row"><div class="col-sm-6"><p><b>Name</b>  </p></div><div class="col-sm-6"><p> '+single.user_name+' </p></div></div></div></div>';
    					}
					}else{
					    tenancy_htmls = "<p style='color:red' class='text-center'> No Other Tenancy Names</p>";
					}
					
						$('.tenancy_names').html(tenancy_htmls);
					
					
					
					$('.files_box').html(files_html);
					$('#full_name').text(detail[0].full_name);
					$('#c_number').text(detail[0].c_number);
					$('#dob').text(detail[0].dob);
					$('#email_address').text(detail[0].email_address);
					$('#current_address').text(detail[0].current_address);
					$('#current_address_line_2').text(detail[0].current_address_line_2);
					$('#current_address_postal_code').text(detail[0].current_address_postal);
					$('#current_address_city').text(detail[0].current_address_city);
					$('#current_address_country').text(detail[0].current_address_country);
					$('#claim_address').text(detail[0].claim_address);
					
							$('#claim_address_line_2').text(detail[0].claim_address_line_2);
					$('#claim_address_postal_code').text(detail[0].claim_address_postal);
					$('#claim_address_city').text(detail[0].claim_address_city);
					$('#claim_address_country').text(detail[0].claim_address_country);
					$('#other_name').text(detail[0].other_name);
					$('#deposit_amt').text(detail[0].amt_of_deposit);
					$('#deposit_paid').text(detail[0].date_deposit_paid);
					$('#agreement_assigned').text(detail[0].agreement_signed);
					$('#date_moved_out').text(detail[0].date_moved_out);
					$('#date_moved_in').text(detail[0].date_moved_in);
					
					$('#doc_retained').text(detail[0].doc_have_to_retained);
					
					$('#agent_address').text(detail[0].agent_address);
					
					$('#agent_name').text(detail[0].agent_name);
					$('#landlord_address').text(detail[0].landlord_address);
					
					$('#landlord_name').text(detail[0].landlord_name);
					$('#how_many').text(detail[0].how_many);
					$('#hows_deposit').text(detail[0].hows_deposit_paid);
					$('#deposit_paid_to').text(detail[0].whos_deposit_paid_to);
					$('#evidence').text(detail[0].evidence_of_deposit);
					$('#whos_paid').text(detail[0].whos_rent_paid_to);
					
					$('#deposit_returned_full').text(detail[0].deposit_returned_full);
					
					$('#notes').text(detail[0].notes);
					$('#datetime').text(detail[0].datetime);
					$('#landlord_detail').text(detail[0].landlord_detail);
					$('#agent_details').text(detail[0].agent_details);
					
					
					$('#retained_doc').text(detail[0].doc_have_to_retained);
					$('#housing_benefit').text(detail[0].housing_benefit);
					$('#rent_arres').text(detail[0].rent_areas);
					
					$('#hows_deposit_paid').text(detail[0].hows_deposit_paid);
					$('#whos_deposit_paid').text(detail[0].whos_deposit_paid_to);
					$('#evidence_retained').text(detail[0].evidence_of_deposit);
					
					$('#rent_paid_to').text(detail[0].whos_rent_paid_to);
					$('#no_tenanacy_agreement').text(detail[0].landlord_detail);
					$('#deposit_retained_full').text(detail[0].agent_detdeposit_returned_fullails);
					
					$('#get_details').modal('show');
				}
			});
       
        
    });
    
    
    
    
    
    
    
    
    
    
    
});