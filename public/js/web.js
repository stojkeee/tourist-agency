$( ".alert-button" ).click(function() {
    $("#alert").show("fast").delay(3000).fadeOut('fast');;
});
if ( typeof login_haserrors !== 'undefined'){
    $('#modalLogin').modal('show');
}

