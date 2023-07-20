<?php
//$this->pageTitle = Yii::t('frontend', 'Store').' - '.Yii::t('frontend', 'Gamer168 Online');
/** @var StoreController $this */
/** @var Store $model */
$this->breadcrumbs = array(
    'Store',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Member::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
// $id = app()->user->id;                                           //ID
// $gameMemberInfo = $this->getMemberInfoById($id);                 //主要呼叫函數
// $user_money = rtrim(rtrim($gameMemberInfo['amount'], '0'), '.'); //錢
// ?>



<link href= <?php echo "/css/newsite/UniteCss/Unite_Base.css?v=".time();?> rel="stylesheet" type="text/css" />
<!-- <link href= <?php echo "/css/newsite/UniteCss/Unite_Chat.css?v=".time();?> rel="stylesheet" type="text/css" /> -->

<link rel="stylesheet" href="/css/store/lightbox/lightbox.css" type="text/css" />
<script type="text/javascript" src="/css/store/lightbox/lightbox.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/css/swiper.min.css">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.2/js/swiper.min.js"></script>

<style>
    body {
        /* padding-top: 0px !important; */
    }
    /*裝飾用邊框*/
    .box_style {
        height: 200px;
        border-radius: 5px;
        margin: 10px;
        overflow: hidden;
        box-shadow: 1px 1px 10px #5f5f5f;
        background: linear-gradient(rgb(255, 255, 255) -22%, rgb(255, 255, 255) 55%, rgb(255, 255, 255) 129%);
    }
    .store_top_box{
        margin-bottom: 0px;
        border-width: 5px;
        border-style: solid;
        border-color: black;
        background-color: #ffffff;
        border-radius: 15px;
        margin: 5px;
        padding: 2px;
        text-align: center;
    }
    .store_med_box{
        border-width: 10px;
        border-style: solid;
        border-color: #1460d6;
        border-radius: 10px;
        background-color: #1460d6;
    }
    .stroe_bottom_box{
        border-width: 2px;
        border-style: solid;
        border-color: #82a1af;
        border-radius: 10px;
        background-color: #4bbcde;
        padding: 10px
    }
    .stroe_index_box{
        border-width: 2px;
        border-style: solid;
        border-color: #3ddcde;
        border-radius: 10px 10px 10px 10px;
        background-color: #1466ad;
        border-left-style: none;
    }
    .store_outside{
        padding: 5px;
    }
    .box_outstyle_br{
        padding: 10px;
        overflow: auto;
    }
    .box_outstyle{
        overflow: auto;
        background-color: #032a3f;
        border-radius: 10px;
        height: 660px;
    }


    /*商品分類*/
    /*禮品這串被改過需要覆蓋*/
    .btn-success {
        color: #fff;
        background: linear-gradient(0deg, rgb(58, 64, 69) 0%, rgb(32, 126, 194) 27%, rgb(13, 188, 196) 46%, rgb(255, 255, 255) 100%);
        border-color: #4cae4c;
        height: auto;
        float: none;
        font-size: 30px;
    }
    .one_pd{
        width: 100%;
        border-radius: 20px;
        border-width: 2px;
        border-style: solid;
        border-color: #ffffff;
        box-shadow: 1px 4px 0px 2px #673AB7;
        background: linear-gradient(0deg, #9C27B0 0%, #9C27B0 27%, #9C27B0 46%, rgb(245, 104, 255) 100%);
        text-shadow: 2px 0 0 #673AB7, -3px 0 0 #673AB7, 0 1px 0 #673AB7, 0 -2px 0 #673AB7, -3px 1px 0 #673AB7, -2px -2px 0 #673AB7, -1px -3px 0 #673AB7, -2px 2px 0 #673AB7, 2px 2px 4px #673AB7;
        background-color: white;
        font-size: 30px;
        font-family: 微軟正黑體;
    }
    .two_pd{
        width: 100%;
        border-radius: 20px;
        border-width: 2px;
        border-style: solid;
        border-color: #ffffff;
        box-shadow: 1px 4px 0px 2px #4CAF50;
        background: linear-gradient(0deg, #009688 0%, #4CAF50 27%, #8BC34A 46%, #CDDC39 100%);
        text-shadow: 2px 0 0 #009688, -3px 0 0 #009688, 0 1px 0 #009688, 0 -2px 0 #009688, -3px 1px 0 #009688, -2px -2px 0 #009688, -1px -3px 0 #009688, -2px 2px 0 #009688, 2px 2px 4px #009688;
        background-color: white;
        font-size: 30px;
        font-family: 微軟正黑體;
    }
    .thr_pd{
        width: 100%;
        border-radius: 20px;
        border-width: 2px;
        border-style: solid;
        border-color: #ffffff;
        box-shadow: 1px 4px 0px 2px #7b6647;
        background: linear-gradient(0deg, #FF9800 0%, #FFC107 27%, #FFEB3B 46%, rgb(250, 239, 139) 100%);
        text-shadow: 2px 0 0 #795548, -3px 0 0 #795548, 0 1px 0 #795548, 0 -2px 0 #795548, -3px 1px 0 #795548, -2px -2px 0 #795548, -1px -3px 0 #795548, -2px 2px 0 #795548, 2px 2px 4px #795548;
        background-color: white;
        font-size: 30px;
        font-family: 微軟正黑體;
    }

    /*左側切換列*/
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
        color: #fff;
        cursor: default;
        background-color: #1466ad;
        border: 2px solid #3ddcde;
        border-bottom-color: #3ddcde;
        border-right-style: none;
        border-radius: 20px 0px 0px 20px;
    }

    /*儲值/兌換*/
    .txt_Stored{
        font-size: 25px;
        text-shadow: 2px 0 0 #181b1d, -3px 0 0 #1f2223, 0 1px 0 #1c1e1f, 0 -2px 0 #191d1f, -3px 1px 0 #161517, -2px -2px 0 #232627, -1px -3px 0 #101010, -2px 2px 0 #171a1b, 2px 2px 4px #171619
    }
    .txt_exchange{
        font-size: 25px;
        text-shadow: 2px 0 0 #181b1d, -3px 0 0 #1f2223, 0 1px 0 #1c1e1f, 0 -2px 0 #191d1f, -3px 1px 0 #161517, -2px -2px 0 #232627, -1px -3px 0 #101010, -2px 2px 0 #171a1b, 2px 2px 4px #171619
    }
    .nav-tabs>li>a:hover {
        border-color: #4bbcde #4bbcde #4bbcde;
        background-color: #4bbcde;
    }
    .btn-info{
        background: linear-gradient(0deg, rgb(58, 64, 69) 0%, rgb(32, 126, 194) 27%, rgb(13, 188, 196) 46%, rgb(255, 255, 255) 100%);
        border-width: 2px;
        border-style: solid;
        border-color: #1d1d1d;
        border-radius: 15px;
        font-family: 微軟正黑體;
        font-weight: bold;
        padding-right: 20px;
        padding-left: 20px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    /*購買欄*/
    .btn_buy,
    a.btn_buy{
        font-size: 20px;
        background: linear-gradient(0deg, #FF9800 0%, #FFC107 27%, #FFEB3B 46%, rgb(250, 239, 139) 100%);
        text-shadow: 3px 0 0 #795548, -3px 0 0 #795548, 0 3px 0 #795548, 0 -3px 0 #795548, 2px 2px 0 #795548, -2px -2px 0 #795548, 2px -2px 0 #795548, -2px 2px 0 #795548, 2px 2px 5px #795548;
        font-family: 微軟正黑體;
        width: 35%;
        padding: 0px;
        height: 33px;
        margin: 0px auto;
    }
    .store-form-btn form{
        text-align: center;
    }
    .img_box{
        margin: 10px auto;
        /* background: linear-gradient(0deg, #ecabb7 -10%, #f5dcb7 7%, #fdf8d0 31%, rgb(215, 241, 153) 60%,#bbf0f7 90%,rgb(220, 200, 255) 100%); */
        width: 80%; /* 改按鈕新增 */ 
        border-radius: 10px;
    }
    .text_box{
        margin: 10px;
        height: 135px; /* 改按鈕新增 原本180px */ 
        text-align: left;
    }
    .box_style_icon {
        margin: 9%;
        width: 83%;
        height: 100%;
        border-radius: 10px;
    }
    .pd_name {
        background-repeat: no-repeat;
        background-size: cover;
        font-size: 20px;
        font-family: 微軟正黑體;
        color: #fff;
        height: 30px;
        color: black;
        border-radius: 10px 10px 0px 0px;
    }
    .pd_price {
        font-family: 微軟正黑體;
        margin: 0px 1px;
        color: rgb(255, 0, 0);
    }
    .pd_text {
        /* background: linear-gradient(0deg, #939ca1 20%, #94a0a1 63%, #888f91 116%); */
        color: #2196F3;
        font-family: 微軟正黑體;
        height: 135px; /* 改按鈕新增 原本180px */
        overflow: auto;
        margin: 10px 1px;
        border-radius: 10px 10px 10px 10px;
    }
    .sp{
        color:#ffeb3b;
    }

    .store-title {
        font-size: 48px; width: initial; line-height: initial; position: relative; left: 20px; height: initial;
    }
    /*閃碩*/
    .blink {
        animation-duration: 0.4s;
        animation-name: blink;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        animation-timing-function: ease-in-out;
    }
    @keyframes blink{
        0% {
            opacity: 1;
        }
        70% {
            opacity: 1;
        }
        81% {
            opacity: 0;
        }
        100% {
            opacity: 0;
        }
    }

    /*獎品兌換欄*/
    /*橫幅*/
    .swiper-container {
	    /* padding-bottom:40px; */
        margin: 80px 0px;
    }
	.swiper-wrapper{
	}
    .swiper-slide {
	    width:978px;
		transition-timing-function:linear;
    }
	@media only screen and (max-width:1200px){
	    .swiper-slide {
	        width:770px;
        }
	}
	@media only screen and (max-width:980px){
	    .swiper-slide {
	        width:471px;
        }
	}
	@media only screen and (max-height:480px){
	    .swiper-slide {
	        width:471px;
        }
	}
	.swiper-slide img{
		width:100%;
		border-radius: 10px 10px 0 0;}
	.swiper-slide .title{
		position:absolute;
		transform:rotate(90deg);
		transform-origin:left top;
		left:-3px;
		font-size:11px;
		color: rgb(102, 102, 102);}	
    .swiper-button-next, .swiper-button-prev {
        width: 66px;
        height: 30%;
        background-size: 86px 112px;
        margin-top: -5%;
        outline: none;
    }
	.swiper-button-next{
		background-image:url();}
	.swiper-button-prev{
		background-image:url();}		
	.swiper-pagination-bullet{
		background:none;
		opacity:1;
		margin:0 6px !important;
		width:9px;
		height:9px;
		position:relative;
		outline:none;
		vertical-align:middle;}
	.swiper-pagination-bullet span{
		width:3px;
		height:3px;
		background:#CCC;
		display:block;
		border-radius:50%;
		margin-top:3px;
		margin-left:3px;
	}
	.swiper-pagination-bullet i{
		background:#000;
		height:1px;
		width:20px;
		position:absolute;
		top:4px;
		transform:scaleX(0);
		transform-origin:left;
		z-index:3;
		transition-timing-function:linear;
		}
	.swiper-pagination-bullet-active span,.swiper-pagination-bullet:hover span{
		width:9px;
		height:9px;
		margin-top:0;
		margin-left:0;
		background:#000;
		position:relative;
		z-index:1;
		}
	.swiper-pagination-bullet-active i{
		animation:middle 6s;
		}
	.swiper-pagination-bullet:first-child.swiper-pagination-bullet-active i{
		animation:first 6s;
		}
	.swiper-pagination-bullet:last-child.swiper-pagination-bullet-active i{
		animation:last 6s;
		}				
	@keyframes first{
	  0% {transform:scaleX(0.5);left:0px;}/*091*/
	  100% {transform:scaleX(1);left:2px;} /*0915*/
	}
	@keyframes last{
	  0% {transform:scaleX(0.7);left:-10px;}/*1090*/
	  20% {transform:scaleX(0.3);left:2px;} /*090*/
	  100% {transform:scaleX(0.3);left:0px;} /*090*/
	}		
	@keyframes middle{
	  0% {transform:scaleX(0.7);left:-10px;}/*1091*/
	  20% {transform:scaleX(0.45);left:2px;}/*092*/
	  100% {transform:scaleX(1);left:2px;} /*0913*/
	}	
    .buybtn{
        margin-right: 20%;
        margin-top:-10%;
    }
    /*橫幅*/
    /*手機版*/
    @media(max-width: 767px) {
        /*購買欄*/
        .buybtn{
        margin-right: 0%;
        margin-top: 0%;
        }
        .box_style_icon{
            padding: 1%;
        }
        .img_box{
            width: 50%;
        }
        .box_style {
            overflow: auto;
        }

        /*上方切換列*/
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
            border-radius: 20px
        }
        .stroe_index_box {
            border-radius: 20px
        }
        .one_pd{font-size: 15px;}
        .two_pd{font-size: 15px;}
        .thr_pd{font-size: 15px;}

        .store-title {
            left: 0;
        }
    }

    .alert-error {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }



</style>
<script type="text/javascript">
    // function prizeRedeemname(n) {
    //     document.getElementById("Redeem_name").innerHTML += n;
    // }
    $(function() {
        // $('input').keypress(function (e) {
        //   if (e.which == 13) {
        //     checkRedeemForm();
        //   }
        // });

        $(".btn-buy-prod-package").on("click", function(e) { 
             e.preventDefault();
             let form = $(this).parents('form:first');
             let formId = form.attr('id');
             let submitBtn = $("#prod-package-submit");

             submitBtn.data("submit-target", formId);
             $('#notice-prod-buy-modal').modal('show');
        });

        $(".btn-buy-prod-prize").on("click", function(e) { 

             e.preventDefault();

             let form = $(this).parents('form:first');
             let formId = form.attr('id');
             let submitBtn = $("#prod-prize-submit");
             let childtest = $("#"+formId+' :input');
             
             var values = {};
             $.each(childtest.serializeArray(), function(i, field) {
                 values[field.name] = field.value;
                 console.log(values[field.name]);
                //  alert(values[field.name]);
             });

             document.getElementById("prize_name_show").innerHTML = values["storePrize[prize-name]"];
             document.getElementById("prize_price_show").innerHTML= values["storePrize[prize-price]"];
             document.getElementById("prize_id").value            = values["storePrize[id]"];
             document.getElementById("prize_name").value          = values["storePrize[prize-name]"];
             document.getElementById("prize_price").value         = values["storePrize[prize-price]"];

             submitBtn.data("submit-target", "store-Form-userdata");


             $('#notice-prod-buy-modal-prize').modal('show');
        });

        $(".btn-buy-prod-OWO").on("click", function(e) { 
            e.preventDefault();
             $('#notice-prod-buy-modal-OWO').modal('show');
        });


        $('#prod-package-submit').on('click', function(e) {
            e.preventDefault();
            let formId = $(this).data("submit-target");
            let paymentval = $("input[name=payment]:checked").val();
            let url = "";
            url = (paymentval=="paypal") ? "<?= $this->createUrl('Iantest/index/') ?>" : "<?= $this->createUrl('AnyMoney/index/') ?>"
            let mixform =$("#"+formId).serialize();


            $.post(url,mixform,function(result){
                // location.href = result;
                console.log(result);
            })

            // $("#"+formId).submit();
        })

        
        $('#prod-prize-submit').on('click', function(e) {
            e.preventDefault();
            let formId = $(this).data("submit-target");
            
            $("#"+formId).submit();

        })



        $("#distributor-redeem-form").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            e.stopImmediatePropagation();

            var form = $(this);
            var url = form.attr('action');

            $.ajax({
               type: "POST",
               async: true,
               url: url,
               data: form.serialize(), // serializes the form's elements.
               success: function(rawResp) {
                   console.log(rawResp);
                   resp = JSON.parse(rawResp);
                   if (resp.success == true) {
                       // alert('success');
                   } else {
                       // alert('failed but not error');
                   }
                   location.reload();
               }
            });

        });

        $("#redeem-form").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            e.stopImmediatePropagation();

            var form = $(this);
            var url = form.attr('action');

            $.ajax({
               type: "POST",
               async: true,
               url: url,
               data: form.serialize(), // serializes the form's elements.
               success: function(rawResp) {
                   console.log(rawResp);
                   resp = JSON.parse(rawResp);
                   if (resp.success == true) {
                       // alert('success');
                   } else {
                       // alert('failed but not error');
                   }
                   location.reload();
               }
            });

        });



        $("#qweqwe").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            e.stopImmediatePropagation();

            var form = $(this);
            var url = form.attr('action');

            $.ajax({
               type: "POST",
               async: true,
               url: url,
               data: form.serialize(), // serializes the form's elements.
               success: function(rawResp) {
                   console.log(rawResp);
                   resp = JSON.parse(rawResp);
                   if (resp.success == true) {
                       // alert('success');
                   } else {
                       // alert('failed but not error');
                   }
                   location.reload();
               }
            });

        });



    })
    function redeem() {
        $('#redeem-modal').modal('show');
    }

    // $("#distributor-redeem-form").submit();
    function submitForm(formId) {
        // console.log(this);
        $("#"+formId).submit();
    }
    // function checkRedeemForm() {
    //     redeemCode = $("#redeem_code").val();

    //     $.ajax({
    //         url: '<?= app()->createUrl('store/redeem') ?>',
    //         // data: $('#sentToBack').serialize(),
    //         type: "POST",
    //         dataType: 'text',
    //         async: true,
    //         data: {
    //             // _csrf : '<?//= Yii::$app->request->getCsrfToken() ?>',
    //             redeem_code : redeemCode,
    //         },

    //         success: function(rawResp) {
    //             console.log(rawResp);
    //             resp = JSON.parse(rawResp);
    //             if (resp.success == true) {
    //                 // alert('success');
    //             } else {
    //                 // alert('failed but not error');
    //             }
    //             location.reload();
                
    //         },

    //         error: function(xhr, ajaxOptions, thrownError) {
    //             alert(xhr.status + ":<?= Yii::t('app', 'Please try again later') ?> " + thrownError);
    //         }

    //     });
    // }

    function redeemDistributorQualify() {
        $('#redeem-distributor-modal').modal('show');
    }

    var swiper = new Swiper('.swiper-container',{
	    // autoplay: {
	    // 	delay: 5100,  
	    // 	disableOnInteraction: false,
	    // },
	    // speed: 700,
        touchRatio : 1,
	    allowTouchMove: true,
	    lazy: {
	    	loadPrevNext: true,
	    	loadPrevNextAmount: 3,
	    },
	    centeredSlides: true,
	    spaceBetween : 0,
	    slidesOffsetBefore: 0,
	    loop: true,
	    slidesPerView : '1',
	    on: {
	    	slideChangeTransitionEnd: function(){ //this.params.autoplay.delay+this.params.speed
	    	  this.slides.transition(this.params.autoplay.delay+this.params.speed).transform('translate3d( 0px, 0, 0)');
	    	},
	    	slideChangeTransitionStart: function(){
	    	  this.slides.transition(this.params.speed).transform('translate3d(0, 0, 0)');
	    	},
	    },
	    pagination: {
	    	el: '.swiper-pagination',
	    	clickable :true,
	    	renderBullet: function (index, className) {
            return '<div class="' + className + '"><span></span><i></i></div>';
          },
	    },
	    navigation: {
	    	nextEl: '.swiper-button-next',
	    	prevEl: '.swiper-button-prev',
	    },
	});
	window.onresize=function(){
	    swiper.update();
	}

</script>


<div id="redeem-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="redeem-modal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title"><?= t('charge', 'Redeem your code') ?></h4>
      </div>
      <div class="modal-body">
        <form id="redeem-form" action="<?= $this->createUrl('store/redeem') ?>" method="post">
          <label><?= t('charge', 'Redeem code') ?>: </label>
          <input id="redeem_code" type="text" name="redeem[redeem_code]" style="border: 1px solid darkgrey">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
        <button type="button" class="btn btn-primary" onclick="$(this).attr('disabled', 'disabled'); submitForm('redeem-form');"><?= Yii::t('charge', 'Redeem') ?></button>
      </div>
    </div>
  </div>
</div>


<div id="redeem-distributor-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="redeem-distributor-modal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <fieldset>
            <legend class="scheduler-border" style="text-align: center;"><span style="font-size: 24px;">玩咖文創遊戲</span></legend>
            <div style="text-align: center; margin-bottom: 5px;"><span style="font-size: 20px;">通路商申請</span></div>
            <div style="text-align: center; margin-bottom: 20px;"><span style="font-size: 12px; color: red;">※請填寫真實資訊,以免失去通路商資格。</span></div>
            <form name="store-form" class="store-Form" method="post" action="<?= $this->createUrl('store/redeem') ?>" id="distributor-redeem-form">
                <div class="ui-form">
                    <label><?= t('charge', 'Redeem code') ?>:</label>
                    <input id="distributor_redeem_code" type="text" name="redeem[redeem_code]" style="width: 100%;" placeholder="請輸入通路商包兌換碼">
                </div>
                <div class="ui-form">
                <label for="short_url">簡短推廣網址的代號:</label>
                <input name="redeem[short_url]" type="text" style="width: 100%;" minlength=1 maxlength=20 placeholder="例如 clickme" /><br>
                </div>
                <div class="ui-form">
                    <label for="user_name">姓名:</label>
                    <input name="redeem[name]" type="text" style="width: 100%;" minlength=1 maxlength=65 placeholder="請輸入姓名" /><br>
                    <label for="user_phone">電話 (手機):</label>
                    <input name="redeem[phone]" type="text" style="width: 100%;" minlength=1 maxlength=18 placeholder="請輸入電話(手機)" /><br>
                    <label for="user_address">地址:</label>
                    <input name="redeem[address]" type="text" style="width: 100%;" minlength=1 maxlength=200 placeholder="請輸入地址" /><br>
                </div>
            </form>
        </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
        <button type="button" class="btn btn-primary" onclick="$(this).attr('disabled', 'disabled'); submitForm('distributor-redeem-form');">送出</button>
      </div>
    </div>
  </div>
</div>










<div id="notice-prod-buy-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="notice-prod-buy-modal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title"><?= Yii::t('app', 'Notice') ?></h4>
      </div>
      <div class="modal-body">
          <?= t('charge', 'Coming soon to [Payment Interface]') ?><br>
          <?= t('charge', 'After the payment is completed, the [Package Serial Number] will be sent to your [Registration Verification] mobile phone.') ?><br>
          <?= t('charge', 'After receiving the serial number, please click [ redeem serial number] to redeem on this page.') ?>
      </div>
      <div class="modal-body">
            <input type="radio" id="paypal" name="payment" value="paypal" checked>
            <label for="paypal">paypal</label>
            <input type="radio" id="anymoney" name="payment" value="anymoney">
            <label for="anymoney">anymoney</label>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
        <button type="button" class="btn btn-primary" id="prod-package-submit" data-submit-target=""><?= Yii::t('app', 'Go') ?></button>
      </div>
    </div>
  </div>
</div>

<div id="notice-prod-buy-modal-prize" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="notice-prod-buy-modal-prize">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <fieldset>
            <legend class="scheduler-border" style="text-align: center;"><span style="font-size: 24px;">玩咖文創遊戲</span></legend>
            <div style="text-align: center; margin-bottom: 5px;"><span style="font-size: 20px;">兌獎寄送表</span></div>
            <div style="text-align: center; margin-bottom: 20px;"><span style="font-size: 12px; color: red;">※請填詳細收件人訊息,謝謝。</span></div>
            <div>
            <label >兌換獎品名稱 : <span id="prize_name_show">_</span></label><br>
            <label >兌換價玩咖幣 : <span id="prize_price_show">_</span></label><br>
            </div>
            <form name="store-Form" class="store-Form" method="post" action="<?= $this->createUrl('store/PrizeUserData') ?>" id="store-Form-userdata">
            <div class="ui-form">
                <input type="hidden" id="prize_id" name="storePrize[id]" value="">
                <input type="hidden" id="prize_name" name="storePrize[prize-name]" value="">
                <input type="hidden" id="prize_price" name="storePrize[prize-price]" value="">
                <label for="user_name">收件人姓名 :</label>
                <input name="storePrize[name]" type="text" id="user_name" style="" minlength=1 maxlength=65 autocomplete="user_name" placeholder="請輸入姓名" /><br>
                <label for="user_phone">電話 (手機)  :</label>
                <input name="storePrize[phone]" type="text" id="user_phone" style=" margin-left: -1px;" minlength=1 maxlength=65 autocomplete="user_phone" placeholder="請輸入電話(手機)" /><br>
                <label for="user_address">寄件住址   :</label>
                <input name="storePrize[address]" type="text" id="user_address" style="   width: 250px;" minlength=1 maxlength=65 autocomplete="user_address" placeholder="請輸入住址" /><br>
            </div>
            </form>
        </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
        <!-- <input type="submit" name="btn-submit" value="送出" onclick="return CheckForm();" id="prod-package-submit-prize" class="btn btn-primary" /> -->
        <button type="button" class="btn btn-primary" id="prod-prize-submit" data-submit-target="">送出</button>
      </div>
    </div>
  </div>
</div>

<div id="notice-prod-buy-modal-OWO" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="notice-prod-buy-modal-OWO">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title"><?= Yii::t('app', 'Notice') ?></h4>
      </div>
      <div class="modal-body">
          玩咖幣不足<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
      </div>
    </div>
  </div>
</div>


<div class="container">
    <div class="row">
        <!-- <div class="col-sm-12">
            <img src="/images/initialize/PKcard_store_poster1.jpg">
        </div> -->
        <div class="col-sm-12">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <img src="<?= t('navbar', '/images/initialize/newPKcard_store_poster.jpg') ?>" >
                    <?php
                        // $carouselUrl = '#';
                        // $promoUrlPage = $this->createUrl('promo/promoUrl');
                        // switch (Yii::app()->getLanguage()) {
                        // //繁體
                        // case "zh_tw": 
                        //     echo '<div class="swiper-slide" >';
                        //     echo '<a href="'.$carouselUrl.'"><img data-src="/images/initialize/PKcard_store_poster1.jpg" data-srcset="/images/initialize/PKcard_store_poster1.jpg" class="swiper-lazy"></a>';
                        //     echo '</div>';
                        //     // echo '<div class="swiper-lazy-preloader"></div>';
                        //     break;
                        // //越南文
                        // default:
                        // case "vi_vn": 
                        //     echo '<div class="swiper-slide" >';
                        //     echo '<a href="'.$carouselUrl.'"><img data-src="/images/initialize/PKcard_store_poster1.jpg" data-srcset="/images/initialize/PKcard_store_poster_vi_vn.jpg" class="swiper-lazy"></a>';
                        //     echo '</div>';
                        //     echo '<div class="swiper-lazy-preloader"></div>';
                        //     break;                                                                                                                                             
                        // }
                    ?>
                </div>
                <!-- <div class="swiper-pagination"></div> -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="col-sm-12 ">
            <!-- <div class="pull-left">
                <div class="clearfix"></div>
                <p class="navbar-item store-title" style=""></p>
                <div class="clearfix"></div>
            </div> -->
            <!-- <div class="pull-right"> -->
                <!-- <button type="button" class="btn btn-info txt_exchange" onclick="redeem()"><?= t('charge', 'Redeem your code') ?></button> -->
                <!-- <?php if (app()->language != 'zh_cn') : ?> -->
                <!-- <a style="color: #fff;" class="btn btn-info txt_Stored ajaxLoad" href="<?= app()->createUrl('pay/index'); ?>"><?= t('charge', 'General charge') ?></a>  -->
                <!-- <?php endif; ?> -->
                <!-- <button type="button" class="btn btn-info txt_exchange" onclick="window.location='<?= $this->createUrl('store/redeem') ?>'">兌換序號</button> -->
                <!-- <a style="color: #fff;" class="btn btn-info txt_Stored ajaxLoad" href="<?= app()->createUrl('pay/sendPoint'); ?>"><?= t('charge', 'Virtual item transfer') ?></a> -->
                <!-- <button type="button" class="btn btn-info txt_exchange" onclick="redeemDistributorQualify()"><?= t('charge', 'Redeem distributor qualify') ?></button> -->
            <!-- </div> -->
            <div class="clearfix"></div>
            
            <div class='blink'>
            <?php 
            $this->widget('bootstrap.widgets.TbAlert', array(
                'block' => true,
            ));
            ?>
            </div>
            
            <div class="col-sm-12">
                <!-- 切換列 -->
                <!-- <div class="col-sm-2">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs col-sm-12" style="border-width: 0px;">
                            <li class="col-sm-12 active tab_size">
                                <a data-toggle="tab" href="#pd_1"  >
                                    <button class="btn btn-danger  one_pd"><?= t('products', 'Product package') ?></button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <!-- 切換列 -->                           
                
                <!-- 商品欄 -->
                <div class="col-sm-12 ">
                    <div class="tab-content col-sm-12  " >
                        <!-- 產品 -->
                        <div class="col-sm-12  tab-pane in active "  id="pd_1">
                            <?php foreach ($productPackagesModels as $key => $model) : ?>
                                <?php
                                $name = Yii::t('productPackage', $model->name);
                                $description = Yii::t('productPackage', $model->name);
                                ?>
                                <!-- 一格商品 -->
                                <div class="col-sm-3 ">
                                    <div class="box_style">
                                        <div class="col-sm-12">
                                            <div class="col-sm-6" >
                                                <div class="col-sm-12">
                                                    <div class="img_box">
                                                        <img  class="img-responsive box_style_icon " style="display: inline-block;" src="<?= $model->img ?>"/>  
                                                    </div>
                                                </div>
                                                <!-- <div class="col-sm-12 store-form-btn"> 原本按鈕
                                                    <form name="store-form" id="store-form-<?= $model->id ?>" method="post" action="<?= $this->createUrl('store/buy') ?>">
                                                        <input type="hidden" name="type" value="<?= $model->type ?>">
                                                        <input type="hidden" name="id" value="<?= $model->id ?>">
                                                        
                                                        <?php if ($has['firstCharge'] && $model->id == 1) : ?>
                                                        <button type="button" class="btn btn-warning btn_buy btn-buy-prod-package" disabled="disabled"><?= t('charge', 'already first charge') ?></a>
                                                        <?php else : ?>
                                                        <button type="submit" class="btn btn-warning btn_buy btn-buy-prod-package"><?= t('charge', 'Buy') ?></a>
                                                        <?php endif ; ?>
                                                    </form>
                                                </div> -->
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="text_box">
                                                    <!-- <p class="pd_name "><?= $model->name ?></p> -->
                                                    <p class="pd_text" ><?= $model->description ?>
                                                    PKcard<?=t("charge", ".")?> <?= $model->price ?> </br><?=t("charge", "Suggested")?>： USD $<?= $model->point ?> 
                                                    <br><span class="pd_price">$ <?= $model->price ?>  </span></p>
                                                    <!-- <p class="pd_price">NTD <?= $model->price ?></p> -->
                                                </div>
                                                <div class="col-sm-12 store-form-btn"> <!--換按鈕位置新增的-->
                                                    <form name="store-form" id="store-form-<?= $model->id ?>" method="post" action="<?= $this->createUrl('Iantest/index/') ?>">
                                                        <input type="hidden" name="type" value="<?= $model->type ?>">
                                                        <input type="hidden" name="id" value="<?= $model->id ?>">
                                                        
                                                        <?php if ($has['firstCharge'] && $model->id == 1) : ?>
                                                        <button type="button" class="btn btn-warning btn_buy btn-buy-prod-package" disabled="disabled"><?= t('charge', 'already first charge') ?></a>
                                                        <?php else : ?>
                                                        <button type="submit" class="btn btn-warning btn_buy btn-buy-prod-package buybtn"><?= t('charge', 'Buy') ?></a>
                                                        <!-- <div id="paypal-button-container"></div> -->
                                                        <?php endif ; ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 一格商品 -->
                            <?php endforeach; ?>
                            
                        </div>
                        <!-- 產品 -->
                    </div>                         
                </div>
                <!-- 商品欄 -->
            </div>
        </div>
                      
    </div>
</div>


<script type="text/javascript"></script>
