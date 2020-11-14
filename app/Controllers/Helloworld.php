<?php namespace App\Controllers;

class Helloworld extends BaseController
{
	public function index($nama, $npm)
	{
        //echo $this->name;
        //echo $nama ."<br>";
        //echo $npm ."<br>";
        //echo "Hello World!";
        $data['nama'] = $nama;
		$data['npm'] = $npm;
        echo view("Mahasiswa/header", $data);
	    echo view("Mahasiswa/index", $data);
	    echo view("Mahasiswa/footer", $data);
    }
    
    public function show()
    {
        echo "Embu Banjar";
        echo "1817051048";
    }
}