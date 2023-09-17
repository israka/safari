<!DOCTYPE html>
<html>
<head>
    <title>Lalon Shah Majar</title>
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
        <ul><li>
                <a href="khulna_land.php"> &#8810 </a>
            </li>
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

        </ul>
    </nav>
</header>

<section class="my-5">

    <div class="container-fluid">
        <div class="row" >

            <div class="col-lg-6 col-md-6">
                <div class="container">
                    <br><br>  <br><br>   <br><br>
                    <?Php
                    $mysqli = new mysqli("localhost","root","","safari");

                    $sql = "SELECT image FROM pictures where division_id=4 and place_id=3  ";
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
                <h1 class="display-6"> Lalon Shah Majar</h1>
                <h3> <br>  Lalon Shah's shrine or Lalon's akhra is the graveyard of the Baul emperor Lalon and a shrine built around this tomb. This shrine is located in a village called Chheuria in Kumarkhali upazila of Kushtia district. Lalon Shah's mausoleum was not built here in one day. After Lalon's death in 1890, his devotees started flocking here. His present shrine was built there in 1963 and was inaugurated by the then Governor of East Pakistan Monaim Khan. At present, the shrine attracts a large number of visitors from different countries. </h3>
            </div>
        </div>
    </div>
</section>



<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Location</h1>
    </div>
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-md-6">
                <h3>Lalon's shrine is located in Kumarkhali upazila of Kushtia district in the Khulna division of Bangladesh. The shrine is located in Chheuria village of the upazila . This shrine is located near Kushtia city.
                _______________________________________________________
                    _______________________________________________________</h3>

            </div>
            <div class="col-lg-6 col-md-6">

                <p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.446270870506!2d89.14993361224765!3d23.895684121899514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe96dd91dc3ae5%3A0x6a3031f10bb89c16!2sLalon%20Shah&#39;s%20Mazar!5e0!3m2!1sen!2sbd!4v1650635889437!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
            </div>
        </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Transport</h1>
    </div>
    <div class="container-fluid">
        <h3> There are buses, trains, and launch systems directly from Dhaka to Khulna.
            <br><u>BUSES FROM DHAKA:</u><br>Buses from Dhaka are Sohag, Hanif, and Eagle, which regularly leave for Khulna from 6 am to 11 pm. From Dhaka, it takes about 8 hours by road. There are launches of various companies going from the Sadarghat launch terminal in Dhaka to Khulna.
            But the most convenient way to visit the Sundarbans is to go for a walk with the right tour company package.
            To see Sundarbans from Khulna, you have to go to Mongala, 50 km away. <br>From Khulna to Mongla you can take a private car or a bus.
            From Mongla Ghat you can take a boat or a launch and go to Karmjal, in the Sundarbans, in two hours. If you want, you can return to Khulna in the evening after seeing Sundarbans from Khulna to Mongla.
            <br><u>COST</u><br>: Rickshaw-auto rickshaw fare from Kushtia bus stand is 30-40 rupees
        </h3>

    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Where to stay?</h1>
    </div>
    <h3>There are arrangements to stay in the resthouses of Kachikhali at Tiger Point in Sundarbans, Neelkamal at Hiranpoint, and Resthouse in Katka Forest Department.
        If you want to stay in Neelkamal, it will cost 3,000 (35.30$) taka per room for domestic tourists and 5,000 (58.84$) taka for foreigners.
        Kachikhali will cost 3,000 (35.30$) taka per room and 5,000 taka for foreigners. It will take 2,000 (23.54$) taka per room or locals and Rs—5,000 (58.84$) per room for foreigners.
        There is not much residential hotel system to stay in Bagerhat. The facilities at Mumtaz Hotel on Rail Road are less, but the service quality is relatively good, but the cost is a little higher. Mumtaz can also search for other hotels around the hotel.
        The tourism corporation has hotels to stay in Mongla. There are some typical quality hotels for tourists to stay in animal ports.
        If you want to stay in the city, you will find some ordinary hotels here. NGO Sushilan’s resthouse and dormitory in Munshiganj in Shyamnagar have a night stay.
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
        <a href="https://www.youtube.com/watch?v=bavGhf7gOaQ"><b>click here</b></a>

    </div>
</section>




<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> More places....</h1>
    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/sundarbans1.jpg"  height="350" alt="Card image">
                    <div class="card-body">
                        <h2 class="card-title">Sundarban</h2>
                        <br>
                        <a href="sundarban.php" class="btn btn-primary">Explore more</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/shait%20gumbad%20khulna.jpg" height="350" alt="Card image">
                    <div class="card-body">
                        <h2 class="card-title" >Sixty dome mosque</h2>
                        <br>
                        <a href="sixty_dome.php" class="btn btn-primary">Explore more</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
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
        font-family:"Engravers MT";
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


