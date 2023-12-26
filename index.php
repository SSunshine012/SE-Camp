<html>
    <br><br><br><br>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
    <input type="number" name="number">
    <input type="submit" value="ค้นหาแม่สูตรคูณ">
    <br><br><br><br><br>
    </form>
<head>
    <meta charset="utf-8">
</head>

<body>
    <div class="box"> 
        <?php
            isset( $_POST['number'] ) ? $number = $_POST['number'] : $number = "";
            if( !empty( $number ) ) {
                echo "<b>สูตรคูณแม่ : $number </b><hr>" ;
                for( $i=1; $i<=24; $i++ ) {
                    echo "<br/>{$number} x {$i} = ".( $number * $i );
                }
            }
        ?>
    </div>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            height: 90vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            background-color: pink;
        }
        .box{
            width: 300px;
            height: 400px;
            overflow-y: scroll;
            font-size: 25px;
            background-color: whitesmoke;           
        }
        .box:hover {
            background-color:white;
        }
    </style>
</body>
</html>