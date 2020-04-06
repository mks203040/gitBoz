<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <script type="text/javascript" src="lib/jquery-1.8.0.min.js"></script>

	

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$(".fancybox").fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : "outside"
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : "none",
				closeEffect	: "none",

				helpers : {
					title : {
						type : "over"
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : "fancybox-custom",
				closeClick : true,

				openEffect : "none",

				helpers : {
					title : {
						type : "inside"
					},
					overlay : {
						css : {
							"background" : "rgba(238,238,238,0.85)"
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : "elastic",
				openSpeed  : 150,

				closeEffect : "elastic",
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$(".fancybox-buttons").fancybox({
				openEffect  : "none",
				closeEffect : "none",

				prevEffect : "none",
				nextEffect : "none",

				closeBtn  : false,

				helpers : {
					title : {
						type : "inside"
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = "Image " + (this.index + 1) + " of " + this.group.length + (this.title ? " - " + this.title : "");
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$(".fancybox-thumbs").fancybox({
				prevEffect : "none",
				nextEffect : "none",

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$(".fancybox-media")
				.attr("rel", "media-gallery")
				.fancybox({
					openEffect : "none",
					closeEffect : "none",
					prevEffect : "none",
					nextEffect : "none",

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open("1_b.jpg");
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : "iframe.html",
					type : "iframe",
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : "1_b.jpg",
						title : "My title"
					}, {
						href : "2_b.jpg",
						title : "2nd title"
					}, {
						href : "3_b.jpg"
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
                .a { text-align:center;}
	</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>База в 6-ти км от зоны ЕС (от Латвии)</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- start gallery header --> 
<link rel="stylesheet" type="text/css" href="folio-gallery.css" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>

<link rel="stylesheet" type="text/css" href="fancybox/fancybox.css" />
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.min.js"></script>
<script type="text/javascript">
// fancy box settings
$(document).ready(function() {	
	$("a.albumpix").fancybox({
		'autoScale	'		: true, 
		'hideOnOverlayClick': true,
		'hideOnContentClick': true
	});
});
</script>
<!-- end gallery header -->
</head>
<body>

  <div id="page">
		
        <div id="header">
        	<h1>Документы</h1>
            <ul>
           	   	<li><a href="index.html">Главная</a></li>
         <li><a href="#">Документация</a></li>
               <li><a href="maps.html">Расположение</a></li>
                <li><a href="photo.html">Фото</a></li>
                <li><a href="contacts.html">Контакты</a></li>
            </ul>
        </div>
  
        <div id="main">
        
        	<div class="main_top">
            	<h1 style="text-transform:capitalize;">ПАПКИ С ДОКУМЕНТАМИ (СКАНИРОВАННЫЕ - 6 ПАПОК)</h1>
            </div>
            
           	<div class="main_body">
                <p>Здесь вы можете скачать документы и ознакомиться с не сканированными папками, которые у нас есть. В верхней части данной страницы находиться раздел со сосканированными документами. Ниже данной страницы находиться титульные листы не сканированнных папок (132шт папки).</p>

 <p style="margin-top:-10px;"><b><i style="margin-left:20px;margin-right:20px;"> Информация данной страницы должна решить вопрос о дифиците информации, касательно всех документов объекта "БОЗ в Пыталово - 6 км от зоны ЕС". </i></b></p>

 
 
            <table style="padding:3px; text-align:center;" border="0px"><tr>
            <td><a class="fancybox" href="ekspertiza.jpg" data-fancybox-group="gallery" <title="Экспертиза"><img width="135px" src="ekspertiza_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="zaklucenie.jpg" data-fancybox-group="gallery" <title="Заключение"><img width="135px" src="zaklucenie_tn.jpg" alt="" /></a></td>
            <td><a .jpgclass="fancybox" href="pojasn-zapiska.jpg" data-fancybox-group="gallery" <title="Пояснительная записка"><img width="135px" src="pojasn-zapiska_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="skvazini.jpg" data-fancybox-group="gallery" <title="Скважины"><img width="135px" src="skvazini_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="tehn-otcet.jpg" data-fancybox-group="gallery" <title="Технический отчет"><img width="135px" src="tehn-otcet_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="zelezn-doroga.jpg" data-fancybox-group="gallery" <title="Железная дорога"><img width="135px" src="zelezn-doroga_tn.jpg" alt="" /></a></td>
            </tr>
            <tr>
            <td><a href="ekspertiza.zip">скачать</a></td><td><a href="zaklucenie.zip">скачать</a></td>
            <td><a href="pojasn-zapiska.zip">скачать</a></td><td><a href="skvazini.zip">скачать</a></td>
            <td><a href="tehn-otcet.zip">скачать</a></td><td><a href="zelezn-doroga.zip">скачать</a></td>
            </tr>
            <tr>
            <td><a class="fancybox" href="tehdok_geodezia.jpg" data-fancybox-group="gallery" <title="ТехДок_Геодезия"><img width="135px" src="tehdok_geodezia_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="rab_tehrewenia_tom3.jpg" data-fancybox-group="gallery" <title="Раб_Техрешения_Том3"><img width="135px" src="rab_tehrewenia_tom3_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="rab_kanalizacia_vodoprovod.jpg" data-fancybox-group="gallery" <title="Раб_Канализация_Водопровод"><img width="135px" src="rab_kanalizacia_vodoprovod_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="rab_kpp_sanitarnaja.jpg" data-fancybox-group="gallery" <title="Раб_КПП_Санитарная"><img width="135px" src="rab_kpp_sanitarnaja_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="rab_kpp_molniezashita.jpg" data-fancybox-group="gallery" <title="Раб_КПП_Молниезащита"><img width="135px" src="rab_kpp_molniezashita_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="rab_obshestroj_raboti.jpg" data-fancybox-group="gallery" <title="Раб_Общестрой_Работы"><img width="135px" src="rab_obshestroj_raboti_tn.jpg" alt="" /></a></td>
</tr>
               <tr>
            <td><a href="texdok.geodezia.zip">скачать</a></td><td><a href="rab.tehrewenia-tom3.zip">скачать</a></td>
            <td><a href="rab.kanalizacia-vodoprovod.zip">скачать</a></td><td><a href="rab.kpp-sanitarnaja.zip">скачать</a></td>
            <td><a href="rab.kpp-molniezashita.zip">скачать</a></td><td><a href="rab.obshestroj-raboti.zip">скачать</a></td>
            </tr>
             <tr>
            <td><a class="fancybox" href="rab_kpp_arhitektchastj.jpg" data-fancybox-group="gallery" <title="Раб_КПП_АрхитектЧасть"><img width="135px" src="rab_kpp_arhitektchastj_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="rab_kpp_arhitektchastj_chertezi.jpg" data-fancybox-group="gallery" <title="Раб_КПП_АрхитектЧасть_Чертежи"><img width="135px" src="rab_kpp_arhitektchastj_chertezi_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="rab_oshitjSooruzenia_levnevka.jpg" data-fancybox-group="gallery" <title="Раб_ОчистСооружения_Левневка"><img width="135px" src="rab_oshitjSooruzenia_levnevka_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="rab_transport_genPlan.jpg" data-fancybox-group="gallery" <title="Раб_Транспорт_генПлан"><img width="135px" src="rab_transport_genPlan_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="rab_admin_korpus_S.jpg" data-fancybox-group="gallery" <title="Раб_Админ_корпус_С"><img width="135px" src="rab_admin_korpus_S_tn.jpg" alt="" /></a></td>
            <td><a class="fancybox" href="geologija.jpg" data-fancybox-group="gallery" <title="Геология"><img width="135px" src="geologija_tn.jpg" alt="" /></a></td>
</tr>
            <tr>
            <td><a href="rab.kpp-arhitektChastj.zip">скачать</a></td><td><a href="rab.kpp-arhitektChastj-chertezi.zip">скачать</a></td>
            <td><a href="rab.OshitjSooruzenia-levnevka.zip">скачать</a></td><td><a href="rab.transport-genPlan.zip">скачать</a></td>
            <td><a href="rab.admin-korpus-S-dpi.zip">скачать</a></td>
            <td><a style="color:red;" href="rab.boz-geologija.zip"><b>скачать</b></a></td>
            </tr>
            
           
            
            </table>
         <br>      
         
            	<h1 style="margin-left:25px;margin-top:20px;text-transform:capitalize;">ТИТУЛЬНЫЕ ЛИСТЫ НЕ СКАНИРОВАННЫХ ПАПОК - 132 ПАПКИ</h1>
        
     <p><b>   <i style="color:red;"><br> ВЫ МОЖЕТЕ ЗАПРОСИТЬ СОСКАНИРОВАТЬ КОНКРЕТНУЮ ПАПКУ, ОПИРАЯСЬ НА КОНКРЕТНЫЙ ТИТУЛЬНЫЙ ЛИСТ ПАПКИ.</i></b></p>
        
            
            
         
            
       
        
        
        
     

<div class="gallery" style="margin-top:-40px;">  
  <?php include "folio-gallery.php"; ?>
</div> 

        	
            
          	<div class="main_bottom"></div>
    </div>
       
        </div>
        
        
        <div id="footer">
        <p>
       ООО "КАРАТ" @ 2012
        </p>
        </div>
        
        </div>
</body>
</html>