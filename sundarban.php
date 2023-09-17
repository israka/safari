<!DOCTYPE html>
<html>
<head>
    <title>Sundarban</title>
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
                <a href="khulna_land.php"> Back to the previous page </a>
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

                    $sql = "SELECT image FROM pictures where division_id=4 and place_id=1  ";
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
                <h1 class="display-6"> Sundarban</h1>
                <h3> <br>The Sundarbans is of universal importance for globally endangered species including the Royal Bengal Tiger, Ganges and Irawadi dolphins, estuarine crocodiles and the critically endangered endemic river terrapin (Batagur baska). It is the only mangrove habitat in the world for Panthera tigris tigris species.     </h3>


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
                 <h3> The Sundarbans mangrove forest covers an area of about 10,000 km2 (3,900 sq mi), of which forests in Bangladesh's Khulna Division extend over 6,017 km2 (2,323 sq mi) and in West Bengal, they extend over 4,260 km2 (1,640 sq mi) across the South 24 Parganas and North 24 Parganas districts.

                     _______________________________________________________
                     _______________________________________________________</h3>

            </div>
            <div class="col-lg-6 col-md-6">

            <p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d946889.9059687905!2d88.72646031728428!3d22.019405955649997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a004caac2c7b315%3A0x4716abcfbb16c93c!2sSundarbans!5e0!3m2!1sen!2sbd!4v1650482976554!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>

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
            <br><u>COST</u><br>Daily travel fee for domestic tourists in sanctuary areas – Tk. 150 (1.77$), Tk. 30 for students, Travel Fee for foreign tourists – Tk. 1500 (17.65$). The travel fee for domestic tourists outside the sanctuary is Tk. 70 (0.82$), students – Tk. 20 (0.24$), travel fee for foreigners is taka 1000 (11.77$) and travel fee for researchers – Tk. 40 (0.47$). The travel fee for domestic tourists in Karmjal is Tk. 20 (0.24$) per person, Tk. 300 (3.53$) for foreigners.
            A one-time fee for a helicopter/Seaplane is Rs. 30,000 (353.05$), and the renewal fee is Rs. 10,000 (117.68$).
            15,000/- (176.52$)) for launch above 100 feet, 4,000 (47.07$) taka for the renewal fee For a 50-foot to 100-foot: launch, one-time Rs. 10,000 (117.68$) has to be paid, and the renewal fee is Rs. 3,000 (35.30$). 7,500/- (88.26$) for ships below 50 feet and Rs. 2,500/- (29.42$) for them.
            The standard trawler can stay in Sundarbans at a fee of Rs. 3,000 (35.30$), with a renewal fee of Tk. 1500 (17.65$). The cost for speedboats is Rs. 5,000 (58.84$), and it takes Rs. 2,000 (23.54$) to be renewed.
            Those known as Jaliboat tourist boats require a one-time fee of Rs 2,000 (23.54$) and a renewal fee of Rs 1,000 (11.77$).
        </h3>

    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Where to stay at Sundarban?</h1>
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
                    <img class="card-img-top" src="images/lalon%20khulna.jpg" height="350" alt="Card image">
                    <div class="card-body"  >
                        <h2 class="card-title" >Lalon shah majar</h2>
                        <br>
                        <a href="lalon_shah.php" class="btn btn-primary">Explore more</a>
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

