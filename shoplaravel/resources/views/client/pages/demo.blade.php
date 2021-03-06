
<link href="{!! url('public/client/css/css1.css') !!}" rel="stylesheet" type="text/css"/>
<!-- Button trigger modal -->
<style type="text/css">
  .wrap-menu-desktop{
    z-index: 1040;
  }
 .modal-body form input[type="text"] {
  outline: none;
  font-size: 15px;
  font-weight: 400;
  color: #c0c0c0;
  padding: 10px 20px 10px 46px;
  border: 1px solid #717fe0;
  border-radius: 23px;
  margin: 0 auto 15px;
  width: 60%;
  height: 44px;
  -webkit-appearance: none;
}
 .modal-body input[type="password"] {
  height: 44px;
  outline: none;
  font-size: 19px;
  font-weight: 400;
  padding: 10px 20px 10px 45px;
  border: 1px solid #717fe0;
  border-radius:23px;
  margin: 0 auto 11px;
  width: 60%;
  -webkit-appearance: none;
  color:#c0c0c0;
}
form input.user {
  background: url(../public/client/images/user.png)no-repeat 15px 7px #fff;
  display: block;
}
form input.lock {
  background: url(../public/client/images/key.png)no-repeat 15px 7px #fff;
  display: block;
}
.text{
  font-weight: bold;
  margin: 15px 0px 0px 30px ;
}

</style>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ĐĂNG NHẬP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form class="form-group">
            <div class="row">
              <label class="text"> Tài Khoản </label>
             <input type="text" class="user active" value="User name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}" style="margin-left: 30px;" />
            </div>
            <div class="row">
            <label class="text"> Mật Khẩu </label>
            <input type="password" class="lock active" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" style="margin-left: 30px;"/>
            </div>
          </form>
          <div class="forgot">
             <div class="login-check">
                <input type="checkbox" name="check" value="check">Ghi Nhớ Mật Khẩu<br>
            </div>
              <div class="login-para">
              <p><a href="#"> Quên Mật Khẩu ? </a></p>
               </div>
            <div class="clear"> </div>
          </div>
        
          <div class="login-bottom">
              <h3>Đăng Nhập</h3>
              <p>Với Tài Khoản Mạng Xã Hội </p>
            <div class="social-icons">
              <div class="button">
                <a class="tw" href="#"> <i class="anc-tw"> </i> <span>Twitter</span>
                <div class="clear"> </div></a>
                <a class="fa" href="#"> <i class="anc-fa"> </i> <span>Facebook</span>
                <div class="clear"> </div></a>
                <a class="go" href="#"><i class="anc-go"> </i><span>Google+</span>
                <div class="clear"> </div></a>
                <div class="clear"> </div>
              </div>
              <h4>Bạn Chưa Có Tài Khoản? <a href="{!!  route('Getregister') !!}"> Đăng Ký Ngay !</a></h4>
              <div class="reg-bwn"><a href="{!!  route('Getregister') !!}" >Đăng Ký</a></div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 25px;">Hủy Bỏ</button>
        <button type="button" class="btn btn-primary" style="background: #717fe0;
        border-radius: 25px; ">Đăng Nhập</button>
      </div>
    </div>
  </div>

</div>
