<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <style>
        table { border-collapse: collapse; width: 300px; text-align: center; font-family: Arial; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        th { background-color: #f4f4f4; color: #333; }
        .today { background-color: #ffeb3b; font-weight: bold; }
    </style>
</head>
<body>
    <div id="calendar"></div>

    <script>
        const date = new Date();
        const y = date.getFullYear();
        const m = date.getMonth();

        const firstDay = new Date(y, m, 1).getDay();
        const lastDate = new Date(y, m + 1, 0).getDate();

        let table = `<h3>${y}년 ${m + 1}월</h3><table><tr>`;
        const days = ['일', '월', '화', '수', '목', '금', '토'];
        days.forEach(day => table += `<th>${day}</th>`);
        table += '</tr><tr>';

        for (let i = 0; i < firstDay; i++) table += '<td></td>';
        
        for (let d = 1; d <= lastDate; d++) {
            if ((firstDay + d - 1) % 7 === 0 && d !== 1) table += '</tr><tr>';
            const isToday = d === date.getDate() ? 'class="today"' : '';
            table += `<td ${isToday}>${d}</td>`;
        }

        table += '</tr></table>';
        document.getElementById('calendar').innerHTML = table;
    </script>
</body>
</html>