<!-- <?php
 
//class manusia
// class manusia{
    //prop
    // public $nama;
    
    //method manusia
//     function tampilkan_nama(){
//         echo "Nama saya uus";
//     }
//     function biodata(){
//         echo $this->tampilkan_nama();
//     }
    
// }
// //instansiasi class manusia
// $manusia = new manusia();
 
// //memanggil method tampilkan_nama dari class manusia
// echo $manusia->biodata();

?> -->


<!-- <?php
 
//class manusia
// class jalmi{
//     //menentukan property dengan private
//     protected $nama = "nabila";    
    
//     //method public
//     public function tampilkan_nama(){
//         return "Nama saya " .$this->nama;
//     }
    
    
// }
//instansiasi class manusia
// $manusia = new jalmi();
 
// memanggil method public tampilkan_nama dari class manusia
// echo $manusia->tampilkan_nama();
?> -->

<?php
class manusia{

    // protected $nama ="malas ngoding";

    protected function nama(){
        return "nama saya Muhammad";
    }
    public function keluarkan(){
        return $this->nama();
    }
    // public function tampilkan_nama(){
    //     return $this->nama;
    // }
}
$manusia = new manusia();
echo $manusia->keluarkan();
?>