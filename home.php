<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav {
            margin-right: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Shop All</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Computers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tablets</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Drones & Cameras</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Audio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mobile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">T.V & Home Cinema</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Wearable Tech</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sale</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var navLinks = document.querySelectorAll(".nav-link");
            var navCollapse = document.querySelector(".navbar-collapse");
            
            navLinks.forEach(function (link) {
                link.addEventListener("click", function () {
                    if (navCollapse.classList.contains("show")) {
                        var bsCollapse = new bootstrap.Collapse(navCollapse);
                        bsCollapse.hide();
                    }
                });
            });
        });
    </script>
</body>
</html>
