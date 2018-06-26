
<link href="{!! url('public/client/css/css1.css') !!}" rel="stylesheet" type="text/css"/>
<!-- Button trigger modal -->
<style type="text/css">
  .wrap-menu-desktop{
    z-index: 1040;
  }
 .modal-body input[type="text"] {
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
input.user.active {
  background: url(public/client/images/icons/user.png)no-repeat 15px 7px #fff;
  display: block;
}
input.lock.active {
  background: url(public/client/images/icons/key.png)no-repeat 15px 7px #fff;
  display: block;
}
.text{
  font-weight: bold;
  margin: 15px 0px 0px 30px ;
}
.login-bottom{
  background: #fff;
  margin-top: 30px;
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
    <form name="myform">
        <div class="modal-body">
          <div class="form-group">
              <div class="row">
                <label class="text"> Tài Khoản </label>
               <input type="text" class="user active" value="User name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}" style="margin-left: 30px;" />
              </div>
              <div class="row">
                <label class="text"> Mật Khẩu </label>
                <input type="password" class="lock active" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" style="margin-left: 30px;"/>
              </div>
          </div>
            <div class="forgot">
                <div class="login-check">
                    <input type="checkbox" name="check" value="check">Ghi Nhớ Mật Khẩu<br>
                </div>
                <div class="login-para">
                    <p><a href="#"> Quên Mật Khẩu ? </a></p>
                </div>
                <div class="clear"> 

                </div>
            </div> 
            <div class="login-bottom">
                  <h4>Bạn Chưa Có Tài Khoản? <a href="{!!  route('Getregister') !!}"> Đăng Ký Ngay !</a></h4>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 25px;">Hủy Bỏ</button>
          <button type="submit" class="btn btn-primary" style="background: #717fe0;
          border-radius: 25px; ">Đăng Nhập</button>
        </div>
    </form>
    </div>
  </div>

</div>
