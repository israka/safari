<!DOCTYPE html>
<html>
<head>
    <title>Jaflong</title>
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
                <a href="sylhet_land.php"> &#8810 </a>
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
                    <br><br>   <br><br>
                    <?Php
                    $mysqli = new mysqli("localhost","root","","safari");

                    $sql = "SELECT image FROM pictures where division_id=7 and place_id=1  ";
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
                <h1 class="display-6"> Jaflong</h1>
                <h3> <br> Jaflong is famous for its stone collections and is home of the Khasia tribe. Jaflong is also a scenic spot nearby amidst tea gardens and rare beauty of rolling stones from hills. You can watch Dauki Bazar on hills of Meghalaya & Hanging bridge connected between two hills of Meghalaya, it looks beautiful
                </h3>
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
                <h3>Jaflong, Goainghat, Sylhet. Located in Gowainghat upazila of Sylhet district. The distance by road from Sylhet district headquarters is only 56 km
                    _______________________________________________________
                    _______________________________________________________</h3>

            </div>
            <div class="col-lg-6 col-md-6">

                <p>
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6816.534904473864!2d92.01352753953371!3d25.171719594713284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375044bd7d747f47%3A0xef2b6cb5bcade375!2sJaflong!5e0!3m2!1sen!2sbd!4v1648837313791!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
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
        <h3>         From Dhaka to Sylhet one can use train and bus.
            <b> <li>Dhaka to Sylhet trains:</li></b>
            <ul><li> Parabat Express</li>
                <li>Jayantika Express</li>
                <li>Upaban Express</li>
                <li>Kalni Express</li>
                <li>Surma mail</li>
            </ul>
            <a href="https://amartrain.com/dhaka-sylhet-train-schedule-ticket-price/">Ticket price and schedule:</a>
            <br>
            <a href="https://www.esheba.cnsbd.com/"> Buy ticket online</a>
            <b><li> Dhaka to Sylhet Bus :</li></b>
            <ul><li>Ena Transport (Pvt) Ltd</li>
                <li>Hanif Enterprise</li>
                <a href="https://www.shohoz.com/bus-tickets/dhaka-to-sylhet">Buy bus ticket online:</a> <br>
                To reach Sylhet to Jaflong one can take a bus / microbus / CNG /powered autorickshaw. It will take 1 hour to 1.30 hours. Bus Rent bdt. 55 per person and Microbus rent bdt. 1800-2000 and CNG powered auto rickshaw rent bdt. 800

        </h3>

    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Where to stay?</h1>
    </div>
    <h3>
        <li>1) Parjatan Motel, which is located outside the town.It has only 7 rooms and price from 1800 BDT to 2000 BDT. One can contact to this number +88-2-9893710.</li>
        <li> 2) Jainta Hill Resort which is located 5km away from town. In this resort room price starts from 2300 BDT please contact to +88-01755-045051.</li>
        <li>3)Hotel Jaflong Inn, which is located on Mamar Bazar(Town center) and room price starts from 1200 BDT. Please contact to: +88-01755045051 for booking.</li>
        <li>4) Shah Amin Hotel, which is the closest location from the river and room price starts from 1000 BDT. Please contact to +88-01795935679 for booking. There are some cheap hotels in Mamar Bazar( Town center), the price starts from 300 BDT.
        </li>
    </h3>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Nearest Police Station</h1>
    </div>

    <div class="container-fluid">
        <h3>
            If you guys face any kind of problem contact with nearest police station Contact number (ASP, Gowainghat Circle: Gowainghat , Companygonj PS) – 01320117766.<br> Contact number-(OC) 01320117969, Contact number (Inspector,Investigation) – 01320117970 and Contact number (duty Officer)) – 01320117974 / 0822856003”,

        </h3>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Watch vlogs</h1>
    </div>
    <div class="container-fluid">
        <a href="https://www.youtube.com/watch?v=dqXYNQGoKB4"> Watch

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
                    <img class="card-img-top" src="images/Tanguar2.jpg" height="350" alt="Card image">
                    <div class="card-body"  >
                        <h2 class="card-title" >Tanguar Haor</h2>
                        <br>
                        <a href="lalon_shah.php" class="btn btn-primary">Explore more</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/sreemangal%20sylhet.jpg" height="350" alt="Card image">
                    <div class="card-body">
                        <h2 class="card-title" >Sreemangal
                        </h2>
                        <br>
                        <a href="#" class="btn btn-primary">Explore more</a>
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



