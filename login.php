<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <?php include 'partials/commonfiles.php';?>
</head>
<body>
<div class="w-100 vh-100 d-flex justify-content-center align-items-center">
        
           
            <form method="post" class="sign-main p-5">

                <div class="text-center">
                <i class="fa-solid fa-user fs-2"></i>
                    <h2>Login</h2>

                </div>
                <div class="d-flex flex-column">
                <label for="Email" class="ls-label"><i class="fa-solid fa-user"></i> Email:</label>
                <input type="email" name="email" placeholder="Email" class="ls-input">
               
                <label for="password" class="ls-label"><i class="fa-solid fa-lock" class="ls-label"></i> Password:</label>
                <input type="password" name="password" placeholder="Password" class="ls-input">
                <div class="d-flex justify-content-center align-items-center mt-3">
                <p>--------------------------------or-----------------------------------</p>
            </div>
            <div class="d-flex justify-content-center align-items-center gap-5">
                <a href=""><i class="fa-brands fa-google fs-2"></i></a>
                <a href=""><i class="fa-brands fa-facebook fs-2"></i></a>
                <a href=""><i class="fa-solid fa-phone fs-2"></i></a>
            </div>
                
                <p class="mt-3">Not register? go to signup page <a href="?signup=true"><i class="fa-solid fa-user-plus"></i></a></p>
                <div class="text-center">
                    <button name="submit" class="ls-button">Login<i class="fa-solid fa-arrow-right-to-bracket"></i></button>
                </div>
              </div>
            </form>

    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>