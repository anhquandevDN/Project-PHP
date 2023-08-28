<?php
#mean: đăng nhập được hay chưa
 include'header.php';
 SESSION_START();
#tồn tại và có giá trị là 1(đăng nhập được)
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
include'lib/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">

</head>
<body>
<div id="root">
<div class="img">
            <div class="anhto">
                <img src="https://kingdana.vn/wp-content/uploads/2022/04/2-1.png" width="1366" height="768" alt="">
            </div>
        </div>
        <div class="main">

            <div class="main-img-1">
                <div class="main-img-1"><img src="https://kingdana.vn/wp-content/uploads/2020/06/400x222-1400x777.jpg"
                        width="370" height="200"></div>
                <div class="main-img-1"><img
                        src="https://kingdana.vn/wp-content/uploads/2020/06/san-nhua-tu-dan-1400x777.jpg" width="370"
                        height="200"></div>
                <div class="main-img-1"><img
                        src="https://kingdana.vn/wp-content/uploads/2020/06/OP-TUONG-TRAN-1400x777.jpg" width="370"
                        height="200"></div>
            </div>

            <div class="main-img-2">
                <div class="main-img-2"><img src="https://kingdana.vn/wp-content/uploads/2020/06/XOP-1400x777.jpg"
                        width="370" height="200"></div>
                <div class="main-img-2"><img
                        src="https://kingdana.vn/wp-content/uploads/2020/06/ma%CC%82%CC%83u-gia%CC%82%CC%81y-da%CC%81n-tu%CC%9Bo%CC%9B%CC%80ng-%C4%91e%CC%A3p-43-1400x778.jpg"
                        width="370" height="200"></div>
                <div class="main-img-2"><img src="https://kingdana.vn/wp-content/uploads/2020/06/PHU-KIEN-1400x777.jpg"
                        width="370" height="200"></div>
            </div>
        </div>

<div class="footer">
    <div id="root-footer">
        <div class="footer-text">
            <div class="text1">
                <p style="color:#00aae7;"><b>Kính gửi Quý khách hàng thân mến !</b></p>
                <p style="color: #777;"><b>Công ty TNHH MTV KingDana</b>
                    xin gửi lời chào trân trọng nhất tới quý khách. Chúng tôi là đơn vị chuyên sản xuất và phân phối các
                    sản
                    phẩm Sàn gỗ,Sàn nhựa,Xốp dán tường, Giấy dán tường, Tấm ốp trần – ốp tường …
                    <br></br>Các sản phẩm của <b style="color: #777;">KingDana</b> luôn được sáng tạo theo tiêu chí <b
                        style="color: #777;">Chất lượng – Nhanh chóng – Chi phí hợp lý</b>, nhằm đem lại sự hài lòng cao
                    nhất
                    cho quý khách hàng.
                    <br></br>Rất mong nhận được sự quan tâm, hợp tác của quý Đối tác và Khách hàng !<br></br>
                    Cảm ơn (*.*)
                </p>
            </div>
            <form class="text2">
                <p style="color:#00aae7;"><b>Hãy để lại thông tin để được hỗ trợ trực tiếp :</b></p>

                <p style="color: black;"><b>Tên của bạn</b></p>

                <input type="text" id="NAME"></input>


                <p style="color: black;"><b>Địa chỉ Email</b></p>

                <input type="text" id="NAME1"></input>


                <p style="color: black;"><b>Số điện thoại</b></p>
                <input type="text" id="NAME1"></input>

            </form>
            <p><b><input type="submit" value="GỬI ĐI   " class="SENT" aria-invalid="false"><span
                        class="ajax-loader"></span></b></p>
            <span class="PRODUCDHOT" style="color:rgb(244, 29, 2);">Sản phẩm hot</span>
        </div>
    </div>
</div>   
</body>
</html>