$(document).ready(function(){
  $.ajax({
    url: "localhost/mp3/chartjs/data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var email = [];
      var score = [];

      for(var i in data) {
        email.push("Student " + data[i].email);
        score.push(data[i].score);
      }

      var chartdata = {
        labels: Student,
        datasets : [
          {
            label: 'Student Score',
            backgroundColor: 'white',
            borderColor: 'black',
            hoverBackgroundColor: 'blue',
            hoverBorderColor: 'green',
            data: score
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});