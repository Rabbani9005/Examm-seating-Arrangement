$(document).ready(function() {
    $('div.footer span.tgl i').hover(function () {
        $('div.developer').toggleClass('active');
    })
})

function newtab(url) {
    window.open(url);
}