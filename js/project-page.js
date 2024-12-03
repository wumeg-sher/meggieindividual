document.addEventListener('DOMContentLoaded', ()=>{
    fetch('get-project.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded', 
        },
        body: new URLSearchParams({
        })
    })
    .then(response => response.json()) 
    .then(data => {        
        if (data.message) {
            console.log(data.message);
        } else {
        console.log(data);
        let tableBody = document.querySelector('#projectTable tbody');

        // create new row for each array item
        data.forEach(item => {
            let row = document.createElement('tr'); 

            let projectCell = document.createElement('td');
            projectCell.textContent = item.projectName;
            row.appendChild(projectCell);

            let yarnUsedCell = document.createElement('td');
            yarnUsedCell.textContent = item.yarnUsed;
            row.appendChild(yarnUsedCell);

            let hoursSpentCell = document.createElement('td');
            hoursSpentCell.textContent = item.hoursSpent;
            row.appendChild(hoursSpentCell);

            let progressCell = document.createElement('td');
            progressCell.textContent = item.progress;
            row.appendChild(progressCell);

            let notesCell = document.createElement('td');
            notesCell.textContent = item.notes;
            row.appendChild(notesCell);

            const actionsCell = document.createElement('td');

            const deleteLink = document.createElement('a');
            deleteLink.href = `delete-confirmationProject.php?pid=${item.projectId}`;
            deleteLink.textContent = 'Delete';
            actionsCell.appendChild(deleteLink);

            actionsCell.appendChild(document.createTextNode(' ')); 
            const updateLink = document.createElement('a');
            updateLink.href = `update-confirmationProject.php?pid=${item.projectId}`;
            updateLink.textContent = 'Update';
            actionsCell.appendChild(updateLink);
            
            row.appendChild(actionsCell);

            tableBody.appendChild(row);
        })
    }
    })
    .catch(error => {
        console.error('Error:', error);
    });
})