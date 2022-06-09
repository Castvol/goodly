<?php
/* @var $this PopupController */
/* @var $model Popup */

if ($model->show) {
?>
    function modal() {
    let uniqueId = makeid(10);
    let div = document.createElement('div');
    div.className = "popup-" + uniqueId;
    div.style = "display:none;width:300px;background:#eee;box-shadow:4px 4px 8px 0px rgba(34, 60, 80, 0.2)";
    div.innerHTML = '<div style="background:#000;padding:20px;text-align:center;color:#fff;font-size:24px"><div><?php echo $model->title;?></div><div style="font-size:18px;margin-top:10px"><?php echo $model->content;?></div></div><div style="background:#fff;padding:20px;text-align:center"><div style="background:green;cursor:pointer;padding:10px;text-align:center;color:#fff;display:inline-block" id="close'+uniqueId+'">Закрыть окно</div></div>';

    let modal = document.createElement("div"), block = div.cloneNode(true);
    Object.assign(modal.style, {
    position: "fixed",
    left: "0px",
    top: "0px",
    width: "100%",
    height: "100%",
    backgroundColor: "rgba(0,0,0,.5)"
    });
    Object.assign(block.style, {
    display: "initial",
    opacity: 0,
    position: "absolute",
    left: "50%",
    top: "50%",
    transform: "translate(-50%, calc(-50% + 100px))",
    transition: ".6s opacity, .6s transform"
    });
    modal.appendChild(block);
    document.body.appendChild(modal);
    setTimeout(()=>Object.assign(block.style, {
    opacity: 1,
    transform: "translate(-50%,-50%)"
    }), 20);
    element = document.getElementById('close'+uniqueId);
    element.addEventListener("click", function(e) {
    setTimeout(()=>Object.assign(block.style, {
    opacity: 0,
    }), 20);
    setTimeout(()=>document.body.removeChild(modal), 700);
    });
    }

    window.onload = function(e){
    setTimeout(function() {
    modal();
    }, 10000);
    }

    function makeid(count) {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < count; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
    }
<?php
}
Yii::app()->end();
?>
