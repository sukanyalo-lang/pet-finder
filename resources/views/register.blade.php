<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Pet Finder</title>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'IBM Plex Sans Thai', sans-serif;
        }

        body {
            background: #F8F7F5;
            color: #45423D;
            min-height: 100vh;
        }

        nav {
            background: #FFFFFF;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #EAE8E4;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #45423D;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 24px;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: #68635B;
            font-size: 14px;
        }

        .nav-links a:hover {
            color: #A18B70;
        }

        .login-link {
            border: 1px solid #D8D3CB;
            padding: 8px 18px;
            border-radius: 8px;
        }

        .container {
            min-height: calc(100vh - 75px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .register-card {
            background: #FFFFFF;
            width: 100%;
            max-width: 460px;
            padding: 36px;
            border: 1px solid #EAE8E4;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(69, 66, 61, 0.06);
        }

        .icon {
            width: 60px;
            height: 60px;
            background: #F0EDE7;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 29px;
            margin: 0 auto 18px;
        }

        h1 {
            text-align: center;
            font-size: 27px;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #89847D;
            font-size: 14px;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 17px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 7px;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #DCD8D1;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            background: #FFFFFF;
        }

        input:focus {
            border-color: #A18B70;
            box-shadow: 0 0 0 3px rgba(161, 139, 112, 0.12);
        }

        .hint {
            color: #89847D;
            font-size: 12px;
            margin-top: 5px;
        }

        .terms {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            font-size: 13px;
            color: #68635B;
            margin: 20px 0;
        }

        .terms input {
            width: auto;
            margin-top: 5px;
        }

        .terms a {
            color: #8A745B;
            text-decoration: none;
        }

        .register-btn {
            width: 100%;
            padding: 13px;
            background: #45423D;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s;
        }

        .register-btn:hover {
            background: #625B50;
        }

        .login-text {
            text-align: center;
            margin-top: 22px;
            font-size: 14px;
            color: #89847D;
        }

        .login-text a {
            color: #45423D;
            font-weight: 600;
            text-decoration: none;
        }

        .message {
            display: none;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 13px;
        }

        .error {
            display: block;
            background: #FCEDEC;
            color: #A33B32;
        }

        @media (max-width: 600px) {
            nav {
                padding: 15px 5%;
                flex-wrap: wrap;
                gap: 12px;
            }

            .nav-links {
                gap: 12px;
                flex-wrap: wrap;
            }

            .register-card {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body>

<nav>
    <a href="/" class="logo">🐾 Pet Finder</a>

    <div class="nav-links">
        <a href="/">หน้าหลัก</a>
        <a href="/pets">สัตว์เลี้ยง</a>
        <a href="/clue">เบาะแส</a>
        <a href="/report">แจ้งสัตว์หาย</a>
        <a href="/login" class="login-link">เข้าสู่ระบบ</a>
    </div>
</nav>

<div class="container">
    <div class="register-card">

        <div class="icon">🐾</div>

        <h1>สร้างบัญชีใหม่</h1>
        <p class="subtitle">สมัครสมาชิก Pet Finder เพื่อช่วยเหลือสัตว์เลี้ยง</p>

        <div id="message" class="message"></div>

        <form id="registerForm">
            <div class="form-group">
                <label for="name">ชื่อผู้ใช้งาน</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="กรอกชื่อของคุณ"
                    autocomplete="name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">อีเมล</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="example@email.com"
                    autocomplete="email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">รหัสผ่าน</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="อย่างน้อย 8 ตัวอักษร"
                    minlength="8"
                    autocomplete="new-password"
                    required
                >
                <p class="hint">ควรใช้รหัสผ่านที่คาดเดาได้ยาก</p>
            </div>

            <div class="form-group">
                <label for="password_confirmation">ยืนยันรหัสผ่าน</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="กรอกรหัสผ่านอีกครั้ง"
                    minlength="8"
                    autocomplete="new-password"
                    required
                >
            </div>

            <label class="terms">
                <input type="checkbox" id="agree" required>
                <span>ฉันยอมรับเงื่อนไขการใช้งานและนโยบายความเป็นส่วนตัว</span>
            </label>

            <button type="submit" class="register-btn">
                สมัครสมาชิก
            </button>
        </form>

        <p class="login-text">
            มีบัญชีอยู่แล้ว?
            <a href="/login">เข้าสู่ระบบ</a>
        </p>

    </div>
</div>

<script>
    const form = document.getElementById('registerForm');
    const message = document.getElementById('message');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const password = document.getElementById('password').value;
        const confirmPassword =
            document.getElementById('password_confirmation').value;

        message.className = 'message';

        if (password !== confirmPassword) {
            message.textContent = 'รหัสผ่านทั้งสองช่องไม่ตรงกัน กรุณาตรวจสอบอีกครั้ง';
            message.classList.add('error');
            return;
        }

        message.textContent =
            'ตรวจสอบข้อมูลเรียบร้อยแล้ว แต่ระบบสมัครสมาชิกยังไม่ได้เชื่อมต่อฐานข้อมูล';
        message.className = 'message error';
    });
</script>

</body>
</html>