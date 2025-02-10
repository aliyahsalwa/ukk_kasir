<?php
$id = $_GET['id'];
    if(isset($_POST['nama_produk'])) {
        $nama = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stock = $_POST['stock'];

        $query = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama',harga='$harga',stock='$stock' WHERE id_produk=$id");
        if($query) {
            echo '<script>alert("Tambah data berhasil")</script>';
        }else{
            echo '<script>alert("Tambah data gagal")</script>';
        }
    }

    $query = mysqli_query($koneksi, "SELECT*FROM produk WHERE id_produk=$id");
    $data = mysqli_fetch_array($query);

?>

<div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                        <a href="?page=produk" class="btn btn-danger">Kembali</a>
                        <hr>

                        <form method="post">
                            <table class="table table-bordered">
                                <tr>
                                    <td width="200">Nama Produk</td>
                                    <td width="1">:</td>
                                    <td><input class="form-control" value="<?php echo $data['nama_produk'];?> type="text" name="nama_produk"></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td><input class="form-control" value="<?php echo $data['harga'];?> type="number" step="0" name="harga"></td>
                                </tr>
                                <tr>
                                    <td>Stock</td>
                                    <td>:</td>
                                    <td><input class="form-control" type="number" step="0" value="<?php echo $data['stock'];?> name="stock"></td>
                                </tr>
                                <tr> 
                                    <td>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </td>
                                </tr>
                            </table>
                        </form>

                    </div>