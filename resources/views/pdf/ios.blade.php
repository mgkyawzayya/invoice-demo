<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sofadi+One&display=swap" rel="stylesheet">

    <style>
        html, body {
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: normal;
            color: #2d2d2d;
            letter-spacing: 0.5px;
        }

        .fw-bold {
            font-weight: 400 !important;
            color: #000000;
        }

        .fw-bolder {
            font-weight: 700 !important;
            color: #000000;
        }

        p {
            font-size: 11px;
            margin: 0;
        }

        p.text-md {
            font-size: 13px !important;
        }

        p.text-lg {
            font-size: 16px !important;
        }

        .text-red {
            color: red !important;
        }

        .bg-gray {
            background-color: #D9D9D9 !important;
        }

        .table-bordered thead td p {
            font-size: 9px !important;
            text-align: center;
        }

        .table-bordered tbody td {
            padding: .1rem .3rem!important;
        }

        .table-bordered tbody td p {
            font-size: 12px !important;
        }

        table.table-bordered, .table-bordered th, .table-bordered td {
            border: 2px solid #bfbdbd !important;
        }

        .tac p {
            color: #000000 !important;
            font-size: 10px !important;
            font-weight: 400 !important;
        }

        .table-borderless td {
            padding: 0.2rem 0 !important;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row mt-2">
        <img
            src="data:image/png; base64, {{ base64_encode(file_get_contents(public_path('img/logo.png'))) }}"
            style="width: 100px; height: 90px;"
            class="ms-3"
        >

        <p class="text-center text-md">วันเขียนสัญญา <span class="fw-bold">26/8/2024, 13:52:54</span> สัญญาเลขที่ <span class="text-red mx-1 fw-bold">AD1</span> ทำที่ บริษัท พีเจ-ฟินน์ จำกัด</p>

        <p>สินค้าจากร้าน</p>

        <p class="fw-bolder text-center text-lg mb-3" style="color: #434343 !important;">หนังสือสัญญาเช่าซื้อ Android บริษัท พีเจ-ฟินน์ จำกัด</p>

        <p class="mb-2" style="text-indent: 80px;">สัญญาฉบับนี้ทำขึ้นระหว่าง บริษัท พีเจ-ฟินน์ จำกัด ตัง
            ตำบลบ้านใหม่ อำเภอสามพราน จังหวัดนครปฐม 73110
            อยูเ่ ลขที่ 108 หมู2
            ซึ่งต่อไปนี้ในสัญญาฉบับนี้จะเรียกว่า "ผูใ้ ห้เช่าซื้อ" ฝ่ายหนึ่งกับ</p>

        <div class="mb-2">
            <div class="row">
                <div class="col-md-7"><p>ชื่อ-นามสกุล: <span class="fw-bold">น.ส.นวินดา สีหาเวช</span></p></div>
                <div class="col-md-4"><p class="ps-4">เลขบัตร : <span class="fw-bold">1330400106243</span></p></div>
            </div>

            <div class="row">
                <div class="col-md-7"><p>ที่อยูปัจบัน : <span class="fw-bold">7/6 ม.9 ซ.วันเพ็ญ ต.สำโรงใต้ อ.พระประแดง 33130</span></p></div>
                <div class="col-md-4"><p class="ps-4">เบอร์หลัก : <span class="fw-bold">0928253049</span></p></div>
            </div>

            <div class="row">
                <div class="col-md-7"><p>ที่ทำงาน : <span class="fw-bold">ร้านเสื้อผ้า ชัน3 ห้างอิมพีเรียลสำโรง</span></p></div>
                <div class="col-md-4"><p class="ps-4">เบอร์อ้างอิง : <span class="fw-bold">0642911065.</span></p></div>
            </div>
        </div>

        <p class="mb-2" style="text-indent: 30px;">
            รายละเอียดปรากฏตามสำเนาบัตรประชาชน ซึ่งต่อไปนี้จะเรียกว่า "ผูเ้ ช่าซื้อ" อีกฝ่ายหนึ่ง ทัง
            สองฝ่ายตกลงทำสัญญากัน
            ผูใ้ ห้เช่าซื้อตกลงให้เช่าซื้อและผูเ้ ช่าซื้อตกลงเช่าซื้อทรัพย์สน
            และชำระค่างวดตามรายการทรัพย์สน
            ที่เช่าซื้อในบัญชีรายการเช่าซื้อด้านล่างนี้
        </p>


        <div class="mb-2">
            <div class="row">
                <div class="col-md-3">
                    <p>รุน : <span class="fw-bold">Oppo A60</span></p>
                </div>
                <div class="col-md-4">
                    <p>ความจุ : <span class="fw-bold">128 GB</span></p>
                </div>
                <div class="col-md-3">
                    <p>Ram : <span class="fw-bold">8</span></p>
                </div>
                <div class="col-md-2">
                    <p>มือ : <span class="fw-bold">1</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>สี : <span class="fw-bold">ฟ้า</span></p>
                </div>
                <div class="col-md-4">
                    <p>IMEI : <span class="fw-bold">868800077927691</span></p>
                </div>
                <div class="col-md-3">
                    <p>Serial: <span class="fw-bold">F150e442</span></p>
                </div>
            </div>
        </div>

        <div class="mb-2">
            <div class="row">
                <div class="col-md-3">
                    <p>ราคาสินค้า : <span class="fw-bold">0 บาท</span></p>
                </div>
                <div class="col-md-4">
                    <p>เงินดาวน์ : <span class="fw-bold">3,366 บาท</span></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <p>ชำระทุกวันที่ : <span class="fw-bold">30</span></p>
                </div>
                <div class="col-md-4">
                    <p>จำนวนเดือน : <span class="fw-bold">6 เดือน</span></p>
                </div>
                <div class="col-md-3">
                    <p>ผ่อนเดือนละ : <span class="fw-bold">1,510 บาท</span></p>
                </div>
            </div>
        </div>

        <p class="text-center">*** ราคานี้รวมค่าประกันสินค้าแล้ว (เงื่อนไขการรับประกันเป็นไปตามที่ทางร้านกำหนด)***</p>

        {{--            table--}}
        <table class="table table-bordered border-secondary">
            <thead>
            <tr class="bg-gray">
                <td class="bg-gray"><p>งวดที่</p></td>
                <td class="bg-gray"><p>กำหนดจ่าย</p></td>
                <td class="bg-gray"><p>ค่างวด</p></td>
                <td class="bg-gray"><p>โอน/เงินสด</p></td>
                <td class="bg-gray"><p>ผูร้บยอด</p></td>
                <td class="bg-gray"><p>หมายเหตุ</p></td>
                <td class="bg-gray"><p>งวดที่</p></td>
                <td class="bg-gray"><p>กำหนดจ่าย</p></td>
                <td class="bg-gray"><p>ค่างวด</p></td>
                <td class="bg-gray"><p>โอน/เงินสด</p></td>
                <td class="bg-gray"><p>ผูร้บยอด</p></td>
                <td class="bg-gray"><p>หมายเหตุ</p></td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td><p class="text-center fw-bold">1.</p></td>
                <td><p class="text-center fw-bold">30/09/2024</p></td>
                <td><p class="text-center fw-bold">1,510</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold">7.</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
            </tr>

            <tr>
                <td><p class="text-center fw-bold">2.</p></td>
                <td><p class="text-center fw-bold">30/09/2024</p></td>
                <td><p class="text-center fw-bold">1,510</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold">8.</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
            </tr>

            <tr>
                <td><p class="text-center fw-bold">3.</p></td>
                <td><p class="text-center fw-bold">30/09/2024</p></td>
                <td><p class="text-center fw-bold">1,510</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold">9.</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
            </tr>

            <tr>
                <td><p class="text-center fw-bold">4.</p></td>
                <td><p class="text-center fw-bold">30/09/2024</p></td>
                <td><p class="text-center fw-bold">1,510</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold">10.</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
            </tr>

            <tr>
                <td><p class="text-center fw-bold">5.</p></td>
                <td><p class="text-center fw-bold">30/09/2024</p></td>
                <td><p class="text-center fw-bold">1,510</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold">11.</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
            </tr>

            <tr>
                <td><p class="text-center fw-bold">6.</p></td>
                <td><p class="text-center fw-bold">30/09/2024</p></td>
                <td><p class="text-center fw-bold">1,510</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold">12.</p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
                <td><p class="text-center fw-bold"></p></td>
            </tr>
            </tbody>
        </table>

        {{--            tac--}}
        <div class="tac mb-3">
            <p>เงื่อนไขการผ่อนชำระสินค้า</p>
            <div class="row">
                <div class="col-10">
                    <table class="table table-borderless">
                        <tbody>
                        <tr>
                            <td><p>1.</p></td>
                            <td>
                                <p class="ps-1">ผูเ้ ช่าซื้อจะต้องชำระเงินตามระยะเวลาที่ทางผูใ้ ห้เช่าซื้อกำหนดให้ กรณีไม่อยากผ่อนต่อสามารถส่งคืนร้านเพื่อรับเงินดาวน์คืนตามเงื่อนไข ที่ทางผูใ้ ห้เช่าซื้อกำหนด และสินค้าต้องอยูใ่ นสภาพที่สมบูรณ์ หากสินค้าชำรุดเสียหาย หรือเป็นรอย ผูเ้ ช่าซื้อยินยอมชดใช้ค่าเสียหาย</p>
                            </td>
                        </tr>
                        <tr>
                            <td><p>2.</p></td>
                            <td>
                                <p class="ps-1">เกินกำหนดชำระ จะมีค่าปรับวันละ 50 บาท กรณีค้างชำระเกิน 7 วัน ทางผูใ้ ห้เช่าซื้อจะลบข้อมูลและล็อคเครื่อง ไม่สามารถเข้าใช้งานได้ ลูกค้าต้องส่งมาปลดล็อค มีค่าปลดล็อค 500-1000 บาท</p>
                            </td>
                        </tr>
                        <tr>
                            <td><p>3.</p></td>
                            <td>
                                <p class="ps-1">
                                    กรณีค้างชำระเกิน 15 วัน ให้ถือว่าผูเ้ ช่าซื้อผิดสัญญา ทางผูใ้ ห้เช่าซื้อจะทำการเรียกสินค้าคืนจากผูเ้ ช่าซื้อ โดยผูเ้ ช่าซื้อจะต้องส่งคืน
                                    สินค้าให้กับผูใ้ ห้เช่าซื้อในสภาพสมบูรณ์ หากสินค้าชำรุดเสียหาย แตก บิน
                                    หรือเป็นรอย ผูเ้ ช่าซื้อยินยอมรับผิดชอบจ่ายค่าซ่อมแซมทุกกรณี
                                    ผูเ้ ช่าซื้อ ยินยอมชำระคำทวงถามเป็นจำนวน 100 บาท หลังเกินกำหนดชำระ 5 วัน ต่อการทวงถามต่อ 1 งวด
                                    (หากมีการเดินทางไปรับสินค้าคืน คิดค่าใช้จา่ ยเพิม
                                    ตามระยะการเดินทาง)
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><p style="color: red !important;">4.</p></td>
                            <td>
                                <p style="color: red !important;">
                                    กรณีค้างชำระเกิน 15 วัน ให้ถือว่าผูเ้ ช่าซื้อผิดสัญญา ทางผูใ้ ห้เช่าซื้อจะทำการเรียกสินค้าคืนจากผูเ้ ช่าซื้อ โดยผูเ้ ช่าซื้อจะต้องส่งคืน
                                    สินค้าให้กับผูใ้ ห้เช่าซื้อในสภาพสมบูรณ์ หากสินค้าชำรุดเสียหาย แตก บิน
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><p style="color: red !important;">5.</p></td>
                            <td>
                                <p style="color: red !important;">
                                    กรณีค้างชำระเกิน 15 วัน ให้ถือว่าผูเ้ ช่าซื้อผิดสัญญา ทางผูใ้ ห้เช่าซื้อจะทำการเรียกสินค้าคืนจากผูเ้ ช่าซื้อ โดยผูเ้ ช่าซื้อจะต้องส่งคืน
                                    สินค้าให้กับผูใ้ ห้เช่าซื้อในสภาพสมบูรณ์ หากสินค้าชำรุดเสียหาย แตก บิน
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><p style="color: red !important;">6.</p></td>
                            <td>
                                <p style="color: red !important;">
                                    กรณีค้างชำระเกิน 15 วัน ให้ถือว่าผูเ้ ช่าซื้อผิดสัญญา ทางผูใ้ ห้เช่าซื้อจะทำการเรียกสินค้าคืนจากผูเ้ ช่าซื้อ โดยผูเ้ ช่าซื้อจะต้องส่งคืน
                                    สินค้าให้กับผูใ้ ห้เช่าซื้อในสภาพสมบูรณ์ หากสินค้าชำรุดเสียหาย แตก บิน
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <p style="color: red !important;text-align: center;">***ตามประมวลกฎหมายอาญามาตรา 352 ต้องโทษจำคุกไม่เกิน 3 ปี ***</p>
                    <p style="color: red !important;text-align: center;">***เมื่อใดที่ผเู้ช่าซื้อถูกดำเนินคดีตามกฎหมายผูเ้ช่าซื้อยินยอมรับผิดชอบค่าใช้จา่ยในการดำเนินคดีทังหมดทุกกรณึ***</p>
                    <p style="color: blue !important;text-align: center;">"เราดำเนินคดีจริงทุกเคสฝ่ายกฎหมายว่างพร้อมไปศาลได้ตลอดคุณละว่างไหมเสียงานเสียการฉะนันอย่าล้อเล่นกับระบบ"</p>
                    <p style="color: blue !important;text-align: center;">ชำระเงิน โอนเข้าบัญชี 8541013291 ธนาคารกรุงศรี ชื่อ อัสนัย แก้วบำรุง เท่านัน</p>
                </div>

                {{--                    qr-section--}}
                <div class="col-2 py-3 mb-2">
                    <div class="text-center mb-2">
                        <img
                            src="data:image/png; base64, {{ base64_encode(file_get_contents(public_path('img/qr-pay.png'))) }}"
                            style="width: 95px; height: 100px;"
                        >
                        <p class="fw-bold">แสกนเพื่อชำระเงิน</p>
                    </div>
                    <div class="text-center">
                        <img
                            src="data:image/png; base64, {{ base64_encode(file_get_contents(public_path('img/qr-line.png'))) }}"
                            style="width: 95px; height: 100px;"
                        >
                        <p>แอดไลน์เพื่อแจ้งสลิป</p>
                        <p>Line: <span class="fw-bolder">@806uambf</span></p>
                    </div>
                </div>
            </div>
        </div>

        {{--                    signature--}}
        <div class="d-flex justify-content-between mb-2">
            <div class="text-center">
                <p class="mb-2">ยินยอมตามเงือนไข</p>
                <p class="mb-2">ลงชื่อ………………………………………………………ผูเ้ช่าซื้อ</p>
                <p>(น.ส.นวินดา สีหาเวช)</p>
            </div>
            <div class="text-center">
                <div class="mb-2" style="height: 12px;"></div>
                <p class="mb-2">ลงชื่อ………………………………………………ผูใ้ห้เช่าซื้อ</p>
                <p>0</p>
            </div>
        </div>

        <div>
            <img
                src="data:image/png; base64, {{ base64_encode(file_get_contents(public_path('img/undersignqr.png'))) }}"
                style="width: 60px; height: 70px;"
            >
            <span class="d-inline-block" style="font-size: 10px;position: relative;top: 26px;">ติดตามข่าวสารและโปรโมชันได้ที่เพจ</span>
        </div>


    </div>
</div>
</body>

</html>
