<?php

class Post{
    public function create_post($userid, $data){
        if(!empty($data['post'])){
            $post = addsLashes($data['post']);
        }else{

        }
    }
}