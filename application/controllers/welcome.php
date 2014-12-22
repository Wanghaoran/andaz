<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

    public function sales(){
        $this->load->view('sales');
    }

    public function start(){
        $this->load->view('start');
    }

    public function result(){
        //生成奖品

        /*
         * 奖品数量 一共 35 份
         *
         * 0  未中奖
         * 1  安达士套房周末一晚入住           数量：1
         * 2  双人份“炫”吧派对套餐            数量：2
         * 3  双人份下午茶                   数量：2
         * 4  杏仁姜饼人                     数量：6
         * 5  牛轧糖                        数量：6
         * 6  巧克力酥饼/蔓越莓饼干           数量：6
         * 7  肉桂星星饼干                   数量：6
         * 8  圣诞球甜品                     数量：6

         *
         *
         */

        $this -> load -> model('gift_model');

        $data = array();
        $data['gift'] = 7;

        if($data['gift'] != 0){

            //纪录中奖
            $this -> gift_model -> writegift($data['gift'], $_SERVER['HTTP_USER_AGENT']);

        }


        $this->load->view('result', $data);
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */