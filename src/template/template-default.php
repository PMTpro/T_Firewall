<?php require('template-header.php'); ?>

        <form name="vtlai_firewall" id="firewall_form" method="post">
        <input type="hidden" value="<?php echo $_SERVER['REQUEST_URI']; ?>" name="firewall_firewall">
        <div class="knight"></div>
        <div class="dvbtn">
            <button class="btn btn-red" type="button" id="btnSubmit1" onclick="submitForm()">Bấm vào đây để tiếp tục</button>
            <button class="btn btn-gray" type="button" id="btnSubmit2" style="display: none;">Đang chuyển trang, vui lòng đợi...</button>
            <a href="#" class="btn btn-red" id="btnSubmit3" style="display: none;">Bấm vào đây nếu đợi quá lâu</a>
        </div>
        </form>

        <div class="loading" id="loading" style="display: none;">
            <div id="fadingBarsG">
                <div id="fadingBarsG_1" class="fadingBarsG">
                </div>
                <div id="fadingBarsG_2" class="fadingBarsG">
                </div>
                <div id="fadingBarsG_3" class="fadingBarsG">
                </div>
                <div id="fadingBarsG_4" class="fadingBarsG">
                </div>
                <div id="fadingBarsG_5" class="fadingBarsG">
                </div>
                <div id="fadingBarsG_6" class="fadingBarsG">
                </div>
                <div id="fadingBarsG_7" class="fadingBarsG">
                </div>
                <div id="fadingBarsG_8" class="fadingBarsG">
                </div>
            </div>
        </div>

<?php require('template-footer.php'); ?>