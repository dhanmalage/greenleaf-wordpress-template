/**
 * Created by dhana on 8/7/2016.
 */

/* *************** visualizer ***************** */

jQuery(document).ready(function(){
    jQuery('#link-tab-2').click(function(){
        jQuery('#link-tab-2').addClass('active');
        jQuery('#link-tab-1').removeClass('active');
        jQuery('#content-tab-1').addClass('hide');
        jQuery('#content-tab-2').removeClass('hide');
    });
    jQuery('#link-tab-1').click(function(){
        jQuery('#link-tab-1').addClass('active');
        jQuery('#link-tab-2').removeClass('active');
        jQuery('#content-tab-2').addClass('hide');
        jQuery('#content-tab-1').removeClass('hide');
    });
});

(function() {

    var canvasOffsetHeight = document.getElementById('myDiv').offsetHeight;
    var canvasOffsetWidth = document.getElementById('myDiv').offsetWidth;

    var canvas = new fabric.Canvas('canvas');

    window.addEventListener('resize', resizeCanvas, false);

    function resizeCanvas() {
        canvas.setHeight(canvasOffsetHeight);
        canvas.setWidth(canvasOffsetWidth);
        canvas.renderAll();
    }

    // resize on init
    resizeCanvas();

    // onload default background image
    //document.getElementById('visualizer-default-background').getAttribute("dataimgurl");
    canvas.setBackgroundImage(document.getElementById('visualizer-default-background').getAttribute("dataimgurl"), canvas.renderAll.bind(canvas), {
        backgroundImageOpacity: 0.5,
        backgroundImageStretch: false
    });

    // preset background images from buttons
    jQuery('.visualizer-background-btn').click(function () {
        var img_url = jQuery(this).attr('dataurl');
        //document.getElementById('canvas-bgimg').style.backgroundImage = "url(" + img_url + ")";
        canvas.setBackgroundImage(img_url, canvas.renderAll.bind(canvas), {
            backgroundImageOpacity: 0.5,
            backgroundImageStretch: false
        });
        //canvas.renderAll();
    });

    // user defined background image

    jQuery('#visualizer-custom-background').click(function () {
        document.getElementById("bgimg").click();
    });
    document.getElementById('bgimg').addEventListener('change', readURL, true);
    function readURL() {
        var file = document.getElementById("bgimg").files[0];
        var reader = new FileReader();
        reader.onloadend = function () {
            //document.getElementById('canvas-bgimg').style.backgroundImage = "url(" + reader.result + ")";
            canvas.setBackgroundImage(reader.result, canvas.renderAll.bind(canvas), {
                backgroundImageOpacity: 0.5,
                backgroundImageStretch: false
            });
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {
        }
    }


// display and hide item controllers from corners

    var HideControls = {
        'tl': true,
        'tr': false,
        'bl': true,
        'br': true,
        'ml': false,
        'mt': false,
        'mr': false,
        'mb': false,
        'mtr': false
    };
    /*
     fabric.Image.fromURL('http://localhost/visualiser/images/canvas-default.png', function (img) {
     img.top = 60;
     img.left = 30;
     img.setControlsVisibility(HideControls);
     canvas.add(img);
     });
     */

    // item add to canvas and add to cart at same time

    jQuery('.visualiser-product-category ul').on('click', 'li', function (e) {
        //var image = document.getElementById(e).lastChild.innerHTML;

        //var imgElement = document.getElementById('content-tab-1').getElementsByTagName('img')[0];
        var imgElement = jQuery(this).children("img")[0];

        //var imgElement = jQuery(this).getElementsByTagName('img')[0];

        var imgInstance = new fabric.Image(imgElement, {
            left: 100,
            top: 100,
            angle: 0,
            opacity: 1
        });
        imgInstance.setControlsVisibility(HideControls);

        imgInstance.toObject = (function (toObject) {
            return function () {
                return fabric.util.object.extend(toObject.call(this), {
                    product_id: this.product_id
                });
            };
        })(imgInstance.toObject);

        canvas.add(imgInstance);
        canvas.renderAll();

        var product_id = imgElement.getAttribute("data-product_id");

        imgInstance.product_id = product_id;


        // ajax request add to cart
        var data = {
            'action': 'get_post_information',
            'post_id': product_id
        };
        jQuery.post(ajaxurl, data, function (response) {
            //alert('Server response from the AJAX URL ' + response);
            jQuery('#cart_container').html(response['a.cart-contents']);
        });

        return false;

    });

    // remove save status alert
    jQuery('#visualizer-save').click(function(){
        jQuery('#visualizer-save-status').empty();
    });

    // save if user already logged in
    jQuery(document).ready(function ($) {
        $('#visualizer-save-dialog-btn').click(function () {
            //var canvas_obj = JSON.stringify(canvas);
            var canvas_obj = JSON.stringify(canvas.toDatalessJSON());
            var data = {
                'action': 'visualizersave',
                'canvas_obj': canvas_obj
            };
            jQuery.post(ajaxurl, data, function (response, status) {
                console.log(response);
                $('#visualizer-save-status').append('<div class="alert alert-success"><strong>Success!</strong> Your design saved.</div>');
                /*if (response == true) {
                    $('#visualizer-save-status').append('<div class="alert alert-success"><strong>Success!</strong> Your design saved.</div>');
                }else{
                    $('#visualizer-save-status').append('<div class="alert alert-danger"><strong>Fail!</strong> Something went wrong. Data not saved.</div>');
                }*/
            });
        });
    });


    // Ajax login function js with save after login

    jQuery(document).ready(function ($) {
        // Perform AJAX login on form submit
        $('form#login').on('submit', function (e) {
            $('form#login p.status').show().text(ajax_login_object.loadingmessage);
            //var canvas_obj = JSON.stringify(canvas);
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: ajax_login_object.ajaxurl,
                data: {
                    'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                    'username': $('form#login #username').val(),
                    'password': $('form#login #password').val(),
                    'security': $('form#login #security').val()
                },
                success: function (data) {
                    $('form#login p.status').text(data.message);
                    if (data.loggedin == true) {
                        document.getElementById("visualizer-save-login-close").click();
                        $('#visualizer-save-btn').remove();
                        $('#visualizer-load-btn').remove();
                        $('#after-ajax-btn').append('<div class="visualizer-custom-image-btn" id="visualizer-save" data-toggle="modal" data-target="#save-dialog"><a href="javascript:;" title="Save your work" data-toggle="tooltip"><i class="fa fa-floppy-o" aria-hidden="true"></i></a></div>');
                        $('#after-ajax-btn').append('<div class="visualizer-custom-image-btn" id="visualizer-load" data-toggle="modal" data-target="#load-dialog"><a href="javascript:;" title="Load last saved file" data-toggle="tooltip"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></div>');
                        document.getElementById('visualizer-save').click();
                    } else {
                        //console.log(data);
                    }
                }
            });
            e.preventDefault();
        });

    });



    // Ajax login function js for load previously saved data

    jQuery(document).ready(function($) {

        // Perform AJAX login on form submit
        $('form#loginload').on('submit', function(e){
            $('form#loginload p.status').show().text(ajax_login_object.loadingmessage);
            //var canvas_obj = JSON.stringify(canvas);
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: ajax_login_object.ajaxurl,
                data: {
                    'action': 'ajaxloginload', //calls wp_ajax_nopriv_ajaxlogin
                    'username': $('form#loginload #username').val(),
                    'password': $('form#loginload #password').val(),
                    'security': $('form#loginload #security').val() },
                success: function(data){
                    $('form#loginload p.status').text(data.message);
                    if (data.loggedin == true){
                        document.getElementById("visualizer-load-login-close").click();
                        $('#visualizer-save-btn').remove();
                        $('#visualizer-load-btn').remove();
                        $('#after-ajax-btn').append('<div class="visualizer-custom-image-btn" id="visualizer-save" data-toggle="modal" data-target="#save-dialog"><a href="javascript:;" title="Save your work" data-toggle="tooltip"><i class="fa fa-floppy-o" aria-hidden="true"></i></a></div>');
                        $('#after-ajax-btn').append('<div class="visualizer-custom-image-btn" id="visualizer-load" data-toggle="modal" data-target="#load-dialog"><a href="javascript:;" title="Load last saved file" data-toggle="tooltip"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></div>');
                        document.getElementById('visualizer-load').click();
                    }else{
                        console.log(data);
                    }
                }
            });
            e.preventDefault();
        });

    });


// delete button start

    function addDeleteBtn(x, y) {
        jQuery(".deleteBtn").remove();
        var btnLeft = x - 10;
        var btnTop = y - 10;
        var deleteBtn = '<img src="http://www.voqs.eu/phsgreenleaf/wp-content/themes/phsgreenleaf/images/delete-icon.png" class="deleteBtn" style="position:absolute;top:' + btnTop + 'px;left:' + btnLeft + 'px;cursor:pointer;width:20px;height:20px;"/>';
        jQuery(".canvas-container").append(deleteBtn);
    }

    canvas.on('object:selected', function (e) {
        addDeleteBtn(e.target.oCoords.tr.x, e.target.oCoords.tr.y);
    });

    canvas.on('mouse:down', function (e) {
        if (!canvas.getActiveObject()) {
            jQuery(".deleteBtn").remove();
        }
    });

    canvas.on('object:modified', function (e) {
        addDeleteBtn(e.target.oCoords.tr.x, e.target.oCoords.tr.y);
    });

    canvas.on('object:scaling', function (e) {
        jQuery(".deleteBtn").remove();
    });
    canvas.on('object:moving', function (e) {
        jQuery(".deleteBtn").remove();
    });
    canvas.on('object:rotating', function (e) {
        jQuery(".deleteBtn").remove();
    });

    // delete item from canvas and remove from cart
    jQuery(document).on('click', ".deleteBtn", function () {
        if (canvas.getActiveObject()) {

            var product_id = canvas.getActiveObject().get('product_id');

            // ajax request to remove from cart
            var data = {
                'action': 'remove_item_from_cart',
                'post_id': product_id
            };
            jQuery.post(ajaxurl, data, function (response) {
                //alert('Server response from the AJAX URL ' + response);
                jQuery('#cart_container').html(response['a.cart-contents']);
                console.log(response);
            });

            canvas.remove(canvas.getActiveObject());

            jQuery(".deleteBtn").remove();

        }
    });

    jQuery('#visualizer-load-dialog-btn').click(function(){
        var data = {
            'action': 'visualizerload'
        };
        jQuery.post(ajaxurl, data, function(response) {

            var canvas_data = JSON.parse(response);

            canvas.loadFromJSON(canvas_data,canvas.renderAll.bind(canvas));

            document.getElementById('visualizer-load-dialog-close').click();

        });
    });


})();



// visualizer height
jQuery(document).ready(function(){
    var deviceWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    var offsetHeight = document.getElementById("visualiser-main-wrap").offsetHeight;
    if (offsetHeight != null){
        var divHeight = offsetHeight.toString();
    }
    if (deviceWidth > 768){
        document.getElementById("visualiser-sidebar-wrap").style.height = divHeight + 'px';
    }
});



// visualizer tooltips

jQuery(document).ready(function(){
    jQuery('[data-toggle="tooltip"]').tooltip();
});



// Download canvas

function download(url,name){
// make the link. set the href and download. emulate dom click
    jQuery('<a>').attr({href:url,download:name})[0].click();
}
function downloadFabric(canvas,name){
//  convert the canvas to a data url and download it.
    download(canvas.toDataURL(),name+'.png');
}

jQuery('#canvas-download').click(function () {
    downloadFabric(canvas,'phsgreenleaf_visualizer');
});
