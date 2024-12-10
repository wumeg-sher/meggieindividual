// get information from form
document.addEventListener("DOMContentLoaded", ()=>{
let submitButton = document.getElementById('submitButton');

submitButton.addEventListener("click", (event)=>{
    event.preventDefault();

    let cat = document.getElementById('cat');
    let ball = document.getElementById('ball');
    cat.classList.add('animate-headbutt');  
    ball.classList.add('animate-ball'); 

    let yarnType = document.getElementById('yarn').value;
    let yarnColor = document.getElementById('color').value;
    let yarnWeight = document.getElementById('weight').value;
    let quantity = document.getElementById('quantity').value;
    let location = document.getElementById('location').value;
    let dyeLot = document.getElementById('dyeLot').value;

    console.log(yarnType, yarnColor, yarnWeight, quantity, location, dyeLot)

    //  pass info to process-insertYarn to be added to db
    fetch('../php/process-insertYarn.php', {
        method: 'POST', 
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded', 
        },
        body: new URLSearchParams({
            'yarnType': yarnType,
            'yarnColor': yarnColor,
            'yarnWeight': yarnWeight,
            'quantity': quantity,
            'location': location,
            'dyeLot': dyeLot
        })
    })
    .then(response => response.json()) 
    .then(data => {
        console.log(data.success);
        let output = document.getElementById('outputElement');
        if (data.success==true){
            output.innerHTML="New yarn entry added!";
            triggerAnimation();
        }
        if (data.success==false){
            output.innerHTML="There was a problem adding your yarn, try again later."
        }
    })
})
})
