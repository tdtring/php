<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
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

    <!-- Thanh điều hướng -->
    <div class="navbar-custom">
        <span><b>Lập trình web</b></span>
        <span><a href="#">Home</a> | <a href="#">Đăng xuất</a></span>
    </div>

    <div class="container">
        <h4 class="text-center mt-3">Danh sách user</h4>

        <!-- Bảng danh sách user -->
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                                </th>
                            </tr>
                        @endforeach

    <!-- Footer -->
    <div class="footer">
        Lập trình web © 01/2024
    </div>

</body>
</html>