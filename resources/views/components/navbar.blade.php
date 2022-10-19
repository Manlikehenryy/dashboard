<style>
        .links{
        color:rgb(30, 29, 29) !important ;
        margin: 0 5px;
    }
   .nav .nav-item{
        margin: 0 15px;
    }
    .icons{
        position: relative;
       display: flex;
       right: 6px;
       top: 3px;
       cursor: not-allowed;
    }
    .back-g{
        width: 30px;
        height: 30px;
        background: #e8e8ed;
        margin: 0 10px;
        border-radius: 50%;
    }
    @media (max-width:600px){
        .back-g{
        margin: 0 5px;
    }
    }
    .nav-item .fas,.links{
     font-size: 13px;
    }
    .nav-item .fas{
     color: #7575a7;
     color: #8888ac;
    }
    .fa-question,.fa-user{
     color: #7575a7 ;
    }
    .fa-bell{
        color: #8888ac;
    }
    .fa-question,.fa-user,.fa-bell{
        padding:6px 0 0 8px;
    }
    a{
        text-decoration: none !important;
    }
</style>
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Topbar Search -->
        <div  class=" d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 ">
          <img style="margin-left:-10px !important;" src="{{asset('img/ng-royale-logo.png')}}" width="160px" height="33.333px" class="img-fluid float-left" alt="...">
        </div>
          <ul class="navbar-nav nav mr-auto">
            <li class="nav-item active">
                <i class="fas fa-ship"></i>
              <a class="links" target="blank" href="https://emarine.royalexchangeinsurance.com/">E-Marine </a>
            </li>
            <li class="nav-item active">
              <i class="fas fa-credit-card"></i>

              <a class="links" target="blank" href="https://eportal.royalexchangeinsurance.com/">E-Portal</a>
            </li>
            <li class="nav-item active">
                <i class="fas fa-envelope"></i>
              <a class="links" target="blank" href="https://outlook.office.com/mail/">Mail</a>
            </li>
            <li class="nav-item active">
                <i class="fas fa-industry"></i>
              <a class="links" target="blank" href="https://ies.royalexchangeplc.com/iesgenbiz">IES</a>
            </li>
          </ul>

          <div class="icons">
            <div class="back-g">
                <div class="helpnavbutton--28ea2f54 hasNoProductUpdate--f906f100 ant-popover-open">
                    <i class="fa fa-question"></i>
                </div>
                </div>
                <div id="notificationavcontainer" class="back-g">
                        <div>
                          <div class="bellCountWrapper--cd861d2c">
                          <div class="clickable--274c0f93 iconContainer--8a49b789 isMinimal--6aed533b  base--88868a1a">
                            <i class='far fa-bell'></i>
                          </div>
                </div>
            </div>
        </div>

        <div class="back-g" id="profile">
            <div >
            <div class="">
               <i class="fa fa-user"></i>
            </div>
        </div>
    </div>
</div>
        </div>

      </nav>
