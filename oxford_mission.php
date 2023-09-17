
<!DOCTYPE html>
<html>
<head>
    <title>oxford mission</title>
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

                    $sql = "SELECT image FROM pictures where division_id=2 and place_id=2";
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
                <h1 class="display-6"> <font size= 30px>Oxford Mission/অক্সফোর্ড মিশন:</h1>
                <h3> A church with the name Oxford Mission is located on Bogragami Road in the Barisal Division of Venice fame in the East. Oxford Mission Church, one of the most artistic church architecture artifacts in Bangladesh, is considered the 2nd largest church in Asia.
                    Although the ancient church was called the Epifani Church, it became known as the Oxford Mission. The construction of the church, designed by Sister Edith, began in 1903 and was completed in 1907 under Father Strong’s guidance.
                    The Oxford Mission Church looks one-story, but it is equal to a 5-story building at a height. The beautiful church is built in imitation of the Greek architectural style.
                    As soon as you cross the wall, you can see green grass fields, playgrounds, ponds, Oxford Mission Primary School and high school, libraries, hospitals, student hostels, flower gardens, and a variety of medicinal plants.

                    There is a huge cross placed on the main altar. Built on about 35 acres of land, the Oxford Mission Church has wood-carved designs and marble floors.
                    The Oxford Mission Church has a huge pleasant prayer room; the surroundings are very calm and smooth, with rows of pump trees. Next to the church are Father’s House and Mother’s House.
                    The Oxford Mission Church has an interesting bell, which is considered the biggest bell in Asia. This bell is played seven times a day. Numerous corridors and arches built in the church have strengthened the main structure.
                    There is an opportunity to visit the Oxford Mission Church easily with permission. The church is open for visitors from morning till 4 pm.

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
                    You will get CNG, autorickshaws, and rickshaws to visit Oxford Mission Church in the divisional city of Barisal.
                    Dhaka to Barisal by bus or road
                    It takes about 6 to 8 hours to travel from Dhaka to Barisal by road. From Gabtoli bus terminal in Dhaka, buses regularly travel from 6 am to 10 pm on the way to Barisal.
                    Buses usually pass through Paturia Ghat to Barisal, but some buses pass through Mawa Ghat towards Barisal. Buses from Dhaka stopped at Natullahbad bus stand in Barisal city.
                    Hanif Transport (01713-049559), Eagle Transport (02-9006700), Shakura Transport (01729-556677) are among the buses plying on Dhaka to Barisal route.
                    The fare for AC and non-AC buses to Barisal is Rs 500 to Rs 700 (5.89$-8.25$). It is best to avoid these buses to save time by plying several local buses on this route. These buses cost Rs 250 to Rs 300 (2.95$-3.53$) to go to Barisal.
                    Dhaka to Barisal by boat or launch
                    From Sadarghat in Dhaka, the Sundarbans 7/8, Surabhi 8, Parbat 11, Kirtankhola 1/2 launch leave for Barisal between 8 pm and 9 pm. And if you want to go in the morning, you can go to the Greenline launch.
                    The night launches reach Barisal around 5 am. The deck fare for these launches is Tk. 150 (1.77$), double cabin fare is Tk. 1600 (18.85$), and VIP cabin fare is Tk. 4500 (53.01$).


                </h3>

            </div>
            <div class="col-lg-6 col-md-6">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.6563056965338!2d90.35794591482525!3d22.703834985115424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755341759789ab1%3A0x5725cb1d1651ab31!2sOxford%20Mission%20Rd%2C%20Barisal!5e0!3m2!1sen!2sbd!4v1650657810524!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

</section>


<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Nearby Hotel and Restaurants: </h1>
    </div>
    <div class="container-fluid">
        <h3>
            There are some good quality residential hotels in Barisal where you can easily spend the night. Residential Hotels in Hotel Hawk International (01718-587698), Hotel Grand Plaza (01711-357318, 01917-458088), Hotel Paradise to International (01717-072686, 01724-853590), Hotel Athena International (0431-65106, 0431-65233) are notable.
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
                                <img class="card-img-top" src="images/miabari%20barishal.jpg" height="350" alt="Card image">
                                <div class="card-body"  >
                                    <h2 class="card-title" >Miabari Jame Masjid</h2>
                                    <br>
                                    <a href="miabari_jame_mashjid.php" class="btn btn-primary">Explore more</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <img class="card-img-top" src="images/guava%20barishal.jpg" height="350" alt="Card image">
                                <div class="card-body">
                                    <h2 class="card-title" >guava market</h2>
                                    <br>
                                    <a href="floating_guava_market.php" class="btn btn-primary">Explore more</a>
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








