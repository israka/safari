
<html>
<head>
    <title> display review</title>

    <style type=text/css>
        nav{
            position: static;

        }
        header {
            background-color:transparent ;
            position: static;
            left: 0;
            right: 0;
            top: 0px;
            height: 30px;
            display: flex;
            align-items: center;
            box-shadow: transparent;
        }
        header * {
            display: inline;

        }
        header li {
            margin: 5px;

        }
        header li a {
            color: #191818;
            text-decoration: none;
        }

    </style>


</head>
<body>

<header> <nav>
        <ul>


            <li>
                <a href="pic_del.php" > <h5><font size="6px">&#8592</h5>
                </a>
            </li>
            <li>
                <a href="index.html"> <h3><font size="5px"> Home <h3></a>
            </li>
            <li>
                <a href="adminland.php"> Admin home</a>
            </li>
            <li>

            </li>
            <li> <a href="#">  </a>
            </li>
            <li>
                <a href="#">  </a>
            </li>
        </ul>
    </nav>
</header>


<table border="1" align="center" width="700"height="500">
    <tr>
        <th> serial</th>
        <th>Division_id </th>
        <th> Place_id</th>
        <th> image</th>
    </tr>


    <?php
    include_once ("backend_files/db_connection.php");
    global $conn;
    $query="select * from pictures";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    $result= mysqli_fetch_assoc($data);



    if($total!=0) {
        while ($result = mysqli_fetch_assoc($data)) {

            echo "
    <tr>
    <td>" . $result['e_id'] . "</td>
    <td>" . $result['division_id'] . "</td>
    <td>" . $result['place_id'] . "</td>   
    <td>" . $result ['image'] . "</td>   
    
      </tr>
    ";
        }
    }
    else
    {
        echo "no records";
    }

    ?>
</table>
<style>
    body {
        background-image: url("images/notun blur.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;

    }
    tr
    {
        color: black;
    }
    table
    {
        background-color: #97bcce;
        margin-top: 50px;
        border-color: rgb(151, 188, 206);
    }
    </style>
      </body>
        </html>



