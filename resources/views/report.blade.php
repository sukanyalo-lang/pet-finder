
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แจ้งสัตว์เลี้ยงหาย | Pet Finder</title>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'IBM Plex Sans Thai', sans-serif;
            background: #fff;
            color: #45423D;
            line-height: 1.7;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button, input, select, textarea {
            font-family: inherit;
        }

        .container {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }

        /* เมนูให้เหมือนหน้าแรก */
        nav {
            border-bottom: 1px solid #EAE8E4;
            padding: 18px 0;
            background: #fff;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .logo {
            font-size: 25px;
            font-weight: 600;
            letter-spacing: -1px;
            white-space: nowrap;
        }

        .nav-links {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
            font-size: 14px;
            color: #66615A;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #AAA198;
        }

        /* เนื้อหาหน้าแจ้งสัตว์หาย */
        .page {
            max-width: 760px;
            margin: 55px auto 75px;
        }

        .eyebrow {
            font-size: 12px;
            letter-spacing: 2px;
            color: #89847D;
            margin-bottom: 12px;
            text-align: center;
        }

        h1 {
            text-align: center;
            font-size: clamp(30px, 4vw, 42px);
            font-weight: 300;
            margin-bottom: 10px;
        }

        .intro {
            text-align: center;
            color: #777168;
            font-size: 14px;
            margin: 0 auto 30px;
        }

        .form-card {
            border: 1px solid #EAE8E4;
            padding: 32px;
            background: #fff;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        .field label {
            font-size: 14px;
        }

        .field input,
        .field select,
        .field textarea {
            width: 100%;
            padding: 12px 13px;
            border: 1px solid #E1DED9;
            background: #fff;
            color: #45423D;
            font-size: 14px;
            outline: none;
        }

        .field input:focus,
        .field select:focus,
        .field textarea:focus {
            border-color: #89847D;
        }

        .field textarea {
            min-height: 115px;
            resize: vertical;
        }

        .hint {
            font-size: 12px;
            color: #89847D;
        }

        .main-button {
            display: inline-block;
            background: #45423D;
            color: #fff;
            padding: 11px 24px;
            border: 1px solid #45423D;
            font-size: 14px;
            cursor: pointer;
            transition: .2s;
        }

        .main-button:hover {
            background: #fff;
            color: #45423D;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 25px;
            flex-wrap: wrap;
        }

        .secondary-button {
            display: inline-block;
            border: 1px solid #E1DED9;
            padding: 11px 24px;
            font-size: 14px;
        }

        .success {
            display: none;
            margin-top: 20px;
            padding: 14px;
            background: #F7F5F1;
            color: #45423D;
            text-align: center;
            font-size: 14px;
        }

        footer {
            border-top: 1px solid #EAE8E4;
            padding: 22px 0;
            color: #89847D;
            font-size: 12px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }

        @media (max-width: 768px) {
            .nav-content {
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-links {
                gap: 12px;
            }

            .page {
                margin: 35px auto 50px;
            }

            .form-card {
                padding: 22px;
            }

            .footer-content {
                flex-direction: column;
            }
        }

        @media (max-width: 520px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .field.full {
                grid-column: auto;
            }
        }
    </style>
</head>

<body>

    <!-- เมนูหลัก -->
    <nav>
        <div class="container nav-content">
            <a href="{{ url('/') }}" class="logo">petfinder.</a>

            <div class="nav-links">
                <a href="{{ url('/') }}">หน้าหลัก</a>
                <a href="{{ url('/pets') }}">สัตว์เลี้ยงที่หาย</a>
                <a href="{{ url('/about') }}">เกี่ยวกับเรา</a>
                <a href="{{ url('/clue') }}">แจ้งเบาะแส</a>
                <a href="{{ url('/report') }}" class="active">แจ้งสัตว์หาย</a>
                <a href="{{ url('/login') }}">เข้าสู่ระบบ</a>
            </div>
        </div>
    </nav>

    <main class="container page">

        <div class="eyebrow">PET FINDER / REPORT</div>

        <h1>แจ้งสัตว์เลี้ยงหาย</h1>

        <p class="intro">
            กรอกรายละเอียดของสัตว์เลี้ยงที่หายไป
            เพื่อให้ผู้คนช่วยกันตามหาและเพิ่มโอกาสให้เพื่อนตัวน้อยได้กลับบ้าน
        </p>

        <div class="form-card">
            <form id="reportForm">

                <div class="form-grid">

                    <div class="field">
                        <label for="animalType">ประเภทสัตว์เลี้ยง *</label>
                        <select id="animalType" required>
                            <option value="">เลือกประเภทสัตว์</option>
                            <option>แมว</option>
                            <option>สุนัข</option>
                            <option>กระต่าย</option>
                            <option>แฮมสเตอร์</option>
                            <option>หนูแกสบี้</option>
                            <option>นกเลี้ยง</option>
                            <option>ปลา</option>
                            <option>อื่น ๆ</option>
                        </select>
                    </div>

                    <div class="field">
                        <label for="animalName">ชื่อสัตว์เลี้ยง *</label>
                        <input id="animalName" type="text"
                               placeholder="เช่น ไมโล" required>
                    </div>

                    <div class="field">
                        <label for="reporterName">ชื่อผู้แจ้ง *</label>
                        <input id="reporterName" type="text"
                               placeholder="ชื่อของคุณ" required>
                    </div>

                    <div class="field">
                        <label for="contact">ช่องทางติดต่อ *</label>
                        <input id="contact" type="text"
                               placeholder="เบอร์โทรหรือ LINE" required>
                    </div>

                    <div class="field">
                        <label for="date">วันที่พบเห็นครั้งสุดท้าย *</label>
                        <input id="date" type="date" required>
                    </div>

                    <div class="field">
                        <label for="location">สถานที่ที่หาย *</label>
                        <input id="location" type="text"
                               placeholder="เขต/อำเภอ จังหวัด" required>
                    </div>

                    <div class="field full">
                        <label for="details">รายละเอียดเพิ่มเติม *</label>
                        <textarea id="details"
                            placeholder="สี ลักษณะ จุดสังเกต ปลอกคอ หรือข้อมูลที่ช่วยในการตามหา"
                            required></textarea>
                    </div>

                    <div class="field full">
                        <label for="photo">รูปภาพสัตว์เลี้ยง</label>
                        <input id="photo" type="file" accept="image/*">
                        <span class="hint">
                            เลือกไฟล์รูปภาพได้ แต่ตัวอย่างนี้ยังไม่ได้อัปโหลดรูปไปยังเซิร์ฟเวอร์
                        </span>
                    </div>

                </div>

                <div class="actions">
                    <button type="submit" class="main-button">
                        ส่งข้อมูลแจ้งสัตว์หาย →
                    </button>

                    <a class="secondary-button" href="{{ url('/') }}">
                        กลับหน้าหลัก
                    </a>
                </div>

                <div class="success" id="successMessage">
                    รับข้อมูลตัวอย่างเรียบร้อยแล้ว
                    แต่ยังไม่ได้บันทึกลงฐานข้อมูลจริง
                </div>

            </form>
        </div>
    </main>

    <footer>
        <div class="container footer-content">
            <span>petfinder. — ทุกการรอคอย มีความหวังที่จะได้พบกัน</span>
            <span>เว็บไซต์ตัวอย่างสำหรับโครงงาน</span>
        </div>
    </footer>

    <script>
        document.getElementById('reportForm')
            .addEventListener('submit', function(event) {
                event.preventDefault();

                document.getElementById('successMessage').style.display = 'block';

                document.getElementById('successMessage')
                    .scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest'
                    });
            });
    </script>

</body>
</html>
