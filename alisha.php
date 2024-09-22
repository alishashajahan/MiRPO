<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column; /* Added to allow stacking of elements */
            justify-content: center;
            align-items: center;
        }
        .container {
            display: flex; /* Flex display */
            width: 75%;
            align-items: flex-start; /* Aligns items vertically start */
        }
        .content {
            width: 60%; /* Adjusted width to account for image */
            margin-right: 20px; /* Added margin between text and image */
        }
        .side-image {
            width: 40%; /* Adjusted width for image */
            height: auto; 
            object-fit: cover; /* Ensures that aspect ratio is maintained without stretching */
            margin-top: 60px; /* Increased margin to bring the image further downwards */
        }
        h1 {
            text-align: center;
            font-family: "Monotype Corsiva", cursive;
            font-size: 80px;
            text-decoration: underline;
            color: #90ee90;
            text-shadow:  2px 4px #000000;
        }
        p {
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
            color: black;
            text-align: justify;
        }
        .back-link {
            position: absolute; /* Makes it stay at the top */
            top: 20px;
            left: 20px;
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-link">Back to Home</a> <!-- Back to Home link -->
    <div class="container"> <!-- New container div -->
        <div class="content">
            <h1>About</h1>
            <p>The MiRPO database is an innovative and cutting-edge resource specifically dedicated to potato (Solanum tuberosum) microRNAs (miRNAs). It is meticulously designed to overcome the limitations of existing databases by offering a comprehensive, precise, and continuously updated repository of miRNA information. This specialized database provides in-depth data on miRNA sequences, their precursors, the mechanisms through which they act, their target genes, and their roles in various biological processes. Utilizing MySQL and PHP, MiRPO boasts a sophisticated yet user-friendly web interface that ensures seamless access and efficient navigation. The database’s development leverages advanced bioinformatics tools, including Arctos, Trifacta, and Pentaho Data Integration, which are employed for rigorous data curation. This careful curation process guarantees that the information provided is of the highest quality and relevance, addressing the needs of researchers and practitioners in the field.</p>
            <p>The MiRPO database is instrumental in advancing agricultural research and genetic engineering, offering crucial insights into the regulatory functions of miRNAs in potato development and stress responses. It supports targeted breeding and crop improvement initiatives by providing detailed, actionable information on miRNA functions. The database also aids in understanding evolutionary aspects through comparative analysis of miRNAs across different species, contributing to the broader field of plant biotechnology. Additionally, MiRPO serves as an invaluable educational resource for students and researchers new to the field, while fostering collaboration within the scientific community. By centralizing and streamlining miRNA data, MiRPO accelerates research efforts and supports crop-specific studies tailored to the unique needs of potato crops, significantly enhancing our knowledge and capabilities in agricultural science.</p>
        </div>
        <img src='images/3d glass window logo mockup.jpg' alt='Descriptive Image Text' class='side-image'/> <!-- Image added here -->
    </div>
</body>
</html>
