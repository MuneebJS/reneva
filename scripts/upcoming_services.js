// $(document).ready(function () {
//     // body...
//     if(sessionStorage.getItem('status') != null) {
//         console.log('session storage is not null');
//         $('.nav-reg-tab').html('hello world');
//     }
//     else {
//         console.log('session storage is null');
//     }
// })



// this fun will send class name to php file
// we will give class name in argument
function runCounter (className) {
    console.log(className)
    $.ajax({
    type: 'post',
    url: 'upcoming_ser_counter.php',
    data: {
        class: className,
         },
    success: function(result) {
        }
    })
}

// this fun is for nav and all service page
$('.upcoming_services').on('click', function(e) {  
	console.log('upcoming service class event fired')
		var serClassName = e.target.className;
		console.log(serClassName);
        runCounter(serClassName);
});


// these click will fire on homepage
$("#driver_counter").click(function(){
        runCounter('driver_counter');
});
$("#beautician_counter").click(function(){
        runCounter('beautician_counter');
});
$("#maid_counter").click(function(){
        runCounter('maid_counter');
});
$("#cook_counter").click(function(){
        runCounter('cook_counter');
});


// alert('hello');

// signup code



// $('#demo').click(function () {
//     // body...
//    var value = $('#nav-reg-tab');
//    console.log(value);
// })
function get() {
    // body...
    console.log('fired');
       var value = $('#nav-reg-tab');
   console.log(value);
}

