
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>เกี่ยวกับเรา | Pet Finder</title>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>
        /* =========================
           GENERAL
        ========================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'IBM Plex Sans Thai', sans-serif;
            color: #45423d;
            background: #ffffff;
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        .container {
            width: 86%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* =========================
           NAVBAR
           ปรับให้เหมือนหน้าแจ้งสัตว์หาย
        ========================= */
        .site-header {
            width: 100%;
            min-height: 106px;
            padding: 0 42px;
            background: #ffffff;
            border-top: 7px solid #171717;
            border-bottom: 1px solid #e8e5e1;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .site-logo {
            color: #493b30;
            font-size: 30px;
            font-weight: 600;
            line-height: 1.2;
            white-space: nowrap;
        }

        .site-nav {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 30px;
        }

        .site-nav a {
            color: #51463e;
            font-size: 16px;
            font-weight: 400;
            white-space: nowrap;
            transition: color 0.2s;
        }

        .site-nav a:hover {
            color: #8b7968;
        }

        /* =========================
           PAGE INTRODUCTION
        ========================= */
        .page-header {
            background: #ffffff;
            text-align: center;
            padding: 68px 20px 60px;
        }

        .page-label {
            font-size: 13px;
            color: #89847d;
            letter-spacing: 3px;
            margin-bottom: 18px;
        }

        .page-header h1 {
            font-size: 36px;
            font-weight: 400;
            color: #51463e;
            margin-bottom: 15px;
        }

        .page-header p {
            max-width: 720px;
            margin: 0 auto;
            color: #77736c;
            font-size: 15px;
        }

        /* =========================
           ABOUT US
        ========================= */
        .about-section {
            padding: 55px 0 75px;
        }

        .about-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 55px;
            align-items: center;
        }

        .about-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
            display: block;
            background: #f8f6f1;
        }

        .section-label {
            color: #89847d;
            font-size: 13px;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .about-content h2 {
            color: #51463e;
            font-size: 29px;
            font-weight: 500;
            line-height: 1.5;
            margin-bottom: 18px;
        }

        .about-content p {
            color: #77736c;
            font-size: 15px;
            margin-bottom: 15px;
        }

        .main-btn {
            display: inline-block;
            margin-top: 8px;
            padding: 10px 23px;
            background: #71816a;
            color: #ffffff;
            font-size: 14px;
            border-radius: 3px;
            transition: background 0.2s;
        }

        .main-btn:hover {
            background: #58684f;
        }

        /* =========================
           OUR SERVICES
        ========================= */
        .services-section {
            padding: 65px 0 75px;
            background: #f8f7f3;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 38px;
        }

        .section-heading h2 {
            color: #51463e;
            font-size: 29px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .section-heading p {
            color: #77736c;
            font-size: 15px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .service-card {
            padding: 26px;
            background: #ffffff;
            border: 1px solid #e5e1da;
        }

        .service-number {
            color: #71816a;
            font-size: 25px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .service-card h3 {
            color: #51463e;
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .service-card p {
            color: #77736c;
            font-size: 14px;
        }

        /* =========================
           CONTACT INFORMATION
        ========================= */
        .contact-section {
            padding: 75px 0;
        }

        .contact-layout {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 45px;
            align-items: start;
        }

        .contact-intro h2 {
            color: #51463e;
            font-size: 29px;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .contact-intro > p {
            color: #77736c;
            font-size: 15px;
            margin-bottom: 25px;
        }

        .contact-list {
            border-top: 1px solid #e5e1da;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 17px 0;
            border-bottom: 1px solid #e5e1da;
        }

        .contact-icon {
            width: 42px;
            height: 42px;
            flex-shrink: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f3f1eb;
            color: #625548;
            font-size: 19px;
        }

        .contact-item h3 {
            color: #51463e;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .contact-item p,
        .contact-item a {
            color: #77736c;
            font-size: 14px;
            overflow-wrap: anywhere;
        }

        .contact-item a:hover {
            color: #71816a;
            text-decoration: underline;
        }

        /* =========================
           CONTACT FORM
        ========================= */
        .contact-form {
            padding: 30px;
            border: 1px solid #e5e1da;
            background: #ffffff;
        }

        .contact-form h2 {
            color: #51463e;
            font-size: 23px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .contact-form > p {
            color: #77736c;
            font-size: 14px;
            margin-bottom: 22px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        .form-group label {
            display: block;
            color: #514d47;
            font-size: 14px;
            margin-bottom: 6px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #dcd8d0;
            background: #ffffff;
            color: #45423d;
            border-radius: 3px;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #71816a;
        }

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 3px;
            background: #71816a;
            color: #ffffff;
            cursor: pointer;
        }

        .submit-btn:hover {
            background: #58684f;
        }

        .form-note {
            color: #89847d;
            font-size: 12px;
            margin-top: 12px;
        }

        /* =========================
           BOTTOM MESSAGE
        ========================= */
        .bottom-message {
            background: #f8f7f3;
            padding: 40px 20px;
            text-align: center;
            border-top: 1px solid #e5e1da;
        }

        .bottom-message h2 {
            color: #51463e;
            font-size: 25px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .bottom-message p {
            color: #77736c;
            font-size: 14px;
            margin-bottom: 18px;
        }

        /* =========================
           FOOTER
        ========================= */
        .footer {
            background: #45463f;
            color: #ffffff;
            padding: 30px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
        }

        .footer .site-logo {
            color: #ffffff;
        }

        .footer p {
            color: #deddd6;
            font-size: 13px;
            margin-top: 5px;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-links a {
            color: #deddd6;
            font-size: 13px;
        }

        .footer-links a:hover {
            color: #ffffff;
        }

        /* =========================
           RESPONSIVE
        ========================= */
        @media (max-width: 1000px) {
            .site-header {
                padding: 20px 30px;
                align-items: flex-start;
                flex-direction: column;
                gap: 18px;
            }

            .site-nav {
                justify-content: flex-start;
                flex-wrap: wrap;
                gap: 12px 22px;
            }

            .about-layout,
            .contact-layout {
                grid-template-columns: 1fr;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
            }

            .site-header {
                padding: 18px 20px;
            }

            .site-logo {
                font-size: 27px;
            }

            .site-nav {
                gap: 10px 16px;
            }

            .site-nav a {
                font-size: 14px;
            }

            .page-header {
                padding: 45px 20px;
            }

            .page-header h1 {
                font-size: 29px;
            }

            .about-section,
            .contact-section {
                padding: 45px 0;
            }

            .services-section {
                padding: 45px 0;
            }

            .about-image {
                height: 230px;
            }

            .about-content h2,
            .contact-intro h2 {
                font-size: 25px;
            }

            .section-heading h2 {
                font-size: 25px;
            }

            .contact-form {
                padding: 22px 18px;
            }

            .footer-content {
                align-items: flex-start;
                flex-direction: column;
            }

            .footer-links {
                gap: 12px 18px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header class="site-header">

        <a href="{{ url('/') }}" class="site-logo">
            petfinder.
        </a>

        <nav class="site-nav">
            <a href="{{ url('/') }}">หน้าหลัก</a>
            <a href="{{ url('/pets') }}">สัตว์เลี้ยงที่หาย</a>
            <a href="{{ url('/about') }}">เกี่ยวกับเรา</a>
            <a href="{{ url('/clue') }}">แจ้งเบาะแส</a>
            <a href="{{ url('/report') }}">แจ้งสัตว์หาย</a>
            <a href="{{ url('/login') }}">เข้าสู่ระบบ</a>
        </nav>

    </header>

    <!-- PAGE HEADER -->
    <section class="page-header">
        <div class="page-label">PET FINDER / ABOUT US</div>

        <h1>เกี่ยวกับเรา</h1>

        <p>
            Pet Finder เป็นเว็บไซต์ที่จัดทำขึ้นเพื่อช่วยตามหาสัตว์เลี้ยงที่สูญหาย
            และเป็นพื้นที่สำหรับแบ่งปันข้อมูลและเบาะแสจากผู้ที่พบเห็น
        </p>
    </section>

    <!-- ABOUT US -->
    <section class="about-section">
        <div class="container about-layout">

            <div>
                <img
                    class="about-image"
                    src="https://images.unsplash.com/photo-1450778869180-41d0601e046e?auto=format&fit=crop&w=1000&q=85"
                    alt="สุนัขและแมว"
                >
            </div>

            <div class="about-content">
                <div class="section-label">ABOUT PET FINDER</div>

                <h2>ช่วยกันตามหา<br>เพื่อให้ได้กลับบ้าน</h2>

                <p>
                    สำหรับคนที่เลี้ยงสัตว์ สัตว์เลี้ยงเป็นส่วนหนึ่งของครอบครัว
                    เมื่อพวกเขาหายไป เจ้าของย่อมเป็นห่วงและอยากพบให้เร็วที่สุด
                </p>

                <p>
                    Pet Finder จึงเป็นเว็บไซต์ที่ช่วยเผยแพร่ประกาศสัตว์เลี้ยงหาย
                    ให้ผู้คนสามารถดูข้อมูลและแจ้งเบาะแสเมื่อพบสัตว์ที่ตรงกับประกาศได้
                </p>

                <p>
                    เราหวังว่าเว็บไซต์นี้จะช่วยให้คนในชุมชนแบ่งปันข้อมูลกันได้สะดวกขึ้น
                    และเพิ่มโอกาสให้สัตว์เลี้ยงที่พลัดหลงได้กลับไปหาเจ้าของ
                </p>

                <a href="{{ url('/report') }}" class="main-btn">
                    แจ้งสัตว์เลี้ยงหาย
                </a>
            </div>

        </div>
    </section>

    <!-- SERVICES -->
    <section class="services-section">
        <div class="container">

            <div class="section-heading">
                <div class="section-label">OUR SERVICES</div>
                <h2>เว็บไซต์ช่วยอะไรได้บ้าง?</h2>
                <p>ฟังก์ชันที่ช่วยให้การตามหาสัตว์เลี้ยงสะดวกขึ้น</p>
            </div>

            <div class="services-grid">

                <div class="service-card">
                    <div class="service-number">01</div>

                    <h3>แจ้งสัตว์เลี้ยงหาย</h3>

                    <p>
                        ลงรายละเอียดสัตว์เลี้ยง เช่น ชื่อ สี สายพันธุ์
                        รูปภาพ และบริเวณที่พบเห็นครั้งสุดท้าย
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-number">02</div>

                    <h3>แจ้งเบาะแส</h3>

                    <p>
                        ผู้ที่พบสัตว์เลี้ยงสามารถแจ้งข้อมูลเพิ่มเติม
                        เพื่อช่วยให้เจ้าของตรวจสอบและติดตามได้
                    </p>
                </div>

                <div class="service-card">
                    <div class="service-number">03</div>

                    <h3>ค้นหาประกาศ</h3>

                    <p>
                        ดูประกาศสัตว์เลี้ยงที่สูญหาย
                        เพื่อช่วยกันสังเกตและส่งต่อข้อมูลที่เป็นประโยชน์
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact-section" id="contact">
        <div class="container">

            <div class="contact-layout">

                <!-- CONTACT DETAILS -->
                <div class="contact-intro">

                    <div class="section-label">CONTACT US</div>

                    <h2>ติดต่อเรา</h2>

                    <p>
                        หากมีคำถาม ข้อเสนอแนะ หรือพบปัญหาการใช้งานเว็บไซต์
                        สามารถดูข้อมูลติดต่อได้ด้านล่าง
                    </p>

                    <div class="contact-list">

                        <div class="contact-item">
                            <div class="contact-icon">☎</div>

                            <div>
                                <h3>โทรศัพท์</h3>
                                <p>092-123-4567 (ข้อมูลตัวอย่าง)</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">✉</div>

                            <div>
                                <h3>อีเมล</h3>
                                <p>
                                    <a href="mailto:petfinder@example.com">
                                        petfinder@example.com
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">L</div>

                            <div>
                                <h3>LINE</h3>
                                <p>@PetFinder (บัญชีตัวอย่าง)</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">f</div>

                            <div>
                                <h3>Facebook</h3>
                                <p>Pet Finder - เพื่อนสี่ขา (ชื่อเพจตัวอย่าง)</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">⌖</div>

                            <div>
                                <h3>ที่อยู่</h3>
                                <p>เพิ่มที่อยู่หน่วยงานหรือสถานศึกษา</p>
                                <p>ประเทศไทย</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">◷</div>

                            <div>
                                <h3>เวลาทำการ</h3>
                                <p>วันจันทร์–ศุกร์ เวลา 09:00–18:00 น.</p>
                                <p>เวลาเปิดทำการตัวอย่าง</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- CONTACT FORM -->
                <div class="contact-form">

                    <h2>ส่งข้อความถึงเรา</h2>

                    <p>
                        เลือกหัวข้อและกรอกรายละเอียดที่ต้องการติดต่อ
                    </p>

                    <!-- แบบฟอร์มตัวอย่าง ยังไม่ได้เชื่อมกับ Backend -->
                    <form id="contactForm">

                        <div class="form-group">
                            <label for="name">ชื่อผู้ติดต่อ</label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="กรอกชื่อของคุณ"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="email">อีเมล</label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="กรอกอีเมลของคุณ"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="topic">หัวข้อที่ต้องการติดต่อ</label>

                            <select id="topic" name="topic" required>
                                <option value="">-- เลือกหัวข้อ --</option>
                                <option value="lost">แจ้งสัตว์เลี้ยงหาย</option>
                                <option value="found">แจ้งพบสัตว์เลี้ยง</option>
                                <option value="website">ปัญหาการใช้งานเว็บไซต์</option>
                                <option value="suggestion">ข้อเสนอแนะ</option>
                                <option value="other">อื่น ๆ</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">รายละเอียด</label>

                            <textarea
                                id="message"
                                name="message"
                                placeholder="พิมพ์ข้อความที่ต้องการติดต่อ"
                                required
                            ></textarea>
                        </div>

                        <button type="submit" class="submit-btn">
                            ส่งข้อความ
                        </button>

                        <div class="form-note">
                            แบบฟอร์มนี้ยังไม่ได้เชื่อมต่อกับระบบรับข้อความจริง
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- BOTTOM MESSAGE -->
    <section class="bottom-message">
        <div class="container">

            <h2>ช่วยกันตามหา ให้พวกเขาได้กลับบ้าน</h2>

            <p>
                หากพบสัตว์เลี้ยงที่พลัดหลง สามารถช่วยแจ้งเบาะแส
                เพื่อให้เจ้าของมีโอกาสพบสัตว์เลี้ยงอีกครั้ง
            </p>

            <a href="{{ url('/clue') }}" class="main-btn">
                ดูเบาะแสสัตว์เลี้ยง
            </a>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container footer-content">

            <div>
                <a href="{{ url('/') }}" class="site-logo">
                    petfinder.
                </a>

                <p>เว็บไซต์ช่วยตามหาสัตว์เลี้ยงที่สูญหาย</p>
                <p>© {{ date('Y') }} Pet Finder</p>
            </div>

            <div class="footer-links">
                <a href="{{ url('/') }}">หน้าหลัก</a>
                <a href="{{ url('/about') }}">เกี่ยวกับเรา</a>
                <a href="{{ url('/report') }}">แจ้งสัตว์หาย</a>
                <a href="#contact">ติดต่อเรา</a>
            </div>

        </div>
    </footer>

    <script>
        // แบบฟอร์มนี้ยังไม่ส่งข้อมูลไปยังฐานข้อมูล
        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault();

            alert(
                'แบบฟอร์มนี้ยังเป็นตัวอย่าง ' +
                'ต้องเชื่อมต่อ Backend ก่อนจึงจะส่งข้อความได้จริง'
            );
        });
    </script>

</body>
</html>