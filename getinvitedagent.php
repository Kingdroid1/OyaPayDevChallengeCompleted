<?php
    require_once 'include/dbconnect.php';
    set_time_limit(0);

    if(isset($_GET['businessname'])){
        $bizagents = $_GET['businessname'];        
    }else{
        $bizagents = '';
    }

    if($bizagents == '') {
        //Get all agents
        $agents=array();
        $getAgents = "SELECT * FROM agent_account";
        $result = mysqli_query($conn, $getAgents);
        $count=mysqli_num_rows($result);

        if($count == 0){
            $status = 'No agent listed.';
        }else{
            while ($row = mysqli_fetch_array($result)) {
                $agents[]=array('name'=>$row['fullname'],'phonenumber'=>$row['phonenumber'],'businessname'=>$row['businessname']);
            }
            $status = $count.' agents listed';
        }
    }else{
        //Get agents with business name
        $agents=array();
        $getAgents = "SELECT * FROM agent_account WHERE businessname LIKE '%{$bizagents}%'";
        $result = mysqli_query($conn, $getAgents);
        $count=mysqli_num_rows($result);

        if($count == 0){
            $status = 'No agent with business name listed.';
        }else{
            while ($row = mysqli_fetch_array($result)) {
                $agents[]=array('name'=>$row['fullname'],'phonenumber'=>$row['phonenumber'],'businessname'=>$row['businessname']);
            }
            $status = $count.' agent with business name listed';
        }
    }

    $respond=array('status'=>$status,'agents'=>$agents);
    echo json_encode($respond);
?>