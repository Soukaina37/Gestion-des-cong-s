<body dir="{{(App::isLocale('ar') ? 'rtl':'rtl')}}">

<x-app-layout>
    <x-slot name="header">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
     

                     <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                      <x-nav-link :href="route('dashboard')" class="nav-link " :active="request()->routeIs('dashboard')">
                          {{ __('الصفحة الرئيسية') }}
                      </x-nav-link> 

                    
                    <x-nav-link :href="route('demande')" class=" nav-link" :active="request()->routeIs('dashboard')">
                          {{ __('طلب رخصة') }}

                      </x-nav-link> </div>
        </div>
                      
                    
                  
    </x-slot>

    

    <table id="testing" class="table table-hover" style="width: 80%; text-align:center; margin-bottom:3%; ">
    <thead> 
         <tr>
             <td >الطالب</td>
             <td>السنة</td>  
             <td>رقم الطلب</td>
             <td>عدد الايام</td>
             <td>من</td>
             <td>طباعة</td>

         </tr>
    </thead> 
    <tbody> 
@foreach ($conges as $conge)
             <tr>
                <td >{{ $conge->name}}</td>
                <td >{{ $conge->annee }}</td>
                <td >{{ $conge->referance }}</td>
                <td >{{ $conge->nbJours}}</td>
                <td >{{ $conge->date_debut}}</td>
                <td>
                         <button  class="btn btn-success" id="print1" data-ci="{{ $conge->id}}" data-nm="{{$conge->name }}" data-ref="{{ $conge->referance }}" data-nb="{{$conge->nbJours }}" data-dd="{{$conge->date_debut }}" data-df="{{$conge->date_fin }}"   data-an="{{ $conge->annee}}" name="add" value="طباعة" onclick="Fun1()"   > Lettre d'acceptation </button>
                         <button class="btn btn-secondary" id="print2" data-ci="{{ $conge->id}}" data-nm="{{$conge->name }}" data-ref="{{ $conge->referance }}" data-nb="{{$conge->nbJours }}" data-dd="{{$conge->date_debut }}" data-df="{{$conge->date_fin }}"   data-an="{{ $conge->annee}}" name="add" value="طباعة"  onclick="Fun2()" > Rapport</button>
                </td>
             </tr>
@endforeach
</tbody> 
</table>
<div id="printZone1">
<table   style="width:100%; margin-bottom:3%; ">
       <tr>
        <th width ="120px">المملكة المغربية وزارة العدل محكمة الاستئناف بمراكش</th>
        <th ><img src="../public/images/logo.png" style="width:80px; height:80px; margin-right:120px; " ></th>
        <th>مراكش في {{ date('m-d-Y') }}  </th>
       </tr>
     </table>
     <table height="40px">
         <tr>عدد<span id="p21"></span> /ك.خ</tr>
     </table>
     <table style="width:100%; margin-bottom:3%;">
     
       <caption><strong> من الرئيس الاول لمحكمة الاستئناف بمراكش<br>
      إلى: السيد(ة) <span id="p11"></span>  <br>
        كاتبة الضبط من الدرجة الثالثة بهذه المحكمة <br>
        تحت إشراف<br>
        السيد رئيس المصلحة كتابة الضبط بها</strong><br>
      </caption>
     </table>
     <table height="30px" >
                   <tr> <strong>الموضوع</strong> : طلب الاستفادة مما تبقى من الرخصة الادارية لسنة <span id="p3"></span></tr><br>
     </table>
     <table  height="30px">
                   <tr> <strong>المرجع</strong> : كتابكم المؤرخ في <span id="p22"></span> .</tr>
     </table> 
    <table style="width:100%; margin-bottom:3%;">
        <caption>
            <strong>سلام تام بوجود مولانا الإمام</strong><br>
<br>
        و بعد، فعلاقة بالرسالة الدورية الصادرة عن السيد وزير العدل تحت 19س1/4 و تاريخ <br>
        2017/02/21 حول تجزيئ الرخصة السنوية للموظفين.<br>
         و تبعا لكتابكم المبين بالمرجع أعلاه و الذي تطلبون فيه الاستفادة من <span id="p41"></span>  أيام من الرخصة<br>
         الادارية لسنة <span id="p61"></span> ، أخبركم بالاستجابة لطلبكم و ذلك ابتداء من <span id="p51"></span>.<br>
        <strong>مع تحياتي و السلام.</strong><br>
        </caption>
    </table>

    <table    style="width: 90%; margin-bottom:3%;">
       <tr>
        <th width ="500px"><u>نسخة طبق الأصل موجهة إلى </u> : <br>
            السيد وزير العدل- مديرية الموارد البشرية<br>
             قسم الموظفين- مصلحة كتاب الضبط و المحررين القضائيين<br> 
             قصد الإخبار</th>
        <th>الرئيس الأول<br>
             أحمد نهيد </th>
       </tr>
     </table>
</div>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> <!-- bootstrap library -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jquery_library -->
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script>
      $('#testing').DataTable();
$(document).ready(function(){


$('#printZone1').hide();
$('#printZone2').hide();

    $(document).on('click','#print1', function(event) {
      

// $('#print').click(function(event){
    var conge_id = $(this).data('ci')
    var conge_name =$(this).data('nm')
    var conge_ref=$(this).data('ref')
    var conge_nbj=$(this).data('nb')
    var conge_dd=$(this).data('dd')
    var conge_df=$(this).data('df')
    var conge_annee=$(this).data('an')
    document.getElementById("p11").innerHTML = conge_name;
    document.getElementById("p12").innerHTML = conge_name;
    document.getElementById("p21").innerHTML = conge_ref;
    document.getElementById("p22").innerHTML = conge_ref;
    document.getElementById("p41").innerHTML = conge_nbj;
    document.getElementById("p42").innerHTML = conge_nbj;
    document.getElementById("p51").innerHTML = conge_dd;
    document.getElementById("p52").innerHTML = conge_dd;
    document.getElementById("p8").innerHTML = conge_df;
    document.getElementById("p3").innerHTML = conge_annee;
    document.getElementById("p61").innerHTML = conge_annee;
    document.getElementById("p62").innerHTML = conge_annee;
    document.getElementById("p63").innerHTML = conge_annee;
    var divToPrint=document.getElementById('printZone1');
    var newWin=window.open('','Print-Window');
    newWin.document.open();
    newWin.document.write('<html  dir="rtl"><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
    newWin.document.close();
    setTimeout(function(){newWin.close();},10);});
   
  


    //alert(conge-id);
    
   // console.log(conge_id);

   // $('#printZone').show();
   $(document).on('click','#print2', function(event) { //jquery

// $('#print').click(function(event){
    var conge_id = $(this).data('ci')
    var conge_name =$(this).data('nm')
    var conge_ref=$(this).data('ref')
    var conge_nbj=$(this).data('nb')
    var conge_dd=$(this).data('dd')
    var conge_df=$(this).data('df')
    var conge_annee=$(this).data('an')
    document.getElementById("p11").innerHTML = conge_name;
    document.getElementById("p12").innerHTML = conge_name;
    document.getElementById("p21").innerHTML = conge_ref;
    document.getElementById("p22").innerHTML = conge_ref;
    document.getElementById("p41").innerHTML = conge_nbj;
    document.getElementById("p42").innerHTML = conge_nbj;
    document.getElementById("p51").innerHTML = conge_dd;
    document.getElementById("p52").innerHTML = conge_dd;
    document.getElementById("p8").innerHTML = conge_df;
    document.getElementById("p3").innerHTML = conge_annee;
    document.getElementById("p61").innerHTML = conge_annee;
    document.getElementById("p62").innerHTML = conge_annee;
    document.getElementById("p63").innerHTML = conge_annee;
    var divToPrint=document.getElementById('printZone2');
                              var newWin=window.open('','Print-Window');
                              newWin.document.open();
                              newWin.document.write('<html  dir="rtl"><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
                              newWin.document.close();
                              setTimeout(function(){newWin.close();},10);});

   });

       
           

</script>


<div id="printZone2">
     <table   style="width:100%; margin-bottom:3%; ">
       <tr>
        <th width ="120px"><u>المملكة المغربية وزارة العدل محكمة الاستئناف بمراكش</u></th>
        <th ><img src="../public/images/logo.png" style="width:80px; height:80px;  margin-right:120px;   " ></th>
        <th>مراكش في {{ date('m-d-Y') }}  </th>
       </tr>
     </table>
     <table height="40px">
         <tr>إرسال عدد:  -<strong><span id="p62"></span></strong></tr>
     </table>
     <table style="width:100%; margin-bottom:5%;">
       <caption> <strong>من</strong> رئيس مصلحة كتابة الضبط بمحكمة الاستئناف<br>
       <strong><u>بمراكش</u></strong><br>
        <strong>إلى </strong>: السيد وزير العدل <br>
مديرية الموارد البشرية- قسم الموظفين -<br>
مصلحة المنتدبين القضائيين و الأطر التقنية <strong><u>- الرباط -</u></strong>
      </caption>
      </table>
     <table style="height:30px; " >
                   <tr> <strong> تحت إشراف: السيد الرئيس الأول بمحكمة الاستئناف بمراكش</strong></tr><br>
     </table>
     <table  height="30px" >
                   <tr id="tt"> <strong> ورقة الإرسال</strong></tr>
     </table> 
     <table  align="center"  style="width: 90%; margin-bottom:3%; border: 1px solid black; border-bottom-style: none;">
         <tr id="print3">
              <td class="s1"><strong>الرقم الترتيبي</strong></td>
              <td class="s1"><strong>نوع المراسلات و تلخيص موضوعها</strong></td>  
              <td class="s1"><strong>عدد المرفقات</strong></td>
              <td class="s1"><strong>ملاحظات</strong></td>
         </tr>
    <tbody>
              <tr id="show1">
              <td class="s2" ></td>
              <td class="s2" > إعلام بإيقاف العمل يوم <span id="p52"></span> <br>
              للإستفادة من مدة<strong> <span id="p42"></span> يوم عمل</strong> من الرخصة<br>
              السنوية <strong> <span id="p63"></span> </strong>  في اسم السيد (ة) <span id="p12"></span> <br>
              منتدب قضائي من الدرجة الثانية. <br>
              
              - إعلام باستناف العمل يوم : <span id="p8"></span><br></td>
              <td class="s2"></td>
              <td class="s2" >لكل غاية مفيدة<br>
               مع فائق التقدير و الاحترام.<br>
               <br>
               <br>
               <strong>رئيس مصلحة كتابة الضبط</strong></td>
              </tr>
    </tbody>
</div>
<style>
    
 .s2{
  border: 1px solid black;

  border-bottom-style: none;}
.s1{ 
   border: 1px solid black;
   height: 70px;;
  }
#print3{
    text-align: center;
    background-color:#e4e5e4;
  }
#show1{
    vertical-align: top;
    font-size:15px;
}

 </style>
</table>
</x-app-layout>

