# MiRPO
MiRPO- A POTATO MiRNA DATABASE.

ABSTRACT

MicroRNAs (miRNAs) are a class of short, non-coding, endogenous RNAs that play crucial roles in post-transcriptional regulation of gene expression.While several plant-specific miRNA databases include potato miRNA data, a specialized database solely dedicated to potato miRNAs has been lacking. MiRPO addresses this gap by providing a dedicated database for Solanum tuberosum miRNAs, offering detailed information on each miRNA, including its target genes, associated pathways, regulatory mechanisms (upregulation/downregulation), evolutionary context, secondary structures, and precursor miRNAs. This database also compares miRNA action across different crops, shedding light on conserved mechanisms and pathways. MiRPO offers web-interactive, user-friendly applications, ensuring precise and updated information with robust quality control using bioinformatic tools such as Open Refine. Built using MySQL and PHP, the database provides dynamic, interactive access to curated data. As of 2024, over 300 potato miRNAs have been identified through various studies and high-throughput sequencing technologies, and MiRPO compiles and organizes this data to support researchers, educators, and professionals working in agriculture, plant breeding, genetic engineering, and evolutionary studies. Future expansions of the database will include additional data, making MiRPO an increasingly valuable resource for crop-specific research and cross-disciplinary collaborations.

INTRODUCTION
MicroRNAs (miRNAs) are a class of endogenous non-coding small RNAs (about 21 nucleotides (nt)), which negatively regulate the expression of genes by targeting mRNA for cleavage or translational repression in a sequence-complementary dependent manner(Kaur, G., Jain, S., Bhushan, S., Das, N., Sharma, M., & Sharma, D. (2024)).In realm of bioinformatics and agricultural sciences, the development of specialized databases is essential for advancing research and enhancing crop productivity, particularly for crops like potato (Solanum tuberosum)(Singh, G., Papoutsoglou, E. A., Keijts-Lalleman, F., Vencheva, B., Rice, M., Visser, R. G., ... & Finkers, R. (2021).) While several plant-specific databases like miRbase  provide valuable information on miRNAs across various species,( https://www.mirbase.org , Kozomara, A., Birgaoanu, M., & Griffiths-Jones, S.2019) there remains a notable gap in dedicated resources focused exclusively on potato miRNAs. This project aims to address this deficiency by creating MiRPO, a specialized secondary database designed to improve the accessibility, accuracy, and comprehensiveness of potato miRNA data. Unlike general databases such as miRBase, which offer broad coverage but lack detailed, crop-specific insights. MiRPO consolidates extensive information on potato miRNAs into a single, user-friendly platform. The database is constructed using MySQL for relational database management, paired with PHP for dynamic web development, ensuring an interactive and up-to-date repository ( https://www.phpmyadmin.net/, Nixon, R. (2021)) tailored specifically for researchers, breeders, and biotechnologists. MiRPO integrates a wealth of information, including miRNA sequences, target genes, regulatory mechanisms, and evolutionary contexts, thus supporting genetic engineering and crop improvement efforts. Furthermore, it facilitates comparative analyses across species, shedding light on conserved mechanisms and pathways that enhance our understanding of miRNA function. This project not only accelerates research but also fosters collaboration and serves as an educational resource, significantly contributing to advancements in agricultural sciences and promoting innovation in crop-specific studies. Ultimately, MiRPO represents a pivotal step toward bridging the gap in potato miRNA research, providing a centralized and accessible resource that can drive future discoveries and applications in plant biotechnology.

MATERIALS AND METHODS
1.	PREPARING VISUAL CONTENT FOR WEBSITE INTEGRATION:

This Python script, executed in an Anaconda Jupyter Notebook (Reades, J. (2020).) generates a word cloud from miRNA data. It utilizes the WordCloud library (Oghenekaro, L. U., & Benson, A. T. (2022) ) to create a visual representation of the frequency of miRNA terms. The script first filters out non-string values from the ‘miRNA’ column of the DataFrame posts_df, converts the remaining values to lowercase, and combines them into a single string. This string is then used to generate a word cloud with specified dimensions and a white background. The matplotlib.pyplot (McKinney, W. (2022)) library is employed to display the generated word cloud. This visualization aids in understanding the prominence of different miRNA terms in the dataset.



2.	DOWNLOADING AND INSTALLING TOOLS:

1.	XAMPP
XAMPP is a free, open-source web server solution that allows developers to create and test web applications locally on their computers. It combines several important components, including Apache (a web server), MySQL or MariaDB (a database management system), PHP, and Perl. This integration makes XAMPP (Kartawinata, B. R., Pradana, M., Maharani, D., Nugraha, D. W., Helmi, M. Y., & Saputra, M. H. K. (2020)) an ideal environment for developers to work with dynamic web content, databases, and server-side scripting, without needing a live internet connection or hosting service. It simplifies the process of setting up a development environment and is particularly popular for building and testing websites before deploying them to production ( https://www.apachefriends.org/docs/). XAMPP is highly user-friendly and cross-platform, meaning it works on Windows, Linux, and macOS systems. The tool comes with a control panel, allowing users to easily start and stop the server components and manage settings. XAMPP's ease of installation and configuration (Rahmawatia, D., Rasyidib, M. I., Alfita, R., & Ulum, M. (2022))as made it a go-to option for developers, especially beginners, who need a quick and efficient way to run local servers for PHP development or database-driven applications.
2.	Visual Studio Code

Visual Studio Code (VS Code) ( https://jpalmer.dev/2021/02/creating-the-visual-studio-code-2020-year-in-review/;  Tan, X., Lv, X., Jiang, J., & Zhang, L. (2024)) is a lightweight yet powerful source code editor developed by Microsoft, widely used by developers for coding in various programming languages. It supports syntax highlighting, intelligent code completion, debugging, and version control integration, making it an all-in-one development environment. One of its key features is its flexibility, allowing users to customize their workspace with a wide range of extensions for languages like Python (Rousouliotis, M., Vasileiou, M., Manos, N., & Kavallieratou, E. (2024).) JavaScript (Sheneamer, A. (2024)) HTML (Kaur, M. (2024)), and many more. VS Code is also cross-platform, running on Windows, macOS, and Linux, which makes it accessible to developers regardless of their operating system.
In addition to its core functionality, Visual Studio Code provides excellent tools for collaboration, such as live share, which allows multiple developers to work on the same project in real-time. It offers Git integration for version control, enabling seamless management of source code directly within the editor. Its intuitive user interface, customizable themes, and a large extension marketplace make it highly adaptable to individual developer needs, whether for front-end web development, back-end programming, or data science. With its ease of use and powerful features, VS Code has become a favorite among both beginners and experienced developers.

3.	MySQL:

MySQL is a popular open-source relational database management system (RDBMS) that is used to store and manage data in structured tables. It operates using SQL (Structured Query Language) for querying and managing databases, allowing developers to create, read, update, and delete records efficiently. MySQL (Sotnik, S., Manakov, V., & Lyashenko, V. (2023).) is commonly used in conjunction with web development to store dynamic data like user information, product inventories, or content for websites. It is highly scalable, secure, and performs well with large datasets, making it a reliable choice for both small-scale applications and large-scale enterprises.

When used together with phpMyAdmin, MySQL becomes more accessible for developers and non-developers alike. phpMyAdmin provides a user-friendly web interface to interact with MySQL databases without needing to write SQL queries manually. (Nixon, R. (2021)) Through phpMyAdmin, users can perform tasks like creating tables, inserting or modifying records, running SQL queries, and managing database structure with ease ( https://www.phpmyadmin.net/docs/)
. This integration allows for efficient management of MySQL databases, particularly for PHP-based web applications, where data is frequently retrieved and manipulated for dynamic content delivery (Grippa, V. M., & Kuzmichev, S. (2021)).
3.WEB DEVELOPMENT:
Front-end and back-end development are two fundamental aspects of web development, each focusing on different parts of a web application.
Front-End Development:This involves everything that users interact with directly in their web browsers. It's about creating the visual aspects and user experience of a website or application. In creating mirpo website we utilized technologies like;
1.	HTML (HyperText Markup Language): HTML is the standard markup language used to create the structure of web pages. It defines the content and layout of the website through a series of elements or "tags" that define the structure of text, images, links, buttons, and other elements on a webpage. For example, the <h1> tag is used for main headings, <p> for paragraphs, and <a> for hyperlinks. HTML (Mitrevski, B., Piccardi, T., & West, R. (2020, May)) is essential for establishing the basic layout and ensuring that the content is displayed in an organized manner. It is the backbone of a website and is crucial for making the content visible to users.
2.	CSS (Cascading Style Sheets): CSS is a style sheet language used to describe the look and formatting of a website written in HTML. While HTML handles the structure and content, CSS is responsible for the visual presentation, such as layout, colors, fonts, margins, padding, and responsiveness (Frain, B. (2022)). It separates the content from design, enabling easier maintenance and customization of the website's appearance. By using CSS, you can make your website aesthetically pleasing and ensure it provides a better user experience.
3.	JavaScript: JavaScript is a programming language used to add interactivity and dynamic functionality to your website. Unlike HTML and CSS, which handle structure and style, JavaScript allows you to control the behavior of different elements on the page. You can use JavaScript (Liu, Z., Fang, Y., Huang, C., & Xu, Y. (2023). to create features like form validation, interactive elements (such as buttons or menus), animations, and more complex functionalities like fetching data from servers. JavaScript runs on the client side (in the browser) and makes your website more engaging and responsive.
Back-End Development:This deals with the server-side of a web application. It involves managing the logic, database interactions, and server configuration that powers the functionality of the website or application. In creating mirpo website we utilized technologies in the backend like;

1.	PHP (Hypertext Pre-processor): is a widely-used open-source scripting language designed for web development, especially for creating dynamic and interactive web pages. PHP runs on the server side, meaning it processes data and executes scripts on the server before sending the results to the user’s browser. It is commonly embedded within HTML code to generate dynamic web content like user authentication, form handling, and database interactions (Tatroe, K., & MacIntyre, P. (2020)). PHP is highly popular due to its simplicity, speed, and extensive library of built-in functions for working with databases, file systems, and sessions.

2.	phpMyAdmin is a web-based tool used for managing MySQL or MariaDB databases, often bundled with PHP web development environments like XAMPP (Kofler, M. (2005). phpMyAdmin; Stobart, S., Vassileiou, M., Stobart, S., & Vassileiou, M. (2004)) It provides a graphical user interface (GUI) for users to perform database tasks such as creating, modifying, or deleting databases and tables, managing user privileges, executing SQL queries, and importing/exporting data. phpMyAdmin simplifies database management, making it easier for developers to interact with databases without needing complex SQL commands, which is especially useful when working with PHP-based websites.


4.	DATA COLLECTION:
In the data collection step of the project, comprehensive information on potato miRNAs, focusing on various aspects of their regulatory roles, is gathered. The dataset includes miRNA sequences, their target genes, and detailed descriptions of the targets. This data is crucial for understanding how miRNAs influence gene expression, as explored on the Regulatory Impact of miRNAs on Target Genes, identifying the specific actions they exert, such as gene silencing or activation. Additionally, information is collected on the general mechanisms through which miRNAs exert their effects, as well as their involvement in specific biological pathways, such as stress responses, growth regulation, or disease resistance in potatoes ( https://pubmed.ncbi.nlm.nih.gov/; https://scholar.google.com/; https://www.nature.com/nature/research-articles).
Moreover, the evolutionary conservation of these miRNAs is investigated across species, providing insights into their functional importance over time. The data gathered from reliable sources, which include journal articles, databases, and previous studies, was thoroughly documented with proper citations. This comprehensive dataset lays the foundation for analysing the broader biological implications of miRNAs in potatoes, providing a robust framework for further research into improving crop yield, disease resistance, and stress adaptation mechanisms through miRNA-targeted interventions.
5.	DATA PRE-PROCESSING :
In the data pre-processing step of my project, the datasets are focused on cleaning, organizing, and transforming the raw data to ensure it was ready for analysis. This involved addressing common data quality issues such as missing values, duplicates, and formatting inconsistencies. The goal of pre-processing was to improve the accuracy and reliability of the data by making it uniform and structured ( Whelan, M. (2020))This step is crucial for ensuring that the subsequent analysis yields meaningful and correct insights, especially when dealing with large and complex datasets, such as the miRNA and target gene information collected for the project.
Here Open Refine, ( https://openrefine.org/; Nath, A., & Jana, S. (2023) ) A powerful data-cleaning tool is utilized, to streamline the pre-processing tasks. Open Refine allowed to efficiently handle large datasets, remove duplicates, standardize formats, and perform advanced transformations wherever necessary. It also enabled to explore patterns and detect anomalies in the data, ensuring that it was free of errors before moving to the analysis stage. By leveraging Open Refine, it was able to save time and ensure a higher degree of data accuracy, which is critical when working with biological datasets like miRNA target interactions and pathway information ( https://openrefine.org/docs)


Open Refine:
Open Refine is a powerful open-source tool designed for cleaning, transforming, and exploring large datasets. It allows users to manipulate and correct messy data efficiently by providing functions for removing duplicates, filling in missing values, formatting inconsistencies, and restructuring data. OpenRefine (Nath, A., & Jana, S. (2023)) is widely used for data wrangling tasks such as organizing unstructured data, handling text facets, and applying transformations using simple scripts or expressions.

Originally known as Google Refine, OpenRefine also supports working with data from various sources, including spreadsheets, CSV files, and even web services. It’s particularly useful for researchers and data analysts who need to prepare data for further analysis, making it easier to organize, standardize, and export clean datasets in formats ready for processing by other tools like R, Python, or databases.


6.	DATABASE CREATION:
1.	Utilizing several codes finally a database is created using MySQL and PHP language including all the details of the above collected data using visual studio as the code editor.






RESULTS
1.	Homepage of MiRPO
 

2.	INTO THE WEBSITE-

The "EXPLORE" page provides users with comprehensive information, including miRNA names, target genes, and a pictorial representation of the general mechanisms involved. It also highlights the regulatory impact of each miRNA on its target gene and includes citations for the original research papers from which the details are derived. This page serves as a crucial hub; when users click on a specific miRNA, they are redirected to the "pre-miRNA" page, which offers in-depth details about the precursor miRNAs associated with their search. Additionally, clicking on the "target gene" option directs users to the "pathway" page, where they can explore specific pathways related to certain miRNAs, presented in an engaging visual format, complete with citations for reference.



 


 

When users navigate to the "secondary structure" page from the dropdown menu, they will be presented with the secondary structure of their selected miRNA, along with a direct link to the "RNA FOLD"( http://rna.tbi.univie.ac.at/cgi-bin/RNAWebSuite/RNAfold.cgi)
 tool. This link allows users to access additional information and analyses related to the chosen miRNA, enhancing their understanding of its structural characteristics and functionality.



 
Under the "Help" option, users can access a tutorial video that guides them through the features and functionalities of the website. This resource enhances user experience by providing a clear walkthrough, ensuring that users can navigate the site with ease and make the most of its offerings.

 



DISCUSSION
The establishment of the MiRPO database represents a significant advancement in the field of bioinformatics and agricultural sciences, particularly for research focused on potato microRNAs. By addressing the limitations of existing databases, which often lack comprehensive and up-to-date information specific to Solanum tuberosum, ( Singh, G., Papoutsoglou, E. A., Keijts-Lalleman, F., Vencheva, B., Rice, M., Visser, R. G., ... & Finkers, R. (2021).) MiRPO provides a centralized resource that enhances the accessibility and accuracy of potato miRNA data. The integration of detailed annotations, including target genes, pathways, and regulatory mechanisms, allows researchers to explore the functional roles of miRNAs in various physiological processes and stress responses in potatoes. Furthermore, the comparative analysis features of MiRPO facilitate a broader understanding of miRNA evolution across species, thus promoting cross-disciplinary collaboration. This comprehensive approach not only streamlines research efforts but also supports genetic engineering and crop improvement initiatives, ultimately contributing to enhanced agricultural productivity.
CONCLUSION
In conclusion, MiRPO fills a critical gap in the current landscape of miRNA research by providing a specialized, user-friendly database dedicated to potato miRNAs. Its development underscores the importance of tailored resources in advancing our understanding of gene regulation and improving crop resilience and productivity. As the database continues to expand and incorporate new findings, it will serve as a vital tool for researchers, educators, and industry professionals alike, fostering innovation in agricultural sciences and paving the way for future studies on the complex roles of miRNAs in plants. Through MiRPO, it was aimed to enhance the scientific community's capacity to leverage miRNA data for practical applications in agriculture and crop management.
In this project, various aspects of web development and computational biology were explored and integrated to create a robust and user-centric solution. By leveraging front-end technologies such as HTML, CSS, and JavaScript, a visually appealing and interactive web interface was developed, enhancing user experience and engagement. These technologies enabled the presentation of complex data in an accessible and aesthetically pleasing manner.
REFERENCE
1.	Kaur, G., Jain, S., Bhushan, S., Das, N., Sharma, M., & Sharma, D. (2024). Role of microRNAs and their putative mechanism in regulating potato (Solanum tuberosum L.) life cycle and response to various environmental stresses. Plant Physiology and Biochemistry, 108334. [PubMed] [CrossRef] [Google Scholar].
2.	Kozomara, A., Birgaoanu, M., & Griffiths-Jones, S. (2019). miRBase: from microRNA sequences to function. Nucleic acids research, 47(D1), D155-D162. [PubMed] [Google Scholar].
3.	Singh, G., Papoutsoglou, E. A., Keijts-Lalleman, F., Vencheva, B., Rice, M., Visser, R. G., ... & Finkers, R. (2021). Extracting knowledge networks from plant scientific literature: potato tuber flesh color as an exemplary trait. BMC Plant Biology, 21(1), 198. [PubMed] [Google Scholar].
4.	Nixon, R. (2021). Learning PHP, MySQL & JavaScript. " O'Reilly Media, Inc." [Google Scholar].

5.	Reades, J. (2020). Teaching on Jupyter-Using notebooks to accelerate learning and curriculum development. Region: the journal of ERSA, 7(1), 21-34.  [Google Scholar].
6.	Oghenekaro, L. U., & Benson, A. T. (2022). Text Categorization Model Based on Linear Support Vector Machine. American Academic Scientific Research Journal for Engineering, Technology, and Sciences, 85(1)  [Google Scholar].
7.	McKinney, W. (2022). Python for data analysis. " O'Reilly Media, Inc."[Google Scholar].
8.	Kartawinata, B. R., Pradana, M., Maharani, D., Nugraha, D. W., Helmi, M. Y., & Saputra, M. H. K. (2020). Developing web-based e-news application as an it-based facility. In Proceedings of the International Conference on Industrial Engineering and Operations Management. [Google Scholar].
9.	Tan, X., Lv, X., Jiang, J., & Zhang, L. (2024). Understanding Real-Time Collaborative Programming: A Study of Visual Studio Live Share. ACM Transactions on Software Engineering and Methodology, 33(4), 1-28. [Google Scholar].
10.	Rousouliotis, M., Vasileiou, M., Manos, N., & Kavallieratou, E. (2024). Employing an underwater vehicle in education as a learning tool for Python programming. Computer Applications in Engineering Education, 32(1), e22693. [Google Scholar].
11.	Sheneamer, A. (2024). Vulnerable JavaScript functions detection using stacking of convolutional neural networks. PeerJ Computer Science, 10, e1838. [Google Scholar].
12.	Kaur, M. (2024). HTML Web Scraping and Text Analysis: A Large Language Model Approach (Master's thesis, State University of New York at Stony Brook). [Google Scholar].
13.	Sotnik, S., Manakov, V., & Lyashenko, V. (2023). Overview: PHP and MySQL features for creating modern web projects. [Google Scholar].
14.	Nixon, R. (2021). Learning PHP, MySQL & JavaScript. " O'Reilly Media, Inc."[ Google Scholar].
15.	Mitrevski, B., Piccardi, T., & West, R. (2020, May). WikiHist. html: English Wikipedia's full revision history in HTML format. In Proceedings of the International AAAI Conference on Web and Social Media (Vol. 14, pp. 878-884). [Google Scholar].
16.	Frain, B. (2022). Responsive Web Design with HTML5 and CSS: Build future-proof responsive websites using the latest HTML5 and CSS techniques. Packt Publishing Ltd. [Google Scholar].
17.	Liu, Z., Fang, Y., Huang, C., & Xu, Y. (2023). MFXSS: An effective XSS vulnerability detection method in JavaScript based on multi-feature model. Computers & Security, 124, 103015. [Google Scholar].
18.	Tatroe, K., & MacIntyre, P. (2020). Programming PHP: Creating dynamic web pages. O'Reilly Media. [Google Scholar].
19.	Whelan, M. (2020). Application of Clustering Techniquesfor Pre-Processing Spatio-Temporal Data (Doctoral dissertation, University College Dublin. School of Computer Science) [Google Scholar].
20.	Nath, A., & Jana, S. (2023). Data wrangling from socio-academic web-space: Designing a meta model. Journal of Information and Knowledge, 113-125. [Google Scholar].
21.	Singh, G., Papoutsoglou, E. A., Keijts-Lalleman, F., Vencheva, B., Rice, M., Visser, R. G., ... & Finkers, R. (2021). Extracting knowledge networks from plant scientific literature: potato tuber flesh color as an exemplary trait. BMC Plant Biology, 21(1), 198. [PubMed] [Google Scholar].
22.	Rahmawatia, D., Rasyidib, M. I., Alfita, R., & Ulum, M. (2022). Web-Based Student Thesis Information System of Electrical Engineering Department Trunojoyo University Madura. Information Systems, 5(1), 19-26. [Google Scholar].
23.	Grippa, V. M., & Kuzmichev, S. (2021). Learning MySQL. " O'Reilly Media, Inc." [Google Scholar].










