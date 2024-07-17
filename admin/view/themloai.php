<style>
    label {
        display: block;
        margin-bottom: 8px;
    }

    .radio {
        width: 100%;
        display: flex;
        justify-content: space-around;
        color: white;
        flex-wrap: wrap;

        font-family: inherit;
        font-weight: bold;
    }

    .check {
        margin: 5px;
        flex-basis: 300px;
    }

    input[type=checkbox] {
        margin-right: 10px;
    }
</style>
<div class="header" style="
    margin-left: 50px;
">
    <?php
    echo "<h6 class='loidn'>" . implode($loi) . "</h6>";
    ?>
    <h4 class="title">Thêm loại phòng</h4>
    <p class="category"> </p>
    <button type="button" style="border: 0px solid black; margin-top: 20px; padding: 9px; border-radius: 3px; background-color: #ffaa34; " onmouseover="this.style.backgroundColor='#ee9820'" onmouseout="this.style.backgroundColor='#ffaa34'"><a style=" color: white; font-weight: 550;" href="./index.php?act=loaiphong">Quay lại</a></button>
</div>
<div class="login-box">
    <form method="post" enctype="multipart/form-data">
        <div class="user-box">
            <input type="text" name="name" required="">
            <label>Loại phòng</label>
        </div>
        <div class="radio">
            <div class="check">
                <input type="checkbox" name="nhah">Nhà Hàng
            </div>
            <div class="check">
                <input type="checkbox" name="beboi">Bể Bơi
            </div>
            <div class="check">
                <input type="checkbox" name="wifi">Wifi
            </div>
            <div class="check">
                <input type="checkbox" name="gym">Nhà Gym
            </div>
            <div class="check">
                <input type="checkbox" name="maylanh">Máy lạnh
            </div>
            <div class="check">
                <input type="checkbox" name="thuoc">Phòng hút thuốc
            </div>
        </div>
        <center>
            <button type="submit">
                Gửi đi
                <span></span>
            </button>
        </center>
    </form>
</div>