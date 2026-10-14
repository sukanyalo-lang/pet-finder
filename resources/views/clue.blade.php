
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>แจ้งเบาะแส | petfinder.</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Tahoma, sans-serif;
            color: #33332f;
            background: #fff;
        }

        /* Navigation */
        .navbar {
            min-height: 100px;
            padding: 25px 5.5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
            border-bottom: 1px solid #e9e6df;
            background: #fff;
        }

        .logo {
            color: #33332f;
            text-decoration: none;
            font-size: 29px;
            font-weight: bold;
            letter-spacing: -1px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: #55554f;
            text-decoration: none;
            font-size: 15px;
            transition: color 0.2s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #71815b;
        }

        /* Page heading */
        .page-heading {
            max-width: 1100px;
            margin: 0 auto;
            padding: 65px 25px 35px;
        }

        .eyebrow {
            font-size: 12px;
            letter-spacing: 3px;
            color: #8b8a7e;
            text-transform: uppercase;
        }

        .page-heading h1 {
            margin: 20px 0 15px;
            font-size: clamp(30px, 4vw, 46px);
            font-weight: 500;
            letter-spacing: -1px;
            line-height: 1.3;
        }

        .page-heading p {
            max-width: 650px;
            color: #77766f;
            font-size: 15px;
            line-height: 1.9;
        }

        /* Main content */
        .content {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 25px 80px;
            display: grid;
            grid-template-columns: 0.8fr 1.4fr;
            gap: 55px;
            align-items: start;
        }

        .side-info {
            padding-top: 15px;
        }

        .side-info h2 {
            font-size: 23px;
            line-height: 1.5;
            font-weight: 500;
            margin-top: 0;
        }

        .side-info p {
            color: #77766f;
            line-height: 1.9;
            font-size: 14px;
        }

        .info-line {
            width: 55px;
            height: 3px;
            background: #71815b;
            margin: 25px 0;
        }

        .tip {
            background: #f6f5ef;
            border-radius: 4px;
            padding: 20px;
            margin-top: 28px;
        }

        .tip strong {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .tip p {
            margin: 0;
            font-size: 13px;
        }

        /* Form */
        .form-card {
            padding: 35px;
            border: 1px solid #eae8e1;
            background: #fff;
        }

        .form-title {
            margin: 0 0 8px;
            font-size: 23px;
            font-weight: 500;
        }

        .form-subtitle {
            margin: 0 0 25px;
            color: #85847c;
            font-size: 13px;
            line-height: 1.8;
        }

        .form-group {
            margin-bottom: 21px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            font-size: 13px;
            font-weight: 600;
        }

        .required {
            color: #b66d5b;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #e2e0d9;
            border-radius: 3px;
            background: #fff;
            color: #33332f;
            font-family: inherit;
            font-size: 14px;
            transition: border-color 0.2s;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #71815b;
        }

        input::placeholder,
        textarea::placeholder {
            color: #aaa99f;
        }

        textarea {
            min-height: 115px;
            resize: vertical;
            line-height: 1.7;
        }

        .submit-button {
            display: block;
            width: 100%;
            padding: 15px;
            margin-top: 10px;
            border: none;
            border-radius: 3px;
            background: #71815b;
            color: #fff;
            font-family: inherit;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .submit-button:hover {
            background: #5d6c49;
        }

        .message {
            display: none;
            margin-top: 18px;
            padding: 15px;
            background: #edf4e8;
            color: #49613d;
            font-size: 14px;
            line-height: 1.8;
        }

        .back-link {
            display: inline-block;
            margin-top: 22px;
            color: #77766f;
            font-size: 13px;
            text-decoration: none;
        }

        .back-link:hover {
            color: #71815b;
        }

        footer {
            padding: 25px 5.5%;
            border-top: 1px solid #e9e6df;
            color: #89887f;
            font-size: 12px;
            letter-spacing: 1px;
        }

        @media (max-width: 800px) {
            .navbar {
                padding: 20px 6%;
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-links {
                gap: 15px;
            }

            .content {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .page-heading {
                padding-top: 45px;
            }

            .form-card {
                padding: 25px 20px;
            }
        }

        @media (max-width: 480px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .nav-links {
                gap: 12px;
            }

            .nav-links a {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

<header class="navbar">
    <a href="{{ url('/') }}" class="logo">petfinder.</a>

    <nav class="nav-links">
        <a href="{{ url('/') }}">หน้าหลัก</a>
        <a href="{{ url('/#pets') }}">สัตว์เลี้ยงที่หาย</a>
        <a href="{{ url('/#about') }}">เกี่ยวกับเรา</a>
        <a href="{{ route('report') }}">แจ้งสัตว์หาย</a>
        <a href="{{ url('/clue') }}" class="active">แจ้งเบาะแส</a>
    </nav>
</header>

<main>
    <section class="page-heading">
        <div class="eyebrow">PET FINDER / COMMUNITY HELP</div>

        <h1>ทุกเบาะแสมีความหมาย</h1>

        <p>
            การพบเห็นเพียงเล็กน้อยอาจช่วยให้สัตว์เลี้ยง
            ได้กลับไปพบกับครอบครัวอีกครั้ง
            ร่วมแบ่งปันข้อมูลเพื่อช่วยตามหาสัตว์เลี้ยงที่พลัดหลง
        </p>
    </section>

    <section class="content">
        <aside class="side-info">
            <h2>ช่วยเป็นส่วนหนึ่ง<br>ของการตามหา</h2>

            <div class="info-line"></div>

            <p>
                หากคุณพบเห็นสัตว์เลี้ยงที่ไม่มีเจ้าของ
                หรือพบสัตว์ที่มีลักษณะตรงกับประกาศตามหา
                กรุณาแจ้งสถานที่ เวลา และรายละเอียดที่สังเกตได้
            </p>

            <div class="tip">
                <strong>ข้อมูลที่เป็นประโยชน์</strong>
                <p>
                    ระบุสถานที่ให้ชัดเจน อธิบายลักษณะสัตว์
                    และแจ้งช่องทางติดต่อที่สะดวก
                    เพื่อให้เจ้าของสามารถสอบถามข้อมูลเพิ่มเติมได้
                </p>
            </div>

            <a href="{{ url('/') }}" class="back-link">
                ← กลับสู่หน้าหลัก
            </a>
        </aside>

        <div class="form-card">
            <h2 class="form-title">แบบฟอร์มแจ้งเบาะแส</h2>

            <p class="form-subtitle">
                กรุณากรอกข้อมูลที่มีเครื่องหมาย
                <span class="required">*</span> ให้ครบถ้วน
            </p>

            <form id="clueForm">
                <div class="form-group">
                    <label for="reportType">
                        ประเภทการแจ้ง <span class="required">*</span>
                    </label>

                    <select id="reportType" name="reportType" required>
                        <option value="">เลือกประเภทการแจ้ง</option>
                        <option value="found">พบเห็นสัตว์เลี้ยง</option>
                        <option value="clue">พบเบาะแสสัตว์ที่หาย</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="animalType">
                            ประเภทสัตว์ <span class="required">*</span>
                        </label>

                        <select id="animalType" name="animalType" required>
                            <option value="">เลือกประเภทสัตว์</option>
                            <option value="แมว">แมว</option>
                            <option value="สุนัข">สุนัข</option>
                            <option value="กระต่าย">กระต่าย</option>
                            <option value="นก">นก</option>
                            <option value="อื่น ๆ">อื่น ๆ</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="animalName">ชื่อสัตว์ (ถ้าทราบ)</label>
                        <input
                            type="text"
                            id="animalName"
                            name="animalName"
                            placeholder="เช่น ไมโล"
                        >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="date">
                            วันที่พบเห็น <span class="required">*</span>
                        </label>
                        <input type="date" id="date" name="date" required>
                    </div>

                    <div class="form-group">
                        <label for="time">เวลาที่พบเห็น</label>
                        <input type="time" id="time" name="time">
                    </div>
                </div>

                <div class="form-group">
                    <label for="location">
                        สถานที่พบเห็น <span class="required">*</span>
                    </label>
                    <input
                        type="text"
                        id="location"
                        name="location"
                        placeholder="จังหวัด ถนน หรือสถานที่ใกล้เคียง"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="details">
                        รายละเอียดเบาะแส <span class="required">*</span>
                    </label>
                    <textarea
                        id="details"
                        name="details"
                        placeholder="อธิบายสี ขนาด ลักษณะเด่น หรือทิศทางที่พบเห็น"
                        required
                    ></textarea>
                </div>

                <div class="form-group">
                    <label for="photo">ลิงก์รูปภาพ (ถ้ามี)</label>
                    <input
                        type="url"
                        id="photo"
                        name="photo"
                        placeholder="https://example.com/photo.jpg"
                    >
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="reporterName">
                            ชื่อผู้แจ้ง <span class="required">*</span>
                        </label>
                        <input
                            type="text"
                            id="reporterName"
                            name="reporterName"
                            placeholder="ชื่อของคุณ"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="contact">
                            ช่องทางติดต่อ <span class="required">*</span>
                        </label>
                        <input
                            type="text"
                            id="contact"
                            name="contact"
                            placeholder="เบอร์โทรศัพท์หรือ LINE"
                            required
                        >
                    </div>
                </div>

                <button type="submit" class="submit-button">
                    ส่งข้อมูลเบาะแส →
                </button>

                <div class="message" id="successMessage" role="status">
                    รับข้อมูลตัวอย่างแล้ว
                    แต่ข้อมูลยังไม่ได้บันทึกลงฐานข้อมูล
                </div>
            </form>
        </div>
    </section>
</main>

<footer>
    PETFINDER. — HELP EVERY PET FIND ITS WAY HOME
</footer>

<script>
    document.getElementById('clueForm')
        .addEventListener('submit', function(event) {
            event.preventDefault();

            document.getElementById('successMessage').style.display = 'block';
        });
</script>

</body>
</html>
