/**************************************************************************************/
/*------------------------- Designers System Components -----------------------------*/
/************************************************************************************/
/*                                                                                         *
 /*                                                                                       *
 /*                Copyright © 2015. All Rights Reserved.                              *
 /*                                                                                  *
 /*                Designed By Mustafa Saeed & Mohammed Eisa                      *
 /*                                                                            *
 /*                                                             *           *
 /*                                                                 *     *
 /*                                                                    *
 /**************************************************************************************/
/*-------------------- End of designers ---------------------------------------------*/
/************************************************************************************/


/*
 * this below code to send new updated value to server and before that,use check value requirements
 *  and after that use action on hide modal to change attr on button save data.
 */



$("document").ready(function($){

    $('#myRecord').DataTable({
        "ordering": true,
        "lengthMenu": [[10, 25, 50,100,250,500, -1], [10, 25, 50,100,250,500, "الكل"]],
        "language":{
            "sProcessing":   "جارٍ التحميل...",
            "sLengthMenu":   "أظهر _MENU_ مدخلات",
            "sZeroRecords":  "لم يعثر على أية سجلات",
            "sInfo":         "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
            "sInfoEmpty":    "يعرض 0 إلى 0 من أصل 0 سجل",
            "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
            "sInfoPostFix":  "",
            "sSearch":       "ابحث:",
            "sUrl":          "",
            "oPaginate": {
                "sFirst":    "الأول",
                "sPrevious": "السابق",
                "sNext":     "التالي",
                "sLast":     "الأخير"
            }//end of footer options.
        }//end of language options.
    });

});


function getSubContentFromOtherTable(_this,PkParentTable,ChildTable,PkValueOption,NamefeildOption,IDChild){

    var record = $(_this).attr('id');

    $.ajax({

        type:'get',
        url: './Controller/OtherTable',
        dataType:'json',
        data:{
            PkParentTable           : PkParentTable,
            ValuePkParentTable      : $('#'+record).val(),
            ChildTable              : ChildTable,
            PkValueOption           : PkValueOption,
            NamefeildOption         : NamefeildOption,
            IDChild                 : IDChild

        },

        success:function(data){
            $('#'+IDChild).html(data.string);
        },

        error: function(data){
            console.log(data);
        }
    });

    return false;

}//end of fun 

function uploadFile(_this){

    var myForm = document.getElementById('update_'+$(_this).attr("label")+'_form');

    var formData = new FormData(myForm);

    var record = $(_this).attr('id');
    var keys   = $(_this).attr('label');
    var mat = keys.split('+');
    var table = mat[0],PK   = mat[1] ;

    var upd_request ='#update_'+table+record;
    $.ajax({
        type:'POST',
        url: './Controller/uploadFile',
        data:formData,
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            if(myXhr.upload){
                myXhr.upload.addEventListener('progress',progress, false);
            }
            return myXhr;
        },
        cache:false,
        contentType: false,
        processData: false,

        success:function(data){
            console.log(data);
            $('.file'+record).html(data);
            alert('تم تعديل وحفظ الملف بنجاح');
            // $(upd_request).html('<div class=\'alert alert-success\'><button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button>تم تعديل وحفظ الملف بنجاح </div>');

        },

        error: function(data){
            console.log(data);
        }
    });

    e.preventDefault();


    return false;

}//end of fun upload file to server

function progress(e){

    $('.progress-bar .progress-bar-success .progress-bar-striped').show(100);

    if(e.lengthComputable){
        var max = e.total;
        var current = e.loaded;

        var Percentage = (current * 100)/max;
        $('.progress-bar .progress-bar-success .progress-bar-striped').attr({'aria-valuenow':Percentage,
            'style':"width:"+Percentage+"%"
        });
        console.log(Percentage);


        if(Percentage >= 100)
        {
            // process completed
            $('.progress-bar .progress-bar-success .progress-bar-striped').hide(200);
        }
    }
}//end of fun.

function insertTab(_this){

    var keys   = $('#submit').attr('label');
    var mat = keys.split('+');
    var table = mat[0],PK   = mat[1] ;
    var record = PK;
    var fields = [],id_group = [] ,message_null = [] ,message_less = [],
        min_values = [],message_greater = [], max_values = [];
    var j = 0;
    var str = '';
    for(var i = 2; i < mat.length; i++){

        fields[mat[i]] = $('#'+mat[i]+record).val();
        if(i+1 < mat.length)
            str += mat[i]+"=>"+$('#'+mat[i]+record).val()+",";
        else
            str += mat[i]+"=>"+$('#'+mat[i]+record).val();
        id_group[j] = mat[i]+record;
        message_null[j] = 'هذا الحقل مطلوب';
        message_less[j] = 'لقد ادخلت اقل من الحد المسموح به';
        min_values[j] = 1;
        message_greater[j] = 'لفد ادخلت اكبر من الحد المسموح به';
        max_values[j] = Math.pow(1000,3);
        j++;

    }//end of for loop.

    var insertError ='create_'+table;
    var val = document.getElementsByName("_token")[0].value;
    var result = Check_Value(id_group,message_null,message_less,min_values,message_greater,max_values,insertError);

    /* insert data */
    if(result){

        var insert_request = '#'+insertError;


        var audio = document.getElementById('audioSuccess');
        audio.play();


        setTimeout(function(){

        },3000);

        return true;

    }//end if successflly.
    else{
        var audio = document.getElementById('audioError');
        audio.play();
        return false;
    }



}///end of fun insert.

function updateTab(_this){
    var record = $(_this).attr('id');
    var keys   = $(_this).attr('label');
    var mat = keys.split('+');
    var table = mat[0],PK   = mat[1] ;
    var fields = [],id_group = [] ,message_null = [] ,message_less = [],
        min_values = [],message_greater = [], max_values = [];
    var j = 0;
    var str = '';
    for(var i = 2; i < mat.length; i++){

        if($('#'+mat[i]+record).attr('type') != "file") {
            fields[mat[i]] = $('#' + mat[i] + record).val();

            if (i + 1 < mat.length)
                str += mat[i] + "=>" + $('#' + mat[i] + record).val() + "+";
            else
                str += mat[i] + "=>" + $('#' + mat[i] + record).val();

            id_group[j] = mat[i] + record;

            message_null[j] = 'هذا الحقل مطلوب';
            message_less[j] = 'لقد ادخلت اقل من الحد المسموح به';
            min_values[j] = 1;
            message_greater[j] = 'لفد ادخلت اكبر من الحد المسموح به';
            max_values[j] = Math.pow(1000,3);
            j++;
        }

    }//end of for loop.

    var updateError ='update_'+table+record;
    var val = document.getElementsByName("_token")[0].value;
    var result = Check_Value(id_group,message_null,message_less,min_values,message_greater,max_values,updateError);

    /* Update data */
    if(result){

        var upd_request = '#'+updateError;

        $(upd_request).html("<div align='center'>جاري المعالجة  <img src ='./public/assets2/images/load.gif' height='25' width='25'></div>");

        $.ajax({
            url:'./Controller/updateTab',
            type: 'POST',
            dataType: 'json',
            data:{'table':table,
                'pk':PK,
                'record':record,
                'fields':str,
                '_token':val
            }
        }).done(function(data) {

            //var data = JSON.parse(d);

            if (data.error === 0) {
                //in success
                for(var i = 2; i < mat.length; i++){

                    if($('#'+mat[i]+record).attr('label') == "select"){

                        var IDselect    = $('#'+mat[i]+record).attr('id');
                        var SelectValue = $('#'+mat[i]+record).val();
                        var Selected    = $('#'+IDselect+SelectValue).text();

                        $('.'+mat[i]+record).html(Selected);

                    }else if($('#'+mat[i]+record).attr('type') != "file")
                        $('.'+mat[i]+record).html(data.fields[mat[i]]);


                }

                $(upd_request).html('<div class=\'alert alert-success\'><button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button>'+data.message+' </div>');

                var audio = document.getElementById('audioSuccess');
                audio.play();

                $(upd_request).fadeOut(5000);
                setTimeout(function(){$('#my'+table+record).modal("hide");},3000);

            }else{
                //in error
                $(upd_request).html('<div class=\'alert alert-danger\'><button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button>'+data.message+'</div>');
                var audio = document.getElementById('audioError');
                audio.play();
            }

        });
    }else{
        var audio = document.getElementById('audioError');
        audio.play();
    }

    $(upd_request).fadeIn();
    //$('#delete_'+table).fadeIn();
}

function deleteTab(_this) {
    var id_delete = $(_this).attr('id');
    var keys = $(_this).attr('label');
    var mat = keys.split('+');
    var table = mat[0],PK = mat[1];
    var requests = '#delete_'+table;
    var p_delete = $(_this).parent();
    var audio = document.getElementById('audioError');
    audio.play();

    var conf = confirm("اتود فعلا حذف هذا السجل");

    var val = document.getElementsByName('_token')[0].value;
    if(conf == true){
        $(requests).html("<div align='center'>جاري المعالجة  <img src ='./public/assets2/images/load.gif' height=25 width=25></div>");
        $.post('./Controller/deleteTab',{'table':table,'pk':PK,'record':id_delete,'_token':val},function(data) {

            if (data.error === 0) {
                var audio = document.getElementById('audioSuccess');
                audio.play();

                $(requests).html('<div class=\'alert alert-success\'><button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button>'+data.message+' </div>');

                $('.row'+table+id_delete).html(" ");

                $(requests).fadeOut(10000);

            } else{

                $(requests).html('<div class=\'alert alert-danger\'><button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button>'+data.message+'</div>');
                var audio = document.getElementById('audioError');
                audio.play();
            }
        },'json');
    }
    $(requests).fadeIn();
    return false;
}//end fun delete

/* the function below use for delete current cookie using 3 parameters name of cookie and class field and class btn remove last field*/
function removeCookeis(cname,cls_remove,cls_remove_btn){
    // get the number of cookie
    //var nm = getCookie_number(cname);
    var ca = document.cookie.split(';');
    var nm = ca.length;
    //alert('R ->nm = '+nm);
    //alert('c('+cname+') counter = '+getCookie_number(cname));
    document.cookie =cname+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
    /* this code below use for remove cookie after click other tab menu */
    for(var i=0; i <= nm; i++) {
        document.cookie =cname+i+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
        if(i>0){
            var newadd = $('.'+cls_remove+i).parent();
            $(newadd).html(" ");
        }
    }//end of for loop

    $('.'+cls_remove_btn).hide();
}//end of fun rem




/* we create a function that stores the name of the visitor in a cookie variable */
function setCookie(cname, cvalue) {
    // 'exdays' it is paremeter for time of cookie
    //   var d = new Date();
    // d.setTime(d.getTime() + (exdays*24*60*60*1000));
    // var expires = "expires="+d.toUTCString();
    document.cookie = cname + '=' + cvalue + ';'; // + expires;
}

/* we create a function that returns the value of a specified cookie */
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

/*
 * the function below use for counter number of cookie by name start cookie. 
 */
function getCookie_number(cname) {
    var name = cname;
    var counter = 0;

    var ca = document.cookie.split(';');

    //alert(' clength ='+ca.length);

    for(var i=0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);

        if (c.indexOf(name + i + '=') == 0)
        {

            counter++;
        }

        if (c.indexOf(name + '=') == 0)
            counter++;

    }

    //alert('cname = '+cname+' counter = '+counter);

    return counter;

}//end countery cookies


/*
 * the function that checks if a cookie is set. 
 * If the cookie is set it will display a greeting
 * If the cookie is not set, it will display a prompt box, 
 * asking for the name of the user, and stores 
 * the username cookie for 365 days, by calling the setCookie function
 */
function checkCookie(cname) {
    var counter = getCookie(cname);
    if (counter != "") {
        //alert("Welcome again 1 " + cname);
    } else {
        counter = 1;//prompt("Please enter your name:", "");
        // alert("Welcome again 2 " + cname);

        if (counter != "" && counter != null) {
            setCookie(cname, counter);
        }
    }
}//end of check cookies

function showResult(str)
{
    if (str.length==0) {
        document.getElementById("search_emp").innerHTML="";

        return;
    }

    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("search_emp").innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.open("GET","./Services/searching.php?str="+str,true);
    xmlhttp.send();
}

function autofill(state)
{


    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();

    }
    else
    {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.open("GET","state.php?col="+state,true);
    xmlhttp.send();

    xmlhttp.onreadystatechange = function()
    {

        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {

            document.getElementById("localate").innerHTML = "<option></option>"+xmlhttp.responseText;

            document.getElementById("localate").disabled = false;

            document.getElementById("localate_wait").innerHTML = "<img src = './images/ok.png'>";

        }
    }
}
function autofill_colg(coll)
{


    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();

    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.open("GET","collage.php?col="+coll,true);
    xmlhttp.send();

    xmlhttp.onreadystatechange=function()
    {

        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {

            document.getElementById("colg").innerHTML = "<option></option>"+xmlhttp.responseText;

            document.getElementById("colg").disabled = false;

            document.getElementById("colg_wait").innerHTML = "<img src = './images/ok.png'>";

        }
    }
}

function Searching(item,sub_name,myModel_search)
{

    var id_search  = '#'+myModel_search;
    /*alert(item);*/
    $(id_search).html("<div align='center'>جاري التحميل  <img src = './images/loading.gif'></div>");

    $.post('./Controller/ajax.php',{'sub_name':sub_name,'items':item},function(data) {
        if(data.error === 0)
        {
            $(id_search).html(data.message);

        }else{
            $(id_search).html('<div class=\'alert alert-error\'><button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button>'+data.message+'</div>');
        }
    },'json');
}//end fun searching

function GetData(limited,after,before,id_request,id_table,sub_name,class_after,class_before)
{
    var idtable    = '#'+id_table;
    var idrequest  = '#'+id_request;
    var cls_before = '.'+class_before;
    var cls_after = '.'+class_after;
    //alert('l ='+limited+' af= '+after+' be= '+before);
    $(idrequest).html("<div align='center'>جاري التحميل  <img src = './images/loading.gif'></div>");

    $.post('./Controller/ajax.php',{'sub_name':sub_name,'limite':limited,'after':after,'before':before},function(data) {

        if(data.error === 0)
        {
            $(idtable).html(data.message);
            $(idrequest).html(" ");
        }else if(data.error === 2){
            $(idrequest).html('<div class=\'alert alert-error\'><button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button>'+data.message+'</div>');
            $(cls_after).hide(100);
        }else if(data.error === 3){
            $(idrequest).html('<div class=\'alert alert-error\'><button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button>'+data.message+'</div>');
            $(cls_before).hide(100);
        }else {
            $(idrequest).html('<div class=\'alert alert-error\'><button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button>'+data.message+'</div>');
        }
    },'json');//end ajax
}

function Group_viwe()
{

    if(document.getElementById("group").value == "جميع الطلبات")
    {
        document.getElementById("request_date").disabled = true;
        document.getElementById("states").disabled = true;
        document.getElementById("localate").disabled = true;
        document.getElementById("interview_date").disabled =false;

        document.getElementById("request_date_wait").innerHTML = "<img src = './images/load.gif'>";
        document.getElementById("states_wait").innerHTML = "<img src = './images/load.gif'>";
        document.getElementById("localate_wait").innerHTML = "<img src = './images/load.gif'>";
        document.getElementById("interview_date_wait").innerHTML = "<img src = './images/ok.png'>";

    }else if(document.getElementById("group").value == "تاريخ الطلب")
    {
        document.getElementById("request_date").disabled = false;
        document.getElementById("states").disabled = true;
        document.getElementById("localate").disabled = true;
        document.getElementById("interview_date").disabled = false;

        document.getElementById("request_date_wait").innerHTML = "<img src = './images/ok.png'>";
        document.getElementById("states_wait").innerHTML = "<img src = './images/load.gif'>";
        document.getElementById("localate_wait").innerHTML = "<img src = './images/load.gif'>";
        document.getElementById("interview_date_wait").innerHTML = "<img src = './images/ok.png'>";

    }else if(document.getElementById("group").value == "إختيار ولاية")
    {
        document.getElementById("request_date").disabled = true;
        document.getElementById("states").disabled = false;
        document.getElementById("localate").disabled = true;
        document.getElementById("interview_date").disabled = false;

        document.getElementById("request_date_wait").innerHTML = "<img src = './images/load.gif'>";
        document.getElementById("states_wait").innerHTML = "<img src = './images/ok.png'>";
        document.getElementById("localate_wait").innerHTML = "<img src = './images/load.gif'>";
        document.getElementById("interview_date_wait").innerHTML = "<img src = './images/ok.png'>";

    }
}
function confi()
{
    var conf=confirm('انت توشك علي حذف هذا...');
    if (conf)
        return true;
    else
        return false;
}

Check_Value = function(id,message_null,message_less,min_values,message_greater,max_values,errorid){

    var error_request_id = '#'+errorid;

    // alert(error_request_id);

    for(var i=0;i<id.length;i++)
    {
        var idx ='#'+id[i];

        if($(idx).val() == 0 || $(idx).val() == ' ' )
        {    /*
         * Check null data in filed
         */

            $(error_request_id).html('<div class=\'alert alert-danger\'>'+message_null[i]+'<button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button></div>');
            /*$(idx).fadeOut(1000).fadeIn(2000);*/
            $(idx).css({'border':'1px solid #ff0000'});
            //$(idx).val('');
            $(idx).focus();
            return false;

        }
        else if($(idx).val().length < min_values[i] )
        {    /*
         * Check the value minimum required
         */

            $(error_request_id).html('<div class=\'alert alert-danger\'>'+message_less[i]+'<button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button></div>');
            //$(idx).fadeOut(1000).fadeIn(2000);
            $(idx).css({'border':'1px solid #ff0000'});
            $(idx).focus();
            return false;

        }
        else if($(idx).val().length > max_values[i] )
        {    /*
         * Check the value maximum required
         */

            $(error_request_id).html('<div class=\'alert alert-danger\'>'+message_greater[i]+'<button type=\'button\' class=\'close\' data-dismiss=\'alert\'>&times;</button></div>');
            //$(idx).fadeOut(1000).fadeIn(2000);
            $(idx).css({'border':'1px solid #ff0000'});
            $(idx).focus();
            return false;

        }



    } /*end of for loop */

    return true;

}//end check null data

/* remove error color from input filed */
function remove_error_color(id_group) {

    for(var i=0;i<id_group.length;i++)
    {
        var idxx ='#'+id_group[i];

        $(idxx).css({'border':'1px solid #ccc'});

    }
}//end remove color

/* reset data*/
function cancel_form(formID,filedID) {
    $(formID)[0].reset();
    remove_error_color(filedID);
}

$("document").ready(function($){


    ProgressBar = function(value){

        $( "#progressbar" ).progressbar({
            value: value
        });
    }
});//document

$(function(){
    $('#text_name').keyup(function(){
        var val_id = $(this).val().length;
        if(val_id == '')
        {
            $('#text_name').css({'border':'2px solid #ff0000'});
            $('#text_alert').html('الرجاء الادخال ...');
        }
        else if(val_id > 5 || val_id < 5)
        {
            $('#text_name').css({'border':'3px solid #ff0000'});
            $('#text_alert').html('يجب ان يكون عدد الاحرف خمسة فقط ...');

        }
        else if(val_id == 5)
        {
            $('#text_name').css({'border':'2px solid green'});
            $('#text_alert').html('');

        }
    });
});
/*				   
 jQuery.extend(jQuery.validator.messages, {
 required: "This field is required.",
 remote: "Please fix this field.",
 email: "Please enter a valid email address.",
 url: "Please enter a valid URL.",
 date: "Please enter a valid date.",
 dateISO: "Please enter a valid date (ISO).",
 number: "Please enter a valid number.",
 digits: "Please enter only digits.",
 creditcard: "Please enter a valid credit card number.",
 equalTo: "Please enter the same value again.",
 accept: "Please enter a value with a valid extension.",
 maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
 minlength: jQuery.validator.format("Please enter at least {0} characters."),
 rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
 range: jQuery.validator.format("Please enter a value between {0} and {1}."),
 max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
 min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
 });

 */



