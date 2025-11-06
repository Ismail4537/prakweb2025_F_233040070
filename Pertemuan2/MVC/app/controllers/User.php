<?php
class User extends Controller
{
    public function index(){
        $data['judul'] = 'Daftar Pengguna';
        $data['users'] = $this->model('User_model')->getAllUser();
        // head
        $this->view('templates/header', $data);

        $this->view('user/list', $data);

        // footer
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Pengguna';
        $data['user'] = $this->model('User_model')->getUserById($id);
        // head
        $this->view('templates/header', $data);
        
        $this->view('user/detail', $data);

        // footer
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('User_model')->tambah($_POST)>0){
            Flasher::setFlash('Berhasil,', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        }else{
            Flasher::setFlash('Gagal,', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function hapus($id){
        if($this->model('User_model')->hapus($id)>0){
            Flasher::setFlash('Berhasil,', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        }else{
            Flasher::setFlash('Gagal,', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }
    
    public function getubah(){
        echo json_encode($this->model('User_model')->getUserById($_POST['id']));
    }

    public function ubah(){
        if($this->model('User_model')->ubah($_POST)>0){
            Flasher::setFlash('Berhasil,', 'diubah', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        }else{
            Flasher::setFlash('Gagal,', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }
}
?>