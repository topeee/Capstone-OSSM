<?php
session_start(); // Start the session
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="Footer.Clean.icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="img/png" href="logo.png">
    <title>Senior Citizen Landing Page</title>
</head>

<style>
    body {
  background: linear-gradient(#00bfff, #87cefa);
  background-size: cover; 
  background-position: center;
  background-attachment: fixed;
  min-height: 100vh;
  margin: 0;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow-x: hidden;
}

.navbar-brand-logo {
  margin-right: 8px;
}

.brand-name {
  font-size: 22px;
  font-weight: bold;
  font-family: Arial, Helvetica, sans-serif;
  padding-left: 6px;
}

.username {
  color: white;
  margin-left: 10px;
  font-size: 1.2rem;
}

.minibanner {
    max-width: 100%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.faq-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    padding: 20px;
}

.faq {
    max-width: 700px;
    width: 100%;
}

.card {
    width: 80%;
    margin: 0 auto;
}

.inner-card {
    display: flex;
    margin-top: 20px;
}

.card-body .row .col-6 {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-body .row .col-6 h5 {
    font-weight: bold;
}

.card-body .row .col-6 p, .card-body .row .col-6 ul {
    margin-bottom: 15px;
}


html, body {
  height: 100%;
}

.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  width: 340px;
  height: 70px;
  font-family: 'Roboto', sans-serif;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.678);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  }

.button:hover {
  background-color: #2ed0e5;
  box-shadow: 0px 15px 20px rgba(46, 223, 229, 0.4);
  color: #fff;
  transform: translateY(-7px);
}

.guide-container {
    max-width: 800px;
    margin: auto;
    padding: 20px;
}

.guide-title {
    text-align: center;
    margin-bottom: 20px;
}

.step {
    margin-bottom: 20px;
}

.step-content {
    display: none; /* Hidden by default */
    font-size: 120%;
}

.step-title {
    cursor: pointer;
}

.step-title:hover {
    color: #007bff; /* Optional: change color on hover */
}


</style>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img class="navbar-brand-logo" alt="Logo" src="logo.png" width="110" height="110">
                <span class="brand-name">OSSM</span>
            </a>
            <div class="d-flex align-items-center ms-auto">
                <span class="username">Hello, Username</span>
                <div class="dropdown-center ms-3">
                    <a class="btn btn-secondary dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="Hamburger-Icon" src="Burger icon.png" alt="Burger Icon" width="36" height="36">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="account_profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="#">History Transaction</a></li>
                        <li><a class="dropdown-item logout-item" href="login.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div id="top-bar" class="top-bar-image d-flex justify-content-center align-items-center">
            <img src="C:\Users\rexce\Desktop\ossm\Capstone-OSSM\sagw.jpg" class="minibanner" alt="Social And General Welfare">
        </div>
    
        <div class="faq-container">
            <div class="faq">
                <h1>FAQ's</h1>
                <h3>To find out if you qualify, refer to our guideline.</h3>
                <h5>(Para malaman kung ikaw ay kwalipikado, sumangguni sa ating guideline.)</h5>
            </div>
        </div>

        <div class="card">
                    <div class="card-header fs-5">
                        Assistance for Senior Citizens
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 fs-3">
                            <p>Ang programang ito ay nagbibigay ng tulong pinansyal para sa mga indigent Senior Citizen na may edad na 60 pataas. Ang tulong pinansyal ay nagkakahalaga ng P5,000 para sa bawat benepisyaryo.</p>
                        </blockquote>
                        <br>
                        <blockquote class="fs-5">
                            <p>Ikaw ba ay:</p>
                            <ul>
                                <li>Senior Citizen na may edad na 60 pataas</li>
                                <li>Walang natatanggap na pensyon mula sa SSS, GSIS, o iba pang ahensya</li>
                                <li>Walang regular na pinagkakakitaan o trabaho</li>
                                <li>Nabibilang sa indigent family (Monthly income 12,000 below)</li>
                            </ul>
                        </blockquote>
                        <br>
                        <blockquote>
                            <p class="fw-bold fs-4">Documentary Requirements for Senior Citizen Assistance</p>
                            <p class="fst-italic fs-6">(Bring 1 original and 1 photocopy on the day of the appointment)</p>
                            <ul class="fs-5">
                                <li>Barangay Certificate of Indigency (Purpose: Senior Citizen Assistance)</li>
                                <li>Certificate of Enrollment or latest school ID (if applicable)</li>
                                <li>SMR and Senior Citizen ID/Certification</li>
                                <li>Digital Copy of Signature</li>
                                <li>Digital Copy of 1x1 Picture</li>
                                <li>Digital Copy of Left Thumb Mark</li>
                                <li>Digital Copy of Right Thumb Mark</li>
                                <li>Digital Copy of Birth Certificate</li>
                                <li>Digital Copy of any valid ID to confirm Age and Residency</li>
                            </ul>
                            <div class="mb-3"></div>
                        </blockquote>
                    </div>

                    <br>


                    
                        <div class="card border-light mb-3" style="max-width: 100%; width: 60rem;">
                            <div class="card-header fs-3 fw-bold text-center">FAQs on SENIOR CITIZEN ASSISTANCE PROGRAM</div>
                            <div class="accordion" id="accordionOSSM">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 1rem;">
                                            What is the Senior Citizen Assistance Program?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionOSSM">
                                        <div class="accordion-body" style="font-size: 1.15rem;">
                                            The Senior Citizen Assistance Program is a government initiative designed to provide financial and other forms of support to senior citizens aged 60 and above. This includes financial assistance, healthcare benefits, and social services.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 1rem;">
                                            Who qualifies for the Senior Citizen Assistance Program?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionOSSM">
                                        <div class="accordion-body" style="font-size: 1.15rem;">
                                            To qualify, you must be a senior citizen aged 60 and above, not receiving any pension from SSS, GSIS, or other agencies, have no regular income or employment, and belong to an indigent family with a monthly income below a specified threshold.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 1rem;">
                                            What are the benefits provided under this program?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionOSSM">
                                        <div class="accordion-body" style="font-size: 1.15rem;">
                                            <ul>
                                                <li><strong>Financial Assistance:</strong> Monthly cash subsidies or one-time grants.</li>
                                                <li><strong>Healthcare Benefits:</strong> Free or subsidized medical services.</li>
                                                <li><strong>Social Services:</strong> Access to community programs and activities.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 1rem;">
                                            How can I apply for the Senior Citizen Assistance Program?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionOSSM">
                                        <div class="accordion-body" style="font-size: 1.15rem;">
                                            To apply, you need to visit your local social welfare office or apply online through the official government portal. You will be required to submit documentation such as proof of age, proof of income, and other relevant documents.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 1rem;">
                                            What documents are needed to apply for assistance?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionOSSM">
                                        <div class="accordion-body" style="font-size: 1.15rem;">
                                            <p class="fs-5">Commonly required documents include:</p>
                                            <ul>
                                                <li>Barangay Certificate of Indigency (Purpose: Senior Citizen Assistance)</li>
                                                <li>Certificate of Enrollment or latest school ID (if applicable)</li>
                                                <li>SMR and Senior Citizen ID/Certification</li>
                                                <li>Digital Copy of Signature</li>
                                                <li>Digital Copy of 1x1 Picture</li>
                                                <li>Digital Copy of Left Thumb Mark</li>
                                                <li>Digital Copy of Right Thumb Mark</li>
                                                <li>Digital Copy of Birth Certificate</li>
                                                <li>Digital Copy of any valid ID to confirm Age and Residency</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <br>
                    
                        <div class="guide-  container">
                            <h2 class="guide-title">What papers need to apply? See the step by step guide</h2>
                            
                            <div class="card-body">
                                <div class="step">
                                    <p class="fw-bold fs-4 step-title">Step 1: Enter Basic Information</p>
                                    <ul class="step-content">
                                        <li>First Name</li>
                                        <li>Middle Name</li>
                                        <li>Last Name</li>
                                        <li>Date of Birth</li>
                                        <li>Birth Place</li>
                                        <li>Age</li>
                                        <li>Blood Type</li>
                                        <li>Gender</li>
                                        <li>Address</li>
                                        <li>Contact Number</li>
                                        <li>Telephone</li>
                                        <li>Email Address</li>
                                    </ul>
                                </div>
                    
                                <div class="step">
                                    <p class="fw-bold fs-4 step-title">Step 2: Enter Sectoral Information</p>
                                    <ul class="step-content">
                                        <li>Educational Attainment</li>
                                        <li>Employment History</li>
                                    </ul>
                                </div>
                    
                                <div class="step">
                                    <p class="fw-bold fs-4 step-title">Step 3: Family Composition</p>
                                    <ul class="step-content">
                                        <li>Name of Spouse, Son, and Daughter</li>
                                        <li>Birthdate</li>
                                        <li>Civil Status</li>
                                        <li>PWD or Not</li>
                                        <li>Relationship</li>
                                        <li>Currently Studying?</li>
                                        <li>Currently Employed</li>
                                    </ul>
                                </div>
                                

                                <div class="step">
                                    <p class="fw-bold fs-4 step-title">Step 4: Upload Required Documents</p>
                                    <ul class="step-content">
                                        <li>Digital Copy of Signature</li>
                                        <li>Digital Copy of 1x1 Picture</li>
                                        <li>Digital Copy of Left Thumb Mark</li>
                                        <li>Digital Copy of Right Thumb Mark</li>
                                        <li>Digital Copy of Birth Certificate</li>
                                        <li>Digital Copy of any valid ID to confirm Age and Residency</li>
                                    </ul>
                                </div>
                    
                                <div class="step">
                                    <p class="fw-bold fs-4 step-title">Step 5: Submit Application</p>
                                    <ul class="step-content">
                                        <li>Submit the application form</li>
                                        <li>Receive confirmation email</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <div class="wrap">
                        <a href="Senior Citizen Application Form.html">
                            <button class="button">Apply Now?</button>
                        </a>
                    </div>

                      <br>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item"><a class="link-secondary" href="#">About usy</a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#">Services</a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#">Contact Us</a></li>
                    </ul>
                <div class="col">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item me-4">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                </svg></div>
                        </li>
                        <li class="list-inline-item me-4">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg></div>
                        </li>
                        <li class="list-inline-item">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                </svg></div>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item"><a class="link-secondary" href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // First popover
            const popoverBtn1 = document.getElementById('popoverBtn1');
            const popoverCntnt1 = document.getElementById('popoverCntnt1').innerHTML;
            popoverBtn1.setAttribute('data-bs-content', popoverCntnt1);
    
            // Second popover
            const popoverBtn2 = document.getElementById('popoverBtn2');
            const popoverCntnt2 = document.getElementById('popoverCntnt2').innerHTML;
            popoverBtn2.setAttribute('data-bs-content', popoverCntnt2);
    
            // Initialize all popovers
            const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
            const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl, {
                html: true,  // Enable HTML content
            }));
        });

        document.querySelectorAll('.faq-question').forEach((item) => {
            item.addEventListener('click', () => {
                const answer = item.nextElementSibling;

                // Toggle the active class and the visibility of the answer
                item.classList.toggle('active');
                answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
            });
        });
    
        document.addEventListener('DOMContentLoaded', () => {
    const stepTitles = document.querySelectorAll('.step-title');

    stepTitles.forEach(title => {
        title.addEventListener('click', () => {
            const content = title.nextElementSibling;
            if (content.style.display === 'none' || content.style.display === '') {
                content.style.display = 'block'; // Show
            } else {
                content.style.display = 'none'; // Hide
            }
        });
    });
});

    </script>
    
</body>
</html>