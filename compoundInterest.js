function generateTable(form){
    let amount;
    let rate;
    let years; //Years for principle to grow
    let interest;
    let table;
    let year = 1; //the year being calculated

    amount = form.elements["deposit"].valueAsNumber;
    rate = form.elements["rate"].valueAsNumber;
    years = form.elements["years"].valueAsNumber;

    table = "<table>" + "<tr><th>Year</th><th>Starting Value</th>" + "<th>Interest Earned</th><th>Ending Value</th></tr>";


    while(year <= years){
        table += "<tr>";
        table += "<td>" + year + "</td>";
        table += "<td> $" + amount.toFixed(2) + "</td>";
        interest = amount * rate/100;
        table += "<td> $" + interest.toFixed(2) + "</td>";
        amount+=interest;
        table += "<td> $" + amount.toFixed(2) + "</td>";
        table+="</tr>";
        year++;
    } //Your while loop ends here...

    table+="</table>"

    document.getElementById("result").innerHTML = table;

}