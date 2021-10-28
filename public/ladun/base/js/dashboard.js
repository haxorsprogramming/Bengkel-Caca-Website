// route 
var r_beranda = server + "app/beranda";
var r_test_bearer = "http://localhost/Bengkel-Caca-Website/public/testing-api/get-kategori";
// vue object 
var div_menu = new Vue({
    el : '#slide-out',
    data : {

    },
    methods : {
        dashboarc_atc : function()
        {
            load_page(r_beranda, 'Dashboard');
        },
        test_bearer : function()
        {
            let ds = {'nama':'Bengkel Caca'}
            axios.post(r_test_bearer, ds,{
                headers : {
                    Authorization : 'Bearer l0XcaMCkiBD3m5cVh3rYXUmWWwDfhDD1FPTOfpcN'
                }
            }).then(function(res){
                console.log(res.data);
            });
        }
    }
});

var footer_app = new Vue({
    el : '#footer_app',
    data : {
        page_title : 'Dashboard'
    },
    methods : {

    }
})
// fungsi 
NProgress.configure({ showSpinner: false });
load_page(r_beranda, 'Dashboard');

function pesan_toast(pesan)
{
    Materialize.toast(pesan, 3000);
}


async function load_page(page, page_title)
{
    footer_app.page_title = page_title;
    NProgress.start();
    document.querySelector("#div_utama").innerHTML = "<div style='text-align:center;width:100%;margin-top:40px;font-size:20px;'>Memuat halaman ...</div>";
    await tidur_bentar(1000);
    $("#div_utama").load(page);
    NProgress.done();
}

function tidur_bentar(ms){
    return new Promise(resolve => { setTimeout(resolve, ms) });
}