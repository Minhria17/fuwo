function open_menu(){
    if(document.getElementById("header_respn").style.display == 'block'){
        document.getElementById("header_respn").style.display = 'none';
        document.getElementById("box_2").style.display = 'none';
        document.getElementById("box_3").style.display = 'none';
    }
    else{
        document.getElementById("header_respn").style.display = 'block';
        document.getElementById("box_2").style.display = 'block';
        document.getElementById("box_3").style.display = 'block';
    }
}
function loadEn(){
    $.ajax({
        url: "/en",
        // type: "GET",
        async: true,
        success: function(response) {
          window.location= "/en.html"
        }
      });
}

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["a","b","c","d"],
        datasets: [{
            label: ["a", "b", "c", "d"],
            data: [7, 6, 4, 2],
            backgroundColor: ["yellow", "green", "red", "blue"],
            doughnutHoleSize: 1
        }, ]
    }
});
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["a","b","c","d"],
        datasets: [{
            label: ["a", "b", "c", "d"],
            data: [7, 6, 4, 2],
            backgroundColor: ["yellow", "green", "red", "blue"],
            doughnutHoleSize: 1
        }, ]
    }
});