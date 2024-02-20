# laravel-api

This is a web application based on Laravel, a PHP framework. The application manages projects, types, and technologies for an online portfolio.

Migrations in the code define the database structure, while route files define paths for the API and pages. Project management is included through the ProjectController, and there are also controllers for Type and Technology that allow management of types and technologies associated with projects. Each controller handles CRUD (create, read, update, delete) operations for their respective objects.

The frontend uses HTML, CSS, and Blade (Laravel's template engine) for page structure. The application provides an interface to manage projects, types, and technologies, along with user authentication features.

A database seeding system (DatabaseSeeder) is also present to populate the database with sample data. The initially defined migrations create the necessary tables in the database, while the seeders populate those tables with sample data.

# laravel-auth

The application is a project management platform developed in Laravel, allowing users to create, modify, and delete projects. It includes functionality for user profile management, with distinct roles for the admin area and the guest area. The user interface is built using Bootstrap to ensure a consistent and pleasant user experience.

The repository includes migrations for the database structure, seeders to generate sample data, and routes for the various features of the application. The features are complemented by an intuitive and responsive user interface that provides immediate feedback to the user during actions.

# laravel-boolean

This application represents an egg management system, allowing authorized users to add, view, edit, and delete egg data in a back-office environment.

Key Features:
Egg Model: Represents egg data, with attributes such as package color, contained surprise, chocolate type, and size.
EggController: Handles CRUD (Create, Read, Update, Delete) operations related to Egg objects in the database.
Migration and Seeder: Creation of the 'eggs' table in the database with its respective fields. The seeder populates the table with sample data.
Defined Routes: Defines routes to access various egg back-office functionalities.
Graphical Interface (HTML and Blade Templating): Uses Bootstrap for the basic structure of the user interface with tables for displaying egg data. It also includes a navigation header for the back-office.

Functionality:
View: Displays a table with details of each egg.
Addition: Allows the insertion of new egg data through a dedicated form.
Editing and Deletion: Enables editing and deletion of existing egg data.
Navigation: Includes a navigation bar to access various sections of the back-office.

Application Structure:
Controller: Handles user requests and actions on eggs in the database.
Model: Represents and interacts with egg data in the database.
Migrations and Seeder: Create the database structure and populate it with initial data.
Route: Connects user URL requests to appropriate actions in the controllers.
Graphical Interface: Presents users with a view to interact with egg data.

# laravel-comics

This application contains the code for the basic structure of a web page related to a DC Comics website. The page is organized into different sections such as header, main, footer, and other sections specific to displaying comic-related content and useful links.

Header: Displays the DC Comics logo, a navigation menu, and a search field.
Main: Presents a section to display cards of current comics with images and prices, and a "load more" button to load additional content.
Footer: Divides content into sections with links related to DC Comics, the shop, terms of use, privacy policies, and other affiliated sites.
Nav: Displays a list of links to other sections of the site such as Digital Comics, DC Merchandise, Subscription, Comic Shop Locator, and DC Power Visa.

In addition to the basic layout, the HTML file uses Blade templating to include other views (such as header, merch, and other common parts) and to iterate over comic data to display it in the main section of the page.

The page uses Vite.js for JavaScript integration and the Font Awesome library for icons and styles. Images are loaded using Vite for resource management.

# laravel-dc-comics

This repository contains a web application developed with Laravel, managing a catalog related to DC Comics comics, allowing users to view, add, edit, and delete information about each comic in the database.

Main Features:
Comic Management: The application allows users to view the list of available comics, add new comics, view specific details of a comic, modify existing comic data, and delete comics from the database.
Data Validation: Data validation rules have been implemented for both adding and editing comics. The rules ensure that entered data is correct and consistent with the specified requirements.
Responsive User Interface: The page is designed to adapt to different devices, offering a good user experience on desktop, tablet, and mobile devices.

# laravel-general-crud

This Laravel application manages a collection of software tools, offering CRUD (Create, Read, Update, Delete) functionality for the tools. Users can view a list of tools, access details of each, modify, and delete them. Tool information is stored in a database and dynamically displayed in views. The application uses Laravel's Blade template system to generate views and organize page layouts.

# laravel-many-to-many

This Laravel project implements a project management system with a "many-to-many" relationship between projects and technologies. The relationship is managed through a pivot table "project_technology" that connects projects to the technologies associated with them.

The migrations defined in the code create four tables in the database:
projects: contains information about projects such as title, description, image, repository link, and other details.
types: represents project types with attributes like label and color.
technologies: stores information about technologies with label and color.
project_technology: this pivot table manages the "many-to-many" relationship between projects and technologies, linking projects to the technologies associated with them.

Seeders are also present to populate the database with predefined data, and controllers to handle CRUD (create, read, update, delete) operations for projects, technologies, and project types.

The most relevant part is the management of the many-to-many relationship between projects and technologies through the Eloquent models Project and Technology, which use the belongsToMany() method to establish this relationship.

The project provides an interface to view, add, modify, and delete projects, technologies, and project types, allowing users to manage associations between projects and technologies through a flexible and dynamic relationship.

# laravel-migration-seeder

This application represents an example of using Laravel to manage migrations and seeders within a project. It focuses on managing data related to trains within a database.

Migrations are used to define the database structure. In the migration file for the trains table, the columns of the table (id, company, departure_station, arrival_station, departure_time, arrival_time, train_code, carriages_number, in_time, is_cancelled) are defined with their respective data types and constraints.

The seeder (TrainSeeder) is responsible for populating the database with dummy data. In this case, 10 dummy trains are generated using the Faker library to populate the fields of the trains table with random values.

The DatabaseSeeder file represents the main entry point for running seeders. Within this file, the specific seeder (TrainSeeder) is called to actually populate the database with dummy data.

The Train model represents an instance of the Eloquent model, which is linked to the trains table in the database. This

 model allows interaction with the data of the table through methods and relationships defined within the model itself.

# laravel-model-controller

This application uses the Laravel framework to manage a list of movies through Models and Controllers.

Model: Movie
The Movie class extends the Model class, representing the model of a movie in the database. It uses the HasFactory trait to facilitate the creation of model instances.

Controller: PageController
The PageController is responsible for handling requests related to the application's pages. The home() function returns the 'home' view and passes a list of movies obtained from the database to the view as a compact variable called 'movies'.

The main route '/' is connected to the 'home' function of the PageController, allowing users to access the main page of the application.

The 'home.blade.php' view displays movie details through a @foreach loop that iterates through the 'movies' variable passed from the controller. Each movie is displayed as a card showing the title, original title, nationality, release date, and rating.

The Movie Model represents the structure of movie data in the database, while the PageController handles the business logic and provides the necessary data to the view. The application uses the MVC (Model-View-Controller) pattern to organize the logic behind data, presentation, and handling of user requests.

# laravel-one-to-many

This Laravel application manages a one-to-many relationship between two entities: Type and Project. The one-to-many relationship is implemented using the Eloquent models provided by the framework.

Type: This entity represents project types, with properties like label (type label) and color (associated color).
Project: This entity represents projects, with properties such as title, description, image, repo_link, and is_published. Additionally, it has a relationship with the Type entity, as a project can be associated with a type.

The ProjectController handles CRUD (Create, Read, Update, Delete) operations related to projects, while the TypeController handles similar operations related to project types. Furthermore, both controllers allow management of relationships between entities.

The one-to-many relationship is implemented through the Eloquent belongsTo method in the Project model, which establishes that a project belongs to a single type, and the hasMany method in the Type model, indicating that a type can have many associated projects.

The index function of the ProjectController provides a view with a list of projects, allowing them to be filtered by status and type. This view displays projects associated with each type, using the one-to-many relationship to retrieve projects associated with a particular type.

# laravel-primi-passi

This project represents an initial introduction to using the Laravel framework. It consists of two web pages linked together through two routes defined in the web.php file.

The first route, '/', returns a view called 'home' containing a simple "hello world" text and a link redirecting to the second page ('second').

The second route, '/second', returns a view called 'second' that displays a "hello earth" text and a link redirecting to the first page ('first').

The views ('home.blade.php' and 'second.blade.php') are basic HTML pages with different titles ('Laravel Primi Passi' and 'Laravel Secondi Passi' respectively) and simple texts.

This project demonstrates how to define routes in Laravel using the Route::get() method, linking different views together.

# laravel-vue-comp

This application is a backend written in PHP using the Laravel framework. It was developed to handle CRUD (Create, Read, Update, Delete) operations on three main entities: Editor, Game, and Genre.

The GameController class contains methods to handle operations related to the Game model, including methods to display a list of games, create, view, update, and delete individual games, as well as retrieve games associated with a specific editor.

The Game model has various functions to get specific information such as formatted update date, a description excerpt of the game, and relationships with other models like Editor and Genre.

The Editor model manages the entity of game editors and has a relationship with the Game model.

The Genre model represents game genres and has a many-to-many relationship with the Game model.

The application is structured to provide JSON APIs. The routes defined in the GameController allow the frontend to interact with the backend to get data about games, editors, and genres, as well as perform CRUD operations on games.
