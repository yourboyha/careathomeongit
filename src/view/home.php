<!-- แบนเนอร์ -->
<section class="banner">
    <h1>การดูแลที่อบอุ่น เริ่มต้นที่นี่</h1>
</section>

<!-- ส่วนให้ความรู้ประชาสัมพันธ์ -->
<section class="knowledge">
    <h2>ความรู้เกี่ยวกับผู้สูงอายุ</h2>
    <div class="articles">
        <article>
            <h3>วิธีการดูแลสุขภาพจิตของผู้สูงอายุ</h3>
            <p>เนื้อหาเกี่ยวกับวิธีการดูแลสุขภาพจิตที่เหมาะสม</p>
            <a href="#">อ่านต่อ</a>
        </article>
        <article>
            <h3>การปรับสภาพแวดล้อมในบ้าน</h3>
            <p>ข้อมูลเกี่ยวกับการปรับปรุงสภาพแวดล้อมให้ปลอดภัย</p>
            <a href="#">อ่านต่อ</a>
        </article>
    </div>
</section>


<!-- ส่วนสถิติผู้เข้าชม -->
<section class="statistics">
    <h2>สถิติผู้เข้าชม</h2>
    <p>มีผู้เข้าชมแล้ว: <?php include "src/view/counter.php" ?> ครั้ง</p>
</section>

<!-- ส่วนให้คะแนนบริการ -->
<section class="rating">
    <h2>ให้คะแนนบริการของเรา</h2>
    <form>
        <label for="rating">ให้คะแนน (1-5 ดาว):</label>
        <select id="rating" name="rating">
            <option value="1">1 ดาว</option>
            <option value="2">2 ดาว</option>
            <option value="3">3 ดาว</option>
            <option value="4">4 ดาว</option>
            <option value="5">5 ดาว</option>
        </select>
        <br>
        <label for="feedback">ความคิดเห็น:</label>
        <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea>
        <br>
        <input type="submit" value="ส่งคะแนน">
    </form>
</section>