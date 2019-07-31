$(document).ready(function () {

    $('#post_property').validate({ // initialize the plugin
        onclick: false,
        onkeyup: false,
        rules: {
            'term_cond': {
                required: true
            },
            'display_price':{
                required: true
            },
            'p_for':{
                required: true
            },
            'state': "required",
            'dist': "required",
            'town': "required",
            'locality':{
                required: true,
                minlength: 4
            },
            'property_for':{
                required: true
            },
            'ready_move':{
                required: true
            }

        },
        messages: {
            'term_cond': {
                required: '<br><span style="display: block;width: 400px;">You have to agree terms and conditions </span>'
            },
            'display_price':{
                required:'<span style="display: block;width: 400px; padding-top: 25px;">You have to select one option</span>'
            },
            'property_for':{
                required:'<span style="display: block;width: 400px; padding-top: 25px;">You have to select one option</span>'
            },
            'p_for':{
                required:'<span style="display: block;width: 400px; padding-top: 25px;">You have to select one option</span>'
            },
            'state': "Please Select State",
            'dist': "Please Select District",
            'town': "Please Select Town",
            'locality':{
                required:'<span style="display: block;width: 400px; padding-top: 5px;">You have to Enter Full address</span>',
                minlength:'<span style="display: block;width: 400px; padding-top: 25px;">Address Should be above 4 characters</span>'
            },
            'ready_move':{
                required:'<span style="display: block;width: 400px; padding-top: 25px;">You have to select one option</span>'
            }
        }
    });

});

