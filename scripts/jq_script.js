// js script using jquery

$(document).ready(function(){
    hoverImg();
    getTopTracks();   
    addImg(); 
    popup();
});

// fade image on hover, show text
function hoverImg() {
    $("img.linkto").stop().animate({"opacity": "1"}, "slow");
    $(".overlaytext").stop().fadeOut(500);
    $("#fade").hover(
        function(){
            $("img.linkto").stop().animate({"opacity": ".2"}, "slow");
            $(".overlaytext").stop().fadeIn(800);
        }, function(){
            $("img.linkto").stop().animate({"opacity": "1"}, "slow");
            $(".overlaytext").stop().fadeOut(500);
        }    
    );
}

//get top tracks using Last.fm API and AJAX
function getTopTracks() {
    $.ajax({url: "https://ws.audioscrobbler.com/2.0/?method=artist.gettoptracks&artist=Beach+House&limit=10&api_key=[api_key]&format=json", success: function(response) {
        var html = '';  
        $.each(response.toptracks.track, function(i, item) {
            html += "<tr>" + "+ <th scope='row'>" + item["@attr"].rank + "</t>" + "<td><a href=" + item.url + " target='_blank'>"  + item.name + "</a></td>" + "<td>" +item.playcount + "</td>" + "</tr>";
        });
        $('#result').append(html);
    }});
}

function addImg() {;
    // Image: David Belisle (2021)
    $('#photo').prepend("<img src='graphics/photo.jpg' class='img-fluid' alt='Photo of Alex and Victoria of Beach House'>");
}

// cookie to inform about privacy policy 
function popup() {
    if (document.cookie.indexOf("popupSeen=true")<0) {
        $("#cookie").modal("show");
        document.cookie = "popupSeen=true; max-age=31536000;;";
    }
}
