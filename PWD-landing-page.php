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
    <title>PWD Application</title>
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
                        Assistance/Application for PWD ID(Persons with Disabilities)
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 fs-3">
                            <p>Ang programang ito ay nagbibigay ng tulong pinansyal para sa mga Persons with Disabilities (PWD) na nangangailangan ng suporta. Ang tulong pinansyal ay nagkakahalaga ng P5,000 para sa bawat benepisyaryo upang makatulong sa kanilang mga pangangailangan at mapabuti ang kanilang kalidad ng buhay.</p>
                        </blockquote>
                        <br>
                        <blockquote class="fs-5">
                            <p>Ikaw ba ay:</p>
                            <ul>
                                <li>Person with Disability (PWD)</li>
                                <li>Mayroong kapansanan na nagdudulot ng limitasyon sa pang-araw-araw na gawain</li>
                                <li>Rehistradong PWD sa lokal na pamahalaan</li>
                            </ul>
                        </blockquote>
                        <br>
                        <blockquote>
                            <p class="fw-bold fs-4">Documentary Requirements para sa Online Appointment</p>
                            <p class="fst-italic fs-6">(Dalhin ang 1 original and 1 photocopy sa araw ng appointment)</p>
                            <ul class="fs-5">
                                <li>Barangay Certificate of Indigency (Purpose: PWD Assistance)</li>
                                <li>Medical Certificate (indicating the type of disability)</li>
                                <li>PWD ID or Certification from the local government</li>
                            </ul>
                        </blockquote>
                    </div>

                    <br>


                    
                        <div class="card border-light mb-3" style="max-width: 100%; width: 60rem;">
                            <div class="card-header fs-3 fw-bold text-center">FAQs on PWD ASSISTANCE PROGRAM</div>
                            <div class="accordion" id="accordionOSSM">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 1rem;">
                                            What is the PWD Assistance Program?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionOSSM">
                                        <div class="accordion-body" style="font-size: 1.15rem;">
                                            The PWD Assistance Program is a government initiative designed to provide financial and other forms of support to Persons with Disabilities (PWD). This includes financial assistance, educational support, livelihood training, and healthcare benefits to improve their quality of life.
                                            <br><br>
                                            Ang PWD Assistance Program ay isang inisyatiba ng gobyerno na naglalayong magbigay ng pinansyal at iba pang uri ng suporta sa mga Persons with Disabilities (PWD). Kasama dito ang pinansyal na tulong, suporta sa edukasyon, pagsasanay sa kabuhayan, at mga benepisyo sa kalusugan upang mapabuti ang kanilang kalidad ng buhay.
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size: 1rem;">
                                            Who qualifies for the PWD Assistance Program?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionOSSM">
                                        <div class="accordion-body" style="font-size: 1.15rem;">
                                            To qualify, you must be a registered Person with Disability (PWD) as defined by law, have a disability that limits your daily activities, and meet the income requirements specified by the program, typically for those in low-income brackets.</div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size: 55%;">
                                            What are the benefits provided under this program?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionOSSM">
                                        <div class="accordion-body" style="font-size: 115%;">
                                            <ul>
                                                <li><strong>Financial Assistance:</strong> Monthly cash subsidies or one-time grants for PWDs.</li>
                                                <li><strong>Educational Assistance:</strong> Scholarships or educational materials for PWDs.</li>
                                                <li><strong>Livelihood Support:</strong> Access to vocational training and financial aid for small businesses run by PWDs.</li>
                                                <li><strong>Healthcare Benefits:</strong> Free or subsidized medical services for PWDs.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-size: 55%;">
                                            How can I apply for the PWD Assistance Program?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionOSSM">
                                        <div class="accordion-body" style="font-size: 115%;">
                                            To apply, you need to visit your local social welfare office or apply online through the official government portal. You will be required to submit documentation such as proof of disability, proof of income, and other relevant documents.
                                            <br><br>
                                            Upang mag-apply, kailangan mong pumunta sa iyong lokal na tanggapan ng kagalingang panlipunan o mag-apply online sa opisyal na portal ng gobyerno. Kakailanganin mong magsumite ng mga dokumento tulad ng patunay ng kapansanan, patunay ng kita, at iba pang kaugnay na mga dokumento.
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-size: 55%;">
                                            What documents are needed to apply for assistance?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionOSSM">
                                        <div class="accordion-body" style="font-size: 115%;">
                                            <p class="fs-5">Commonly required documents include:</p>
                                            <ul>
                                                <li>Barangay Certificate of Indigency (Purpose: PWD Assistance)</li>
                                                <li>Medical Certificate (indicating the type of disability)</li>
                                                <li>PWD ID or Certification from the local government</li>
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
                                        <li>Place of Birth</li>
                                        <li>Religion</li>
                                        <li>Civil Status</li>
                                        <li>PWD (Person with Disability) Status</li>
                                        <li>Solo Parent Status</li>
                                        <li>Nationality</li>
                                        <li>Occupation</li>
                                        <li>Contact Number</li>
                                        <li>Contact Email Address</li>
                                    </ul>
                                </div>
                    
                                <div class="step">
                                    <p class="fw-bold fs-4 step-title">Step 2: Do you have an existing PWD ID number?</p>
                                    <ul class="step-content">
                                        <li>Yes: Enter PWD ID Number</li>
                                        <li>No: Enter Sectoral Information</li>
                                        <ul>
                                            <li>Ethnic Group</li>
                                            <li>Diagnosis</li>
                                            <li>Educational Attainment</li>
                                            <li>ID Reference No.</li>
                                            <li>Type of Disabilty</li>
                                            <li>Cause Of Disabilty</li>
                                        </ul>
                                    </ul>
                                </div>
                    
                                <div class="step">
                                    <p class="fw-bold fs-4 step-title">Step 3: Family Composition</p>
                                    <ul class="step-content">
                                        <li>Name of Family Relative</li>
                                        <li>Birthdate</li>
                                        <li>Civil Status</li>
                                        <li>PWD</li>
                                        <li>Relationship</li>
                                        <li>Currently Studying?</li>
                                        <li>Currently Studying?</li>
                                        <li><strong> If you have more than 1 family relative Press Add</strong></li>
                                    </ul>
                                </div>
                    
                                <div class="step">
                                    <p class="fw-bold fs-4 step-title">Step 4: Summary of Information</p>
                                    <ul class="step-content">
                                        <li>All of Information Displayed Categorically</li>
                                    </ul>
                                </div>
                                
                                <div class="step">
                                    <p class="fw-bold fs-4 step-title"> Step 5: Submit Information</p>
                                    <ul class="step-content">
                                        <li>Submit Information</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <div class="wrap">
                        <a href="PWD-application.php">
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
                        <li class="list-inline-item"><a class="link-secondary" href="#">About us</a></li>
                    </ul>
                    <div class="col">
                        <ul class="list-inline my-2">
                            <li class="list-inline-item me-4">
                                <div class="bs-icon-circle bs-icon-primary bs-icon">
                                    <a href="https://www.facebook.com/sanmateorizalPIO" target="_blank">
                                        <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <!-- Increased size for YouTube icon -->
                            <li class="list-inline-item me-4">
                                <div class="bs-icon-circle bs-icon-primary bs-icon" >
                                    <a href="https://www.youtube.com/@SanMateoRizal" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16" style="vertical-align: middle;">
                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="bs-icon-circle bs-icon-primary bs-icon">
                                    <a href="https://www.sanmateo.gov.ph/?fbclid=IwY2xjawGa8FxleHRuA2FlbQIxMAABHV7oEXf9A30xAMK0rZkUq2u79JjY-rg8Nx1htqvExUJJk_Bm0eYPp6P6RA_aem_EAarsNJrWise3DgKGtmDTg" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
                                          </svg>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-inline my-2">
                            <li class="list-inline-item"><a class="link-secondary" href="#">Contact Us</a></li>
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
