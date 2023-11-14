<!DOCTYPE html>
<title>Bài Kiểm Tra</title>
<header align = "center" style="font-size: 25px">---<b> Bài Kiểm Tra </b>---</header> <br>

<body>
    <table align = "center" >
        <tr><td><b>Họ và tên: Bùi Thị Hồng Hoa</b></td></tr>
        <tr><td><b>STT: 11</b></td></tr>
        <tr><td><b>MSV: 21D19114</b></td></tr>
    </table>
    
    <hr>
  
    <fieldset>
        <legend align = "center"><b> Trắc nghiệm </b></legend>
        1. Kết quả được in ra màn hình là: <br>Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 ) <br>
        2. A <br>
        3. A <br>
        4. A <br>
        5. B <br>
    </fieldset>

    <br>
    
    <fieldset>
        <legend align = "center"><b> Bài 1 </b>:</legend>
        <b>Output:</b> <br>

        <?php 
        function generateFibonacci($n){
            $fibonacci = array(0,1);
            if ($n == 1 || $n ==2){
                return false;

            }
            for ($i=2; $i<$n; $i++){
                $fibonacci[$i]=$fibonacci[$i - 1] + $fibonacci[$i - 2];
            }
            return $fibonacci;
             
        }

        $n = 10;
        $a =generateFibonacci($n);
        echo "Dãy số Fibonacci đầu tiên có  $n phần tử: <br>";
            foreach ($a as $i) {
                echo $i . " ";
            }
        ?>

        <br>
        
    </fieldset>
    
    <br>

    <fieldset >
        <legend align = "center"><b> Bài 2: </b></legend>
        <b>Output:</b> <br>
        <?php 
            $hocSinh = [
              [
                "id" => 1,
                "name" => "HoaBui",
                "age"=> 20,
                "grade" => 80,
              ],
              [
                "id" => 2,
                "name" => "Hoapham",
                "age"=> 20,
                "grade" => 100,
              ],
              [
                "id" => 5,
                "name" => "HoaLinh",
                "age"=> 20,
                "grade" => 200,
              ],

            ];
           
            echo " Thông tin của tất cả học sinh:<br>";
            foreach ($hocSinh as $hs) {
                echo "ID: " . $hs['id'] . ", ";
                echo "Tên: " . $hs['name'] . ", ";
                echo "Tuổi: " . $hs['age'] . ", ";
                echo "Điểm: " . $hs['grade'] . "";
                echo "<br>";
            }
             echo "----------<br>";
            function timDiemCao($hocSinh) {
                $diemCaoNhat = 0;
                $hocSinhDiemCao = null;
                foreach ($hocSinh as $hs) {
                    if ($hs["grade"] > $diemCaoNhat) {
                        $diemCaoNhat = $hs["grade"];
                        $hocSinhDiemCao = $hs;
                    }
                }
                return $hocSinhDiemCao;
            }
            
            
            $hocSinhCaoNhat = timDiemCao($hocSinh);

            echo "Học sinh có điểm cao nhất:<br>";
            echo "ID: " . $hocSinhCaoNhat['id'] . ", Name: " . $hocSinhCaoNhat['name'] . ", Age: " . $hocSinhCaoNhat['age'] . ", Grade: " . $hocSinhCaoNhat['grade'] . "<br>";

        ?>

        <br>
        

    </fieldset>
  
    
   
</body