<?php
include 'header.php';
include 'lib/connection.php';

$search_result = array(); // Khởi tạo mảng lưu kết quả tìm kiếm

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    // Thực hiện truy vấn tìm kiếm trong cơ sở dữ liệu
    $search_query = "SELECT * FROM product WHERE name LIKE '%$keyword%'";
    $search_result = $conn->query($search_query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tìm kiếm</title>
    <link rel="stylesheet" href="css/home.css">
    
</head>
<body>
    <h1>Kết quả tìm kiếm cho "<?php echo $keyword; ?>"</h1>

    <div class="container pendingbody">
        <h5>Product</h5>

        <?php if (!empty($search_result) && $search_result->num_rows > 0): ?>
            <?php while ($row = $search_result->fetch_assoc()): ?>
                <div>
                    <img src="product_img/<?php echo $row['imgname']; ?>" style="width: 50px;">
                    <input type="text" name="update_name" value="<?php echo $row['name']; ?>">
                    <input type="text" name="update_catagory" value="<?php echo $row['catagory']; ?>">
                    <input type="number" name="update_quantity" value="<?php echo $row['quantity']; ?>">
                    <input type="number" name="update_Price" value="<?php echo $row['Price']; ?>">
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Không có kết quả tìm kiếm.</p>
        <?php endif; ?>
    </div>
</body>
</html>
