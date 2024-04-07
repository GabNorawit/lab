
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <input type="checkbox" id="checkbox">
    <header class="header">
        <h2 class="u-name">SIDE <b>BAR</b>

            <label for="checkbox">
                <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
            </label>
        </h2>
        <h2>
            <label for="">Home</label>
            <label for="">About</label>
            <i class="fa fa-user" aria-hidden="true"></i>
        </h2>
        
    </header>
    <div class="body">
        <nav class="side-bar">
            <ul class="list-group">
                <li>
                    <a href="#" id="loadContent">
                      
                        <span>เบิกอุปกรณ์เครื่องแก้ว</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="loadContent2">
                  
                        <span>คืนอุปกรณ์เครื่องแก้ว</span>
                    </a>
                </li>
                <li>
                    <a href="#" >
                  
                        <span>รายการการเบิกอุปกรณ์</span>
                    </a>
                </li>
            </ul>
        </nav>

        <main class="conntent">
            <div id="dynamicContent" ></div> <!-- Placeholder for dynamic content -->
        </main>
    </div>
    <script src="./js/template.js"></script> <!-- Link to external script file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
