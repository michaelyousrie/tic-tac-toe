# What is this?
- This a Tic Tac Toe game made in native HTML,CSS and JS without the usage of any framework ( in the game itself.)
- Included with the game, a very simple logs screen that log the winner of a match. The logging uses Axios to send a POST request to a single-route API that is being handled by Laravel to save a new entry in the `game_logs` table.
- The logs screen itself is made using the table component from bootstrap and uses Laravel/Livewire to make deleting an entry very simple.

# Technologies Used:
- HTML 5 
- CSS 3 (including variables, pseudo classes and functions like var and calc)
- Native Javascript
- Bootstrap
- Laravel (There's a single-route API included to save an entry to the logs)
- Livewire ( To make deleting a log entry easier)

# Why make this?
- It demonstrates my ability to use the technologies mentioned above.
- Very slightly demonstrates consuming APIs from the frontend as well as creating APIs in the backend.
- I was bored. 

# How to run?
- Clone the project to your local machine using: `git clone https://github.com/michaelyousrie/tic-tac-toe`
- Install composer packages using: `composer install`
- Update the database credentials in the `.env` file
- Create a new database
- Run database migrations using: `php artisan migrate`
- Open the application in a browser
- That's it!
