<?php  
class Ajout extends CI_Controller{
    public function ajouter(){
        $this->load->view("Ajout_objet");
    }

    public function insert(){
        try {
        $this->load->model("Object_model");

        $md =  new Object_model();
        $path ='';
        $config['upload_path'] = "./data/img/objet";
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_size'] = 500000;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['file_name'] = ($md->getPhotosCurrentIndex()+1).".png";

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

        $this->Object_model->insertObject($id,$nom,$prix,$path);
        // redirect('home/clientHome');
        }catch (Exception $e){
            echo  $e;
        }
    }
}