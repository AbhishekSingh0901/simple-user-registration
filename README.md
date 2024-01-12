# Registration Form

This is a simple registration form implementation with both frontend and backend components.

## Frontend

The frontend is an HTML file that contains a registration form with basic validation using JavaScript. It is styled with CSS for a clean and user-friendly interface.

### File Structure

- `index.html`: Contains the HTML structure for the registration form.
- `style.css`: Defines the styles for the form.
- `script.js`: Handles form validation using JavaScript.

### Usage

1. Open `index.html` in a web browser to view and interact with the registration form.
2. Fill in the required fields and click the "Register" button.
3. The form will validate the input, and if successful, it will submit the data to the backend.

## Backend

The backend is a PHP script (`config.php`) that handles form submissions, checks for duplicate emails, and inserts user data into a database.

### File Structure

- `config.php`: PHP script for backend processing.

### Setup

1. Make sure you have a MySQL database set up.
2. Update the database connection details in `config.php`.
3. Upload the files to your web server.

### Database

The backend assumes a MySQL database named `login` and a table named `user` with columns `id`, `firstname`, `lastname`, `email`, and `password`.

### Usage

1. Access the registration form through a web browser.
2. Submit the form to register a new user.
3. Backend will check for duplicate emails and insert the user into the database.

## Note

- This is a basic example and may not be suitable for production use without further security measures.
- Ensure to validate and sanitize user input thoroughly in a real-world scenario.
- Update the database connection details and queries according to your setup and requirements.

Feel free to customize and improve upon this codebase as needed. Happy coding!
