<!DOCTYPE html>
<html>
<head>
    <title>Botanical Garden</title>
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

                    $sql = "SELECT image FROM pictures where division_id=8 and place_id=1";
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
                <h1 class="display-6"> <font size= 30px>Botanical Garden, Mymensingh/বোটানিক্যাল গার্ডেন</h1>
                <h3> Botanical Garden was established in 1963 with rare species of plants collecting around 25 acres of the university campus on the banks of the old Brahmaputra river.
                    The first botanical garden in Bangladesh, recognized by the international organization Botanic Gardens Conservation International (BGCI), has about 600 different plants, including 1,000 large, 1278 medium, and 4467 small trees.
                    These include Gutgutia, African Tulip, Kaizelia, Swarnashoka, Kumbi, Nageshwarchapa, Budhanarikel, Patenjaba, Pahari Kash, Kaika, Sinduri, Bixa Chandul, Epikak, etc.
                    Kalahuja, Passion Fruit, Deris, Kalomegh, Misridana, Nilkanta, Shatmuli, Swarpagandha, Talmuli, Honey Sakal, Bankala, Yellow Kanchan, Shambhukas, AnantLata, Khami, Kulanjan, Kanthakash, Sultanchapa, Kaika, Kansunalu, Letkantha, Patipata, Nakshivomika, Nadajam, Tithijam, Ajuli, Shal, Kharajura, Arusa, Panikalami, Khuskher, Elena, Chagalladi, Motha, Avukado, Durian, Kokua, Satkara, Barmala, Meilam, Swarna Ashoka, Raj Ashoka, Branfelsia, Cactus, Lalchita, Nilchita, Galpepper, Masukda, Ganiari, Grillirichida, Fern Haringanga, Atmara, Beria, Behelatad, Fern Kadai, Gardenia, Bambus, Rondelitia, Tabebua, Dumbia, Banjari, Jayatri, Jayapal, Nagnath, Jacharanda, Wild Dates, Skafelara, Ravenia, Jakutivasa, Verigate Monder, Persimon, Harguja Kanta etc.
                    One of the crop botany department of the Agricultural University teachers served as garden curator for two years. This Botanical Garden is used for students of various faculties at graduate, master’s, and Ph.D. levels.
                    Students from other nearby districts and educational institutions also come to botanical gardens to learn about the plant world.
                    Apart from the huge flora, there are portraits of various animals and about half a hundred rest benches for visitors.
                    Students of Bangladesh Agricultural University, i.e., Bakribi, can enter botanical gardens free of cost. Ordinary visitors have to collect entry coupons to enter.
                    Botanical Gardens are open to all visitors from Sunday to Thursday from 2 pm to 5 pm every week. And Fridays and Saturdays of the week are open from 9 am to 5 pm.

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
                    You can come to Mymensingh district city by bus or train from Dhaka and take a rickshaw or autorickshaw to the Botanical Garden located on the Campus of Bangladesh Agricultural University.
                    If you want to travel from Dhaka by train, Teesta express (7:30 am), Mohanganj Express (2:20 pm), Yamuna Express (4:40 pm), Brahmaputra (6:00 pm), and Hauer Express (11:50 pm) will take 3 to 4 hours to go directly to Mymensingh.

                </h3>

            </div>
            <div class="col-lg-6 col-md-6">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.0763811751513!2d90.43924591486555!3d24.724257884118327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37564ffabb94987b%3A0xf80b3fe0d023d592!2sBotanical%20Garden%2C%20BAU!5e0!3m2!1sen!2sbd!4v1650653497642!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Nearby Hotel and Restaurants: </h1>
    </div>
    <div class="container-fluid">
        <h3>
            Amir International, Hotel Mustafiz, Hotel Silver Castle, Hotel Hera, Hotel Khan International, Nirala Rest House, Hotel Isha Khan, Hotel Uttara, Taj Mahal, etc., are among the various quality residential hotels in Mymensingh city.
            You can also try the pulao at the press club in Mymensingh city. Hotel Dhansiri and Hotel Sainda also have good reputations when it comes to quality food.



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







