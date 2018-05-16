
    <?php 


        
        function logout(){
            $this->session->session_destroy();
            redirect('c_home/index');
        }    
    ?>