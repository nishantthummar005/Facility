    <?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
echo $_SESSION['email'];

?>
<a href="logout.php">logout</a>