
<!DOCTYPE html>
<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" </link>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sylhet_style.css">
    <link href=" @import url('https://fonts.googleapis.com/css2?family=Beau+Rivage&display=swap')" </link>

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
<br>
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
                <a href="#">  </a>
            </li>
        </ul>
    </nav>
</header>
<br>
<br>


<?Php
$mysqli = new mysqli("localhost","root","","safari");

$sql = "SELECT image FROM pictures where division_id=8  ";
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


<section class="my-5">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-md-6">
                <br>

                <video width="640" height="480" controls autoplay>
                    <source src="mymensingh.land.mp4" muted autoplay loop class="video" >
                    Your browser does not support the video tag.
                </video>


            </div>

            <div class="col-lg-6 col-md-6">

                <p class="py-2">
                <h1 class="text-center"> Mymensingh</h1>
                <br>
                <h3> <br>  Mymensingh is rich in heritage and culture. There are many great places to visit in Mymensing Among the places to visit and historical establishments in Mymensingh district are Shashi Lodge, Alexander Castle, Muktagasa Zamindar House, Bangladesh Agricultural University, Shilpaacharya Zainul Abidin Museum, Old Brahmaputra River, Mymensingh Museum, Silver Palace, Ramgopalpur Zamindar House, Botanical Garden, Mymensingh Town Hall, Durgabari, Gauripur Rajbari, Crocodile Farm, Garo Pahar, etc.
                </h3> </p>

            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h1 class="text-center">Plan a new destination... </h1>

    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/botani%20mymen.jpg"  height="350" alt="Card image">
                    <div class="card-body">
                        <h2 class="card-title">Botanical Garden</h2>
                        <br>
                        <a href="mymensingh_botanical_garden.php" class="btn btn-primary">Explore more</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/bau%20mymen.jpg" height="350" alt="Card image">
                    <div class="card-body"  >
                        <h2 class="card-title" >Bangladesh Agricultural university</h2>
                        <br>
                        <a href="bangladesh_agricultural%20uni.php" class="btn btn-primary">Explore more</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="images/muktagacha%20mymen.jpg" height="350" alt="Card image">
                    <div class="card-body">
                        <h2 class="card-title" >Muktagacha Zamidar Bari</h2>
                        <br>
                        <a href="muktagacha_jamidar_bari.php" class="btn btn-primary">Explore more</a>
                    </div>
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
        text-shadow: 1px 1px 0px #c3d06f,
        2px 2px 0px #306681;
        color: rgb(0, 255, 255);

        text-transform: capitalize;





    }



    body{
        background-color: #232121;


    }




    /* The element to apply the animation to */
    h2 {

        height: 1em;
        display: flex;
        align-items: center;

        display: inline-block;
        padding: 10px 30px;
        color: #191818;
        background-color: #ffffff;
        border: 2px solid #ffffff;
        font-size: 2.25rem;
        text-transform: capitalize;
        letter-spacing: .2rem;
        margin-top: 30px;
        margin-left: 60px;
        transition: .3s ease background-color ;
        font-weight: bold;


    }
    .btn btn-primary{

        height: 50em;
        width: 3em;


    }


</style>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>


<?php
