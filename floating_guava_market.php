
<!DOCTYPE html>
<html>
<head>
    <title>floating guava market</title>
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
                <a href="barishal_land.php"> Back to the previous page </a>
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

                    $sql = "SELECT image FROM pictures where division_id=2 and place_id=0";
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
                <h1 class="display-6"> <font size= 30px>(Floating Guava Market)/ভাসমান পেয়ারা বাজার</h1>
                <h3> The largest guava garden on the Asian continent has been built in the shimanta areas of Jhalkathi, Barisal, and Pirojpur. Bhimruli, about 15 km from Jhalkathi district city, has Bangladesh’s largest “Vashoman Peyara Bazar” (Floating Guava Market).
                    Sitting in the edge of the canal from three sides, this floating guava market in Bhimruli. July, August is the pair’s season, but sometimes the market runs till September.
                    August is the most useful time to see the floating guava market. After 11 am, the Guava Market crowd continues to decline, so it is best to go to the market before 11 am.
                    You can also enjoy the enchanting look of houses, schools, bridges, and roads along the canal by visiting the backwater. You can walk along the canals hand-in-hand if you want to, and if it rains, it becomes more beautiful with earthly beauty.
                    On the way, make no mistake in tasting the hot rosgulla of Rituparna shop in Kuriyana Bazar, and you can eat lunch at bhabhi’s hotel in the market. You can visit Guthia Masjid and Durgasagar Dighi on your way to Barisal from floating Guava Bazar.

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
                    There is an opportunity to go to Barisal by launch or bus, but it is most convenient to go to Barisal by launch.
                    <br>If you want to go by launch:<br>
                    Several launches from Dhaka’s Sadarghat launch terminal reach Barisal every day between 4 am and 5 am. The deck fare per person to go to Barisal at the launch is Tk. 200 (2.36$), single cabin fare is Rs. 900 (10.60$) (non AC), and double cabin fare is Rs. 1700 (20.03$) (non AC).
                    The intersection will come from Barisal Launch Ghat to Auto or Rickshaw and cost Rs 50 (0.59$) by bus to Swarupkathi Launchghat.
                    You can hire trawlers from Swarupkathi Launchghat and enter the Sandhya river and visit Atghar, Kuriana, Bhimruli Bazar. Bargaining will cost Rs 1000 to Rs 1500 (11.78$-17.67$) per trawler.
                    Or you can come to Kuriana Bazar at an auto fare of Tk. 20 (0.24$) from Swarupkathi Launchghat and hire a boat or trawler for Rs. 200 to Rs. 300 (2.36$-3.53$) and travel to the market and canal around Kuriyana. But if you go to Bhimruli, the fare will be higher.
                    Besides, if the road is good, you can travel to Atghar, Kuriana, and Bhimruli bazaars by auto. In this case, check or take the auto back to every bridge as some bridges are broken.
                   <br> If you want to go by bus:<br>
                    Several buses leave Dhaka’s Sadarghat and Gabtoli bus terminals for Barisal. The bus per person’s ticket price to Barisal on Sakura transport is Rs 400 to Rs 600 (4.71$-7.07$). Buses are going directly from Gabtoli to Swarupkathi Launchghat.
                    The bus transporting Sonartori, hanif, and sakura costs Rs 500 (5.89$) per person. You can come to Barisal or Swarupkathi on the bus and see the floating Guava Market in a way as mentioned above.


                </h3>

            </div>
            <div class="col-lg-6 col-md-6">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.8529558735704!2d90.18105781482586!3d22.733706185100093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37554e61365ec36d%3A0xe8c54df1ba982e3c!2sFloating%20Guava%20Market!5e0!3m2!1sen!2sbd!4v1650656913058!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Nearby Hotel and Restaurants: </h1>
    </div>
    <div class="container-fluid">
        <h3>
            White and red sweets from Bhimruli Bazar, hot sweets from Rituparna shop in Kuriana Bazar, and lunch at Bhabhi’s hotel and guthia Sandesh are the must food items that anyone should try while there.
            You can also eat Rasmalai, Rosgulla, or Chana of Haque in the Puran Bazar area of Barisal city, Soshi’s Rasmalai in the Bottola area, Sponge Sweets of Nitai Dessert Store at Nayabazar Mor, Chutney near Bibi’s pond bank, Curd, Ghor-curd, ghol and ghol-muri mixed.
            You can spend the night at Dhansiri Rest House, Halima, and Arafat Boarding in Jhalkathi city at a fare of Rs 100 to Rs 250 (1.18$-2.95$). But you have to come to Barisal city to spend the night in a good quality hotel. There are several residential hotels of different quality in Barisal city.


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
        <a href="https://www.youtube.com/watch?v=43rJ3EztHDA"><font size=5px><b>click here</b></a>

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
                                <img class="card-img-top" src="images/oxford%20barishal.jpg" height="350" alt="Card image">
                                <div class="card-body"  >
                                    <h2 class="card-title" >Oxford Mission</h2>
                                    <br>
                                    <a href="oxford_mission.php" class="btn btn-primary">Explore more</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <img class="card-img-top" src="images/miabari%20barishal.jpg" height="350" alt="Card image">
                                <div class="card-body">
                                    <h2 class="card-title" >Miabari Jame masjid</h2>
                                    <br>
                                    <a href="miabari_jame_mashjid.php" class="btn btn-primary">Explore more</a>
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







