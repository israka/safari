<!DOCTYPE html>
<html>
<head>
    <title>Muktagacha Zamidar Bari</title>
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
                <a href="mymensingh_land.php"> Back to the previous page </a>
            </li>
        </ul>
    </nav>
</header>

<section class="my-5">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-md-6">
                <div class="container"><br><br><br>
                    <?Php
                    $mysqli = new mysqli("localhost","root","","safari");

                    $sql = "SELECT image FROM pictures where division_id=8 and place_id=0";
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
                <h1 class="display-6"> <font size= 30px>Muktagacha Zamidar Bari</h1>
                <h3> Muktagasa Zamindar House is a traditional ancient structure of Muktaghasa Upazila in the Mymensingh district. This Muktaghasa palace is located 17 km from Mymensingh.
                    The zamindar of the then Muktagasa got the title of king first and then maharaja from the British.
                    So this residence of the zamindaris called Muktagasa Rajbari. 16 parts of Muktagasa zamindari were ruled by 16 zamindars.
                    The entrance of the Muktaghasa Zamindar house has a giant lion door. Inside the palace are the zamindar’s mother’s house, temple, darbar hall, kacharighar, guest house, ark room, and other buildings.
                    The royal house also had a rare library of about 10,000 books, which was threatened at different times. At present, some of it is preserved in Muktagasha Bangla Academy.
                    The Muktagasa Palace, built on about 100 acres of land, bears witness to the unique artifacts of ancient architecture. The palace is currently under the supervision of the Bangladesh archaeology department.

                    <br>


            </div>
        </div>
    </div>
</section>



<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Transport: </h1>
    </div>
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-md-6">
                <h3>
                    The fare to Mymensingh is between Rs 180 and Rs 370 (2.12$-4.36$) from Dhaka, Ena, Alam Asia, Shamim Enterprise (AC/NonAC). The trip takes 2 and a half to 3 hours.
                    Suppose you want to travel from Dhaka to Mymensingh by train. In that case, you can go directly to Mymensingh by train on any of these trains like Teesta Express (7:30 am), Mohanganj Express (2:20 pm), Yamuna Express (4:40 pm), Brahmaputra (6:00 pm), and Hauer Express (11:50 pm). The fare is Rs 120 to Rs 360 per class. It will take 3 to 4 hours to go.
                    You can come to Mymensingh and travel to Muktagasa by bus at a fare of Rs 20-30 (0.24-0.35$). You could take a CNG reserve or a local CNG to reach Muktagasa. Local CNG fares are 40-45 Tk (0.47$-0.53$). Reserve fares are 200-250 Tk (2.36$-2.95$).
                    The distance from Mymensingh to Muktagasa is 17 km. It will take 40-50 minutes to go. If you walk down the Muktagasa or walk through the market with a rickshaw, you will reach the Muktagasha Zamindar’s House. You can also go to Muktaghasa Rajbari in your private car.

                </h3>

            </div>
            <div class="col-lg-6 col-md-6">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57965.748377600845!2d90.22111691829527!3d24.7660137290846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375637034a01765d%3A0xedd0137c5d1b75e0!2sMuktagacha!5e0!3m2!1sen!2sbd!4v1650653007698!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Nearby Hotel and Restaurants: </h1>
    </div>
    <div class="container-fluid">
        <h3>
            There are several residential hotels in Muktagasa. You can stay in them if necessary. Or you can choose a good hotel for you from different quality hotels in Mymensingh city.
            You can also rely on Amir International, Hotel Mustafiz, or Silver Castle in Mymensingh.
            Taking a journey to Muktagasa without taking monda leaves your journey unfulfilled, so definitely don’t miss eating it. The 150-year-old traditional Gopal Pal monda shop is in front of Rajbari.
            This Monda reputation is very well known to people all over the country. Only Muktagasa have the real and genuine, only monda shop. The price of monda per piece is Rs 22 (0.26$), Rs. 440 (5.18$) per kg.
            If you want to eat heavy food, you can eat in a good quality hotel in the Muktagasa market.


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
        <a href="https://www.youtube.com/watch?v=8D7-ewTKOHE"><font size=5px><b>click here</b></a>

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
                                <img class="card-img-top" src="images/botani%20mymen.jpg" height="350" alt="Card image">
                                <div class="card-body"  >
                                    <h2 class="card-title" >Botanical garden</h2>
                                    <br>
                                    <a href="mymensingh_botanical_garden.php" class="btn btn-primary">Explore more</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <img class="card-img-top" src="images/bau%20mymen.jpg" height="350" alt="Card image">
                                <div class="card-body">
                                    <h2 class="card-title" >Bangladesh Agricultural University</h2>
                                    <br>
                                    <a href="bangladesh_agricultural%20uni.php" class="btn btn-primary">Explore more</a>
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






