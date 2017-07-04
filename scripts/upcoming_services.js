// this fun will send class name to php file
// we will give class name in argument
function runCounter (className) {
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
		// console.log(serClassName);
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


