<!DOCTYPE html>
<html>
<head>
    <title>Panam Nagar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <Title>
        Make a Navigation Bar
    </Title>
    <style type=text/css>
        nav{
            position: static;

        }
        header {
            background-color: rgb(35, 33, 33);
            position: static;
            left: 0;
            right: 0;
            top: 0px;
            height: 30px;
            display: flex;
            align-items: center;
            box-shadow: 0 0 25px 0 black;
        }
        header * {
            display: inline;

        }
        header li {
            margin: 5px;

        }
        header li a {
            color: #00ffff;
            text-decoration: none;
        }
    </style>


</head>
<body>
<header> <nav>
        <ul>
            <li>
                <a href="index.html"> <h3><font size="3px"> Home <h3></a>
            </li>
            <li>
                <a href="exp_show.php"> Experience </a>
            </li>
            <li>
                <a href="#"> </a>
            </li>
            <li> <a href="#">  </a>
            </li>
            <li>
                <a href="dhaka_land.php"> Back to the previous page </a>
            </li>
        </ul>
    </nav>
</header>

<section class="my-5">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-md-6">
                <div class="container"><br><br><br><br><br>
                    <?Php
                    $mysqli = new mysqli("localhost","root","","safari");

                    $sql = "SELECT image FROM pictures where division_id=1 and place_id=2 ";
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
                <h1 class="display-6"> <font size= 30px>Panam Nagar</h1>
                <h3> Panam City is well known to Bangladeshis as a “lost city.” It is one of the top tourist attractions in Narayanganj, Bangladesh.
                    The historic Panam Nagar is located at Sonargaon police station in Narayanganj district near Dhaka. In the 15th century, Isha Khan established the first capital of Bengal in Sonargaon.
                    The city was built over an area of about 20 square kilometers in Sonargaon. Panam Nagar featured nearly 100 historic structures in the world created by the World Monument Fund in 2006.
                    The Pankhiraj canal surrounds Panam city from all sides. The Pankhiraj canal merges into the Meghna river called the Menikhali River.
                    On the east side of Panam city is the Meghna river and on the west side is the Shitalakshya. It was through this river that muslin was exported.
                    At the entrance of Panam city has a massive gate closed as soon as the sunset. Even today, no visitor can stay in Panam city after dusk.
                    The construction style of various structures in Panam city has an impression of difference. Every town of the then wealthy class has lovely work and a touch of nobility.
                    There are about 52 buildings on both sides of the road that runs through the city’s chest.
                    There are 31 buildings on the north side of the main road and 21 buildings on the south side. These buildings are on one floor, which is two or three stories.
                    In addition to residential buildings within the city, there are mosques, churches, temples, monasteries, dance halls, chitrasalas, pathshala, khajanchikhanas, darbar rooms, old museums, bathrooms, and secret roads.
                    Beside A 400-year-old mint house and a Neelkuthi built by the East India Company can be seen here.

                    <br>


            </div>
        </div>
    </div>
</section>



<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> What else to see in Panam Nagar: </h1>
    </div>
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-md-6">
                <h3>
                    <b>Folk and Crafts Museum:</b> The Folk and Crafts Museum is just a kilometer from Panam City. At the entrance of the Folk and Crafts Museum is a sculpture of the art Zainul Abedin.
                    A total of 11 museums in the museum have rare heritage artifacts preserved. The galleries have found suppurated wood carvings, masks, boat models, folk instruments and burnt clay artifacts, jamdani and nakshikantha, etc.<br><br>
                    <b>Gwaldi Masjid:</b>
                    You can travel from Gwaldi Masjid on a rickshaw fare of only Tk. 15 to 20 (0.24$) from the Folk and Crafts Museum. The Golden Mosque built by Mullah Hizabar Akbar Khan during Sultan Alauddin Hossain Shahin 1519 is an attractive place for tourists.

                    __________________________________________<br>
                    __________________________________________
                </h3>

            </div>
            <div class="col-lg-6 col-md-6">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.5422448245304!2d90.60265366484388!3d23.656559034635723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37544cadbef3a8df%3A0x6938b3ac2404e4d3!2sPanam%20City%2C%20Sonargaon!5e0!3m2!1sen!2sbd!4v1650640567392!5m2!1sen!2sbd" width="700" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> How to go to Panam Nagar: </h1>
    </div>
    <div class="container-fluid">
        <h3>
            From Gulistan in Dhaka, you have to take an AC bus from Doyle, Swadesh, or Borak to The Mograpara intersection. The fares for the above buses from Gulistan are Rs 45, 40, and Rs 50 (0.59$).
            You can go to Panam city on a fare of Tk. 20 to 40 (0.47$) in a battery-operated auto or rickshaw from the Mogpara intersection.<br>
            <b>Entry Fee:</b>
            A ticket of Rs 15 (0.18$) has to be cut to enter Panam City. Tickets have to be booked at Rs 30 per person to enter the museum.
            <b>Schedule:</b>
            The museum is closed every Wednesday and Thursday.<br>


            _______________________________________________________<br>
            _______________________________________________________
        </h3>

    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Nearest Police Station</h1>
    </div>

    <div class="container-fluid">
        <h3>   <?php
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
        </h3>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Watch vlogs</h1>
    </div>
    <div class="container-fluid">
        <a href="https://www.youtube.com/watch?v=WcLx7Y8HL2k"><font size=5px><b>click here</b></a>

    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> More places....</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <img class="card-img-top" src="images/lalbag.jpg" height="350" alt="Card image">
                                <div class="card-body"  >
                                    <h2 class="card-title" >Lalbag Kella</h2>
                                    <br>
                                    <a href="lalbag_kella.php" class="btn btn-primary">Explore more</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <img class="card-img-top" src="images/ahsan.jpg" height="350" alt="Card image">
                                <div class="card-body">
                                    <h2 class="card-title" >Ahsan Manjil</h2>
                                    <br>
                                    <a href="ahsan_manjil.php" class="btn btn-primary">Explore more</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </section>




</section>


<style>

    h3{
        font-family:SansSerif;
        color: snow;
        font-size: 20px;
        font-palette: dark;
        font-style: inherit;
        font-stretch: expanded;
        letter-spacing:2px ;
        line-height: 3rem;




    }

    h1{
        font-family: "Cambria Math";
        font-size: 25px;
        font-palette: dark;
        font-style: inherit;
        text-shadow: 1px 1px 0px #0c0b0b,
        2px 2px 0px #306681;
        color: rgb(0, 255, 255);

        text-transform: capitalize;
    }
    body{
        background-color: #232121;
    }


    /* The element to apply the animation to */

    .btn btn-primary{

        height: 50em;
        width: 3em;


    }


</style>


<a href="exp_show.php"><h1>  Do you want to share your experience?</h1> </a>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>


