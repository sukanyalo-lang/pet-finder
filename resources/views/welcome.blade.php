
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Finder | ตามหาเพื่อนตัวน้อย</title>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
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

        button, input, select {
            font-family: inherit;
        }

        .container {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }

        /* เมนู */
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
        }

        .nav-links {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
            font-size: 14px;
            color: #66615A;
        }

        .nav-links a:hover {
            color: #AAA198;
        }

        /* หน้าแรก */
        .hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 45px;
            padding: 70px 0;
        }

        .hero-label {
            font-size: 12px;
            letter-spacing: 2px;
            color: #89847D;
            margin-bottom: 18px;
        }

        .hero-title {
            font-size: clamp(36px, 5vw, 54px);
            line-height: 1.5;
            font-weight: 300;
            letter-spacing: .5px;
            color: #45423D;
            margin-bottom: 20px;
        }

        .hero-title em {
            font-style: normal;
            font-weight: 400;
            color: #89847D;
        }

        .hero-description {
            color: #777168;
            font-size: 15px;
            font-weight: 300;
            line-height: 2;
            max-width: 440px;
            margin-bottom: 28px;
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

        .hero-image {
            width: 100%;
            height: 360px;
            object-fit: cover;
            display: block;
        }

        /* หัวข้อ */
        .section {
            padding: 45px 0 65px;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 20px;
            margin-bottom: 25px;
        }

        .section-heading h2 {
            font-size: 27px;
            font-weight: 400;
        }

        .section-heading p {
            color: #89847D;
            font-size: 13px;
        }

        /* ค้นหา */
        .search-area {
            display: flex;
            gap: 10px;
            margin-bottom: 22px;
        }

        .search-area input,
        .search-area select {
            font-size: 14px;
            padding: 12px;
            border: 1px solid #E1DED9;
            background: #fff;
            color: #45423D;
            outline: none;
        }

        .search-area input {
            flex: 1;
            min-width: 0;
        }

        .search-area input:focus,
        .search-area select:focus {
            border-color: #89847D;
        }

        .search-area button {
            background: #45423D;
            color: #fff;
            border: 1px solid #45423D;
            padding: 0 22px;
            cursor: pointer;
            font-size: 14px;
        }

        .search-area button:hover {
            background: #fff;
            color: #45423D;
        }

        /* ตัวกรอง */
        .filter-tabs {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .filter-tab {
            padding: 7px 18px;
            background: #fff;
            border: 1px solid #E1DED9;
            color: #66615A;
            cursor: pointer;
            font-size: 13px;
        }

        .filter-tab.active,
        .filter-tab:hover {
            background: #45423D;
            color: #fff;
            border-color: #45423D;
        }

        /* การ์ดสัตว์ */
        .pet-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
        }

        .pet-card {
            border: 1px solid #EAE8E4;
            background: #fff;
            transition: transform .2s;
        }

        .pet-card:hover {
            transform: translateY(-3px);
        }

        .pet-image-wrap {
            position: relative;
            overflow: hidden;
        }

        .pet-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
        }

        .missing-days {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(255,255,255,.95);
            color: #45423D;
            padding: 5px 11px;
            font-size: 12px;
            border: 1px solid #EAE8E4;
        }

        .pet-info {
            padding: 18px;
        }

        .pet-info h3 {
            font-size: 20px;
            font-weight: 400;
            margin-bottom: 5px;
        }

        .pet-type {
            font-size: 12px;
            color: #89847D;
            margin-bottom: 12px;
        }

        .pet-location {
            font-size: 13px;
            color: #66615A;
            margin-bottom: 15px;
        }

        .detail-link {
            display: inline-block;
            font-size: 13px;
            border-bottom: 1px solid #89847D;
            padding-bottom: 2px;
        }

        .detail-link:hover {
            color: #89847D;
        }

        .no-results {
            display: none;
            text-align: center;
            padding: 35px;
            color: #89847D;
        }

        /* หมายเหตุข้อมูล */
        .legal-note {
            margin-top: 25px;
            padding: 16px;
            background: #F7F5F1;
            color: #777168;
            font-size: 12px;
            line-height: 1.9;
        }

        /* เกี่ยวกับเรา */
        .about {
            background: #F7F5F1;
            padding: 45px;
            margin-bottom: 65px;
        }

        .about h2 {
            font-size: 25px;
            font-weight: 400;
            margin-bottom: 12px;
        }

        .about p {
            font-size: 14px;
            color: #777168;
            max-width: 720px;
            line-height: 2;
        }

        /* แจ้งสัตว์หาย */
        .report {
            text-align: center;
            padding: 10px 0 75px;
        }

        .report h2 {
            font-size: 27px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .report p {
            color: #89847D;
            font-size: 14px;
            margin-bottom: 20px;
        }

        /* ท้ายเว็บ */
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

            .hero {
                grid-template-columns: 1fr;
                padding: 40px 0;
                gap: 25px;
            }

            .hero-image {
                height: 260px;
            }

            .pet-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 14px;
            }

            .pet-image {
                height: 200px;
            }

            .section-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .search-area {
                flex-wrap: wrap;
            }

            .search-area input {
                flex-basis: 100%;
            }

            .search-area select {
                flex: 1;
                min-width: 0;
            }

            .search-area button {
                min-height: 42px;
            }

            .about {
                padding: 25px;
            }

            .footer-content {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .pet-grid {
                grid-template-columns: 1fr;
            }

            .pet-image {
                height: 250px;
            }
        }
    </style>
</head>

<body>

    <!-- เมนู -->
    <nav>
        <div class="container nav-content">
            <a href="#home" class="logo">petfinder.</a>

            <div class="nav-links">
                <a href="{{ url('/') }}">หน้าหลัก</a>
                <a href="{{ url('/pets') }}">สัตว์เลี้ยงที่หาย</a>
                <a href="{{ url('/about') }}">เกี่ยวกับเรา</a>
                <a href="{{ url('/clue') }}">แจ้งเบาะแส</a>
                <a href="{{ url('/report') }}">แจ้งสัตว์หาย</a>
                <a href="{{ url('/login') }}">เข้าสู่ระบบ</a>
            </div>
        </div>
    </nav>

    <main>

        <!-- หน้าแรก -->
        <section class="container hero" id="home">
            <div>
                <div class="hero-label">
                    PET FINDER / ตามหาเพื่อนตัวน้อย
                </div>

                <h1 class="hero-title">
                    ทุกการรอคอย<br>
                    มีความหวัง<br>
                    <em>ที่จะได้พบกัน</em>
                </h1>

                <p class="hero-description">
                    ร่วมเป็นส่วนหนึ่งในการตามหาและส่งต่อความช่วยเหลือ
                    เพื่อให้เพื่อนตัวน้อยได้กลับไปสู่อ้อมกอด
                    ของคนที่รักอีกครั้ง
                </p>

                <a href="#pets" class="main-button">
                    ค้นหาเพื่อนที่หายไป →
                </a>
            </div>

            <img
                class="hero-image"
                src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?auto=format&fit=crop&w=1000&q=85"
                alt="สุนัข"
            >
        </section>

        <!-- รายการสัตว์เลี้ยง -->
        <section class="container section" id="pets">

            <div class="section-heading">
                <div>
                    <h2>สัตว์เลี้ยงที่กำลังตามหา</h2>
                    <p>ช่วยกันค้นหาและพาพวกเขากลับบ้าน</p>
                </div>

                <p id="petCount">พบสัตว์เลี้ยง 8 รายการ</p>
            </div>

            <!-- ช่องค้นหา -->
            <div class="search-area">
                <input
                    type="text"
                    id="searchInput"
                    placeholder="ค้นหาชื่อสัตว์หรือจังหวัด..."
                >

                <select id="typeFilter">
                    <option value="all">สัตว์ทุกประเภท</option>
                    <option value="cat">แมว</option>
                    <option value="dog">สุนัข</option>
                    <option value="rabbit">กระต่าย</option>
                    <option value="hamster">แฮมสเตอร์</option>
                    <option value="guinea-pig">หนูแกสบี้</option>
                    <option value="bird">นกเลี้ยง</option>
                    <option value="fish">ปลา</option>
                    <option value="ferret">เฟอเร็ต</option>
                </select>

                <button type="button" id="searchButton">ค้นหา</button>
            </div>

            <!-- ปุ่มประเภทสัตว์ -->
            <div class="filter-tabs">
                <button class="filter-tab active" data-filter="all">ทั้งหมด</button>
                <button class="filter-tab" data-filter="cat">แมว</button>
                <button class="filter-tab" data-filter="dog">สุนัข</button>
                <button class="filter-tab" data-filter="rabbit">กระต่าย</button>
                <button class="filter-tab" data-filter="hamster">แฮมสเตอร์</button>
                <button class="filter-tab" data-filter="guinea-pig">หนูแกสบี้</button>
                <button class="filter-tab" data-filter="bird">นกเลี้ยง</button>
                <button class="filter-tab" data-filter="fish">ปลา</button>
                <button class="filter-tab" data-filter="ferret">เฟอเร็ต</button>
            </div>

            <!-- การ์ดสัตว์เลี้ยง -->
            <div class="pet-grid" id="petGrid">

                <!-- 1. แมว -->
                <article class="pet-card"
                    data-type="cat"
                    data-search="ไมโล แมว กรุงเทพ กรุงเทพมหานคร">

                    <div class="pet-image-wrap">
                        <img class="pet-image"
                            src="https://images.unsplash.com/photo-1573865526739-10659fec78a5?auto=format&fit=crop&w=800&q=85"
                            alt="แมวชื่อไมโล">

                        <span class="missing-days">หายไปแล้ว 3 วัน</span>
                    </div>

                    <div class="pet-info">
                        <h3>ไมโล</h3>
                        <p class="pet-type">แมว · ขนสั้น</p>
                        <p class="pet-location">สถานที่หาย: กรุงเทพมหานคร</p>
                        <a href="#details" class="detail-link" data-name="ไมโล">ดูรายละเอียด →</a>
                    </div>
                </article>

                <!-- 2. สุนัข -->
                <article class="pet-card"
                    data-type="dog"
                    data-search="บิสกิต สุนัข นครราชสีมา โคราช">

                    <div class="pet-image-wrap">
                        <img class="pet-image"
                            src="https://images.unsplash.com/photo-1552053831-71594a27632d?auto=format&fit=crop&w=800&q=85"
                            alt="สุนัขชื่อบิสกิต">

                        <span class="missing-days">หายไปแล้ว 7 วัน</span>
                    </div>

                    <div class="pet-info">
                        <h3>บิสกิต</h3>
                        <p class="pet-type">สุนัข · โกลเด้นรีทรีฟเวอร์</p>
                        <p class="pet-location">สถานที่หาย: นครราชสีมา</p>
                        <a href="#details" class="detail-link" data-name="บิสกิต">ดูรายละเอียด →</a>
                    </div>
                </article>

                <!-- 3. กระต่าย -->
                <article class="pet-card"
                    data-type="rabbit"
                    data-search="สโนวี่ กระต่าย ขอนแก่น">

                    <div class="pet-image-wrap">
                        <img class="pet-image"
                            src="https://images.unsplash.com/photo-1585110396000-c9ffd4e4b308?auto=format&fit=crop&w=800&q=85"
                            alt="กระต่ายชื่อสโนวี่">

                        <span class="missing-days">หายไปแล้ว 1 วัน</span>
                    </div>

                    <div class="pet-info">
                        <h3>สโนวี่</h3>
                        <p class="pet-type">กระต่าย · ขนสีขาว</p>
                        <p class="pet-location">สถานที่หาย: ขอนแก่น</p>
                        <a href="#details" class="detail-link" data-name="สโนวี่">ดูรายละเอียด →</a>
                    </div>
                </article>

                <!-- 4. แฮมสเตอร์ -->
                <article class="pet-card"
                    data-type="hamster"
                    data-search="โมจิ แฮมสเตอร์ หนูแฮมสเตอร์ กรุงเทพ">

                    <div class="pet-image-wrap">
                        <img class="pet-image"
                            src="https://images.unsplash.com/photo-1425082661705-1834bfd09dca?auto=format&fit=crop&w=800&q=85"
                            alt="แฮมสเตอร์ชื่อโมจิ">

                        <span class="missing-days">หายไปแล้ว 2 วัน</span>
                    </div>

                    <div class="pet-info">
                        <h3>โมจิ</h3>
                        <p class="pet-type">แฮมสเตอร์</p>
                        <p class="pet-location">สถานที่หาย: กรุงเทพมหานคร</p>
                        <a href="#details" class="detail-link" data-name="โมจิ">ดูรายละเอียด →</a>
                    </div>
                </article>

                <!-- 5. หนูแกสบี้ -->
                <article class="pet-card"
                    data-type="guinea-pig"
                    data-search="ถั่วต้ม หนูแกสบี้ นครราชสีมา โคราช">

                    <div class="pet-image-wrap">
                        <img class="pet-image"
                            src="https://images.unsplash.com/photo-1516467508483-a7212febe31a?auto=format&fit=crop&w=800&q=85"
                            alt="สัตว์เลี้ยงตัวเล็ก">

                        <span class="missing-days">หายไปแล้ว 4 วัน</span>
                    </div>

                    <div class="pet-info">
                        <h3>ถั่วต้ม</h3>
                        <p class="pet-type">หนูแกสบี้</p>
                        <p class="pet-location">สถานที่หาย: นครราชสีมา</p>
                        <a href="#details" class="detail-link" data-name="ถั่วต้ม">ดูรายละเอียด →</a>
                    </div>
                </article>

                <!-- 6. นกเลี้ยง -->
                <article class="pet-card"
                    data-type="bird"
                    data-search="มะลิ นกเลี้ยง นกหงส์หยก เชียงใหม่">

                    <div class="pet-image-wrap">
                        <img class="pet-image"
                            src="https://images.unsplash.com/photo-1552728089-57bdde30beb3?auto=format&fit=crop&w=800&q=85"
                            alt="นกเลี้ยง">

                        <span class="missing-days">หายไปแล้ว 1 วัน</span>
                    </div>

                    <div class="pet-info">
                        <h3>มะลิ</h3>
                        <p class="pet-type">นกเลี้ยง · นกหงส์หยก</p>
                        <p class="pet-location">สถานที่หาย: เชียงใหม่</p>
                        <a href="#details" class="detail-link" data-name="มะลิ">ดูรายละเอียด →</a>
                    </div>
                </article>

                <!-- 7. ปลา -->
                <article class="pet-card"
                    data-type="fish"
                    data-search="ทองดี ปลาทอง ปลา ขอนแก่น">

                    <div class="pet-image-wrap">
                        <img class="pet-image"
                            src="https://images.unsplash.com/photo-1524704654690-b56c05c78a00?auto=format&fit=crop&w=800&q=85"
                            alt="ปลาสวยงาม">

                        <span class="missing-days">หายไปแล้ว 2 วัน</span>
                    </div>

                    <div class="pet-info">
                        <h3>ทองดี</h3>
                        <p class="pet-type">ปลาสวยงาม · ปลาทอง</p>
                        <p class="pet-location">สถานที่หาย: ขอนแก่น</p>
                        <a href="#details" class="detail-link" data-name="ทองดี">ดูรายละเอียด →</a>
                    </div>
                </article>

                <!-- 8. เฟอเร็ต -->
                <article class="pet-card"
                    data-type="ferret"
                    data-search="คาราเมล เฟอเร็ต กรุงเทพ กรุงเทพมหานคร">

                    <div class="pet-image-wrap">
                        <img class="pet-image"
                            src="https://images.unsplash.com/photo-1444212477490-ca407925329e?auto=format&fit=crop&w=800&q=85"
                            alt="สัตว์เลี้ยง">

                        <span class="missing-days">หายไปแล้ว 5 วัน</span>
                    </div>

                    <div class="pet-info">
                        <h3>คาราเมล</h3>
                        <p class="pet-type">เฟอเร็ต</p>
                        <p class="pet-location">สถานที่หาย: กรุงเทพมหานคร</p>
                        <a href="#details" class="detail-link" data-name="คาราเมล">ดูรายละเอียด →</a>
                    </div>
                </article>

            </div>

            <p class="no-results" id="noResults">
                ไม่พบสัตว์เลี้ยงที่ตรงกับการค้นหา
            </p>

            <div class="legal-note">
                หมายเหตุ: รายการสัตว์ในเว็บไซต์เป็นตัวอย่างสำหรับโครงงาน
                การเลี้ยงหรือครอบครองสัตว์บางชนิดอาจต้องมีเอกสารหรือใบอนุญาต
                โปรดตรวจสอบกฎหมายไทยตามชนิดพันธุ์และแหล่งที่มาของสัตว์ก่อน
                เพิ่มข้อมูลจริงลงในระบบ
            </div>

        </section>

        <!-- เกี่ยวกับเรา -->
        <section class="container" id="about">
            <div class="about">
                <h2>เกี่ยวกับ Pet Finder</h2>
                <p>
                    Pet Finder เป็นเว็บไซต์ที่มีแนวคิดเพื่อช่วยเผยแพร่ข้อมูล
                    สัตว์เลี้ยงที่สูญหาย ให้ผู้คนสามารถค้นหาจากชื่อ ประเภทสัตว์
                    และสถานที่ เพื่อเพิ่มโอกาสให้เพื่อนตัวน้อยได้กลับบ้านอย่างปลอดภัย
                </p>
            </div>
        </section>

        <!-- แจ้งสัตว์หาย -->
        <section class="container report" id="report">
            <h2>สัตว์เลี้ยงของคุณหายไปหรือไม่?</h2>
            <p>แจ้งข้อมูลสัตว์เลี้ยงที่หายไป เพื่อช่วยเพิ่มโอกาสในการตามหา</p>

            <button class="main-button" id="reportButton">
                แจ้งสัตว์เลี้ยงหาย
            </button>
            <a href="{{ url('/clue') }}" class="main-button">
    แจ้งเบาะแสสัตว์เลี้ยง →
</a>
        </section>

    </main>

    <!-- ท้ายเว็บ -->
    <footer>
        <div class="container footer-content">
            <span>petfinder. — ทุกการรอคอย มีความหวังที่จะได้พบกัน</span>
            <span>เว็บไซต์ตัวอย่างสำหรับโครงงาน</span>
        </div>
    </footer>

    <script>
        // เลือกองค์ประกอบในหน้าเว็บ
        const searchInput = document.getElementById('searchInput');
        const typeFilter = document.getElementById('typeFilter');
        const searchButton = document.getElementById('searchButton');
        const petCards = document.querySelectorAll('.pet-card');
        const filterTabs = document.querySelectorAll('.filter-tab');
        const petCount = document.getElementById('petCount');
        const noResults = document.getElementById('noResults');

        let activeType = 'all';

        // ค้นหาและกรองสัตว์เลี้ยง
        function filterPets() {
            const keyword = searchInput.value.trim().toLowerCase();

            // ให้ช่องเลือกประเภทมีความสำคัญก่อน
            const selectedType = typeFilter.value;
            const finalType = selectedType !== 'all'
                ? selectedType
                : activeType;

            let visibleCount = 0;

            petCards.forEach(function(card) {
                const petType = card.dataset.type;
                const petData = card.dataset.search.toLowerCase();

                const matchesKeyword = petData.includes(keyword);
                const matchesType =
                    finalType === 'all' || petType === finalType;

                if (matchesKeyword && matchesType) {
                    card.style.display = '';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            petCount.textContent =
                'พบสัตว์เลี้ยง ' + visibleCount + ' รายการ';

            noResults.style.display =
                visibleCount === 0 ? 'block' : 'none';
        }

        // กดปุ่มค้นหา
        searchButton.addEventListener('click', filterPets);

        // กด Enter เพื่อค้นหา
        searchInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                filterPets();
            }
        });

        // เปลี่ยนประเภทจากช่องเลือก
        typeFilter.addEventListener('change', function() {
            activeType = 'all';

            filterTabs.forEach(function(tab) {
                const active =
                    tab.dataset.filter === typeFilter.value;

                tab.classList.toggle('active', active);
            });

            filterPets();
        });

        // เปลี่ยนประเภทจากปุ่ม
        filterTabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                activeType = tab.dataset.filter;
                typeFilter.value = 'all';

                filterTabs.forEach(function(button) {
                    button.classList.remove('active');
                });

                tab.classList.add('active');
                filterPets();
            });
        });

        // ปุ่มดูรายละเอียด (ตัวอย่าง)
        document.querySelectorAll('.detail-link').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                alert(
                    'ข้อมูลของ ' + link.dataset.name +
                    '\n\nหน้านี้เป็นตัวอย่าง ยังไม่ได้เชื่อมต่อฐานข้อมูล'
                );
            });
        });

        // ปุ่มแจ้งสัตว์หาย (ตัวอย่าง)
        document.getElementById('reportButton')
            .addEventListener('click', function() {
                alert(
                    'ฟังก์ชันแจ้งสัตว์หายยังเป็นตัวอย่าง\n' +
                    'ขั้นตอนต่อไปสามารถสร้างแบบฟอร์มและระบบบันทึกข้อมูลได้'
                );
                <a href="{{ url('/report') }}">แจ้งเบาะแส</a>
            });
    </script>

</body>
</html>