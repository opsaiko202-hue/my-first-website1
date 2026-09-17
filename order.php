<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">

    <title>สั่งซื้อ | Moonlight Market</title>

    <style>

        body {
            margin: 0;
            font-family: Arial;
            background-color: #11101f;
            color: white;
        }



        .menu {
            background-color: #19172b;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: #ffd85c;
            font-size: 22px;
            font-weight: bold;
        }

        .menu a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
        }

        .menu a:hover {
            color: #ffd85c;
        }



        .box {
            background-color: #201d38;
            width: 400px;
            max-width: 80%;
            margin: 60px auto;
            padding: 35px;
            border-radius: 20px;
        }

        .box h1 {
            color: #ffd85c;
            text-align: center;
        }

        .box p {
            color: #c9c6d8;
        }


        select {
            width: 100%;
            padding: 13px;
            margin-top: 8px;
            border-radius: 10px;
            border: none;
        }

        input[type="number"] {
            width: 94%;
            padding: 13px;
            margin-top: 8px;
            border-radius: 10px;
            border: none;
        }



        .button {
            width: 100%;
            padding: 14px;
            margin-top: 20px;
            border: none;
            border-radius: 25px;
            background-color: #ffd85c;
            color: #17152b;
            font-weight: bold;
            cursor: pointer;
        }



        .result {
            background-color: #11101f;
            padding: 20px;
            margin-top: 25px;
            border-radius: 15px;
            text-align: center;
        }

        .result h2 {
            color: #ffd85c;
        }

        .total {
            color: #ffd85c;
            font-size: 24px;
            font-weight: bold;
        }


        .back {
            display: block;
            text-align: center;
            margin-top: 25px;
            color: #aaa7b9;
            text-decoration: none;
        }

        .back:hover {
            color: #ffd85c;
        }

    </style>

</head>

<body>



    <div class="menu">

        <div class="logo">
            ☾ Moonlight
        </div>

        <div>

            <a href="index.html">หน้าแรก</a>

            <a href="order.php">สั่งซื้อ</a>

        </div>

    </div>



    <div class="box">

        <h1>สั่งซื้อสินค้า ✦</h1>

        <p>
            เลือกสินค้าที่ต้องการและใส่จำนวน
        </p>


        <form method="post">

            <p>สินค้า</p>

            <select name="สินค้า">

                <option value="พวงกุญแจพระจันทร์">
                    Moon Keychain - 89 บาท
                </option>

                <option value="กระเป๋าลายดาว">
                    Star Bag - 199 บาท
                </option>

                <option value="หมวก Dream">
                    Dream Hat - 159 บาท
                </option>

            </select>


            <p>จำนวน</p>

            <input
                type="number"
                name="จำนวน"
                value="1"
                min="1"
            >


            <input
                class="button"
                type="submit"
                name="ซื้อ"
                value="ยืนยันการสั่งซื้อ"
            >

        </form>


        <?php

        if (isset($_POST["ซื้อ"])) {

            $สินค้า = $_POST["สินค้า"];

            $จำนวน = $_POST["จำนวน"];


            if ($สินค้า == "พวงกุญแจพระจันทร์") {

                $ราคา = 89;

            }

            if ($สินค้า == "กระเป๋าลายดาว") {

                $ราคา = 199;

            }

            if ($สินค้า == "หมวก Dream") {

                $ราคา = 159;

            }


            $รวม = $ราคา * $จำนวน;


            echo "<div class='result'>";

            echo "<h2>สั่งซื้อสำเร็จ ✓</h2>";

            echo "สินค้า: " . $สินค้า . "<br><br>";

            echo "จำนวน: " . $จำนวน . " ชิ้น";

            echo "<p class='total'>";

            echo $รวม . " บาท";

            echo "</p>";

            echo "</div>";

        }

        ?>


        <a class="back" href="index.html">
            ← กลับหน้าหลัก
        </a>

    </div>


</body>
</html>