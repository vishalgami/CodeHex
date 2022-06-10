<?php include "include/header.php";

?>



<!-- #color-switcher -->

<div id="wrapper">

	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
			<h1 class="page-title" style="color:blue;">EDIT FACULTY </h1>
				<div class="box-content">
				<ul class="list-inline">
					    <li class="margin-bottom-10"> <a href="index.php"><button type="button" class="btn btn-icon btn-icon-left btn-primary btn-xs waves-effect waves-light"><i class="ico fa fa-reply-all"></i>Back</button></a></li>
						<li class="margin-bottom-10"> <a href="view_faculty.php"><button type="button" class="btn btn-success btn-xs waves-effect waves-light">VIEW ALL FACULTY</button></a></li>
				    
					</ul>	
				<form data-toggle="validator" action="process_add_faculty.php" method="post" enctype="multipart/form-data" >
				
				
				<?php
					 $id=$_GET['id'];
				$result = $db->prepare("SELECT * FROM user WHERE user_id= :post_id");
				$result->bindParam(':post_id', $id);
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
				             
				
               ?>
			
				<div class="form-group">
							
							<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Username (must be an Unique)</label>
								
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user frm-ico"></i></span>
								<input type="text" maxlength="50" class="form-control" name="username" value="<?php echo $row['username'];?>" required>
							</div>
									
								</div>
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Full Name</label>
									<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-eye frm-ico"></i></span>
								<input type="text" maxlength="30" class="form-control" name="full_name" id="inputTwitter" value="<?php echo $row['full_name'];?>" required>
							</div>
									
								</div>
							</div>
						</div>
						
						
						
						<div class="row">
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Email Id</label>
								
									<div class="input-group">
								<span  class="input-group-addon"><i class="fa fa-envelope frm-ico"></i></span>
								<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="155" class="form-control" name="email" id="inputTwitter" value="<?php echo $row['mail_id'];?>" required>
							</div>
									
								</div>
								<div class="form-group col-sm-6">
								<label for="inputPassword" class="control-label">Mobile Number</label>
								<div class="input-group">
								<span class="input-group-addon" style="width: 100px !important; padding: -0px !important;">
								 <select class="form-control" name="country_code">
	<option value="IN">+91</option>				             	    									
	<option value="AD">+376</option>
	<option value="AE">+971</option>
	<option value="AF">+93</option>
	<option value="AG">+1268</option>
	<option value="AI">+1264</option>
	<option value="AL">+355</option>
	<option value="AM">+374</option>
	<option value="AN">+599</option>
	<option value="AO">+244</option>
	<option value="AQ">+672</option>
	<option value="AR">+54</option>
	<option value="AS">+1684</option>
	<option value="AT">+43</option>
	<option value="AU">+61</option>
	<option value="AW">+297</option>
	<option value="AZ">+994</option>
	<option value="BA">+387</option>
	<option value="BB">+1246</option>
	<option value="BD">+880</option>
	<option value="BE">+32</option>
	<option value="BF">+226</option>
	<option value="BG">+359</option>
	<option value="BH">+973</option>
	<option value="BI">+257</option>
	<option value="BJ">+229</option>
	<option value="BL">+590</option>
	<option value="BM">+1441</option>
	<option value="BN">+673</option>
	<option value="BO">+591</option>
	<option value="BR">+55</option>
	<option value="BS">+1242</option>
	<option value="BT">+975</option>
	<option value="BW">+267</option>
	<option value="BY">+375</option>
	<option value="BZ">+501</option>
	<option value="CA">+1</option>
	<option value="CC">+61</option>
	<option value="CD">+243</option>
	<option value="CF">+236</option>
	<option value="CG">+242</option>
	<option value="CH">+41</option>
	<option value="CI">+225</option>
	<option value="CK">+682</option>
	<option value="CL">+56</option>
	<option value="CM">+237</option>
	<option value="CN">+86</option>
	<option value="CO">+57</option>
	<option value="CR">+506</option>
	<option value="CU">+53</option>
	<option value="CV">+238</option>
	<option value="CX">+61</option>
	<option value="CY">+357</option>
	<option value="CZ">+420</option>
	<option value="DE">+49</option>
	<option value="DJ">+253</option>
	<option value="DK">+45</option>
	<option value="DM">+1767</option>
	<option value="DO">+1809</option>
	<option value="DZ">+213</option>
	<option value="EC">+593</option>
	<option value="EE">+372</option>
	<option value="EG">+20</option>
	<option value="ER">+291</option>
	<option value="ES">+34</option>
	<option value="ET">+251</option>
	<option value="FI">+358</option>
	<option value="FJ">+679</option>
	<option value="FK">+500</option>
	<option value="FM">+691</option>
	<option value="FO">+298</option>
	<option value="FR">+33</option>
	<option value="GA">+241</option>
	<option value="GB">+44</option>
	<option value="GD">+1473</option>
	<option value="GE">+995</option>
	<option value="GH">+233</option>
	<option value="GI">+350</option>
	<option value="GL">+299</option>
	<option value="GM">+220</option>
	<option value="GN">+224</option>
	<option value="GQ">+240</option>
	<option value="GR">+30</option>
	<option value="GT">+502</option>
	<option value="GU">+1671</option>
	<option value="GW">+245</option>
	<option value="GY">+592</option>
	<option value="HK">+852</option>
	<option value="HN">+504</option>
	<option value="HR">+385</option>
	<option value="HT">+509</option>
	<option value="HU">+36</option>
	<option value="ID">+62</option>
	<option value="IE">+353</option>
	<option value="IL">+972</option>
	<option value="IM">+44</option>
	<option value="IQ">+964</option>
	<option value="IR">+98</option>
	<option value="IS">+354</option>
	<option value="IT">+39</option>
	<option value="JM">+1876</option>
	<option value="JO">+962</option>
	<option value="JP">+81</option>
	<option value="KE">+254</option>
	<option value="KG">+996</option>
	<option value="KH">+855</option>
	<option value="KI">+686</option>
	<option value="KM">+269</option>
	<option value="KN">+1869</option>
	<option value="KP">+850</option>
	<option value="KR">+82</option>
	<option value="KW">+965</option>
	<option value="KY">+1345</option>
	<option value="KZ">+7</option>
	<option value="LA">+856</option>
	<option value="LB">+961</option>
	<option value="LC">+1758</option>
	<option value="LI">+423</option>
	<option value="LK">+94</option>
	<option value="LR">+231</option>
	<option value="LS">+266</option>
	<option value="LT">+370</option>
	<option value="LU">+352</option>
	<option value="LV">+371</option>
	<option value="LY">+218</option>
	<option value="MA">+212</option>
	<option value="MC">+377</option>
	<option value="MD">+373</option>
	<option value="ME">+382</option>
	<option value="MF">+1599</option>
	<option value="MG">+261</option>
	<option value="MH">+692</option>
	<option value="MK">+389</option>
	<option value="ML">+223</option>
	<option value="MM">+95</option>
	<option value="MN">+976</option>
	<option value="MO">+853</option>
	<option value="MP">+1670</option>
	<option value="MR">+222</option>
	<option value="MS">+1664</option>
	<option value="MT">+356</option>
	<option value="MU">+230</option>
	<option value="MV">+960</option>
	<option value="MW">+265</option>
	<option value="MX">+52</option>
	<option value="MY">+60</option>
	<option value="MZ">+258</option>
	<option value="NA">+264</option>
	<option value="NC">+687</option>
	<option value="NE">+227</option>
	<option value="NG">+234</option>
	<option value="NI">+505</option>
	<option value="NL">+31</option>
	<option value="NO">+47</option>
	<option value="NP">+977</option>
	<option value="NR">+674</option>
	<option value="NU">+683</option>
	<option value="NZ">+64</option>
	<option value="OM">+968</option>
	<option value="PA">+507</option>
	<option value="PE">+51</option>
	<option value="PF">+689</option>
	<option value="PG">+675</option>
	<option value="PH">+63</option>
	<option value="PK">+92</option>
	<option value="PL">+48</option>
	<option value="PM">+508</option>
	<option value="PN">+870</option>
	<option value="PR">+1</option>
	<option value="PT">+351</option>
	<option value="PW">+680</option>
	<option value="PY">+595</option>
	<option value="QA">+974</option>
	<option value="RO">+40</option>
	<option value="RS">+381</option>
	<option value="RU">+7</option>
	<option value="RW">+250</option>
	<option value="SA">+966</option>
	<option value="SB">+677</option>
	<option value="SC">+248</option>
	<option value="SD">+249</option>
	<option value="SE">+46</option>
	<option value="SG">+65</option>
	<option value="SH">+290</option>
	<option value="SI">+386</option>
	<option value="SK">+421</option>
	<option value="SL">+232</option>
	<option value="SM">+378</option>
	<option value="SN">+221</option>
	<option value="SO">+252</option>
	<option value="SR">+597</option>
	<option value="ST">+239</option>
	<option value="SV">+503</option>
	<option value="SY">+963</option>
	<option value="SZ">+268</option>
	<option value="TC">+1649</option>
	<option value="TD">+235</option>
	<option value="TG">+228</option>
	<option value="TH">+66</option>
	<option value="TJ">+992</option>
	<option value="TK">+690</option>
	<option value="TL">+670</option>
	<option value="TM">+993</option>
	<option value="TN">+216</option>
	<option value="TO">+676</option>
	<option value="TR">+90</option>
	<option value="TT">+1868</option>
	<option value="TV">+688</option>
	<option value="TW">+886</option>
	<option value="TZ">+255</option>
	<option value="UA">+380</option>
	<option value="UG">+256</option>
	<option value="US">+1</option>
	<option value="UY">+598</option>
	<option value="UZ">+998</option>
	<option value="VA">+39</option>
	<option value="VC">+1784</option>
	<option value="VE">+58</option>
	<option value="VG">+1284</option>
	<option value="VI">+1340</option>
	<option value="VN">+84</option>
	<option value="VU">+678</option>
	<option value="WF">+681</option>
	<option value="WS">+685</option>
	<option value="XK">+381</option>
	<option value="YE">+967</option>
	<option value="YT">+262</option>
	<option value="ZA">+27</option>
	<option value="ZM">+260</option>
	<option value="ZW">+263</option>
								
								  </select></span>
								<input type="text" data-minlength="10" maxlength="10" class="form-control" name="mobile_no"  value="<?php echo $row['mobile_no'];?>" required>
								
								<span class="input-group-addon bg-primary text-white"><i class="fa fa-phone frm-ico"></i></span>
								
							</div>
								<div class="help-block">Please Enter Valid Mobile No.</div>	
								</div>
							</div>
					
						<div class="form-group">
							<label for="inputName" class="control-label">Branch</label>
							<div class="row">
								<div class="form-group col-sm-6">
							<select class="form-control" name="branch">
					             	    <option value="">Select Branch</option>
										 <?php
									
				$result = $db->prepare("SELECT * FROM branch");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?>
					                 	<option value="<?php echo $row['branch_name'];?>"><?php echo $row['branch_name'];?></option>
                                    
                           <?php  }?>
                              </select>
						</div>
						</div>
						
						
						
                          <div class="form-group">
							<label for="inputName" class="control-label">Subject</label>
							<div class="row">
								<div class="form-group col-sm-6">
							<select class="form-control" name="subject">
					             	    <option value="">Select Subject</option>
										 <?php
									$id=$_GET['asign'];
				$result = $db->prepare("SELECT * FROM subject");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){  
				
               ?>
					                 	<option value="<?php echo $row['subject_name'];?>"><?php echo $row['subject_name'];?></option>
                                    
                           <?php  }?>
                              </select>
						</div>
						</div>						
						<div class="form-group">
							<label for="inputPassword" class="control-label">Password</label>
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" data-minlength="6" class="form-control" name="password" id='p' value="<?php echo $row['password'];?>" required>
									<div class="help-block">Minimum of 6 characters</div>
								</div>
								<div class="form-group col-sm-6">
								<button type="button" class="btn btn-primary waves-effect waves-light" value ='generate' onclick='document.getElementById("p").value = Password.generate(16)'>Generate</button>							
								</div>
								
							</div>
							
							<div class="box-content">
							<div class="form-group col-sm-6">
					<h4 class="box-title">Upload Photo</h4>					
	                   <input type="file" id="input-file-now-custom-1" class="dropify"  name="file"/>
				</div>
						</div>	
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
						</div>
						
						<?php  }?>
					</form>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
		</div>
		<script>



var Password = {
 
  _pattern : /[a-zA-Z0-9]/,
  
  
  _getRandomByte : function()
  {
    // http://caniuse.com/#feat=getrandomvalues
    if(window.crypto && window.crypto.getRandomValues) 
    {
      var result = new Uint8Array(1);
      window.crypto.getRandomValues(result);
      return result[0];
    }
    else if(window.msCrypto && window.msCrypto.getRandomValues) 
    {
      var result = new Uint8Array(1);
      window.msCrypto.getRandomValues(result);
      return result[0];
    }
    else
    {
      return Math.floor(Math.random() * 256);
    }
  },
  
  generate : function(length)
  {
    return Array.apply(null, {'length': length})
      .map(function()
      {
        var result;
        while(true) 
        {
          result = String.fromCharCode(this._getRandomByte());
          if(this._pattern.test(result))
          {
            return result;
          }
        }        
      }, this)
      .join('');  
  }    
    
};

		</script>
		<!-- /.row small-spacing -->		
		<footer class="footer">
			<ul class="list-inline">
				<li><img src="assets/images/logo.png" alt="" class="ico-img">  2019 © Codehex Team</li>
				<li><a href="#">Privacy & Terms </a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>
	<!-- Full Screen Plugin -->
	<script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

	<!-- Validator -->
	<script src="assets/plugin/validator/validator.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
	<script src="assets/color-switcher/color-switcher.min.js"></script>
	

	<!-- Datepicker -->
	<script src="assets/plugin/datepicker/js/bootstrap-datepicker.min.js"></script>
	
	<!-- DateRangepicker -->
	<script src="assets/plugin/daterangepicker/daterangepicker.js"></script>

	<!-- Demo Scripts -->
	<script src="assets/scripts/form.demo.min.js"></script>
	<script src="assets/plugin/dropify/js/dropify.min.js"></script>
	<script src="assets/scripts/fileUpload.demo.min.js"></script>

	
	
</body>
</html>