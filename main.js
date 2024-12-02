
// Display message based on query parameter
const params = new URLSearchParams(window.location.search);
const message = params.get("message");
const messageContainer = document.getElementById("message-container");
if (message) {
    const messages = {
        login_successful: '<p style="color: green;">Login Successful!</p>',
        login_failed: '<p style="color: red;">Invalid username or password. Please try again.</p>',
        logged_out: '<p style="color: red;">You are not logged in. Please log in and try again.</p>',
        error: '<p style="color: red;">An error occurred. Please try again later.</p>',
        user_exists: '<p style="color: red;">Username already exists. Please choose a different username.</p>',
        registered: '<p style="color: green;">Registration successful!</p>',
        password_mismatch: '<p style="color: red;">Passwords do not match. Please try again.</p>',
        change_password: '<p style="color: green;">Password changed successfully!</p>',
        cannot_use: '<p style="color: red;">Cannot use existing password. Please try again.</p>',
    };
    messageContainer.innerHTML = messages[message] || "";
}