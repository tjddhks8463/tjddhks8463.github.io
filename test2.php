<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<body>

    <h2>[Quest] 소환할 숫자의 개수를 입력하세요</h2>
    
    <form method="post">
        <input type="number" name="count" min="1" max="100" placeholder="개수 입력 (1~100)" required>
        <button type="submit">랜덤 숫자 소환!</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST['count']; 
        $arr = [];
        $max = -1;

        echo "<h3>결과 리포트: $n 개의 숫자를 생성했습니다.</h3>";

        echo "<div style='background: #f0f0f0; padding: 10px; margin-bottom: 10px;'>";
        echo "<strong>생성된 숫자:</strong><br>";
        for ($i = 0; $i < $n; $i++) {
            $arr[$i] = rand(10, 100);
            echo $arr[$i] . " ";
            
            // 최댓값 스캔 중...
            if ($arr[$i] > $max) {
                $max = $arr[$i];
            }
        }
        echo "<br><br><strong>탐지된 최댓값:</strong> $max";
        echo "</div>";

        sort($arr);

        echo "<div style='background: #e0f7fa; padding: 10px;'>";
        echo "<strong>오름차순 정렬 완료:</strong><br>";
        foreach ($arr as $value) {
            echo $value . " ";
        }
        echo "</div>";
      
    }
    ?>
</body>
</html>
