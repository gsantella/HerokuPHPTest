<?php

echo "Name: " . $_REQUEST["contactName"] . "<br />"; 
echo "Email: " . $_REQUEST["contactEmail"] . "<br />"; 
echo "Subject: " . $_REQUEST["contactSubject"] . "<br />"; 
echo "Message: " . $_REQUEST["contactMessage"] . "<br />"; 

    <div class="form-field">
					   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
				   <form>
						<input type="radio" name="gender" value="male" > Male<br>
						<input type="radio" name="gender" value="female"> Female<br>
						<input type="radio" name="gender" value="other"> Other
					</form>                
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     			   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
					   <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                     


print_r($_REQUEST)