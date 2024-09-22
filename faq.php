<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - MirPO Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
            background-repeat: repeat;
            background-size: cover;
            z-index: -1;
            filter: blur(0.50px); /* Adjust blur as needed */
            opacity: 0.3; /* Adjust opacity as needed */
        }
        .faq-section {
            padding: 20px;
            background-color: rgba(248, 249, 250, 0.8); /* Semi-transparent background for readability */
        }
        .faq-question {
            font-weight: bold;
        }
        .faq-answer {
            margin-bottom: 20px;
        }
        .related-resources {
            margin-top: 30px;
        }
        .related-resources ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        .back-link {
            margin-top: 20px;
            font-family: "Times New Roman", Times, serif;
            font-size: 18px;
            color: blue;
            text-decoration: underline;
        }
        .back-link:hover {
            color: darkblue;
        }
    </style>
</head>
<body>
    <!-- Background Image -->
    <div class="background-image"></div>

    <!-- Navigation bar (you can include your existing navigation bar here) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Your navbar content -->
    </nav>

    <!-- FAQ Section -->
    <div class="faq-section">
        <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions (FAQ)</h2>
            <a href="index.php" class="back-link">Back to Home</a> <!-- Back to Home link -->
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- FAQ Items -->
                    <div class="faq-item">
                        <p class="faq-question">What is the MirPO database?</p>
                        <p class="faq-answer">The MirPO database is a comprehensive resource for information on potato miRNAs, including their sequences, functions, target genes, general mechanisms, evolutionary perspectives, pre-miRNA information, secondary structure information, and associated pathways. It is designed to help researchers as well as beginners to explore and analyze miRNA data related to potatoes.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">How do I search for specific miRNAs in the database?</p>
                        <p class="faq-answer">You can use the search functionality available on the Explore page. Simply enter the miRNA name, target gene name, or related keywords into the search bar to find relevant information. The main search bar will be updated soon, and if you have further queries on how to search, you can refer to the tutorial video on the "HELP" page.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">Can I download data from the MirPO database?</p>
                        <p class="faq-answer">Downloading options will be updated soon for various formats. However, you can still download images of secondary structures.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">How frequently is the database updated?</p>
                        <p class="faq-answer">The database is updated regularly to include new research findings and data.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">Who can I contact if I encounter issues or have questions about the database?</p>
                        <p class="faq-answer">For any issues or questions, you can contact our support team via email at <a href="mailto:support@example.com">support@example.com</a> or use the contact form provided on the website. We will get back to you within a limited period of time.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">How can I find the mechanism of a specific miRNA and its target gene if I only know the miRNA and target gene names?</p>
                        <p class="faq-answer">To explore the mechanism of a particular miRNA and its target gene, visit the "Explore" page. You can access this page directly by clicking on the "Explore" option in the navigation bar of the homepage.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">Where can I find the secondary structure of an miRNA if I only have the miRNA name?</p>
                        <p class="faq-answer">To find the secondary structure of a specific miRNA, refer to the "Secondary Structure" option in the dropdown menu under "Categories" located in the navigation bar of the homepage.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">How can I determine if a particular action involving an miRNA in potatoes also occurs in other crops?</p>
                        <p class="faq-answer">To investigate whether a similar action involving a specific miRNA occurs in other crops, use the "Evolution" option available in the dropdown menu under "Categories" in the navigation bar of the homepage.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">How do I find the precursor miRNA of a given miRNA?</p>
                        <p class="faq-answer">You can find the precursor miRNA of a given miRNA by selecting the "Pre-miRNA" option in the dropdown menu under "Categories" in the navigation bar of the homepage.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">What is the purpose of the 'Help' section on the website?</p>
                        <p class="faq-answer">The 'Help' section is designed to assist users in navigating the website and utilizing its features effectively. It includes tutorial videos and other troubleshooting tips. Updates will be provided in the "IMPORTANT UPDATE" section in the marquee text option on the homepage.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">How do I cite the MirPO database in my research?</p>
                        <p class="faq-answer">Information on citing the MirPO database will be updated soon.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">Is there a user guide available for the MirPO database?</p>
                        <p class="faq-answer">Yes, a detailed user guide is available in the 'Help' section. It covers all aspects of using the database, from basic navigation to advanced search techniques.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">Can I contribute data or suggestions to the database?</p>
                        <p class="faq-answer">We welcome contributions and suggestions from the research community. Please contact us via the contact form or email to discuss potential contributions. Information on how to deposit data will be updated soon and will be provided in the "IMPORTANT UPDATE" section.</p>
                    </div>
                    <div class="faq-item">
                        <p class="faq-question">What are the system requirements for accessing the MirPO database?</p>
                        <p class="faq-answer">The database is accessible through standard web browsers. For the best experience, we recommend using the latest versions of browsers like Chrome.</p>
                    </div>

                    <!-- Related Resources Section -->
                    <div class="related-resources">
                        <h3>Related Web Resources</h3>
                        <ul>
                            <li><a href="http://www.mirbase.org/" target="_blank">miRBase</a> - A comprehensive database for miRNA sequences and annotations.</li>
                            <li><a href="http://www.targetscan.org/" target="_blank">TargetScan</a> - Predicts biological targets of miRNAs by searching for conserved sites.</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
