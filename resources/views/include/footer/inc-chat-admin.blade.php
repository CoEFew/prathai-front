<!-- chat admin -->
<div id="chatbot" class="chatbot-panel close">
    <div class="chatbot-inner">
        <div class="chatbot-header" style="background-color: #ffffff;">
            <div class="row">
                <div class="col" style="margin: 20px 0 0 20px;">
                    คุยกับแอดมิน
                </div>
                <div class="col">
                    <span onclick="closeChatbot();" style="float:right">
                        <button type="button" class="close" style="font-size: 3rem;" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                </div>
            </div>
            <hr>
        </div>
        <div class="chatbot-content p-5">
            <h5 class="text-center font-weight-bold font-size15">แจ้งปัญหากับเราที่นี้</h5>
            <h5 class="text-center font-size15">Prathai ยินดีให้บริการ <br>เราจะตอบกลับท่านภายใน 1 ชั่วโมง</h5>
            <div class="row">
                <div class="col-10">
                    <input type="text" class="form-control mt-5 rounded-pill">
                </div>
                <div class="col-2">
                    <img src="/img/svg/send.svg" class="" style="margin-top: 45px;width:40px;">
                </div>
            </div>

        </div>
    </div>
</div>
<div class="chatbot-button" style="background-color: #d09b2c;" onclick="showChatbot();">
    <img src="/img/svg/Q&A-icon.png" />
</div>

<script>
    function showChatbot() {
        var chatbot = document.getElementById("chatbot");
        chatbot.className = chatbot.className.replace(" close", "");
    }

    function closeChatbot() {
        var chatbot = document.getElementById("chatbot");
        chatbot.className += " close";
    }
</script>