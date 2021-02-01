// geolocation
var lat = document.getElementById("lat2");
var long = document.getElementById("long2");
var acc = document.getElementById("acc2");

function getLocation() {
    if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
    $('#result').attr('disabled', false);
    } else { 
    alert("Geolocation is not supported by this browser.");
    }

    // document.getElementById("result").disabled = false; 
}
    
function showPosition(position) {
    lat.value=position.coords.latitude;
    long.value=position.coords.longitude;
    acc.value=position.coords.accuracy;

}

//hitung jarak antar 2 titik
function getDistanceFromLatLonInKm(lat,long,lat2,long2) {
    var R = 6371; // Radius of the earth in km
    var dLat = deg2rad(lat2-lat);  // deg2rad below
    var dLon = deg2rad(long2-long); 
    var a = 
      Math.sin(dLat/2) * Math.sin(dLat/2) +
      Math.cos(deg2rad(lat)) * Math.cos(deg2rad(lat2)) * 
      Math.sin(dLon/2) * Math.sin(dLon/2)
      ; 
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
    var d = R * c; // Distance in km
    return d;
  }
  
  function deg2rad(deg) {
    return deg * (Math.PI/180)
  }

  //result konfirmasi
  function getResult() {
    var lat1 = document.getElementById("lat").innerHTML;
    var long1 = document.getElementById("long").innerHTML;
    var lat2 = document.getElementById("lat2").value;
    var long2 = document.getElementById("long2").value;
    // console.log(lat);
    // console.log(lat2);
    // console.log(long);
    // console.log(long2);
    // Rata rata Accuracy
    var mean = ($('#acc').html() + $('#acc2').val())/2;
    var jarak = getDistanceFromLatLonInKm(lat1,long1,lat2,long2);
    console.log(mean);
    console.log(jarak);
    
    if (jarak <= mean){
        alert('Anda berada dalam toko, Titik Kunjung Terkonfirmasi');
    }
    else{
        alert('anda tidak berada dalam toko');
    }
}


// function myFunction() {
//     alert("Hello! I am an alert box!");
//   }


// 
