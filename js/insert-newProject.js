let submitButton = document.getElementById('submitButton');

submitButton.addEventListener("click", ()=>{
    let cat = document.getElementById('cat');
    let ball = document.getElementById('ball');
    cat.classList.add('animate-headbutt');  
    ball.classList.add('animate-ball'); 

    let projectName = document.getElementById('projectName').value;
    let yarnUsed = document.getElementById('yarnUsed').value;
    let hoursSpent = document.getElementById('hoursSpent').value;
    let progress = document.getElementById('progress').value;
    let notes = document.getElementById('notes').value;

    console.log(projectName, yarnUsed, hoursSpent, progress, notes)
    fetch('../php/process-insertProject.php', {
        method: 'POST', 
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded', 
        },
        body: new URLSearchParams({
            'projectName': projectName,
            'yarnUsed': yarnUsed,
            'hoursSpent': hoursSpent,
            'progress': progress,
            'notes': notes
        })
    })
    .then(response => response.json()) 
    .then(data => {
        console.log(data.success);
        let output = document.getElementById('outputElement');
        if (data.success==true){
            output.innerHTML="New project entry added!"
        }
        if (data.success==false){
            output.innerHTML="There was a problem adding your project, try again later."
        }
    })
})