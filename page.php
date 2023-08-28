<?php
SESSION_START();

if(isset($_SESSION['auth']))
{
    if($_SESSION['auth']!=1)
    {
        header("location:login.php");
    }
}
else
{
    header("location:login.php");
}

include 'header.php';
include 'lib/connection.php';

$limit = 2; // Số sản phẩm hiển thị trên mỗi trang
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại, mặc định là trang 1
$start = ($page - 1) * $limit;

$query = "SELECT * FROM product LIMIT $start, $limit";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <div class="container">
        <h4>Product List</h4>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['catagory']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['Price']; ?></td>
                <td><img src="product_img/<?php echo $row['imgname']; ?>" alt="Product Image" width="50"></td>
            </tr>
            <?php endwhile; ?>
        </table>

        <?php
        $total = $conn->query("SELECT COUNT(*) as total FROM product")->fetch_assoc()['total'];
        $pages = ceil($total / $limit);

        if ($pages > 1) {
            echo '<div class="pagination">';
            for ($i = 1; $i <= $pages; $i++) {
                echo '<a href="page.php?page=' . $i . '">' . $i . '</a>';
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
