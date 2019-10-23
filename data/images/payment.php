<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.header_logo{
	width: 	30%;
}
input,select,textarea{
 border-radius: 0px !important;
}
.border-left-line{
  border-left: 1px solid #ccc;
}
.border-line{
  border: 3px solid #000;
  height: 100%;
  padding-bottom: 5%;
}
.secondrow > .row >.col-sm > .form-group > input {
 background-color: 	#f2f2ed;
}
.secondrow > .row >.col-sm > .form-group > select {
 background-color: 	#f2f2ed;
}
.secondrow > .form-group > textarea {
 background-color: 	#f2f2ed;
}
.custom-control-label::before, 
.custom-control-label::after {
top: .8rem;
width: 1.25rem;
height: 1.25rem;
/*background-color: 	#fff;*/
border: 1px solid #000;

}
.img-responsive {
    width: auto;
    height: 50px;
	 vertical-align: middle;
}
.fit-image{
width: 100%;
object-fit: cover;
 vertical-align: middle;
/*height: 300px;  only if you want fixed height */
}
.col{
background-color: 	#fff;
padding: 	2%;
 vertical-align: middle;
}

</style>
<nav class="navbar navbar-expand-lg  border">
<div class="container">
<a class="navbar-brand text-center" href="#"><img  class="header_logo" src="ortigaslogo.png"></a>

</button>
  

</nav>
<div class="container">
	<div class="card text-center">
  		<div class="card-header text-center" style="background-color:#12402d;color:#fff">
    		<h2>RESERVATION PAYMENT FORM</h2>
			<p>Please ensure that the <b>Reservation Agreement Form</b> has been faxed to Ortigas & Company<br>	before proceeding to fill out the items below</p>
		
  		</div>
  		<div class="card-body" style="margin:1%">
			<p class="card-text text-center"> Information in the reservation Agreement Form sent to ortigas & Company should be reflected when filling out the fields.<br>	
			Should there be any inconsistencies, reservation will not be accepted.</p>
			<h5 class="card-title" style="color:#12402d">REFERENCE NO. 2019-0923</h5>
  		</div>
  		<div class="card-body" style="margin:6%">
    
    <div class="row">
    	<div class="col-sm text-left">
      		<form>	
				<div class="form-row">
				    <div class="form-group col-md-6">
				       <label for="firstname">FIRST NAME*</label>
				    	<input type="text" class="form-control" id="firstname" placeholder="">
				    </div>
				    <div class="form-group col-md-6">
				       <label for="lastname">LAST NAME*</label>
				    		<input type="text" class="form-control" id="lastname" placeholder="">
				    </div>
				</div>
				<div class="form-group">
				    <label for="phonenumber">TELEPHONE NUMBER*</label>
				    <input type="text" class="form-control" id="phonenumber" placeholder="">
				</div>
				<div class="form-group">
				    <label for="mobilenumber">MOBILE NUMBER*</label>
				    <input type="text" class="form-control" id="mobilenumber" placeholder="">
				</div>
				<div class="form-group">
				    <label for="email">EMAIL ADDRESS*</label>
				    <input type="text" class="form-control" id="email" placeholder="">
				</div>
				  <label for="idtype">ID TYPE AND DETAILS</label>
				  <div class="input-group">
			        <div class="input-group-prepend">
			          <select name="idtype" class="form-control input-group-text">
							<option value="TIN">TIN</option>
							<option value="SSS">SSS</option>
						</select>
        				<i class="fa fa-chevron-down"></i>
			        </div>
			        <input type="text" class="form-control" id="idtype" placeholder="ENTER YOUR ID NUMBER" aria-describedby="idtype" name="idnumber" required>
			      </div>
				
				
			</form>
    	</div>
    	<div class="col-sm border-left-line text-left">
      		<div class="form-group">
				<label for="country">COUNTRY</label>
					<select name="country" class="form-control ">
						<option value="PHILIPPINES">PHILIPPINES</option>
						<option value="THAILAND">THAILAND</option>
						<option value="SINGAPORE">SINGAPORE</option>
						<option value="TAIWAN">TAIWAN</option>
					</select>
        		<span class="glyphicon glyphicon-menu-down"></span>
      		</div>
			<div class="form-group">
				<label for="house_no">HOUSE/UNIT NUMBER*</label>
				<input type="text" class="form-control" id="house_no" placeholder="">
			</div>
			<div class="form-group">
				<label for="street">STREET*</label>
				<input type="text" class="form-control" id="street" placeholder="">
			</div>
			<div class="form-group">
				<label for="city">CITY*</label>
				<input type="text" class="form-control" id="city" placeholder="">
			</div>
			<div class="form-row">
				    <div class="form-group col-md-6">
				       <label for="barangay">BARANGAY*</label>
				    	<input type="text" class="form-control" id="barangay" placeholder="">
				    </div>
				    <div class="form-group col-md-6">
				       <label for="postal">ZIP POSTAL CODE*</label>
				    		<input type="text" class="form-control" id="postal" placeholder="">
				    </div>
			</div>
    	</div>
  	</div>
  </div>
   <div class="card-body secondrow" style="background-color:#ccc;margin:5%;padding:3%">
    	<h5 class="card-title text-left">PROPERTY RESERVATION DETAILS</h5>
     	<div class="row">
		<div class="col-sm text-left">
			<div class="form-group">
				<label for="project">PROJECT*</label>
					<select name="project" class="form-control ">
						<option value="project">project 1</option>
						<option value="project">project 2</option>
						<option value="project">project 3</option>
						<option value="project">project 4</option>
					</select>
        		<i class="fa fa-angle-down"></i>
      		</div>
			<div class="form-group">
				<label for="seller_group">SELLERS GROUP*</label>
					<select name="group" class="form-control ">
						<option value="group">group 1</option>
						<option value="group">group 2</option>
						<option value="group">group 3</option>
						<option value="group">group 4</option>
					</select>
        		<i class="fa fa-angle-down"></i>
      		</div>
			<div class="form-group">
				<label for="allocation">ALLOCATION*</label>
					<select name="group" class="form-control ">
						<option value="allocation">allocation 1</option>
						<option value="allocation">allocation 2</option>
						<option value="allocation">allocation 3</option>
						<option value="allocation">allocation 4</option>
					</select>
        		<i class="fa fa-angle-down"></i>
      		</div>
	 	</div>
	  	<div class="col-sm text-left">
			<div class="form-group">
				<label for="property_specialist">PROPERTY SPECIALIST*</label>
				<input type="text" class="form-control" id="property_specialist" placeholder="">
			</div>
			<div class="form-group">
				<label for="unit_details">COMPLETE UNIT DETAILS*</label>
				<input type="text" class="form-control" id="unit_details" placeholder="">
			</div>
			<div class="form-group">
				<label for="reservation_fee">RESERVATION FEE*</label>
				<input type="text" class="form-control" id="reservation_fee" placeholder="">
			</div>
		</div>
		</div>
		<div class="form-group text-left">
			<label for="notes">NOTES</label>
			<textarea class="form-control" id="notes" placeholder="" rows='10'>	</textarea>
		</div>
  </div>
	<div class="card-body" >
		<div class="row">	
			<div class="col-sm text-left" style="margin:5%;padding:3%">
				<h5 class="card-title">BILLING ADDRESS <span>*Required fields</span></h5>
				<div class="form-group">
					<label for="allocation">COUNTRY</label>
					<select name="billing_country" class="form-control ">
						<option value="PHILIPPINES">PHILIPPINES</option>
						<option value="THAILAND">THAILAND</option>
						<option value="SINGAPORE">SINGAPORE</option>
						<option value="TAIWAN">TAIWAN</option>
					</select>
        			<i class="fa fa-angle-down"></i>
      			</div>
				<div class="form-group">
					<label for="billing_house_no">HOUSE/UNIT NUMBER*</label>
					<input type="text" class="form-control" id="billing_house_no" placeholder="">
				</div>
				<div class="form-group">
					<label for="street">STREET*</label>
					<input type="text" class="form-control" id="street" placeholder="">
				</div>
				<div class="form-group">
					<label for="billing_city">CITY*</label>
					<input type="text" class="form-control" id="billing_city" placeholder="">
				</div>
				<div class="form-row">
					    <div class="form-group col-md-6">
					       <label for="billing_barangay">BARANGAY*</label>
					    	<input type="text" class="form-control" id="billing_barangay" placeholder="">
					    </div>
					    <div class="form-group col-md-6">
					       <label for="billing_postal">ZIP POSTAL CODE*</label>
					    		<input type="text" class="form-control" id="billing_postal" placeholder="">
					    </div>
				</div>
				<div class="custom-control form-control-lg custom-checkbox">
    				<input type="checkbox" class="custom-control-input" id="same_mailing_address">
    				<label class="custom-control-label" for="same_mailing_address"> Same as Mailing Address</label>
				</div>
			</div>
			<div class="col-sm text-left border-line" style="margin-right:5%;padding-left:3%;padding-right:3%;padding-top:3% ">
				<div style="margin-top:12%;">	
					<h5 class="card-title">DISCLAIMER</h5>
					<p>	1. You are now at a secure page powered by ortigas.com.ph</p>
					<p>2. Before transaction of payment, please ensure that information has been filled out and submitted </p>
					<p>3. For inquiries pertaining to products, delivery, order status and other related concerns, you may contact Ortigas & Company.</p>
					<p>4. All information submitted will be used solely for this transaction and will be kept confidential using 128-bit SSL(secure socket layer) encryption.</p>
					<p>5. Fraud and illegal activities will be prosecuted to the fullest extent of the of the law</p>
							<p>	
								<b>Note: Only transaction with reference number will be honored by the law as a proof that the units were paid successfully.</b>
							</p>
						</ol>
					</p>
				</div>
			</div>
		</div>
	</div>
  	<div class="card-footer text-center" style="background-color:#12402d;color:#fff;padding: 5%;">
    	<div class="form-check form-check-inline">
  			<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  			<label class="form-check-label" for="inlineCheckbox1">I agree with Ortigas & Company's Data Policy and Terms & Conditions.</label>
		</div> 
		<div class="form-group">
			<a href="#"class="btn btn-success btn-lg" style="margin-top:2%;border-radius:0px;background-color: #6b8577;border:6px solid #fff;font-size:12px;padding:1% 4% 1% 4%"><b>      PROCEED TO PAYMENT      </b></a>
		</div>
		<div class="form-group">
			<p>	For Credit Card payments, you will be credited to a website owned and operated by a third party. <br> Ortigas & Company disclaims responsibility on any information you shall provided to the 3rd party system.</p>
		</div>
		
		<div class="container">
		  <div class="row justify-content-md-center ">	
				<div class="col col-lg-1">
		      <img class=" fit-image " src="cropped-paynamics_logo.png">
		    </div>
		    <div class="col col-lg-1">
				<img class=" fit-image" src="mastercard.png">
			</div>
			<div class="col col-lg-1">
				<img class=" fit-image" src="visa-logo.png">
			</div>
			<div class="col col-lg-1">
				<img class=" fit-image" src="verisign-secured-logo.png">
			</div>

		    
		  </div>
		</div>
	</div>
		
		
  	</div>
</div>
</div>

<?php


	          $_mid = "0000000301199E8DB80B"; 
		      $_requestid = substr(uniqid(), 0, 13);
		      $_ipaddress = "192.168.40.129";
		      $_noturl = "https://testpti.payserv.net/webpayment/default.aspx"; // url where response is posted
		      $_resurl = "https://www.google.com"; //url of merchant landing page
			  $_cancelurl = "https://google.com"; //url of merchant landing page
		      $_fname = "Lebron"; 
		      $_mname = "d"; 
		      $_lname = "James"; 
		      $_addr1 = "GMA Network Center"; 
		      $_addr2 = "";
		      $_city = "San Juan"; 
		      $_state = "Metro Manila"; 
		      $_country = "Philippines"; 
		      $_zip = "1500"; 
		      $_sec3d = "enabled"; 
		      $_email = "jaime.ramos@digify.com.ph"; 
		      $_phone = "1234"; 
		      $_mobile = "092621506249"; 
		      $_clientip = $_SERVER['REMOTE_ADDR'];
		      $_amount = "9.00"; // set this to the total amount of the transaction. Set the amount to 2 decimal point before generating signature.

		      $_currency = "PHP"; //PHP or USD
		      $forSign = $_mid . $_requestid . $_ipaddress . $_noturl . $_resurl .  $_fname . $_lname . $_mname . $_addr1 . $_addr2 . $_city . $_state . $_country . $_zip . $_email . $_phone . $_clientip . $_amount . $_currency . $_sec3d;
					$cert = "FD2CE586D02AEC25B87D392AF95D69DB"; 
		
					// $_mid . "<hr />";
					//echo $cert . "<hr />";
					//echo $forSign . "<hr />";
		
		      $_sign = hash("sha512", $forSign.$cert);
		      $xmlstr = "";
		      
			    $strxml = "";
		     
		      $strxml = $strxml . "<?xml version=\"1.0\" encoding=\"utf-8\" ?>";
		      $strxml = $strxml . "<Request>";
		      $strxml = $strxml . "<orders>";
		      $strxml = $strxml . "<items>";
		      $strxml = $strxml . "<Items>";
		      $strxml = $strxml . "<itemname>Townhouse</itemname><quantity>1</quantity><amount>9.00</amount>"; 
		      $strxml = $strxml . "</Items>";
		      $strxml = $strxml . "</items>";
		      $strxml = $strxml . "</orders>";
		      $strxml = $strxml . "<mid>" . $_mid . "</mid>";
		      $strxml = $strxml . "<request_id>" . $_requestid . "</request_id>";
		      $strxml = $strxml . "<ip_address>" . $_ipaddress . "</ip_address>";
		      $strxml = $strxml . "<notification_url>" . $_noturl . "</notification_url>";
		      $strxml = $strxml . "<response_url>" . $_resurl . "</response_url>";
		      $strxml = $strxml . "<cancel_url>" . $_cancelurl . "</cancel_url>";
		      $strxml = $strxml . "<mtac_url>https://www.google.com</mtac_url>"; // pls set this to the url where your terms and conditions are hosted
		    
		      $strxml = $strxml . "<fname>" . $_fname . "</fname>";
		      $strxml = $strxml . "<lname>" . $_lname . "</lname>";
		      $strxml = $strxml . "<mname>" . $_mname . "</mname>";
		      $strxml = $strxml . "<address1>" . $_addr1 . "</address1>";
		      $strxml = $strxml . "<address2>" . $_addr2 . "</address2>";
		      $strxml = $strxml . "<city>" . $_city . "</city>";
		      $strxml = $strxml . "<state>" . $_state . "</state>";
		      $strxml = $strxml . "<country>" . $_country . "</country>";
		      $strxml = $strxml . "<zip>" . $_zip . "</zip>";
		      $strxml = $strxml . "<secure3d>" . $_sec3d . "</secure3d>";
		      $strxml = $strxml . "<trxtype>sale</trxtype>";
		      $strxml = $strxml . "<email>" . $_email . "</email>";
		      $strxml = $strxml . "<phone>" . $_phone . "</phone>";
		      $strxml = $strxml . "<mobile>" . $_mobile . "</mobile>";
		      $strxml = $strxml . "<client_ip>" . $_clientip . "</client_ip>";
		      $strxml = $strxml . "<amount>" . $_amount . "</amount>";
		      $strxml = $strxml . "<currency>" . $_currency . "</currency>";
		      $strxml = $strxml . "<mlogo_url>http://images.gmanews.tv/webpics/2018/05/640_Untitled-1_2018_05_23_15_57_22.jpg</mlogo_url>";// pls set this to the url where your logo is hosted
		      $strxml = $strxml . "<pmethod></pmethod>";
		      $strxml = $strxml . "<signature>" . $_sign . "</signature>";
		      $strxml = $strxml . "</Request>";
		      $b64string =  base64_encode($strxml);
					"<pre>" . $strxml . "</pre><hr />";
					 echo $b64string . "<hr />";
 


?>

<form name="form1" method="post" action="https://testpti.payserv.net/webpayment/default.aspx">
   	<input type="hidden" name="paymentrequest" id="paymentrequest" value="<?php echo $b64string; ?>" style="width:800px; padding: 10px;">
	<input type="submit">
</form>