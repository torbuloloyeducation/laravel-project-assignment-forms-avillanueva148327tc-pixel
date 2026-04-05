# Activity 2 Reflection Answers

## Task 1: Understand the Flow
When a user visits the form page, the `GET` route retrieves any existing emails from the Laravel session and displays them in a list. When the user enters an email and clicks "Save," the form sends a `POST` request to the server, which then validates the input for correct format and ensures it isn't empty. The server also checks if the email already exists in the session or if the maximum limit of 5 emails has been reached. If all checks pass, the email is added to the session array, and the user is redirected back to the form with a success message, where the updated list is displayed.

## Reflection Questions

### 1. What is the difference between GET and POST?
*   **GET**: Used for retrieving data. Parameters are visible in the URL (query string). It is generally used for idempotent actions like viewing a page or searching.
*   **POST**: Used for sending data to the server (creating or updating resources). Parameters are hidden in the request body. It is more secure for sensitive data and handles larger data volumes.

### 2. Why do we use `@csrf` in forms?
We use `@csrf` to protect against **Cross-Site Request Forgery** attacks. It generates a hidden token that Laravel verifies on the backend to ensure the request is coming from your own application and not from a malicious third-party site attempting to perform actions on behalf of the user.

### 3. What is session used for in this activity?
In this activity, the session is used as a **temporary, stateful storage** to keep a list of emails. It allows the data to persist between page reloads and redirects without requiring a persistent database like MySQL.

### 4. What happens if session is cleared?
If the session is cleared (e.g., manually calling `session()->forget()`, using the "Clear All" link, or closing the browser if session is set to expire), all the email data stored in the array will be **permanently deleted**. The application will start again with an empty list.
