# js-array-objects-carousel

This application represents a dynamic carousel created in HTML, CSS, and JavaScript. The carousel displays a set of images with their respective titles and descriptions. It is developed to show one image at a time, allowing users to navigate through the images using directional arrows or by clicking on the thumbnails below.

The carousel supports the following features:
Dynamic Image Display: The carousel is dynamically populated with an array of literal objects containing image URLs, titles, and associated descriptions.
Infinite Loop: Allows navigation back and forth between images, ensuring that after the last image, the carousel returns to the first and vice versa.
Thumbnail Navigation (BONUS 1): It is possible to click on the thumbnails of the images below to activate the corresponding image in the main carousel.
Autoplay (BONUS 2): Images automatically alternate every 3 seconds, but this feature can be activated and deactivated using dedicated buttons.

The code is organized into functions to dynamically create cards and thumbnails from the array of objects, while click events handle navigation between images and autoplay activation.

# js-train-ticket

This application is a train ticket price calculator based on the user's age and the distance to travel in kilometers. Through a simple interface, the user enters their name, age, and the distance to travel. The program calculates the ticket price based on a standard cost per kilometer and applies 20% discounts for users under 18 and 40% discounts for users over 65.

The code is structured in several steps:
User Input: Request for name, age, and distance to travel.
Validation: Verify that the entered age and distance are valid numbers.
Price Calculation: Determine the ticket price based on the entered distance multiplied by the standard cost per kilometer.
Age Discounts: If the user is under 18, apply a 20% discount. If over 65, apply a 40% discount.
Results Printing: Display the final ticket price on the web page along with the user's name.

# js-train-ticket-form

This application is a simple train ticket price calculator based on the user's age and the distance to travel in kilometers.

The first milestone implements the initial program without any aesthetics, using two inputs and a button, where the user enters their age and kilometers to travel. The result is displayed both on the page and in the browser console.

The second milestone expands the application, offering a more interactive interface through a form on the page. The user can enter their data, such as name, age, and mileage, and get the ticket price calculation based on specific age discount conditions.

The code is structured to handle different cases:
Asks the user for age and distance to travel.
Defines the price per kilometer and discounts of 20% for underage users and 40% for users over 65.
Performs the ticket price calculation based on the entered age.
Displays ticket details and user data in the form and on the page.
Randomly generates the wagon number and an identification code for the ticket.

# js-minesweeper-dom

This is a version of a "Minesweeper" game implemented in JavaScript, allowing the user to play on a graphical interface where they must avoid stepping on "bombs" hidden behind cells.

Operation:
Bomb Generation: The computer randomly generates 16 unique numbers from 1 to 100 (configurable), corresponding to the positions of the hidden bombs.
User Interface: The user can start the game by clicking on the "Play" button. The grid is generated, consisting of cells numbered from 1 to 100.
Game: By clicking on a cell, if it contains a bomb, it turns red and the game ends. Otherwise, the cell turns blue, and the user's score increases by one.
End of Game: If the user clicks on all cells except those with bombs, reaching the maximum possible score, the game ends, and a congratulations message is displayed.

Milestone:
Milestone 1: Preparation of the user's score and handling of clicks on the grid.
Milestone 2: Generation of 16 random unique numbers to represent the bombs.
Milestone 3: Check if the clicked cell contains a bomb or not.
Milestone 4: Check if the user has reached the maximum score and end the game.
Milestone 5: Determine the end of the game (if bomb clicked or maximum score reached) and display the result on the page.
Bonus:

Implementation of a select to choose three different difficulty levels, each with a variable number of cells and bombs.

# js-minesweeper-grid

This JS script generates an interactive grid of 100 cells, divided into 10 rows and 10 columns, inside an HTML page. Each cell is numbered progressively from 1 to 100.

Operation:
On click of a button, a grid of 100 cells is generated.
Each cell contains a number corresponding to its position within the grid.
Clicking on a cell prints the relative number in the console and changes the cell's color to blue.

Milestone:
Milestone 1: Preparation of HTML and CSS to achieve the visual aspect of the grid.
Milestone 2: Generation of cells through JS on click of the "Play" button.
Milestone 3: Progressive assignment of numbers from 1 to 100 to each cell.
Milestone 4: On click on a cell, the corresponding number is printed in the console, and the cell changes color.

Bonus:
Addition of a select to choose different difficulty levels, modifying the total number of cells present in the grid.

# js-fizzbuzzdom

This JavaScript script generates a series of numbers from 1 to 100 and, based on certain conditions, replaces these numbers with the words "Fizz", "Buzz", or "FizzBuzz" within a grid displayed on a web page.

Operation:
A series of numbers from 1 to 100 is generated.
If a number is divisible by 3, it is replaced with the word "Fizz".
If a number is divisible by 5, it is replaced with the word "Buzz".
If a number is divisible by both 3 and 5, it is replaced with the word "FizzBuzz".
Otherwise, the number itself is displayed.

Implementation:
It uses a for loop to generate numbers from 1 to 100.
Checks if each number is divisible by 3, 5, or both, and replaces the number accordingly with "Fizz", "Buzz", or "FizzBuzz" respectively.
Displays the result inside a grid on the web page.

# js-jsnacks-block-1

-- snack1
This JavaScript application asks the user to enter 10 numbers through prompt dialog windows. Subsequently, it calculates the sum of all the entered numbers and displays the result within the HTML document.

-- snack2
This JavaScript application simulates a check to verify if a user can attend the Great Gatsby party. The user enters their name through an input field, and upon clicking the verification button, the system checks if the name is present in the list of authorized attendees. If the name matches one of the invited guests, the user is informed that they can access the party; otherwise, it is indicated that they have not been invited.

-- snack3
This JavaScript application calculates the sum of the digits of a 4-digit number entered by the user through an input field. Upon clicking the calculation button, the system separates the number into individual digits and calculates their sum, which is then displayed on the web page.

# js-g

rocery-list

This simple JavaScript script displays items from a grocery list on a web page. Using a while loop, it extracts the items one by one from the list and displays them in a bulleted list format within a <ul> HTML tag. The result is then printed on the HTML page.

# js-mail-dice

This application includes two exercises:

Exercise 1 - Dice Game:
Randomly generates a number between 1 and 6 for both the player and the computer. Shows the two rolls and determines the winner based on who gets the higher score. The randomly generated numbers are displayed along with the game result.

Exercise 2 - Fake Login:
The user enters their email in a form. The system checks if the entered email is present in a list of authorized emails. If the email is present, it displays a welcome message and allows access to the site; otherwise, it communicates that the user does not have permission to access.

Both exercises are implemented in JavaScript and HTML using the DOM to interact with the user.

# js-our-team

This application creates an array of objects representing members of a team. Each member has a full name, a role, and an associated photo.

In MILESTONE 0, an array of objects containing the information of the team members is created.
In MILESTONE 1, the information of the team members is printed on the console, displaying the full name, role, and the filename of the image.
In MILESTONE 2, the same information is displayed on the DOM as strings.

Additionally, there are two bonuses:
BONUS 1: The string representing the image filename is transformed into an actual image.
BONUS 2: Individual members are organized into cards to make the page more visually appealing.

# js-palindrome-odd

-- palindrome
The program asks the user to enter a word through a form. When the user submits the word, a function is executed to check if the entered word is a palindrome. A word is considered a palindrome if it reads the same backward as forward.
The function checks the word entered by the user by comparing it with its reversed version. If the reversed word is identical to the original word, a message indicating that the word is a palindrome is displayed; otherwise, it is indicated that it is not.

-- even_and_odd
This is a JavaScript application that simulates the game of Even and Odd between a user and the computer. The user chooses between even or odd and enters a number from 1 to 5 through a form.
The program randomly generates a number (always between 1 and 5) for the computer using a specific function. It then adds the number chosen by the user to the one randomly generated for the CPU.
A function determines if the sum of the two numbers is even or odd. Finally, based on the user's choice (even or odd) and the result of the sum, the winner is declared.

# js-pwdgen-wannabe

This is a simple JavaScript script that interacts with the user through three prompts, asking for the name, surname, and favorite color. Subsequently, it uses this information to generate a password on the web page, concatenating together the name, surname, favorite color, and "21". The result is displayed in two parts: one as a title and the other as a hidden password.

# js-simon

This code represents a Christmas countdown using JavaScript. It utilizes timing functions to display the countdown in real-time until midnight on December 25th. The code calculates the remaining time in days, hours, minutes, and seconds, dynamically updating the output every second. You can see the countdown on a web page, showing how much time is left until Christmas.

# js-social-posts

This code generates a dynamic social feed using JavaScript. It consists of a series of posts, each containing information such as the author, date, post text, image, and number of "Likes".
The posts are represented using JS objects within an array. The code creates a feed view using the information provided in the objects. Each post has a "Like" button that, when clicked, changes the "Likes" count and button state.
The code manages the addition and removal of "Likes" for each post and dynamically displays the updated count. It also includes handling for missing profile images with a fallback element containing the author's initials.

# js-snacks-14-12-2022

This JavaScript code shows two alternatives for populating array2 based on the length of array1. In both cases, the goal is to generate random values and add them to array2 until array2 reaches the same length as array1.

The alternative with a while loop uses a while loop that continues to add random values to array2 until its length becomes equal to that of array1.

The alternative with a for loop uses a for loop to accomplish the same task, adding random values to array2 until its length is equal to that of array1.

# js-snacks-22-12-2022

This JavaScript script creates an array of cars with different properties such as brand, model, and fuel type. Subsequently, the cars are divided into three separate arrays based on the fuel type: gasoline, diesel, and all other fuels.
An array cars is defined containing objects representing different cars with their characteristics.
Subsequently, the filter() methods are used to divide the cars into three groups:
gasolineCars: contains only cars with gasoline fuel.
dieselCars: contains only cars with diesel fuel.
variantCars: contains cars with fuels other than diesel and gasoline.
Finally, the three arrays are separately printed using console.log().

# js-snacks-23-12-2022

This JavaScript script manipulates an array of objects representing zucchinis.

Calculation of the total weight of zucchinis:
Using both a traditional approach with a forEach loop and a more concise approach with the reduce method, the total weight of all zucchinis in the array is calculated.

Separation of zucchinis by length:
The zucchinis are divided into two distinct groups based on their length: a list of long zucchinis (length greater than or equal to 15 cm) and a list of short zucchinis (length less than 15 cm).

Calculation of weight for groups of zucchinis:
The total weight is calculated for both groups of long and short zucchinis using the reduce method.

Printing of results:
The total weights of long and short zucchinis are printed in the console.

# holiday_snacks

This JavaScript script contains a series of functions related to various operations:

-- JSNACK 1
Function for reversing strings: mirrorText() accepts a string as an argument and returns the reversed string.
-- JSNACK 2
Function for merging two arrays alternating their values: fuseLists() takes two arrays and merges them by alternating the elements of each array into a single array.

-- JSNACK 3
Function for extracting numbers from a range of an array: numbersBetween() accepts three arguments: an array and two integers (a and b). It returns a new array with values between the indices a and b of the provided array.

The code is structured with various checks and user interfaces through the DOM. The HTML page contains input fields and buttons that, when activated, allow interaction with the JavaScript functions defined. The outputs of the functions are displayed in the page's DOM.
