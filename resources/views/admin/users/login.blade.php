<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('admin.head')

</head>
<body>

<section class="login">
    <div class="container">
        <div class="row">
            <div class="col" >
                <div class="col-lg col-left">
                    <img src="/image/logo.png" alt="">
                    <p>Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.</p>
                </div>
                <div class="col-lg col-right">
                    <form action="login" method="post">
                        <div class="form-text">
                            <input type="email" class="input-text" id="email" name="email" placeholder="Email hoặc số điện thoại" required>
                        </div>
                        <div class="form-text">
                            <input type="password" class="input-text" id="password" name="password" placeholder="Password" required>
                            <i class="fa-sharp fa-solid fa-eye-slash"></i>
                        </div>
                        <a href="#" class="btn btn-primary btn-login">Đăng nhập</a>
                        <a class="pass" href="#">Quên mật khẩu?</a>
                        <hr>
                        <a href="#" class="btn btn-success btn-create">Tạo tài khoản mới</a>
                    </form>
                    <div class="content">
                        <storng> <a href="#" class="create-page">Tạo Trang </a> dành cho người nổi tiếng, thương hiệu hoặc doanh nghiệp.</storng>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="script">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</section>
</body>
</html>

