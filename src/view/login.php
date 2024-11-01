<!-- Content -->

<div class="container mt-5">
    <h1 class="text-center">เข้าสู่ระบบ</h1>
    <form action="controller/submit_login.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">ชื่อผู้ใช้:</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">รหัสผ่าน:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <?php
        if (isset($_GET['error']) && $_GET['error'] == 'login_failed') {
            echo "<p style='color: red;'>Login ไม่สำเร็จ</p>";
        }
        ?>
        <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
    </form>
</div>