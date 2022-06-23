function signatureModal(id){
    $.post("http://192.168.18.13:81/shahab/right-movers/driver/checkBalance",{id},function (e){
        $("#balance").val(parseInt(e))
        $("#schedule-visit").modal('show')
        $(".appendLEadIdToModal").attr('id',id)
    })
}

(function(window) {
    var $canvas,
        onResize = function(event) {
            $canvas.attr({
                // height: window.innerHeight,
                // width: window.innerWidth
                height: 300,
                width: 450
            });
        };
    $(document).ready(function() {
        $canvas = $('canvas');
        window.addEventListener('orientationchange', onResize, false);
        window.addEventListener('resize', onResize, false);
        onResize();
        $('form').signaturePad({
            // onDraw :function (resp){
            // },
            // onDrawEnd :function (){
            // 	console.log(this)
            // },
            drawOnly: true,
            defaultAction: 'drawIt',
            validateFields: false,
            lineWidth: 0,
            output: null,
            sigNav: null,
            name: null,
            typed: null,
            clear: 'input[type=reset]',
            typeIt: null,
            drawIt: null,
            typeItDesc: null,
            drawItDesc: null
        });
    });
}(this));

function canvasToImg(lead_id){
    var pay =$("#payment").val();
    var can = document.getElementById('canvas');
    var ctx = can.getContext('2d');
    ctx.fillRect(50,50,50,50);
    var img = new Image();
    img.src = can.toDataURL();
    $.post('http://192.168.18.13:81/shahab/right-movers/driver/addSignature',{img:img.src,pay,lead_id},function (e){
        console.log(e)
        // location.reload()
    })
}