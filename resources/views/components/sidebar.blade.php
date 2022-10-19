
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion toggled" id="accordionSidebar">


       <div class="scroll">

     <!-- Nav Item - Home -->
     <li class="nav-item active">
        <a class="nav-link" href="/">
          {{-- <i class="fas fa-store"></i> --}}
          <span style="margin: 0 5px 0 5px !important;"> <img width="16" src="{{asset('img/home.png')}}" alt=""></span>
          <span class="section hide">Home</span>
        </a>
      </li>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="/dashboard">
            {{-- <i class="fas fa-fw fa-tachometer-alt"></i> --}}
            <span style="margin: 0 5px 0 5px !important;" >  <img width="16" src="{{asset('img/dashboard.png')}}" alt=""></span>

            <span class="section hide">Dashboard</span></a>
        </li>





        <!-- Divider -->
        {{-- <hr class="sidebar-divider"> --}}

              <!-- Nav Item - Utilities Collapse Menu -->
              <li class="nav-item active">
                <a class="nav-link collapsed" id="dropdownbtn" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                 {{-- <i class="fas fa-store"></i> --}}
                 <span style="margin: 0 5px 0 5px !important;"><img width="16" src="{{asset('img/depts.png')}}" alt=""></span>
                  <span class="section hide">Departments</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="py-2 collapse-inner rounded">
                    <div class="scroll-inner">
                      <a class="collapse-item" href="{{route('depts.admin')}}">Admin</a>
                      <a class="collapse-item" href="{{route('depts.agric')}}">Agric</a>
                      <a class="collapse-item" href="{{route('depts.audit')}}">Audit/Investigation</a>
                      <a class="collapse-item" href="{{route('depts.corps')}}">Corporate Communications</a>
                      <a class="collapse-item" href="{{route('depts.erm')}}">ERM/Internal Control</a>
                      <a class="collapse-item" href="{{route('depts.finaccts')}}">Finance/Accounts</a>
                      <a class="collapse-item" href="{{route('depts.HR')}}">Human Resources</a>
                      <a class="collapse-item" href="{{route('depts.investment')}}">Investment</a>
                      <a class="collapse-item" href="{{route('depts.IT')}}">Information Technology</a>
                      <a class="collapse-item" href="{{route('depts.legal')}}">Legal</a>
                      <a class="collapse-item" href="{{route('depts.mdoffice')}}">Managing Director's Office</a>
                      <a class="collapse-item" href="{{route('depts.oilgas')}}">Oil/Gas</a>
                      <a class="collapse-item" href="{{route('depts.retail')}}">Retail</a>
                      <a class="collapse-item" href="{{route('depts.technical')}}">Technical</a>
                    </div>
                  </div>
                </div>
              </li>


        <!-- Divider -->
        <hr class="sidebar-divider">



              <!-- Nav Item - Utilities Collapse Menu -->
              <li class="nav-item active">
                <a class="nav-link collapsed" id="dropdownbtn" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseUtilities">
                 <i style="margin: 0 5px 0 5px !important;" class="fas fa-link"></i>
                  <span  class="section hide">Quick Links</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class=" py-2 collapse-inner  rounded">
                    <div class="scroll-inner">
                        <h6 class="collapse-header">External links:</h6>
                        <a class="collapse-item" target="blank" href="https://outlook.office.com/mail/">Mail</a>
                        <a class="collapse-item" target="blank" href="https://ies.royalexchangeplc.com/iesgenbiz">IES</a>
                        <a class="collapse-item" target="blank" href="https://eportal.royalexchangeinsurance.com/">E-Portal</a>
                        <a class="collapse-item" target="blank" href="https://emarine.royalexchangeinsurance.com/">E-Marine</a>
                        <a class="collapse-item" target="blank" href="https://royalexchangeinsurance.sharepoint.com/sites/ERM/SitePages/CORPORATE-POLICIES.aspx">
                            Corporate Policy</a>
                        <a class="collapse-item" target="blank" href="https://royalexchangeinsurance.sharepoint.com/sites/commissionpayable">
                            Commission Payable</a>
                        <a class="collapse-item" target="blank" href="http://192.168.10.21:8080/docushare/dsweb/HomePage">
                            Docushare(EDMS)</a>
                        <a class="collapse-item" target="blank" href="https://digitalworkplace.royalexchangeinsurance.com/">
                            Digital Workplace</a>
                    </div>
                  </div>
                </div>
              </li>






        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

       </div>

      </ul>
