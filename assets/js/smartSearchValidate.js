$(document).ready(function () {

    $('#smart_search').validate({ // initialize the plugin
        onclick: false,
        onkeyup: false,
        rules: {
            'property_for':{
                required: true
            },
            basic:{
                required: true
            },
            'p_for':{
                required: true
            }

        },
        messages: {
            'property_for':{
                required:'<span style="display: block;width: 400px; padding-top: 25px;">You have to select one option</span>'
            },
            basic:{
                required:'<span style="display: block;width: 400px; padding-top: 25px;">You have to select one option</span>'
            },
            'p_for':{
                required:'<span style="display: block;width: 400px; padding-top: 25px;">You have to select one option</span>'
            }
        }
    });

});

