<?php
class admin_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function get_login($id, $pass){
			$query = $this->db->get_where('user', array('username' => $id, 'password' => $pass));
			if ($query->num_rows()==1) {
                $query = $query->result_array();
				$this->session->set_userdata('username', $id);
                $this->session->set_userdata('nama', $query[0]['nama']);
                $this->session->set_userdata('level', $query[0]['level']);
				redirect('admin/index');
			}else{
				redirect('admin/login');
			}
	}

	public function get_user(){
		$query = $this->db->query("select * from user");
		return $query -> result_array();
    }
    public function get_one_user($id){
		$query = $this->db->query("select * from user where id = '$id'");
		return $query -> result_array();
    }
    public function insert_user($data){
        $this->load->helper('url');
        $this->load->library('form_validation');
		
		return $this->db->insert('user', $data);
    }

    public function edit_user($id,$data){
		$this->load->helper('url');
		$this->load->library('form_validation');
		
	    $this->db->where('id', $id);
		$this->db->update('user', $data);
    }
    public function delete_user($id){
        return $this->db->delete('user', array('id' => $id));
    }
        
    public function get_lowongan(){
		$query = $this->db->query("select * from lowongan");
		return $query -> result_array();
    }
    public function get_one_lowongan($id){
		$query = $this->db->query("select * from lowongan where id = '$id'");
		return $query -> result_array();
    }
    public function get_perusahaan(){
		$query = $this->db->query("select * from perusahaan");
		return $query -> result_array();
    }
    public function get_one_perusahaan($id){
		$query = $this->db->query("select * from perusahaan where id = '$id' ");
		return $query -> result_array();
    }
    // public function get_sertifikat(){
	// 	$query = $this->db->query("select * from sertifikat");
	// 	return $query -> result_array();
    // }
    // public function get_one_sertifikat($id){
	// 	$query = $this->db->query("select * from sertifikat where id = '$id'");
	// 	return $query -> result_array();
    // }
    // public function get_angkatan(){
	// 	$query = $this->db->query("select * from angkatan_pkl");
	// 	return $query -> result_array();
    // }
    // public function get_one_angkatan($id){
	// 	$query = $this->db->query("select * from angkatan_pkl where id = '$id'");
	// 	return $query -> result_array();
    // }
    // public function get_log_pembayaran(){
	// 	$query = $this->db->query("select * from log_pembayaran order by tgl_reset desc");
	// 	return $query -> result_array();
    // }
    // public function get_one_user($id){
	// 	$query = $this->db->query("select *,u.id as user_id, k.id as kelas_id, k.nama as kelas_nama, tp.nama as nama_pkl from user u  left join kelas k on u.kelas_id = k.id left join tempat_pkl tp on tp.id = u.tempat_pkl where u.type = 'siswa' and u.id = '$id'");
	// 	return $query -> result_array();
    // }
    // public function get_one_pj($id){
	// 	$query = $this->db->query("select * from user where id = '$id'");
	// 	return $query -> result_array();
    // }
    // public function get_journal_by_siswa($id){
    //     $query = $this->db->query("select *, j.id as jurnal_id, us.real_name as nama_siswa,us.id as siswa_id, upj.real_name as nama_pj from jurnal j 
    //     left join user us on j.siswa_id = us.id
    //     left join tempat_pkl pkl on us.tempat_pkl = pkl.id 
    //     left join user upj on pkl.pj = upj.id where j.siswa_id = '$id' ");
	// 	return $query -> result_array();
    // }
    // public function get_one_journal($id){
	// 	$query = $this->db->query("select *, j.id as jurnal_id, us.real_name as nama_siswa, upj.real_name as nama_pj from jurnal j left join user us on j.siswa_id = us.id left join user upj on j.pj_id = upj.id where j.id = '$id' ");
	// 	return $query -> result_array();
    // }
    // public function get_journal_by_pj($id){
	// 	$query = $this->db->query("select *, j.id as jurnal_id, us.real_name as nama_siswa, upj.real_name as nama_pj from jurnal j left join user us on j.siswa_id = us.id left join user upj on j.pj_id = upj.id where j.pj_id = '$id'");
	// 	return $query -> result_array();
    // }
    // public function get_tempat_pkl(){
	// 	$query = $this->db->query("select *, tp.id as pkl_id from tempat_pkl tp left join user u on tp.pj = u.id");
	// 	return $query -> result_array();
    // }
    // public function get_tempat_pkl_by_pj($id){
	// 	$query = $this->db->query("select *, tp.id as pkl_id from tempat_pkl tp left join user u on tp.pj = u.id where tp.pj = $id");
	// 	return $query -> result_array();
    // }
    // public function get_one_tempat_pkl($id){
	// 	$query = $this->db->query("select *, tp.id as pkl_id from tempat_pkl tp left join user u on tp.pj = u.id where tp.id = '$id'");
	// 	return $query -> result_array();
    // }

    // public function count_tempat_pkl(){
	// 	$query = $this->db->query("select count(id) as jumlah from tempat_pkl");
	// 	return $query -> result_array();
    // }
    // public function get_guru(){
	// 	$query = $this->db->query("select * from user where type = 'guru'");
	// 	return $query -> result_array();
    // }
    // public function get_one_guru($id){
	// 	$query = $this->db->query("select * from user where id = '$id'");
	// 	return $query -> result_array();
    // }
    // public function check_username($username){
	// 	$query = $this->db->query("select * from user where nomor_induk = '$username'");
	// 	return $query -> result_array();
    // }

    // public function insert_guru($data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	// 	return $this->db->insert('user', $data);
    // }
    // public function insert_pj($data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	// 	return $this->db->insert('user', $data);
    // }
    // public function get_pj(){
	// 	$query = $this->db->query("select * from user where type = 'pj'");
	// 	return $query -> result_array();
    // }
    
    // public function get_siswa(){
	// 	$query = $this->db->query("select *,u.id as user_id, k.id as kelas_id, k.nama as kelas_nama from user u  left join kelas k on u.kelas_id = k.id left join angkatan_pkl a on u.angkatan_pkl = a.id where u.type = 'siswa' and a.status = 1");
	// 	return $query -> result_array();
    // }
    // public function get_siswa_lunas(){
	// 	$query = $this->db->query("select *,u.id as user_id, k.id as kelas_id, k.nama as kelas_nama from user u  left join kelas k on u.kelas_id = k.id left join angkatan_pkl a on u.angkatan_pkl = a.id where u.type = 'siswa' and u.status_pembayaran=1 and a.status = 1");
	// 	return $query -> result_array();
    // }
    // public function get_siswa_belum_lunas(){
	// 	$query = $this->db->query("select *,u.id as user_id, k.id as kelas_id, k.nama as kelas_nama from user u  left join kelas k on u.kelas_id = k.id left join angkatan_pkl a on u.angkatan_pkl = a.id where u.type = 'siswa' and u.status_pembayaran=0 and a.status = 1");
	// 	return $query -> result_array();
    // }
    // public function get_siswa_by_kelas($id){
	// 	$query = $this->db->query("select *,u.id as user_id, k.id as kelas_id, k.nama as kelas_nama from user u  left join kelas k on u.kelas_id = k.id left join angkatan_pkl a on u.angkatan_pkl = a.id where u.type = 'siswa' and kelas_id = '$id' and a.status = 1");
	// 	return $query -> result_array();
    // }
    // public function get_siswa_by_tempat_pkl($id){
	// 	$query = $this->db->query("select *,u.id as user_id, k.id as kelas_id, k.nama as kelas_nama from user u  left join kelas k on u.kelas_id = k.id left join angkatan_pkl a on u.angkatan_pkl = a.id where u.type = 'siswa' and tempat_pkl = '$id' and a.status = 1");
	// 	return $query -> result_array();
    // }
    
    // public function count_siswa(){
	// 	$query = $this->db->query("select count(id) as jumlah from user u left join angkatan_pkl a on u.angkatan_pkl = a.id where type='siswa' and a.status = 1");
	// 	return $query -> result_array();
    // }
    // public function count_guru(){
	// 	$query = $this->db->query("select count(id) as jumlah from user where type='guru'");
	// 	return $query -> result_array();
    // }
    // public function get_kelas(){
	// 	$query = $this->db->query("select *,k.id as kelas_id from kelas k left join user u on k.guru_id = u.id  order by jurusan, nama");
	// 	return $query -> result_array();
    // }
    // public function count_kelas(){
	// 	$query = $this->db->query("select count(id) as jumlah from kelas");
	// 	return $query -> result_array();
    // }
    // public function get_kelas_by_guru($id){
	// 	$query = $this->db->query("select *,k.id as kelas_id from kelas k left join user u on k.guru_id = u.id where guru_id = '$id'  order by jurusan, nama");
	// 	return $query -> result_array();
    // }
    // public function get_one_kelas($id){
	// 	$query = $this->db->query("select *,k.id as kelas_id from kelas k left join user u on k.guru_id = u.id where k.id = '$id'");
	// 	return $query -> result_array();
    // }

    // public function get_kelas_xi(){
	// 	$query = $this->db->query("select * from kelas where tingkat = 'xi'");
	// 	return $query -> result_array();
    // }
    // public function set_lunas($id){
	// 	$query = $this->db->query("update user set status_pembayaran = 1 where id = '$id'");

	// 	return $query;
    // }
    // public function set_lulus($id){
	// 	$query = $this->db->query("update user set status_kelulusan = 1 where id = '$id'");

	// 	return $query;
    // }
    // public function set_tidak_lulus($id){
	// 	$query = $this->db->query("update user set status_kelulusan = 0 where id = '$id'");

	// 	return $query;
    // }
    // public function validasi_jurnal($id){
	// 	$query = $this->db->query("update jurnal set is_validasi = 1, tgl_validasi=now() where id = '$id'");

	// 	return $query;
    // }
    // public function set_all_lunas(){
	// 	$query = $this->db->query("update user set status_pembayaran = 1 where type = 'siswa'");

	// 	return $query;
    // }
    // public function set_all_lunas_kelas($id){
	// 	$query = $this->db->query("update user set status_pembayaran = 1 where kelas_id = '$id'");

	// 	return $query;
    // }
    // public function set_all_belum_lunas_kelas($id){
	// 	$query = $this->db->query("update user set status_pembayaran = 0 where kelas_id = '$id'");

	// 	return $query;
    // }
    // public function set_belum_lunas($id){
	// 	$query = $this->db->query("update user set status_pembayaran = 0 where id = '$id'");

	// 	return $query;
    // }
    // public function set_sertifikat_aktif($id){
	// 	$query = $this->db->query("update sertifikat set status = 1 where id = '$id'");

	// 	return $query;
    // }
    // public function set_sertifikat_non_aktif($id){
	// 	$query = $this->db->query("update sertifikat set status = 0 where id = '$id'");

	// 	return $query;
    // }
    // public function set_angkatan_aktif($id){
	// 	$query = $this->db->query("update sertifikat set status = 1 where id = '$id'");

	// 	return $query;
    // }
    // public function set_angkatan_non_aktif($id){
	// 	$query = $this->db->query("update sertifikat set status = 0 where id = '$id'");

	// 	return $query;
    // }
    // public function set_all_belum_lunas(){
	// 	$query = $this->db->query("update user set status_pembayaran = 0 where type = 'siswa'");

	// 	return $query;
    // }
    // public function update_password($id, $password){
	// 	$query = $this->db->query("update user set password = '$password' where id = '$id'");

	// 	return $query;
    // }

    // public function update_password_default_guru($id){
        
	// 	$query = $this->db->query("update user set password = 'gurusmkbismajaya' where id = '$id'");

	// 	return $query;
    // }

    // public function update_password_default_pj($id){
        
	// 	$query = $this->db->query("update user set password = 'smkbismajuara' where id = '$id'");

	// 	return $query;
    // }

    // public function update_password_default_siswa($id){
	// 	$query = $this->db->query("update user set password = 'smkbismajaya' where id = '$id'");

	// 	return $query;
    // }


	// public function insert_siswa($data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	// 	return $this->db->insert('user', $data);
    // }
    // public function insert_tempat_pkl($data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	// 	return $this->db->insert('tempat_pkl', $data);
    // }

    // public function edit_tempat_pkl($id,$data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	//     $this->db->where('id', $id);
	// 	$this->db->update('tempat_pkl', $data);


    // }
    // public function insert_log_pembayaran($data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	// 	return $this->db->insert('log_pembayaran', $data);
    // }
    // public function insert_kelas($data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	// 	return $this->db->insert('kelas', $data);
    // }
    // public function insert_angkatan($data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	// 	return $this->db->insert('angkatan_pkl', $data);
    // }
    // public function edit_angkatan($id,$data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	//     $this->db->where('id', $id);
	// 	$this->db->update('angkatan_pkl', $data);


    // }
    // public function edit_kelas($id,$data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	//     $this->db->where('id', $id);
	// 	$this->db->update('kelas', $data);


    // }
    // public function insert_jurnal($data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	// 	return $this->db->insert('jurnal', $data);
    // }
    // public function insert_sertifikat($data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	// 	return $this->db->insert('sertifikat', $data);
    // }
    // public function edit_siswa($id,$data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	//     $this->db->where('id', $id);
	// 	$this->db->update('user', $data);
    // }
    // public function edit_sertifikat($id,$data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	//     $this->db->where('id', $id);
	// 	$this->db->update('sertifikat', $data);
    // }
    // public function edit_guru($id,$data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	//     $this->db->where('id', $id);
	// 	$this->db->update('user', $data);
    // }
    // public function edit_pj($id,$data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	//     $this->db->where('id', $id);
	// 	$this->db->update('user', $data);
    // }
    // public function edit_jurnal($id,$data){
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
		
	//     $this->db->where('id', $id);
	// 	$this->db->update('jurnal', $data);
    // }

	// public function count_user(){
	// 	$query = $this->db->query("select count(id) as jumlah from user");
	// 	return $query -> result_array();
    // }


    // public function delete_jurnal($id){
    //     return $this->db->delete('jurnal', array('id' => $id));
    // }
    // // delete siswa,guru,pj
    // public function delete_user($id){
    //     return $this->db->delete('user', array('id' => $id));
    // }
    // public function delete_kelas($id){
    //     return $this->db->delete('kelas', array('id' => $id));
    // }
    // public function delete_tempat_pkl($id){
    //     return $this->db->delete('tempat_pkl', array('id' => $id));
    // }
    // public function delete_sertifikat($id){
    //     return $this->db->delete('sertifikat', array('id' => $id));
    // }
    // public function delete_angkatan($id){
    //     return $this->db->delete('angkatan_pkl', array('id' => $id));
    // }

	public function get_admin($username){
		$query = $this->db->get_where('user', array('username' => $username));
		return $query -> result_array();
	}





}
