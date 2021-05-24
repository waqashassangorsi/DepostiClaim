<?php
/**
 * Template Name: Claim Now
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

?>
<style>
label{
    color:#97a7ab;
}
select{
    height:34px !important;
}

</style>
<section>
    
<div class="container claimnow">
    
    <div class="wrapper pdfmodal">
              <h3 class="m-auto fillfontnew text-center">Fill in this form to see what you could be entitled to</h3>
              
              <div class="progress progerbarr">
                    <div class="progress-bar progress-bar-striped active firstprogressbar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width:33%;border-radius:10px">
                     
                    </div>
                
              </div>
              
               
      <form  method='post' id='deposit_request_form'>
      <div class="col-sm-12 mt-5">
            <div class='first_step'>
              <div class="form-group">
                <input type="text" class="form-control form_modal fillfont fullnamefield" name='full_name' id="recipient-name" Placeholder="Full Name">
              </div>
              <div class="form-row rowmodal">
                  
                    <div class="col contactform">
                     <input type="text" class="form-control form_modal fillfont contactplace contactnamefield" name='c_number' placeholder="Contact Number">
                    </div>
                    
                    <div class="col">
                        <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm dateofbirth fillfont">Date of Birth</label>
                        <div class="col-sm-8 dateofbirthfield">
                           <input type="date"  name='dob' class="form-control form_modal datefield">
                        </div>
        
                    
                    </div>
                    
               </div>
            </div>
            
            <div class="form-group">
                <input type="email" class="form-control form_modal fillfont emailnamefield" name='email_address' id="recipient-name" Placeholder="Email Address">
            </div>
            
            <div class="col-sm-6 p-0">
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='current_address_postal_code'  Placeholder="Postal Code">
            </div>
            </div>
            
             <div class="col-sm-12 p-0">
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='current_address'  Placeholder="Current Address">
            </div>
            </div>
            <div class="col-sm-12 p-0">
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='current_address_address_line_2'  Placeholder="Address Line 2">
            </div>
            </div>
            <div class="row">
            <div class="col-sm-6 ">
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='current_address_city'  Placeholder="City">
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='current_address_country'  Placeholder="Country">
            </div>
            </div>
            </div>
             
            
           
            </div>
        </div>  
        
        <!-----------------------second step new--------------------->
        
         <div class='second_stepnew' style='display:none'>
              
               <div class="col-sm-12 p-0">
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='claim_address_postal_code'  Placeholder="Postal Code">
            </div>
            </div>
              
            <div class="col-sm-12 p-0">
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='claim_address'  Placeholder="Claim Adress">
            </div>
            </div>
            <div class="col-sm-12 p-0">
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='claim_address_line_2'  Placeholder="Address Line 2">
            </div>
            </div>
            <div class="row">
            <div class="col-sm-6 ">
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='claim_address_city'  Placeholder="City">
            </div>
            </div>
            <div class="col-sm-6">
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='claim_address_country'  Placeholder="Country">
            </div>
            </div>
            </div>
            
             <div class="form-group">
                <label> Other Named on Tenancy Agreement </label>
                
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" value="Yes" name="other_tenancy_names" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Yes</label>
                 </div>
                 
                 <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" value="No" name="whos_rent_paid_to" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">No</label>
                  </div>
            </div>
            <div class="form-group how_many_box" style='display:none'>
                <select class="form-control how_many" name='how_many' id="how_many" style='font-size:16px;height:34px'>
                    <option value="0" selected> How Many ?</option>
                    <option value="1"> 1</option>
                    <option value="2"> 2</option>
                    <option value="3"> 3</option>
                    <option value="4"> 4</option>
                    <option value="5"> 5</option>
                </select>
            </div>
            
            <div class="how_many_input_fields">
                
                
            </div>
            
             <div class="form-row rowmodal">
                  
                   
                    <div class="col">
                         <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm datemovedin fillfont">Date moved in</label>
                            <div class="col-sm-6 dateofbirthfield">
                               <input type="date"   name='date_moved_id' class="form-control form_modal datefield fillfont">
                            </div>
                       </div>
                    </div>
                    
                    
                    <div class="col">
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm dateofbirth fillfont fillfont">Date moved out</label>
                            <div class="col-sm-6 dateofbirthfield">
                               <input type="date"   name='date_moved_out' class="form-control form_modal datefield fillfont">
                            </div>
                        </div>
                   </div>
            </div>
            
            <!--<div class="form-group">-->
            <!--    <input type="text" class="form-control form_modal fillfont" name='agreement_signed'  Placeholder="Number of tenancy agreements signed">-->
            <!--</div>-->
            
            <div class="form-row rowmodal">
                  
                   
                    <div class="col">
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm datemovedin fillfont">Date deposit paid</label>
                            <div class="col-sm-6 dateofbirthfield">
                               <input type="date"   name='date_deposit_paid' class="form-control form_modal datefield fillfont">
                            </div>
                       </div>
                  </div>
                    
                    
                    <div class="col">
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-8 col-form-label col-form-label-sm dateofbirth fillfont">Amount of deposit</label>
                            <div class="col-sm-4 dateofbirthfield">
                               <input type="number"  placeholder="£" name='amt_deposit'  class="form-control form_modal datefield fillfont">
                            </div>
                       </div>
                   </div>
            
         </div>
        
        </div>
        
        
        
        <div class='second_step' style='display:none'>
             <!--<div class="form-group">-->
             <!--   <input type="text" class="form-control form_modal fillfont" name="hows_deposit_paid" id="recipient-name" Placeholder="HOW WAS THE DEPOSIT PAID?">-->
             <!-- </div>-->
              
            <div class="form-group">
                <label class="fillfont">How was deposit paid?</label>
                <select class="form-control fillfont p-0"  name="hows_deposit_paid">
                  <option class="fillfont">Bank transfer</option>
                  <option class="fillfont">Cash</option>
                  <option class="fillfont">Cheque</option>
                  <option class="fillfont">Paid on your  behalf by a 3rd party</option>
                  <option class="fillfont">Other</option>
                </select>
            </div>
              
            
            <!--<div class="form-group">-->
            <!--    <input type="text" class="form-control form_modal fillfont" name="whos_deposit_paid_to" id="recipient-name" Placeholder="WHO WAS THE DEPOSIT PAID TO?">-->
            <!--</div>-->
            
            <div class="form-group">
                <label for="exampleFormControlSelect1">Who was the Deposit paid to?</label>
                <select class="form-control fillfont p-0"  name="whos_deposit_paid_to" id="exampleFormControlSelect1">
                  <option class="fillfont">Landlord</option>
                  <option class="fillfont">Letting Agent</option>
                  <option class="fillfont">Other</option>
                </select>
            </div>
            
            
            <!--<div class="form-group">-->
            <!--    <input type="text" class="form-control form_modal fillfont"  name="evidence_depsoit" Placeholder="EVIDENCE RETAINED OF DEPOSIT?">-->
            <!--</div>-->
            
            <div class="form-group">
                <label>Evidence retained of deposit payment</label>
                <select class="form-control fillfont p-0"  name="evidence_depsoit">
                  <option value='yes' class="fillfont">Yes</option>
                  <option value='no' class="fillfont">No</option>
                </select>
            </div>
            
            <!-- <div class="form-group">-->
            <!--    <input type="text" class="form-control form_modal fillfont" name="rent_paid_to" Placeholder="WHO WAS RENT PAID TO?">-->
            <!--</div>-->
            
            <div class="form-group">
                <label>Who was the rent paid to?</label>
                <select class="form-control fillfont p-0"  name="rent_paid_to">
                  <option value="Landlord" class="fillfont">Landlord</option>
                  <option value="Letting Agent" class="fillfont">Letting Agent</option>
                  <option value="Other" class="fillfont">Other</option>
                </select>
            </div>
            
            
            
            <!-- <div class="form-group">-->
            <!--    <input type="text" class="form-control form_modal fillfont" name="returned_in_full" Placeholder="Deposit returned in full(if not list deductions)">-->
            <!--</div>-->
            
            
            <div class="form-group">
                <label>Deposit returned in full?</label>
                <select class="form-control fillfont p-0 returned_in_full"  name="returned_in_full">
                  <option  class="fillfont" value='yes'>Yes</option>
                  <option class="fillfont" value='no'>No</option>
                </select>
            </div>
            
                
            <div class="form-group howmuchrerturn" style="display:none">
                <input type="text" class="form-control form_modal fillfont" name="how_much_return"  Placeholder="£">
            </div>
            
                
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name="landlord_name"  Placeholder="Landlord  Name">
            </div>
            <div class="form-group">
                <textarea cols="3" class="form-control" name="landlord_address" placeholder="Landlord Address"></textarea>
            </div>
            
                 
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"  name="agent_name" Placeholder="Agent Name">
            </div>
            <div class="form-group">
                <textarea cols="3" class="form-control" name="agent_address" placeholder="Agent Address"></textarea>
            </div>
            <!--<div class="form-group">-->
            <!--    <input type="text" class="form-control form_modal fillfont" name="rent_arreas" Placeholder="ANY RENT ARREARS?">-->
            <!--</div>-->
            
            </div>
            <div class="3rd_step" style='display:none'>
            <!--<div class="form-group">-->
            <!--    <input type="text" class="form-control form_modal fillfont" name="housing_benefit" id="recipient-name" Placeholder="IN RECEIPT OF HOUSING BENEFIT?">-->
            <!--  </div>-->
              
            
            <div class="form-group radio_doc_retained">
                  <label class="fillfont">WHICH DOCUMENTS HAVE YOU RETAINED?</label>
                       <div class="form-check">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios1" value="Tenancy Agreement" checked>
                          <label class="form-check-label fillfont" for="exampleRadios1"> 
                           Tenancy Agreement
                          </label>
                    </div>
                    
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios2" value="Proof of deposit payment">
                          <label class="form-check-label fillfont" for="exampleRadios2">
                           Proof of deposit payment
                          </label>
                    </div>
                    
                    <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios3" value="Photos of property">
                          <label class="form-check-label fillfont" for="exampleRadios3">
                            Photos of property
                          </label>
                    </div>
                    
                     <div class="form-check">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios1" value="Check in / Check out Inventory" checked>
                          <label class="form-check-label fillfont" for="exampleRadios1">
                           Check in / Check out Inventory 
                          </label>
                    </div>
                    
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios2" value="Proof of rent payments">
                          <label class="form-check-label fillfont" for="exampleRadios2">
                            Proof of rent payments
                          </label>
                    </div>
                    
                    <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios3" value="Correspondence from Landlord">
                          <label class="form-check-label fillfont" for="exampleRadios3">
                           Correspondence from Landlord/
                          </label>
                    </div>
                    
                    <div class="form-group mt-3">
                        <label for="deposit_file">Choose File</label>
                        <input type="file" class="form-control-file deposit_file" name='deposit_file[]' multiple id="deposit_file">
                    </div>
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="fillfont">Please include any additional information you consider relevant</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name='notes' rows="3"></textarea>
             </div>
            </div>
   
          
              <!--<button type="button" class="btn btn-primary nextbtn fillfont" id='move_back' data-step='1' style="display:none;margin:auto;">Back</button>-->
              <div class="row">
                  <span class="fillfont" id="move_back" data-step="1" style="display:none;margin: auto; color: rgb(124, 29, 201); cursor: pointer;">Back</span>
                <button type="button" class="btn btn-primary nextbtn fillfont" id='move_steps' data-step='2' style='margin:auto;'>Next</button>
                 <button type="button" class="btn btn-primary nextbtn fillfont" id='submit_form'  style="display:none;margin:auto;">Submit</button>
             </div> 
          
    </form>
     
    </div>
  </div>
  
 </div> 
</section>


<!--------------------About popup-------------------------->

<div class="modal fade modalallpage" id="aboutmodal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"  aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-x: hidden;overflow-y: auto;">
  <div class="modal-dialog main_newmodal modal-md" role="document">
    <div class="modal-content pdfmodal">
      <div class="modal-header">
          
         <div class="row" style="width:100%">
              <h3 class="m-auto fillfontnew">Enquire today & We Will Do the rest</h3>
              
               <div class="attach_waper"style="color:black;width: 100%;text-align: center;margin-top: 13px;" ></div>
          </div>
        <button type="button" class="close check_deposit">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
         <form>
              
              <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"required id="recipient-name" Placeholder="Full Name">
              </div>
              
            
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"  required id="recipient-name" Placeholder="Contact Number">
            </div>
            
            <div class="form-group">
                <input type="email" class="form-control form_modal fillfont"  required Placeholder="Email Address">
            </div>
            
             <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" required Placeholder="Deposit Amount">
            </div>
            
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-5 col-form-label fillfont deopistpaidlabel">Date Deposit paid</label>
                <div class="col-sm-7 dateofbirthfield">
                  <input type="date" class="form-control datefield fillfont" required id="deopistpaid" >
                </div>
          </div>
            
                
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" required  Placeholder="Post Code">
            </div>
    
        
        
         
      </div>
      <div class="modal-footer text-center mb-5 mt-3">
        <button type="submit" class="btn btn-primary nextbtn fillfont">Submit</button>
        
      </div>
      </form>
    </div>
  </div>
</div>

<?php get_footer(); ?>
