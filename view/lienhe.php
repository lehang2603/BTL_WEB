<section class="top-lienhe">
<div class="header-pay">
        <ul>
            <li><a href="index.php?act=trangchu">Trang chủ</a></li>
            <span>|</span>
            <li><a href="">Liên hệ</a></li>
            
        </ul>
       
    </div>
    </section>

    <section class="top-hotro">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-0">
                <div>
                    <h1>BẠN CẦN HỖ TRỢ ?</h1>
                    <a>Leaves rất hân hạnh được hỗ trợ bạn, hãy để lại thông tin cho chúng tôi nhé. Yêu cầu của bạn sẽ được xử lý và phản hồi trong thời gian sớm nhất.</a><br>
                </div>
                <?php
                    session_start();
                    if (isset($_SESSION['message'])) {
                        echo '<div class="alert alert-warning">' . $_SESSION['message'] . '</div>';
                        unset($_SESSION['message']);
                    }
                    ?>
                <form action="process_contact.php" method="POST" >
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="fullname" class="col-form-label">*Họ và tên</label>
                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Tên đầy đủ">
                        </div>
                        <div class="col-sm-6">
                            <label for="email" class="col-form-label">*Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Địa chỉ Email"><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mes">*Tin nhắn</label>
                        <textarea name="mes" id="" cols="30" rows="7" class="form-control" placeholder="Đừng ngại hỏi về đơn hàng của bạn"></textarea><br>
                    </div>
                    <button type="submit">XÁC NHẬN</button>
                </form>
            </div>
        </div>
    </div>
</section>