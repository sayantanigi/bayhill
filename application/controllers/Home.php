<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mymodel');
    }
    public function index() {
        $data = array(
            'title' => 'Bay Hill Driving School',
            'page' => 'Home',
            'subpage' => 'home',
        );
        $this->load->view('header', $data);
        $this->load->view('home');
        $this->load->view('footer');
    }
    public function drivers_ed() {
        $data = array(
            'title' => 'Bay Hill Driving School',
            'page' => 'Driver\'s ED',
            'subpage' => 'driver\'s ED',
        );
        $this->load->view('header', $data);
        $this->load->view('frontend/drivers_ed');
        $this->load->view('footer');
    }
    public function student_form(){
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $course_id = $this->input->post('course_id');
        }
        $course_list = $this->db->query("SELECT * FROM courses WHERE status = '1' AND is_deleted = '1'")->result();
        $country_list = $this->db->query("SELECT * FROM countries WHERE flag = '1'")->result();
        $data = array(
            'title' => 'Bay Hill Driving School',
            'page' => 'Student Information',
            'subpage' => 'Student Information',
            'course_id' => $course_id,
            'course_list' => $course_list,
            'country_list' => $country_list
        );
        $this->load->view('header', $data);
        $this->load->view('frontend/student_registration');
        $this->load->view('footer');
    }
    public function student_form_store() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $user_data = array(
                'unique_code' => strtotime(date('Y-m-d h:i:s')),
                'user_type' => '1',
                'first_name' => $this->input->post('first_name'),
                'middle_name' => $this->input->post('middle_name'),
                'last_name' => $this->input->post('last_name'),
                'username' => $this->input->post('username'),
                'dob' => $this->input->post('dob'),
                'gender' => $this->input->post('gender'),
                'email' => $this->input->post('email_adrs'),
                'phone' => $this->input->post('phone_no'),
                'password' => base64_encode($this->input->post('password')),
                'address' => $this->input->post('address'),
                'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'zipcode' => $this->input->post('zip_code'),
                'status' => '0',
                'email_verify_status' => '0',
                'created_at' => date('Y-m-d h:i:s')
            );
            $this->db->insert('users', $user_data);
            $user_id = $this->db->insert_id();
            $mailing_data = array(
                'user_id' => $user_id,
                'first_name' => $this->input->post('first_name'),
                'middle_name' => $this->input->post('middle_name'),
                'last_name' => $this->input->post('last_name'),
                'phone_no' => $this->input->post('phone_no'),
                'address' => $this->input->post('address'),
                'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'zip_code' => $this->input->post('zip_code')
            );
            $this->db->insert('mailing_address', $mailing_data);
            $mailing_id = $this->db->insert_id();
            if($this->input->post('address_toggle') === '1'){
                $billing_data = array(
                    'mailing_id' => $mailing_id,
                    'bfirst_name' => $this->input->post('bfirst_name'),
                    'bmiddle_name' => $this->input->post('bmiddle_name'),
                    'blast_name' => $this->input->post('blast_name'),
                    'bphone_no' => $this->input->post('bphone_no'),
                    'baddress' => $this->input->post('baddress'),
                    'bcountry' => $this->input->post('bcountry'),
                    'bstate' => $this->input->post('bstate'),
                    'bcity' => $this->input->post('bcity'),
                    'bzip_code' => $this->input->post('bzip_code')
                );
            }
            $this->db->insert('billing_address', $billing_data);
            redirect('booking_slot');
        }
    }
    public function courses($pincode = false){
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $pincode = $this->input->post('pincode');
        }
        if(!empty($pincode)){
            $course_list = $this->db->query("SELECT * FROM courses WHERE pincode = '".$pincode."' AND status = '1' AND is_deleted = '1'")->result();
        } else {
            $course_list = $this->db->query("SELECT * FROM courses WHERE status = '1' AND is_deleted = '1'")->result();
        }
        $data = array(
            'title' => 'Bay Hill Driving School',
            'page' => 'Courses',
            'subpage' => 'Courses',
            'pincode' => $pincode,
            'course_list' => $course_list
        );
        $this->load->view('header', $data);
        $this->load->view('frontend/courses');
        $this->load->view('footer');
    }
    public function search_course() {
        if(!empty($_POST['pincode'])) {
            $course_list = $this->db->query("SELECT * FROM courses WHERE pincode = '".$_POST['pincode']."' AND status = '1' AND is_deleted = '1'")->result();
        } else {
            $course_list = $this->db->query("SELECT * FROM courses WHERE status = '1' AND is_deleted = '1'")->result();
        }
        if(!empty($course_list)){
            foreach ($course_list as $course) {
                $decodedContent = htmlspecialchars_decode($course->course_description);
                $cleanedContent = str_replace(['<ul>', '</ul>'], '', $decodedContent); ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp"> 
                    <div class="package-card">
                        <div class="package-card__head">
                            <div class="package-card__head__item">
                                <span class="package-card__head__item__price"> <sub>$</sub><?= $course->course_price; ?></span>
                                <div class="package-card__head__item__shape__one">
                                    <svg width="90" height="95" viewBox="0 0 90 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M90 -0.000350952L0 69.6066L90 94.9996V-0.000350952Z" fill="" fill-opacity="0.06" />
                                    </svg>
                                </div>
                                <div class="package-card__head__item__shape__two">
                                    <svg width="60" height="64" viewBox="0 0 60 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.789585 63.2843L59.4571 16.7158L0.00060816 0.747339L0.789585 63.2843Z" fill="" fill-opacity="0.06" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="package-card__body">
                            <h3 class="package-card__body__title"><?= $course->course_name; ?></h3>
                            <div class="pt-3">
                                <h5 class="h6 text-center mb-3 fw-bold text-primary">This Package Includes  </h5>
                                <ul class="listBoxcourse"><?= $cleanedContent; ?></ul>
                            </div>
                            <form method="POST" action="<?= base_url() ?>student_form" class="package-card__body__btn text-center">
                                <input type="hidden" name="course_id" value="<?= $course->id?>">
                                <button type="submit" class="drivschol-btn w-100">Select Package</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }
        } else {
            echo '<div class="col-lg-12 col-md-12 wow fadeInUp">No data found related to '.$_POST['pincode'].' zipcode.</div>';
        }
    }
    public function states_by_country() {
        $country_id = $this->input->post('country_id');
        $state_list = $this->db->query("SELECT * FROM states WHERE country_id = '".$country_id."'")->result();
        if(!empty($state_list)) {
            $html = "<option value=''>Select State</option>";
            foreach ($state_list as $state) {
                $html .= "<option value='".$state->id."'>".ucfirst($state->name)."</option>";
            }
        } else {
            $html = '';
        }
        echo $html;
    }
    public function cities_by_state() {
        $state_id = $this->input->post('state_id');
        $cities_list = $this->db->query("SELECT * FROM cities WHERE state_id = '".$state_id."'")->result();
        if(!empty($cities_list)) {
            $html = "<option value=''>Select City</option>";
            foreach ($cities_list as $city) {
                $html .= "<option value='".$city->id."'>".ucfirst($city->name)."</option>";
            }
        } else {
            $html = '';
        }
        echo $html;
    }
    public function booking_slot(){
        $data = array(
            'title' => 'Bay Hill Driving School',
            'page' => 'Booking Slot',
            'subpage' => 'Booking Slot',
        );
        $this->load->view('header', $data);
        $this->load->view('frontend/booking_slot');
        $this->load->view('footer');
    }
    public function payment_details(){
        $data = array(
            'title' => 'Bay Hill Driving School',
            'page' => 'Payment Details',
            'subpage' => 'Payment Details',
        );
        $this->load->view('header', $data);
        $this->load->view('frontend/payment_details');
        $this->load->view('footer');
    }
    public function faq() {
        $data = array(
            'title' => 'Bay Hill Driving School',
            'page' => 'FAQ',
            'subpage' => 'faq',
        );
        $data['faq_list'] = $this->db->query("SELECT * FROM faq WHERE status = '1'")->result();
        $this->load->view('header', $data);
        $this->load->view('frontend/faq');
        $this->load->view('footer');
    }
    public function contact_us() {
        $data = array(
            'title' => 'Bay Hill Driving School',
            'page' => 'Contact',
            'subpage' => 'contact',
        );
        $this->load->view('header', $data);
        $this->load->view('frontend/contact_us');
        $this->load->view('footer');
    }
    public function contact_store() {
        if(!empty($_POST)) {
            $data=array(
                'firstname' =>$_POST['first_name'],
                'lastname' => $_POST['last_name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'message' => $_POST['message'],
                'created_at' => date('Y-m-d H:i:s'),
            );
            $result = $this->Mymodel->add('contact',$data);
            $insert_id = $this->db->insert_id();
            
            $get_setting = $this->db->query("SELECT * FROM settings WHERE settingId = '1'")->row();
            if(!empty($get_setting->smtp_host)) {
                if(!empty($insert_id)) {
                    $data=array(
                        'activationURL' => base_url() . "email-verification/" . urlencode(base64_encode($insert_id)),
                        'imagePath' => base_url().'uploads/logo/'.$get_setting->logo,
                    );
                    $message = "<body>
                        <div style='width:600px;margin: 0 auto;background: #fff; border: 1px solid #e6e6e6;'>
                            <div style='padding: 30px 30px 15px 30px;box-sizing: border-box;'>
                                <img src='cid:Logo' style='width:100px;float: right;margin-top: 0 auto;'>
                                <h3 style='padding-top:40px; line-height: 30px;'>Greetings from <span style='font-weight: 900;font-size: 35px, color: #2892ff; display: block;'>$get_setting->title</span></h3><p style='font-size: 15px;'>Hello Admin,</p>
                                <p style='font-size: 15px;'>Please find the below contact form details.</p>
                                <p style='font-size: 15px; padding: 0; margin: 0;'>First Name : ".$_POST['firstname']."</p>
                                <p style='font-size: 15px; padding: 0; margin: 0;'>Last Name : ".$_POST['lastname']."</p>
                                <p style='font-size: 15px; padding: 0; margin: 0;'>Email : ".$_POST['email']."</p>
                                <p style='font-size: 15px; padding: 0; margin: 0;'>Phone : ".$_POST['phone']."</p>
                                <p style='font-size: 15px; padding: 0; margin: 0;'>Message: ".$_POST['message']."</p>
                                <p style='font-size: 15px; padding: 0; margin: 18px 0 0 0;'>Thank you!</p>
                                <p style='font-size:20px;list-style: none;'>Sincerly</p>
                                <p style='list-style: none;'><b>$get_setting->title</b></p>
                                <p style='list-style:none;'><b>Visit us:</b> <span>$get_setting->address</span></p>
                                <p style='list-style:none'><b>Email us:</b> <span>$get_setting->email</span></p>
                            </div>
                            <table style='width: 100%;'>
                                <tr>
                                    <td style='height:30px;width:100%; background: #2892ff;padding: 10px 0px; font-size:13px; color: #fff; text-align: center;'>Copyright &copy; <?=date('Y')?> $get_setting->title. All rights reserved.</td>
                                </tr>
                            </table>
                        </div>
                    </body>";
                    require 'vendor/autoload.php';
                    $mail = new PHPMailer(true);
                    try {
                        $mail->CharSet = 'UTF-8';
                        $mail->SetFrom($get_setting->email, $get_setting->title);
                        $mail->AddAddress($_POST['email']);
                        $mail->IsHTML(true);
                        $mail->Subject = 'Verify Your Email Address From'. $get_setting->title;
                        $mail->AddEmbeddedImage('uploads/logo/'.$get_setting->logo, $get_setting->title);
                        $mail->Body = $message;
                        $mail->IsSMTP();
                        $mail->SMTPAuth = true;
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                        $mail->Host = $get_setting->smtp_host;
                        $mail->Port = $get_setting->smtp_port; //587 465
                        $mail->Username = $get_setting->smtp_email;
                        $mail->Password = $get_setting->smtp_pass;
                        if(!$mail->send()) {
                            $data = array('result' => 'success', 'data' => "Thank you for your message. Our team will contact you soon!");
                        } else {
                            $data = array('result' => 'success', 'data' => "Your message could not be sent. Please, try again later.");
                        }
                    } catch (Exception $e) {
                        $data = array('result' => 'success', 'data' => "Something went wrong. Please try again later!");
                    }
                }
            } else {
                $data = array('result' => 'success', 'data' => "Thank you for your message. Our team will contact you soon!");
            }
        }
        echo json_encode($data); exit;
    }
    public function checkusername() {
        $checkUserName = $this->db->query("SELECT * FROM users WHERE username LIKE '%".$this->input->post('username')."%'")->row();
        if(!empty($checkUserName)) {
            $data = array('result'=> 'error', 'data' => 'Username already exists');
        } else {
            $data = array('result'=> 'success', 'data' => 'Username is Available');
        }
        echo json_encode($data); exit;
    }
}