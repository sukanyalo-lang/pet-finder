
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา | Pet Finder</title>

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

        .container {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }

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

        .hero {
            padding: 70px 0 45px;
            max-width: 900px;
        }

        .eyebrow {
            font-size: 12px;
            letter-spacing: 2px;
            color: #89847D;
            margin-bottom: 14px;
        }

        h1 {
            font-size: clamp(34px, 5vw, 52px);
            line-height: 1.45;
            font-weight: 300;
            margin-bottom: 20px;
        }

        h1 em {
            font-style: normal;
            color: #89847D;
        }

        .hero p {
            font-size: 15px;
            color: #777168;
            line-height: 2;
            max-width: 750px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
            padding: 15px 0 70px;
        }

        .card {
            border: 1px solid #EAE8E4;
            padding: 25px;
        }

        .number {
            font-size: 12px;
            letter-spacing: 2px;
            color: #89847D;
            margin-bottom: 14px;
        }

        .card h2 {
            font-size: 20px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;
            color: #777168;
            line-height: 1.9;
        }

        .note {
            background: #F7F5F1;
            padding: 30px;
            margin-bottom: 65px;
        }

        .note h2 {
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 10px;
        }

        .note p {
            font-size: 14px;
            color: #777168;
            line-height: 2;
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

            .hero {
                padding: 45px 0 25px;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .footer-content {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="container nav-content">
            <a href="{{ url('/') }}" class="logo">petfinder.</a>

            <div class="nav-links">
                <a href="{{ url('/') }}">หน้าหลัก</a>
                <a href="{{ url('/pets') }}">สัตว์เลี้ยงที่หาย</a>
                <a href="{{ url('/about') }}" class="active">เกี่ยวกับเรา</a>
                <a href="{{ url('/clue') }}">แจ้งเบาะแส</a>
                <a href="{{ url('/report') }}">แจ้งสัตว์หาย</a>
                <a href="{{ url('/login') }}">เข้าสู่ระบบ</a>
            </div>
        </div>
    </nav>

    <main class="container">

        <section class="hero">
            <div class="eyebrow">ABOUT PET FINDER</div>

            <h1>
                ทุกการรอคอย<br>
                มีความหวัง <em>ที่จะได้พบกัน</em>
            </h1>

            <p>
                Pet Finder เป็นเว็บไซต์ตัวอย่างสำหรับช่วยเผยแพร่ข้อมูล
                สัตว์เลี้ยงที่สูญหาย ให้เจ้าของและผู้คนในชุมชนช่วยกันค้นหา
                โดยสามารถดูข้อมูลสัตว์เลี้ยง ประเภท และสถานที่ที่หาย
                เพื่อเพิ่มโอกาสให้เพื่อนตัวน้อยได้กลับบ้านอย่างปลอดภัย
            </p>
        </section>

        <section class="cards">

            <article class="card">
                <div class="number">01 / OUR PURPOSE</div>
                <h2>ช่วยกระจายข้อมูล</h2>
                <p>
                    รวบรวมข้อมูลสัตว์เลี้ยงที่หายให้ค้นหาได้สะดวก
                    และช่วยให้ข้อมูลไปถึงผู้คนได้มากขึ้น
                </p>
            </article>

            <article class="card">
                <div class="number">02 / OUR COMMUNITY</div>
                <h2>ร่วมมือกันตามหา</h2>
                <p>
                    เปิดพื้นที่ให้ผู้พบเห็นสามารถแจ้งเบาะแส
                    เพื่อช่วยเจ้าของติดตามสัตว์เลี้ยงของตน
                </p>
            </article>

            <article class="card">
                <div class="number">03 / OUR HOPE</div>
                <h2>พากลับบ้านอย่างปลอดภัย</h2>
                <p>
                    สนับสนุนการสื่อสารข้อมูลที่ชัดเจน
                    และการติดต่อกลับอย่างระมัดระวัง
                </p>
            </article>

        </section>

        <section class="note">
            <h2>ร่วมเป็นส่วนหนึ่งของการช่วยเหลือ</h2>
            <p>
                หากพบสัตว์เลี้ยงที่ตรงกับข้อมูล โปรดแจ้งเบาะแส
                พร้อมระบุสถานที่และเวลาที่พบเห็น และติดต่อเจ้าของ
                ผ่านช่องทางที่ให้ไว้ ข้อมูลในเว็บไซต์นี้เป็นตัวอย่าง
                สำหรับโครงงานและยังไม่ได้เชื่อมต่อฐานข้อมูลจริง
            </p>
        </section>

    </main>

    <footer>
        <div class="container footer-content">
            <span>petfinder. — ทุกการรอคอย มีความหวังที่จะได้พบกัน</span>
            <span>เว็บไซต์ตัวอย่างสำหรับโครงงาน</span>
        </div>
    </footer>

</body>
</html>
