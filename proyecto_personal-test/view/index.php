<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leandro Lucas García | Diseño Digital e Impreso</title>
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- FIN CSS BOOTSTRAP -->
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style/style.css">
    <link rel="stylesheet" href="../assets/css/style/styleResponsive.css">
    <!-- FIN CSS -->
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- FIN FONT AWESOME -->
    <!-- FONT GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed|Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- FIN FONT GOOGLE FONT -->
    <!-- ANIMATE.JS -->
    <link rel="stylesheet" href="../assets/css/animation/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!-- FIN ANIMATE.JS -->
    <!-- WOW.JS -->
    <link rel="stylesheet" href="../assets/js/wow.min.js">
    <!-- FIN WOW.JS -->


</head>

<body>

    <?php include "header.php";?>
    <?php include "slider.php";?>
    <?php include "sobreMi.php";?>
    <?php include "portfolio.php";?>
    <?php include "form.php";?>
    <?php include "footer.php";?>

    <!-- SCRIPT DE BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- FIN SCRIPT DE BOOTSTRAP -->

    <!-- Script -->
    <script src="../assets/js/script.js"> </script>
    <!-- Fin Script -->
    <!-- Script de WOW -->
    <script src="../assets/js/wow.min.js"> </script>
    <script>
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true, // act on asynchronously loaded content (default is true)
            callback: function(box) {
                // the callback is fired every time an animation is started
                // the argument that is passed in is the DOM node being animated
            },
            scrollContainer: true, // optional scroll container selector, otherwise use window,
            resetAnimation: true, // reset animation on end (default is true)
        });
        wow.init();
$( "#btn" ).click(function() {
    $("body").toggleClass("fix");
});
    </script>

    <!-- Fin Script de WOW -->
</body>

</html>
