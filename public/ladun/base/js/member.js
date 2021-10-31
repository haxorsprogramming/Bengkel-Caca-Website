// vue object 
var app_member = new Vue({
    el : '#app_member',
    data : {

    },
    methods : {
        tambah_member_atc : function()
        {
            $('#d_member').hide();
            $("#d_form_tambah_member").show();
            document.querySelector("#txt_nama_member").focus();
        }
    }
});

// function 
$('#tbl_member').dataTable();