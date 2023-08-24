<!-- resources/views/livewire/sample-component.blade.php -->
<div class="row">
    <div class="col-md-8">
        <div class="card ">
            <div class="card-header" style="background-color: rgb(58, 50, 50);color:rgba(248, 213, 17, 0.945);font-size:16pt; font-family:arial">
                <b>Informasi</b>
            </div>
            <div class="card-body " style="background-color:beige ">
                <div>

                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div>

                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col-md-4">
        <div class="card ">
            <div class="card-header" style="background-color: rgb(58, 50, 50);color:rgba(248, 213, 17, 0.945);font-size:16pt; font-family:arial">
                <b>Agenda</b> 
            </div>
            <div class="card-body " style="background-color:beige ">
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
            </div>
        </div>
    </div>
    
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card ">
            <div class="card-header" style="background-color: rgb(58, 50, 50);color:rgba(248, 213, 17, 0.945);font-size:16pt; font-family:arial">
                <b>Catatan</b>
            </div>
            <div class="card-body " style="background-color:beige ">
                <div>

                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card ">
            <div class="card-header" style="background-color: rgb(58, 50, 50);color:rgba(248, 213, 17, 0.945);font-size:16pt; font-family:arial">
                <b>Prestasi</b>
            </div>
            <div class="card-body " style="background-color:beige ">
                <div>

                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .calendar {
        text-align: center;
        font-size: 12px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 3px;
        border: 1px solid #696565;
        color: #b49402;
    }

    th {
        background-color: #ffd500;
        color: #000;
        font-weight: bold;
    }

    td {
        font-size: 16px;
        background-color: #ffffffcc;
        font-weight: bold;
    }

    caption {
        padding: 3px;
        font-size: 26px;
        font-weight: bold;
        margin-bottom: 5px;
        color:rgb(255, 217, 0);
        text-shadow:1.5pt 3px rgba(0, 0, 0, 0.589);
        background-color: rgba(0, 0, 0, 0.589)
    }

    .card {
        border: none;
    }

    .card-header {
        background-color: #000;
        color: #ffd500;
        font-size: 12px;
        font-family: cursive;
        text-shadow: 1pt 2px rgba(231, 139, 139, 0.363);
        border-bottom: 1px solid #000;
    }

    .card-body {
        padding: 5px;
    }
</style>
