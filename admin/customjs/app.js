function downloadCSV(csv, filename){
  var csvFile;
  var downloadLink;

  //csv file
  csvFile = new Blob([csv], {type: "text/csv"});

  //Download Link
  downloadLink = document.createElement("a");

  //file name
  downloadLink.download = filename;

  //create a link to the file
  downloadLink.href = window.URL.createObjectURL(csvFile);

  //hide download link
  downloadLink.style.display = "none";

  //add the link to body
  document.body.appendChild(downloadLink);

  //Click download link 
  downloadLink.click();

}


function convertTableToCSV(fileName){
  var csv = [];
  var rows = document.querySelectorAll("table tr");

  for(var i = 0; i< rows.length; i++ ){
    //intialize empty row
    var row = []

    //get column data of one row
    var cols = rows[i].querySelectorAll("td","th");

      for(var j=0; j<cols.length; j++){
            //append column td in one row
            row.push(cols[j].innerText);
      }

      //append rows in csv array
      csv.push(row.join(","));  
  }

  //download csv file
  downloadCSV(csv.join("\n"), fileName);
}