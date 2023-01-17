<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <?php include_once "includes/head.html"; ?>

  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <?php include_once "includes/nav.php"; ?>

      <br> <br> <br> <br> <br> 
      <div id="table"></div>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
      <script>
        $(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    url: "history.php",
                    type: "GET",                    
                    dataType: "html",
                    success: function(data) { //если запрос успещен
                        // Получаем ответ с сервера с помощью ajax
                        // console.log(data);
                        // console.log(data.responseText);
                        console.log("The table was updated!");
                        $("#table").html(data);
                    },
                    error: function(jqXhr, textStatus, errorThrown) {
                        console.log("Ошибка '" + jqXhr.status + "' (textStatus: '" + textStatus + "', errorThrown: '" + errorThrown + "')");
                    },
                    complete: function() {
                    }
                });
            }, 1000);
        });
    </script>
      <php -->
       // $dbh = new PDO('mysql:dbname=chatapp; host=localhost', 'root', '');
      // $sth = $dbh->prepare("SELECT * FROM 'orders' WHERE 'from_id'= $unique_id"); //def: select * from orders
      // $sth->execute();
      // $list = $sth->fetchAll(PDO::FETCH_ASSOC);

      // if(!isset($_SESSION['unique_id'])){
      //   header("location: index.php");
      // }
      // $sql = mysqli_query($conn, "SELECT * FROM `orders` WHERE from_id={$_SESSION['unique_id']} "); // заказы клиента -->

      ?>

      <!-- <div class="row"> -->
          <!-- <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">history Order consumers</h2>
                <div class="module-subtitle font-serif"></div>
          </div>
      </div>
      
      <table class="table table-bordered" , class="table table-striped">
        <thead>
          <tr>
            <th>#заказа</th>
            <th>выполнить к времени</th>
            <th>клиент</th>
            <th>#клиента</th>
            <th>название блюда</th>
            <th>описание</th>
            <th>кол-во порций</th>
            <th>email пользователя</th>
            <th>адресс</th>
            <th>статус</th> 
            <th>чат</th>
          </tr>
        </thead>
        <tbody> -->

<!--     
          <php foreach ($sql as $row): ?>
          <tr>
            <td><php echo $row['id_order']; ?></td>
            <td><php echo $row['time_date']; ?></td>
            <td><php echo $row['name']; ?></td>
            <td><php echo $row['from_id']; ?></td>
            <td><php echo $row['product']; ?></td>
            <td><php echo $row['description']; ?></td>
            <td><php echo $row['count']; ?></td>
            <td><php echo $row['email']; ?></td>
            <td><php echo $row['address']; ?></td>
            <td><php echo $row['name_cul']; ?></td> -->
            <!-- <td><php echo $row['accepted']; ?></td> -->
            <!-- <php
            if(!$row['accepted'] == 0)
            {?>
              <td>
                <a class='btn btn-primary btn-sm' href="chat.php?unique_id=<?php echo $row['accepted']; ?>"> text </a>
              </td><php
            }
            else{?>
              <td>Not Accepted</td><php
            }?>
                
          </tr>
          <php endforeach; ?>   
           -->
          
        <!-- </tbody> -->
      <!-- </table> -->
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br>

     
    <?php include_once "includes/footer.html"; ?> 
 
    </main>
    
      <?php include_once "includes/scripts.html"; ?>   
      <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script> 
  </body>
</html>