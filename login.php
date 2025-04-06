<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$showAlert = false;
$invalidAttempt = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    include 'partials/database.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prevent SQL injection (Important!)
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username'];
        header('Location: ecommece');
        exit(); // Stop execution immediately after redirect
    } else {
        $invalidAttempt = true;
    }
}
?>

<!-- Start HTML after logic -->
<div class="flex items-center justify-center h-screen bg-gray-100 pt-20 px-6">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">

        <!-- Alert for Invalid Login -->
        <?php if ($invalidAttempt): ?>
            <div id="alert-danger" class="bg-red-500 text-white text-sm p-3 rounded-lg mb-4 flex justify-between items-center">
                <span><strong>Invalid credentials!</strong> OR you are not registered.</span>
                <button onclick="closeAlert('alert-danger')" class="text-white text-lg">&times;</button>
            </div>
        <?php endif; ?>

        <div class="text-center">
            <i class="fa-solid fa-user text-4xl text-gray-700"></i>
            <h2 class="text-2xl font-semibold mt-2">Login</h2>
        </div>

        <form method="post" class="mt-4">
            <div class="flex flex-col">
                <label for="email" class="text-gray-700 font-medium">
                    <i class="fa-solid fa-user mr-2"></i> Email:
                </label>
                <input type="email" name="email" placeholder="Email"
                       class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>

                <label for="password" class="mt-3 text-gray-700 font-medium">
                    <i class="fa-solid fa-lock mr-2"></i> Password:
                </label>
                <input type="password" name="password" placeholder="Password"
                       class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <div class="flex items-center justify-center my-4">
                <span class="w-full border-b border-gray-300"></span>
                <span class="mx-3 text-gray-500">or</span>
                <span class="w-full border-b border-gray-300"></span>
            </div>

            <!-- Social Login (Static) -->
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-red-500 text-3xl"><i class="fa-brands fa-google"></i></a>
                <a href="#" class="text-blue-700 text-3xl"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="text-green-500 text-3xl"><i class="fa-solid fa-phone"></i></a>
            </div>

            <p class="text-sm text-gray-600 mt-4 text-center">
                Not registered? <a href="?signup=true" class="text-blue-500 hover:underline">
                    <i class="fa-solid fa-user-plus"></i> Sign up
                </a>
            </p>

            <div class="text-center mt-4">
                <button type="submit" name="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-medium">
                    Login <i class="fa-solid fa-arrow-right-to-bracket ml-2"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- JS for alert -->
<script>
    function closeAlert(alertId) {
        document.getElementById(alertId).style.display = 'none';
    }
</script>
