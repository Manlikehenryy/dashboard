<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Royal Exchange General Insurance</title>
  <link rel="icon" type="png" href="{{asset('img/royal-favicon.png')}}">

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">  <!-- Custom styles for this template-->
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">




  <style>
       .d-sm-flex{
        margin-bottom: 70vh !important;
    }
   #content{
        background-color: #fff !important;
    }
    /* ul.sidebar li.nav-item{
        margin-bottom: -20px !important;
    } */
    footer{
        margin: auto;
    }
    #wrapper>.bg-gradient{
    /* background-color: #191d63; */
    /* position: relative !important; */
    /* background-color: #090a22; */
    background-color: #2e2f48;

    width: 50px !important;
    transition: width 0.5s;
    position: fixed;
    z-index: 500 !important;
    margin-top: 57px;
    height: 100% !important;
    }

#wrapper>.size{
        width: 100px !important;
    }

    @media (min-width:768px){
    #wrapper>.size{
        width: 250px !important;
    }
}

    @media (min-width:768px){
        .overflow{
     max-height: 80vh;
     overflow-y: scroll;
     overflow-x: hidden;
    }
    }
    .scroll-inner::-webkit-scrollbar,.overflow::-webkit-scrollbar{
        width: 5px;
    }
      /* Track */
    .scroll-inner::-webkit-scrollbar,.overflow::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius:5px;
}

   /* Handle */
   .scroll-inner::-webkit-scrollbar,.overflow::-webkit-scrollbar-thumb {
  background: #ccc;
}

/* Handle on hover */
    .scroll-inner::-webkit-scrollbar,.overflow::-webkit-scrollbar-thumb:hover {
  background: rgb(123, 122, 122);
}
    .hide{
      display: none !important;
    }
    a.nav-link{
      margin-left:-28px !important;
    }
    a.marginLeft{
      margin-left:0px !important;
    }
    nav.navbar{
      height:57px !important;
      box-shadow: 0 0 8px rgba(0,0,0,0.2) !important;
      position: fixed;
      width: 100%;
      z-index: 10;
    }
    .header-flex{
    display: flex;
    margin-top:20px;
}
.dot{
    width: 3.5px;
    height: 3.5px;
    border-radius: 50%;
    background-color: #43445f;
    margin: 0 1px;
}
.dots{
    display: flex;
    margin: 10px 30px;
}
.header{
    margin: 0 ;
    padding: 0 6px 9px 6px;
    border-bottom: #191d63 2px solid;
    color: #52536a;
    font-size: 14px;
}
.body-container{
    margin-top: 20px;
}
.search-container{
    position: relative;
    width: 28%;
}
.box{
    width: 6px;
    height: 6px;
    margin: 2px;
    background-color: #52536a;
    border-radius: 1px;
}
.box-flex{
    display: flex;
}
.search-img{
    position: absolute;
    top: 2px;
    left: 6px;
}
input[type="search"]{
    border: 1.5px solid #c9cdde;
    background-color: #efeff4;
    width: 100%;
    border-radius: 4px;
    color: #f6f6fc;
    font-size: 13px;
    font-weight: 500;
    padding: 5px 30px;
}
input[type="search"]:focus{
  background-color: #fff;
  outline: none;
  border: 0.7px solid #000;
  box-shadow: 0 0 7px #acbaf9;
  color: #000;
}
.horizontal-line{
    width: 96%;
    height: 1.5px;
    background-color: #c9cdde;
}
.vertical-line{
    width: 1.5px;
    height: 24px;
    background-color: #c9cdde;
    margin-top: 8px  !important;
}
.flex{
    display: flex;
    flex-direction: column;
   /* justify-content: space-between; */
    /* width: 100%; */
}
.row-header{
    display: flex;
   justify-content: space-between;
   height: 50px;
}
.row{
     /* display: flex; */
    width: 95%;
    /* flex-wrap: wrap;
    margin-left: 2px; */
}
.flex-items{
    display: flex;
    margin-right: 50px;
}
.line{
    width: 15px;
    height: 2px;
    margin: 1.5px;
    background-color: #52536a;
}
.line-container{
    display: flex;
    flex-direction: column;
}
.line-container,.box-container,.vertical-line{
    margin: 10px;
}
.line-container{
    margin-top:13px;
}
.text{
    font-size: 13px;
    color: rgb(52, 51, 51);
    margin-right: 10px;
    margin-top: 2px;
}
.text span{
   font-size: 20px;
  position: relative;
  top: -5px;
}
.card-box{
    width: 250px;
    height: 140px;
    background-color: #fff;
    box-shadow: 0 0 1.8px #7577ac;
    border-radius: 7px;
    margin:10px 15px 10px 0;
    padding-top: 1px;
    /* cursor: pointer; */
}

    h1.h3{
        font-family:'Inter', sans-serif;
        margin:-3px 0 15px 0 !important;
        color: #2e2f48;
        font-size: 21px;
        font-weight: 600;
    }
    *{
        font-family:'Inter', sans-serif;
    }
    .collapse-item{
        color: #fff !important;
    }
    .collapse-item:hover{
        color: #191d63 !important;
    }
    #content-wrapper::-webkit-scrollbar {
  display: none !important;
}

    .container-fluid{
      margin-left:50px;
      margin-top:80px;
      /* overflow: hidden; */
    }
    .card .card-header h6{
        color: #191d63 !important;
        font-size: 11px;
    }
    .card .card-header{
        border-bottom: none;
        background-color: #fff;
    }

    @media (max-width:1024px){
        .navbar-nav.nav{
            display: none;
        }

    }
        @media (max-width:768px){
            h1.h3.mb-0{
                font-size: 16px;
            }
            h2.text-center{
                font-size: 14px;
            }
        .collapse-item{
        color: #191d63 !important;
    }
    .scroll-inner{
        max-height: 200px;
     overflow-y: scroll;
     overflow-x: hidden;
     background-color: #fff !important;
     }
     .collapse-inner{
        background-color: #fff !important;
     }
    }

    @media (max-width:389px){
        #wrapper>.bg-gradient{
    position: fixed;
    height: 100% !important;
    }
    }
  </style>
</head>

<body id="page-top">
    {{-- BACKDROP FOR MODAL --}}
    <div id="overlay" class="hide"></div>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <x-sidebar></x-sidebar>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    {{-- <div id="content-wrapper" class="d-flex flex-column"> --}}
       {{-- <div id="back-g"></div> --}}
      <!-- Main Content -->
      {{-- <div id="content"> --}}


        <x-navbar></x-navbar>
        <!-- End of Topbar -->
        <div class="container-fluid" id="bodytoggle">

   @yield('content')


              <!-- End of Content Wrapper -->

  </div>


  {{-- </div> --}}
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" style="background: #e5b313;" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  {{-- <div class="abs"><img width="50" src="{{asset('img/phone.png')}}" alt=""></div> --}}

{{-- </div> --}}
</div>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

  <script>
    let sidebar = document.querySelector('#accordionSidebar');
    let sidebarTopBtn = document.querySelector('#sidebarToggleTop')
    let scroll = document.querySelector('.scroll');
    let bodytoggle = document.querySelector('#bodytoggle');
    let dropdownbtn = document.querySelectorAll("#dropdownbtn");
    let dropdown =  document.querySelectorAll('.collapse');
    let section = document.querySelectorAll(".section");
    let navLink = document.querySelectorAll(".nav-link");
    let department = false;
    let qlinks = true;

    let toggled = true;

    scroll.classList.remove('overflow');

    dropdownbtn.forEach((val,index)=>{
        val.addEventListener('click',function (){
            scroll.classList.add('overflow');
        })
    })

    sidebarTopBtn.addEventListener('click',function(){
        if (toggled) {
        navLink.forEach((element )=> {
           element.classList.add('marginLeft');
         });
        section.forEach((element )=> {
           element.classList.remove('hide');
         });
        sidebar.classList.remove('toggled');
        sidebar.classList.add('size');
        toggled = !toggled;
       }

       else if (!toggled) {
         sidebar.classList.add('toggled');
        sidebar.classList.remove('size');
         document.querySelector('.nav-link').classList.add('collapsed');
         dropdown.forEach((element )=> {
           element.classList.remove('show');
         });
         navLink.forEach((element )=> {
            element.classList.add('collapsed');
           element.classList.remove('marginLeft');
         });
         section.forEach((element )=> {
           element.classList.add('hide');
         });
         toggled = !toggled;
       }
    })

    sidebar.addEventListener('mouseenter', function () {
      // if statement to expand sidebar
       if (toggled) {
        navLink.forEach((element )=> {
           element.classList.add('marginLeft');
         });
        section.forEach((element )=> {
           element.classList.remove('hide');
         });
        sidebar.classList.remove('toggled');
        sidebar.classList.add('size');
        toggled = !toggled;
       }
    })

    bodytoggle.addEventListener('mouseenter', function () {
        scroll.classList.remove('overflow');
            // if statement to close sidebar
             if (!toggled) {
         sidebar.classList.add('toggled');
        sidebar.classList.remove('size');
         document.querySelector('.nav-link').classList.add('collapsed');
         dropdown.forEach((element )=> {
           element.classList.remove('show');
         });
         navLink.forEach((element )=> {
            element.classList.add('collapsed');
           element.classList.remove('marginLeft');
         });
         section.forEach((element )=> {
           element.classList.add('hide');
         });
         toggled = !toggled;
       }
    })

  </script>
</body>

</html>
