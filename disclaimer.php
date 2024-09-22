<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disclaimer - MirPO Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            position: relative;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light background color */
        }
        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/mirpo.jpg'); /* Replace with your image path */
            background-repeat: repeat;
            background-size: cover;
            z-index: -1;
            filter: blur(0.50px); /* Adjust blur as needed */
            opacity: 0.3; /* Adjust opacity as needed */
        }
        .container {
            background: rgba(255, 255, 255, 0.9); /* Slightly transparent background for readability */
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .back-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Background Image -->
    <div class="background-image"></div>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Your navbar content -->
    </nav>

    <!-- Disclaimer Section -->
    <div class="container">
        <h2 class="text-center mb-4">Disclaimer</h2>
        <p><strong>The information provided by the MirPO Database is for general informational purposes only. All data and content are provided in good faith, and while we strive to keep the information accurate and up-to-date, we make no representations or warranties of any kind, express or implied, regarding the completeness, accuracy, reliability, or availability of the data.</strong></p>
        <p><strong>No Professional Advice</strong></p>
        <p>The content on this website is not intended as, and should not be construed as, professional advice or a substitute for professional consultation. Users are encouraged to consult with qualified professionals for specific advice and information tailored to their particular needs.</p>
        
        <!-- Back to Home Page Button -->
        <div class="text-center back-button">
            <a href="index.php" class="btn btn-primary">Back to Home Page</a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
