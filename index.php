<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/favicon_io/favicon.ico" type="image/x-icon">
        <title>MindWhisper-HomePage</title>
        <meta name="description" content="MindWhisper is your dedicated platform for mental health support. Our comprehensive services include the SupportCare Directory, Resource Library, Suicide and Crisis Hotlines, Mental Health Test, Therapeutic Tools and Apps, and Feedback and Suggestions. Explore our curated resources and tools tailored to provide assistance, guidance, and support for your mental well-being journey.">
        <meta name="keywords" content="mental health, support, SupportCare Directory, crisis hotlines, therapy apps, psychological assessment, mental health resources, mental health test,">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css/index/style.css" />
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
            <nav>
                <div class="container">
                    <div class="row nav-ro">
                        <div class="col-lg-4 col-sm-12 no-padding">
                            <img id="logo" src="assets/images/logo.svg" alt="mindwhisper-logo">
                        </div>
                        <div id="menu" class="col-lg-5 col-sm-12 justify-content-end">
                            <ul class="menu-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="about-us.php">About</a></li>
                                <li><a href="#our-blog">Our Services</a></li>
                                <li><a href="#footer">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-12 justify-content-center text-center">
                            <button class="btn" onclick="window.location.href='signup.php';">Create an Account</button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        
        
        <section class="container-fluid">
            <div class="row slide">
                <div class="col-sm-12 col-md-12 p-0 item">
                    <div class="slider-img"><img src="assets/images/slider/1.svg" alt="slider-img-1"></div>
                    <div class="custom-container">
                        <div class="slider-captions">
                            <h1 class="slider-title">Feeling stressed or anxious?</h1>
                            <p class="slider-text">Talk to a professional through crisis hotlines for immediate assistance. Remember, reaching out for help is a courageous step towards feeling better.</p>
                            <a href="dashboard.php" class="btn">View Hotlines</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 p-0 item">
                    <div class="slider-img"><img src="assets/images/slider/3.svg" alt="slider-img-2"></div>
                    <div class="custom-container">
                        <div class="slider-captions">
                            <h1 class="slider-title">It's time for better help.</h1>
                            <p class="slider-text">If you're ready to seek professional assistance, you're in the right place. Take the first step towards improved mental health today.</p>
                            <a href="dashboard.php" class="btn">View Health Organizations</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 p-0 item">
                    <div class="slider-img"><img src="assets/images/slider/2.svg" alt="slider-img-3"></div>
                    <div class="custom-container">
                        <div class="slider-captions">
                            <h1 class="slider-title">Pressure is on?</h1>
                            <p class="slider-text">Dive into some recommended applications and tools aimed at supporting your mental health.</p>
                            <a href="dashboard.php" class="btn">View App Recommendations</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="our-blog" class="our-blog container-fluid">
            <div class="container">
                <div class="row">
                    <h1 class="text-center mt-5">Our Services</h1>
                </div>
                <div class="col-sm-12 blog-cont">
                    <div class="row no-margin">

                        <div class="col-lg-4 col-md-6">
                            <div class="blog-single" data-index="0">
                                <img src="assets/images/services/service-1.svg" alt="supportcare-cover">
                                <div class="blog-single-det">
                                    <h2>SupportCare Directory</h2>
                                    <div class="service-content">
                                        <p>Your comprehensive guide to accessing vital mental health resources and support services. Explore a wide range of institutions, hospitals, and clinics that specialize in providing expert psychological support, diagnosis, therapy, and assessment services. Whether you're seeking guidance for yourself, a loved one, or a friend, our directory is designed to connect you with professional assistance tailored to your specific needs and circumstances.</p>
                                        <ul>
                                            <li><strong>Psychological Support:</strong> Receive compassionate care and guidance from qualified mental health professionals who specialize in addressing various mental health concerns, including anxiety, depression, trauma, and more.</li>
                                            <li><strong>Diagnosis and Assessment:</strong> Access comprehensive diagnostic evaluations and assessments to gain a deeper understanding of your mental health condition and develop personalized treatment plans.</li>
                                            <li><strong>Therapy and Treatment:</strong> Explore a variety of therapeutic modalities and treatment options tailored to your unique needs, whether you require individual therapy, group counseling, medication management, or alternative healing approaches.</li>
                                        </ul>
                                        <p>In addition to service descriptions, you can also find essential contact information for each institution listed in our directory. This includes phone numbers, email addresses, and location details, allowing you to easily reach out and schedule appointments or seek immediate assistance when needed.<br><br> Furthermore, our directory offers a convenient feature that enables you to locate the nearest available institutions based on your current location. Whether you're seeking support in your local community or while traveling, our directory helps you find nearby resources quickly and efficiently.</p>
                                    </div>
                                    <button class="readbtn">Read More</button>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-single" data-index="1">
                                <img src="assets/images/services/service-2.svg" alt="mentalhealthtest-cover">
                                <div class="blog-single-det">
                                    <h2>Mental Health Test</h2>
                                    <div class="service-content">
                                        <p>Curated selection of assessments sourced from trusted organizations such as Mental Health America. These tests are meticulously chosen to provide you with valuable insights with regards to your psychological well-being.Taking proactive steps to assess and understand one's mental state is crucial for maintaining good mental health and seeking appropriate support when needed.<br><br> Our Mental Health Test service offers users a convenient and accessible way to explore various aspects of their emotional and psychological health. Each test is designed to examine different areas such as stress levels, anxiety symptoms, mood patterns, coping mechanisms, and more. While it's important to acknowledge that these tests are not a substitute for professional diagnosis or treatment, they can serve as valuable tools for self-assessment and reflection. By completing these assessments, you may gain insight into your current mental state, identify potential areas of concern, and recognize patterns or behaviors that may impact your well-being.<br><br> It's essential to approach these tests with an open mind and a willingness to engage in self-reflection. The results obtained from these assessments can prompt important conversations with healthcare professionals, therapists, or trusted individuals in your support network.</p>
                                    </div>
                                    <button class="readbtn">Read More</button>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-single" data-index="2">
                                <img src="assets/images/services/service-3.svg" alt="resourcelibrary-cover">
                                <div class="blog-single-det">
                                    <h2>Resource Library</h2>
                                    <div class="service-content">
                                        <p>A treasure trove of information curated to support your journey towards better mental well-being. Here, you can explore a diverse collection of resources including book recommendations, articles, guides, and more, all carefully selected to provide valuable insights and strategies for enhancing mental wellness.<br><br> We recognize the importance of equipping individuals with the knowledge and tools necessary to navigate the complexities of mental health. Our Resource Library serves as a comprehensive repository where users like you can find inspiration, gain understanding, and discover practical strategies to foster emotional resilience and promote overall well-being. Within our Resource Library, discover a wide range of content tailored to address various aspects of mental health. Whether you're seeking guidance on managing stress, coping with anxiety, improving relationships, practicing self-care, or understanding mental health conditions, our curated collection has something for everyone.<br><br> Explore insightful articles written by experts in the field, offering valuable perspectives, tips, and advice on topics relevant to mental wellness. Dive into recommended books and literature that provide in-depth exploration of mental health issues, personal narratives, and evidence-based strategies for healing and growth.</p>
                                    </div>
                                    <button class="readbtn">Read More</button>
                                </div>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="row justify-content-center">
        
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-single" data-index="3">
                                <img src="assets/images/services/service-4.svg" alt="hotlines-cover">
                                <div class="blog-single-det">
                                    <h2>Suicide & Crisis Hotlines</h2>
                                    <div class="service-content">
                                        <p>Our hotline directory connects you to institutions and organizations offering confidential support and guidance, connecting you with trained professionals who are ready to listen and assist you during difficult times. We understand that navigating challenging circumstances can be overwhelming, and reaching out for help is an important step towards healing and recovery. Our Suicide & Crisis Hotlines service is designed to provide you with immediate access to support resources, ensuring that help is just a phone call away when needed most.<br><br> Whether you're experiencing thoughts of suicide, struggling with overwhelming emotions, dealing with a crisis situation, or simply need someone to talk to, our hotline directory offers a lifeline of support. Trained professionals are available around the clock to provide compassionate assistance, offer practical guidance, and connect you with additional resources as needed. It's important to remember that seeking help is a sign of strength, and you are not alone in your struggles. Our Suicide & Crisis Hotlines service is here to provide you with the support and assistance you deserve, offering a safe and confidential space where you can express your feelings, receive validation, and access the help you need to navigate difficult times.<br><br> If you or someone you know is in crisis or experiencing thoughts of suicide, please don't hesitate to reach out for help. Take the first step towards healing and recovery by calling one of the hotlines listed in our directory. Help is available, and there are people who care about you and want to support you through your journey.</p>
                                    </div>
                                    <button class="readbtn">Read More</button>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-single" data-index="4">
                                <img src="assets/images/services/service-5.svg" alt="tools&app-cover">
                                <div class="blog-single-det">
                                    <h2>Therapeutic Tools and Apps</h2>
                                    <div class="service-content">
                                        <p>We've curated and ranked a selection of useful apps and tools designed to support your mental well-being and offer entertainment. Our recommendations are carefully chosen to assist you in your self-care journey and promote relaxation. We understand the importance of incorporating technology into your mental health toolkit. That's why we've compiled a curated selection of apps and tools that combine therapeutic techniques with entertainment value, providing you with engaging resources to support your emotional well-being.<br><br> Whether you're seeking stress relief, relaxation techniques, mood tracking, mindfulness exercises, or simply looking for ways to boost your mood and enhance your overall well-being, our curated collection has something for everyone. From meditation apps to mood journals, guided relaxation exercises, breathing exercises, and more, our recommendations are designed to cater to a variety of needs and preferences. Each app and tool in our curated collection is carefully vetted and ranked based on criteria such as usability, effectiveness, user reviews, and expert recommendations. This ensures that you can trust the quality and reliability of the resources recommended to you, allowing you to explore with confidence and peace of mind.</p>
                                    </div>
                                    <button class="readbtn">Read More</button>
                                </div>
                            </div>
                        </div>
        
                    </div>
        
                </div>
            </div>
        </section>
        
        <footer id="footer" class="footer">
            <div>
                <div>
                    <div>
                        <h1>Get in Touch</h1> 
                        <address>
                            <p>Legazpi, Albay</p>
                            <p>Region V, Bicol, Philippines</p>
                            <p>Email: <a href="mailto:mindwhispher@gmail.com">mindwhispher@gmail.com</a></p>
                            <p>Phone: <a href="tel:+639085930667">+63 908-593-0667</a></p>
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
            let noOfCharac = 300;
            let blogSingles = document.querySelectorAll(".blog-single");

            blogSingles.forEach((blogSingle, index) => {
                let serviceContent = blogSingle.querySelector(".service-content");
                let originalContent = serviceContent.innerHTML.trim(); 

                let limitedContent = originalContent.substring(0, noOfCharac);
                serviceContent.innerHTML = limitedContent;

                let hiddenContent = originalContent.substring(noOfCharac);
                let moreText = document.createElement("span");
                moreText.innerHTML = hiddenContent;
                moreText.classList.add("more", "hide");
                serviceContent.appendChild(moreText);

                blogSingle.querySelector(".readbtn").addEventListener("click", function() {
                    toggleContent(index);
                });
            });

            function toggleContent(index) {
                let blogSingle = document.querySelector(`.blog-single[data-index="${index}"]`);
                let moreText = blogSingle.querySelector(".more");
                let btn = blogSingle.querySelector(".readbtn");

                if (moreText.classList.contains("hide")) {
                    moreText.classList.remove("hide");
                    btn.textContent = "Read Less";
                } else {
                    moreText.classList.add("hide");
                    btn.textContent = "Read More";
                }
            }
            });

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