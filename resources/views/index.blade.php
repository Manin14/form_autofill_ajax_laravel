<!DOCTYPE html>
<html>
    <head>
        <title>belajar autofill - sahretech.com</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    </head>
    <body>
        <form action="{{ url('simpan-data') }}" method="POST">
        @csrf

            <table>
                <tr><td>NIM</td><td><input type="text" class="nim" id="nim" name="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" id="nama" name="nama[]" ></td></tr>
                <tr><td>JENIS KELAMIN</td><td><input type="text" id="jeniskelamin" name="jeniskelamin[]" ></td></tr>
                <tr><td>JURUSAN</td><td><input type="text" id="jurusan" name="jurusan[]" ></td></tr>
                <tr><td>NO TELP</td><td><input type="text" id="notelp" name="notelp[]" ></td></tr>
                <tr><td>EMAIL</td><td><input type="text" id="email" name="email[]" ></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" id="alamat" name="alamat[]" ></td></tr>
            </table>

            <div class="add">
            </div>

            <a href="#" class="tambah btn btn-info"> Tambah </a>
            <button type="submit" class="btn btn-success"> Simpan </button>
        </form>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
       
        <script type="text/javascript">

            $('#nim').on('keyup', function(){
                var nim = $("#nim").val();
                $.ajax({
                    // type: "GET",
                     url:"{{ url('ajax') }}/"+nim,
                   // url:'url_folder/ajax.php',
                    data:"nim="+nim ,
                    // data: {'nim':nim},
                    // dataType: 'json',
                    success : function (data) {
                          var json = data;
                           let  obj = JSON.parse(json);
                          
                            $('#nama').val(obj.nama);
                            $('#jeniskelamin').val(obj.jeniskelamin);
                            $('#jurusan').val(obj.jurusan);
                            $('#notelp').val(obj.notelp);
                            $('#email').val(obj.email);
                            $('#alamat').val(obj.alamat);
                            console.log(obj);
                            }
         
                });
            });

            


            function isi_otomatis(){
                var nim = $("#nim").val();
                $.ajax({
                    // type: "GET",
                     url:"{{ url('ajax') }}/"+nim,
                   // url:'url_folder/ajax.php',
                    data:"nim="+nim ,
                    // data: {'nim':nim},
                    // dataType: 'json',
                    success : function (data) {
                          var json = data;
                           let  obj = JSON.parse(json);
                          
                            $('#nama').val(obj.nama);
                            $('#jeniskelamin').val(obj.jeniskelamin);
                            $('#jurusan').val(obj.jurusan);
                            $('#notelp').val(obj.notelp);
                            $('#email').val(obj.email);
                            $('#alamat').val(obj.alamat);
                            console.log(obj);
                            }
         
                });

                
            }
        </script>


        <!-- script add form -->
        <script>
            // script add bawah
            let loop = 1;
            // script customer add
            $('.tambah').on('click', function (){
            addform();
            });

            function addform(){
            loop ++;
            var mhs = '<div> <hr>'
                   + '      <table>'
                   + '          <tr><td>NIM</td><td><input type="text" class="nim2" id="nim" name="nim[]"></td></tr>'
                   + '          <tr><td>NAMA</td><td><input type="text" id="nama" name="nama[]" ></td></tr>'
                   + '          <tr><td>JENIS KELAMIN</td><td><input type="text" id="jeniskelamin" name="jeniskelamin[]" ></td></tr>'
                   + '          <tr><td>JURUSAN</td><td><input type="text" id="jurusan" name="jurusan[]" ></td></tr>'
                   + '          <tr><td>NO TELP</td><td><input type="text" id="notelp" name="notelp[]" ></td></tr>'
                   + '          <tr><td>EMAIL</td><td><input type="text" id="email" name="email[]" ></td></tr>'
                   + '          <tr><td>ALAMAT</td><td><input type="text" id="alamat" name="alamat[]" ></td></tr>'
                   + '       </table> '
                   + ' <a href="#" class="hapus btn btn-danger"> Hapus </a>'
                   + '  </div>';
            
            $('.add').append(mhs);
            }
            
            // tombol hapus nya
            $('body').on('click', '.hapus', function (){
            $(this).parent().remove();
            });
        </script>
    </body>
</html>