<!DOCTYPE html>
<html>
    <head>
    <title>VALIDASI</title>
    </head>
    <body>
        <?php
            function userValidasi($username){
                $smalVal = preg_match('/[a-z]/', $username);
                $ttkVal = preg_match('/[.]/', $username);
                $tptVal = strlen($username) == 8;
            
                if ($smalVal && $ttkVal && $tptVal) {
                    echo "Username Valid";
                } else {
                    echo "GAGAL";
                }
            }

            $username = "adzimqd.";
            userValidasi($username);
            echo "<br>";

            function passValidasi($password){
                $minVal = strlen($password) > 7;
                $kapVal = preg_match('/[A-Z]/', $password);
                $lowVal = preg_match('/[a-z]/', $password);
                $specVal = preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $password);
                
                if ($minVal && $kapVal && $lowVal && $specVal) {
                    echo "Password Valid";
                }else{
                    echo "GAGAL JUGA";
                }
            }
        
            $password = "ssDD56$%^";
            passValidasi($password);
        ?>
    </body>
</html>