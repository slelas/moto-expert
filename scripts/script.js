// function next_image() {
//     var url = document.getElementById('Change_Image').src;
//     if (url == 'http://placehold.it/200x200') {
//         document.getElementById('Change_Image').src = 'http://placehold.it/500x500';
//     } else {
//         document.getElementById('Change_Image').src = 'http://placehold.it/200x200';
//     }
// }

// setInterval(change_image, 500);


var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    if ($(window).width() >= 1440) {
        showDivs(slideIndex += n);
    }
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("customer__card");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "inline-block";
}