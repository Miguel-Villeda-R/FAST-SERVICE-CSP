function registerCourse() {
    var folio = document.getElementById("folio").value;
    
   
   

    if (!folio) {
        $(".containerAlert").removeClass("none");
    }
    else{
        var dataString = 'folio=' + folio + '&action=' + action;
    
        $.ajax({
            type: "POST",
            url: "https://carsportpremium.000webhostapp.com/registroCurso/service/actions.php",
            data: dataString,
            cache: false,
            success: function (data) {
                if (data == 200) {
                    $(".containerForm").css("display", "none");
                    $(".containerSucces").removeClass("none");
                } else {
                    $(".containerForm").css("display", "none");
                    $(".containerError").removeClass("none");
                }
            }
        });
    }

}