// route 
const r_to_login_proses = server + "/auth/login/proses";
const r_to_dashboard = server + "/app";

// vue object 
var app_utama = new Vue({
  el : '#login_app',
  data : {

  },
  methods : {
    login_atc : function()
    {
      login_proses();
    }
  }
});

// function
document.querySelector("#txt_username").focus();

$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

function login_proses()
{
  let username = document.querySelector('#txt_username').value;
  let password = document.querySelector('#txt_password').value;
  if(username === '' || password === ''){
    pesanUmumApp('warning', 'Isi field !!!', 'Harap lengkapi field !!!');
  }else{
    let ds = {'username':username, 'password':password}
    axios.post(r_to_login_proses, ds).then(function(res){
        let dr = res.data;
        if(dr.status === 'no_user'){
          pesanUmumApp('warning', 'No user !!!', 'Tidak ada username terdaftar !!!');
        }else if(dr.status === 'wrong_password'){
          pesanUmumApp('warning', 'Fail Auth !!!', 'Password salah !!!');
        }else{
          window.location.assign(r_to_dashboard);
        }
    });
  }
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}