function HomeAndAbout(){

 
        $('.shapes').animate({
        
           "bottom": "-=200px",
           "opacity":"0.1"
            },1000,moveToAbout);
    




}

function moveToAbout(){

window.location.href = "/about";


}