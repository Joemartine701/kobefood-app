<?php
// session_start();
// $_SESSION['session']=session_id();

// $host ="localhost";
// $username = "root";
// $password = "";
// $databasename = 'famwb';
// $connect = mysqli_connect($host,$username,$password);
// $db=mysqli_select_db($databasename);

// function total_online(){
//     $current_time= time();
//     $timeout =$current_time- (60);

//     $session_exist= mysqli_query("SELECT session FROM total_visitors WHERE session='".$_SESSION['session']."'");
//     $session_check= mysqli_num_rows($session_exist);

//     if($session_check== 0 && $_SESSION['session']!=""){
//               mysqli_query("INSERT INTO total_visitors values ('','".$_SESSION['session']."','".$current_time."')");
//     }else{
//         $sql=mysqli_query("UPDATE total_visitors SET time='".time()."' WHERE session='".$_SESSION['session']."'");
//     }
//     $select_total =mysqli_query("SELECT * FROM total_visitors WHERE time>='$timeout'");
//     $total_online_visitors =mysqli_num_rows($select_total);
//     return $total_online_visitors;
// }

// if(isset($_POST['get_online_visitor'])){
//     $total_online = total_online();
//     echo $total_online;
//     exit;
// }
//   // get total online
//   $total_online_visitors = total_online();
    
//   // get Total visitors
//   $total_visitors =mysqli_query("SELECT * FROM total_visitors");
//   $total_visitors =mysqli_num_rows($total_visitors);
  
//   // Insert PageView and select total view
//   $user_ip = $_SERVER['REMOTE_ADDR'];
//   $page = $_SERVER['PHP_SELF'];
//   mysqli_query("insert into pageviews values ('','$page','$user_ip')");
//   $pageviews = mysqli_query("SELECT * FROM pageviews");
//   $total_pageviews = mysqli_num_rows($pageviews);
  





?>