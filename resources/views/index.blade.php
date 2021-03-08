<!DOCTYPE html>
<html>
    <head>
        <title>belajar autofill - sahretech.com</title>
    </head>
    <body>
        <form action="{{ url('simpan-data') }}" method="POST">
        @csrf

            <table>
                <tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" id="nim" name="nim"></td></tr>
                <tr><td>NAMA</td><td><input type="text" id="nama" name="nama" ></td></tr>
                <tr><td>JENIS KELAMIN</td><td><input type="text" id="jeniskelamin" name="jeniskelamin" ></td></tr>
                <tr><td>JURUSAN</td><td><input type="text" id="jurusan" name="jurusan" ></td></tr>
                <tr><td>NO TELP</td><td><input type="text" id="notelp" name="notelp" ></td></tr>
                <tr><td>EMAIL</td><td><input type="text" id="email" name="email" ></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" id="alamat" name="alamat" ></td></tr>
            </table>
            <button type="submit" > Simpan </button>
        </form>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
       
        <script type="text/javascript">
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
    </body>
</html>