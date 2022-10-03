<?php
include("koneksi.php");

if(isset($_POST['simpan'])){;
          $kode = $_POST['id'];
          $nama = isset($_POST['nama']);
          $stok = isset($_POST['stok']);
          $harga = isset($_POST['harga']);

          $sql = "UPDATE barang SET nama='$nama', stok='$stok' harg='$harga' WHERE id=$kode";
          $query = mysqli_query($db,$sql);

          if($query){
                    header('Location:barang.php');
          }else{
                    die ("gagal mengedit");
          }}
          else{
                    die("akses dilarang");
          }
?>