// make a table to display the yarn data
document.addEventListener('DOMContentLoaded', ()=>{
    fetch('get-yarn.php', {
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
        let tableBody = document.querySelector('#yarnTable tbody');

        // create new row for each array item
        data.forEach(item => {
            let row = document.createElement('tr'); 

            let yarnTypeCell = document.createElement('td');
            yarnTypeCell.textContent = item.yarnType;
            row.appendChild(yarnTypeCell);

            let yarnColorCell = document.createElement('td');
            yarnColorCell.textContent = item.yarnColor;
            row.appendChild(yarnColorCell);

            let yarnWeightCell = document.createElement('td');
            yarnWeightCell.textContent = item.yarnWeight;
            row.appendChild(yarnWeightCell);

            let quantityCell = document.createElement('td');
            quantityCell.textContent = item.quantity;
            row.appendChild(quantityCell);

            let locationCell = document.createElement('td');
            locationCell.textContent = item.location;
            row.appendChild(locationCell);

            let dyeLotCell = document.createElement('td');
            dyeLotCell.textContent = item.dyeLot;
            row.appendChild(dyeLotCell);


            const actionsCell = document.createElement('td');

            const deleteLink = document.createElement('a');
            deleteLink.href = `delete-confirmation.php?pid=${item.yarnId}`;
            deleteLink.textContent = 'Delete';
            actionsCell.appendChild(deleteLink);

            actionsCell.appendChild(document.createTextNode(' ')); 
            const updateLink = document.createElement('a');
            updateLink.href = `update-confirmation.php?pid=${item.yarnId}`;
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