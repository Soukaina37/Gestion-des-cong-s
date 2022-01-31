<body dir="{{(App::isLocale('ar') ? 'rtl':'rtl')}}">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('لائحة طلبات النيابة') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                لائحة الطلبات
                </div>
            </div>
        </div>
    </div>

    <table  align="center" style="width: 80%; text-align:center; margin-bottom:3%;">
<tr>
<td >الطالب</td>
<td>السنة</td>  
<td>رقم الطلب</td>
<td>عدد الايام</td>
<td>من</td>
<td>طباعة</td>

</tr>
@foreach ($conges as $conge)
<tr>
<td >{{ $conge->name}}</td>
<td >{{ $conge->annee }}</td>
<td >{{ $conge->referance }}</td>
<td >{{ $conge->nbJours}}</td>
<td >{{ $conge->date_debut}}</td>
<td> <button  id="print" data-ci="{{ $conge->id}}" data-nm="{{$conge->name }}" data-ref="{{ $conge->referance }}" data-nb="{{$conge->nbJours }}" data-dd="{{$conge->date_debut }}" data-an="{{ $conge->annee}}" name="add" value="طباعة"  > imprimer </button></td>
</tr>
<!-- // onclick="window.print()"; -->
@endforeach
</table>
<div id="printZone">
<table   style="width:100%; margin-bottom:3%; ">
       <tr>
        <th width ="120px">المملكة المغربية وزارة العدل محكمة الاستناف بمراكش</th>
        <th class="s3"><img src="../public/images/logo.png" style="width:80px; height:80px;  margin-right:200px;" ></th>
        <th>مراكش في : <span id="datetime1"></span></th>
       </tr>
     </table>
     <table height="40px">
         <tr>عدد<span id="p2"></span> ك.خ</tr>
     </table>
     <table style="width:100%; margin-bottom:3%;">
     
       <caption><strong> من الرئيس الاول لمحكمة الاستناف بمراكش<br>
      إلى: السيدة <span id="p1"></span>  <br>
        كاتبة الضبط من الدرجة الثالثة بهذه المحكمة <br>
        رقم تأجيره : <br>
        تحت إشراف<br>
        السيد رئيس المصلحة كتابة الضبط بها</strong><br>
      </caption>
     </table>
     <table height="30px" >
                   <tr> <strong>الموضوع</strong> : طلب الاستفادة مما تبقى من الرخصة الادارية لسنة <span id="p3"></span></tr><br>
     </table>
     <table  height="30px">
                   <tr> <strong>المرجع</strong> : كتابكم المؤرخ في 2021/07/12.</tr>
     </table> 
    <table style="width:100%; margin-bottom:3%;">
        <caption>
            <strong>سلام تام بوجود مولانا الإمام</strong><br>
        و بعد، فعلاقة بالرسالة الدورية الصادرة عن السيد وزير العدل تحت 19س1/4 و تاريخ <br>
        2017/02/21 حول تجزيئ الرخصة السنوية للموظفين.<br>
         و تبعا لكتابكم المبين بالمرجع أعلاه و الذي تطلبون فيه الاستفادة من <span id="p41"></span> أيام من الرخصة<br>
         الادارية لسنة<span id="p6"></span> ، أخبركم بالاستجابة لطلبكم و ذلك ابتداء من <span id="p5"></span>.<br>
        <strong>مع تحياتي و السلام.</strong><br>
        </caption>
    </table>

    <table    style="width: 90%; margin-bottom:3%;">
       <tr>
        <th width ="380px"><u>نسخة طبق الأصل موجهة إلى </u> : <br>
            السيد وزير العدل- مديرية الموارد البشرية<br>
             قسم الموظفين- مصلحة كتاب الضبط و المحررين القضائيين<br> 
             قصد الإخبار</th>
        <th>الرئيس الأول<br>
             أحمد نهيد </th>
       </tr>
     </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

//$('#printZone').hide();
    $(document).on('click','#print', function(event) {

// $('#print').click(function(event){
    var conge_id = $(this).data('ci')
    var conge_name =$(this).data('nm')
    var conge_ref=$(this).data('ref')
    var conge_nbj=$(this).data('nb')
    var conge_dd= $(this).data('dd')
    var conge_annee=$(this).data('an')
    document.getElementById("p1").innerHTML = conge_name;
    document.getElementById("p2").innerHTML = conge_ref;
    document.getElementById("p3").innerHTML = conge_annee;
    document.getElementById("p41").innerHTML = conge_nbj;
    document.getElementById("p42").innerHTML = conge_nbj;
    document.getElementById("p5").innerHTML = conge_dd;
    document.getElementById("p6").innerHTML = conge_annee;
    var dateObj = new Date();
var month = dateObj.getUTCMonth() + 1; //months from 1-12
var day = dateObj.getUTCDate();
var year = dateObj.getUTCFullYear();

newdate = year + "/" + month + "/" + day;
document.getElementById("datetime1").innerHTML = newdate;
document.getElementById("datetime2").innerHTML = newdate;

window.print();

    //alert(conge-id);
    
   // console.log(conge_id);

   // $('#printZone').show();
});
});
</script>



<body dir="{{(App::isLocale('ar') ? 'rtl':'rtl')}}">
     <table   style="width:100%; margin-bottom:3%; ">
       <tr>
        <th width ="120px"><u>المملكة المغربية وزارة العدل محكمة الاستناف بمراكش</u></th>
        <th class="s3"><img src="../public/images/logo.png" style="width:80px; height:80px;  margin-right:200px;" ></th>
        <th>مراكش في : <span id="datetime2"></span></th>
       </tr>
     </table>
     <table height="40px">
         <tr>إرسال عدد:  -<strong>2021</strong></tr>
     </table>
     <table style="width:100%; margin-bottom:5%;">
       <caption> <strong>من</strong> رئيس مصلحة كتابة الضبط بمحكمة الاستناف<br>
       <strong><u>بمراكش</u></strong><br>
        <strong>إلى </strong>: السيد وزير العدل <br>
-مديرية الموارد البشرية- قسم الموظفين <br>
مصلحة المنتدبين القضائيين و الأطر التقنية <strong><u>- الرباط -</u></strong>
      </caption>
      </table>
     <table style="height:30px; " >
                   <tr> <strong> تحت إشراف: السيد الرئيس الأول بمحكمة الاستناف بمراكش</strong></tr><br>
     </table>
     <table  height="30px" >
                   <tr > <strong> ورقة الإرسال</strong></tr>
     </table> 
     <table  align="center" style="width: 90%; margin-bottom:3%; border: 1px solid black;">
         <tr id="print3">
              <td class="s1"><strong>الرقم الترتيبي</strong></td>
              <td class="s1"><strong>نوع المراسلات و تلخيص موضوعها</strong></td>  
              <td class="s1"><strong>عدد المرفقات</strong></td>
              <td class="s1"><strong>ملاحظات</strong></td>
         </tr>
    <tbody>
              <tr id="show1">
              <td class="s2" ></td>
              <td class="s2" > إعلام بإيقاف العمل يوم<br>
              للإستفادة من مدة<strong> <span id="p41"></span> يوم عمل</strong> من الرخصة<br>
              السنوية <strong> 2020 </strong>  في اسم السيد ####<br>
              منتدب قضائي من الدرجة الثانية، رقمه <br>
              المالي### <br>
              - إعلام باستناف العمل يوم : 2021/08/25<br></td>
              <td class="s2"></td>
              <td class="s2" >تبعا لارسال السيد الرئيس <br>
               الأول عدد 2021/166 ك خ <br>
               و تاريخ 2021/07/14 <br>
               <br>
               <br>
               مع فائق التقدير و الاحترام.<br>
               <br>
               <br>
               <strong>رئيس مصلحة كتابة الضبط</strong></td>
              </tr>
    </tbody>
<style>
 .s2{
  border: 1px solid black;
}
.s1{ 
   border: 1px solid black;
   height: 70px;
  }
#print3{
    text-align: center;
    background-color:#e4e5e4;
  }
#show1{
    vertical-align: top;
    font-size:15px;
}
    .s3{
        padding-left:250px;
    }
    
  
 </style>
</table>
</x-app-layout>
