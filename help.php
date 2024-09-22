<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Videos</title>
    <style>
        /* Background image styling */
        body {
            position: relative;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/mirpo.jpg'); /* Replace with your image path */
            background-repeat: no-repeat;
            background-size: cover;
            z-index: -1;
            filter: blur(1px); /* Adjust blur as needed */
            opacity: 0.1; /* Adjust opacity as needed */
        }
        .back-link {
            position: absolute; /* Makes it stay at the top */
            top: 20px;
            left: 20px;
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
            color: blue;
            text-decoration: underline;
            z-index: 1; /* Ensure it is above the background */
        }
        h1 {
            color: black; /* Ensure the text is readable against the background */
            text-align: center;
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-link">Back to Home</a> <!-- Back to Home link -->
    <div class="background-image"></div>
    
    <h1>Tutorial Video 1</h1>
    <embed src="uploads/MirPO-A POTATO miRNA database - Google Chrome 2024-09-17 16-07-48.mp4" height="400" width="600" />

    <h1>Tutorial Video 2</h1>
    <embed src="uploads/MirPO-A POTATO miRNA database - Google Chrome 2024-09-19 22-39-50.mp4" height="400" width="600" />
</body>
</html>
