<?php 
    class P5_3{
        var $warna;
        var $merk;
        var $harga;

        function __construct(){
            $this->warna = "Biru";
            $this->merk= "BMW";
            $this->harga= "10000000";
        }

        function gantiWarna ($warnaBaru){
            $this->warna = $warnaBaru;
        }

        function tampilWarna(){
            echo "Warna Mobilnya : " . $this->warna;
        }

        function gantiMerk ($merkBaru){
            $this->merk = $merkBaru;
        }

        function tampilMerk(){
            echo "Merk Mobilnya : " . $this->merk;
        }

        function gantiHarga ($hargaBaru){
            $this->harga = $hargaBaru;
        }

        function tampilHarga(){
            echo "Harga Mobilnya : " . $this->harga;
        }
    }

    $a = new P5_3();
    echo "<b>Mobil Pertama</b><br/>";
    $a->tampilWarna();
    echo "<br/>Mobil pertama ganti warna<br/>";
    $a->gantiWarna("Merah");
    $a->tampilWarna();
    echo "<br>";
    $a->tampilMerk();
    echo "<br>";
    $a->tampilHarga();

    echo "<br/>";
    echo "<br/><b>Mobil kedua</b><br/>";
    $b = new P5_3();
    $b->gantiWarna("Hijau");
    $b->tampilWarna();
    $b->gantiMerk("Avanza");
    echo "<br>";
    $b->tampilMerk();
    $b->gantiHarga("150000000");
    echo "<br>";
    $b->tampilHarga();

    echo "<br/>";
    echo "<br/><b>Mobil ketiga</b><br/>";
    $c = new P5_3();
    $c->gantiWarna("Kuning");
    $c->tampilWarna();
    $c->gantiMerk("Calya");
    echo "<br>";
    $c->tampilMerk();
    $c->gantiHarga("110000000");
    echo "<br>";
    $c->tampilHarga();

    echo "<br/>";
    echo "<br/><b>Mobil keempat</b><br/>";
    $d = new P5_3();
    $d->gantiWarna("Hitam");
    $d->tampilWarna();
    $d->gantiMerk("Agya");
    echo "<br>";
    $d->tampilMerk();
    $d->gantiHarga("115000000");
    echo "<br>";
    $d->tampilHarga();

    echo "<br/>";
    echo "<br/><b>Mobil kelima</b><br/>";
    $e = new P5_3();
    $e->gantiWarna("Abu-Abu");
    $e->tampilWarna();
    $e->gantiMerk("Xenia");
    echo "<br>";
    $e->tampilMerk();
    $e->gantiHarga("160000000");
    echo "<br>";
    $e->tampilHarga();
?>