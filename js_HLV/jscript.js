$(document).ready(function () {
  //   alert("ldajlfaf");
  // Chọn tất cả các thẻ p và thực hiện sự kiện chuột vào và chuột ngoài(ra)
  $("p").mouseenter(function () {
    $(this).css("color", "yellow");
  });

  $("p").mouseleave(function () {
    $(this).css("color", "#000060");
  });

  $(".cls01").mouseenter(function () {
    $(this).css("color", "#fb8500");
  });

  $(".cls01").mouseleave(function () {
    $(this).css("font-weight", "bold");
  });

  $("#id01").mouseenter(function () {
    $(this).css("font-weight", "normal");
  });

  // Lệnh hide() là lệnh ẩn
  $(".itemOrder").hide();
  $(".cateOrder").click(function () {
    $(this).next().slideDown();
  });

  $(".itemOrder").mouseleave(function () {
    $(this).slideUp();
  });

  $(".imgCls").mouseover(function () {
    // Gán giá trị source khi hover chuột vào hình bất kỳ cho biến s
    var s = $(this).attr("src");
    // alert(s);

    // Giá trị biến s sau khi được gán ở trên sẽ được hiển thị ở phần tử có id = imgView
    $("#imgView").attr("src", s);
  });

  // gán giá trị của con trực tiếp của DivList cho s
  var s = $("#DivList").children();
  // Lưu trữ số lượng phần tử con trong DivList
  var l = s.length;
  var i = 0;
  setInterval(function () {
    if (i === 1) i = 0;
    var p = $(s[i]).attr("src");
    $("#imgView").attr("src", p);
    i++;
  }, 3000);

  //jq ajax
  $(".linkmenu").click(function () {
    var v = $(this).attr("value");
    $("#getContent").load("./pageJS/" + v + ".php");
  });
  $("#formreg").submit(function () {
    var username = $("input[name*='username']").val();
    if (username.length === 0 || username.length < 6) {
      $("input[name*='username']").focus();
      $("#noteForm").html("Tên đăng nhập chưa hợp lệ");
      return false;
    }
    var password = $("input[name*='password']").val();
    if (password.length === 0 || password.length < 6) {
      $("input[name*='password']").focus();
      $("#noteForm").html("Password không hợp lệ");
      return false;
    }
    var hoten = $("input[name*='hoten']").val();
    if (hoten.length === 0 || hoten.length < 10) {
      $("input[name*='hoten']").focus();
      $("#noteForm").html("Họ tên không hợp lệ");
      return false;
    }
    var ngaysinh = $("input[name*='ngaysinh']").val();
    if (ngaysinh.length === 0) {
      $("input[name*='ngaysinh']").focus();
      $("#noteForm").html("Ngày sinh không hợp lệ");
      return false;
    }

    var diachi = $("input[name*='diachi']").val();
    if (diachi.length === 0) {
      $("input[name*='diachi']").focus();
      $("#noteForm").html("Địa chỉ chưa hợp lệ");
      return false;
    }
    var dienthoai = $("input[name*='dienthoai']").val();
    if (dienthoai.length === 0) {
      $("input[name*='dienthoai']").focus();
      $("#noteForm").html("Số điện thoại không hợp lệ");
      return false;
    }
    return true;
  });
});
