<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            .container {
                padding: 30px 200px;
                text-align: center;
            }
            .title {
                font-size: 0.7em !important;
                font-weight: normal;
            }

            .table-top {
              border: 1px solid #ccc;
              border-collapse: collapse;
              margin: 0;
              padding: 0;
              width: 100%;
              table-layout: fixed;
            }

            .table-top caption {
              font-size: 1.5em;
              font-weight: bold;
              margin: .5em 0 .75em;
            }

            .table-top tr {
              background-color: #f8f8f8;
              border: 1px solid #ddd;
              padding: .35em;
            }
            .header {
                background-color: #444;
                color: #FFF;
                height: 35px;
            }
            .table-top th,
            .table-top td {
              padding: .4em;
              text-align: center;
            }

            .table-top th {
              font-size: .85em;
              letter-spacing: .1em;
              text-transform: uppercase;
            }

            .table {
              border: 1px solid #ccc;
              border-collapse: collapse;
              margin: 0;
              padding: 0;
              width: 100%;
              table-layout: fixed;
            }

            .table caption {
              font-size: 1.5em;
              font-weight: bold;
              margin: .5em 0 .75em;
            }

            .table tr {
              background-color: #f8f8f8;
              border: 1px solid #ddd;
              padding: .35em;
            }

            .table th,
            .table td {
              padding: .5em;
              text-align: center;
            }

            .table th {
              font-size: .85em;
              letter-spacing: .1em;
              text-transform: uppercase;
            }

            .table-summary {
              border: 1px solid #ccc;
              border-collapse: collapse;
              margin: 0;
              padding: 0;
              width: 100%;
              table-layout: fixed;
            }

            .table-summary caption {
              font-size: 1.5em;
              font-weight: bold;
              margin: .5em 0 .75em;
            }

            .table-summary tr {
              background-color: #f8f8f8;
              border: 1px solid #ddd;
              padding: .35em;
            }
            .table-summary th,
            .table-summary td {
              padding: .5em;
              text-align: center;
            }

            .table-summary th {
              font-size: .85em;
              letter-spacing: .1em;
              text-transform: uppercase;
            }

            input {
              position: relative;
              display: inline-block;
              box-sizing: border-box;
            }
            .input {
              background: #fff;
              width: 85px;
              height: 30px;
              border: 1px solid #DDD;
              border-radius: 0px 10px 10px 0px;
              font-size: 15px;
              padding: 2px 10px;
            }
            .prefix {
              left: 5px;
              width: 45px;
              height: 30px;
              border: none;
              border: 1px solid #6699cc;
              border-radius: 10px 0px 0px 10px;
              font-size: 15px;
              background-color: #6699cc;
              color: #FFF;
              font-weight: bold;
              padding: 2px 0px 2px 9px;
            }
            .result {
              background: #fff;
              width: 75px;
              height: 30px;
              border-radius: 10px;
              border: 0px;
              font-size: 16px;
              padding: 2px 2px;
              background-color: transparent;
              color: #336699;
              font-weight: bold;
              text-align: right;
            }

            .result_summary {
              background: #fff;
              width: 75px;
              height: 30px;
              border-radius: 10px;
              border: 0px;
              font-size: 16px;
              padding: 2px 2px;
              background-color: transparent;
              color: #336699;
              font-weight: bold;
              text-align: center;
            }

            .green {
                color: #32a162 !important;
            }

            .red {
                color: #b53535 !important;
            }

            @media screen and (max-width: 600px) {
              
              .container {
                padding: 10px 5px;
              }
              .table {
                border: 0;
              }

              .table caption {
                font-size: 1.3em;
              }
              
              .table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
              }
              
              .table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
              }
              
              .table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: right;
              }
              
              .table td::before {
                /*
                * aria-label has no advantage, it won't be read inside a table
                content: attr(aria-label);
                */
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
              }
              
              .table td:last-child {
                border-bottom: 0;
              }
            }
            body {
                font-family: "Open Sans", sans-serif;
                line-height: 1.25;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <table class="table-top">
          <caption>
            Kalkulator ASB
            <span class="title"><br>by <a href="https://facebook.com/asbahri" target="_blank">Ahmad Saiful Bahri</a></span>
          </caption>
          <thead>
            <tr>
              <th class="header" scope="col">Bulan</th>
              <th class="header" scope="col">Baki Minimum</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Bulan">Januari</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="number" class="input" id="month_1" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Febuari</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="number" class="input" id="month_2" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">March</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="number" class="input" id="month_3" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">April</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="number" class="input" id="month_4" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Mei</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="number" class="input" id="month_5" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Jun</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="number" class="input" id="month_6" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Julai</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="text" class="input" id="month_7" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Ogos</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="number" class="input" id="month_8" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">September</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="number" class="input" id="month_9" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Oktober</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="number" class="input" id="month_10" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">November</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="number" class="input" id="month_11" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Disember</td>
              <td data-label="Baki Minimum">
                <input type="text" class="prefix" class="input" value="RM" readonly>
                <input type="number" class="input" id="month_12" value="" placeholder="0.00" onkeyup="calculate()">
              </td>
            </tr>
          </tbody>
        </table>

        <table class="table-top">
          <caption>
            Hasil Pengiraan (RM)
          </caption>
          <thead>
            <tr>
              <th class="header" scope="col">Bulan</th>
              <th class="header" scope="col" style="text-align: right;">2022</th>
              <th class="header" scope="col" style="text-align: right;">2023</th>
              <th class="header" scope="col" style="text-align: right;">(+/-)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Bulan">Januari</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_1_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_1_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_1_diff" value="-0.00" readonly>
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Febuari</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_2_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_2_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_2_diff" value="-0.00" readonly>
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">March</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_3_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_3_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_3_diff" value="-0.00" readonly>
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">April</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_4_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_4_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_4_diff" value="-0.00" readonly>
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Mei</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_5_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_5_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_5_diff" value="-0.00" readonly>
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Jun</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_6_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_6_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_6_diff" value="-0.00" readonly>
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Julai</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_7_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_7_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_7_diff" value="-0.00" readonly>
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Ogos</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_8_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_8_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_8_diff" value="-0.00" readonly>
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">September</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_9_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_9_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_9_diff" value="-0.00" readonly>
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Oktober</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_10_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_10_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_10_diff" value="-0.00" readonly>
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">November</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_11_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_11_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_11_diff" value="-0.00" readonly>
              </td>
            </tr>
            <tr>
              <td data-label="Bulan">Disember</td>
              <td data-label="2022" style="text-align:right;">
                <input type="text" class="result" id="result_12_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="text-align:right;">
                <input type="text" class="result" id="result_12_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="text-align:right;">
                <input type="text" class="result" id="result_12_diff" value="-0.00" readonly>
              </td>
            </tr>
          </tbody>
        </table>

        <table class="table-summary">
          <caption>
            Keseluruhan (RM)
          </caption>
          <thead>
            <tr>
              <th class="header" scope="col" style="background-color: #336699; text-align: center;"></th>
              <th class="header" scope="col" style="background-color: #336699; text-align: center;">2022</th>
              <th class="header" scope="col" style="background-color: #336699; text-align: center;">2023</th>
              <th class="header" scope="col" style="background-color: #336699; text-align: center;">(+/-)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="" style="background-color: #e3f2fa; text-align:center;">
                Jumlah
              </td>
              <td data-label="2022" style="background-color: #e3f2fa; text-align:center;">
                <input type="text" class="result_summary" id="result_summary_1" value="0.00" readonly>
              </td>
              <td data-label="2023" style="background-color: #e3f2fa; text-align:center;">
                <input type="text" class="result_summary" id="result_summary_2" value="0.00" readonly>
              </td>
              <td data-label="Perbezaan" style="background-color: #e3f2fa; text-align:center;">
                <input type="text" class="result_summary" id="result_summary_diff" value="-0.00" readonly>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="footer">
            <br>
            By <a href="https://facebook.com/asbahri" target="_blank">Ahmad Saiful Bahri</a><br>
            Source code: <a href="https://github.com/epool86/asb" target="_blank">My Github</a>

            <br><br>
        </div>
        </div>

        <script type="text/javascript">
            
            function calculate(){

                var data = [];
                var total_2022 = 0;
                var total_2023 = 0;

                for(i = 1; i <= 12; i++){

                    var val = document.getElementById('month_'+i).value ? document.getElementById('month_'+i).value : 0;

                    if(isNaN(val)){
                        val = 0;
                    }

                    bonus_dividen_2022 = 0;
                    normal_dividen_2022 = 0;
                    total_dividen_2022 = 0;

                    total_dividen_2023 = 0;

                    //calculate 2022
                    if(val <= 30000){
                        total_dividen_2022 = val * 5.1 / 100 / 12;
                    } else {
                        bonus_dividen_2022 = 30000 * 5.1 / 100 / 12;
                        normal_dividen_2022 = (val - 30000) * 4.6 / 100 / 12;
                        total_dividen_2022 = bonus_dividen_2022 + normal_dividen_2022; 
                    }
                    total_2022 = (total_2022 * 1) + total_dividen_2022 * 1;

                    //calculate 2023
                    total_dividen_2023 = val * 5.25 / 100 / 12;
                    total_2023 = (total_2023 * 1) + total_dividen_2023 * 1;

                    document.getElementById("result_"+i+"_1").value = total_dividen_2022.toFixed(2);
                    document.getElementById("result_"+i+"_2").value = total_dividen_2023.toFixed(2);

                    different = total_dividen_2023.toFixed(2) - total_dividen_2022.toFixed(2);

                    if(different >= 0){
                        document.getElementById("result_"+i+"_diff").value = "+"+different.toFixed(2);
                        document.getElementById("result_"+i+"_diff").classList.remove("red");
                        document.getElementById("result_"+i+"_diff").classList.add("green");
                    } else {
                        document.getElementById("result_"+i+"_diff").value = "-"+different.toFixed(2);
                        document.getElementById("result_"+i+"_diff").classList.remove("green");
                        document.getElementById("result_"+i+"_diff").classList.add("red");
                    }
                    

                }

                console.log(total_2022);

                document.getElementById("result_summary_1").value = (total_2022 * 1).toFixed(2);
                document.getElementById("result_summary_2").value = (total_2023 * 1).toFixed(2);

                different =  (total_2023*1).toFixed(2) - (total_2022*1).toFixed(2);

                if(different >= 0){
                    document.getElementById("result_summary_diff").value = "+"+different.toFixed(2);
                    document.getElementById("result_summary_diff").classList.remove("red");
                    document.getElementById("result_summary_diff").classList.add("green");
                } else {
                    document.getElementById("result_summary_diff").value = "-"+different.toFixed(2);
                    document.getElementById("result_summary_diff").classList.remove("green");
                    document.getElementById("result_summary_diff").classList.add("red");
                }

            }

        </script>
    </body>
</html>
