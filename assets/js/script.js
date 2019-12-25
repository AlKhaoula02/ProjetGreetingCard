$('.first').animate({
    top: '+=260',
    opacity: 0
  }, 3000)


$('.second').animate({
    top: '+=150',
    opacity: 1
  }, 3000)
  $(document).ready(function(){
    $(".show").click(function(){
      $(".send").toggle(1000);
    });
  });
  

  $(function () {

    $('#form').submit(function (e) {

        e.preventDefault();
        $('.missNom').empty();
        $('.missEmail').empty();
        $('.missMessage').empty();
        let postdata = $('#form').serialize();

        $.ajax({
            type: 'POST',
            url: 'traitement.php',
            data: postdata,
            dataType: 'json',
            success: function (result) {
                if (result.success) {
                    $("#form").append("<p class='envoi'>Your greeting card has been successfully sent</p>");
                    // $("#form")[0].reset();
                    $("#h1").hide();
                    $("#nom").hide();
                    $("#email").hide();
                    $("#message").hide();
                    $("#submit").hide();
                }
                else {
                    $("#nom + .missNom").html(result.nomError);
                    $("#email + .missEmail").html(result.emailError);
                    $("#message + .missMessage").html(result.messageError);
                }
            }
        });

    });

})


