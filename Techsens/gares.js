var arr_num = Array.from({length: 4}, () =>(Math.random() * (900 - 600 + 1) + 600));
    const firstNumber = arr_num[arr_num.length - 1];
    const secondNumber = arr_num[arr_num.length - 2];
    const thirdNumber = arr_num[arr_num.length - 3];
    const fourthNumber = arr_num[arr_num.length - 4];
    
    

    var currentdate = new Date(); 
var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();


const moyarr = arr_num;

function getAvg(moyarr) {
  const total = moyarr.reduce((acc, c) => acc + c, 0);
  return total / moyarr.length;
}

const average = getAvg(moyarr);

function run(){ 
    var counter =0;
    var grid = document.getElementById("grid");
    for (var i = 0, row; row = grid.rows[i]; i++){
        row.cells[0].textContent = arr_num[getRandom()];
        row.cells[1].textContent = datetime;
        row.cells[2].textContent = average;
        row.cells[3].textContent = Math.sqrt(average);

      
        
    }   
}

function getRandom(){
    return Math.floor(Math.random() * arr_num.length) + 0 ;
    
}
var xValues = ["1ère mesure", "2ème mesure", "3ème mesure", "4ème mesure"];
        var yValues = [firstNumber, secondNumber, thirdNumber, fourthNumber];
        var barColors = ["red", "green","blue","orange","brown"];

        new Chart("myChart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            title: {
              display: true,
              text: "Graphique des données sur les particules fines (en quelques secondes)"
            }
          }
        });

  var on = 0; // 1 is true, 0 is false

     function light() {
       if (on == 0) {
         var counter =0;
         var grid = document.getElementById("grid");
         for (var i = 0, row; row = grid.rows[i]; i++){
            row.cells[0].textContent = "";
            row.cells[1].textContent = "";
            row.cells[2].textContent = "";
            row.cells[3].textContent = "";
    
         on = 1; //You forgot a ; here
        }
    }
        else if (on == 1){ //You forgot a ; here
         on = 0; //You forgot a ; here
       }
      }