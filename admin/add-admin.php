<!-- for Menu -->
<?php include('partials/menu.php'); ?>

<!-- Main Content Section Start Here -->
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
    <br>
    <br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary" placeholder="Enter Your Name">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<!-- Main Content Section End Here -->

<!-- for footer -->
<?php include('partials/footer.php'); ?>


<?php 
    //Process the Value from Form and Save it in Database.

    //check weather the submit button is clicked or not

    if(isset($_POST['submit'])) {

        //Button Clicked
        // echo "Button Clicked";

        //1. Get the Data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Password Encryption with MD5

        //2. SQL Query to Save the data into database
        $sql ="INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        //3. Execute Query And Save Data In DataBase
        $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error()); // Database Connection
        $db_select = mysqli_select_db($conn, 'food-order2') or die(mysqli_error()); // Selecting DataBase

    }
?>

