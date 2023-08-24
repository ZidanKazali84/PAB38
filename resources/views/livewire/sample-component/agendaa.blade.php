<div class="calendar">
    <div><table>
        <caption>Agustus 2023</caption>
        <thead>
            <tr>
                <th>Minggu</th>
                <th>Senin</th>
                <th>Selasa</th>
                <th>Rabu</th>
                <th>Kamis</th>
                <th>Jumat</th>
                <th>Sabtu</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $daysInMonth = date('t'); // Jumlah hari dalam bulan ini
                $currentDay = 1;

                // Hitung hari pada minggu pertama yang merupakan hari sebelum tanggal 1
                $firstDayOfWeek = date('N', strtotime(date('Y-m-02')));
                for ($i = 1; $i <= 7; $i++) {
                    if ($i < $firstDayOfWeek) {
                        echo "<td></td>";
                    } else {
                        echo "<td>{$currentDay}</td>";
                        $currentDay++;
                    }
                }
                ?>
            </tr>
            <?php
            // Sisa hari dalam bulan
            $remainingDays = $daysInMonth - $currentDay + 1;

            while ($remainingDays > 0) {
                echo "<tr>";
                for ($i = 1; $i <= 7; $i++) {
                    if ($currentDay <= $daysInMonth) {
                        echo "<td>{$currentDay}</td>";
                        $currentDay++;
                    } else {
                        echo "<td></td>";
                    }
                    $remainingDays--;
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table></div>
</div>