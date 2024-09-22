<!DOCTYPE html>
<html lang="en">
<head>
    <title>MirPO-A POTATO miRNA database</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MirPO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="alisha.php">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Explore.php">Explore</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Pre-miRNA.php">Pre-miRNA</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="SecondaryStructure.php">Secondary Structure</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Pathway.php">Pathway</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Evolution.php">Evolution</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Contact">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contact Us
        </a>
        <div class="dropdown-menu" aria-labelledby="contactDropdown">
          <a class="dropdown-item" href="mailto:primary@example.com">alisha-2020-44-005@student.kau.in</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="mailto:alternative@example.com">afeedha-2020-44-038@student.kau.in</a>
        </div>
      </li>
  
 
      <li class="nav-item">
        <a class="nav-link" href="publication.php">PUBLICATIONS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="help.php">HELP</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MirPO-A Potato MiRNA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .marquee {
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            padding: 10px;
        }
        .description {
            display: none;
            overflow: auto;
            max-height: 200px; /* Adjust this value as needed */
            white-space: normal;
            margin-top: 10px;
            padding: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
        }
        .read-more {
            color: blue;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="marquee">
        <strong style="color: red; font-size: 24px;">MirPO-A Potato MiRNA DATABASE</strong> 
        <br>
        <span style="font-family: 'Times New Roman';">
            MiRPO is a comprehensive online resource dedicated to the exploration and understanding of microRNAs (miRNAs) in potato species.
        </span>
        <br>
        <span class="read-more" onclick="toggleDescription()">read more</span>
        <div class="description" style="display: none; font-family: 'Times New Roman';">
            As an essential component of gene regulation, miRNAs play a pivotal role in various biological processes, including development, stress response, and disease resistance.
            Our database provides researchers, educators, and enthusiasts with access to curated datasets that facilitate the study of miRNA sequences, target genes, and expression profiles in potatoes.
            By harnessing the power of miRNA research, MiRPO aims to contribute to the advancement of agricultural biotechnology and crop improvement strategies.

            In addition to a rich collection of miRNA data, MiRPO features user-friendly tools for data retrieval and analysis, making it accessible for users at all levels of expertise. Whether you are a seasoned researcher looking to dive deep into the molecular mechanisms of potato development or a student eager to learn about plant genetics, MiRPO offers valuable insights and resources. Explore our latest updates, including workshops and educational materials, and stay informed about groundbreaking discoveries in the field of miRNA research.

            <br><br>
            <a href="alisha.php" style="font-family: 'Times New Roman'; color: blue; text-decoration: underline;">More about MiRPO</a>
        </div>
    </div>

    <script>
        function toggleDescription() {
            const description = document.querySelector('.description');
            if (description.style.display === "none" || description.style.display === "") {
                description.style.display = "block";
            } else {
                description.style.display = "none";
            }
        }
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Marquee</title>
    <style>
        .marquee-container {
            white-space: nowrap;
            overflow: hidden;
            width: 100%;
            background-color: #f8f9fa;
            padding: 10px;
            box-sizing: border-box;
            position: relative;
        }

        .marquee-text {
            display: inline-block;
            width: 100%;
            animation: marquee 30s linear infinite; /* Slow scroll speed */
            font-size: 24px;
            color: #ff4500;
            font-family: "Monotype Corsiva", cursive;
            font-weight: bold;
            white-space: nowrap; /* Ensure text does not wrap */
        }

        @keyframes marquee {
            0% { transform: translateX(100%); } /* Start from the right */
            100% { transform: translateX(-100%); } /* End at the left */
        }

        /* Style for the modal */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="marquee-container">
        <div class="marquee-text">
            HELLO !!! WELCOME TO MiRPO - A POTATO MiRNA DATABASE || 
            <span style="padding-left: 50px;">|| LAST UPDATED ON 26TH SEPTEMBER 2024 ||</span>
            <span style="padding-left: 50px; cursor: pointer;" onclick="openModal()">|| IMPORTANT UPDATES ||</span>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>📢 Upcoming Online Workshop Announcement:</p>
            <p>We are excited to announce a 1-day online workshop on "How to Create a Website Using PHP, Utilizing XAMPP and VS Code". This hands-on session is perfect for beginners looking to dive into web development. Stay tuned, as the date and registration form will be released soon! Don't miss this opportunity to learn essential skills and start building your own websites.</p>
        </div>
    </div>

    <script>
        // Function to open the modal
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        // Close the modal when the user clicks anywhere outside of the modal
        window.onclick = function(event) {
            if (event.target == document.getElementById("myModal")) {
                document.getElementById("myModal").style.display = "none";
            }
        }
    </script>
</body>
</html>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/mirpo.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/alisha.png" alt="Second slide" style="object-fit: contain; height: 100%;">
    </div>
    <!-- Add more images as needed -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section id="Contact" class="my-4">
  <div class="py-4">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="about.php" method="post">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Description:</label>
        <input type="text" name="Description" class="form-control">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Border Box</title>
    <style>
        .border-box {
            border-width: 25px;
            border-style: groove;
            padding: 10px; /* Optional: Add some padding inside the border */
            margin-top: 20px; /* Optional: Add some space above the border box */
            height: 800px; /* Set the height of the border box */
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="border-box hidden" id="borderBox">
     📢 Upcoming Online Workshop Announcement: 

We are excited to announce a 1-day online workshop on "How to Create a Website Using PHP, Utilizing XAMPP and VS Code". This hands-on session is perfect for beginners looking to dive into web development. Stay tuned, as the date and registration form will be released soon! Don't miss this opportunity to learn essential skills and start building your own websites.
    </div>
</body>
</html>

<!-- Footer Section -->
<footer class="footer bg-dark text-white py-1"> <!-- Reduced padding for smaller height -->
    <div class="container">
        <div class="row align-items-center"> <!-- Center items vertically -->
            <!-- Left Section -->
            <div class="col-md-4">
                <p class="text-white mb-0">&copy; 2024 Department of Molecular Biology and Biotechnology, College of Agriculture, Vellayani. All Rights Reserved.</p>
            </div>
            
            <!-- Center Section -->
            <div class="col-md-4 text-center">
                <!-- You can add center content here if needed -->
            </div>
            
            <!-- Right Section -->
            <div class="col-md-4 text-right">
                <a href="faq.php" class="text-white mx-2">| FAQ |</a>
                <a href="disclaimer.php" class="text-white mx-2">| Disclaimer |</a>
            </div>
        </div>
    </div>
</footer>

<!-- Optional CSS for footer customization -->
<style>
    .footer {
        position: relative;
        bottom: 0;
        width: 100%;
        background-color: #343a40; /* Dark background color to match bg-dark class */
        padding: 0.100rem 0; /* Reduced padding for smaller height */
    }
    .footer p {
        margin: 0;
        color: #ffffff; /* Ensures the text is white */
        font-size: 0.9rem; /* Optional: Adjust font size for compactness */
    }
    .footer a {
        text-decoration: none;
        color: #ffffff; /* Ensures the link text is white */
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
