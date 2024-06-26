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
    <meta name="description" content="Explore a curated collection of articles, books, and videos related to mental health and well-being. Learn about the importance of mental health, discover valuable resources from trusted sources such as Verywell Mind, WHO, HelpGuide.org, and Harvard Health. Additionally, find insightful books and informative videos to help you on your journey to mental wellness.">
    <meta name="tags" content="Articles, Books, and Videos.">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="assets/images/favicon_io/favicon.ico" type="image/x-icon">
    <title>Resource Library</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css/resource-library/styles.css">

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

    <main>

        <section class="articles">
            <div class="container">
                <h1 class="text-center">Must-read Articles</h1>
                <p class="text-to-read">Discover insightful articles covering a range of topics aimed at enhancing your well-being. From understanding the importance of mental health to exploring the transformative power of forgiveness, each article offers valuable insights and practical tips for improving your overall health and happiness. Dive into the articles to gain a deeper understanding of key aspects of well-being and empower yourself to lead a healthier, more fulfilling life.</p>
                <div class="row">
                    <article class="col-md-6" style="max-width: 600px;">
                        <div class="article-wrapper mb-4">
                            <figure>
                                <img src="assets/images/resource library/mental health.jpg" alt="The Importance of Mental Health" class="img-fluid" />
                            </figure>
                            <div class="article-body">
                                <h2>The Importance of Mental Health</h2>
                                <p>Stress can be defined as any type of change that causes physical, emotional, or psychological strain. Stress is your body's response to anything that requires attention or action. Everyone experiences stress to some degree. The way you respond to stress, however, makes a big difference to your overall well-being. Remember that managing stress is essential for maintaining overall health and well-being.</p>
                                <a href="https://www.verywellmind.com/the-importance-of-mental-health-3145086" class="btn btn-primary" target="_blank">Read more <i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-6" style="max-width: 600px;">
                        <div class="article-wrapper mb-4">
                            <figure>
                                <img src="assets/images/resource library/not good.jpg" alt="Not Just Good For The Soul" class="img-fluid" />
                            </figure>
                            <div class="article-body">
                                <h2>Not Just Good For The Soul</h2>
                                <p>Forgiveness is defined by replacing ill will toward an offender with goodwill. A 2023 study suggests forgiveness boosts mental health by reducing depression and anxiety levels. Other evidence suggests physical benefits as well. Studies indicate forgiveness also eases stress, improves sleep, and lowers blood pressure and heart rate. Being unable to forgive can raise blood pressure, which can affect overall heart health.</p>
                                <a href="https://www.health.harvard.edu/mind-and-mood/not-just-good-for-the-soul" class="btn btn-primary" target="_blank">Read more <i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-6" style="max-width: 600px;">
                        <div class="article-wrapper mb-4">
                            <figure>
                                <img src="assets/images/resource library/hobby.jpg" alt="Having a Hobby Tied to Happiness and Well-being" class="img-fluid" />
                            </figure>
                            <div class="article-body">
                                <h2>Having a Hobby Tied to Happiness and Well-being</h2>
                                <p>A 2023 study of 93,000 people ages 65 or older found that those who said they had hobbies reported having better health, more happiness, fewer depression symptoms, and higher life satisfaction, compared with those who said they didn't have hobbies.</p>
                                <a href="https://www.health.harvard.edu/mind-and-mood/having-a-hobby-tied-to-happiness-and-well-being" class="btn btn-primary" target="_blank">Read more <i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-6" style="max-width: 600px;">
                        <div class="article-wrapper mb-4">
                            <figure>
                                <img src="assets/images/resource library/maladaptive.jpg" alt="Maladaptive Daydreaming: What it is and how to stop it" class="img-fluid" />
                            </figure>
                            <div class="article-body">
                                <h2>Maladaptive Daydreaming: What it is and how to stop it</h2>
                                <p>We all get lost in our own thoughts from time to time. While occasional mind-wandering is common, when these daydreams become prolonged or delusional they can affect your mental and even physical health. These daydreams are vivid and complex plots that evoke intense emotions.</p>
                                <a href="https://www.health.harvard.edu/mind-and-mood/maladaptive-daydreaming-what-it-is-and-how-to-stop-it" class="btn btn-primary" target="_blank">Read more <i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-6" style="max-width: 600px;">
                        <div class="article-wrapper mb-4">
                            <figure>
                                <img src="assets/images/resource library/narcissistic.jpg" alt="Narcissistic Personality Disorder: Symptoms, diagnosis, and treatments" class="img-fluid" />
                            </figure>
                            <div class="article-body">
                                <h2>Narcissistic Personality Disorder: Symptoms, diagnosis, and treatments</h2>
                                <p>Narcissistic personality disorder (NPD) can harm a person's physical and mental health and lead to problems in social and work relationships. Learn the symptoms and treatments for NPD.</p>
                                <a href="https://www.health.harvard.edu/mind-and-mood/narcissistic-personality-disorder-symptoms-diagnosis-and-treatments" class="btn btn-primary" target="_blank">Read more <i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-6" style="max-width: 600px;">
                        <div class="article-wrapper mb-4">
                            <figure>
                                <img src="assets/images/resource library/mood.jpg" alt="Mood Boosters" class="img-fluid" />
                            </figure>
                            <div class="article-body">
                                <h2>Mood Boosters</h2>
                                <p>Everyone goes through periods when they feel low, lethargic, or stressed. These episodes usually pass after a while, but if symptoms linger or begin to interfere with daily life, people should seek professional help. Otherwise, people can take several steps to boost their mood, such as exercising more, spending time outdoors, volunteering, meditating, and keeping a gratitude journal.</p>
                                <a href="https://www.health.harvard.edu/mind-and-mood/mood-boosters" class="btn btn-primary" target="_blank">Read more <i class="bx bx-right-arrow-alt"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="books">
            <div class="container">
                <h1 class="text-center">Top Picks for Books</h1>
                <p class="text-to-read">Explore a curated selection of books designed to enhance your understanding of mental health, personal development, and emotional well-being. From groundbreaking therapeutic techniques to empowering guides for building confidence and resilience, each book offers valuable insights and practical strategies for navigating life's challenges with courage and clarity. Dive into these empowering reads and embark on a journey towards a happier, healthier, and more fulfilling life.</p>
                
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="book mb-4">
                            <img src="assets/images/resource library/feeling-good-book-cover.svg" alt="Feeling Good" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-9 mb-3">
                        <div class="book mb-4">
                            <h2>Feeling Good: The New Mood Therapy – David D. Burns</h2>
                            <p>The science underpinning David Burns’s Feeling Good: The New Mood Therapy may no longer be cutting edge, but its core message remains a powerfully relevant one. 
                                It is based on the premises of Cognitive-Behavioral Therapy (CBT). Burns explains fundamental CBT principles clearly and convincingly, and provides numerous examples and anecdotes from his clinical practice to illustrate them. 
                                Feeling Good shows us how our feelings are shaped by our thoughts. It tells us we are not our thoughts — that we can distance ourselves from negative thoughts and learn to question their validity.</p>
                        <div class="review">
                                <h3>Audience Reviews:</h3>
                                <p class="review-text" style="font-style: italic;">"Feeling Good is a timeless gem in the field of mental health. Burns beautifully elucidates the intricate relationship between our thoughts, feelings, and behaviors. His practical strategies empower readers to challenge negative thinking patterns and cultivate a more positive outlook on life."</p>
                                <p class="author">- Sarah R.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="book mb-4">
                            <img src="assets/images/resource library/the-happines-trap-book-cover.svg" alt="The Happiness Trap" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-9 mb-3">
                        <div class="book mb-4">
                            <h2>The Happiness Trap: Stop Struggling, Start Living – Russ Harris</h2>
                            <p>In The Happiness Trap, the doctor Russ Harris explains the principles of Acceptance and Commitment Therapy (ACT) — a third-wave cognitive behavioral intervention that also integrates insights from ancient wisdom practices. 
                                Harris invites us not to try to control our negative thoughts or uncomfortable feelings, nor to attempt to reason them away, but simply to de-fuse with them. 
                                He suggests we accept them and then try to let them go. So-called negative thoughts, Harris argues, are a natural part of being human. If we accept that we don’t always think happy thoughts and will also experience feelings such as sadness, anger, and shame occasionally, these thoughts and feelings will come and go more naturally.</p>
                        </div>
                        <div class="review">
                            <h3>Audience Reviews:</h3>
                            <p class="review-text" style="font-style: italic;">"Almost ten years later I still go back and read chapters to refresh my memory. This book changed the way I lived for the better. I recommend it to everyone, even if you take only one strategy from it." </p>
                            <p class="author">- Suesan Mackay</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="book mb-4">
                            <img src="assets/images/resource library/the-confidence-book-cover.svg" alt="The Confidence Code for Girls" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-9 mb-3">
                        <div class="book mb-4">
                            <h2>The Confidence Code for Girls: Taking Risks, Messing Up, & Becoming Your Amazingly Imperfect, Totally Powerful Self – Katty Kay & Claire Shipman</h2>
                            <p>This book is aimed at girls. It offers insights and practical advice on building confidence, overcoming self-doubt, and embracing our unique strengths.
                                It empowers teenage girls to navigate challenges, take risks, and develop resilience. The book contains many valuable practical tips and powerful and inspiring anecdotes that teach girls to become bold, brave, and fearless.</p>
                        </div>
                        <div class="review">
                            <h3>Audience Reviews:</h3>
                            <p class="review-text" style="font-style: italic;">"Wow!!! I love love love this book for girls. Every single day I work with girls who suffer so much because they don’t have the tools The Confidence Code for Girls provides. It gives tweens tips and tools to manage everything from stress to self-doubt to sticky social situations."</p>
                            <p class="author">- Phyllis L.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="book mb-4">
                            <img src="assets/images/resource library/dare-to-be-you-book-cover.svg" alt="Dare to Be You" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-9 mb-3">
                        <div class="book mb-4">
                            <h2>Dare to Be You: Defy Self-Doubt, Fearlessly Follow Your Path and Be Confidently You! – Matthew Syed</h2>
                            <p>Syed’s sequel to the award-winning You Are Awesome draws on examples from sports, science, and business.
                                Dare to Be You encourages teenage readers to embrace their uniqueness, courageously to follow their path, and to look at the world around them more critically and discerningly.
                                It helps young teenagers appreciate the power of diverse and original thinking and to develop their inner confidence.</p>
                        </div>
                        <div class="review">
                            <h3>Audience Reviews:</h3>
                            <p class="review-text" style="font-style: italic;">"This is a superb book. Laugh out loud funny, with brilliant examples and illustrations. It really does show children how to embrace the best of themselves for what they are, how to engage with the world in a confident and dynamic way, and how not to feel pressured into fitting in. Who would want to be boringly “normal” when you can be curious, kind, and awesome?!"</p>
                            <p class="author">- Leona P</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="book mb-4">
                            <img src="assets/images/resource library/happy-healthy-minds-book-cover.svg" alt="Happy, Healthy Minds" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="book mb-4">
                            <h2>Happy, Healthy Minds: A Children’s Guide to Emotional Wellbeing – The School of Life</h2>
                            <p>This exquisitely written and nicely illustrated book examines a range of different topics that children may experience as difficult.
                                Chapters include explorations of parents, friendship, school, anxiety, technology, first love, and emotions.
                                Described as an “atlas to a child’s mind,” Happy, Healthy Minds explores ideas about how children can cope with the vicissitudes of growing up.
                                Offering a sympathetic and supportive way of looking at ourselves and the world, it equips children with emotional intelligence and coping skills and makes them feel less alone with their problems.</p>
                        </div>
                        <div class="review">
                            <h3>Audience Reviews:</h3>
                            <p class="review-text" style="font-style: italic;">"I know this book is for children, but I, as an adult, benefited a lot while reading it. I think it is a great source for adults too to understand better ourselves and our problems--anger, disappointment, low confidence, etc--in the simplest way."</p>
                            <p class="author">- Fadilla Dwianti Putri</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="videos">
            <div class="container">
                <h1 class="text-center">Videos for Positive Mental Health Transformation</h1>
                <p class="text-to-read">Immerse yourself in a collection of insightful videos aimed at promoting mental health awareness and well-being. From exploring the intricacies of mental health to providing practical tips for self-care and mindfulness, each video offers valuable perspectives and guidance for enhancing your emotional resilience and leading a more fulfilling life. With engaging visuals and heartfelt narratives, these videos seek to inspire, educate, and empower viewers to prioritize their mental well-being and embrace a healthier, happier lifestyle.</p>
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <div class="card" style="height: 100%;">
                            <div class="embed-responsive">
                                <iframe width="545" height="300" src="https://www.youtube.com/embed/G0zJGDokyWQ?si=IKLbEKrl9P7_KYPL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h2>What is Mental Health</h2>
                                <p>It delves into the realm of mental health, offering insights and encouragement for those navigating their own well-being journeys. Through heartfelt narration and poignant visuals, it explores the challenges individuals face and emphasizes the importance of self-care and seeking support. With a message of hope and resilience, the video aims to destigmatize mental health struggles and inspire viewers to prioritize their own mental well-being.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="card" style="height: 100%;">
                            <div class="embed-responsive">
                                <iframe width="545" height="300" src="https://www.youtube.com/embed/AOHT-YiOeQA?si=Q0Xcaqo2nZtGIdHn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h2>Atomic Habits for Mental Health</h2>
                                <p>It explores the importance of mental health and well-being, emphasizing the need for self-care and mindfulness practices in daily life. Through engaging visuals and insightful narration, it encourages viewers to prioritize their mental well-being and offers practical tips for incorporating self-care into their routines. Whether through meditation, exercise, or simply taking moments to pause and breathe, the video advocates for small but meaningful steps towards a healthier mind and happier life.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="card" style="height: 100%;">
                            <div class="embed-responsive">
                                <iframe width="545" height="300" src="https://www.youtube.com/embed/54sDdNa9vek?si=FOCFb1qcUzISPskX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h2>Mental Illness: What You See/ What You Don't See</h2>
                                <p>It talks about how people with mental illness deal with challenges that others might not notice. It shows how their struggles aren't always easy to see from the outside. It helps us understand their difficulties better and reminds us to be more supportive and understanding.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="card" style="height: 100%;">
                            <div class="embed-responsive">
                                <iframe width="545" height="300" src="https://www.youtube.com/embed/NQcYZplTXnQ?si=s-CC1EuOUFWc4dux" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h2>Mental Health Wellness Tips</h2>
                                <p>Here are practical ways to achieve better mental health and balance in your life, such as practicing gratitude, connecting with others, and maintaining physical health.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="card" style="height: 100%;">
                            <div class="embed-responsive">
                                <iframe width="545" height="300" src="https://www.youtube.com/embed/3QIfkeA6HBY?si=Id0q53nuNNHyz5WK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h2>8 Things You Can Do To Improve Your Mental Health</h2>
                                <p>Have you ever wondered what healthy habits you should add to your list of to-dos? We all should give enough time and attention to our mental health, and what a better way than to adopt some new, healthy habits along the way? If you keep at a habit, sooner or later it can feel like a part of you. So the healthier, the better. Looking for advice on how to improve mental health? Here are a couple of mental health tips to help you out!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <div class="card" style="height: 100%;">
                            <div class="embed-responsive">
                                <iframe width="545" height="300" src="https://www.youtube.com/embed/w4gIJVnXhsY?si=f8xE2Zw0G26YXF1N" title="The UNSPOKEN Secret To IMPROVE Mental Health! - YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h2>The UNSPOKEN Secret To IMPROVE Mental Health!</h2>
                                <p>Unlock the unspoken secret to improving mental health in this insightful video. Explore powerful strategies and techniques for enhancing well-being and resilience, and discover the hidden keys to fostering a healthier mind and happier life.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

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