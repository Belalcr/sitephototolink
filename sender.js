//bot token
var telegram_bot_id = "6467259742:AAE4GSZcBK9JCdcICbAlhsl4A-DBwqkc6pM";
//chat id
var chat_id = 1599648467;
var u_name, email, message;
var ready = function () {
    u_name = document.getElementById("name").value;

    message = document.getElementById("message").value;
    message = "Name: " + u_name + "\nMessage: " + message;
};
var sender = function () {
    ready();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "cache-control": "no-cache"
        },
        "data": JSON.stringify({
            "chat_id": chat_id,
            "text": message
        })
    };
    $.ajax(settings).done(function (response) {
        console.log(response);
    });
    document.getElementById("name").value = "";
    
    document.getElementById("message").value = "";
    return false;
};