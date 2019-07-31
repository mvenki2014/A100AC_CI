$(document).ready(function () {


    $("#input_form").validate({
        rules: {
            'name_reg': {
                required: true,
                minlength: 4
            },
            'email_reg': {
                // required: true,
                email: true
            },
            'phone_reg':{
              required: true,
              minlength:10,
              maxlength:10
            },
            'pwd_reg': {
                required: true,
                minlength: 5
            },
            'c_pwd_reg': {
                required: true,
                minlength: 5,
                equalTo: '#password_in'
            },
            'uType_cat': "required",
            'state': "required",
            'dist': "required",
            'town': "required",
            'locality': "required",
            topic: {
                required: "#newsletter:checked",
                minlength: 2
            },
            agree: "required"
        },
        messages: {
            'name_reg': {
                required: "Please enter a Your FullName",
                minlength: "Your username must consist of at least 4 characters"
            },
            lastname: "Please enter your Last Name",
            'uType_cat': '<span style="display: block;width: 400px; padding-top: 20px;">Please Select any one of this</span>',
            'phone_reg':{
                required: "Please enter phone number",
                minlength: "Phone number should be equal to 10 digits",
                maxlength: "Phone number should be equal to 10 digits"
            },
            'pwd_reg': {
                required: "Please provide a password",
                minlength: "Password must be atleast 5 characters"
            },
            'c_pwd_reg': {
                required: "Please provide a password",
                minlength: "Password must be atleast 5 characters",
                equalTo: "Password not Match"
            },
            'email_reg': {
                email:'Please enter a valid email address'
                //required:'Please enter a email address'
            },
            'state': "Please Select State",
            'dist': "Please Select District",
            'town': "Please Select Town",
            'locality': "Please Enter Full Address",
            agree: "Please accept our policy",
            topic: "Please select at least 2 topics"
        }

    });
    $('#password_in').keyup(function(){
        $('#result').html(checkStrength($('#password_in').val()))
    })
    function checkStrength(password){
        //initial strength
        var strength = 0

        //if the password length is less than 6, return message.
        if (password.length < 6) {
            $('#result').removeClass()
            $('#result').addClass('short')
            return 'Too short'
        }
        //length is ok, lets continue.
        // if length is 8 characters or more, increase strength value
        if (password.length > 7) strength += 1

        //if password contains both lower and uppercase characters, increase strength value
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1

        //if it has numbers and characters, increase strength value
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1

        //if it has one special character, increase strength value
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1

        //if it has two special characters, increase strength value
        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,",%,&,@,#,$,^,*,?,_,~])/)) strength += 1

        //now we have calculated strength value, we can return messages

        //if value is less than 2
        if (strength < 2 ) {
            $('#result').removeClass()
            $('#result').addClass('weak')
            return 'Weak'
        } else if (strength == 2 ) {
            $('#result').removeClass()
            $('#result').addClass('good')
            return 'Good'
        } else {
            $('#result').removeClass()
            $('#result').addClass('strong')
            return 'Strong'
        }
    }
});


