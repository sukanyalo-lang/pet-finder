
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แจ้งสัตว์หาย | Pet Finder</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 20px 12px;
            font-family: Arial, Tahoma, sans-serif;
            background: #f7f5f0;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 20px auto;
            padding: 30px;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        h1 { margin-top: 0; }

        p {
            color: #777;
            line-height: 1.7;
        }

        label {
            display: block;
            margin: 18px 0 8px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font: inherit;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        button {
            width: 100%;
            margin-top: 24px;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background: #333;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            color: #555;
            text-decoration: none;
        }

        .message {
            display: none;
            margin-top: 18px;
            padding: 14px;
            border-radius: 8px;
            background: #e5f5e8;
            color: #246b35;
        }
    </style>
</head>

<body>
<main class="container">
    <h1>🐾 แจ้งสัตว์เลี้ยงหาย</h1>

    <p>กรอกข้อมูลสัตว์เลี้ยงที่หายไป เพื่อช่วยให้ผู้พบเห็นสามารถติดต่อเจ้าของได้</p>

    <form id="reportForm">
        <label for="animalType">ประเภทสัตว์ *</label>
        <select id="animalType" required>
            <option value="">-- เลือกประเภทสัตว์ --</option>
            <option>แมว</option>
            <option>สุนัข</option>
            <option>กระต่าย</option>
            <option>นก</option>
            <option>อื่น ๆ</option>
        </select>

        <label for="animalName">ชื่อสัตว์เลี้ยง</label>
        <input id="animalName" type="text" placeholder="ชื่อสัตว์เลี้ยง">

        <label for="reporterName">ชื่อผู้แจ้ง *</label>
        <input id="reporterName" type="text" required>

        <label for="contact">ช่องทางติดต่อ *</label>
        <input id="contact" type="text" placeholder="เบอร์โทรศัพท์หรือ LINE" required>

        <label for="date">วันที่หาย *</label>
        <input id="date" type="date" required>

        <label for="location">สถานที่ที่หาย *</label>
        <input id="location" type="text" placeholder="สถานที่ที่พบเห็นครั้งสุดท้าย" required>

        <label for="details">รายละเอียดสัตว์เลี้ยง *</label>
        <textarea id="details" placeholder="สี ขนาด ลักษณะเด่น หรือปลอกคอ" required></textarea>

        <label for="photo">ลิงก์รูปภาพ (ถ้ามี)</label>
        <input id="photo" type="url" placeholder="https://example.com/photo.jpg">

        <button type="submit">ส่งข้อมูลแจ้งสัตว์หาย</button>

        <div class="message" id="successMessage" role="status">
            รับข้อมูลตัวอย่างแล้ว แต่ยังไม่ได้บันทึกลงฐานข้อมูล
        </div>
    </form>

    <a href="{{ route('home') }}" class="back">← กลับหน้าหลัก</a>
</main>

<script>
    document.getElementById('reportForm').addEventListener('submit', function(event) {
        event.preventDefault();
        document.getElementById('successMessage').style.display = 'block';
    });
</script>
</body>
</html>
