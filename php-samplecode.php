<?php $start_time = microtime(true); ?>
<html>
    <head>
        <title>eSports Player Earnings</title>
        <h1>Top 10 Highest Overall Earnings: Players in Esports</h1>
    </head>
    <body>
        <?php
            date_default_timezone_set("Asia/Manila");
            $timeDate = date("m/d/y h:i:s A");
            echo "As of: " . $timeDate . "<br/> <br/>";

            $players = array();
            $players["Johan 'N0tail' Sundstein"] = 7172436.83;
            $players["Jesse 'JerAx' Vainikka"] = 6486400.02;
            $players["Anathan 'ana' Pham"] = 6004411.96;
            $players["Sébastien 'Ceb' Debs"] = 5813909.40;
            $players["Topias 'Topson' Taavitsainen"] = 5690417.57;
            $players["Kuro 'KuroKy' Takhasomi"] = 5229224.39;
            $players["Amer 'Miracle-' Al-Barkawi"] = 4833885.26;
            $players["Ivan 'MinD_ContRoL' Ivanov"] = 4614959.74;
            $players["Lasse 'Matumbaman' Urpalainen"] = 4526049.04;
            $players["Maroun 'GH' Merhej"] = 4229254.27;
            $order = 1;

            foreach($players as $player => $salary) {
                $salary = number_format($salary, 2);
                echo $order . ". " . $player . " = " . "$" . $salary . "<br/>";
                $order ++;
            }

            $end_time = microtime(true);
            $total_time = number_format($end_time - $start_time, 10);
            echo "<br/>" . "Page generated in " . $total_time . " seconds";
        ?>
    </body>
</html>