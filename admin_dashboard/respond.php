

<?php

// Get respond and display
				if (isset($_GET['mg'])) {
					$message = $_GET['mg'];

					if ($message == "invalid") {
						echo "
							<div class='error-respond'>
								<p>Opps! You must click the login button</p>
							</div>
						";
					}
					elseif ($message == "empty") {
						echo "
							<div class='error-respond'>
								<p>Opps! All fields are required!</p>
							</div>
						";
					}elseif ($message == "invalidMail") {
						echo "
							<div class='error-respond'>
								<p>Opps! the email you provided seems to be invalid...</p>
							</div>
						";
					}
					elseif ($message == "error") {
						echo "
							<div class='error-respond'>
								<p>Opps! something goes wrong please try agin later...</p>
							</div>
						";
					}
					elseif ($message == "passwordInvalid") {
						echo "
							<div class='error-respond'>
								<p>Opps! the password you provided to the account is invalid</p>
							</div>
						";
					}
					elseif ($message == "noAccount") {
						echo "
							<div class='error-respond'>
								<p>Opps! no account match with those details..</p>
							</div>
						";
					}
					elseif ($message == "notuser") {
						echo "
							<div class='error-respond'>
								<p>Opps! You must first login to access this page...</p>
							</div>
						";
					}
					elseif ($message == "notTheSame") {
						echo "
							<div class='error-respond'>
								<p>Opps! Password Does Not match!</p>
							</div>
						";
					}
					elseif ($message == "invalidName") {
						echo "
							<div class='error-respond'>
								<p>Opps! invalid name!</p>
							</div>
						";
					}
					elseif ($message == "sqlError") {
						echo "
							<div class='error-respond'>
								<p>Opps! Something goes wrong...!</p>
							</div>
						";
					}
					elseif ($message == "dublicateEmail") {
						echo "
							<div class='error-respond'>
								<p>Opps! Email already exist...!</p>
							</div>
						";
					}
					elseif ($message == "notclicked") {
						echo "
							<div class='error-respond'>
								<p>Opps! You must first click the button...</p>
							</div>
						";
					}
					elseif ($message == "logout") {
						echo "
							<div class='success-respond'>
								<p>Yah! You have successfully logout...</p>
							</div>
						";
					}
					elseif ($message == "signupSuccess") {
						echo "
							<div class='success-respond'>
								<p>Signup successfully! click signin</p>
							</div>
						";
					}elseif ($message == "updateSuccess") {
						echo "
							<div class='success-respond'>
								<p>Updated records successfully!</p>
							</div>
						";
					}elseif ($message == "deleteSuccess") {
						echo "
							<div class='success-respond'>
								<p>Records deleted successfully!</p>
							</div>
						";
					}
				}

				?>