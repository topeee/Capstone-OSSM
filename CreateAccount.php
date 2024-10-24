<?php
session_start(); // Ensure the session is started at the beginning of the file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="64603179338-p984tmfnt1t548armn1ua3l7blvv0e67.apps.googleusercontent.com
    ">
    <script src="https://accounts.google.com/gsi/client" async></script>
    <title>Create OSSM Account</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="Create Account.css" rel="stylesheet"> <!-- Link to external CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="main-content">
        <a href="index.php">
            <img src="logo.png" alt="SM Logo" class="img-fluid logo">
        </a>
        <h2>MUNICIPAL GOVERNMENT OF</h2>
        <h1>SAN MATEO RIZAL</h1>
        <h6>Create New OSSM Account</h6>

        <div id="g_id_onload"
     data-client_id="64603179338-p984tmfnt1t548armn1ua3l7blvv0e67.apps.googleusercontent.com"
     data-context="signin"
     data-ux_mode="popup"
     data-callback="onestopsanmeto.online"
     data-nonce=""
     data-auto_select="true"
     data-itp_support="true">
</div>

<div class="g_id_signin"
     data-type="standard"
     data-shape="rectangular"
     data-theme="outline"
     data-text="signin_with"
     data-size="large"
     data-logo_alignment="left">
</div>
<?php
    if (isset($_SESSION['status'])) {
        ?>
        <div class="alert alert-danger">
            <h5><?= $_SESSION['status']; ?></h5>
        </div>
        <script>
            // Redirect to login.php after 5 seconds
            setTimeout(function() {
                window.location.href = 'login.php';
            }, 5000);
        </script>
        <?php
        unset($_SESSION['status']);
    }
    ?>
        <div class="form-container">
        
            <div class="form-container">
          
                <form class="row g-3" id="registerForm"action="code.php" method="POST" enctype="multipart/form-data">

                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                        <label for="firstname"><span style="color: red;">*</span> First name </label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                        <label for="lastname"><span style="color: red;">*</span> Last Name</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name">
                        <label for="middlename"> Middle Name</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <select class="form-select" id="suffix-dropdown" name="suffix-dropdown">
                            <option value="" selected>Select a suffix</option>
                            <option value="Jr">Jr.</option>
                            <option value="Sr">Sr.</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                        </select>
                        <label for="suffix-dropdown">Suffix</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="date" class="form-control" id="dob" name="dob" required>
                        <label for="dob"><span style="color: red;">*</span>Date of Birth</label>
                    </div>
                    <div class="col-md-6 form-floating" id="gender" name="gender" required>
                        <select class="form-select" id="gender-dropdown"name="gender-dropdown">
                            <option value="" selected>Select a gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Prefer not to say">Prefer not to say</option>
                        </select>
                        <label for="gender-dropdown"><span style="color: red;">*</span>Gender</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="tel" class="form-control" id="mn" name="mn" placeholder="Mobile Number"  required>
                        <label for="mn"><span style="color: red;">*</span> Mobile Number</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" id="tn" name="tn" placeholder="Tel Number">
                        <label for="tn"> Tel Number</label>    
                    </div>
                    <h6 class="col-12">Note: Please provide your email address and mobile number to receive updates. Your email will be your username.</h6>
                    <div class="col-md-6 form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        <label for="email"><span style="color: red;">*</span> Email</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="email" class="form-control" id="cfrm-email" name="cfrm-email" placeholder="Confirm Email" required>
                        <label for="cfrm-email"><span style="color: red;">*</span> Confirm Email</label>
                    </div>
                    <div class="col-md-2 form-floating">
                        <input type="text" class="form-control" id="house#" name="house#" placeholder="House #" required>
                        <label for="house#"><span style="color: red;">*</span> House #</label>
                    </div>
                    <div class="col-md-4 form-floating">
                        <input type="text" class="form-control" id="street" name="street" placeholder="Street" required>
                        <label for="street"><span style="color: red;">*</span> Street</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" id="sbd/vilg" name="sbd/vilg" placeholder="Subdivision or Village">
                        <label for="sbd">Subdivison or Village</label>
                    </div>
                    <div class="col-md-12 form-floating">
                        <select class="form-select" id="barangay-dropdown" name="barangay-dropdown" required>
                            <option value="" selected>Select a barangay</option>
                            <option value="Ampid I">Ampid I</option>
                            <option value="Ampid II">Ampid II</option>
                            <option value="Banaba">Banaba</option>
                            <option value="Dulong Bayan I">Dulong Bayan I</option>
                            <option value="Dulong Bayan II">Dulong Bayan II</option>
                            <option value="Guinayang">Guinayang</option>
                            <option value="Guitnangbayan I">Guitnangbayan I</option>
                            <option value="Guitnangbayan II">Guitnangbayan II</option>
                            <option value="Gulod Malaya">Gulod Malaya</option>
                            <option value="Malanday">Malanday</option>
                            <option value="Maly">Maly</option>
                            <option value="Pintong Bukawe">Pintong Bukawe</option>
                            <option value="Sto. Nino">Sto. Niño</option>
                            <option value="Sta. Ana">Sta. Ana</option>
                            <option value="Silangan">Silangan</option>
                        </select>
                        <label for="barangay-dropdown"><span style="color: red;">*</span> Barangay</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password"><span style="color: red;">*</span> Password</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="password" class="form-control" id="cfrmpassword" name="cfrmpassword" placeholder="Confirm Password" required>
                        <label for="cfrmpassword"><span style="color: red;">*</span> Confirm Password</label>
                    </div>

                    <!-- For ID uplaod -->
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="validId" class="form-label"><span style="color: red;">*</span> Please upload a valid ID</label>
                            <input type="file" class="form-control" id="validId" name="validId" accept=".jpg, .jpeg, .png" required onchange="previewId()">
                            <small class="form-text text-muted">Acceptable formats: .jpg, .jpeg, .png</small>
                        </div>
                    </div>
                 <!-- ID Preview Section -->
                 <div class="col-md-12">
                    <h6>Preview of Uploaded ID:</h6>
                    <img id="idPreview" src="#" alt="ID Preview" class="img-fluid" style="max-height: 200px; display: none;">
                    <p id="noPreview" class="text-muted">No ID uploaded yet.</p><br>
                    <button type="button" class="btn btn-danger" id="removeIdButton" style="display: none;" onclick="removeId()">Remove ID</button>
                </div>

                 <!-- Button to show list of IDs -->
                 <div class="col-md-12">
                    <button type="button" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#validIdModal">
                        Show list of valid IDs
                    </button>
                </div>
                 <!-- For list of IDs -->
                 <div class="modal fade" id="validIdModal" tabindex="-1" aria-labelledby="validIdModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="validIdModalLabel" style="color: blue;">List of Valid IDs</h5>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="bi bi-file-earmark-person"></i> PhilHealth ID</li>
                                            <li class="list-group-item"><i class="bi bi-passport"></i> Passport</li>
                                            <li class="list-group-item"><i class="bi bi-file-earmark-medical"></i> Senior Citizen ID</li>
                                            <li class="list-group-item"><i class="bi bi-card-checklist"></i> TIN ID</li>
                                            <li class="list-group-item"><i class="bi bi-person-badge"></i> UMID</li>
                                            <li class="list-group-item"><i class="bi bi-file"></i> PWD ID</li>
                                            <li class="list-group-item"><i class="bi bi-postcard"></i> Postal ID</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="register-btn" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                     <!-- For Privacy Policy -->
                    <div class="privacy-policy col-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="termsOfUse" name="termsOfUse" required>
                            <label class="form-check-label" for="termsOfUse">
                                I have read and understood the <a href="#">Terms of Use.</a>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dataPrivacyPolicy" name="dataPrivacyPolicy" required>
                            <label class="form-check-label" for="dataPrivacyPolicy">
                                I have read and understood the <a href="#">Data Privacy Policy.</a>
                            </label>
                        </div>
                    </div>
<!-- <div class="g-recaptcha" data-sitekey="6LdSsC8qAAAAAOoSY6EIMpbTt2g3UeqimI5Igu6h"></div>-->
<button type="submit"class="btn btn-primary" name="register-btn"id="submitBtn">Register Now</button>
</form>

<!-- Bootstrap Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Account Created</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Your account has been successfully created.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


            <div class="footer">
                Already have an account?
                <a href="login.php" class="link">Sign In Here!</a>
            </div>
        </div>
       
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function previewId() {

            var file = document.getElementById("validId").files[0];
            var preview = document.getElementById("idPreview");
            var noPreview = document.getElementById("noPreview");
            var removeButton = document.getElementById("removeIdButton");

            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                    noPreview.style.display = "none";
                    removeButton.style.display = "inline-block";
                };

                reader.readAsDataURL(file);

            } else {
                preview.src = "#";
                preview.style.display = "none";
                noPreview.style.display = "block";
                removeButton.style.display = "none";
            }
        }

        function removeId() {
            var fileInput = document.getElementById("validId");
            var preview = document.getElementById("idPreview");
            var noPreview = document.getElementById("noPreview");
            var removeButton = document.getElementById("removeIdButton");

            fileInput.value = "";
            preview.src = "#";     
            preview.style.display = "none";
            noPreview.style.display = "block";
            removeButton.style.display = "none";
        }
     


        document.getElementById("register").addEventListener("click", function() {
		  var email =  document.getElementById("email").value;
		  var password = document.getElementById("password").value;
		  //For new registration
		  createUserWithEmailAndPassword(auth, email, password)
		  .then((userCredential) => {
		    // Signed in 
		    const user = userCredential.user;
		    console.log(user);
		    alert("Registration successfully!!");
		    // ...
		  })
		  .catch((error) => {
		    const errorCode = error.code;
		    const errorMessage = error.message;
		    // ..
		    console.log(errorMessage);
		    alert(error);
		  });		  		  
	  });
      function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            var id_token = googleUser.getAuthResponse().id_token;

            // Send the ID token to your server
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'CreateAccount.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // The server will respond with a script to fill the form fields
                    document.body.innerHTML += xhr.responseText;
                } else {
                    console.log('Sign-in failed: ' + xhr.responseText);
                }
            };
            xhr.send('idtoken=' + id_token);
        }
    </script>

</body>
</html>
