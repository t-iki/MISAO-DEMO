

<!-- Modal -->
<div id="login-Modal" class="modal fade modal-main" role="dialog" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
       <button type="button" class="btn btn-default　closebtn" style="margin-left:365px; background-color:white;" data-dismiss="modal">✖️</button>
      <div class="modal-body">
        <div class="loginbar"><h5 class="loginfont">LOGIN</h5></div>
        <div  ><h5 style="color:red; margin-left:130px" id="error"></h5></div>
        <form>
         <table>
           <tr>
             <th><h6 class="login-tag">User name</h6></th>
           </tr>
           <tr>
             <th><input type="text" name="name" placeholder="User name" class="box" id="l_name"></th>
           </tr>
           <tr>
             <th><h6 class="login-tag">Password</h6></th>
           </tr>
           <tr>
             <th><input type="password" name="password" placeholder="password" class="box" id="l_password"></th>
           </tr>
           <tr>
             <th><input type="button"　name="submit" value="submit" class="submit" id="l_submit"></th>
           </tr>
            <tr>
             <th><h6 class="or">or</h6></th>
           </tr>
           <tr>
             <th><div class="facebook"></div></th>
           </tr>
           <tr>
             <th><h6 class="member" >NOT member</h6></th>
           </tr>
           </tr>
           <tr>
             <th><div class="newaccount"><h5 class="account"><a href="#" class="font" data-toggle="modal" data-target="#Modal" id="regisBtn" style="color:white;">Create New Account</a></h5></div></th>
           </tr>
         </table>
       </form>
      </div>
    </div>
  </div>
</div>
