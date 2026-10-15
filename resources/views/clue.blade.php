
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แจ้งสัตว์เลี้ยงหาย | Pet Finder</title>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'IBM Plex Sans Thai', sans-serif;
            color: #45423d;
            background: #fff;
            line-height: 1.7;
        }

        a {
            text-decoration: none;
        }

        button, input, select, textarea {
            font: inherit;
        }

        /* Navbar */
        .site-header {
            width: 100%;
            min-height: 106px;
            padding: 0 42px;
            background: #fff;
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
            white-space: nowrap;
        }

        .site-nav a:hover,
        .site-nav a.active {
            color: #8b7968;
        }

        /* Page heading */
        .page-header {
            text-align: center;
            padding: 65px 20px 35px;
        }

        .page-label {
            color: #89847d;
            font-size: 13px;
            letter-spacing: 3px;
            margin-bottom: 15px;
        }

        .page-header h1 {
            font-size: 36px;
            font-weight: 400;
            color: #51463e;
            margin-bottom: 12px;
        }

        .page-header p {
            max-width: 720px;
            margin: auto;
            color: #77736c;
            font-size: 15px;
        }

        /* Main form */
        .report-container {
            width: 90%;
            max-width: 900px;
            margin: 0 auto 75px;
        }

        .report-form {
            padding: 35px;
            border: 1px solid #e5e1da;
            background: #fff;
        }

        .form-section {
            margin-bottom: 35px;
        }

        .form-section h2 {
            color: #51463e;
            font-size: 21px;
            font-weight: 500;
            padding-bottom: 12px;
            margin-bottom: 20px;
            border-bottom: 1px solid #e5e1da;
        }

        .section-description {
            color: #77736c;
            font-size: 14px;
            margin-top: -12px;
            margin-bottom: 18px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            color: #514d47;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 7px;
        }

        .required {
            color: #b94c43;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #dcd8d0;
            border-radius: 3px;
            background: #fff;
            color: #45423d;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #71816a;
        }

        .form-group textarea {
            min-height: 110px;
            resize: vertical;
        }

        /* Photo upload */
        .photo-upload-section {
            margin-top: 10px;
        }

        .upload-options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .upload-option {
            min-height: 140px;
            padding: 22px 15px;
            border: 1px dashed #b8b1a6;
            background: #faf9f6;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            transition: 0.2s;
        }

        .upload-option:hover {
            border-color: #71816a;
            background: #f1f3ed;
        }

        .upload-icon {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .upload-option-title {
            color: #51463e;
            font-size: 15px;
            font-weight: 600;
        }

        .upload-option-desc {
            color: #89847d;
            font-size: 12px;
            margin-top: 4px;
        }

        .upload-hint {
            color: #89847d;
            font-size: 12px;
            margin-top: 12px;
        }

        .photo-count {
            color: #71816a;
            font-size: 13px;
            margin-top: 12px;
        }

        .photo-preview {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 12px;
            margin-top: 18px;
        }

        .photo-item {
            min-width: 0;
        }

        .photo-item img {
            display: block;
            width: 100%;
            height: 120px;
            object-fit: cover;
            border: 1px solid #e5e1da;
        }

        .photo-name {
            font-size: 11px;
            color: #77736c;
            overflow-wrap: anywhere;
            margin-top: 5px;
        }

        .photo-remove {
            width: 100%;
            padding: 5px;
            margin-top: 5px;
            border: 1px solid #ddd5cb;
            background: #fff;
            color: #8b5148;
            cursor: pointer;
            font-size: 12px;
        }

        .photo-remove:hover {
            background: #f8eeee;
        }

        /* Map / location */
        .map-note {
            padding: 15px;
            background: #f8f7f3;
            border: 1px solid #e5e1da;
            color: #77736c;
            font-size: 14px;
        }

        /* Checkbox */
        .consent {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 13px;
            color: #77736c;
        }

        .consent input {
            margin-top: 7px;
            flex-shrink: 0;
        }

        /* Buttons */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 30px;
        }

        .btn {
            display: inline-block;
            padding: 11px 24px;
            border-radius: 3px;
            cursor: pointer;
            text-align: center;
            font-size: 14px;
        }

        .btn-cancel {
            border: 1px solid #dcd8d0;
            color: #625548;
            background: #fff;
        }

        .btn-submit {
            border: 1px solid #71816a;
            background: #71816a;
            color: #fff;
        }

        .btn-submit:hover {
            background: #58684f;
        }

        /* Footer */
        .footer {
            background: #45463f;
            color: #fff;
            padding: 28px 0;
        }

        .footer-content {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .footer p {
            color: #deddd6;
            font-size: 13px;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
        }

        .footer-links a {
            color: #deddd6;
            font-size: 13px;
        }

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
        }

        @media (max-width: 600px) {
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
                padding: 45px 20px 25px;
            }

            .page-header h1 {
                font-size: 29px;
            }

            .report-form {
                padding: 22px 17px;
            }

            .form-grid,
            .upload-options {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .upload-options {
                gap: 12px;
            }

            .photo-preview {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn {
                width: 100%;
            }

            .footer-content {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header class="site-header">
        <a href="{{ url('/') }}" class="site-logo">petfinder.</a>

        <nav class="site-nav">
            <a href="{{ url('/') }}">หน้าหลัก</a>
            <a href="{{ url('/pets') }}">สัตว์เลี้ยงที่หาย</a>
            <a href="{{ url('/about') }}">เกี่ยวกับเรา</a>
            <a href="{{ url('/clue') }}">แจ้งเบาะแส</a>
            <a href="{{ url('/report') }}" class="active">แจ้งสัตว์หาย</a>
            <a href="{{ url('/login') }}">เข้าสู่ระบบ</a>
        </nav>
    </header>

    <!-- PAGE TITLE -->
    <section class="page-header">
        <div class="page-label">PET FINDER / REPORT</div>
        <h1>แจ้งสัตว์เลี้ยงหาย</h1>
        <p>
            กรอกรายละเอียดของสัตว์เลี้ยงและเพิ่มรูปภาพ
            เพื่อช่วยให้ผู้ที่พบเห็นสามารถจดจำและแจ้งเบาะแสได้ง่ายขึ้น
        </p>
    </section>

    <!-- REPORT FORM -->
    <main class="report-container">

        <form
            class="report-form"
            id="reportForm"
            action="{{ url('/pets') }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf

            <!-- PET DETAILS -->
            <section class="form-section">
                <h2>ข้อมูลสัตว์เลี้ยง</h2>

                <div class="form-grid">

                    <div class="form-group">
                        <label for="pet_name">
                            ชื่อสัตว์เลี้ยง <span class="required">*</span>
                        </label>
                        <input
                            type="text"
                            id="pet_name"
                            name="name"
                            placeholder="เช่น มะลิ"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="species">
                            ประเภทสัตว์ <span class="required">*</span>
                        </label>
                        <select id="species" name="species" required>
                            <option value="">-- เลือกประเภทสัตว์ --</option>
                            <option value="dog">สุนัข</option>
                            <option value="cat">แมว</option>
                            <option value="bird">นก</option>
                            <option value="rabbit">กระต่าย</option>
                            <option value="other">อื่น ๆ</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="breed">สายพันธุ์</label>
                        <input
                            type="text"
                            id="breed"
                            name="breed"
                            placeholder="เช่น ไทย, เปอร์เซีย"
                        >
                    </div>

                    <div class="form-group">
                        <label for="color">สีและลักษณะเด่น</label>
                        <input
                            type="text"
                            id="color"
                            name="color"
                            placeholder="เช่น สีขาว มีแต้มสีน้ำตาล"
                        >
                    </div>

                    <div class="form-group">
                        <label for="lost_date">
                            วันที่หาย <span class="required">*</span>
                        </label>
                        <input
                            type="date"
                            id="lost_date"
                            name="lost_date"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="status">สถานะประกาศ</label>
                        <select id="status" name="status">
                            <option value="lost">กำลังตามหา</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label for="description">รายละเอียดเพิ่มเติม</label>
                        <textarea
                            id="description"
                            name="description"
                            placeholder="ระบุปลอกคอ ลักษณะนิสัย ตำหนิ หรือข้อมูลที่ช่วยให้จำได้"
                        ></textarea>
                    </div>

                </div>
            </section>

            <!-- PHOTO UPLOAD -->
            <section class="form-section photo-upload-section">
                <h2>รูปภาพสัตว์เลี้ยง</h2>

                <p class="section-description">
                    เลือกภาพจากอุปกรณ์หรือใช้กล้องถ่ายรูปใหม่
                    สามารถเลือกรูปได้สูงสุด 5 รูป
                </p>

                <div class="upload-options">

                    <label for="galleryInput" class="upload-option">
                        <span class="upload-icon">🖼️</span>
                        <span class="upload-option-title">เลือกรูปจากอุปกรณ์</span>
                        <span class="upload-option-desc">
                            เลือกภาพจากคอมพิวเตอร์หรือโทรศัพท์
                        </span>
                    </label>

                    <label for="cameraInput" class="upload-option">
                        <span class="upload-icon">📷</span>
                        <span class="upload-option-title">ถ่ายรูปใหม่</span>
                        <span class="upload-option-desc">
                            เปิดกล้องในอุปกรณ์ที่รองรับ
                        </span>
                    </label>

                </div>

                <!-- เลือกหลายรูปจากอุปกรณ์ -->
                <input
                    type="file"
                    id="galleryInput"
                    accept="image/jpeg,image/png,image/webp"
                    multiple
                    hidden
                >

                <!-- เลือกรูปหรือถ่ายภาพด้วยกล้อง -->
                <input
                    type="file"
                    id="cameraInput"
                    accept="image/*"
                    capture="environment"
                    hidden
                >

                <!-- ไฟล์จริงที่จะส่งไปยัง Laravel -->
                <input
                    type="file"
                    id="photosInput"
                    name="photos[]"
                    accept="image/jpeg,image/png,image/webp"
                    multiple
                    hidden
                >

                <div id="photoPreview" class="photo-preview"></div>

                <p id="photoCount" class="photo-count">
                    ยังไม่ได้เลือกรูปภาพ
                </p>

                <p class="upload-hint">
                    รองรับ JPG, PNG และ WEBP ขนาดไม่เกิน 5 MB ต่อรูป
                    เลือกได้สูงสุด 5 รูป
                </p>
            </section>

            <!-- LOCATION -->
            <section class="form-section">
                <h2>สถานที่ที่สัตว์เลี้ยงหาย</h2>

                <div class="form-grid">

                    <div class="form-group full-width">
                        <label for="last_seen_location">
                            สถานที่ที่พบครั้งสุดท้าย
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="last_seen_location"
                            name="last_seen_location"
                            placeholder="เช่น หน้าหมู่บ้าน ตลาด หรือชื่อถนน"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="province">จังหวัด</label>
                        <input
                            type="text"
                            id="province"
                            name="province"
                            placeholder="ระบุจังหวัด"
                        >
                    </div>

                    <div class="form-group">
                        <label for="contact_phone">
                            เบอร์โทรศัพท์ติดต่อ <span class="required">*</span>
                        </label>
                        <input
                            type="tel"
                            id="contact_phone"
                            name="contact_phone"
                            placeholder="เบอร์โทรศัพท์ของคุณ"
                            required
                        >
                    </div>

                    <div class="form-group full-width">
                        <div class="map-note">
                            <strong>ตำแหน่งบนแผนที่</strong>
                            <p>
                                ช่องนี้ยังไม่ได้เชื่อมระบบแผนที่
                                สามารถเพิ่ม Google Maps หรือ Leaflet
                                เพื่อปักหมุดตำแหน่งที่สัตว์เลี้ยงหายได้ในภายหลัง
                            </p>
                        </div>
                    </div>

                </div>
            </section>

            <!-- AGREEMENT -->
            <section class="form-section">
                <label class="consent">
                    <input type="checkbox" name="confirm_information" required>
                    <span>
                        ฉันตรวจสอบข้อมูลแล้วและยืนยันว่าข้อมูลที่แจ้งเป็นความจริง
                    </span>
                </label>
            </section>

            <!-- FORM BUTTONS -->
            <div class="form-actions">
                <a href="{{ url('/') }}" class="btn btn-cancel">
                    ยกเลิก
                </a>

                <button type="submit" class="btn btn-submit">
                    ส่งประกาศสัตว์เลี้ยงหาย
                </button>
            </div>

        </form>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-content">

            <div>
                <a href="{{ url('/') }}" class="site-logo"
                   style="color: #ffffff;">petfinder.</a>
                <p>เว็บไซต์ช่วยตามหาสัตว์เลี้ยงที่สูญหาย</p>
                <p>© {{ date('Y') }} Pet Finder</p>
            </div>

            <div class="footer-links">
                <a href="{{ url('/') }}">หน้าหลัก</a>
                <a href="{{ url('/about') }}">เกี่ยวกับเรา</a>
                <a href="{{ url('/clue') }}">แจ้งเบาะแส</a>
            </div>

        </div>
    </footer>

    <script>
        const galleryInput = document.getElementById('galleryInput');
        const cameraInput = document.getElementById('cameraInput');
        const photosInput = document.getElementById('photosInput');
        const photoPreview = document.getElementById('photoPreview');
        const photoCount = document.getElementById('photoCount');
        const reportForm = document.getElementById('reportForm');

        let selectedPhotos = [];

        const MAX_PHOTOS = 5;
        const MAX_SIZE = 5 * 1024 * 1024;

        const allowedTypes = [
            'image/jpeg',
            'image/png',
            'image/webp'
        ];

        galleryInput.addEventListener('change', function () {
            addPhotos(this.files);
            this.value = '';
        });

        cameraInput.addEventListener('change', function () {
            addPhotos(this.files);
            this.value = '';
        });

        function addPhotos(files) {
            for (const file of files) {

                if (!allowedTypes.includes(file.type)) {
                    alert('กรุณาเลือกรูป JPG, PNG หรือ WEBP');
                    continue;
                }

                if (file.size > MAX_SIZE) {
                    alert('รูปภาพ "' + file.name + '" มีขนาดเกิน 5 MB');
                    continue;
                }

                if (selectedPhotos.length >= MAX_PHOTOS) {
                    alert('เลือกรูปภาพได้สูงสุด 5 รูป');
                    break;
                }

                selectedPhotos.push({
                    id: (
                        window.crypto &&
                        typeof window.crypto.randomUUID === 'function'
                    )
                        ? window.crypto.randomUUID()
                        : Date.now() + '-' + Math.random(),
                    file: file,
                    previewUrl: URL.createObjectURL(file)
                });
            }

            renderPhotos();
        }

        function renderPhotos() {
            photoPreview.innerHTML = '';

            selectedPhotos.forEach(function (photo) {
                const item = document.createElement('div');
                item.className = 'photo-item';

                const img = document.createElement('img');
                img.src = photo.previewUrl;
                img.alt = 'ตัวอย่างรูปสัตว์เลี้ยง';

                const name = document.createElement('p');
                name.className = 'photo-name';
                name.textContent = photo.file.name;

                const removeButton = document.createElement('button');
                removeButton.type = 'button';
                removeButton.className = 'photo-remove';
                removeButton.textContent = 'ลบรูปนี้';

                removeButton.addEventListener('click', function () {
                    URL.revokeObjectURL(photo.previewUrl);

                    selectedPhotos = selectedPhotos.filter(function (item) {
                        return item.id !== photo.id;
                    });

                    syncPhotoInput();
                    renderPhotos();
                });

                item.appendChild(img);
                item.appendChild(name);
                item.appendChild(removeButton);

                photoPreview.appendChild(item);
            });

            if (selectedPhotos.length === 0) {
                photoCount.textContent = 'ยังไม่ได้เลือกรูปภาพ';
            } else {
                photoCount.textContent =
                    'เลือกรูปแล้ว ' + selectedPhotos.length +
                    ' จาก ' + MAX_PHOTOS + ' รูป';
            }

            syncPhotoInput();
        }

        function syncPhotoInput() {
            const dataTransfer = new DataTransfer();

            selectedPhotos.forEach(function (photo) {
                dataTransfer.items.add(photo.file);
            });

            photosInput.files = dataTransfer.files;
        }

        reportForm.addEventListener('submit', function (event) {
            syncPhotoInput();

            if (selectedPhotos.length > MAX_PHOTOS) {
                event.preventDefault();
                alert('เลือกรูปภาพได้สูงสุด 5 รูป');
                return;
            }

            for (const photo of selectedPhotos) {
                if (photo.file.size > MAX_SIZE) {
                    event.preventDefault();
                    alert('มีรูปภาพที่ขนาดเกิน 5 MB');
                    return;
                }
            }
        });
    </script>

</body>
</html>
