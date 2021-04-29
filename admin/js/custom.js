$(document).ready(function () {

    /**********************************************CAROUSEL FUNCTION******************************* */

    $('.owl-carousel').owlCarousel({

        loop: false,

        margin: 20,

        nav: true,

        navText: ["<i class='fas fa-chevron-circle-left owl-prev'></i>",

            "<i class='fas fa-chevron-circle-right owl-next'></i>"],

        autoplay: true,

        stagePadding: 0,

        responsiveClass: true,

        responsive: {

            0: {

                items: 1

            },

            768: {

                items: 2

            },

            1000: {

                items: 3

            }

        }

    })

    /* **********************************************END OF CAROUSEL FUNCTION*************************** */



});

/* *****************************************Start of Memberdisplay **********************************/
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      
      });
    });
  });
  function exportData(){
      /* Get the HTML data using Element by Id */
      var table = document.getElementById("mytable");
      /* Declaring array variable */
      var rows =[];
      //iterate through rows of table
      for(var i=0,row; row = table.rows[i];i++){
          //rows would be accessed using the "row" variable assigned in the for loop
          //Get each cell value/column from the row
          column1 = row.cells[0].innerText;
          column2 = row.cells[1].innerText;
          column3 = row.cells[2].innerText;
          column4 = row.cells[3].innerText;
          column5 = row.cells[4].innerText;
          column6 = row.cells[5].innerText;
          column7 = row.cells[6].innerText;
          
          /* add a new records in the array */
          rows.push(
              [
                  column1,
                  column2,
                  column3,
                  column4,
                  column5,
                  column6,
                  column7
              ]
          );
          }
          csvContent = "data:text/csv;charset=utf-8,";
           /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
          rows.forEach(function(rowArray){
              row = rowArray.join(",");
              csvContent += row + "\r\n";
          });
          /* create a hidden <a> DOM node and set its download attribute */
          var encodedUri = encodeURI(csvContent);
          var link = document.createElement("a");
          link.setAttribute("href", encodedUri);
          link.setAttribute("download", "file.csv");
          document.body.appendChild(link);
           /* download the data file named "file.csv" */
          link.click();
  }
  /******************************************  End of Member display function *******************************/