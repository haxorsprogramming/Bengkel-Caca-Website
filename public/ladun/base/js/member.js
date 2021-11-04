// route 
var r_get_provinsi = server + "daerah/get-provinsi/all";

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
            document.querySelector("#txt_username").focus();
        },
        simpan_member_atc : function()
        {
            console.log("Haloo");
        }
    }
});

// function 
$('#tbl_member').dataTable();