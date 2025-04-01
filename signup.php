<?php
$showAlert=$userexist=false;
$validusername=$validemail=$validpassword=true;
if ($_SERVER['REQUEST_METHOD'] == 'POST'&& isset($_POST['submit'])) {

    include 'partials/database.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    if (!preg_match('/^[a-zA-Z][a-zA-Z0-9_]{2,19}$/', $username)) {
        $validusername=false;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validemail=false;
    }
    if (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/', $password)) {
        $validpassword=false;
    }
    if ($password == $confirmpassword &&$validusername&&$validemail&&$validpassword){
        $sql="SELECT * FROM users WHERE email = '$email'"; 
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            $userexist=true;
        }
    }
    if ($password == $confirmpassword &&$validusername&&$validemail&&$validpassword&&!$userexist) {
        $sql = "INSERT INTO users (username, email, password, confirmpassword, date) VALUES 
    ('$username', '$email', '$password', '$confirmpassword', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = TRUE;
        }
    }
}
?>

    <?php
    if($userexist){
        echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
  <strong>you have already register!</strong> You can now login <a href="?login=true"><i class="fa-solid fa-right-to-bracket"></i></a>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    else{
    if ($showAlert) {
        echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert">
  <strong>Sucessfull!</strong> You can now login <a href="?login=true"><i class="fa-solid fa-right-to-bracket"></i></a>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    } 
 if (!$showAlert &&isset($_POST['submit'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
  <strong>failed!</strong> please enter value carefully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
if (!$validusername) {
        echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
  <strong>failed!</strong> Enter valid username must be the form of <strong>JohnDoe,user_123</strong>  .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    if (!$validemail) {
        echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
  <strong>failed!</strong> Enter valid email like  <strong>user@gmail.com</strong>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}
if (!$validpassword) {
    echo '<div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
<strong>failed!</strong> Enter valid password must contain (A-Z)(a-z)(0-9)(special char).
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }}
    ?>
    <div class="w-100 min-vh-100 d-flex justify-content-center align-items-center">
        <form method="post" class="sign-main p-5">

            <div class="text-center">
                <i class="fa-solid fa-user-plus s-icon fs-2"></i>
                <h2>SignUp</h2>
            </div>
            <div class="d-flex flex-column">
            <label for="username" class="ls-label"><i class="fa-solid fa-user"></i> Username:</label>
            <input type="text" name="username"  placeholder="Enter username" class="ls-input">

            <label for="email" class="ls-label"><i class="fa-solid fa-envelope"></i> Email:</label>
            <input type="email" name="email"  placeholder="Enter email" class="ls-input">

            <label for="password" class="ls-label"><i class="fa-solid fa-lock"></i> Password:</label>
            <input type="password" name="password"  placeholder="Enter password" class="ls-input">

            <label for="confirmpassword" class="ls-label"><i class="fa-solid fa-lock"></i> Confirm Password:</label>
            <input type="password" name="confirmpassword" placeholder="Confirm password" class="ls-input">

            <p >Already registered? Go to Login Page <a href="?login=true"><i class="fa-solid fa-right-to-bracket"></i></a></p>

            <div class="text-center">
                <button type="submit" name="submit" class="ls-button">
                    SignUp <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </button>
            </div>
        </form>

   
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
