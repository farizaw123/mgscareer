<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/style1.css">
    <script src="https://kit.fontawesome.com/860ae798ee.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col1">
                <a class="btn btn-primary" href="#" role="button">View Company Page</a>
            </div>
            <div class="col2">
                <span><i class="fa-solid fa-bell"></i></span>
                <span><i class="fa-solid fa-user"></i></span>
                <span class="nama">Han So He</span>
            </div>
        </div>
        <div class="row">
            <form action="">
            <div class="search">
                <span><i class="fa-solid fa-search"></i></span>
                <input type="text" placeholder="Search Candidates Name">
            </div>
            <div class="kategory1">
                <select name="jobs" id="jobs">
                    <option class="active">Search Job</option>
                    <option value="ui/ux">UI/UX Designer</option>
                    <option value="back">Back-End Developers</option>
                    <option value="front">Front-End Developers</option>
                    <option value="devops">DevOps Engineer</option>
                    <option value="qa">Quality Asurance Engineer</option>
               </select>
            </div>
            <div class="kategory2">
                <select name="rate" id="rate">
                    <option class="active">Search Rating</option>
                    <option value="5">5</option>
                    <option value="4-5">4-5</option>
                    <option value="3-4">3-4</option>
                    <option value="3">1-3</option>
                </select>
            </div>
            <button type="submit">Filter</button>
            </form>
        </div>
    </div>
</body>
</html>