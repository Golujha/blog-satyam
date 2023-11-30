   <?php
   $page =basename($_SERVER['PHP_SELF'],".php");
   ?>
   
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">BlogApp</a>
            <!-- <button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
             aria-controls="#navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            
             <span class="navbar-toggler-icon"></span>
            </button> -->

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link <?= ($page=="index")? 'active':'';  ?>">Home
                            <span class="visually-hidden">(Current)</span>
                        </a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropwown" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">politics</a>
                            <a href="#" class="dropdown-item">Sports</a>
                        </div>
                    </li> --> 
                   
                    <li class="nav-item">
                        <a href="login.php" class="nav-link <?= ($page=="login")? 'active':'';?>">login</a>
                    </li>
                </ul>
                <form class="d-flex my-2">
                    <input type="text" class="form-control me-sm-2" placeholder="Search Articles Here..">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

        </div>
    </nav>
    
