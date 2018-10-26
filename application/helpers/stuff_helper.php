<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function rupiah($nilai, $pecahan = 0){
   return number_format($nilai, $pecahan, ',', '.');
}

function tanggal($tgl)
{
	   $pecah = explode("/",$tgl);
		$tanggal = $pecah[0];
		$bulan = bulan($pecah[1]);
		$tahun = $pecah[2];
		return $tanggal.' '.$bulan.' '.$tahun;
}

function tgl_indo($tgl)
	{
		$pecah = explode("-",$tgl);
		$tanggal = $pecah[0];
		$bulan = bulan($pecah[1]);
		$tahun = $pecah[2];
		return $tanggal.' '.$bulan.' '.$tahun;
	}

function bulan($bln)
	{
		switch ($bln)
		{
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}
    
    
    function terbilang($x)
    {
      $abil = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
      if ($x < 12)
        return " " . $abil[$x];
      elseif ($x < 20)
        return Terbilang($x - 10) . "Belas";
      elseif ($x < 100)
        return Terbilang($x / 10) . " Puluh" . Terbilang($x % 10);
      elseif ($x < 200)
        return " seratus" . Terbilang($x - 100);
      elseif ($x < 1000)
        return Terbilang($x / 100) . " Ratus" . Terbilang($x % 100);
      elseif ($x < 2000)
        return " seribu" . Terbilang($x - 1000);
      elseif ($x < 1000000)
        return Terbilang($x / 1000) . " Ribu" . Terbilang($x % 1000);
      elseif ($x < 1000000000)
        return Terbilang($x / 1000000) . " Juta" . Terbilang($x % 1000000);
    }
