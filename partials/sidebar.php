<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <script src="../assets/js/script.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/860ae798ee.js" crossorigin="anonymous"></script>
    <title>sad</title>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="profile">
                <img src="assets/img/han_so_he.jpg" alt="Han So He">
                <p class="nama">Han So He</p>
                <p class="class">UI/UX Designer</p>
            </div>
            <ul>
                <li class="active">
                    <a href="dashboard.php">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="jobs.php">
                        <span class="icon"><i class="fa-solid fa-briefcase"></i></span>
                        <span class="item">Jobs</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-user-group"></i></span>
                        <span class="item">Candidates</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-sharp fa-solid fa-gear"></i></span>
                        <span class="item">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Question Set</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <span class="item">Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-add"></i></span>
                        <span class="item">New Company</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        $(".wrapper .sidebar ul li a").click(function(){
            $(".wrapper .sidebar ul").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        })
    </script>
</body>
</html>