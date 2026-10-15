
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ | Pet Finder</title>

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

        button, input {
            font-family: inherit;
        }

        .container {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }

        /* แถบเมนูเหมือนหน้าแรก */
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

        /* กล่องเข้าสู่ระบบ */
        .login-section {
            width: 90%;
            max-width: 450px;
            margin: 65px auto 85px;
        }

        .eyebrow {
            text-align: center;
            font-size: 12px;
            letter-spacing: 2px;
            color: #89847D;
            margin-bottom: 12px;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            font-weight: 300;
            margin-bottom: 8px;
        }

        .description {
            text-align: center;
            color: #777168;
            font-size: 14px;
            margin-bottom: 28px;
        }

        .login-card {
            border: 1px solid #EAE8E4;
            padding: 30px;
            background: #fff;
        }

        .field {
            margin-bottom: 20px;
        }

        .field label {
            display: block;
            font-size: 14px;
            margin-bottom: 7px;
        }

        .field input {
            width: 100%;
            padding: 12px;
            border: 1px solid #E1DED9;
            background: #fff;
            font-size: 14px;
            color: #45423D;
            outline: none;
        }

        .field input:focus {
            border-color: #89847D;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            border: 1px solid #45423D;
            background: #45423D;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
            transition: .2s;
        }

        .login-button:hover {
            background: #fff;
            color: #45423D;
        }

        .register-text {
            text-align: center;
            margin-top: 22px;
            font-size: 13px;
            color: #777168;
        }

        .register-text a {
            text-decoration: underline;
            color: #45423D;
        }

        .message {
            display: none;
            background: #F7F5F1;
            padding: 12px;
            margin-top: 15px;
            font-size: 13px;
            text-align: center;
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

            .login-section {
                margin: 40px auto 55px;
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
                <a href="{{ url('/about') }}">เกี่ยวกับเรา</a>
                <a href="{{ url('/clue') }}">แจ้งเบาะแส</a>
                <a href="{{ url('/report') }}">แจ้งสัตว์หาย</a>
                <a href="{{ url('/login') }}" class="active">เข้าสู่ระบบ</a>
            </div>
        </div>
    </nav>

    <main class="login-section">

        <div class="eyebrow">PET FINDER / WELCOME BACK</div>

        <h1>เข้าสู่ระบบ</h1>

        <p class="description">
            เข้าสู่ระบบเพื่อใช้งาน Pet Finder
        </p>

        <div class="login-card">
            <form id="loginForm">

                <div class="field">
                    <label for="email">อีเมล</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="กรอกอีเมลของคุณ"
                        required
                    >
                </div>

                <div class="field">
                    <label for="password">รหัสผ่าน</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="กรอกรหัสผ่าน"
                        required
                    >
                </div>

                <button type="submit" class="login-button">
                    เข้าสู่ระบบ →
                </button>

                <div id="message" class="message">
                    หน้าจอนี้เป็นตัวอย่าง ยังไม่ได้เชื่อมต่อระบบตรวจสอบบัญชี
                </div>

            </form>

            <p class="register-text">
                ยังไม่มีบัญชี?
                <a href="{{ url('/register') }}">สมัครสมาชิก</a>
            </p>
        </div>

    </main>

    <footer>
        <div class="container footer-content">
            <span>petfinder. — ทุกการรอคอย มีความหวังที่จะได้พบกัน</span>
            <span>เว็บไซต์ตัวอย่างสำหรับโครงงาน</span>
        </div>
    </footer>

    <script>
        document.getElementById('loginForm')
            .addEventListener('submit', function(event) {
                event.preventDefault();

                document.getElementById('message').style.display = 'block';
            });
    </script>

</body>
</html>
