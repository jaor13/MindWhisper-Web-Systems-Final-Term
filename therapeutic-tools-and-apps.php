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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore a curated list of mobile apps dedicated to meditation, mindfulness, and mental health. Discover popular apps like Headspace, Calm, and Wysa for anxiety management, meditation guidance, and self-care. With a variety of options ranging from peer support to AI therapy, find the perfect app to support your mental well-being journey.">
    <meta name="keywords" content="Therapeutic, Tools, Apps, mental-health, Calm, Self-Care.">
    <link rel="icon" href="assets/images/favicon_io/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css/therapeutic-tools-and-apps/apps.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Therapeutic Tools and Apps </title>
</head>

<body>
    <header id="menu-jk" class="bg-light">
        <div class="container-fluid crisis-hotline">
            <div class="row">
                <div class="col-lg-6 no-padding">
                    <p class="text-center"><strong>Help is available, speak with someone right now:</strong></p>
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

    <div class="heading text-center">
        <h1 class="text-title">Therapeutic Tools and Apps</h1>
        <p id="heading-text">Welcome to our place for feeling better! Here, you'll find apps and tools that help with your mental health. Whether you're looking for ways to relax, manage stress, or just feel happier, we've got you covered. Take a look around and start your journey toward feeling good!</p>
    </div>
  <section>

        <div class="app1">
            <p id="title">1. Headspace: Learn to Meditate</p>
            <p class="subtitle">Learn to Meditate: A few minutes could change your whole day.</p>
            <img src="assets/images/apps/HS1.svg" class="HS1" alt="Headspace">
            <img src="assets/images/apps/HS2.svg" class="HS2" alt="Headspace">
            <img src="assets/images/apps/HS3.svg" class="HS3" alt="Headspace">
            <p id="p1">Stress less, sleep soundly, and breathe easy. Headspace is your everyday mindfulness and meditation app, helping you introduce self-care, relaxation and tranquility into your everyday life. Be kind to your mind and learn general anxiety relief techniques, ways to manage stress, find your focus, and release tension in both the mind and body.</p>
        </div>

        <div class="app1">
            <p id="title">2. Smiling Mind: Meditation App</p>
            <img src="assets/images/apps/SM1.svg" class="SM1" alt="Smiling Mind">
            <img src="assets/images/apps/SM2.svg" class="SM2" alt="Smiling Mind">
            <img src="assets/images/apps/SM3.svg" class="SM3" alt="Smiling Mind">
            <p id="p1">Smiling Mind is Australia’s leading digital-led, prevention focussed mental health not-for-profit and the innovators behind Australia’s most trusted mental wellbeing app. The Smiling Mind App is a free tool, developed by psychologists and educators and downloaded by millions of people. Programs in the app are underpinned by mindfulness and positive psychology strategies and designed to build mental fitness and resilience; support good sleep, study and sports training; reduce stress and improve relationships; and promote the development of new social and emotional skills. Whether you have half an hour, or just a couple of minutes in the day, you can learn, build and practise the skills to build mental fitness and improve your mental health anytime, anywhere . Find programs tailored for children aged 3 years and older, young people and adults as well as dedicated family programs.</p>
        </div>

        <div class="app1">
            <p id="title">3. Mindfulness App</p>
            <img src="assets/images/apps/MF1.svg" class="MF1" alt="Mindfulness">
            <img src="assets/images/apps/MF2.svg" class="MF2" alt="Mindfulness">
            <img src="assets/images/apps/MF3.svg" class="MF3" alt="Mindfulness">
            <p id="p1">Feeling overwhelmed or stressed in your everyday life? Want to feel more balanced and more joyful? Enjoy a more restful sleep, stress less, and reduce your anxiety together with The Mindfulness App. With over 400 guided meditations and courses from experts around the world, we have options for every mood, time of the day, and for everyone from beginners to experienced.</p>
        </div>

        <div class="app1">
            <p id="title">4. Calm</p>
            <img src="assets/images/apps/C1.svg" class="C1" alt="Calm">
            <img src="assets/images/apps/C2.svg" class="C2" alt="Calm">
            <img src="assets/images/apps/C3.svg" class="C3" alt="Calm">
            <p id="p1">Calm is the #1 app for sleep, meditation and relaxation. Manage stress, balance moods, sleep better and refocus your attention. Guided meditation, Sleep Stories, soundscapes, breathwork and stretching exercises fill our extensive library. Practice self-healing and discover a happier you through Calm. Feel better by reducing anxiety, prioritizing your self-care and choosing a guided meditation session that fits within your busy schedule. Introduce mindfulness and breathing exercises into your daily routine and experience their life-changing benefits. Meditation novice or seasoned expert, Calm is for anyone who is looking to improve their sleep and address everyday stress. Sleep better with Sleep Stories, bedtime stories that lull you into a restful slumber. Relaxing sounds and calming music also help you meditate, focus and sleep soundly. Balance your mood and improve your sleep cycle by picking from 100+ exclusive Sleep Stories, narrated by well-known talent like Cillian Murphy, Rosé, and Jerome Flynn. Meditate daily to relieve anxiety and learn to put your personal health first. Take a deep breath and find your Calm.</p>
        </div>

        <div class="app1">
            <p id="title">5. BetterMe: Mental Health</p>
            <img src="assets/images/apps/BM1.svg" class="BM1" alt="BetterMe">
            <img src="assets/images/apps/BM2.svg" class="BM2" alt="BetterMe">
            <img src="assets/images/apps/BM3.svg" class="BM3" alt="BetterMe">
            <p id="p1">BetterMe: Self-help meditation for people who can't meditate! 🧘‍♀️ All you need is few minutes a day to bring yourself to a state of calm and wellness, and balance your life using a combination of guided meditations and techniques. BetterMe's approach is a set of simple, practical relaxation methods for anyone. You will learn how to manage daily stress and improve your mental health by breathing, which is a natural anti-anxiety therapy. Studies show that meditation can help reduce anxiety, improve sleep and concentration and enhance overall well-being. But to claim these benefits, regular and meaningful practice is key.</p>
        </div>

        <div class="app1">
            <p id="title">6. Amaha: Anxiety Self-Care</p>
            <img src="assets/images/apps/A1.svg" class="A1" alt="Amaha">
            <img src="assets/images/apps/A2.svg" class="A2" alt="Amaha">
            <img src="assets/images/apps/A3.svg" class="A3" alt="Amaha">
            <p id="p1">A place to help you feel better and stay better, Amaha is built by trained psychologists and licensed psychiatrists. The app will improve your mental health, help you cultivate mindfulness, and sleep better through self-care, therapy, and community support.</p>
        </div>

        <div class="app1">
            <p id="title">7. Wysa: Anxiety, Therapy Chatbot</p>
            <img src="assets/images/apps/W1.svg" class="W1" alt="Wysa">
            <img src="assets/images/apps/W2.svg" class="W2" alt="Wysa">
            <img src="assets/images/apps/W3.svg" class="W3" alt="Wysa">
            <p id="p1">Wysa is your cute, 'cheer me up' buddy and well being tracker. Wysa is packed with daily spiritual meditation that improves mental health and is also a perfect way to bond over family meditation. It fits right in your pocket and helps you stay emotionally healthy with mood tracking, finding optimism, reframing thoughts (CBT) in friendly chats to help you reduce sadness. Wysa builds your own personalized toolkit with tools to cope better with depression, calm anxiety, resolve sleep issues and support with grief. Wysa has mental health tests and depression tests, which helps you assess yourself symptomatically based on depression tests like PHQ9 and anxiety tests like GAD7. Wysa is your AI friend that you can chat with for free. You can talk to the cute penguin or use its free mindfulness exercises for effective anxiety relief, depression and stress management. Its therapy based techniques and conversations make for a very cute and calming therapy chat app whether you're looking to cope better with anxiety or to just manage stress. Check in with Wysa regularly to boost your emotional health and mental health.</p>
        </div>

        <div class="app1">
            <p id="title">8. MyPossibleSelf: Mental Health</p>
            <img src="assets/images/apps/MPS1.svg" class="MPS1" alt="MyPossibleSelf">
            <img src="assets/images/apps/MPS2.svg" class="MPS2" alt="MyPossibleSelf">
            <img src="assets/images/apps/MPS3.svg" class="MPS3" alt="MyPossibleSelf">
            <p id="p1">MyPossibleSelf: Mental Health is a mobile application designed to support individuals in managing their mental well-being. It offers a variety of tools and resources to help users understand, track, and improve their mental health. The app may include features such as mood tracking, guided self-help exercises, cognitive behavioral therapy techniques, relaxation techniques, goal setting, and progress monitoring. Additionally, it may provide educational content on topics related to mental health, such as stress management, anxiety, depression, and resilience. Overall, MyPossibleSelf aims to empower users to take control of their mental health and lead happier, more fulfilling lives.</p>
        </div>

        <div class="app1">
            <p id="title">9. ThoughtFullChat: Mental Health</p>
            <img src="assets/images/apps/TFC1.svg" class="TFC1" alt="ThoughtFullChat">
            <img src="assets/images/apps/TFC2.svg" class="TFC2" alt="ThoughtFullChat">
            <img src="assets/images/apps/TFC3.svg" class="TFC3" alt="ThoughtFullChat">
            <p id="p1">ThoughtFullChat is an AI-powered mental health chatbot designed to provide support, guidance, and resources to individuals struggling with mental health challenges. It offers a confidential and non-judgmental space for users to express their thoughts and feelings, receive personalized advice, and access coping strategies. ThoughtFullChat may employ techniques from cognitive behavioral therapy (CBT), mindfulness, and positive psychology to help users manage stress, anxiety, depression, and other mental health issues. Through conversation and interaction, the chatbot aims to foster self-awareness, resilience, and emotional well-being in its users.</p>
        </div>

        <div class="app1">
            <p id="title">10. VOS: Mental Health, AI Therapy</p>
            <img src="assets/images/apps/VOS1.svg" class="VOS1" alt="VOS">
            <img src="assets/images/apps/VOS2.svg" class="VOS2" alt="VOS">
            <img src="assets/images/apps/VOS3.svg" class="VOS3" alt="VOS">
            <p id="p1">VOS (Virtual Online Support): Mental Health, AI Therapy is an innovative platform that utilizes artificial intelligence to provide therapy and support for individuals dealing with mental health issues. Through chat-based interactions, VOS offers a safe and confidential space for users to express their thoughts and emotions. The AI algorithms are trained to provide empathetic responses, offer coping strategies, and guide users through therapeutic techniques such as cognitive behavioral therapy (CBT), mindfulness, and relaxation exercises. VOS can assist users in managing a wide range of mental health concerns including anxiety, depression, stress, and relationship issues. It adapts to each user's unique needs and preferences, providing personalized support 24/7 without the need for scheduling appointments or waiting for availability. The platform also offers resources such as articles, videos, and self-help tools to empower users in their mental health journey. VOS aims to complement traditional therapy by providing continuous support and guidance in between sessions, ultimately promoting long-term well-being and resilience.</p>
        </div>

        <div class="app1">
            <p id="title">11. TalkLife: 24/7 Peer Support</p>
            <img src="assets/images/apps/TL1.svg" class="TL1" alt="TalkLife">
            <img src="assets/images/apps/TL2.svg" class="TL2" alt="TalkLife">
            <img src="assets/images/apps/TL3.svg" class="TL3" alt="TalkLife">
            <p id="p1">TalkLife is an online community and peer support platform that offers 24/7 support for individuals dealing with mental health challenges. It provides a safe and welcoming space for users to share their thoughts, experiences, and feelings with others who may be going through similar struggles. The platform allows users to connect with peers from around the world in real-time chat sessions or through posts on the community forum. Whether someone is experiencing anxiety, depression, loneliness, or any other mental health issue, TalkLife provides a supportive environment where they can receive empathy, validation, and advice from others who understand what they're going through. Additionally, TalkLife may have moderators or trained volunteers who monitor the platform to ensure that interactions remain respectful and supportive. Through the power of peer support, TalkLife aims to reduce stigma, promote mental health awareness, and foster a sense of belonging and connection among its users.</p>
        </div>

        <div class="app1">
            <p id="title">12. Evolve: Self-Care & Meditation</p>
            <img src="assets/images/apps/E1.svg" class="E1" alt="Evolve">
            <img src="assets/images/apps/E2.svg" class="E2" alt="Evolve">
            <img src="assets/images/apps/E3.svg" class="E3" alt="Evolve">
            <p id="p1">Evolve: Self-Care & Meditation is a mobile app dedicated to nurturing mental well-being through self-care practices and mindfulness meditation. Its guided meditation sessions cover various topics, from stress reduction to self-compassion, led by experienced instructors. Alongside meditation, users access tools like breathing exercises, gratitude journaling, and mood tracking, fostering resilience and stress management. With personalized recommendations, Evolve empowers users to craft tailored self-care routines, promoting inner peace and fulfillment in daily life.</p>
        </div>

</section>

<footer class="footer">
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

</body>
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
</html>

                