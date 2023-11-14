<!DOCTYPE html>
<title>Bài Kiểm Tra 14.11 </title>
<header align = "center" style="font-size: 25px">---<b> Bài Kiểm Tra 14.11 </b>---</header> <br>

<body>
    <table align = "center" >
        <tr><td><b>Họ và tên: Bùi Thị Hồng Hoa</b></td></tr>
        <tr><td><b>STT: 11</b></td></tr>
        <tr><td><b>MSV: 21D191144</b></td></tr>
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

        <b>Đề bài:</b> <br> <i>Viết một chương trình PHP để hiển thị dãy số Fibonacci. Yêu cầu:<br>
        <ul>
            <li>Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.</li>
            <br>
            
            <li>Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử.</li>
        </ul></i>


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
        echo "<i>Dãy số Fibonacci đầu tiên có  $n phần tử: <br></i>";
            foreach ($a as $i) {
                echo $i . " ";
            }
        ?>

        <br>
        
    </fieldset>
    
    <br>

    <fieldset >
        <legend align = "center"><b> Bài 2: </b></legend>
        <b>Đề bài:</b><br>
        <i>
        Viết một ứng dụng PHP để quản lý thông tin về học sinh trong một lớp học sử dụng mảng kết hợp. Yêu cầu:
        <ul>
            <li>Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade.</li>
            <li>Hiển thị thông tin của tất cả học sinh trong mảng.</li>
            <li>Viết hàm để tìm học sinh có điểm cao nhất (grade).</li>
        </ul>
        </i>

        <b>Output:</b> <br> <br>
        <?php 
        // Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade.
            $hocSinh = [
              [
                "id" => 10,
                "name" => "Nguyễn Thị Hiên",
                "age"=> 20,
                "grade" => 90,
              ],
              [
                "id" => 11,
                "name" => "Bùi Thị Hồng Hoa",
                "age"=> 20,
                "grade" => 91,
              ],
              [
                "id" => 12,
                "name" => "Nguyễn Ngọc Huy",
                "age"=> 20,
                "grade" => 92,
              ],
              [
                "id" => 13,
                "name" => "Nguyễn Thị Mỹ Huyền",
                "age"=> 20,
                "grade" => 93,
              ],
              [
                "id" => 31,
                "name" => "Thân Quang Trung",
                "age"=> 20,
                "grade" => 94,
              ],

            ];

        //Hiển thị thông tin của tất cả học sinh trong mảng.
            echo " <i>Thông tin của tất cả học sinh: </i><br>";
            foreach ($hocSinh as $hs) {
                echo "-<br>";
                echo "ID: " . $hs["id"] . "<br>";
                echo "Tên: " . $hs["name"] . "<br>";
                echo "Tuổi: " . $hs["age"] . "<br>";
                echo "Điểm: " . $hs["grade"] . "";
                echo "<br>";
            }
             echo "<br>----------<br><br>";

        // Viết hàm để tìm học sinh có điểm cao nhất (grade).
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
            echo "<i>Học sinh có điểm cao nhất:<br></i>-<br>";
            echo "ID: " . $hocSinhCaoNhat["id"] . "<br>";
            echo "Tên: " . $hocSinhCaoNhat["name"] . "<br> " ;
            echo "Tuổi: " . $hocSinhCaoNhat["age"] . "<br> " ;
            echo "Điểm: " . $hocSinhCaoNhat["grade"] . "<br>" ;

        ?>
        <br>
    </fieldset>
</body