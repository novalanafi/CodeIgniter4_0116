<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Modelmahasiswa;

class Mahasiswa extends Controller{
    public function index(){

        $mhs = new Modelmahasiswa();
        $data = [
            'tampildata' => $mhs->tampildata()->getResult()
        ];

        echo View('tampilmahasiswa', $data);
    }

    public function tambah_data()
    {
        helper('form');
        echo View('tambahdata');
    }

    public function simpan_data()
    {
		$data = [
			'nim_mhs' => $this->request->getpost('nim'),
			'nama_mhs' => $this->request->getpost('nama'),
			'fakultas_mhs' => $this->request->getpost('fakultas'),
			'jurusan_mhs' => $this->request->getpost('jurusan'),
			'semester_mhs' => $this->request->getpost('semester'),
			'jumlah_sks' => $this->request->getpost('jumlah_sks'),
			'kelompok' => $this->request->getpost('kelompok'),
			'matkul' => $this->request->getpost('matkul'),
		];

        $mhs = new Modelmahasiswa();

        $simpan = $mhs->simpan($data);

        if($simpan)
        {
            return redirect ()->to('/mahasiswa/index');
        }
    }

    function hapus()
    {
        $uri = service('uri');
        $nim = $uri->getSegment('3');

        $mhs = new Modelmahasiswa();

        $mhs->hapusdata($nim);

        return redirect ()->to('/mahasiswa/index');
    }

    function edit_data()
    {
        helper('form');
        $uri = service('uri');
        $nim = $uri->getSegment('3');

        $mhs = new Modelmahasiswa();

        $ambildata = $mhs->ambildata($nim);

        if (count($ambildata->getResult())> 0){
            $row = $ambildata->getRow();
            $data = [
                'nim' => $nim,
                'nama' => $row->nama_mhs,
                'fakultas' => $row->fakultas_mhs,
                'jurusan' => $row->jurusan_mhs,
                'semester' => $row->semester_mhs,
                'jumlah_sks' => $row->jumlah_sks,
                'kelompok' => $row->kelompok,
                'matkul' => $row->matkul,
            ];

            echo View('editdata', $data);
        }

    }
    function update_data()
    {
        $nim = $this->request->getpost('nim');
        $data = [
			'nama_mhs' => $this->request->getpost('nama'),
			'fakultas_mhs' => $this->request->getpost('fakultas'),
			'jurusan_mhs' => $this->request->getpost('jurusan'),
			'semester_mhs' => $this->request->getpost('semester'),
			'jumlah_sks' => $this->request->getpost('jumlah_sks'),
			'kelompok' => $this->request->getpost('kelompok'),
			'matkul' => $this->request->getpost('matkul'),
		];

        $mhs = new Modelmahasiswa();

        $update = $mhs->editdata($data, $nim);

        if($update)
        {
            return redirect ()->to('/mahasiswa/index');
        }
    }


}

?>