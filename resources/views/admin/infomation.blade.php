@extends('home')
@section('information')
<div class="content-wrapper">
  <form method="post" action="{{ route('information') }}" name="info">
    <label for="name">Tên</label>
    <input type="text" id="name">
    <br>
    <label for="phone">Số điện thoại</label>
    <input type="tel" id="phone">
    <br>
    <label for="date">Ngày sinh</label>
    <input type="date" id="date">
    <br>
    <label for="email">Email</label>
    <input type="email" id="email">
    <br>
    <label for="info">Giới thiệu bản thân</label>
    <textarea name="info" id="info" cols="30" rows="10"></textarea>
    <br>
    <label>Kỹ năng:</label>
    <br>
    <input type="checkbox" name="skill" value="1" id="html">
    <label for="1">Ngoại ngữ</label>
    <br>
    <input type="checkbox" name="skill" value="2" id="css">
    <label for="2">Thích nghi</label>
    <br>
    <input type="checkbox" name="skill" value="3" id="css">
    <label for="3">Tạo website</label>
    <br>
    <label for="more-skill">Kỹ năng khác</label>
    <input type="text" id="more-skill">
    <br>
    <label for="hobby">Sở thích</label>
    <textarea name="hobby" id="hobby" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Xác nhận">
</form>
</div>
@endsection
