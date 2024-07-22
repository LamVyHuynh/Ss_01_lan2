<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>Quản lý người dùng</div>
    <div>Người dùng mới</div>
    <div>
        <form name="newuser" id="formreg" action="#" method="post">
            <table>
                <tr>
                    <td>Tên đăng nhập: </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Nhập mật khẩu: </td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td>Họ và tên: </td>
                    <td><input type="text" name="hoten"></td>
                </tr>
                <tr>
                    <td>Giới tính: </td>
                    <td>Nam <input type="radio" name="gioitinh" value="1" checked="true">
                        Nữ <input type="radio" name="gioitinh" value="0">
                    </td>
                </tr>
                <tr>
                    <td>Ngày sinh: </td>
                    <td><input type="date" name="ngaysinh"></td>
                </tr>
                <tr>
                    <td>Địa chỉ: </td>
                    <td><input type="text" name="diachi"></td>
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td><input type="tel" name="dienthoai"></td>
                </tr>
                <tr>
                    <td><input id="btnsubmit" type="submit" value="Tạo mới" /></td>
                    <td>
                        <input type="reset" value="Làm lại" />
                        <b id="noteForm"></b>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>