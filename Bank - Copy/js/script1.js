var entry = document.getElementById("entry");
entry.addEventListener("click", displayDetails);

var row = 1;

function displayDetails(){
    var name =document.getElementById("NAME").value;
    var name =document.getElementById("EMAIL").value;
    var name =document.getElementById("ACCOUNT_BALANCE").value;

    if(!NAME || !EMAIL || !ACCOUNT_BALANCE){
    alert( "please fill all the boxes")
    return;
    }

    var display = document .getElementById("display");
    var newRow = display.insertRow(row);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);

    cell1.innerHTML =name;
    cell2.innerHTML =email;
    cell3.innerHTML =account_balance;
    row++;
}