//button to show registration form on click
document.addEventListener('DOMContentLoaded', ()=>{
    let showButton = document.getElementById('showButton');
    let registerForm = document.getElementById('registerForm');
    console.log(showButton)

    // Add a click event listener to the button
    showButton.addEventListener('click', function() {
    // Toggle the visibility of the registration form
        if (registerForm.style.display === 'none' || registerForm.style.display === '') {
            registerForm.style.display = 'block';  // Show the form
            showButton.textContent = 'Hide Registration Form';  // Change button text
        } else {
            registerForm.style.display = 'none';  // Hide the form
            showButton.textContent = 'Register';  // Change button text back
        }
    });
})