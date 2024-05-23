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
    <meta name="description" content="Assessment tests for mental health including PTSD, Anxiety, Depression, and Eating Disorders.">
    <meta name="tags" content="mental health, PTSD, anxiety, depression, eating disorders, assessment tests">
    <link rel="icon" href="assets/images/favicon_io/favicon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css/Mental Health Assessment/MHA.css">
    <title>Mental Health Test</title>
       
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

    <div class="container" id="main-container">
        <div class="Tcontainer">
            <h1>A Guide to Understanding Your Mental Well-being</h1>
        </div>
        <br>
        <div class="Pcontainer">
        <p>We're here to support you. Please select the test that you'd like to take so that you can get diagnosed and be treated if needed:</p>
        </div>
        <div class="Bcontainer">
            <button onclick="showTest('PTSD')">PTSD (Post Traumatic Stress Disorder)</button>
            <button onclick="showTest('Depression')">Depression</button>
            <br>
            <button onclick="showTest('Anxiety')">Anxiety</button>
            <button onclick="showTest('Eating Disorder')">Eating Disorder</button>
        </div> 
    </div>

    <div class="container question-section" id="PTSD-section">
        <h2>PTSD Test</h2>
        <p>Please answer the following questions based on how often you have experienced each symptom in the past month:</p>
        <br>
        <br>
        
        <div class="question">
            <label for="question1">1. Intrusive thoughts about a traumatic event.</label>
            <select class="response-dropdown" id="question1" onchange="selectResponse('PTSD', 1, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        
        <div class="question">
            <label for="question2">2. Avoiding activities that remind you of a traumatic event.</label>
            <select class="response-dropdown" id="question2" onchange="selectResponse('PTSD', 2, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        
        <div class="question">
            <label for="question3">3. Flashbacks or nightmares about a traumatic event.</label>
            <select class="response-dropdown" id="question3" onchange="selectResponse('PTSD', 3, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        
        <div class="question">
            <label for="question4">4. Hyperarousal or feeling on edge.</label>
            <select class="response-dropdown" id="question4" onchange="selectResponse('PTSD', 4, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        
        <div class="question">
            <label for="question5">5. Hypervigilance or heightened sensitivity to surroundings.</label>
            <select class="response-dropdown" id="question5" onchange="selectResponse('PTSD', 5, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question6">6. Difficulty sleeping or staying asleep.</label>
            <select class="response-dropdown" id="question6" onchange="selectResponse('PTSD', 6, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question7">7. Irritability or anger outbursts.</label>
            <select class="response-dropdown" id="question7" onchange="selectResponse('PTSD', 7, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question8">8. Feelings of detachment or emotional numbness.</label>
            <select class="response-dropdown" id="question8" onchange="selectResponse('PTSD', 8, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question9">9. Difficulty concentrating or focusing.</label>
            <select class="response-dropdown" id="question9" onchange="selectResponse('PTSD', 9, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question10">10. Avoidance of people, places, or activities.</label>
            <select class="response-dropdown" id="question10" onchange="selectResponse('PTSD', 10, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        <button class = "Submit"onclick="submitTest('PTSD')">Submit</button>
    </div>
    
    </div>

    <div class="container question-section" id="Depression-section">
        <h2>Depression Test</h2>
        <p>Please answer the following questions based on how often you have experienced each symptom in the past month:</p>
        <br>
        <br>
        <div class="question">
            <label for="question1">1. Persistent sadness or low mood.</label>
            <select class="response-dropdown" id="question1" onchange="selectResponse('Depression', 1, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question2">2. Loss of interest or pleasure in activities.</label>
            <select class="response-dropdown" id="question2" onchange="selectResponse('Depression', 2, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question3">3. Changes in appetite or weight.</label>
            <select class="response-dropdown" id="question3" onchange="selectResponse('Depression', 3, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question4">4. Fatigue or loss of energy.</label>
            <select class="response-dropdown" id="question4" onchange="selectResponse('Depression', 4, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question5">5. Feelings of worthlessness or excessive guilt.</label>
            <select class="response-dropdown" id="question5" onchange="selectResponse('Depression', 5, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question6">6. Muscle tension or physical symptoms of anxiety.</label>
            <select class="response-dropdown" id="question6" onchange="selectResponse('Depression', 6, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question7">7. Difficulty controlling worries or intrusive thoughts.</label>
            <select class="response-dropdown" id="question7" onchange="selectResponse('Depression', 7, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question8">8. Feelings of restlessness or being on edge.</label>
            <select class="response-dropdown" id="question8" onchange="selectResponse('Depression', 8, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question9">9. Fear of losing control or going crazy.</label>
            <select class="response-dropdown" id="question9" onchange="selectResponse('Depression', 9, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question10">10. Avoidance of situations that trigger anxiety.</label>
            <select class="response-dropdown" id="question10" onchange="selectResponse('Depression', 10, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        <button class = "Submit"onclick="submitTest('Depression')">Submit</button>
    </div>
    
    <div class="container question-section" id="Anxiety-section">
        <h2>Anxiety Test</h2>
        <p>Please answer the following questions based on how often you have experienced each symptom in the past month:</p>
        <br>
        <br>
        <div class="question">
            <label for="question1">1. Excessive worry or apprehension.</label>
            <select class="response-dropdown" id="question1" onchange="selectResponse('Anxiety', 1, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question2">2. Restlessness or feeling on edge.</label>
            <select class="response-dropdown" id="question2" onchange="selectResponse('Anxiety', 2, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question3">3. Difficulty concentrating.</label>
            <select class="response-dropdown" id="question3" onchange="selectResponse('Anxiety', 3, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question4">4. Difficulty falling or staying asleep.</label>
            <select class="response-dropdown" id="question4" onchange="selectResponse('Anxiety', 4, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question5">5. Irritability or feeling easily annoyed.</label>
            <select class="response-dropdown" id="question5" onchange="selectResponse('Anxiety', 5, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question6">6. Feeling of impending doom.</label>
            <select class="response-dropdown" id="question6" onchange="selectResponse('Anxiety', 6, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question7">7. Muscle tension or aches.</label>
            <select class="response-dropdown" id="question7" onchange="selectResponse('Anxiety', 7, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question8">8. Feeling dizzy or lightheaded.</label>
            <select class="response-dropdown" id="question8" onchange="selectResponse('Anxiety', 8, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question9">9. Feeling out of control or overwhelmed.</label>
            <select class="response-dropdown" id="question9" onchange="selectResponse('Anxiety', 9, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question10">10. Avoidance of situations that make you anxious.</label>
            <select class="response-dropdown" id="question10" onchange="selectResponse('Anxiety', 10, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        <button class = "Submit"onclick="submitTest('Anxiety')">Submit</button>
    </div>

    
        
     
    <div class="container question-section" id="EatingDisorder-section">
        <h2>Eating Disorder Test</h2>
        <p>Please answer the following questions based on how often you have experienced each symptom in the past month:</p>
        <br>
        <br>
        <div class="question">
            <label for="question1">1. Preoccupation with food, weight, or body shape.</label>
            <select class="response-dropdown" id="question1" onchange="selectResponse('Eating Disorder', 1, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        
        <div class="question">
            <label for="question2">2. Engaging in binge eating episodes.</label>
            <select class="response-dropdown" id="question2" onchange="selectResponse('Eating Disorder', 2, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        
        <div class="question">
            <label for="question3">3. Engaging in compensatory behaviors such as vomiting or excessive exercise.</label>
            <select class="response-dropdown" id="question3" onchange="selectResponse('Eating Disorder', 3, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        
        <div class="question">
            <label for="question4">4. Distorted body image or dissatisfaction with body weight or shape.</label>
            <select class="response-dropdown" id="question4" onchange="selectResponse('Eating Disorder', 4, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        
        <div class="question">
            <label for="question5">5. Feeling out of control during episodes of eating.</label>
            <select class="response-dropdown" id="question5" onchange="selectResponse('Eating Disorder', 5, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question6">6. Feeling guilty or ashamed about eating habits.</label>
            <select class="response-dropdown" id="question6" onchange="selectResponse('Eating Disorder', 6, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question7">7. Feeling out of control while eating.</label>
            <select class="response-dropdown" id="question7" onchange="selectResponse('Eating Disorder', 7, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question8">8. Obsessive thoughts about food or body image.</label>
            <select class="response-dropdown" id="question8" onchange="selectResponse('Eating Disorder', 8, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question9">9. Isolation or avoidance of social situations involving food.</label>
            <select class="response-dropdown" id="question9" onchange="selectResponse('Eating Disorder', 9, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
    
        <div class="question">
            <label for="question10">10. Using food as a means to cope with emotions.</label>
            <select class="response-dropdown" id="question10" onchange="selectResponse('Eating Disorder', 10, this.value)">
                <option value="0">Never</option>
                <option value="1">Rarely</option>
                <option value="2">Occasionally</option>
                <option value="3">Frequently</option>
                <option value="4">Very Frequently</option>
            </select>
        </div>
        <button class = "Submit" onclick="submitTest('Eating Disorder')">Submit</button>
    </div>
    

    <footer class="footer py-3">
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
        function showTest(testType) {

    document.getElementById('main-container').style.display = 'none';
   
    document.getElementById(`${testType.replace(' ', '')}-section`).style.display = 'block';
}
    
let responses = {
    'PTSD': [0, 0, 0, 0, 0],
    'Depression': [0, 0, 0, 0, 0],
    'Anxiety': [0, 0, 0, 0, 0],
    'Eating Disorder': [0, 0, 0, 0, 0]
};
    
        function selectResponse(testType, questionIndex, selectedValue) {
    responses[testType][questionIndex - 1] = parseInt(selectedValue); 
}
    
function submitTest(testType) {
    const totalScore = responses[testType].reduce((acc, curr) => acc + curr, 0);
    let severityMessage = `Based on your score, you have ${getSeverity(totalScore)} of ${testType}.`;
    if (totalScore >= 11) {
        severityMessage += "\n\nPlease consider seeking professional help for further evaluation and support.";
    }
    alert(`Your ${testType} score is: ${totalScore}. ${severityMessage}`);
    
    document.getElementById(`${testType}-section`).style.display = 'none';
    document.getElementById('main-container').style.display = 'block';
}

        function getSeverity(score) {
    if (score >= 0 && score <= 5) {
        return "Minimal or No Symptoms";
    } else if (score >= 6 && score <= 10) {
        return "Mild Symptoms";
    } else if (score >= 11 && score <= 15) {
        return "Moderate Symptoms";
    } else if (score >= 16 && score <= 20) {
        return "Moderately Severe Symptoms";
    } else {
        return "Severe Symptoms";
    }
}

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
