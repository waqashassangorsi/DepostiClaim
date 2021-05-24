<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

	// get_template_part( 'template-parts/entry-header' );

	// if ( ! is_search() ) {
		// get_template_part( 'template-parts/featured-image' );
	// }

	?>

	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
		?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * */
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article><!-- .post -->



<!-- Modal -->
<div class="modal fade modalallpage" id="exampleModal" tabindex="-1" data-keyboard="false" data-backdrop="static" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog main_newmodal modal-md" role="document">
    <div class="modal-content pdfmodal">
      <div class="modal-header">
          
         <div class="row" style="width:100%">
              <h3 class="m-auto fillfontnew">Fill in this form to see what you could be entitled to</h3>
              
              <div class="progress progerbarr">
                    <div class="progress-bar progress-bar-striped active firstprogressbar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width:33%;border-radius:10px">
                     
                    </div>
                    
                     <div class="progress-bar progress-bar-striped active secondprogressbar" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width:66%;border-radius:10px;display:none">
                     
                    </div>
                    
                   
                    <div class="progress-bar progress-bar-striped active thirdprogressbar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;border-radius:10px;display:none">
                     
                    </div>
             
              </div>
              
               <div class="attach_waper"style="color:black;width: 100%;text-align: center;margin-top: 13px;" ></div>
         </div>
        <button type="button" class="close firstmodalcross" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <form  method='post' id='deposit_request_form'>
      <div class="modal-body">
            <div class='first_step'>
              <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='full_name' id="recipient-name" Placeholder="Full Name">
              </div>
              <div class="form-row rowmodal">
                  
                    <div class="col contactform">
                     <input type="text" class="form-control form_modal fillfont contactplace" name='c_number' placeholder="Contact Number">
                    </div>
                    
                    <div class="col">
                        <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-7 col-form-label col-form-label-sm dateofbirth fillfont">Date of Birth</label>
                        <div class="col-sm-5 dateofbirthfield">
                           <input type="date"  name='dob' class="form-control form_modal datefield">
                        </div>
        
                    
                    </div>
                    
               </div>
            </div>
            
            <div class="form-group">
                <input type="email" class="form-control form_modal fillfont" name='email_address' id="recipient-name" Placeholder="Email Address">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='current_address'  Placeholder="Current Adress">
            </div>
            
             <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='claim_address'  Placeholder="Claim Adress">
            </div>
            
             <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='agreement_assigned' Placeholder="Other Named on Tenancy Agreement">
            </div>
            
             <div class="form-row rowmodal">
                  
                   
                    <div class="col">
                         <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-6 col-form-label col-form-label-sm datemovedin fillfont">Date moved in</label>
                            <div class="col-sm-5 dateofbirthfield">
                               <input type="date"   name='date_moved_id' class="form-control form_modal datefield fillfont">
                            </div>
                       </div>
                    </div>
                    
                    
                    <div class="col">
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-7 col-form-label col-form-label-sm dateofbirth fillfont fillfont">Date moved out</label>
                            <div class="col-sm-5 dateofbirthfield">
                               <input type="date"   name='date_moved_out' class="form-control form_modal datefield fillfont">
                            </div>
                        </div>
                   </div>
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name='agreement_signed'  Placeholder="Number of tenancy agreements signed">
            </div>
            
            <div class="form-row rowmodal">
                  
                   
                    <div class="col">
                        <div class="form-group row">
                            <label for="colFormLabelSm" class="col-sm-7 col-form-label col-form-label-sm datemovedin fillfont">Date deposit paid</label>
                            <div class="col-sm-5 dateofbirthfield">
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
             <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name="hows_deposit_paid" id="recipient-name" Placeholder="HOW WAS THE DEPOSIT PAID?">
              </div>
              
            
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name="whos_deposit_paid_to" id="recipient-name" Placeholder="WHO WAS THE DEPOSIT PAID TO?">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"  name="evidence_depsoit" Placeholder="EVIDENCE RETAINED OF DEPOSIT?">
            </div>
            
             <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name="rent_paid_to" Placeholder="WHO WAS RENT PAID TO?">
            </div>
            
             <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name="returned_in_full" Placeholder="Deposit returned in full(if not list deductions)">
            </div>
            
                
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name="agreement_signed"  Placeholder="Number of tenancy agreements signed">
            </div>
            
                
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name="landlord_details"  Placeholder="LANDLORD DETAILS">
            </div>
            
                 
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"  name="agent_details" Placeholder="AGENT DETAILS">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name="rent_arreas" Placeholder="ANY RENT ARREARS?">
            </div>
            </div>
            <div class="3rd_step" style='display:none'>
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" name="housing_benefit" id="recipient-name" Placeholder="IN RECEIPT OF HOUSING BENEFIT?">
              </div>
              
            
            <div class="form-group">
                  <label class="fillfont">WHICH DOCUMENTS HAVE YOU RETAINED?</label>
                       <div class="form-check">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios1" value="Tenancy Agreement" checked>
                          <label class="form-check-label fillfont" for="exampleRadios1"> 
                           Tenancy Agreement
                          </label>
                    </div>
                    
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios2" value="option2">
                          <label class="form-check-label fillfont" for="exampleRadios2">
                           Proof of deposit payment
                          </label>
                    </div>
                    
                    <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios3" value="option3">
                          <label class="form-check-label fillfont" for="exampleRadios3">
                            Photos of property
                          </label>
                    </div>
                    
                     <div class="form-check">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios1" value="option1" checked>
                          <label class="form-check-label fillfont" for="exampleRadios1">
                           Check in / Check out Inventory 
                          </label>
                    </div>
                    
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios2" value="option2">
                          <label class="form-check-label fillfont" for="exampleRadios2">
                            Proof of rent payments
                          </label>
                    </div>
                    
                    <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="doc_retained" id="exampleRadios3" value="option3">
                          <label class="form-check-label fillfont" for="exampleRadios3">
                           Correspondence from Landlord/
                          </label>
                    </div>
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="fillfont">NOTES</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name='notes' rows="3"></textarea>
             </div>
            </div>
      </div>
      
          <div class="modal-footer text-center">
              <!--<button type="button" class="btn btn-primary nextbtn fillfont" id='move_back' data-step='1' style="display:none;margin:auto;">Back</button>-->
              <span class="fillfont" id="move_back" data-step="1" style="display:none;margin: auto; color: rgb(124, 29, 201); cursor: pointer;">Back</span>
            <button type="button" class="btn btn-primary nextbtn fillfont" id='move_steps' data-step='2' style='margin:auto;'>Next</button>
             <button type="button" class="btn btn-primary nextbtn fillfont" id='submit_form'  style="display:none;margin:auto;">Submit</button>
          </div>
          
    </form>
     
    </div>
  </div>
</div>

<!--------------------second popup-------------------------->

<div class="modal fade modalallpage" id="secondmodal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-x: hidden;overflow-y: auto;">
  <div class="modal-dialog main_newmodal modal-md" role="document">
    <div class="modal-content pdfmodal">
      <div class="modal-header">
          
         <div class="row" style="width:100%">
              <h3 class="m-auto fillfontnew">Fill in this form to see what you could be entitled to</h3>
              
              <div class="progress progerbarr">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width:66%;border-radius:10px">
                     
                    </div>
              </div>
               <div class="attach_waper"style="color:black;width: 100%;text-align: center;margin-top: 13px;" ></div>
          </div>
        <button type="button" class="close secondmodalcross" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
         <form>
              
              <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" id="recipient-name" Placeholder="HOW WAS THE DEPOSIT PAID?">
              </div>
              
            
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" id="recipient-name" Placeholder="WHO WAS THE DEPOSIT PAID TO?">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"  Placeholder="EVIDENCE RETAINED OF DEPOSIT?">
            </div>
            
             <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"  Placeholder="WHO WAS RENT PAID TO?">
            </div>
            
             <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"  Placeholder="Deposit returned in full(if not list deductions)">
            </div>
            
                
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"  Placeholder="Number of tenancy agreements signed">
            </div>
            
                
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"  Placeholder="LANDLORD DETAILS">
            </div>
            
                 
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"  Placeholder="AGENT DETAILS">
            </div>
            
            <div class="form-group">
                <input type="text" class="form-control form_modal fillfont"  Placeholder="ANY RENT ARREARS?">
            </div>
            
            
        
        </form>
         
      </div>
      
      
      <div class="modal-footer text-center">
             <button type="button" class="btn btn-primary prevoiusbtn fillfont" style='margin:auto'>Previous</button>
        <button type="button" class="btn btn-primary nextbtn thirdbtn fillfont" data-toggle="modal" data-target="#thridmodal">Next</button>
      </div>
    </div>
  </div>
</div>



<!--------------------thrid popup-------------------------->

<div class="modal fade modalallpage" id="thridmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow-x: hidden;overflow-y: auto;">
  <div class="modal-dialog main_newmodal modal-md" role="document">
    <div class="modal-content pdfmodal">
      <div class="modal-header">
          
         <div class="row" style="width:100%">
              <h3 class="m-auto fillfontnew">Fill in this form to see what you could be entitled to</h3>
              
              <div class="progress progerbarr">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;border-radius:10px">
                     
                    </div>
              </div>
               <div class="attach_waper"style="color:black;width: 100%;text-align: center;margin-top: 13px;" ></div>
          </div>
        <button type="button" class="close thirdmodal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
         <form>
              
              <div class="form-group">
                <input type="text" class="form-control form_modal fillfont" id="recipient-name" Placeholder="IN RECEIPT OF HOUSING BENEFIT?">
              </div>
              
            
            <div class="form-group">
                  <label class="fillfont">WHICH DOCUMENTS HAVE YOU RETAINED?</label>
                       <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                          <label class="form-check-label fillfont" for="exampleRadios1">
                           Tenancy Agreement
                          </label>
                    </div>
                    
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                          <label class="form-check-label fillfont" for="exampleRadios2">
                           Proof of deposit payment
                          </label>
                    </div>
                    
                    <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                          <label class="form-check-label fillfont" for="exampleRadios3">
                            Photos of property
                          </label>
                    </div>
                    
                     <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                          <label class="form-check-label fillfont" for="exampleRadios1">
                           Check in / Check out Inventory 
                          </label>
                    </div>
                    
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                          <label class="form-check-label fillfont" for="exampleRadios2">
                            Proof of rent payments
                          </label>
                    </div>
                    
                    <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                          <label class="form-check-label fillfont" for="exampleRadios3">
                           Correspondence from Landlord/
                          </label>
                    </div>
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="fillfont">NOTES</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
             </div>
            
        
        </form>
         
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-primary nextbtn fillfont submitbtn">Submit</button>
      </div>
    </div>
  </div>
</div>



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


