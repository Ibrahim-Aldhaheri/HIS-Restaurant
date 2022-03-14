<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin page</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

    <body class="bg-light">
    <!--nav starts here -->
    <?php
    session_start();
    include 'config.php';
    if(isset($_SESSION['username'])){
        $usernameStr = $_SESSION['username'];
        $sql = "SELECT user_type FROM users WHERE username= '$usernameStr'";
        $result = mysqli_query($conn, $sql) or die('SQL Error :: '.mysqli_error());
        $row = mysqli_fetch_assoc($result);

        if($row['user_type']=='A'){
            include 'adminHeader.php';
        }else {
            include 'userHeader.php';
            header("Location:index.php");
        }
    } else{
        include 'header.php';
        header("Location:index.php");
    }
    ?>
<!--nav ends here !!-->

<!-- admin panel starts here -->
    <!-- Change role start -->
    <?php
    include 'config.php';
    ?>
    <div class="container">
        <div id="message"></div>
        <div class="row mt-2 pb-3  ">
            <!--here is the users manage table-->

            <div class="jumbotron col align-self-center mt-4">
                <h1 class="h-1 dark"> Change User Role</h1>
                <div class="container">
                    <div id="message"></div>
                    <div class="row mt-2 pb-3">
                        <?php
                        include 'config.php';


                            ?>

                            <table class="table table-responsive table-striped" >
                                <div class="table responsive">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">User Type</th>
                                        <th scope="col">Created At</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php


                                    $stmt = $conn->prepare('SELECT * FROM users');
                                    $stmt->execute();
                                    $result = $stmt->get_result();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["id"]. '</td>
                  <td>' . $row["username"] .'</td>
                  <td> '.$row["email"] .'</td>
                  <td> '.$row["phone_number"] .'</td>
                  <td> '.$row["address"] .'</td>
                  <td> '.$row["user_type"] .'</td>
                  <td> '.$row["created_at"] .'</td>
                </tr>';

    }
} else {
    echo "0 results";
}
?>
                                    </tbody>
                                </div>
                            </table>

                    </div>
                </div>

                <form action="alter.php" method="post">
                    <div class="form-group" >
                        <label for="exampleFormControlInput1">User ID</label>
                        <input name="inputID" type="number" class="form-control" id="exampleFormControlInput1" placeholder="1 ,2 ,3">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">New Role</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="selectRole">
                            <option>Select...</option>
                            <option value="A">ADMIN</option>
                            <option value="U">USER</option>

                        </select>
                    </div>
                    <input name="submit" value="submit" type="submit" class="btn btn-block btn-dark">

                </form>




            </div>
            <!-- Change role ends -->
        </div>

        <!--meals here-->
        <div class="row mt-2 pb-3  ">
        <div class="jumbotron col align-self-center mt-4">
            <h1 class="h-1 dark"> Delete Meal</h1>
            <div class="container">
                <div id="message"></div>
                <div class="row mt-2 pb-3">
                    <?php
                    include 'config.php';


                    ?>

                    <table class="table table-responsive table-striped " >
                        <div class="table responsive ">
                            <thead>
                            <tr>
                                <th scope="col">Meal ID</th>
                                <th scope="col">Meal Name</th>
                                <th scope="col">Meal Price</th>
                                <th scope="col">Meal quantity</th>
                                <th scope="col">Code</th>


                            </tr>
                            </thead>
                            <tbody>
                            <?php


                            $stmt = $conn->prepare('SELECT *  FROM product');
                            $stmt->execute();
                            $result = $stmt->get_result();
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {


                                    echo '<tr>
                  <td>' .$row["id"]. '</td>
                  <td>' .$row["product_name"] .'</td>
                  <td> '.$row["product_price"] .'</td>
                  <td> '.$row["product_qty"] .'</td>
                  
                  <td> '.$row["product_code"] .'</td>
                  
                </tr>';





                                }
                            } else {
                                echo "0 results";
                            }
                            ?>
                            </tbody>
                        </div>
                    </table>

                </div>
            </div>

            <form action="Delete.php" method="post">

                <div class="form-group" >
                    <label for="exampleFormControlInput3">Meal ID</label>
                    <input name="inputID" type="number" class="form-control" id="exampleFormControlInput3" placeholder="1 ,2 ,3">
                </div>

                <input name="submit" value="Delete" type="submit" class="btn btn-block btn-dark">

            </form>




        </div>
        </div>

        <!--meals ends here-->


        <!-- add meal starts -->
        <div class="row mt-2 pb-3  ">
        <div class="jumbotron col align-self-center">
            <h1 class="h-1 dark"> Add new meal </h1>

            <form method="post" action="newMeal.php">
                <div class="form-group">
                    <label class="mt-2" for="exampleInput1">Meal Name : </label>
                    <input type="text" class="form-control " id="exampleInput1" name="mealName" aria-describedby="Enter the Meal Name" placeholder="french fries...">

                    <label class="mt-2" for="exampleInput2">Meal Price</label>
                    <input type="text" class="form-control " id="exampleInput2" name="mealPrice" aria-describedby="Enter the Meal Price" placeholder="33.2 ...">

                    <label class="mt-2" for="exampleInput3">Meal quantity </label>
                    <input type="text" class="form-control" id="exampleInput3" name="mealQuantity" aria-describedby="Enter the Meal Quantity" placeholder="15 ...">

                    <label class="mt-2" for="exampleFormControlFile1">Meal Picture</label>
                    <input type="file" class="form-control-file m-2" id="exampleFormControlFile1" name="mealPic">

                    <button type="submit" name="submit" class="btn btn-dark btn-block">Submit</button>

                </div>
            </form>

        </div>
        </div>
        <!-- add meal ends -->


    </div>
<!-- admin panel ends here -->

  <script type="text/javascript">
  $(document).ready(function() {
  load_cart_item_number();

function load_cart_item_number() {
  $.ajax({
    url: 'action.php',
    method: 'get',
    data: {
      cartItem: "cart_item"
    },
    success: function(response) {
      $("#cart-item").html(response);
    }
  });
}
  });
  </script>





    </body>

</html>