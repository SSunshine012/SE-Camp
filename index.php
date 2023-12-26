<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <br><br>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <br><br><br><br>
    <div class="box"> 
        <?php
        for($i=1;$i<=24;$i++){
            echo $multi_x ." x ". $i. " = ". $multi_x*$i."<br>";
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
        }
        .box{
            width: 300px;
            height: 400px;
            overflow-y: scroll;
            font-size: 30px;
        }
    </style>
</body>

</html>