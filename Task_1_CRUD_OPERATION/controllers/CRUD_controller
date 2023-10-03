<?php
class Second extends CI_Controller
{
    public function login()
    {
        $mes['msg']='welcome user!!!!!!!';
        $this->load->view('loginpage.php',$mes);
    }
    public function dbdata()
    {
        echo "inserted";
        extract($_POST);
        /*
        $data=[
        $name=$this->input->post('name'),
        $email=$this->input->post('email'),
        $password=$this->input->post('password')];*/
        $data=[
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        ];

        $this->load->model('Logindata');
        $result=$this->Logindata->insertdata($data);
        if($result)
        {
            // $status['st']='Registered Succesfully';
            //$this->load->view('loginpage');
            redirect(base_url('index.php/second/login'));
           

        }
        else{
            echo "error";
        }

    }
    public function fetchdata()
        {

            $this->load->model('Logindata');
            $result['table']=$this->Logindata->getdata();
            $this->load->view('displaydata',$result);
             
        }

    public function argdisplay($id,$name,$loc)
    {
        echo $id.' '.$name.' '.$loc;

    }
    public function argdisplay2()
    {
        $seg1=$this->uri->segment(1);
        $seg2=$this->uri->segment(2);
        $seg3=$this->uri->segment(3);
        $seg4=$this->uri->segment(4);
        $seg5=$this->uri->segment(5);
        $seg6=$this->uri->segment(6);
        $seg7=$this->uri->segment(7);
        echo $seg1.' '.$seg2.' '.$seg3.' '.$seg4.' '.$seg5.' '.$seg6.' '.$seg7;

    }
    public function argdisplay3()
    {
        $seg1=$this->uri->segment(1);
        $seg2=$this->uri->segment(2);
        $seg3=$this->uri->segment(3);
        $seg4=$this->uri->segment(4);
        $seg5=$this->uri->segment(5);
        $seg6=$this->uri->segment(6);
        $seg7=$this->uri->segment(7);
        //echo $seg1.' '.$seg2.' '.$seg3.' '.$seg4.' '.$seg5.' '.$seg6.' '.$seg7;
        //$para['segments']=array($seg1,$seg2,$seg3,$seg4,$seg5,$seg6,$seg7);
        //$this->load->view('argumentshtml.php',$para);
        $para=array($seg1,$seg2,$seg3,$seg4,$seg5,$seg6,$seg7);
        $this->load->model('Logindata');
        $this->Logindata->receivesegment($para);  
    }   
    public function edit($sno)
    {
        $this->load->model('Logindata');
        $result['data']=$this->Logindata->editdata($sno);
        $this->load->view('displaydata',$result);
    }
    public function update()
    {
        
        extract($_POST);
        $sno=$sno;
        $data=[
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        ];
        $this->load->model('Logindata');
        $res=$this->Logindata->updatedata($sno,$data);
        if($res)
        {
        $this->fetchdata();
        }
        else{
            echo "failed";
        }
    }

}
