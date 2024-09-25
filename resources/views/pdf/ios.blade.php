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
            font-size: 12px;
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
        <div class="d-flex justify-content-between align-items-center">
            <img
                src="data:image/png; base64, {{ base64_encode(file_get_contents(public_path('img/ios-logo.png'))) }}"
                style="width: 100px; height: 90px;"
                class="ms-3"
            >

            <div>
                <p class="text-md">วันที่เขียนสัญญา <span class="fw-bolder">{{ "<Date ,Time >" }}</span></p>
                <p class="text-md">สัญญาเลขที่ <span class="fw-bolder">{{ "<Contract number >" }}</span></p>
                <p class="text-md">สินค้าจากร้าน <span class="fw-bolder">{{ "<Branch stores >" }}</span></p>
            </div>
        </div>

        <p class="fw-bolder text-center text-lg mb-3" style="color: #434343 !important;">{{ "หนังสือสัญญาเช่าซื้อ <Android> <บริษัท พีเจ-ฟินน์ จำกัด>" }}</p>

        <p class="mb-2" style="text-indent: 80px;">สัญญาฉบับนี้ทำขึ้นระหว่าง <span class="fw-bolder">{{ "<บริษัท พีเจ-ฟินน์ จำกัด>" }}</span> ตั้งอยู่เลขที่ <span class="fw-bolder">{{ "<108 หมู่2 ตำบลบ้านใหม่ อำเภอสามพราน จังหวัดนครปฐม 73110>" }}</span> ซึ่งต่อไปนี้ในสัญญาฉบับนี้จะเรียกว่า "<span class="text-red fw-bolder">{{ "ผู้ให้เช่าซื้อ" }}</span>" ฝ่ายหนึ่งกับ</p>

        <div class="mb-2">
            <div class="row">
                <div class="col-md-7"><p>ชื่อ-นามสกุล: <span class="fw-bolder">น.ส.นวินดา สีหาเวช</span></p></div>
                <div class="col-md-4"><p class="ps-4">เลขบัตร : <span class="fw-bolder">1330400106243</span></p></div>
            </div>

            <div class="row">
                <div class="col-md-7"><p>ที่อยูปัจบัน : <span class="fw-bolder">7/6 ม.9 ซ.วันเพ็ญ ต.สำโรงใต้ อ.พระประแดง 33130</span></p></div>
                <div class="col-md-4"><p class="ps-4">เบอร์หลัก : <span class="fw-bolder">0928253049</span></p></div>
            </div>

            <div class="row">
                <div class="col-md-7"><p>ที่ทำงาน : <span class="fw-bolder">ร้านเสื้อผ้า ชัน3 ห้างอิมพีเรียลสำโรง</span></p></div>
                <div class="col-md-4"><p class="ps-4">เบอร์อ้างอิง : <span class="fw-bolder">0642911065.</span></p></div>
            </div>
        </div>

        <p class="mb-2" style="text-indent: 30px;">
            รายละเอียดปรากฏตามสำเนาบัตรประชาชน ซึ่งต่อไปนี้จะเรียกว่า "<span class="text-red fw-bolder">ผู้เช่าซื้อ</span>" อีกฝ่ายหนึ่ง ทั้งสองฝ่ายตกลงทำสัญญากัน ผู้ให้เช่าซื้อตกลงให้เช่าซื้อ และผู้เช่าซื้อตกลงเช่าซื้อทรัพย์สินและชำระค่างวดตามรายการทรัพย์สินที่เช่าซื้อในบัญชีรายการเช่าซื้อด้านล่างนี้
        </p>

        <div class="mb-2">
            <div class="row">
                <div class="col-md-3">
                    <p>สินค้า : <span class="fw-bolder">{{ "<ใหม่>" }}</span></p>
                </div>
                <div class="col-md-4">
                    <p>โทรศัพท์ : <span class="fw-bolder">{{ "<Samsung>" }}</span></p>
                </div>
                <div class="col-md-3">
                    <p>รุ่น : <span class="fw-bolder">{{ "<A11>" }}</span></p>
                </div>
                <div class="col-md-2">
                    <p>สี : <span class="fw-bolder">{{ "<ดำ>" }}</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>สเปค : <span class="fw-bolder">{{ "<4Gb/128Gb>" }}</span></p>
                </div>
                <div class="col-md-4">
                    <p>IMEI : <span class="fw-bolder">{{ "<325556985412589>" }}</span></p>
                </div>
                <div class="col-md-3">
                    <p>SN : <span class="fw-bolder">{{ "<RT145TFDSA>" }}</span></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <p>ราคาสินค้า : <span class="fw-bolder">{{ "<auto>" }}</span></p>
                </div>
                <div class="col-md-4">
                    <p>เงินดาวน์ : <span class="fw-bolder">{{ "<8,000>" }}</span> บาท</p>
                </div>
                <div class="col-md-3">
                    <p>คงเหลือ : <span class="fw-bolder">{{ "<auto>" }}</span> บาท</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <p>ผ่อนเดือนละ : <span class="fw-bolder">{{ "<1,000>" }}</span> บาท</p>
                </div>
                <div class="col-md-4">
                    <p>จำนวนเดือน : <span class="fw-bolder">{{ "<12>" }}</span> เดือน</p>
                </div>
                <div class="col-md-3">
                    <p>ชำระทุกวันที่ : <span class="fw-bolder">{{ "<10>" }}</span></p>
                </div>
            </div>
        </div>

        {{--            table--}}
        <table class="table table-bordered border-secondary">
            <thead>
                <tr class="bg-gray">
                    <td class="bg-gray" style="width: 10%;"><p>งวดที่</p></td>
                    <td class="bg-gray" style="width: 20%;"><p>จำนวนเงิน</p></td>
                    <td class="bg-gray" style="width: 20%;"><p>กำหนดชำระ</p></td>
                    <td class="bg-gray" style="width: 28%;"><p>สถาณะ</p></td>
                    <td class="bg-gray" style="width: 20%;"><p>วันที่ชำระ</p></td>
                </tr>
            </thead>

            <tbody>
                @for($i=1;$i<13;$i++)
                    <tr>
                        <td><p class="text-center fw-bold">{{ $i }}</p></td>
                        <td><p class="text-center fw-bold">1,000</p></td>
                        <td><p class="text-center fw-bold">10/10/2024</p></td>
                        <td><p class="text-center fw-bold">{{ "<โอน>" }}</p></td>
                        <td><p class="text-center fw-bold">{{ "<10/10/2024>" }}</p></td>
                    </tr>
                @endfor
            </tbody>
        </table>

        <p class="text-center">*** ราคานี้รวมค่าประกันสินค้าแล้ว (เงื่อนไขการรับประกันเป็นไปตามที่ทางร้านกำหนด)***</p>

        {{--            tac--}}
        <div class="tac mb-3">
            <p>เงื่อนไขการผ่อนชำระสินค้า</p>
            <div class="row">
                <div class="col-12">
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
            </div>
        </div>

        {{--                    signature--}}
        <div class="mb-2">
            <p class="mb-2">ยินยอมตามเงือนไข</p>

            <div class="d-flex justify-content-evenly">
                <div class="text-center">
                    <p class="mb-2 fw-bolder">(<span class="d-inline-block" style="width: 130px;border: 0.5px solid #000000;"></span>)</p>
                    <p class="fw-bolder mb-2">{{ "<น.ส.นวินดา สีหาเวช>" }}</p>
                    <p class="fw-bolder text-red">ผู้เช่าซื้อ</p>
                </div>
                <div class="text-center">
                    <p class="mb-2 fw-bolder">(<span class="d-inline-block" style="width: 130px;border: 0.5px solid #000000;"></span>)</p>
                    <p class="fw-bolder mb-2">{{ "<Branch stores >" }}</p>
                    <p class="fw-bolder text-red">ผู้อนุมัติสินค้า</p>
                </div>
                <div class="text-center">
                    <p class="fw-bolder" style="margin-bottom: 33px;">(<span class="d-inline-block" style="width: 130px;border: 0.5px solid #000000;"></span>)</p>
                    <p class="fw-bolder text-red">พยาน</p>
                </div>
            </div>
        </div>


    </div>
</div>
</body>

</html>
