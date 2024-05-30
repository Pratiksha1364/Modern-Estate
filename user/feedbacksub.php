<?php
$rateings=$_POST['rating'];
$comment=$_POST['comment'];
$status=1;
$mail=$_SESSION['gmail'];
$que="SELECT * FROM login_table WHERE EMAIL='".$mail."' ";
$ans=mysqli_query($con,$que);
$fetchvap=mysqli_fetch_array($ans);
echo $fetchvap;
date_default_timezone_set("Asia/calcutta");
$dt=date('H.i.sa');
if(isset($_POST['sub']))
{
    $query="INSERT INTO feedback_table (LOGIN_ID,RATING,COMMENT,STATUS,DATE/TIME) VALUES('$fetchvap','$rateings','$comment','$status','$dt')";
    $res=mysqli_query($con,$query);
    $num=mysqli_num_rows($res);
    if(!res)
    {
        echo "SOMETHING WENT WRONG";
        if (!isset($_GET['reload'])) {
            echo '<meta http-equiv=Refresh content="0;url=user/feedback.php?reload=1">';
                }  
          
          }  
    
    else{
        echo "THANK YOU FOR YOUR FEEDBACK";
    }
}
?>