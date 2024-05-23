<?php
	session_start();

	if (!isset($_SESSION["user"])) {
		header("Location: login.php");
		exit(); 
	}

	$email = $_SESSION["user"];
	require_once 'connect.php';

	$sql = "SELECT full_name FROM users_db WHERE email = '$email'";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		$row = mysqli_fetch_assoc($result);
		$fullName = $row['full_name'];
	} else {
		$fullName = "User";
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Dashboard for MindWhisper - Your platform for mental health support. Explore tools and resources tailored to support mental well-being.">
		<meta name="tags" content="dashboard, MindWhisper, mental health, support, tools, resources">
		<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
		<link rel="icon" href="assets/images/favicon_io/favicon.ico" type="image/x-icon">
		<title>Dashboard</title>


		<link rel="stylesheet" href="styles.css/dashboard/styles.css">
	</head>

	<body>

		<aside id="sidebar">
			<div class="profile-info">
				<label for="profile-picture-input" class="profile-picture">
					<img src="assets/images/dashboard/default-profile-photo.jpg" alt="Profile Picture" id="current-profile-pic" class="profile-photo">
					<div class="change-label">Change Profile</div>
					<input type="file" id="profile-picture-input" accept="image/*" onchange="previewProfilePicture(event)" style="display: none;">
				</label>
				<div class="profile-details">
					<h1 class="username"><?php echo $fullName?></h1>
					<p class="email"><?php echo  $email ?></p>
				</div>
			</div>
			<ul class="side-menu">
				<li>
					<a href="index.php" class="acc-info">
						<i class='bx bxs-user-rectangle'></i>
						<span class="text">Account Information</span>
					</a>
				</li>
				<li>
					<a href="index.php" class="info">
						<i class='bx bxs-info-circle'></i>
						<span class="text">Website Details</span>
					</a>
				</li>
				<li>
					<a href="index.php" class="logout">
						<i class='bx bxs-log-out-circle'></i>
						<span class="text">Logout</span>
					</a>
				</li>
			</ul>
			<div class="assistant">
				<img src="assets/images/dashboard/1.png" alt="Assistant" class="assistant-img">
				<div class="assistant-message">
					<p id="reminder"></p>
				</div>
			</div>
			<div class="assistant two">
				<img src="assets/images/dashboard/1.png" alt="Assistant" class="assistant-img">
				<div class="assistant-message">
					<p id="reminder2"></p>
				</div>
			</div>
		</aside>

		<section id="content">
			<nav>
				<form action="#">
					<div class="form-input">
						<input type="search" placeholder="Search...">
						<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
					</div>
				</form>
			</nav>
			<main>
				<header class="head-title">
					<div class="left">
						<h1>Dashboard</h1>
					</div>
				</header>
				<div class="welcome-message">
				<h2>Welcome, <?php echo $fullName?>!</h2>
					<div class="welcome-content">
						<p>Explore our dashboard packed with tools and resources tailored to support your mental well-being. Dive in and discover a range of services, all available for you to try out, completely free of charge. Your journey to better mental health starts here!</p>
					</div>
				</div>
				<div class="service-overview">
					<h2>Service Overview</h2>
					<div id="content-overview">
						<p>Welcome to our comprehensive mental health services designed to support your well-being and promote emotional resilience. At our organization, we understand the importance of prioritizing mental health and providing accessible resources for individuals seeking support and guidance.<br><br></p>
						<p>Our services encompass a range of valuable resources tailored to address various aspects of mental wellness, including:</p>
						<ul id="list-overview">
							<li><strong>SupportCare Directory:</strong> Your guide to accessing essential mental health resources and support services, connecting you with qualified professionals and institutions.</li>
							<li><strong>Mental Health Test:</strong> Curated assessments to gain insights into your emotional and psychological well-being, facilitating self-reflection and awareness.</li>
							<li><strong>Resource Library:</strong> A treasure trove of curated information, offering articles, guides, and book recommendations to support your journey towards better mental health.</li>
							<li><strong>Suicide & Crisis Hotlines:</strong> Immediate access to confidential support and guidance during challenging times, ensuring you're never alone in your struggles.</li>
							<li><strong>Therapeutic Tools and Apps:</strong> Curated selection of apps and tools designed to promote relaxation, stress relief, and overall emotional well-being.</li>
						</ul>
						<p>Whether you're seeking professional guidance, self-assessment tools, informative resources, or immediate support, our services are here to empower you on your path to mental wellness. Explore our offerings and take proactive steps towards nurturing your mental health today.</p>
					</div>
				</div>
				<div class="services">
					<h2>Our Services</h2>
					<div class="service-container">
						<div class="service-card">
							<a href="supportcare-directory.php">
								<img src="assets/images/dashboard/mental-health (1).png" alt="SupportCare Directory">
								<h3>SupportCare Directory</h3>
							</a>
						</div>
						<div class="service-card">
							<a href="mental-health-assessment.php">
								<img src="assets/images/dashboard/online-survey.png" alt="Mental Health Test">
								<h3>Mental Health Test</h3>
							</a>
						</div>
						<div class="service-card">
							<a href="resource-library.php">
								<img src="assets/images/dashboard/book.png" alt="Resource Library">
								<h3>Resource Library</h3>
							</a>
						</div>
						<div class="service-card">
							<a href="suicide-&-crisis-hotline.php">
								<img src="assets/images/dashboard/24-hours-support.png" alt="Suicide & Crisis Hotlines">
								<h3>Suicide & Crisis Hotlines</h3>
							</a>
						</div>
						<div class="service-card">
							<a href="therapeutic-tools-and-apps.php">
								<img src="assets/images/dashboard/smartphone (1).png" alt="Therapeutic Tools and Apps">
								<h3>Therapeutic Tools and Apps</h3>
							</a>
						</div>
						<div  class="service-card">
							<a href="feedback-and-suggestions.php">
								<img src="assets/images/dashboard/customer-rating.png" alt="Feedback and Suggestion">
								<h3>Feedback and Suggestion</h3>
							</a>
						</div>
					</div>
				</div>
				<div class="tips">
					<h2>Daily Insights & Tips for Mental Wellness</h2>
					<div class="content-tips">
						<div class="gif">
							<img src="assets/images/dashboard/Untitled design.gif" alt="Mental Health GIF">
						</div>
						<div class="text-content">
							<p>As we emerge from the shadows of the pandemic, a silent yet pervasive epidemic is unfolding: mental health disorders. Globally, one in eight individuals grapples with mental health conditions, and the numbers are equally concerning in the Philippines. 41% of Filipino Prosumers—those at the forefront of emerging trends—acknowledge their struggles with mental health. Among Filipino Gen-Zs, this figure soars to 73%, underscoring the urgency of addressing this issue.<br><br>But here’s the catch: stigma still shrouds mental health. Many suffer in silence, masking their true emotions to fit societal norms. The misguided belief that mental wellness is a mere choice perpetuates this silence. We must break down these barriers, fostering open dialogue and understanding.<br><br>Let’s collectively pave the way forward. 🌱 Organizations like Havas Ortega champion self-care and relaxation through initiatives like the TALK Initiative. Remember, seeking help is a sign of strength. Let’s embark on a journey toward better mental well-being—one conversation at a time.</p>
						</div>
					</div>
				</div>
			</main>
		</section>

		<script>
			const reminders = [
				"Remember to take a deep breath and relax.",
				"Don't forget to practice gratitude today.",
				"Take a moment to check in with yourself and your emotions.",
				"It's okay to ask for help when you need it.",
				"Focus on progress, not perfection.",
				"You are stronger than you think. Keep going!",
				"Take small steps every day towards your well-being.",
				"Remember to prioritize self-care today.",
				"You matter. Your mental health matters.",
				"You're doing great. Keep up the good work!"
			];
	
			const mentalHealthFacts = [
				"1 in 5 adults in the U.S. experience mental illness each year.",
				"Mental illness is not a sign of weakness; it's a medical condition.",
				"Talking about mental health can help reduce stigma and promote understanding.",
				"There are effective treatments available for mental health conditions.",
				"Recovery from mental illness is possible with proper support and treatment."
			];
	
			function displayRandomMessages() {
				const randomReminderIndex = Math.floor(Math.random() * reminders.length);
				const randomMentalHealthIndex = Math.floor(Math.random() * mentalHealthFacts.length);
				document.getElementById('reminder').innerText = reminders[randomReminderIndex];
				document.getElementById('reminder2').innerText = mentalHealthFacts[randomMentalHealthIndex];
			}
	
			window.onload = displayRandomMessages;

			function previewProfilePicture(event) {
				const input = event.target;
				if (input.files && input.files[0]) {
					const reader = new FileReader();
					reader.onload = function(e) {
						const previewImage = document.getElementById('current-profile-pic');
						previewImage.src = e.target.result;
					}
					reader.readAsDataURL(input.files[0]);
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