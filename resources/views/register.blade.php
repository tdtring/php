<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f4f4;
    text-align: center;
}

.container {
    width: 100%;
    max-width: 600px;
    margin: 20px auto;
}

/* Thanh điều hướng */
nav ul {
    list-style: none;
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ccc;
}

nav ul li {
    display: inline;
    margin: 0 10px;
}

nav ul li a {
    text-decoration: none;
    color: black;
    font-weight: bold;
}

nav ul li a.active {
    color: blue;
}

/* Form đăng nhập */
.login-box {
    background: white;
    padding: 20px;
    margin-top: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

h2 {
    margin-bottom: 15px;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

.input-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.remember-me {
    text-align: left;
    margin-bottom: 10px;
}

.forgot-password {
    display: block;
    text-align: left;
    margin-bottom: 15px;
    color: blue;
    text-decoration: none;
}

.forgot-password:hover {
    text-decoration: underline;
}

/* Nút đăng nhập */
.btn {
    width: 100%;
    padding: 10px;
    background-color: blue;
    color: white;
    border: none;
    border-radius: 3px;
    font-size: 16px;
    cursor: pointer;
}

.btn:hover {
    background-color: darkblue;
}

/* Footer */
footer {
    margin-top: 20px;
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ccc;
}

    </style>
</head>
<body>
    <div class="container">
        <!-- Thanh điều hướng -->
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Đăng nhập</a></li>
                <li><a href="#" class="active">Đăng ký</a></li>
            </ul>
        </nav>

        <!-- Form đăng ký -->
        <div class="register-box">
            <h2>Màn hình đăng ký</h2>
            <form action="{{ route('user.postUser') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>                              

                                

                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember Me</label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                                </div>
                            </form>
        </div>

        <!-- Footer -->
        <footer>
            Lập trình web ©01/2024
        </footer>
    </div>
</body>
</html>