//button that shows registration form on click
document.addEventListener('DOMContentLoaded', ()=>{
    let showButton = document.getElementById('showButton');
    let registerForm = document.getElementById('registerForm');
    console.log(showButton)

    showButton.addEventListener('click', function() {
    // toggle registration form
        if (registerForm.style.display === 'none' || registerForm.style.display === '') {
            registerForm.style.display = 'block';  
            showButton.textContent = 'Hide Registration Form';  
        } else {
            registerForm.style.display = 'none';  
            showButton.textContent = 'Register';  
        }
    });
})