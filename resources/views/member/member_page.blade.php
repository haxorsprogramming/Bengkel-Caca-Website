<div class="row">
    <div class="col s12 m12 l12" id="app_member">
        <div class="card" id="d_data_tahun_ajaran">
            <div class="card-content">
                <span class="card-title">Daftar member bengkel</span>
                <a href="#!" class="btn" @click="tambah_member_atc()">Tambah member baru</a>
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
    </div>
</div>

<script src="{{ asset('/') }}ladun/base/js/member.js"></script>