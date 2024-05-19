

    <!-- <FORM> -->
        <div class="wrapper">
            <div class="container">
                <div class="row justify-space-around p-3 my-3">
                <?php
                if(isset($_SESSION['message']))
                {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                }
            ?>
                    <form action="./function/authcode.php" class="ol-md-6" method="POST" >
                        <h1 class="text-center h3 py-3">ĐĂNG KÍ TÀI KHOẢN</h1>
                        <div class="form-group">
                            <label for="surname">*Họ và tên</label>
                            <input type="text" name="name" id="" class="form-control" placeholder="Nhập họ tên" required>
                        </div>
                       
                        <div class="form-group">
                            <label for="email">*Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="Nhập email" required>
                        </div>
                        <div class="form-group">
                            <label for="sdt">*Số điện thoại</label>
                            <input type="number" name="phone" id="" class="form-control"  placeholder="Nhập số điện thoại" required>
                        </div>
                        <div class="form-group">
                            <label for="mk">*Mật khẩu</label>
                            <input type="password" name="password" id="" class="form-control"  placeholder="Nhập mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label for="mk">*Nhập lại mật khẩu</label>
                            <input type="password" name="cpassword" id="" class="form-control"  placeholder="Nhập lại mật khẩu" required>
                        </div>
                        <button type="submit" name="register_btn">ĐĂNG KÍ</button>
                    </form>
                </div>
            </div>
        </div>
 