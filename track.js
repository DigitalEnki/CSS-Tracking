document.addEventListener("DOMContentLoaded",function(){
    var elm = document.querySelector('body');
    var tracking = getComputedStyle(elm,'after').content;

    // do your tracking
    console.log(tracking);
});
