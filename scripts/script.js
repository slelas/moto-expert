function change_image() {
    var url = document.getElementById('Change_Image').src;
    if (url == 'http://placehold.it/200x200') {
        document.getElementById('Change_Image').src = 'http://placehold.it/500x500';
    } else {
        document.getElementById('Change_Image').src = 'http://placehold.it/200x200';
    }
}

setInterval(change_image, 500);