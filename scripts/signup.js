var userAddress1;
var userAddress2;
var userNIC;
var userMblNmbr;
var userLoginEmail;

$('#signup_form').submit(function(e) {
  e.preventDefault();
      var data = $("#signup_form").serialize();
      userAddress1 = $('#reg_add_1').val();
      userAddress2 = $('#reg_add_2').val();
      userNIC = $('#nic_nmbr').val();
      var userMblCode = $('#mbl_code').val();
      var userMblNmbrWithoutCode = $('#mbl_nmbr').val();
      userMblNmbr = userMblCode + userMblNmbr;
      // $('#demoWord').html(userAddress1);
      sessionStorage.setItem('Address_1', userAddress1);
      sessionStorage.setItem('Address_2', userAddress2);
      sessionStorage.setItem('NIC', userNIC);
      sessionStorage.setItem('Mobile_number', userMblCode);
      console.log(userAddress1);
      console.log(userMblNmbr);
      $.ajax({
        type : 'POST',
        url  : 'register.php',
        data : data,
        beforeSend: function()
        {
          $("#signup_error").fadeOut();
          $("#signup_sub").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
        },
        success :  function(data)
        {
          // when email is alread exist
          if(data==1){

            $("#signup_error").fadeIn(1000, function(){

              $("#signup_error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');

              $("#signup_sub").html('<span class="glyphicon glyphicon-log-in" ></span> &nbsp; Create Account');

            });
            console.log(data)
            console.log('user already exist');

          }

          // when user successfully registered
          else if(data=="registered") {
            $("#signup_sub").html('Signing Up');
            setTimeout($('#signup_form').fadeOut(500, function () {
            sessionStorage.setItem('status','loggedIn'); 
                      location.replace("http://localhost/services.technohost.biz/services.technohost.biz/index.html");
                    }), 1000);
          }

          else{

            $("#signup_error").fadeIn(1000, function(){

              $("#signup_error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');

              $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');

            });
            console.log(data)                    
            console.log('error found')


          }
        }
      });
      return false;
    });



// Login code

$('#login_form').submit(function (e) {
    e.preventDefault();
    userLoginEmail = $('login_email').val();
    console.log('login form fired');
  // serialize the form 
  var data = $("#login_form").serialize();

// make ajax requeset
$.ajax({

 type : 'POST',
 url  : 'login_process.php',
 data : data,
 beforeSend: function()
 { 

// when signin is in process
    $("#login_error").fadeOut();
    $("#btn_login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
    console.log('before send is fired')
  },
  success :  function(response) {      
    // console.log(response)

// when login successfull
if(response.Email == userLoginEmail){
  // var conResponse = response;
  var conResponse = JSON.parse(response);
  console.log(conResponse);  
  sessionStorage.setItem('status','loggedIn') 
  sessionStorage.setItem('Address_1', conResponse.Address_1);
  sessionStorage.setItem('Address_2', conResponse.Address_2);
  sessionStorage.setItem('Email', conResponse.Email);
  sessionStorage.setItem('NIC', conResponse.NIC);
  $("#btn_login").html('<img src="ajax-loader.gif" /> &nbsp; Signing In ...'); 
  setTimeout($('#login_form').fadeOut(500, function () {        
    location.replace("http://localhost/services.technohost.biz/services.technohost.biz/index.html");
  }), 1000 )    
  console.log('login successful');
}
// when error found
else{
  $("#login_error").fadeIn(1000, function(){      
    $("#login_error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
    $("#btn_login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; <a href="signup.html"> Sign up</a>');
  });
  // console.log(response);
  // var obj = JSON.parse(response);
  // console.log(obj.Address_1);

  // console.log('error found', response)
}
}
});
return false;
})


