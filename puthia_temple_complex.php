<!DOCTYPE html>
<html>
<head>
    <title>Puthia Temple Complex</title>
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
                <a href="rajshahi_land.php"> Back to the previous page </a>
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

                    $sql = "SELECT image FROM pictures where division_id=5 and place_id=2";
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
                <h1 class="display-6"> <font size= 30px>Puthia Temple Complex</h1>
                <h3> Puthia Rajbari is a unique example of the eye-catching architecture located in Rajshahi. Puthia Rajbari is 30 km from Rajshahi divisional city and just 1 km from Rajshahi-Natore highway.
                    There is a lion door to the north to enter the two-story Edifice Palace with Puthia multi-room. Zamindars or kings operated their royal affairs from here.
                    Puthia Rajbari was built in the 19th century in Indo-European architecture. The Puthia palace currently under the supervision of the Archaeology Department. Now is being used as Laskarpur Degree College.
                    The trenches surrounded by Puthia rajbari have different names. Apart from Shiv Sarovar or Sivasagar, Marachowki, Bekichowki, Gopalchowki, and Govind Sarovar Parikha, a huge pond is called Shyamsagar in Rajbari.
                    Two palaces and several temples built by zamindars are still standing here with their heads raised.
                    One of them is the Boro Ahnik temple built in the Dochala system, the Boro Shiva Temple or Bhubaneswar Temple built in 1823, the four-storeyed Puthiya Dol Temple, and the Govindtemple located on the premises of Puthiya Panchani Zamindar House. Puthia Rajbari is open daily from 9am to 5pm.

                    <br>


            </div>
        </div>
    </div>
</section>



<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Location: </h1>
    </div>
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-md-6">
                <h3>
                    Puthia Upazila, Rajshahi District, Bangladesh. Located 23 km to the east of Rajshahi city.<br>
                    __________________________________________<br>
                    __________________________________________
                </h3>

            </div>
            <div class="col-lg-6 col-md-6">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.559297935971!2d88.83476461485812!3d24.361839584291573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc08ee31228683%3A0xec7d9a92ddfc1103!2sPuthia%20Rajbari!5e0!3m2!1sen!2sbd!4v1650650709695!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></section>


<section class="my-5">
    <div class="py-5">
        <h1 class="text-left">Transport: </h1>
    </div>
    <div class="container-fluid">
        <h3>

            <b><u>Dhaka to Rajshahi:</u></b><br>
            There is an option to travel from the capital Dhaka city to Rajshahi by road, rail, and air. The AC bus from Gabtoli, Kalyanpur, Green Line, and Desh Travels travels to Rajshahi from Rs 800 to Rs 1000 (9.43$-11.79$).
            Non-AC buses like Shyamoli, Hanif, National Travels, Bablu Enterprise, etc., run at a fare of Rs. 400 to Rs. 500 (4.72$-5.90$).
            The SilkCity Express train left Kamlapur railway station in Dhaka at 2.40 pm on 6 days of the week except Sunday for Rajshahi. Except for Tuesday, Padma express train leaves Dhaka for Rajshahi at 11.10 pm every day.
            You can fly from the Shahjalal International Airport in Dhaka to Rajshahi by air with Bangladesh Airlines and United Air at Tk. 3500 (41.27$) to Rs. 4500 (53.05$).
<br><br>
            <b><u>Rajshahi to Puthiya Rajbari:</u></b><br>
            Rajshahi and Natore to Puthia Rajbari by road is 34 km and 18 km, respectively. On any bus to Rajshahi, one can get down to the Puthia bus stand on Rajshahi-Natore highway and go to Rajbari on foot for 5 to 10 minutes. There is also a chance to take a bus from Rajshahi Central Bus Terminal to Natore and Puthia directly.

        </h3>

    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h1 class="text-left"> Nearby Hotel and Restaurants: </h1>
    </div>
    <div class="container-fluid">
        <h3>
            The Zilla Parishad has 2 dak bungalows to spend the night in Puthia. Anyone can stay in Bangalow at night by paying the permission and fixed rent of the Zilla Parishad.
            Phone number of CEO of Zilla Parishad: 0721-776348. You can also spend the night in a residential hotel near the Puthia bus stand.

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
        <a href="https://www.youtube.com/watch?v=fqb3uDtbb2s"><font size=5px><b>click here</b></a>

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
                                <img class="card-img-top" src="images/barendra%20rajshahi.jpg" height="350" alt="Card image">
                                <div class="card-body"  >
                                    <h2 class="card-title" >Barendra Research Museum</h2>
                                    <br>
                                    <a href="barendra_research_museum.php" class="btn btn-primary">Explore more</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card">
                                <img class="card-img-top" src="images/mahasthangarh.jpg" height="350" alt="Card image">
                                <div class="card-body">
                                    <h2 class="card-title" >Mahasthangarh</h2>
                                    <br>
                                    <a href="mahasthangarh.php" class="btn btn-primary">Explore more</a>
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




