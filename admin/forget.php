<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TreeLand &mdash; Lodge and Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta Tags for SEO -->
    <meta name="description"
        content="Experience comfort and luxury at TreeLand Lodge and Hotel, located in the heart of Sauraha, Chitwan. Explore Chitwan National Park and enjoy your stay in our hotel and lodge.">
    <meta name="keywords"
        content="TreeLand Lodge, Sauraha Chitwan, Chitwan National Park, hotel, lodge, luxury accommodation, wildlife, nature, Chitwan, Nepal">

    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link href="../images/favicon.png" rel="icon">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/whatsapp-chat-bubble.css">
    <link rel="stylesheet" href="../css/adminformstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css"> <!-- New custom stylesheet for additional styling -->

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Theme Style -->

</head>

<body class="d-flex align-items-center">

    <div class="col-md-4 mt-5 mb-4 p-2 border rounded bg-transparent mx-auto justify-content-center">
        <form action="newpass.php" method="post">
            <!-- Form Group -->
            <div class="form-group">
                <label for="username"><i class="bi bi-envelope"></i> Username:</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="username">
            </div>
            <div class="form-group">
                <label for="email"><i class="bi bi-envelope"></i> Email:</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="email">
            </div>




            <!-- Google reCAPTCHA -->
            <div class="g-recaptcha" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>

            <!-- Form Buttons -->
            <a href="">
                <button type="submit" class="btn btn-warning"><i class="bi bi-person"></i> Verify Account</button>
            </a>
            <button type="reset" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancel</button>

        </form>

    </div>
</body>

</html>