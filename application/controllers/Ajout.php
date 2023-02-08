<?php  
class Ajout extends CI_Controller{
    public function ajouter(){
        $this->load->view("Ajout_objet");
    }

    public function insert(){
        $this->load->model("Object_model");

        $path ='';
        $config['upload_path'] = './data/img/objet';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 50000;
        $config['max_width'] = 0;
        $config['max_height'] = 0;

        $this->load->library('upload', $config);

        if(! $this->upload->do_upload('image')){
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            $path =$data['upload_data']['orig_name'];
            echo $path;
            var_dump($data);
        }

        $id = $this->session->user['id'];
        $nom = $this->input->post('nom');
        $prix = $this->input->post('prix');
        $image = $this->input->post('image');
        
        $this->Object_model->insertObject($id,$nom,$prix,$path);
        // redirect('home/clientHome');
    }
}