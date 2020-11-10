<?php $this->load->view('template/head') ?>
<body>
   <div class="container-fluid">
   <h1>Table Mahasiswa<hr></h1>
        <div class="row">
                <table class="table table-bordered">
                    <tr>
                    <th>NO</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jurusan</th>
                    <th>Semester</th>
                    <th><a href="" class="btn btn-primary">Tambah</a></th>                
             
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>MOH.FAHRURROZI</td>
                    <td>Teknik Informatika</td>
                    <td>5 (Lima)</td>
                    <td>
                    <a href="" class="btn btn-warning">Edit</a> |
                    <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                    </tr>
                      </table>        
        </div>
   </div>
</body>
<?php $this->load->view('template/foot') ?>
