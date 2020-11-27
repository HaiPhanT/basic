<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table V04</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h1>Ngay hien tai:
            <?php 
              date_default_timezone_set("Asia/Ho_Chi_Minh");
              $currentDate = date("d/m/Y"); 
              echo "$currentDate"
            ?>
        </h1>
        <h1>Gio hien tai:
            <?php 
              $currentTime = date("H:i:s");
              echo "$currentTime"
            ?>
        </h1>
    </div>
    <div class="container text-center table table-bordered table-dark">
        <table class="w-100">
            <th>Bang Cuu Chuong Theo Phut</th>
            <?php 
              $currentMin = date("i");
              for($i=1; $i<=10; $i++){
                $result = $currentMin * $i;
                echo "<tr><td>$currentMin x $i = $result</td></tr>";    
              }
            ?>
        </table>
    </div>
</body>

</html>