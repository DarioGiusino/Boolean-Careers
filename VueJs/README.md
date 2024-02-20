# vite-boolflix

This application is a replica of Netflix, named "Boolflix". It is a web application developed using the Vue.js framework.

The main page, divided into two main components (AppHeader and AppMain), allows users to search for movies and TV series through a search bar.

The AppHeader component contains the application title, Boolflix, and a dynamic search bar that allows users to enter the name of the desired movie or TV series. When the user types in the search bar, two signals are sent: one to perform the search (search-programs) and the other to update the searched word (writing-word).

The AppMain component displays the search results, showing cards of movies and TV series corresponding to the search results. Each card features a photo of the movie or TV series, the title, original title, language, rating, description, and, if available, the flag of the country of the original language.

The repository also contains several additional files, such as Vue.js component files, CSS styles, the configuration file, and static data needed to make API requests via Axios. The application relies on The Movie Database (TMDb) API to obtain information about movies and TV series.

The design and graphical interface are inspired by Netflix, designed to provide intuitive navigation and an engaging presentation of search results, adopting the layout and style of the Netflix user interface.

# vite-boolfolio

This project is a web application that uses Vue.js to implement dynamic content pagination. It is structured as a Single Page Application (SPA) that includes multiple pages and components to display a list of projects.

Project Structure:
Navigation is handled through Vue Router, with a navigation bar (AppNavbar) allowing users to move between various sections of the application.
The main page (HomePage) displays a list of projects using pagination. Some projects are shown per page, with a pagination component (AppPagination) allowing users to navigate between pages.
The project detail page (ProjectDetailPage) shows the details of a single project when the user clicks on the link to open a specific project from the list.
The 404 error page (Error404Page) is shown when a nonexistent page is requested.

Key Features:
The main page (HomePage) retrieves the list of projects from the API via HTTP calls using Axios. It displays the list of projects with the ability to navigate between pages.
The project detail page (ProjectDetailPage) retrieves and displays the details of a specific project.
The application also handles errors, redirecting the user to the 404 error page if a page is not found.

The code is structured into reusable components, handles API calls to retrieve data, and offers smooth navigation between pages thanks to the implementation of dynamic pagination in Vue.js.

# vite-breaking-bad

This repository contains a Pokedex web application developed in Vue.js, which connects to a remote API to retrieve and display information about Pokemon. The application offers filtering functionality for Pokemon by type and name, with pagination of results.

Main Components:
PokeList.vue: Contains the main logic for displaying and filtering Pokemon. It uses filters for type and name to retrieve data from the API and displays paginated results.
PokeCard.vue: Represents the individual card of a Pokemon, showing details such as name, type, stats, and image.
SelectFilter.vue: Component for filtering Pokemon by type.
TextFilter.vue: Component for filtering Pokemon by name.
AppLoader.vue: Displays a loading indicator when data is being retrieved from the API.

Code Structure:
The main file is App.vue which organizes the layout of the application.
Axios is used to make API requests to retrieve Pokemon data.
The store.js file contains a global store state used to store data retrieved from the API and manage the loading state.
The code is structured using Vue.js reactive programming concepts, such as data reactivity through reactive and event emission to communicate between components.

The application is designed to be interactive, allowing users to filter and view specific information about Pokemon. The modular structure of components facilitates maintenance and the addition of new features.

# vite-comics

This repository contains a web app dedicated to DC Comics. The application was developed using Vue.js for the front-end, offering users an engaging experience in viewing and exploring DC Comics series.

Key Features:
Comic Display: Shows a series of cards featuring comic information, including cover image, price, series, and type.
Clear Navigation: The header provides an intuitive navigation system for exploring different sections such as Characters, Comics, Movies, TV Series, and more.
Informative Footer: The footer provides quick access to information and links related to DC Comics, such as comic shops, subscriptions, and more.

# vite-hello-world

This code represents a simple Vue.js application using the Options API, focusing on importing components and manipulating data. The application includes three main components:

AppTitle.vue: Displays a title on the page.
AppHero.vue: Shows a header image with the buildUrlImage method to construct the image path from the provided file name.
App.vue: Aggregates and uses the AppTitle and AppHero components, also defining a data (pic) representing the image file name to display.

The structure is simple and demonstrates the use of the Options API in Vue.js. Each component is organized into a separate .vue file, following best practices for Vue code splitting.

# vue-boolzapp

Boolzap is a web application that replicates some of WhatsApp's features, developed using Vue.js via CDN. This replica presents a structure similar to WhatsApp, allowing users to chat with contacts, send and receive messages, and manage conversations.

Key Features:
Chat and Contacts: The app allows users to view a list of contacts, select a specific chat, and interact with messages.
Messages: Users can send and receive messages, which are displayed with send time and identified as sent or received.
Adding Contacts: It is possible to add new contacts, allowing users to expand the list of conversation recipients.

Technology Stack:
Vue.js: Used as the main framework for creating the user interface and managing interactions.
Luxon: Library for handling dates and times within the application.
Bootstrap: Used for styling and the general structure of the user interface.
Bootstrap Icons: Icons used for various components of the application.

Purpose of the App:
Boolzap is a demonstrative project that illustrates how Vue.js can be used to develop a chat application similar to WhatsApp. The use of Vue.js and Bootstrap CDNs simplifies the development process and provides an experience similar to WhatsApp to end users.

This replica was developed as a learning exercise to demonstrate the use of Vue.js in building a chat application. The main goal is to provide a practical development experience and understand the fundamental concepts of Vue.js within the context of a real-time messaging application.

# vue-dischi

This application is a frontend for a video game store that connects to an API server provided by a Laravel backend. It was developed using Vue.js and leverages many of its features, such as Vue Router for route management and Axios for making HTTP calls to the server.

The application allows users to view a list of video games, specific details about each game, and contact the store through a contact form. It includes pages for viewing details of each game, a page for contacting the store, and a page for showing games from a specific publisher.

It is designed to be responsive, with a layout that adapts to different devices, and uses CSS styles to enhance the visual appearance of the application. The code is organized into separate Vue components for cleaner and more modular management.

The application also leverages advanced Vue features such as component communication, API

 calls to retrieve data, and offers smooth navigation between pages through Vue.js dynamic pagination implementation.

# vue-email-list

This code represents an HTML page that uses Vue.js and Axios to generate and display a list of 10 random email addresses obtained from a remote API.

The HTML page is structured to display a list of email addresses within the ul tag. The content of the list is manipulated through Vue.js, where a Vue application is defined within the #app tag.

The Vue app connects to a remote endpoint via Axios to obtain random email addresses from https://flynn.boolean.careers/exercises/api/random/mail. The generateMailList() method at page load calls the API to get 10 random email addresses and displays them in the user interface.

The code is structured to allow updating the email list at page load or through user interaction with the Vue application. It is an example of using external libraries to get data from a remote API and using Vue.js to handle the user interface reactively.

# vue-hello

This project contains a Vue application with a title and an image that changes dynamically based on provided data. Additionally, there is a button to toggle between dark or light mode, which changes the application theme based on the currently selected theme.

The JavaScript file includes the initialization of the Vue application with a simple greeting message and a random image. The darkModeToggle function handles the theme change between light and dark mode upon button click. The application was built using Bootstrap for styling and Vue.js for logic management.

# vue-slider

This is a carousel application that uses Vue.js to display a gallery of game images. The HTML page contains a Vue component that manages the image carousel, allowing navigation between main images through buttons and displaying previews as selectable elements.

The HTML structure defines a main Vue container (#app) containing the main gallery (#gallery) with images and a set of buttons for scrolling through images and starting/stopping autoplay. Below the gallery, there are image thumbnails (#thumbnails) acting as selectors for the main images.

The custom CSS file (style.css) provides minimal styling to the task list, allowing users to click on a task to mark it as completed. Additionally, the first letter of each task is capitalized for aesthetic purposes.

The Vue.js script defines a small application with predefined data for some initial tasks. The Vue.js logic handles functions for adding, deleting, and marking tasks as completed. It leverages Vue's reactivity to keep the user interface updated based on user actions.

The image data is stored in an array (pictures) containing objects with information about each image: image path, title, and descriptive text.

The application is designed to display a carousel of game images interactively and responsively, allowing users to explore main images through navigation buttons or the thumbnails below. The modular structure and intuitive interface make it suitable for showcasing image galleries.

# vue-todolist

This is a simple "To Do List" application created with Vue.js. It allows users to add, delete, and mark tasks as completed or to be completed.

The web page displays an input box where users can type new tasks and press "Add" to add them to the list. Added tasks are displayed as a list with the ability to mark them as completed or delete them.

The structure is divided into two main sections:
Header: Contains a banner representing the title of the list.
Main: Contains the main section of the application, where users can add, view, and manage tasks.

The custom CSS provides minimal style to the task list, allowing users to click on a task to mark it as completed. Additionally, the first letter of each task is capitalized for aesthetic purposes.

The Vue.js script defines a small application with predefined data for some initial tasks. The Vue.js logic handles functions for adding, deleting, and marking tasks as completed. It leverages Vue's reactivity to keep the user interface updated based on user actions.
