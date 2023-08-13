<?php
class BangunDatar
{
    protected $luas;
    protected $keliling;

    public function area()
    {
        return $this->luas;
    }

    public function circumference()
    {
        return $this->keliling;
    }

    public function enlarge($scale)
    {
        $this->luas *= $scale;
        $this->keliling *= $scale;
    }

    public function shrink($scale)
    {
        $this->luas /= $scale;
        $this->keliling /= $scale;
    }
}

class Lingkaran extends BangunDatar
{
    protected $jariJari;

    public function __construct($jariJari)
    {
        $this->jariJari = $jariJari;
        $this->luas = pi() * $jariJari * $jariJari;
        $this->keliling = 2 * pi() * $jariJari;
    }
}

class Persegi extends BangunDatar
{
    protected $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
        $this->luas = $sisi * $sisi;
        $this->keliling = 4 * $sisi;
    }
}

class PersegiPanjang extends BangunDatar
{
    protected $panjang;
    protected $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->luas = $panjang * $lebar;
        $this->keliling = 2 * ($panjang + $lebar);
    }
}

class Descriptor
{
    public static function describe($bangunDatar)
    {
        $jenisBangun = '';

        if ($bangunDatar instanceof Lingkaran) {
            $jenisBangun = 'Lingkaran';
        } elseif ($bangunDatar instanceof Persegi) {
            $jenisBangun = 'Persegi';
        } elseif ($bangunDatar instanceof PersegiPanjang) {
            $jenisBangun = 'Persegi Panjang';
        }

        return "Bangun datar ini adalah {$jenisBangun} yang memiliki luas {$bangunDatar->area()} dan keliling {$bangunDatar->circumference()}.";
    }
}

// Contoh penggunaan
$lingkaran = new Lingkaran(5);
$persegi = new Persegi(8);
$persegiPanjang = new PersegiPanjang(6, 10);

echo Descriptor::describe($lingkaran) . "\n";
echo Descriptor::describe($persegi) . "\n";
echo Descriptor::describe($persegiPanjang) . "\n";

$lingkaran->enlarge(4);
$persegi->shrink(2);

echo Descriptor::describe($lingkaran) . "\n";
echo Descriptor::describe($persegi) . "\n";
?>