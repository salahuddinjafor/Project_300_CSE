$(document).ready(function(){
    // add smooth scrolling to all links in navbar + footer linek
    $(".navbar a,footer a[href='#myPage'").on('click',function(event){
        // Make sure this.has has a value before overrridng default behavior
        if(this.hash !==""){
            // Prevent default anchor click behavior 
            event.preventDefault();
            // store hash
            var hash=this.hash;

            //Using JQuery's animate() method to add smooth page scroll 
            //The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html,body').animate({
                scrollTop:$(hash).offset().top 
            },900,function(){
                // add hash (#) to URL when done scrolling 
                // default click behavior
                window.location.hash=hash;
            
            });
        } //end if 
    });
})