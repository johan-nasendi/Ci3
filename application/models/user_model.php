<?php
class user_model extends CI_Model
{
    private $_table = "user";

    public function login () {
        $post = $this->input->post();

        $this->db->where('email', $post['email'])
                    ->or_where('username',$post["email"]);
        $user = $this->db->get($this->_table)->row();

            if($user) {
                $isPasswordTrue = password_verify($post["password"], $user->password);
                $isAdmin =$user->role =="admin";
                if($isPasswordTrue && $isAdmin){ 
                   
                    $this->session->set_userdata(['user_logged' => $user]);
                    $this->_updateLastLogin($user->user_id);
                    return true;
                }
            }
            
        
            return false;
        }
    
        public function isNotLogin(){
            return $this->session->userdata('user_logged') === null;
        }
    
        private function _updateLastLogin($user_id){
            $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
            $this->db->query($sql);
        }
    
    }
           
 