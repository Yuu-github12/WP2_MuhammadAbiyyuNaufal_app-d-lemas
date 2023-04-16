<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

  public function index()
  {
    //load model
    $this->load->model('Model_siswa');

    $data = array(
      'view_data_siswa' => $this->Model_siswa->get_siswa()->result()
    );
    //load view
    $this->load->view('view_data_siswa', $data);
  }

  // Tambah Data Siswa
  public function tambah()
  {
    // load view
    $this->load->view('view_form_siswa');
  }

  public function simpan()
  {
    // load model
    $this->load->model('Model_siswa');

    // get data dari form
    $nis      = $this->input->post('nis');
    $nama      = $this->input->post('nama');
    $kelas     = $this->input->post('kelas');
    $tgl_lahir = $this->input->post('tanggal_lahir');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $alamat    = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $agama = $this->input->post('agama');

    $data = array(
      'nis'         => $nis,
      'nama' => $nama,
      'kelas'        => $kelas,
      'tanggal_lahir' => $tgl_lahir,
      'tempat_lahir' => $tempat_lahir,
      'alamat'       => $alamat,
      'jenis_kelamin' => $jenis_kelamin,
      'agama'        => $agama
    );

    // insert data via model
    $this->Model_siswa->simpan_siswa($data);

    // Redirect ke controller
    redirect('/');
  }
  public function hapus($id)
  {
        var_dump($id);
      $this->load->model('Model_siswa');
      $this->Model_siswa->hapus_siswa($id);
      redirect('/');
  }

}