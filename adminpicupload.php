

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> add pic</title>
    <!--frontawesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>   <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     <style type=text/css>
        body {
            background-image: url('');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #232121;
        }
        nav{
            position: fixed;

        }
        header {
            background-color: rgb(35, 33, 33);
            position: fixed;
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


        #content{
            width: 50%;
            margin: 120px auto;
            border: 5px solid #00ffff;
        }
        form{
            width: 50%;
            margin: 20px auto;

        }
        textarea{
            height: 55px;
            width: 256px;


        }
        form div{
            margin-top: 5px;
            border: 5px solid #00ffff;
        }
        #img_div{
            width: 80%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #cbcbcb;
        }
        #img_div:after{
            content: "";
            display: block;
            clear: both;
        }
        img{
            float: left;
            margin: 5px;
            width: 300px;
            height: 140px;
        }

        label{
            color: #29d9d5;
            font-family: "Bookman Old Style";
            font-size: xx-large;
            margin-top: 80px;

            margin-left: 400px;
            }

        h1{

            color: #29d9d5;

        }
    </style>



</head>
<body>

<header> <nav>
        <ul>
            <li>
                <a href="adminland.php"><h2>&#8810 </h2></a>
            </li>

            <li>
                <a href="#"> </a>
            </li>
            <li> <a href="#">  </a>
            </li>

        </ul>
    </nav>
</header>
<label > Add pictures</label>
<div class="container">
    <div class="row text-center-py-5">
        <?php
error_reporting(0);
// Create database connection
$db = mysqli_connect("localhost", "root", "", "safari");

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $text_d = mysqli_real_escape_string($db, $_POST['text']);
    $text_p = mysqli_real_escape_string($db, $_POST['text']);

    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO pictures (division_id,image,place_id) VALUES ('$text_d','$image','$text_p')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
}
$result = mysqli_query($db, "SELECT * FROM pictures");
?>






<div id="content">

    <form method="POST" action="adminpicupload.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
            <input type="file" name="image">
        </div>
        <div>
      <textarea
              id="text_p"
              cols="40"
              rows="4"
              name="text"
              placeholder="place id..."></textarea>
        </div>

        <div>
      <textarea
              id="text_d"
              cols="40"
              rows="4"
              name="text"
              placeholder="Division ID..."></textarea>
        </div>



        <div>
            <button type="submit" name="upload">ADD</button>
        </div>
    </form>
</div>



<!--bootstrap_js-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>
