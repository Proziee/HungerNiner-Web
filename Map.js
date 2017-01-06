// JavaScript File
/*global google*/
//var mysql      = require('mysql');
/*var connection = mysql.createConnection({
  host     : 'proziee-hungerniner-3968868',
  user     : 'proziee',
  password : '',
  database : 'c9'
});*/
var centerLocation = {lat: 35.307611, lng:-80.733715};
var coordinates = [
    35.308604,-80.733698, "Student Union",
    35.307552,-80.735735, "Woodward Hall",
    35.305376,-80.735688, "Belk Gym",
    35.306228,-80.734339, "Barnhardt SAC",
    35.307717,-80.733978, "Cone",
    35.307424,-80.733354, "College of Education",
    35.307428,-80.732500, "College of Health and Human Services",
    35.306846,-80.734546, "Burson",
    35.305093,-80.733245, "Miltmore Wallis Center",
    35.304658,-80.732525, "Reese",
    35.305078,-80.732551, "King",
    35.304633,-80.731757, "Colvard",
    35.305840,-80.732064, "Atkins Library",
    35.304403,-80.730719, "Rowe",
    35.305127,-80.730421, "Winningham",
    35.304990,-80.730031, "Garinger",
    35.305403,-80.729802, "Denny",
    35.305793,-80.730028, "Barnard",
    35.305674,-80.730418, "Macy",
    35.303804,-80.729976, "Robinson Hall",
    35.304588,-80.729124, "Storrs",
    35.305454,-80.728707, "Cato Hall",
    35.306179,-80.728971, "Fretwell",
    35.305966,-80.730937, "Kennedy",
    35.307103,-80.730073, "McEniry",
    35.306875,-80.731593, "Smith",
    35.307038,-80.730691, "Prospector",
    35.307726,-80.730515, "Auxilary Services",
    35.307825,-80.729696, "McMillian Greenhouse",
    35.308857,-80.729794, "Parking Services",
    35.306326,-80.729993, "Friday",
    35.307552,-80.733705, "Court Yard",
    35.306351,-80.733389, "The Star Quad"];

var unionContent ='<h3 id="building"></h3>'+
                    '<div class="buttons" style="margin: auto">' +
                      '<button type=button style="margin-left: 25%" id="addButton" onclick="addingButton()">Add Events</button>';
                      


function initMap() {
  try{
    
    var infoWindow = new google.maps.InfoWindow({
      content: unionContent,
      maxwidth: 350,
    });
    var map = new google.maps.Map(document.getElementById('map'), {zoom: 15, center: centerLocation});
    for (var i = 0; i < coordinates.length; i+=3){
      var cor = {lat: coordinates[i], lng: coordinates[i+1]};
      var marker = new google.maps.Marker({position: cor, map: map, title: coordinates[i+2]});
      marker.addListener('click', function(){
        infoWindow.open(map, this);
        document.getElementById("building").innerHTML = this.title;
        document.getElementById("buildingHeading").innerHTML = this.title;
        var buildingHTML = $('#building').html();
        document.getElementById('buildingInput').value = buildingHTML;
        //alert(document.getElementById('buildingInput').value);
      });
    }
  } catch (err){
    document.getElementById("map").innerHTML = err.message;
  }
}

function event() {
  window.location.replace("Index.php");
}
