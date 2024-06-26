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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css/Suicide Hotline CSS/SCH.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find 24/7 crisis support and suicide prevention hotlines in the Philippines. Get free, confidential, and compassionate assistance for anxiety, depression, relationships, self-harm, and suicide.">
    <meta name="tags" content="mental health hotlines, crisis support, suicide prevention, hotline Philippines, anxiety support, depression support, relationship support, self-harm support, suicide support">
    <link rel="icon" href="assets/images/favicon_io/favicon.ico" type="image/x-icon">
    <title>Mental Health Hotlines</title>
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
                    <span style="font-weight: bold;"><i class='bx bx-phone-call'></i><a href="tel:+028937603" style="color: black; text-decoration: none;">(02) 8893-7603</a></span>
                </p>
            </div>
            <div class="col no-padding">
                <p>
                    <span style="font-weight: bold;"><i class='bx bx-phone-call'></i><a href="tel:+639178001123" style="color: black; text-decoration: none;">0917-8001-123</a></span>
                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                     <span style="font-weight: bold;"><i class='bx bx-phone-call'></i><a href="tel:+639178001123" style="color: black; text-decoration: none;">0917-8998-727</a></span>
                </p>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid text-center mt-4">
    <h1 class="mb-4" style="margin-top: 100px; font-weight: bold; font-size: 24px; color: rgb(112, 83, 11)">For everybody who needs it: <br> <p style="font-size: 48px; font-weight: bolder; color: rgb(112, 83, 11);"  >Suicide & Crisis Helplines </p> </h1>
</div>

<main class="container mt-4">
    <div class="row justify-content-center"> 

        <div class="col-md-4 mb-4"> 
            <div class="card">
                <img src="assets/images/Suicide Hotline Images/3.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">HOPELINE</h5>
                    <p class="card-text">HOPELINE provides 24/7, free, compassionate and confidential support by phone. We are here to help everyone in the Philippines who may be struggling or looking for support with anxiety, depression, loneliness, self-harm, suicide.</p>
                    <ul class="list-unstyled">
                        <li><span class="badge badge-primary">Suicide Prevention</span></li>
                        <li><span class="badge badge-primary">Depression Support</span></li>
                    </ul>
                    <p class="card-text">
                        <i class='bx bxs-phone-call'></i> Contact: <a href="tel:+0208044673"target="_blank">(02) 8804-4673</a><br>
                        <i class='bx bx-globe' ></i> Social: <a href="https://www.facebook.com/HopelinePH/" target="_blank">HOPELINE</a><br>
                        <i class='bx bxs-calendar'></i> Open 24/7
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/Suicide Hotline Images/5.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">National Center for Mental Health (NCMH) Crisis Hotline</h5>
                    <p class="card-text">NCMH Crisis Hotline provides 24/7, free, compassionate and confidential support over phone. We support whoever needs counseling</p>
                    <ul class="list-unstyled">
                        <li><span class="badge badge-primary">Mental Health Crisis Intervention</span></li>
                        <li><span class="badge badge-primary">Dementia & Alzheimer</span></li>
                        <li><span class="badge badge-primary">Abuse & Domestic Violence</span></li>
                        <li><span class="badge badge-primary">Eating Disorders & Body Image</span></li>
                        <li><span class="badge badge-primary">Depression Support</span></li>
                    </ul>
                    <p class="card-text">
                        <i class='bx bxs-phone-call'></i> Contact: <a href="tel:1553"target="_blank">1553</a><br>
                        <i class='bx bx-globe' ></i> Social: <a href="https://doh.gov.ph"target="_blank">NCMH Crisis Hotline</a><br>
                        <i class='bx bxs-calendar' ></i> Open 24/7
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/Suicide Hotline Images/2.svg " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Manila Lifeline Centre</h5>
                    <p class="card-text">Manila Lifeline Centre provides 24/7 emotional support and crisis intervention for individuals in distress.</p>
                    <ul class="list-unstyled">
                        <li><span class="badge badge-primary">Emotional Support</span></li>
                        <li><span class="badge badge-primary">Distress Intervention</span></li>
                    </ul>
                    <p class="card-text">
                        <i class='bx bxs-phone-call'></i> Contact: <a href="tel:0917-854-9191"target="_blank">0917-854-9191</a> / <a href="tel:(02)- 8969191"target="_blank">(02)- 8969191</a><br>
                        <i class='bx bx-globe' ></i> Social: None available<br>
                        <i class='bx bxs-calendar' ></i> Open 24/7
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/Suicide Hotline Images/4.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Silakbo PH</h5>
                    <p class="card-text">Silakbo PH provides 24/7 emotional support and crisis intervention via chat and call for individuals experiencing mental health issues.</p>
                    <ul class="list-unstyled">
                        <li><span class="badge badge-primary">Suicide Prevention</span></li>
                        <li><span class="badge badge-primary">Depression Support</span></li>
                    </ul>
                    <p class="card-text">
                        <i class='bx bxs-phone-call'></i> Contact: <a href="tel:+639178001123"target="_blank">0917-800-1123</a><br>
                        <i class='bx bx-globe' ></i> Social: <a href="https://www.facebook.com/silakbomentalhealth/"target="_blank">Silakbo PH</a><br>
                        <i class='bx bxs-calendar' ></i> Open 24/7
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/Suicide Hotline Images/6.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Crisis Line Philippines</h5>
                    <p class="card-text">Crisis Line Philippines provides 24/7 confidential and anonymous telephone counseling for individuals in crisis.</p>
                    <ul class="list-unstyled">
                        <li><span class="badge badge-primary">Telephone Counseling</span></li>
                        <li><span class="badge badge-primary">Confidential Support</span></li>
                    </ul>
                    <p class="card-text">
                        <i class='bx bxs-phone-call'></i> Contact: <a href="tel:028985733"target="_blank" >028985733 (Philippines only)</a> / <a href="tel:1800113000"target="_blank">1800113000 (Globe and TM subscribers)</a><br>
                        <i class='bx bx-globe' ></i> Social: None available<br>
                        <i class='bx bxs-calendar' ></i> Open 24/7
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/Suicide Hotline Images/7.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tawag Paglaum – Centro Bisaya</h5>
                    <p class="card-text">Tawag Paglaum – Centro Bisaya isn’t as well-known as other crisis hotlines on this list, but it deserves a place in everyone's phonebook. It’s a 24/7 call-based mental health helpline that has been around since 2017.</p>
                    <ul class="list-unstyled">
                        <li><span class="badge badge-primary">Mental Health Crisis Intervention</span></li>
                        <li><span class="badge badge-primary">Telephone Counseling</span></li>
                        <li><span class="badge badge-primary">Suicide Prevention</span></li>
                    </ul>
                    <p class="card-text">
                        <i class='bx bxs-phone-call'></i> Contact: <a href="tel:0966-467-9626"target="_blank">0966-467-9626 (Globe and TM)</a><br>
                        <i class='bx bx-globe' ></i> Social: <a href="https://www.facebook.com/profile.php?id=100068862624004&sk=photos_by"target="_blank">Tawag Paglaum - Centro Bisaya </a><br>
                        <i class='bx bxs-calendar' ></i> Open 24/7
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4"> 
            <div class="card">
                <img src="assets/images/Suicide Hotline Images/8.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">NGF Mindstrong</h5>
                    <p class="card-text">NGF Mindstrong is an initiative of Natasha Goulbourn Foundation.</p>
                    <ul class="list-unstyled">
                        <li><span class="badge badge-primary">Telephone Counseling</span></li>
                        <li><span class="badge badge-primary">Confidential Support</span></li>
                        <li><span class="badge badge-primary">Emotional Support</span></li>
                    </ul>
                    <p class="card-text">
                        <i class='bx bxs-phone-call'></i> Contact: <a href="tel:0918-873-467"target="_blank">0918-873-4673 (Smart)</a><br>
                        <i class='bx bx-globe' ></i> Social: <a href="https://www.facebook.com/NGFMindstrong/"target="_blank">NGFMindstrong</a><br>
                        <i class='bx bxs-calendar' ></i> Open 24/7
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/Suicide Hotline Images/1.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">In Touch: Crisis Line Philippines</h5>
                    <p class="card-text">In Touch: Crisis Line is dedicated to providing 24/7, free, compassionate, and confidential support over the phone. We are here to assist everyone in the Philippines who may be seeking support with anxiety, depression, relationships, self-harm, and suicide.</p>
                    <ul class="list-unstyled">
                        <li><span class="badge badge-primary">Emotional Support</span></li>
                        <li><span class="badge badge-primary">Telephone Counseling</span></li>
                        <li><span class="badge badge-primary">Confidential Support</span></li>
                    </ul>
                    <p class="card-text">
                        <i class='bx bxs-phone-call'></i> Contact: <a href="tel:+63288937603"target="_blank">+63 2 8893 7603</a><br>
                        <i class='bx bx-globe' ></i> Social: <a href="https://in-touch.org"target="_blank">In-Touch</a><br>
                        <i class='bx bxs-calendar' ></i> Open 24/7
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/Suicide Hotline Images/9.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bantay Bata Helpline 163</h5>
                    <p class="card-text">Bantay Bata 163 is primarily for parents and children with issues about domestic violence, sexual abuse, and other child-related concerns.</p>
                    <ul class="list-unstyled">
                        <li><span class="badge badge-primary">Telephone Counseling</span></li>
                        <li><span class="badge badge-primary">Confidential Support</span></li>
                        <li><span class="badge badge-primary">Children Mental Health Counseling</span></li>
                        <li><span class="badge badge-primary">Child Abuse and Domestic Violence Support</span></li>
                    </ul>
                    <p class="card-text">
                        <i class='bx bxs-phone-call'></i> Contact: <a href="tel:+(02) 163 "target="_blank">+(02)163(Landline)</a><br>
                        <i class='bx bx-globe' ></i> Social: <a href="https://www.facebook.com/bantaybata163PH/"target="_blank">bantaybata163PH</a><br>
                        <i class='bx bxs-calendar' ></i> Open 7AM - 7PM
                    </p>
                </div>
            </div>
        </div>

    </div>
</main>

<footer class="footer mt-auto py-3">
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
</body>
</html>
