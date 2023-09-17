<!DOCTYPE html>
<html>
<head>
    <title>ahsan manjil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <Title>
        Make a Navigation Bar
    </Title>
    <style type=text/css>
        body
        {
            height: 125vh;
            margin-top: 80px;
            padding: 30px;
            background-size: cover;
            font-family: sans-serif;
        }
        header {
            background-color: rgba(255, 128, 0, 0.13);
            position: fixed;
            left: 0;
            right: 0;
            top: 5px;
            height: 30px;
            display: flex;
            align-items: center;
            box-shadow: 0 0 25px 0 black;
        }
        header * {
            display: inline;
        }
        header li {
            margin: 20px;
        }
        header li a {
            color: black;
            text-decoration: none;
        }
    </style>


</head>
<body>
<header> <nav>
    <ul>
        <li>
            <a href="#"> Home </a>
        </li>
        <li>
            <a href="#"> About </a>
        </li>
        <li>
            <a href="#"> Contact </a>
        </li>
        <li> <a href="#"> Terms of use </a>
        </li>
        <li>
            <a href="#"> Join Us </a>
        </li>
    </ul>
</nav>
</header>

<section class="my-5">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-md-6">
                <div class="container">
                    <?Php
                    $mysqli = new mysqli("localhost","root","","safari");

                    $sql = "SELECT image FROM pictures where division_id=1 and place_id=1  ";
                    $query = $mysqli -> query($sql);
                    $rowcount=mysqli_num_rows($query);


                    ?>


                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
                    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?php
                            for($i=1;$i<=$rowcount;$i++)
                            {
                                $row=mysqli_fetch_array($query);

                                ?>

                                <?php
                                if($i==1)
                                {
                                    ?>
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="<?php echo $row["image"] ?>" alt="First slide" width="100%">
                                    </div>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="<?php echo $row["image"] ?>" alt="First slide" width="100%">
                                    </div>

                                    <?php
                                }
                            }
                            ?>


                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>




                </div>
            </div>



            <div class="col-lg-6 col-md-6">
                <h2 class="display-4"> Jaflong</h2>
                <?php
                $conn=mysqli_connect("localhost","root","","safari"); //database connection
                //hostname, username, password, database name
                if ($conn) {
                    echo "";
                }else{
                    echo "Error";
                }
                //check database connect or not
                $query="select * from sylhet";
                $connect=mysqli_query($conn,$query);
                $num=mysqli_num_rows($connect); //check in database any data have or not
                ?>

                <?php
                if ($num>0) {
                    while($data=mysqli_fetch_assoc($connect)){
                        echo "  
                               <tr>  
                               <td>".$data['about_the_place']."</td>                        
                               </tr>  
                          ";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</section>



<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Location</h2>
    </div>
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-md-6">

                <?php
                $conn=mysqli_connect("localhost","root","","safari"); //database connection
                //hostname, username, password, database name
                if ($conn) {
                    echo "";
                }else{
                    echo "Error";
                }
                //check database connect or not
                $query="select * from sylhet";
                $connect=mysqli_query($conn,$query);
                $num=mysqli_num_rows($connect); //check in database any data have or not
                ?>

                <?php
                if ($num>0) {
                    while($data=mysqli_fetch_assoc($connect)){
                        echo "  
                                 
                               <li>".$data['address']."</li>                      
                                 
                          ";
                    }
                }
                ?>
            </div>
            <div class="col-lg-6 col-md-6">
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6816.534904473864!2d92.01352753953371!3d25.171719594713284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375044bd7d747f47%3A0xef2b6cb5bcade375!2sJaflong!5e0!3m2!1sen!2sbd!4v1648837313791!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            </div>
        </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Transport</h2>
    </div>
    <div class="container-fluid">
        <?php
        $conn=mysqli_connect("localhost","root","","safari"); //database connection
        //hostname, username, password, database name
        if ($conn) {
            echo "";
        }else{
            echo "Error";
        }
        //check database connect or not
        $query="select * from sylhet";
        $connect=mysqli_query($conn,$query);
        $num=mysqli_num_rows($connect); //check in database any data have or not
        ?>

        <?php
        if ($num>0) {
            while($data=mysqli_fetch_assoc($connect)){
                echo "  
                                
                               
                               ".$data['transport']."</br>     
                                                 
                               
                          ";
            }
        }
        ?>

    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Where to stay at jaflong?</h2>
    </div>
    <div class="container-fluid">
        <?php
        $conn=mysqli_connect("localhost","root","","safari"); //database connection
        //hostname, username, password, database name
        if ($conn) {
            echo "";
        }else{
            echo "Error";
        }
        //check database connect or not
        $query="select * from sylhet";
        $connect=mysqli_query($conn,$query);
        $num=mysqli_num_rows($connect); //check in database any data have or not
        ?>

        <?php
        if ($num>0) {
            while($data=mysqli_fetch_assoc($connect)){
                echo "  
                               <tr>  
                               <td>".$data['nearest_hotel']."</td>                        
                               </tr>  
                          ";
            }
        }
        ?>

    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Nearest Police Station</h2>
    </div>
    <div class="container-fluid">
        <?php
        $conn=mysqli_connect("localhost","root","","safari"); //database connection
        //hostname, username, password, database name
        if ($conn) {
            echo "";
        }else{
            echo "Error";
        }
        //check database connect or not
        $query="select * from sylhet";
        $connect=mysqli_query($conn,$query);
        $num=mysqli_num_rows($connect); //check in database any data have or not
        ?>

        <?php
        if ($num>0) {
            while($data=mysqli_fetch_assoc($connect)){
                echo "  
                               <tr>  
                               <td>".$data['nearest_police_station']."</td>                        
                               </tr>  
                          ";
            }
        }
        ?>

    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Watch vlogs</h2>
    </div>
    <div class="container-fluid">
        <?php
        $conn=mysqli_connect("localhost","root","","safari"); //database connection
        //hostname, username, password, database name
        if ($conn) {
            echo "";
        }else{
            echo "Error";
        }
        //check database connect or not
        $query="select * from sylhet";
        $connect=mysqli_query($conn,$query);
        $num=mysqli_num_rows($connect); //check in database any data have or not
        ?>

        <?php
        if ($num>0) {
            while($data=mysqli_fetch_assoc($connect)){
                echo "  
                               <tr>  
                                  <a href=".$data['vlogs'].">Watch</a>
                               </tr>  
                               
                               
                    ";
            }
        }
        ?>

    </div>
</section>




<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"> places</h2>
    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="shat.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Jaflong Zero Point</h4>


                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Aakhta Fall, Jaflong</h4>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="img_avatar1.png" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Tea Garden, Jaflong Sylhet</h4>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>












</section>
<a href="experience.php"><h1>  Do you want to share your experience?</h1> </a>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

















</body>
</html>
