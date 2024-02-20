# php-badwords

This code consists of two HTML pages with a PHP script for censoring offensive words within text provided by the user through a form.

Page 1 - index.php
Presents a simple form with two inputs: one for entering the text and the other to specify the word to censor.
The user can write a text and input the word they wish to censor.
Upon clicking the "Submit" button, the form sends the data to the badword.php file using the GET method.

Page 2 - badword.php
Receives the data sent by the form: the original text and the word to censor.
Utilizes the str_replace() function to replace each occurrence of the word to censor with three asterisks (***) in the original text.
Checks if the text contains the word to censor using str_contains().
Generates an output message indicating whether the word was censored, displaying the censored text and its length, or warns if the text does not contain the word to censor.

The second HTML page displays three sections:
The original text provided by the user and its length.
The censored text (or a message indicating the absence of the word to censor) and its length.
The word entered by the user for censorship.

In general, this PHP code provides a simple way to censor a specific word within a text and displays the result of censorship along with the original text and the word entered for censorship.

# php-dischi-json

The application represents a web application for displaying a collection of music albums. It consists of an HTML page that uses Vue.js for dynamic data management and Axios for requesting and receiving album data from an API endpoint. The page displays a series of cards, each containing information about an album: title, artist, release year, and cover image.

The HTML file is structured with a header, a main body with a header and a container for the album cards. There is also a modal that could be used to display detailed information about each album.

The page uses an internal CSS style file for formatting and styling various sections, with specific rules for the header, album cards, and modal.

The JavaScript script utilizes Vue.js to create and mount the Vue application, fetching album data from a PHP-provided API endpoint. The page also uses Axios to make the HTTP request for album data.

The PHP file provides album data in JSON format using a dummy database, reading from a pre-existing JSON file and returning the data to the frontend for use in the Vue application.

# php-hotel

This webpage represents a list of hotels with search filters.

Application Description:
Hotel Display: Shows a list of hotels with details such as name, description, parking availability, rating, and distance from the city center.
Search Filters: There is a form allowing filtering of hotels based on parking availability and rating. Users can select whether they want parking (yes/no) and choose a rating from 2 to 5 stars.
Hotel Table: The table displays hotel details with dynamic rows generated based on data provided by the PHP array.

The application allows users to view a list of hotels and filter them based on their preferences. The data is displayed in an HTML table, and the design utilizes the Bootstrap framework for a responsive and modern look.

# php-oop-1

This project is a simple web application that utilizes PHP, Vue.js, Axios, and Bootstrap to display a list of movies from a local database.

Frontend (HTML, Vue.js, Bootstrap):
HTML: The HTML file provides the basic structure of the page, defining titles, the list of movies, and their information such as movie title, director, genre, language, and plot. It uses Vue.js to display data received from the backend.
Vue.js: Manages the user interface and interactions with the backend through Axios. It handles fetching data from the backend and dynamically rendering it on the page.

Backend (PHP):
Movie and Genre Class: The Movie class defines a movie object with properties like ID, title, director, language, genre, and plot. The Genre class represents the genre of the movie.
db.php: Contains connection constants to the database and retrieves movie data from a local database.
index.php: Executes the query to the database to retrieve movies and returns them as JSON data.

Functionality:
The HTML page uses Vue.js to make an Axios request to the backend (index.php), which in turn executes a query to the local database to retrieve movie data.
The data is received as JSON and dynamically displayed on the web page using Vue.js.

This demonstrative project illustrates how to create a simple web interface to display and interact with movie data stored in a local database. Using both frontend and backend technologies, it provides a basic overview of handling HTTP requests and responses to provide dynamic data to the user through a web page. The modular structure of the code allows for easy understanding and future modifications.

# php-oop-2

This PHP and HTML application represents an online shop for pet-related products. It is structured using PHP to define different classes such as Product, Food, Kennel, and Toy representing various types of products sold in the shop. Each product has specific properties such as price, description, image, and category-specific details.

The main file index.php contains the HTML structure for displaying the products in the shop. It uses Bootstrap for visual presentation of the products. The file includes an array of object instances representing products, including cat food, dog food, kennels, and toys.

The shop displays product details such as image, name, category, description, and price, utilizing the data provided by the defined object instances. Specific details for each type of product (such as weight and ingredients for food, size and color for kennels, material for toys) are displayed based on the product type.

The code structure is organized into classes and separate files to improve code maintainability and clarity. An OOP (Object-Oriented Programming) approach was used to model and represent the products for sale, allowing for easy extension and data management.

# php-strong-password-generator

This PHP application is a secure password generator that allows users to specify the password length and which types of characters to include.

The first page (index.php) displays a form with fields for password length and checkboxes to select alphanumeric characters. The user can choose the length and which types of characters to include in the password. Upon submission, the data is sent via the GET method to itself to generate the password. Once generated, it automatically redirects to the result.php page that shows the generated password.

The main logic is handled by the random_psw() function in the functions.php file, which takes into account the password length and the character groups selected by the user.

Password security is ensured by offering the option to include uppercase, lowercase, numeric, and symbol characters. In case of incorrect or missing values, default values are used to ensure password generation.
