<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css'>
<style>
body{
    overflow-x:hidden;
}
.custab{
    border: 1px solid #ccc;
    padding: 5px;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
    .border-bottom-margin{
        border-bottom:1px solid gainsboro;
        margin-bottom:8px;
    }
    .modal-body{
        overflow:hidden;
    }
    
</style>

 <?php
    global $wpdb;
    $get_requests = $wpdb->get_results("SELECT * FROM `deposit_request`");
?>
    <div class='col-sm-12'>
           <div class='col-sm-6'> <h3> All Requests </h3>
            <p> <?php echo count($get_requests);?> Deposit Requests Found!</p>
            </div>
    </div>
    
    <div class="col-md-12">
    <div class='thumbnail'>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Full Name</th>
                <th>DOB</th>
                <th>Contact No </th>
				<th>Email</th>
				<th>Current Address</th>
				<th>Claim Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
    if(count($get_requests) > 0) {
    foreach($get_requests as $request){
    ?>
      <tr>
			<td><?php echo "#DEP-REQ-".$request->id; ?></td>
			<td><?php echo $request->full_name; ?></td>
			<td><?php echo $request->dob; ?></td>
			<td><?php echo $request->c_number;?></td>
			<td><?php echo $request->email_address;?></td>
			<td><?php echo $request->current_address;?></td>
			<td><?php echo $request->claim_address;?></td>
			<td><button type='button' data-id="<?php echo $request->id;?>" class="btn btn-info btn-get-details">View Details</button></td>
      </tr>
      
      <?php } } ?>
        </tbody>
    </table>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js'></script>
    <script>
    jQuery(document).ready(function($) {
       $('#example').DataTable({
        "order": [[ 0, "desc" ]]
    });
      } );
    </script> 
    
<!-- Modal -->
<div  class="modal fade" id='get_details' role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Deposit Details</h4>
      </div>
      <div class="modal-body">
          <div class="col-sm-12 border-bottom-margin">
              
              <div class="col-sm-6">
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>Full Name</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='full_name'>  </p>
                      </div>
                  </div>
                  
                  
              </div>
              
              <div class="col-sm-6">
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>Contact Number</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='c_number'> 12344556677 </p>
                      </div>
                  </div>
              </div>
              
        </div>
        
        
        
        
        <div class="col-sm-12 border-bottom-margin">
              
              <div class="col-sm-6">
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>Date of Birth</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='dob'> abc </p>
                      </div>
                  </div>
                  
                  
              </div>
              
              <div class="col-sm-6">
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>Email Address</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='email_address'> 12344556677 </p>
                      </div>
                  </div>
              </div>
              
        </div>
        
        <div class="col-sm-12 border-bottom-margin">
              
              <div class="col-sm-6">
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p ><b>Current Address</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='current_address'> abc </p>
                      </div>
                  </div>
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p ><b>Current Address Line 2</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='current_address_line_2'> abc </p>
                      </div>
                  </div>
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p ><b>Postal Code</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='current_address_postal_code'> abc </p>
                      </div>
                  </div>
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p ><b>City</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='current_address_city'> abc </p>
                      </div>
                  </div>
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p ><b>Country</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='current_address_country'> abc </p>
                      </div>
                  </div>
                  
                  
              </div>
              
              <div class="col-sm-6">
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>Claim Address</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='claim_address'> 12344556677 </p>
                      </div>
                  </div>
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>Claim Address Line 2</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='claim_address_line_2'> 12344556677 </p>
                      </div>
                  </div>
                  <div class='row'>
                      <div class="col-sm-6">
                        <p ><b>Postal Code</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='claim_address_postal_code'> abc </p>
                      </div>
                  </div>
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p ><b>City</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='claim_address_city'> abc </p>
                      </div>
                  </div>
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p ><b>Country</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='claim_address_country'> abc </p>
                      </div>
                  </div>
              </div>
              
        </div>
        <div class="col-sm-12 border-bottom-margin">
              
              <div class="col-sm-6">
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>Other Name</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='other_name'> abc </p>
                      </div>
                  </div>
                  
                  
              </div>
              <div class="col-sm-6">
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>How Many ?</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='how_many'> abc </p>
                      </div>
                  </div>
                  
                  
              </div>
              <div class='tenancy_names'>
                  
              </div>
            </div>
             <div class="col-sm-12 border-bottom-margin"> 
              <div class="col-sm-6">
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>Date Moved In</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='date_moved_in'> 12344556677 </p>
                      </div>
                  </div>
              </div>
              
              <div class="col-sm-6">
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>Date Moved Out</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='date_moved_out'> abc </p>
                      </div>
                  </div>
                  
             </div>
        </div>
        
        
        
        <div class="col-sm-12 border-bottom-margin">
              
              <div class="col-sm-6">
                  
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>Date of Deposit Paid</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='deposit_paid'> abc </p>
                      </div>
                  </div>
                  
                  
              </div>
              
              <div class="col-sm-6">
                  <div class='row'>
                      <div class="col-sm-6">
                        <p><b>Amount of Deposit(£)</b>  </p>
                      </div>
                      <div class="col-sm-6">
                         <p id='deposit_amt'> 12344556677 </p>
                      </div>
                  </div>
              </div>
              
        </div>
        
        <div class="col-sm-6 border-bottom-margin">
              <p><b>How was the Deposit Paid?</b></p>
              <div class="col-sm-12">
                  <p id='hows_deposit'></p>
              </div>
              
        </div>
        <div class="col-sm-6 border-bottom-margin">
              <p><b>Who was the Deposit Paid To?</b></p>
              <div class="col-sm-12">
                  <p id='deposit_paid_to'></p>
              </div>
              
        </div>
        
        <div class="col-sm-6 border-bottom-margin">
              <p><b>Evidence Retained of Deposit?</b></p>
              <div class="col-sm-12">
                  <p id='evidence'></p>
              </div>
              
        </div>
        <div class="col-sm-6 border-bottom-margin">
              <p><b>Who was Rent Paid To?</b></p>
              <div class="col-sm-12">
                  <p id='whos_paid'></p>
              </div>
              
        </div>
        
        
        <div class="col-sm-6 border-bottom-margin">
              <p><b>Deposit returned in a Full</b></p>
              <div class="col-sm-12">
                  <p id='deposit_returned_full'></p>
              </div>
              
        </div>
        <div class="col-sm-6 border-bottom-margin">
              <p><b>Documents have to retained </b></p>
              <div class="col-sm-12">
                  <p id='doc_retained'></p>
              </div>
              
        </div>
        
        <div class="col-sm-6 border-bottom-margin">
              <p><b>Landlord Details </b></p>
              <div class="col-sm-12">
                   <p> Landord Name </p>
                  <p id='landord_name'></p>
              </div>
              <div class="col-sm-12">
                   <p> Landlord Address</p>
                  <p id='landlord_address'></p>
              </div>
        </div>
        <div class="col-sm-6 border-bottom-margin">
              <p><b>Agent Details</b></p>
              <div class="col-sm-12">
                   <p> Agent Name </p>
                  <p id='agent_name'></p>
              </div>
              <div class="col-sm-12">
                   <p> Agent Address</p>
                  <p id='agent_address'></p>
              </div>
              
        </div>
        
        
        
        <div class="col-sm-12 border-bottom-margin">
              <p><b>Notes</b></p>
              <div class="col-sm-12">
                  <p id='notes'></p>
              </div>
              
        </div>
          
           <div class="col-sm-12 border-bottom-margin">
               <p><b>Date : </b> <span id='datetime'></span></p>
            </div>
            
        <div class="col-sm-12 border-bottom-margin" style='border-bottom:none'>
               <p><b>Deposit Files : </b></p>
             <div class='row files_box'>
                 
                 
             </div>
        
        </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>