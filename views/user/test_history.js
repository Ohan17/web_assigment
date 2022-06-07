fetch("http://localhost/api/taken_test_api/show_by_userID.php?userId="+myvar)
.then(res => res.json())
.then(data =>{
   console.log(data);
    var xValues = [];
    var yValues = [];
    
   const taken_test_list=data["taken_tests"];
    for (let i=0; i<taken_test_list.length;i++){
        xValues.push(taken_test_list[i]["topic"]);
        yValues.push(parseInt(taken_test_list[i]["score"]));
        
    }
    
   
    new Chart(myChart, {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 0, max:10}}],
        }
      }
    });
})


