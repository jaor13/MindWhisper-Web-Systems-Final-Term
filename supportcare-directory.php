<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/favicon_io/favicon.ico" type="image/x-icon">
        <title>SupportCare Directory</title>
	      <meta name="description" content="Support Care Directory is your comprehensive resource for finding trusted care services and providers. Whether you're seeking assistance for elderly care, childcare, disability support, or mental health services, we connect you with top-quality care options tailored to your needs. Explore our directory to discover compassionate caregivers and facilities in your area.">
        <meta name="tags" content="support care, care directory, care services, care providers, mental health services, care facilities, trusted care, compassionate care, support services, healthcare directory">
		
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css/support-caredirectory/styles.css" />
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
        
        <header id="menu-jk">
            <div class="container-fluid crisis-hotline">
                <div class="row">
                    <div class="col-lg-6 no-padding">
                        <p style="text-align: center;"><strong>Help is available, speak with someone right now:</strong></p>
                    </div>
                    <div class="col-lg-2 no-padding">
                        <p>
                            <span style="font-weight: bold;"><i class='bx bx-phone-call'></i><a href="tel:+028937603">(02) 8893-7603</a></span>
                        </p>
                    </div>
                    <div class="col no-padding">
                        <p>
                            <span style="font-weight: bold;"><i class='bx bx-phone-call'></i><a href="tel:+639178001123">0917-8001-123</a></span>
                             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                             <span style="font-weight: bold;"><i class='bx bx-phone-call'></i><a href="tel:+639178001123">0917-8998-727</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <section class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="slider-title">Find the Help You Need</h1>
                  <p class="slider-text">Your mental health is a priority, and timely access to support services can make a significant difference in your well-being. With our Mental Health Support Care Directory, we aim to empower you with the resources and information needed to access quality care quickly and efficiently. <br><br>Remember, you are not alone, and help is always available. Take the first step towards better mental health today.</p>
                  <div class="search-container">
                      <input type="text" class="form-control" placeholder="Search">
                      <button type="submit" class="btn btn-primary"><i class="bx bx-search"></i></button>
                  </div>
              </div>
          </div>
      </section>

      <section>
        <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                   <img src="assets/images/directory/Morico.svg" id="Morico-img" class="card-img-top" alt="bicolbehavioralmedicine">
                      <div class="card-body">
                          <p id="Morico-title" class="card-title">Ma. Angelli Lorbes-Morico</p>
                            <p id="Morico-txt" class="card-text">Dr. Marie Angelli Morico, vice chair of the Bicol Mental Health Council, urged media practitioners to be catalysts in preventing suicide as she presented the World Health Organization media guidelines on suicide reporting.  Morico stated that based on a study the media indirectly induce imitation suicide cases because of sensationalized report.</p>
                              <ul id="Morico-icon">
                                <li>
                                  <i class="bx bx-map location-icon"></i><a style="text-decoration: none;" href="https://www.google.com/maps/place/Bicol+Center+for+Behavioral+Medicine/@13.2310769,123.5469575,17z/data=!3m1!4b1!4m6!3m5!1s0x33a1096aa5c5f6d7:0xc9930bbf4337f0fc!8m2!3d13.2310717!4d123.5495324!16s%2Fg%2F11fqq9dz1_?entry=ttu" class="icon-txt" target="_blank">Bicol Medical Plaza, Legazpi City</a>
                                </li>
                                <li>
                                  <i class='bx bx-phone-call'></i><a style="text-decoration: none;" class="icon-txt" href="tel:0949 994 9102" >0949 994 9102</a>
                                </li>
                                </ul>
                                <div class="margin">
                                  <a style="text-decoration: none;" href="https://philippinepsychiatricassociation.org/psychiatrist/ma-angelli-lorbes-morico/#" target="_blank" class="btn-primary">Visit Site</a>
                                </div>
                      </div>
                </div>
            </div>
                      

              <div class="col-md-4">
                  <div class="card">
                        <img src="assets/images/directory/Irfa.svg" id="Irfa-img" class="card-img-top" alt="bicolbehavioralmedicine">
                          <div class="card-body">
                            <p id="Irfa-title" class="card-title">Dr. Irfa  Barcellano </p>
                            <p id="Irfa-text" class="card-text">Psychiatrists evaluate, diagnose, and treat patients with mental, emotional, and behavioral disorders. They conduct thorough psychiatric evaluations, develop treatment plans, prescribe medication, and evaluate treatment results. Ensure the delivery of high-quality, evidence-based interventions.</p>
                            <ul class="Irfa-icon">
                              <li>
                                <i class="bx bx-map location-icon"></i><a style="text-decoration: none;" href="https://www.google.com/maps/place/101+Legazpi+Diversion+Rd,+Legazpi+City,+Albay/@13.1602478,123.7198382,14.07z/data=!4m17!1m10!4m9!1m4!2m2!1d123.7230604!2d13.3637606!4e1!1m3!2m2!1d123.7376676!2d13.1614233!3m5!1s0x33a1016e816e01c5:0x3e7ccbe92db1df9f!8m2!3d13.16136!4d123.7375179!16s%2Fg%2F11sb73lx3_?entry=ttu" class="icon-txt" target="_blank">Washington Drive, Legazpi, Philippines</a>
                              </li>
                              <li>
                                <i class='bx bx-phone-call'></i><a style="text-decoration: none;" class="icon-txt" href="tel:0922 853 7943">0922 853 7943</a>
                              </li>
                            </ul>
                            <div class="margin">
                              <a style="text-decoration: none;" href="https://www.facebook.com/p/Dr-Irfa-Barcellano-Psychiatrist-100083152549422/" target="_blank" class="btn-primary">Visit Site</a>
                            </div>
                          </div>
                  </div>
              </div>
                  
                  

              <div class="col-md-4">
                  <div class="card">
                      <img src="assets/images/directory/CAB.svg" id="CAB-img" class="card-img-top" alt="bicolbehavioralmedicine">
                          <div class="card-body">
                            <p id="CAB-title" class="card-title">Carlo Alphonso C. Belmonte, MD</p>
                            <p id="CAB-txt" class="card-text">Dr. Carlo Alphonso Belmonte is a dedicated professional specializing in Psychiatry, providing expert care to patients in various healthcare settings. He offers compassionate and comprehensive treatment to individuals facing mental health challenges at Ago General Hospital in Legaspi City, Albay and in Camarines Norte.</p>
                            <ul id="CAB-icon">
                              <li>
                                <i class="bx bx-map location-icon"></i><a style="text-decoration: none;" href="https://www.google.com/maps/place/Ago+General+Hospital,+Rizal+Avenue,+Old+Albay+District,+Legazpi+City,+4500+Camarines+Sur/@13.1395021,123.7283949,17z/data=!3m1!4b1!4m6!3m5!1s0x33a103dd0d703f4f:0x17a94df4d65e3609!8m2!3d13.1394969!4d123.7309698!16s%2Fg%2F11s9jl92yw?entry=ttu" class="icon-txt" target="_blank">Ago General Hospital</a>
                              </li>
                              <li>
                                <i class='bx bx-phone-call'></i><a style="text-decoration: none;" class="icon-txt" href="tel:0949 994 9102">0949 994 9102</a>
                              </li>
                            </ul>
                            <div class="margin">
                              <a style="text-decoration: none;" href="https://thefilipinodoctor.com/doctor/carlo-alphonso-belmonte/"target="_blank" class="btn-primary">Visit Site</a>
                            </div>
                          </div>
                        </div>
                  </div>
              </div>

              <div class="row">

                  <div class="col-md-4">
                      <div class="card">
                        <img src="assets/images/directory/BUOSAS.svg" id="BUOSAS" class="card-img-top" alt="bicolbehavioralmedicine">
                          <div class="card-body">
                            <p id="BUOSAS-title" class="card-title">Bicol University Office of Student Affairs and Services</p>
                            <p id="BUOSAS-txt" class="card-text">The Bicol University Student Welfare Services Division (SWSD) provides counseling services, alongside with other psychosocial intervention programs, to the student body. SWSD strives to provide a supportive environment where students can address various personal, emotional, and academic concerns. </p>
                            <ul id="BUOSAS-icon">
                              <li>
                                <i class="bx bx-map location-icon"></i><a style="text-decoration: none;" href="https://www.google.com/maps/dir/13.3559623,123.7405566/13.1438978,123.7199402/@13.1462288,123.7100004,14.21z/data=!4m4!4m3!1m1!4e1!1m0?entry=ttu" class="icon-txt" target="_blank">Sitio Olag, Barangay EM’s 1 Barrio</a>
                              </li>
                              <li>
                                <i class='bx bx-phone-call'></i><a style="text-decoration: none;" class="icon-txt" href="tel:0925 254 5242">0925 254 5242</a>
                              </li>
                            </ul>
                            <div class="margin">
                              <a style="text-decoration: none;" href="https://www.facebook.com/bicoluniversityosas" target="_blank" class="btn-primary">Visit Site</a>
                            </div>
                          </div>
                      </div>
                  </div>
            
                  <div class="col-md-4">
                    <div class="card">
                      <img src="assets/images/directory/Bicol Center for Behavioral Medicine.jpg" class="card-img-top" alt="bicolbehavioralmedicine">
                        <div class="card-body">
                          <p id="BCBM-title" class="card-title">Bicol Center for Behavioral Medicine</p>
                          <p id="BCBM-txt" class="card-text">Bicol Center for Behavioral Medicine is reinventing its services geared towards ambulatory/outpatient care and reintegration of patients to their respective families and communities. The outpatient psychiatric evaluation and treatment or psychiatric consultation will continue.</p>
                          <ul class="BCBM-icon">
                            <li>
                              <i class="bx bx-map location-icon"></i><a style="text-decoration: none;"  href="https://www.google.com/maps/place/Bicol+Center+for+Behavioral+Medicine/@13.2310769,123.5469575,17z/data=!3m1!4b1!4m6!3m5!1s0x33a1096aa5c5f6d7:0xc9930bbf4337f0fc!8m2!3d13.2310717!4d123.5495324!16s%2Fg%2F11fqq9dz1_?entry=ttu" class="icon-txt" target="_blank">Ligao, Philippines</a>
                            </li>
                            <li>
                              <i class='bx bx-phone-call'></i><a style="text-decoration: none;" class="icon-txt" href="tel:0949 994 9102">0949 994 9102</a>
                            </li>
                          </ul>
                         <div class="margin">
                            <a style="text-decoration: none;" href="https://www.facebook.com/bicolbehavioralmedicine/" target="_blank" class="btn-primary">Visit Site</a>
                          </div>
                        </div>
                      </div>
                  </div>

                    <div class="col-md-4">
                      <div class="card">
                        <img src="assets/images/directory/DLMR.svg" id="DLMR" class="card-img-top" alt="bicolbehavioralmedicine">
                          <div class="card-body">
                            <p id="DLMR-title" class="card-title">DLMR Psychometric and Diagnostic Center</p>
                            <p id="DLMR-txt" class="card-text">DLMR is a psychometric testing center located in Rawis, Legazpi City. The center offers psychological and neuro-psychiatric testing for employees, face-to-face and online counseling, and assistance with adoption and annulment cases.</p>
                            <ul class="DLMR-icon">
                              <li>
                                <i class="bx bx-map location-icon"></i><a style="text-decoration: none;" href="https://www.google.com/maps/dir/13.3559623,123.7405566/13.6185071,123.1900004/@13.4334955,123.1356055,10z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0?entry=ttu" class="icon-txt" target="_blank">Door 34 Nea Bldg CBD 2 Triangulo, Naga City</a>
                              </li>
                              <li>
                                <i class='bx bx-phone-call'></i><a style="text-decoration: none;" class="icon-txt" href="tel:0906 272 7536">0906 272 7536</a>
                              </li>
                            </ul>
                            <div class="margin">
                              <a style="text-decoration: none;" href="https://www.facebook.com/bicolbehavioralmedicine/" target="_blank" class="btn-primary">Visit Site</a>
                            </div>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-md-4">
                      <div class="card">
                        <img src="assets/images/directory/HMN.svg" id="HMN-img" class="card-img-top" alt="healthwaymedicalnetwork">
                          <div class="card-body">
                            <p id="HMN-title" class="card-title">Healthway Medical Center</p>
                            <p id="HMN-txt" class="card-text">At Healthway Medical Network, we believe that healing goes far beyond treating diseases. It is about caring for individuals, understanding their unique journeys, empowering them to live life to the fullest, and seeing them beyond their disease.</p>
                            <ul class="HMN-icon">
                              <li>
                                <i class="bx bx-map location-icon"></i><a style="text-decoration: none;" href=https://www.google.com/maps/place/Healthway+Cancer+Care+Hospital/@14.503109,121.0478632,18.88z/data=!4m14!1m7!3m6!1s0x3397cff5b9f05899:0x39c7d2ca9287ce9a!2sHealthway+Cancer+Care+Hospital!8m2!3d14.5027689!4d121.0483032!16s%2Fg%2F11rsfc8xx_!3m5!1s0x3397cff5b9f05899:0x39c7d2ca9287ce9a!8m2!3d14.5027689!4d121.0483032!16s%2Fg%2F11rsfc8xx class="icon-txt" target="_blank">ARCA South, South Union Dr, Taguig, 1630 Metro Manila</a>
                              </li>
                              <li>
                                <i class='bx bx-phone-call'></i><a style="text-decoration: none;" class="icon-txt" href="tel:0917 466 2273">0917 466 2273</a>
                              </li>
                            </ul>
                            <div class="margin">
                              <a style="text-decoration: none;" href="https://healthwaymedicalnetwork.com.ph/service-categories/departments-and-centers/psychiatry/" target="_blank" class="btn-primary">Visit Site</a>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card">
                        <img src="assets/images/directory/LMMC.svg" id="LMMC-img" class="card-img-top" alt="bicolbehavioralmedicine">
                          <div class="card-body">
                            <p id="LMMC-title" class="card-title">Lipa Medix Medical Center</p>
                            <p id="LMMC-txt" class="card-text">LIPA MEDIX MEDICAL CENTER is committed to provide innovative quality healthcare and wellness services of international standards through its competent and compassionate professionals.</p>
                            <ul class="LMMC-icon">
                              <li>
                                <i class="bx bx-map location-icon"></i><a style="text-decoration: none;" href="https://www.google.com/maps/dir//W5X4%2B3Q8,+President+Jose+P.+Laurel+Hwy,+Lipa,+Batangas/@13.9476522,121.074565,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x33bd6c97ae5f5431:0x3b310cc60d42e459!2m2!1d121.1569668!2d13.9476661?entry=ttu" class="icon-txt" target="_blank">President Jose P. Laurel Hwy, Lipa, Batangas</a>
                              </li>
                              <li>
                                <i class='bx bx-phone-call'></i><a style="text-decoration: none;" class="icon-txt" href="tel:(043) 756-2342">(043) 756-2342</a>
                              </li>
                            </ul>
                            <div class="margin">
                              <a style="text-decoration: none;" href="https://lipamedix.com/doctors/" target="_blank" class="btn-primary">Visit Site</a>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="card">
                        <img src="assets/images/directory/Ateneo.svg" id="Ateneo-img" class="card-img-top" alt="bicolbehavioralmedicine">
                          <div class="card-body">
                            <p id="Ateneo-title" class="card-title">Ateneo Bulatao Center for Psychological Services</p>
                            <p id="Ateneo-txt" class="card-text">The Ateneo Bulatao Center, part of Ateneo de Manila University's Psychology Department, offers counseling, testing, workshops, and interventions to enhance psychological wellbeing for all ages. We also promote mental wellness in schools, government, NGOs, and corporations.</p>
                            <ul class="Ateneo-icon">
                              <li>
                                <i class="bx bx-map location-icon"></i><a id="Ateneo-list" style="text-decoration: none;" href="https://www.google.com/maps/place/Ateneo+de+Manila+University/@14.6395756,121.076003,17z/data=!3m1!4b1!4m6!3m5!1s0x3397b77fd9e304c9:0x61ad426d7c6cce9e!8m2!3d14.6395704!4d121.0785779!16zL20vMDF3djI0?entry=ttu" target="_blank">Katipunan Ave, Quezon City</a>
                              </li>
                              <li>
                                <i class='bx bx-envelope'></i><a style="text-decoration: none;" class="icon-txt" href="mailto:bulataocenter.ls@ateneo.edu">bulataocenter.ls@ateneo.edu</a>
                              </li>
                            </ul>
                            <div class="margin">
                              <a style="text-decoration: none;" href="https://www.facebook.com/bicolbehavioralmedicine/" target="_blank" class="btn-primary">Visit Site</a>
                            </div>
                          </div>
                      </div>
                    </div>
        </div>
        </div>
      </section>

      <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.addEventListener("keydown", function(event) {
                console.log("Key pressed at: " + new Date().toLocaleString());
            });
        
            document.addEventListener("click", function(event) {
                console.log("Clicked at: " + new Date().toLocaleString());
            });
        });
        </script>
          

            <footer class="footer">
                <div>
                    <div>
                        <div>
                            <h1>Get in Touch</h1> 
                            <address>
                                <p>Legazpi, Albay</p>
                                <p>Region V, Philippines</p>
                                <p>Email: <a href="mailto:mindwhispher@gmail.com">mindwhispher@gmail.com</a></p>
                                <p>Phone: <a href="tel:+639085930667">+63 9085930667</a></p>
                            </address>                    
                        </div>
                        <div>
                            <h2>Useful Links</h2>
                            <ul>
                                <li><a href="">Terms of Use</a></li> 
                                <li><a href="">Privacy Policy</a></li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        
        </body>    
</html>