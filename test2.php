<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<body>

<h2>Homework 3-3: Fibonacci</h2>
    <p>100 이하의 정수 n을 입력하면 n개의 피보나치 수열과 비례를 출력합니다.</p>

    <form method="post">
        <div class="input-group">
            <label for="n">n 입력 (1~100): </label>
            <input type="number" name="n" id="n" min="1" max="100" required>
            <input type="submit" value="출력">
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['n'])) {
        $n = (int)$_POST['n'];

        if ($n > 0 && $n <= 100) {
            echo "<table>";
            echo "<tr><th>i</th><th>f<sub>i</sub></th><th>f<sub>i+1</sub> / f<sub>i</sub></th></tr>";

            $fib = [1, 1];

            for ($i = 0; $i < $n; $i++) {
                if ($i >= 2) {
                    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
                }

                $current_f = $fib[$i];
                
                if ($i == 0) {
                    $next_f = 1;
                } else {
                    $next_f = $fib[$i] + $fib[$i - 1];
                }
                $ratio = $next_f / $current_f;

                echo "<tr>
                        <td>" . ($i + 1) . "</td>
                        <td>" . $current_f . "</td>
                        <td>" . (round($ratio, 6)) . "</td>
                      </tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>
