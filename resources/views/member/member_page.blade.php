<div class="row">
    <div class="col s12 m12 l12" id="app_member">
        <div class="card" id="d_member">
            <div class="card-content">
                <span class="card-title">Daftar member bengkel</span>
                <a href="#!" class="waves-effect waves-light btn" @click="tambah_member_atc()"><i class="material-icons left">cloud</i>Tambah member baru</a>
                <hr />
                <table id="tbl_member" class="display responsive-table datatable-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!-- form tambah member -->
        <div class="card" id="d_form_tambah_member" style="display: none;">
            <div class="card-content">
                <span class="card-title">Tambah Member</span>
                <div class="row">
                    <form class="col s6">
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Username" id="txt_username" type="text" class="validate">
                                <label for="txt_username" class="active">Username</label>
                            </div>
                            <div class="input-field col s12">
                                <input placeholder="Nama" id="txt_nama_member" type="text" class="validate">
                                <label for="txt_nama_member" class="active">Nama Member</label>
                            </div>
                            <div class="input-field col s12">
                                <input placeholder="Tanggal Lahir" id="txt_tanggal_lahir" type="date" class="validate">
                                <label for="txt_tanggal_lahir" class="active">Tanggal Lahir</label>
                            </div>
                            <div class="input-field col s12">
                                <input placeholder="Nama" id="txt_nama_member" type="text" class="validate">
                                <label for="txt_nama_member" class="active">Email</label>
                            </div>
                            <a href="#!" class="btn" @click="simpan_member_atc()">Tambah member baru</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('/') }}ladun/base/js/member.js"></script>