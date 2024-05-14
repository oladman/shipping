<header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
        <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/logo.png" alt="" > </a>
            <div class="header-style">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
              
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Explore <span class="sr-only"></span></a> </li>



                        <?php
                        if (empty($_SESSION["user_id"])) // if user is not login
                        {
                            echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
                        } else {

                            echo '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
                            echo '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                        }

                        ?>

                    </ul>

                </div>
            </div>
        </nav>

        <nav class="nav-sec">
            <ul>
                <li><a href="/"> Track </a> </li>
                <li><a href="/"> Ship </a> </li>
                <li> <a href="/"> Customer Service </a> </li>
            </ul>

            <a href="login.php"> Customer Portal Logins </a>



        </nav>

    </header>