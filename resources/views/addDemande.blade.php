<div id="theDemande">

<title>طلب رخصة</title>
<body dir="rtl">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<meta name="csrf-token" content="{{ csrf_token() }}" />
<body dir="rtl">
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
      <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                        <img src="../public/images/logo.png" style="width:40px; height:40px;" >
                    </a>
                </div>

            </div>

            

           <!-- Settings Dropdown -->
           <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">

           
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
        <div class="flex justify-between h-16" style="margin-top:-2%;">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="dashboard">
    الصفحة الرئيسية
</a>
                </div>
            </div>


            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out" id="dem" href="demande">
    طلب رخصة
</a>
                </div>
            </div>           
        </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    </div>
</nav>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <!-- Modal /ALERT ERROR -->
<div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">الاجابة :</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p id="text-p"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default close" id="close" data-dismiss="modal" style="background-color: red; color:white;">اغلاق</button>
        </div>
      </div>
      
    </div>
  </div>

<center><h1 id="para"></h1></center>
<form method="POST" action="" id="form">
    @csrf
<input type="hidden" name="_token" value="92iam8KI9wJ7TgUFdIDDREXEBwlps3co6FhL2GXI">    <table align="center" style="width: 70%; height:500px; border: 4px solid black;">
    <tbody>
    <tr>
        <td class="cls">نوع الرخصة :</td>
        <td colspan="2">
            <select name="type" id="type" class="input">
                <option value="1">عطلة سنوية</option>
                <option value="2">اذن بالتغيب</option>
            </select>
        </td>
    </tr>
    
    <tr>
        <td class="cls">السنة : </td>
        <td colspan="2">
            <select name="annee" id="annee" class="input">
                <option value="2021">2021</option>
            </select></td>
    </tr>
    <tr>
        <td class="cls" >الفترة : </td>
        <td>من: <input name="de" type="text" id="de" style="width:80%; border-radius:6px;" required></td>
        <td>الى: <input name="jusqua" type="text" id="jusqua" style="width:80%; border-radius:6px;" required></td>
    </tr>
    <tr>
        <td class="cls">القائم بالنيابة : </td>
        <td colspan="2">
            <select id="adjoint" name="adjoint" class="input">
                                    <option value="2">عبد الوافي ايكدض</option>
                                    <option value="3">سفيان تقي</option>
                                    <option value="111">pre1</option>
                            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit" name="submit" class="btn btn-primary" style=" width:30%; margin-right:10px;" >وضع الطلب</button>
        </td>
        
    </tr>
    </tbody>
    </table>
    </form>
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script>
        (function( factory ) {
            if ( typeof define === "function" && define.amd ) {

                define([ "../jquery.ui.datepicker" ], factory );
            } else {

                factory( jQuery.datepicker );
            }
        }
        (function( datepicker ) {
            datepicker.regional['ar'] = {
                closeText: 'إغلاق',
                prevText: '&#x3C;السابق',
                nextText: 'التالي&#x3E;',
                currentText: 'اليوم',
                monthNames: ['يناير', 'فبراير', 'مارس', 'أبريل', 'ماي', 'يونيو',
                'يوليوز', 'غشت', 'شتنبر',	'أكتوبر', 'نونبر', 'دجنبر'],
                monthNamesShort: ['يناير', 'فبراير', 'مارس', 'أبريل', 'ماي', 'يونيو',
                'يوليوز', 'غشت', 'شتنبر',	'أكتوبر', 'نونبر', 'دجنبر'],
                dayNames: ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
                dayNamesShort: ["Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday"],
                //dayNamesMin: ['أ', 'ن', 'ث', 'ر', 'خ', 'ج', 'س'],
                dayNamesMin: ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
                weekHeader: 'أسبوع',
                dateFormat: 'yy-mm-dd',
                firstDay: 6,
                isRTL: true,
                showMonthAfterYear: false,
                yearSuffix: ''};
            datepicker.setDefaults(datepicker.regional['ar']);

            return datepicker.regional['ar'];

        }));
        $('#de, #jusqua').attr('autocomplete','off');
        $( "#de, #jusqua" ).datepicker({
            isRTL:false,
            changeMonth: true,
            changeYear: true
        });

        
$('.close').click(function(){
    $('#myModal').modal('hide');
});
//  function loadSer(){
//     $.ajax({
//         url:"http://10.30.8.35/getEmployeeService",
//         type: 'get',
//         success:function(res){
//             for(var i = 0 ;i<res.list.length;i++)
//                  {
//                     $('#adjoint').append("<option value=\""+res.list[i].id+"\">"+res.list[i].name+"</option>");
//                  }
//         }
//     });
// };
        
        $("form").on('submit', function(e){
            e.preventDefault();

            if ($("#jusqua").val() < $("#de").val()) {
                $('#text-p').text('المرجو وضع فترة صحيحة !!- تاريخ الانتهاء اصغر من تاريخ البداية')
                $('#myModal').modal('show');               
            }
            else{

                   /* if ($.datepicker.formatDate("yy-mm-dd",$("#de").val()) <= new Date()){
                        $('#text-p').text('المرجو وضع فترة صحيحة !!')
                        $('#myModal').modal('show');
                        }
                    else{ */
                    var formData =  $('form').serializeArray();
                    // console.log(formData);
                    $.ajax({
                        url:'postinsert',
                        type: 'post',
                        data: formData,
                        success:function(res){
                            //alert("تم وضع الطلب بنجاح !!");
                            $('#text-p').text('تم وضع الطلب بنجاح !!')
                            $('#myModal').modal('show');
                            $("#jusqua, #de").val("");
                        },
                        error:function(res){
                            //alert("المعذرة !! لا تتوفرون على هذه الفترة");
                            $('#text-p').text('المعذرة !! لا تتوفرون على هذه الفترة')
                            $('#myModal').modal('show');
                        }
                    });
                //}
            }
        });
    </script>
            </main>
        </div>
    </body>
</html>
</div>
