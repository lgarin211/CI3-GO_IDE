<?php
defined('BASEPATH') or exit('No direct script access allowed');

class F extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('IDE/head');
    }

    public function index()
    {
        $data['val'] = [$this->All_data(), $this->daerah()];
        // var_dump($data['val'][0]['get_all']['IDE_tabel']);die;
        $this->list_semua_IDE($data);
        $this->list_semua_JOB($data);
    }
    public function Rincian()
    {
        switch ($_GET['call']) {
            case 'J':
                $tabel = 'JOB_Tabel';
                break;
            case 'D':
                $tabel = 'IDE_tabel';
                break;
            default:
                redirect('/');
                break;
        }

        $set = array('id' => $_GET['id']);
        $rincian = $this->db->get_where($tabel, $set)->result();
        foreach ($rincian as $key => $value) {
            $set = array('id' => $value->id_user);
            $ey = $this->db->get_where('user', $set)->result();
            foreach ($ey as $key1 => $value2) {
                $data[$key]['user'] = $value2;
            }
            $data[$key]['item'] = $value;
        }
        $data2 = $data;
        $data = [];
        $data['Detail'] = $data2;
        $this->db->set('view', ($data['Detail'][0]['item']->view) + 1);
        $this->db->where('id', $_GET['id']);
        $this->db->update($tabel);

        // var_dump($data);die;
        $this->load->view('IDE/Detail', $data);
    }
    public function list_semua_IDE($pas)
    {
        $mas = $pas['val'][0]['get_all']['IDE_tabel'];
        $data['data'] = $mas;
        $this->load->view('IDE/list_semua_IDE', $data);
    }
    public function list_semua_JOB($pas)
    {
        $mas = $pas['val'][0]['get_all']['JOB_Tabel'];
        $data['data'] = $mas;
        $this->load->view('IDE/list_semua_JOB', $data);
    }
    public function All_data()
    {
        $data = [];
        //nama tebel yang akan di panggil
        $tabel_call = ['IDE_tabel', 'JOB_Tabel'];
        //dapatkan semua data dari tabel yang di tulis di variabel $tabel_call dan langsung di masukan ke tabel user

        foreach ($tabel_call as $key => $value) {
            $vs[$value] = $this->all_IJ($value);
            // $vs[$value] = $vs[$value];
        }
        $data['get_all'] = $vs;

        if (!empty($_SESSION['id'])) {
            // datatkan semua data IDE dan JOB sesuai dengan yang pernah di tuliskan user
            foreach ($tabel_call as $key => $value) {
                $mog[$value] = $this->All_IJ_byID($value, $_SESSION['id']);
            }
            $data['get_user_post'] = $mog;
        }

        return $data;
    }

    public function daerah()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://dev.farizdotid.com/api/daerahindonesia/provinsi",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: 2e9af7cc-4b92-6ed5-ce93-600d36460b4a"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return json_decode($response);
        }
    }
    public function All_IJ_byID($tabel, $id)
    {
        $set = array('id_user' => $id);
        $ey = $this->db->get_where($tabel, $set)->result();
        return $ey;
    }
    public function all_IJ($tabel)
    {
        $cos = $this->db->get($tabel)->result();
        foreach ($cos as $key => $value) {
            $set = array('id' => $value->id_user);
            $ey = $this->db->get_where('user', $set)->result();
            foreach ($ey as $key1 => $value2) {
                $data[$key]['user'] = $value2;
            }
            $data[$key]['ide'] = $value;
        }
        return $data;
    }
}
