<div id="expanded_review_146471689">
<a name="UR146471689"></a>
<div id="UR146471689" class=" extended provider0  first">
<div class="col1of2">
<div class="member_info">
<div id="UID_01732DE09D08D6928EDBAF9B9A618AD8-SRC_146471689" class="memberOverlayLink" onmouseover="ta.call('ta.overlays.Factory.memberOverlay', event, this, 's3 dg rgba_gry update2012');">
<div class="avatar profile_01732DE09D08D6928EDBAF9B9A618AD8 ">
<span class="taLnk" onclick=>
<script type="text/javascript">
ta.store('friendAvatarSwitcherObj', (function() {
var AVATAR_CLASS_GUID_REGEX = /\bavatarGUID:(\w+)\b/; // Class that contains the GUID of the member
//  whose avatar it's on.
var AVATAR_CLASS = 'potentialFacebookAvatar';         // Signal class for Mootools parsing of the DOM.
var AVATAR_CLASS_SELECTOR = '.' + AVATAR_CLASS;       // Selector needed for Mootools $$ function.
var guidToImgMap = {};        // mapping of member guids to avatar img tags
var friendGuidToSrcMap = {};  // mapping of friend guids* to facebook profile pic src values
//  *only ever contains guids of people with avatar img tags on page
var friendGuids = [];         // array of friend guids*, used because IE doesn't like for-each loops
//  *only ever contains guids of people with avatar img tags on page
return {
// Finds all avatars on the page that match the signal class, and stores them
// in a map for later replacement.
findAvatarsOnPage: function() {
$$(AVATAR_CLASS_SELECTOR).each(function (avatarImg) {
var guid = avatarImg.className.match(AVATAR_CLASS_GUID_REGEX);
if (guid && guid[1]) { // based on how JS regex works, guid[1] is the user's guid
guidToImgMap[guid[1]] = avatarImg; // associate the guid with the img tag
}
});
},
// Replaces all avatars on the page with the correct FB avatars, using
// the maps of GUIDs to img tags and FB profile src values.
replaceAvatarsOnPage: function() {
for (var i = 0; i < friendGuids.length; i++) { // because IE doesn't like for-each loops
var avatarImg = guidToImgMap[friendGuids[i]]
avatarImg.src = friendGuidToSrcMap[friendGuids[i]];
avatarImg.className = avatarImg.className.replace(AVATAR_CLASS_GUID_REGEX, '').replace(AVATAR_CLASS, '');
}
},
// Checks if guid is already in map of avatar img guids, and
// if it is, adds it to map of guids to be converted. This is called
// by a different file, such as friends_avatar_data_js.vm.
checkAndAddGuidAndSrc: function(guid, src) {
if (guidToImgMap.hasOwnProperty(guid)) {
friendGuids.push(guid);
friendGuidToSrcMap[guid] = src;
}
}
}
})());
// Make the partial request, and set our response behavior.
ta.merge('facebook.data.params', {uid: '01732DE09D08D6928EDBAF9B9A618AD8'});    ta.keep('facebook.data.request', 'FRIEND_AVATARS');
ta.keep('facebook.data.onAvail.FRIEND_AVATARS', function() {
ta.retrieve('friendAvatarSwitcherObj').replaceAvatarsOnPage();
});
ta.queueForLoad(function() { // just in case we have the ta object before the DOM is fully initialized
ta.retrieve('friendAvatarSwitcherObj').findAvatarsOnPage(); // as soon as we can, start parsing the DOM for avatars
}, "findAvatarsOnPage");
</script>
<img src="http://media-cdn.tripadvisor.com/media/photo-t/01/2a/fd/97/avatar.jpg" class="avatar potentialFacebookAvatar avatarGUID:01732DE09D08D6928EDBAF9B9A618AD8" width="74" height="74"/>
</span>
</div>
<div class="username mo">
<span class="expand_inline scrname hvrIE6 mbrName_01732DE09D08D6928EDBAF9B9A618AD8">Galileoo</span>
</div>
</div>
<div class="location">
Уфа, Россия
</div>
</div>
<div class="memberBadging">
<div id="UID_01732DE09D08D6928EDBAF9B9A618AD8-CONT" class="totalReviewBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15984'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -10, -50);">
<div class="reviewerTitle">Младший критик</div>
<img src="http://c1.tacdn.com/img2/badges/star1.gif" alt="5 отзывов" class="icon" width="25" height="24">
<span class="badgeText">5 отзывов</span>
<div class="contributionReviewBadge">
<img src="http://c1.tacdn.com/img2/badges/hotel_review_1.gif" alt="" class="icon" width="25" height="24">
<span class="badgeText">5 отзывов об отелях</span>
</div> </div>
<div class="passportStampsBadge badge" onclick="ta.call('ta.overlays.Factory.memberPassportStampOverlay', event, this,
       { actionRecord: 'Cities_Badge_Clicked', memberId: '01732DE09D08D6928EDBAF9B9A618AD8', screenName: 'Galileoo', geos: [304017, 480211, 1135654, 298507, 298349], geo: '298507' })">
<img src="http://c1.tacdn.com/img2/badges/passport.gif" alt="Отзывы в 5 городах" class="icon" width="25" height="24">
<span class="badgeText">Отзывы в 5 городах</span> </div>
<div id="UID_01732DE09D08D6928EDBAF9B9A618AD8-HV" class="helpfulVotesBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15983'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -22, -50);">
<img src="http://c1.tacdn.com/img2/badges/ribbon.gif" alt="11 благодарностей" class="icon" width="25" height="24">
<span class="badgeText">11 благодарностей</span>
</div>
</div>
</div>
<div class="col2of2">
<div class="quote"><a href="/ShowUserReviews-g298507-d2210614-r146471689-Apple_Hostel-St_Petersburg_Northwestern_District.html#CHECK_RATES_CONT" onclick="setPID()" id="r146471689">&#x201c;Отличный хостел!&#x201d;</a></div>
<div class="rating reviewItemInline">
<span class="rate rate_s s50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
<span class="ratingDate">Отзыв от 30 ноября 2012
</span>
</div>
<div id="helpfulq146471689_expanded" class="helpful">
<span class="isHelpful"><strong>Был ли этот отзыв полезным?</strong></span>
<span class="button_2011_grn">
<span class="yes tgt_helpfulq146471689 sprite-gradient1x32_grn gradient" onmouseover="this.style.cursor='pointer';" onclick="ta.util.cookie.setPIDCookie(5034); ta.call('ta.servlet.Reviews.helpfulVoteHandlerOb', event, this, 'LeJIVqd4EVIpECri1GII26mbqgqguuuxizSxiEpqgqWQQoqnQQeVsSVuqHyXAvoKkqHMXXUK3UdqHxfqHb22cVQQoqnQQ5itIVcqHhIQQoqnQQwVIVEtHpEyQQoqnQQZiEIGuVtIVECQQoqnQQxMStIESnIxiGIac6XoXmqoTpcUd3dkU3vA0tEn1Ud3dkU3vA0zH1XAvoKk0pSM1KUkmXxMzsKAxMKvxM3AXvzsxM7bqnA7Ab3UvbxMv0EJIVqiJcpV1U');">Да</span> </span>
<span class="sprite-grayArrowLeft"></span>
<span class="numHlp"><span class="numHlpIn">1</span></span>
</div>
<div class="clearFix"></div>
<div class="entry">
<p>
Останавливалась в данном хостеле на неделю и мне всё очень понравилось. Я не понимаю людей, которые оставляют негативные отзывы о хостеле. По-моему глупо ожидать условия 5-звёздочного отеля в хостеле за такую сумму. <br/><br/>Расположение. До метро пешком 5-7 минут. До двух супермаркетов пешком 5 и 10 минут. Основные достопримечательности также в пешей доступности. В общем, расположение отличное.<br/><br/>Хостел находится на втором этаже. Входная дверь не закрывается, но у меня не возникало ощущения страха за свои вещи. В комнатах находятся локеры для ценных вещей (небольшие личные шкафчики с замком).<br/><br/>В хостеле чисто, горничная убирается каждый день, вся сантехника содержится в приличном виде. Три душевые кабины. Горячей воды иногда не хватало на всех, особенно по утрам, но лично я не испытывала подобных неудобств, потому что вставала рано. <br/><br/>Хочу отметить приветливость и отзывчивость администраторов хостела - Ирины, Оксаны и Аслана. Спасибо вам ребята!
</p>
</div>
<div class="rating-list">
<ul class="recommend">
<li>
<span class="recommend-titleInline">Пребывание в ноябре 2012, тип поездки: поездка в одиночку</span>
<ul class="recommend-column first">
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Цена/качество</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Расположение</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Качество сна</li>
</ul>
<ul class="recommend-column">
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Номера</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Чистота</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Обслуживание</li>
</ul>
</li>
</ul>
</div>
<div class="expanded lessLink">
<span class="taLnk collapse ">Менее</span><img class="textArrow_more sprite-arrow_dropdown_blu_up" src="http://c1.tacdn.com/img2/x.gif" alt=""/>
</div>
<div class="reportProblem"> <span id="ReportIAP_146471689" class="problem collapsed taLnk" onclick="ta.call('ta.overlays.Factory.iapFlyout', event, this, {voteContentType:'USERREVIEW', contentId: '146471689'})">Возникли проблемы с этим отзывом?</span>
</div>
<div class="askQuestion">
</div>
<div class="note">
Этот отзыв является субъективным мнением пользователя TripAdvisor, а не компании TripAdvisor LLC. </div>
</div>
</div>
<div class="ad iab_inlineBanner">
<div id="ad468X60_ajax" class="adInner"><!-- Ad tags: doubleclick
domain=ad.doubleclick.net
site=ta.ta.ru.s
zone=eu.russia.north_west_russia.st_petersburg
pid=2247
price=budget
PageType=Hotel_Review
PlaceType=Accommodation
pool=A
kw=Apple Hostel
geo=298507
detail=2210614
rd=ru
hname=Apple Hostel
gname=?????-?????????
sz=468X60
tile=10
slice=p13n_control_9
u=Hotel_Review|A|p13n_control_9|298507|-NOT-DEFINED-|2210614
brand=none
sub_brand=none
ord=74133328
area=EU.Russia.Northwestern_District.St_Petersburg

-->
<div class="adServer ">
<div class="details" id="adiframe_ajax10" style="display: none">
<script> var adiframe_ajax10 = "ad.doubleclick.net+ta.ta.ru.s+eu.russia.north_west_russia.st_petersburg+60+468+EU.Russia.Northwestern_District.St_Petersburg+false+pid=2247;price=budget;PageType=Hotel_Review;PlaceType=Accommodation;pool=A;kw=Apple+Hostel;geo=298507;detail=2210614;rd=ru;hname=Apple+Hostel;gname=%3F%3F%3F%3F%3F-%3F%3F%3F%3F%3F%3F%3F%3F%3F;sz=468X60;tile=10;slice=p13n_control_9;u=Hotel_Review%7CA%7Cp13n_control_9%7C298507%7C-NOT-DEFINED-%7C2210614;brand=none;sub_brand=none;ord=74133328;abr=!webtv"; adpHtml = "adp/adp-v3577045549a.html"
</script>
</div>
<noscript>
<!-- for non JavaScript browsers and Netscape 2.x -->
<a href="http://ad.doubleclick.net/jump/ta.ta.ru.s/eu.russia.north_west_russia.st_petersburg;pid=2247;price=budget;PageType=Hotel_Review;PlaceType=Accommodation;pool=A;kw=Apple+Hostel;geo=298507;detail=2210614;rd=ru;hname=Apple+Hostel;gname=%3F%3F%3F%3F%3F-%3F%3F%3F%3F%3F%3F%3F%3F%3F;sz=468X60;tile=10;slice=p13n_control_9;u=Hotel_Review%7CA%7Cp13n_control_9%7C298507%7C-NOT-DEFINED-%7C2210614;brand=none;sub_brand=none;ord=74133328?" rel="nofollow">
<img src="http://ad.doubleclick.net/ad/ta.ta.ru.s/eu.russia.north_west_russia.st_petersburg;pid=2247;price=budget;PageType=Hotel_Review;PlaceType=Accommodation;pool=A;kw=Apple+Hostel;geo=298507;detail=2210614;rd=ru;hname=Apple+Hostel;gname=%3F%3F%3F%3F%3F-%3F%3F%3F%3F%3F%3F%3F%3F%3F;sz=468X60;tile=10;slice=p13n_control_9;u=Hotel_Review%7CA%7Cp13n_control_9%7C298507%7C-NOT-DEFINED-%7C2210614;brand=none;sub_brand=none;ord=74133328?" width="468" height="60" border="0">
</a>
</noscript>
</div> </div>
</div>
</div>
<div id="expanded_review_141903472">
<a name="UR141903472"></a>
<div id="UR141903472" class=" extended provider0  ">
<div class="col1of2">
<div class="member_info">
<div id="UID_0D0E466DCFB8E8CCAE622F24B07F0564-SRC_141903472" class="memberOverlayLink" onmouseover="ta.call('ta.overlays.Factory.memberOverlay', event, this, 's3 dg rgba_gry update2012');">
<div class="avatar profile_0D0E466DCFB8E8CCAE622F24B07F0564 ">
<span class="taLnk" onclick=>
<img src="http://media-cdn.tripadvisor.com/media/photo-l/02/ee/58/0e/yuriylysghj.jpg" class="avatar potentialFacebookAvatar avatarGUID:0D0E466DCFB8E8CCAE622F24B07F0564" width="74" height="74"/>
</span>
</div>
<div class="username mo">
<span class="expand_inline scrname hvrIE6 mbrName_0D0E466DCFB8E8CCAE622F24B07F0564">yuriylysghj</span>
</div>
</div>
<div class="location">
Днепропетровск, Украина
</div>
</div>
<div class="memberBadging">
<div id="UID_0D0E466DCFB8E8CCAE622F24B07F0564-CONT" class="totalReviewBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15984'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -25, -50);">
<span class="badgeText">1 отзыв</span>
</div>
<div id="UID_0D0E466DCFB8E8CCAE622F24B07F0564-HV" class="helpfulVotesBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15983'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -22, -50);">
<img src="http://c1.tacdn.com/img2/badges/ribbon.gif" alt="1 благодарность" class="icon" width="25" height="24">
<span class="badgeText">1 благодарность</span>
</div>
</div>
</div>
<div class="col2of2">
<div class="quote"><a href="/ShowUserReviews-g298507-d2210614-r141903472-Apple_Hostel-St_Petersburg_Northwestern_District.html#CHECK_RATES_CONT" onclick="setPID()" id="r141903472">&#x201c;Гнилое яблоко&#x201d;</a></div>
<div class="rating reviewItemInline">
<span class="rate rate_s s20">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="2 из 5 звезд" content="2.0"/>
</span>
<span class="ratingDate">Отзыв от 3 октября 2012
</span>
</div>
<div id="helpfulq141903472_expanded" class="helpful">
<span class="isHelpful"><strong>Был ли этот отзыв полезным?</strong></span>
<span class="button_2011_grn">
<span class="yes tgt_helpfulq141903472 sprite-gradient1x32_grn gradient" onmouseover="this.style.cursor='pointer';" onclick="ta.util.cookie.setPIDCookie(5034); ta.call('ta.servlet.Reviews.helpfulVoteHandlerOb', event, this, 'LeJIVqd4EVIpECri1GII26mbqgqguuuxizSxiEpqgqWQQoqnQQeVsSVuqHyXAvoKkqHMXXUK3UdqHxfqHb22cVQQoqnQQ5itIVcqHhIQQoqnQQwVIVEtHpEyQQoqnQQZiEIGuVtIVECQQoqnQQxMStIESnIxiGIac6XoXmqoTpcUdUAKmdkX0tEn1UdUAKmdkX0zH1XAvoKk0pSM1KxMKzsd33xMfqn7vzsvffbzs3XXqnXd7KkqnKo3d0EJIVqiJcpV1U');">Да</span> </span>
<span class="sprite-grayArrowLeft"></span>
<span class="numHlp"><span class="numHlpIn">1</span></span>
</div>
<div class="clearFix"></div>
<div class="entry">
<p>
Давно мечтал посмотреть Санкт-Петербург. И вот наконец спланировали с женой поездку на сентябрь на 9 дней. Встал вопрос о проживании. Остановили свой выбор на Apple, что на Итальянской улице. Комнаты на фото чистые и уютные, цены вроде как приятные, расположение в центре города, сайт достойный. В общем, связались по электронке, забронировали за месяц до поездки двухместный номер, получили счет, заплатили предоплату. По приезду в Питер довольно быстро нашли хостел. Первое впечатление было удручающее. При входе в хостел смутила настежь открытая дверь (как оказалось после, дверь никогда не закрывалась). На входе лежала гора мусора в мусорных пакетах, а в самом хостеле тихий ужас: помещения все маленькие, полы грязные, обои на стенах обшарпанные и грязные (видимо поэтому хозяева заклеивают стены картой мира и бумагой А4 с отзывами иностранцев о хостеле), а душевая кабина и унитаз содержались в совершенно не санитарном состоянии. Так как в дороге мы провели 1,5 суток, то душ очень хотелось посетить. Так вот горячая вода, а скорее теплая, радовала очень редко (пришлось мыться в холодной воде), смеситель повесить некуда, так как крепление отломано, ну а у FM-радио в кабине какие-то психи видимо ножницами повыдалбывали все кнопочки. В общем, настоящий гадюшник. Так как мы приехали утром около 9:00, а ·Ð°ÑÐµÐ»ÐµÐ½Ð¸Ðµ Ð² 13:00, ÑÐ¾ Ð½Ð°Ñ Ð½Ð¾Ð¼ÐµÑ (ÑÐ¾ ÑÐ»Ð¾Ð² Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑÑÐ°ÑÐ¾ÑÐ° ÐÐ»ÑÐ³Ð¸) Ð±ÑÐ» ÐµÑÐµ Ð·Ð°Ð½ÑÑ. &quot;ÐÑ ÑÑÐ¾ Ð¶, Ð¿Ð¾ÑÐ¼Ð¾ÑÑÐ¸Ð¼ Ð½Ð°ÑÑ ÐºÐ¾Ð¼Ð½Ð°ÑÑ, Ð° Ð¿Ð¾ÑÐ¾Ð¼ Ð±ÑÐ´ÐµÐ¼ Ð¿ÑÐ¸Ð½Ð¸Ð¼Ð°ÑÑ ÑÐµÑÐµÐ½Ð¸Ñ&quot; ÑÐµÑÐ¸Ð»Ð¸ Ð¼Ñ Ð¸ Ð¾ÑÐ¿ÑÐ°Ð²Ð¸Ð»Ð¸ÑÑ Ð² ÐÐµÑÐµÑÐ³Ð¾Ñ. Ð¡Ð²Ð¾Ð¸ Ð²ÐµÑÐ¸ Ð¾ÑÑÐ°Ð²Ð¸Ð»Ð¸ Ð² &quot;ÐºÐ°Ð¼ÐµÑÐµ ÑÑÐ°Ð½ÐµÐ½Ð¸Ñ&quot; (Ð¿ÑÐ¾ÑÑÐ¾ ÐºÐ¾Ð¼Ð½Ð°ÑÐ° Ð´Ð»Ñ ÑÐ¾Ð·Ð¸Ð½Ð²ÐµÐ½ÑÐ°ÑÑ). ÐÑÐ¸ÐµÑÐ°Ð² Ð²ÐµÑÐµÑÐ¾Ð¼ Ð² ÑÐ¾ÑÑÐµÐ», ÑÑÐ»ÑÑÐ°Ð»Ð¸ ÑÐ¶Ðµ Ð¾Ñ Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑÑÐ°ÑÐ¾ÑÐ° ÐÐºÑÐ°Ð½Ñ, ÑÑÐ¾ Ð½Ð°Ð¼ Ð¿ÑÐµÐ´Ð¾ÑÑÐ°Ð²ÑÑ ÐºÐ¾Ð¼Ð½Ð°ÑÑ Ð² Ð´ÑÑÐ³Ð¾Ð¼ ÑÐ¾ÑÑÐµÐ»Ðµ, ÐºÐ¾ÑÐ¾ÑÑÐ¹ ÑÐ¾Ð¶Ðµ &quot;Apple&quot;, Ð¸ Ð½Ð°ÑÐ¾Ð´Ð¸ÑÑÑ ÑÐ¾Ð²ÑÐµÐ¼ ÑÑÐ´Ð¾Ð¼. ÐÐ°Ð±ÑÐ°Ð»Ð¸ Ð²ÐµÑÐ¸ Ð¸ Ð¾ÑÐ¿ÑÐ°Ð²Ð¸Ð»Ð¸ÑÑ Ð½Ð° Ð½Ð¾Ð²Ð¾Ðµ Ð¼ÐµÑÑÐ¾ Ð¾Ð±Ð¸ÑÐ°Ð½Ð¸Ñ. Ð§ÑÐ¾ Ð¾ÐºÐ°Ð·Ð°Ð»Ð¾ÑÑ Ð¸ Ð»ÑÑÑÐµ. ÐÑÐ¾ÑÐ¾Ð¹ ÑÐ¾ÑÑÐµÐ» Ð½Ð°ÑÐ¾Ð´Ð¸Ð»ÑÑ Ð² 150 Ð¼ÐµÑÑÐ°Ñ Ð¾Ñ Ð¿ÐµÑÐ²Ð¾Ð³Ð¾, Ð² ÑÑÐ¾Ð¼ Ð¶Ðµ ÐºÐ²Ð°ÑÑÐ°Ð»Ðµ, Ð²ÑÐ¾Ð´ Ð² Ð°ÑÐºÑ ÑÐ¾ ÑÑÐ¾ÑÐ¾Ð½Ñ ÑÐ».Ð¡Ð°Ð´Ð¾Ð²Ð¾Ð¹. ÐÑÐ¾ÑÐ¾Ð¹ &quot;Apple&quot; Ð¾ÐºÐ°Ð·Ð°Ð»ÑÑ Ð·Ð½Ð°ÑÐ¸ÑÐµÐ»ÑÐ½Ð¾ Ð¿ÑÐ¾ÑÑÐ¾ÑÐ½ÐµÐ¹ Ð¿ÐµÑÐ²Ð¾Ð³Ð¾ Ð¸ ÑÐ¸ÑÐµ, ÑÐ°Ð½ÑÐ·Ð»Ñ Ð¸ Ð´ÑÑÐµÐ²ÑÐµ Ð´ÐµÐ¹ÑÑÐ²Ð¸ÑÐµÐ»ÑÐ½Ð¾ Ð±ÑÐ»Ð¸ ÑÐ¸ÑÑÑÐ¼Ð¸. ÐÐ¾ÑÐµÐ»Ð¸Ð»Ð¸ Ð½Ð°Ñ Ð² ÑÐµÑÑÐ¸Ð¼ÐµÑÑÐ½ÑÐ¹ Ð½Ð¾Ð¼ÐµÑ (Ð² ÐºÐ¾Ð¼Ð½Ð°ÑÐµ Ð±ÑÐ»Ð¾ 3 Ð´Ð²ÑÑÑÑÑÑÑÐ½ÑÑ ÐºÑÐ¾Ð²Ð°ÑÐ¸ Ð¸ ÑÑÐ°ÑÑÐ¹ ÑÑÐµÐ»ÑÑÐ¶). Ð ÑÐ¶Ðµ ÑÑÐµÑÐ¸Ð¹ Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑÑÐ°ÑÐ¾Ñ Ð·Ð° Ð´ÐµÐ½Ñ ÐÑÐ¸Ð½Ð° Ð·Ð°Ð²ÐµÑÐ¸Ð»Ð°, ÑÑÐ¾ Ð½Ð¸ÐºÐ¾Ð³Ð¾ Ð¿Ð¾Ð´ÑÐµÐ»ÑÑÑ Ð½Ðµ Ð±ÑÐ´ÑÑ, Ð½ÐµÑÐ¼Ð¾ÑÑÑ Ð½Ð° 4 ÑÐ²Ð¾Ð±Ð¾Ð´Ð½ÑÑ Ð¼ÐµÑÑÐ°. Ð¥Ð¾ÑÐµÐ»Ð¾ÑÑ Ð¾ÑÐ¼ÐµÑÐ¸ÑÑ, ÑÑÐ¾ ÐºÐ¾Ð¼Ð½Ð°ÑÑ Ð² ÑÐ¾ÑÑÐµÐ»Ðµ Ð½Ð¸ÐºÐ¾Ð³Ð´Ð° Ð½Ðµ Ð·Ð°ÐºÑÑÐ²Ð°ÑÑÑÑ, ÐºÐ»ÑÑÐ¸ Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑÑÐ°ÑÐ¾ÑÑ Ð²ÑÐ´Ð°Ð²Ð°ÑÑ Ð¾ÑÐºÐ°Ð·ÑÐ²Ð°ÑÑÑÑ, Ð°ÑÐ³ÑÐ¼ÐµÐ½ÑÐ¸ÑÑÑ &quot;Ð¿Ð¾Ð¶Ð°ÑÐ½Ð¾Ð¹ Ð±ÐµÐ·Ð¾Ð¿Ð°ÑÐ½Ð¾ÑÑÑÑ&quot;. Ð¯ÑÐ¸ÐºÐ¸ Ð´Ð»Ñ ÑÑÐ°Ð½ÐµÐ½Ð¸Ñ ÑÐµÐ½Ð½ÑÑ Ð²ÐµÑÐµÐ¹ (Ð¸ ÐºÐ»ÑÑÐ¸ Ð¾Ñ Ð½Ð¸Ñ) ÐµÑÑÑ ÑÐ¾Ð»ÑÐºÐ¾ Ñ Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑÑÐ°ÑÐ¾ÑÐ° Ð½Ð° Ð²ÑÐ¾Ð´Ðµ Ð² ÑÐ¾ÑÑÐµÐ». Ð¥Ð¾Ð»Ð¾Ð´Ð¸Ð»ÑÐ½Ð¸Ðº Ð½Ðµ ÑÐ¿ÑÐ°Ð²Ð»ÑÐµÑÑÑ Ñ ÐºÐ¾Ð»Ð¸ÑÐµÑÑÐ²Ð¾Ð¼ Ð»ÑÐ´ÐµÐ¹ Ð² ÑÐ¾ÑÑÐµÐ»Ðµ, Ð²ÐµÑÐ½Ð¾ Ð·Ð°Ð±Ð¸Ñ Ð¿Ð¾Ð´ Ð·Ð°Ð²ÑÐ·ÐºÑ, Ð¿ÑÐ°ÐºÑÐ¸ÑÐµÑÐºÐ¸ Ð½Ðµ ÑÐ¾Ð»Ð¾Ð´Ð¸Ñ. Ð Ð½Ð¸Ð¶Ð½ÐµÐ¼ Ð¾ÑÑÐµÐºÐµ-Ð¼Ð¾ÑÐ¾Ð·Ð¸Ð»ÐºÐµ &quot;ÑÑÐ±Ð°&quot; Ð² ÑÑÐ¸ Ð¿Ð°Ð»ÑÑÐ°. Ð¡Ð»Ð¾Ð¶Ð¸Ð»Ð¾ÑÑ Ð²Ð¿ÐµÑÐ°ÑÐ»ÐµÐ½Ð¸Ðµ, ÑÑÐ¾ Ð»ÑÐ´Ð¸, ÐºÐ¾ÑÐ¾ÑÑÐµ Ð²ÑÐµÐ·Ð¶Ð°ÑÑ Ð¸Ð· ÑÐ¾ÑÑÐµÐ»Ð°, Ð¿ÑÐ¾Ð´ÑÐºÑÑ ÑÐ²Ð¾Ð¸ Ð½Ðµ Ð·Ð°Ð±Ð¸ÑÐ°ÑÑ. ÐÐ°Ð¼Ð¸ Ð±ÑÐ»Ð¾ Ð¾Ð±Ð½Ð°ÑÑÐ¶ÐµÐ½Ð¾ Ð¼Ð¾Ð»Ð¾ÐºÐ¾, ÑÑÐ¾Ðº Ð³Ð¾Ð´Ð½Ð¾ÑÑÐ¸ ÐºÐ¾ÑÐ¾ÑÐ¾Ð³Ð¾ Ð¸ÑÑÐµÐº 3 Ð½ÐµÐ´ÐµÐ»Ð¸ Ð´Ð¾ ÑÐ¾Ð³Ð¾. ÐÐµ ÑÐ´Ð¸Ð²Ð»ÑÐ¹ÑÐµÑÑ, ÐµÑÐ»Ð¸ Ð²Ð°ÑÐ¸ Ð¿ÑÐ¾Ð´ÑÐºÑÑ Ð¸Ð· ÑÐ¾Ð»Ð¾Ð´Ð¸Ð»ÑÐ½Ð¸ÐºÐ° Ð±ÑÐ´ÑÑ Ð¿ÑÐ¾Ð¿Ð°Ð´Ð°ÑÑ. ÐÐºÐ½Ð° Ð¸Ð· ÐºÐ¾Ð¼Ð½Ð°Ñ Ð²ÑÑÐ¾Ð´ÑÑ Ð½Ð° Ð¾Ð¶Ð¸Ð²Ð»ÐµÐ½Ð½ÑÐ¹ Ð¿ÐµÑÐµÐºÑÐµÑÑÐ¾Ðº ÑÐ».Ð¡Ð°Ð´Ð¾Ð²Ð¾Ð¹ Ð¸ ÑÐ».ÐÐ½Ð¶ÐµÐ½ÐµÑÐ½Ð¾Ð¹. ÐÐ¾ÑÑÑ Ð¸Ð·-Ð·Ð° Ð´Ð²Ð¸Ð¶ÐµÐ½Ð¸Ñ ÑÑÐ°Ð½ÑÐ¿Ð¾ÑÑÐ° ÑÐ¸ÑÐ¾ Ð² ÐºÐ¾Ð¼Ð½Ð°ÑÐ°Ñ Ð½Ðµ Ð±ÑÐ´ÐµÑ. ÐÐ»ÑÑ Ð¿Ð¾Ð´ ÑÐ¾ÑÑÐµÐ»Ð¾Ð¼ ÑÐ°Ð±Ð¾ÑÐ°ÐµÑ ÐºÑÑÐ³Ð»Ð¾ÑÑÑÐ¾ÑÐ½Ð¾Ðµ ÐºÐ°ÑÐµ-Ð±Ð°Ñ. ÐÑÐ¾Ð±ÐµÐ½Ð½Ð¾ Ð²ÐµÐ»Ð¸ÐºÐ¾Ð»ÐµÐ¿Ð½Ð¾ ÑÐ»ÑÑÐ½Ð¾ Ð¼ÑÐ·ÑÐºÑ, ÑÐ¼ÐµÑ, ÐºÑÐ¸ÐºÐ¸ Ð¸ Ð¼Ð°ÑÑ Ð² Ð½Ð¾ÑÑ Ñ Ð¿ÑÑÐ½Ð¸ÑÑ Ð½Ð° ÑÑÐ±Ð±Ð¾ÑÑ Ð¸ Ñ ÑÑÐ±Ð±Ð¾ÑÑ Ð½Ð° Ð²Ð¾ÑÐºÑÐµÑÐµÐ½ÑÐµ, ÐºÐ¾Ð³Ð´Ð° Ð² Ð·Ð°Ð²ÐµÐ´ÐµÐ½Ð¸Ð¸ Ð¾ÑÐ´ÑÑÐ°ÐµÑ &quot;Ð·Ð¾Ð»Ð¾ÑÐ°Ñ&quot; Ð¼Ð¾Ð»Ð¾Ð´ÐµÐ¶Ñ. Ð Ð½ÐµÑÐ¼Ð¾ÑÑÑ Ð½Ð° ÑÐ¾, ÑÑÐ¾ Ð¼Ñ ÐºÐ°Ð¶Ð´ÑÐ¹ Ð´ÐµÐ½Ñ ÑÐ¾Ð´Ð¸Ð»Ð¸ Ð¿Ð¾ ÐÐ¸ÑÐµÑÑ Ð¿Ð¾ 6-8 ÑÐ°ÑÐ¾Ð² Ð¿ÐµÑÐºÐ¾Ð¼ Ð¸ Ð¿ÑÐ¸ÑÐ¾Ð´Ð¸Ð»Ð¸ Ð² ÑÐ¾ÑÑÐµÐ» Ð¿Ð¾Ð»Ð½Ð¾ÑÑÑÑ Ð¸Ð·Ð¼Ð¾ÑÐ°Ð½Ð½ÑÐ¼Ð¸, Ð·Ð°ÑÐ½ÑÑÑ Ð¿Ð¾Ð´ Ð²ÐµÑÑ ÑÑÐ¾Ñ ÑÑÐ¼ Ð±ÑÐ»Ð¾ ÑÑÐ¶ÐµÐ»Ð¾. ÐÐ· Ð¿Ð¾Ð»Ð¾Ð¶Ð¸ÑÐµÐ»ÑÐ½Ð¾Ð³Ð¾: ÐµÑÑÑ ÑÐµÐ½, ÑÑÐ¸ÑÐ°Ð»ÐºÐ°, ÑÑÑÐ³, Ð±ÐµÑÐ¿Ð»Ð°ÑÐ½ÑÐ¹ Ð¸ Ð±ÑÑÑÑÑÐ¹ WiFi, Ð³Ð°Ð·Ð¾Ð²Ð°Ñ Ð¿Ð»Ð¸ÑÐ°, Ð¼Ð¸Ð½Ð¸Ð±Ð¸Ð±Ð»Ð¸Ð¾ÑÐµÐºÐ°, ÑÐµÐ»ÐµÐ²Ð¸Ð·Ð¾Ñ Ð² Ð¾Ð±ÑÐµÐ¹ ÐºÐ¾Ð¼Ð½Ð°ÑÐµ, Ð³Ð¾ÑÑÑÐ°Ñ Ð²Ð¾Ð´Ð°, ÑÐ¸ÑÑÑÐµ ÑÐ½Ð¸ÑÐ°Ð·Ñ Ð¸ Ð´ÑÑÐµÐ²ÑÐµ, Ð²Ð»Ð°Ð¶Ð½Ð°Ñ ÑÐ±Ð¾ÑÐºÐ° ÐºÐ°Ð¶Ð´ÑÐ¹ Ð´ÐµÐ½Ñ Ð² ÐºÐ¾Ð¼Ð½Ð°ÑÐ°Ñ. Ð¢Ð°Ðº Ð¼Ñ Ð¿ÑÐ¾Ð¶Ð¸Ð»Ð¸ 8 Ð´Ð½ÐµÐ¹ (7 Ð½Ð¾ÑÐµÐ¹) Ð¸Ð· 9. ÐÐµÐ¿ÑÐ¸ÑÑÐ½Ð¾ÑÑÐ¸ Ð½Ð°ÑÐ°Ð»Ð¸ÑÑ Ð² Ð¿ÑÐµÐ´Ð¿Ð¾ÑÐ»ÐµÐ´Ð½Ð¸Ð¹ Ð´ÐµÐ½Ñ. Ð£ÑÑÐ¾Ð¼ Ñ Ð½Ð°Ñ ÑÐ¿ÑÐ¾ÑÐ¸Ð»Ð¸, Ð½Ðµ Ð±ÑÐ´ÐµÐ¼ Ð»Ð¸ Ð¼Ñ Ð¿ÑÐ¾ÑÐ¸Ð², ÐµÑÐ»Ð¸ Ð½Ð°Ð¼ Ð½Ð° Ð¿Ð¾ÑÐ»ÐµÐ´Ð½ÑÑ Ð½Ð°ÑÑ Ð½Ð¾ÑÑ Ð² ÑÐ¾ÑÑÐµÐ»Ðµ Ð¿Ð¾Ð´ÑÐµÐ»ÑÑ 2 Ð¸Ð½Ð¾ÑÑÑÐ°Ð½ÑÐµÐ². ÐÐ° ÑÑÐ¾ Ð¼Ñ Ð¾ÑÐ²ÐµÑÐ¸Ð»Ð¸ Ð¾ÑÐºÐ°Ð·Ð¾Ð¼, Ð²ÐµÐ´Ñ Ð²Ð½Ð¾ÑÐ¸Ð»Ð¸ Ð¿ÑÐµÐ´Ð¾Ð¿Ð»Ð°ÑÑ Ð·Ð° 8 Ð½Ð¾ÑÐµÐ¹ Ð·Ð° Ð´Ð²ÑÑÐ¼ÐµÑÑÐ½ÑÐ¹ Ð½Ð¾Ð¼ÐµÑ. &quot;ÐÑ ÑÑÐ¾ Ð¶, Ð±ÑÐ´ÐµÐ¼ Ð¸ÑÐºÐ°ÑÑ Ð´ÑÑÐ³Ð¸Ðµ Ð²Ð°ÑÐ¸Ð°Ð½ÑÑ.&quot; - Ð¾ÑÐ²ÐµÑÐ¸Ð»Ð¸ Ð½Ð°Ð¼ Ð¸ Ð¼Ñ ÑÐ¾ ÑÐ¿Ð¾ÐºÐ¾Ð¹Ð½Ð¾Ð¹ Ð´ÑÑÐ¾Ð¹ Ð¾ÑÐ¿ÑÐ°Ð²Ð¸Ð»Ð¸ÑÑ Ð´Ð°Ð»ÑÑÐµ Ð·Ð½Ð°ÐºÐ¾Ð¼Ð¸ÑÑÑÑ Ñ ÐÐ¸ÑÐµÑÐ¾Ð¼. ÐÐµÑÐµÑÐ¾Ð¼, Ð²ÐµÑÐ½ÑÐ²ÑÐ¸ÑÑ Ð² ÑÐ¾ÑÑÐµÐ», Ð¼Ñ Ð¾Ð±Ð½Ð°ÑÑÐ¶Ð¸Ð»Ð¸, ÑÑÐ¾ Ð² Ð½Ð°ÑÐµÐ¼ Ð½Ð¾Ð¼ÐµÑÐµ ÑÐ¶Ðµ Ð»ÐµÐ¶Ð°Ñ Ð²ÐµÑÐ¸ 4 ÑÐµÐ»Ð¾Ð²ÐµÐº. ÐÑÐµ Ð½Ð°ÑÐ¸ Ð´Ð¾Ð²Ð¾Ð´Ñ (Ð¸ Ð² ÑÐ¾Ð¼ ÑÐ¸ÑÐ»Ðµ Ð¾ Ð½Ð°ÑÐµÐ¹ 100% Ð¿ÑÐµÐ´Ð¾Ð¿Ð»Ð°ÑÐµ Ð·Ð° 2-ÑÐ¼ÐµÑÑÐ½ÑÐ¹ Ð½Ð¾Ð¼ÐµÑ Ð½Ð° 8 Ð½Ð¾ÑÐµÐ¹) Ð¾ ÑÐ»Ð¾Ð¶Ð¸Ð²ÑÐµÐ¹ÑÑ ÑÐ¸ÑÑÐ°ÑÐ¸Ð¸ Ð½Ð° Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑÑÐ°ÑÐ¾ÑÐ° ÐÐ»ÑÐ³Ñ Ð½Ðµ Ð²Ð¾Ð·ÑÐ¼ÐµÐ»Ð¸ Ð½Ð¸ Ð¼Ð°Ð»ÐµÐ¹ÑÐµÐ³Ð¾ Ð·Ð½Ð°ÑÐµÐ½Ð¸Ñ Ð¸ Ð½Ð¸ Ðº ÑÐµÐ¼Ñ Ð½Ðµ Ð¿ÑÐ¸Ð²ÐµÐ»Ð¸. Ð Ð¾ÑÐ²ÐµÑ ÑÑÐ»ÑÑÐ°Ð»Ð¸, ÑÑÐ¾ Ñ Ð½Ð¸Ñ Ð¿Ð¾Ð»ÑÑÐ¸Ð»Ð°ÑÑ Ð½Ð°ÐºÐ»Ð°Ð´ÐºÐ°, Ð²Ð½Ð¾Ð²Ñ Ð¿ÑÐ¸Ð±ÑÐ²ÑÐ¸Ðµ Ð¸Ð½Ð¾ÑÑÑÐ°Ð½ÑÑ Ð±ÑÐ´ÑÑ ÑÐ¿Ð°ÑÑ ÑÐ¾Ð»ÑÐºÐ¾ Ð² Ð½Ð°ÑÐµÐ¹ ÐºÐ¾Ð¼Ð½Ð°ÑÐµ, Ð¾Ð½Ð°, Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑÑÐ°ÑÐ¾Ñ ÐÐ»ÑÐ³Ð°, Ð½Ð¸ÑÐµÐ³Ð¾ Ð½Ðµ ÑÐµÑÐ°ÐµÑ, ÑÐµÐ»ÐµÑÐ¾Ð½Ñ ÑÑÐºÐ¾Ð²Ð¾Ð´ÑÑÐ²Ð° ÑÐ¾ÑÑÐµÐ»Ð° Ð´Ð»Ñ ÑÑÐµÐ³ÑÐ»Ð¸ÑÐ¾Ð²Ð°Ð½Ð¸Ñ ÐºÐ¾Ð½ÑÐ»Ð¸ÐºÑÐ° Ð½Ðµ Ð´Ð°Ð¼, Ð¼Ð¾Ð¶ÐµÐ¼ Ð²ÐµÑÐ½ÑÑÑ Ð´ÐµÐ½ÑÐ³Ð¸ - ÑÐ°Ð·Ð½Ð¸ÑÑ Ð¼ÐµÐ¶Ð´Ñ Ð¿ÑÐ¾Ð¶Ð¸Ð²Ð°Ð½Ð¸ÐµÐ¼ Ð² Ð´Ð²ÑÑÐ¼ÐµÑÑÐ½Ð¾Ð¹ ÐºÐ¾Ð¼Ð½Ð°ÑÐµ Ð¸ ÐºÐ¾Ð¼Ð½Ð°ÑÐµ Ð½Ð° 6 ÑÐµÐ»Ð¾Ð²ÐµÐº. ÐÑÐ¾Ð±ÐµÐ½Ð½Ð¾ Ð¿Ð¾Ð½ÑÐ°Ð²Ð¸Ð»Ð°ÑÑ ÑÑÐ°Ð·Ð° &quot;Ð½Ñ Ð²ÐµÐ´Ñ ÑÑÐ¾ Ð¶Ðµ ÑÐ¾ÑÑÐµÐ»&quot;. Ð Ð¾Ð±ÑÐµÐ¼, Ð² Ð¿Ð¾ÑÐ»ÐµÐ´Ð½ÑÑ Ð½Ð¾ÑÑ Ð¾ÑÑÑÐ¸Ð»Ð¸ Ð²ÑÑ Ð¿ÑÐµÐ»ÐµÑÑÑ Ð¿ÑÐ¾Ð¶Ð¸Ð²Ð°Ð½Ð¸Ñ Ð² Ð¾Ð±ÑÐ¸Ñ ÐºÐ¾Ð¼Ð½Ð°ÑÐ°Ñ. ÐÐ°ÑÐ¸ Ð½Ð¾Ð²ÑÐµ ÑÐ¾ÑÐµÐ´Ð¸ - Ð´Ð²Ðµ Ð¿Ð°ÑÑ Ð°Ð½Ð³Ð»Ð¸ÑÐ°Ð½ Ð¿ÑÐ¸ÑÐ»Ð¸ Ð´Ð¾Ð¼Ð¾Ð¹ Ð² 01:30 Ð¸ Ð½ÐµÑÐ¼Ð¾ÑÑÑ Ð½Ð° ÑÐ¾, ÑÑÐ¾ Ð¼Ñ ÑÐ¶Ðµ ÑÐ¿Ð°Ð»Ð¸, Ð²ÐºÐ»ÑÑÐ¸Ð»Ð¸ Ð¾Ð±ÑÐ¸Ð¹ ÑÐ²ÐµÑ Ð¸ ÐµÑÐµ Ð¾ÐºÐ¾Ð»Ð¾ ÑÐ°ÑÐ° ÑÐºÐ»Ð°Ð´ÑÐ²Ð°Ð»Ð¸ÑÑ. ÐÐµÐ²ÑÑÐºÐ¸ ÑÐ¾ÑÑ Ð¿Ð¾Ð¼ÑÐ»Ð¸ÑÑ, Ð° Ð²Ð¾Ñ Ð¿Ð°ÑÐ½Ð¸ ... ÐÐ¾Ð½Ð¸ÑÐµ Ð² ÐºÐ¾Ð¼Ð½Ð°ÑÐµ ÑÑÐ¾ÑÐ»Ð¾ ÐµÑÐµ ÑÐ¾ ... ÐÐ·-Ð·Ð° Ð¾ÑÑÑÑÑÑÐ²Ð¸Ñ ÑÑÑÐ»ÑÐµÐ², Ð²ÑÐµ Ð²ÐµÑÐ¸ Ð°Ð½Ð³Ð»Ð¸ÑÐ°Ð½Ðµ ÐºÑÑÐµÐ¹ Ð±ÑÐ¾ÑÐ¸Ð»Ð¸ Ð½Ð° ÐµÐ´Ð¸Ð½ÑÑÐ²ÐµÐ½Ð½ÑÐ¹ Ð¿Ð¾Ð´Ð¾ÐºÐ¾Ð½Ð½Ð¸Ðº. ÐÐ¾ÑÑÐ¾Ð¼Ñ ÑÑÑÐ¾Ð¼ Ð´Ð°Ð¶Ðµ Ð¿Ð¾ÑÐ»Ðµ ÑÐ°ÑÐ° Ð¿ÑÐ¾Ð²ÐµÑÑÐ¸Ð²Ð°Ð½Ð¸Ñ ÐºÐ¾Ð¼Ð½Ð°ÑÑ ÑÐµÐ·ÑÐ»ÑÑÐ°ÑÐ° Ð½Ðµ Ð¿ÑÐ¸Ð½ÐµÑÐ»Ð¾. ÐÐ¾Ñ ÑÐ°ÐºÐ¾Ð¹ Ð¾ÐºÐ°Ð·Ð°Ð»ÑÑ Ð½Ð°Ñ Ð¾ÑÐ´ÑÑ Ð² Ð¿ÑÐµÐºÑÐ°ÑÐ½Ð¾Ð¼ Ð³Ð¾ÑÐ¾Ð´Ðµ, ÑÐ¼Ð°Ð·Ð°Ð½Ð½ÑÐ¹ ÑÐºÐ¾ÑÑÐºÐ¸Ð¼ Ð¾ÑÐ½Ð¾ÑÐµÐ½Ð¸ÐµÐ¼ ÑÐ¾ ÑÑÐ¾ÑÐ¾Ð½Ñ Ð¿ÐµÑÑÐ¾Ð½Ð°Ð»Ð° ÑÐ¾ÑÑÐµÐ»Ð°. Ð Ðº Ð¸Ð½Ð¾ÑÑÑÐ°Ð½ÑÐ°Ð¼ Ð¸Ð· Ð´Ð°Ð»ÑÐ½ÐµÐ³Ð¾ Ð·Ð°ÑÑÐ±ÐµÐ¶ÑÑ Ð´ÐµÐ¹ÑÑÐ²Ð¸ÑÐµÐ»ÑÐ½Ð¾ Ð¾ÑÐ½Ð¾ÑÐµÐ½Ð¸Ðµ ÐºÐ°ÑÐ´Ð¸Ð½Ð°Ð»ÑÐ½Ð¾ Ð¿ÑÐ¾ÑÐ¸Ð²Ð¾Ð¿Ð¾Ð»Ð¾Ð¶Ð½Ð¾Ðµ. Ð£Ð´Ð°ÑÐ¸ ÐÑÐµÐ¼ Ð² Ð²ÑÐ±Ð¾ÑÐµ ÑÐ¾ÑÑÐµÐ»Ð¾Ð². Ð ÑÐ¾Ð»ÑÐºÐ¾ Ð¿Ð¾Ð»Ð¾Ð¶Ð¸ÑÐµÐ»ÑÐ½ÑÑ ÑÐ¼Ð¾ÑÐ¸Ð¹.
</p>
</div>
<div class="rating-list">
<ul class="recommend">
<li>
<span class="recommend-titleInline">ÐÑÐµÐ±ÑÐ²Ð°Ð½Ð¸Ðµ Ð² ÑÐµÐ½ÑÑÐ±ÑÐµ 2012, ÑÐ¸Ð¿ Ð¿Ð¾ÐµÐ·Ð´ÐºÐ¸: Ð¿Ð¾ÐµÐ·Ð´ÐºÐ° Ð²Ð´Ð²Ð¾ÑÐ¼</span>
<ul class="recommend-column first">
<li class="recommend-answer">
<span class="rate rate_ss ss20">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="2 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="2.0"/>
</span>
Ð¦ÐµÐ½Ð°/ÐºÐ°ÑÐµÑÑÐ²Ð¾</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="5.0"/>
</span>
Ð Ð°ÑÐ¿Ð¾Ð»Ð¾Ð¶ÐµÐ½Ð¸Ðµ</li>
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="1.0"/>
</span>
ÐÐ°ÑÐµÑÑÐ²Ð¾ ÑÐ½Ð°</li>
</ul>
<ul class="recommend-column">
<li class="recommend-answer">
<span class="rate rate_ss ss20">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="2 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="2.0"/>
</span>
ÐÐ¾Ð¼ÐµÑÐ°</li>
<li class="recommend-answer">
<span class="rate rate_ss ss30">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="3 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="3.0"/>
</span>
Ð§Ð¸ÑÑÐ¾ÑÐ°</li>
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="1.0"/>
</span>
ÐÐ±ÑÐ»ÑÐ¶Ð¸Ð²Ð°Ð½Ð¸Ðµ</li>
</ul>
</li>
</ul>
</div>
<div class="expanded lessLink">
<span class="taLnk collapse ">ÐÐµÐ½ÐµÐµ</span><img class="textArrow_more sprite-arrow_dropdown_blu_up" src="http://c1.tacdn.com/img2/x.gif" alt=""/>
</div>
<div class="reportProblem"> <span id="ReportIAP_141903472" class="problem collapsed taLnk" onclick="ta.call('ta.overlays.Factory.iapFlyout', event, this, {voteContentType:'USERREVIEW', contentId: '141903472'})">ÐÐ¾Ð·Ð½Ð¸ÐºÐ»Ð¸ Ð¿ÑÐ¾Ð±Ð»ÐµÐ¼Ñ Ñ ÑÑÐ¸Ð¼ Ð¾ÑÐ·ÑÐ²Ð¾Ð¼?</span>
</div>
<div class="askQuestion">
</div>
<div class="note">
Ð­ÑÐ¾Ñ Ð¾ÑÐ·ÑÐ² ÑÐ²Ð»ÑÐµÑÑÑ ÑÑÐ±ÑÐµÐºÑÐ¸Ð²Ð½ÑÐ¼ Ð¼Ð½ÐµÐ½Ð¸ÐµÐ¼ Ð¿Ð¾Ð»ÑÐ·Ð¾Ð²Ð°ÑÐµÐ»Ñ TripAdvisor, Ð° Ð½Ðµ ÐºÐ¾Ð¼Ð¿Ð°Ð½Ð¸Ð¸ TripAdvisor LLC. </div>
</div>
</div>
</div>
<div id="expanded_review_138504558">
<a name="UR138504558"></a>
<div id="UR138504558" class=" extended provider0  ">
<div class="col1of2">
<div class="member_info">
<div id="UID_39695CC1F8F895A71C206A850E54BA28-SRC_138504558" class="memberOverlayLink" onmouseover="ta.call('ta.overlays.Factory.memberOverlay', event, this, 's3 dg rgba_gry update2012');">
<div class="avatar profile_39695CC1F8F895A71C206A850E54BA28 ">
<span class="taLnk" onclick=>
<img src="http://media-cdn.tripadvisor.com/media/photo-t/01/2a/fd/8d/avatar.jpg" class="avatar potentialFacebookAvatar avatarGUID:39695CC1F8F895A71C206A850E54BA28" width="74" height="74"/>
</span>
</div>
<div class="username mo">
<span class="expand_inline scrname hvrIE6 mbrName_39695CC1F8F895A71C206A850E54BA28">920NatashaV_</span>
</div>
</div>
<div class="location">
ÐÐ°Ð»ÑÐ³Ð°
</div>
</div>
<div class="memberBadging">
<div id="UID_39695CC1F8F895A71C206A850E54BA28-CONT" class="totalReviewBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15984'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -25, -50);">
<span class="badgeText">1 Ð¾ÑÐ·ÑÐ²</span>
</div>
<div id="UID_39695CC1F8F895A71C206A850E54BA28-HV" class="helpfulVotesBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15983'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -22, -50);">
<img src="http://c1.tacdn.com/img2/badges/ribbon.gif" alt="5 Ð±Ð»Ð°Ð³Ð¾Ð´Ð°ÑÐ½Ð¾ÑÑÐµÐ¹" class="icon" width="25" height="24">
<span class="badgeText">5 Ð±Ð»Ð°Ð³Ð¾Ð´Ð°ÑÐ½Ð¾ÑÑÐµÐ¹</span>
</div>
</div>
</div>
<div class="col2of2">
<div class="quote"><a href="/ShowUserReviews-g298507-d2210614-r138504558-Apple_Hostel-St_Petersburg_Northwestern_District.html#CHECK_RATES_CONT" onclick="setPID()" id="r138504558">&#x201c;Ð£Ð¶Ð°ÑÐ½Ð¾Ðµ Ð¼ÐµÑÑÐµÑÐºÐ¾&#x201d;</a></div>
<div class="rating reviewItemInline">
<span class="rate rate_s s10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="1.0"/>
</span>
<span class="ratingDate">ÐÑÐ·ÑÐ² Ð¾Ñ 27 Ð°Ð²Ð³ÑÑÑÐ° 2012
</span>
</div>
<div id="helpfulq138504558_expanded" class="helpful">
<span class="isHelpful"><strong>ÐÑÐ» Ð»Ð¸ ÑÑÐ¾Ñ Ð¾ÑÐ·ÑÐ² Ð¿Ð¾Ð»ÐµÐ·Ð½ÑÐ¼?</strong></span>
<span class="button_2011_grn">
<span class="yes tgt_helpfulq138504558 sprite-gradient1x32_grn gradient" onmouseover="this.style.cursor='pointer';" onclick="ta.util.cookie.setPIDCookie(5034); ta.call('ta.servlet.Reviews.helpfulVoteHandlerOb', event, this, 'LeJIVqd4EVIpECri1GII26mbqgqguuuxizSxiEpqgqWQQoqnQQeVsSVuqHyXAvoKkqHMXXUK3UdqHxfqHb22cVQQoqnQQ5itIVcqHhIQQoqnQQwVIVEtHpEyQQoqnQQZiEIGuVtIVECQQoqnQQxMStIESnIxiGIac6XoXmqoTpcUmvoKdoov0tEn1UmvoKdoov0zH1XAvoKk0pSM1mA3AoffUqnvqnvAobkUfXK3bvoKzsod7bXv0EJIVqiJcpV1U');">ÐÐ°</span> </span>
<span class="sprite-grayArrowLeft"></span>
<span class="numHlp"><span class="numHlpIn">5</span></span>
</div>
<div class="clearFix"></div>
<div class="entry">
<p>
ÐÐ¾Ð»Ð½Ð¾ÑÑÑÑ ÑÐ¾Ð³Ð»Ð°ÑÐ½Ð° Ñ Ð¿ÑÐµÐ´ÑÐ´ÑÑÐ¸Ð¼ Ð¾ÑÐ·ÑÐ²Ð¾Ð¼. ÐÐ·Ð´Ð¸Ð»Ð¸ Ñ Ð´Ð¾ÑÐºÐ¾Ð¹ Ð² ÐÐ¸ÑÐµÑ Ð½Ð° Ð½ÐµÐ´ÐµÐ»Ñ Ð² Ð¸ÑÐ»Ðµ. ÐÑÐ±Ð¸ÑÐ°Ð»Ð¸ ÑÐ¾ÑÑÐµÐ» Ð´Ð¾Ð»Ð³Ð¾ Ð¸ Ð¿Ð¾ÑÐµÐ¼Ñ-ÑÐ¾ ÑÐµÑÑ Ð´ÐµÑÐ½ÑÐ» Ð¾ÑÑÐ°Ð½Ð¾Ð²Ð¸ÑÑÑÑ Ð½Ð° ÑÑÐ¾Ð¼ Ð²Ð°ÑÐ¸Ð°Ð½ÑÐµ, ÑÐ¶ Ð±Ð¾Ð»ÑÐ½Ð¾ ÑÐ¾ÑÐ¾ÑÐ¾ Ð±ÑÐ»Ð¾ Ð½Ð°Ð¿Ð¸ÑÐ°Ð½Ð¾ Ð¾ Ð½ÐµÐ¼ Ð½Ð° ÑÐ°Ð¹ÑÐµ. ÐÐ° Ð¸ ÑÐ°ÑÐ¿Ð¾Ð»Ð¾Ð¶ÐµÐ½Ð¸Ðµ ÑÐ¾ÑÐ¾ÑÐµÐµ. ÐÐ°Ð±ÑÐ¾Ð½Ð¸ÑÐ¾Ð²Ð°Ð»Ð¸ 2-ÑÐ¼ÐµÑÑÐ½ÑÐ¹ Ð½Ð¾Ð¼ÐµÑ. ÐÐµÑÐµÐ´ ÑÐ°Ð¼ÑÐ¼ Ð¾ÑÑÐµÐ·Ð´Ð¾Ð¼ Ð¿Ð¾Ð·Ð²Ð¾Ð½Ð¸Ð»Ð° Ð² ÑÐ¾ÑÑÐµÐ» Ð¸ ÑÑÐ¾ÑÐ½Ð¸Ð»Ð°, Ð²ÑÐµ Ð»Ð¸ Ð² Ð¿Ð¾ÑÑÐ´ÐºÐµ Ñ Ð±ÑÐ¾Ð½ÑÑ. ÐÐ½Ðµ Ð¾ÑÐ²ÐµÑÐ¸Ð»Ð¸, ÑÑÐ¾ ÐºÐ¾Ð¼Ð½Ð°ÑÐ° Ð½Ð°Ñ Ð¶Ð´ÐµÑ, Ð¿ÑÐ¸ÐµÐ·Ð¶Ð°Ð¹ÑÐµ. ÐÐµ ÑÑÐ°Ð·Ñ Ð½Ð°ÑÐ»Ð¸ Ð´Ð¾Ð¼, Ð² ÐºÐ¾ÑÐ¾ÑÐ¾Ð¼ ÑÐ°ÑÐ¿Ð¾Ð»Ð°Ð³Ð°Ð»ÑÑ ÑÐ¾ÑÑÐµÐ», Ñ.Ðº. Ð²ÑÐµ Ð·Ð´Ð°Ð½Ð¸Ðµ Ð±ÑÐ»Ð¾ Ð² Ð»ÐµÑÐ°Ñ. ÐÐºÐ°Ð·ÑÐ²Ð°ÐµÑÑÑ, ÑÐ¾ÑÑÐµÐ» Ð½Ð°ÑÐ¾Ð´Ð¸ÑÑÑ Ð² Ð¶Ð¸Ð»Ð¾Ð¼ Ð´Ð¾Ð¼Ðµ Ð½Ð° 2-Ð¼ ÑÑÐ°Ð¶Ðµ (Ð¿ÐµÑÐµÐ¾Ð±Ð¾ÑÑÐ´Ð¾Ð²Ð°Ð½Ð° ÐºÐ¾Ð¼Ð¼ÑÐ½Ð°Ð»ÐºÐ°). ÐÐµÑÑÐ¾ ÑÐ¶Ð°ÑÐ½Ð¾ Ð¼Ð°Ð»Ð¾. ÐÐµÐ¹ÑÑÐ²Ð¸ÑÐµÐ»ÑÐ½Ð¾, ÐºÐ°Ð¼ÐµÑ ÑÑÐ°Ð½ÐµÐ½Ð¸Ñ Ð½ÐµÑ, Ð²ÐµÑÐ¸ Ð²ÑÐµ Ð½Ð¾Ð²Ð¾Ð¿ÑÐ¸Ð±ÑÐ²ÑÐ¸Ðµ ÑÐ²Ð°Ð»Ð¸Ð²Ð°ÑÑ Ð¿ÑÑÐ¼Ð¾ Ð½Ð° Ð¿Ð¾Ð»Ñ Ð² Ð¿ÑÐ¸ÑÐ¾Ð¶ÐµÐ¹. ÐÑÑÐ½Ñ, Ð¼ÐµÑÑÐ¾ Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑÑÐ°ÑÐ¾ÑÐ°, Ð¿ÑÐ¸ÑÐ¾Ð¶Ð°Ñ - ÑÑÐ¾ Ð²ÑÐµ Ð¾Ð´Ð½Ð° Ð·Ð¾Ð½Ð°. Ð¡Ð¸Ð´Ð¸ÑÑ Ð·Ð° ÑÑÐ¾Ð»Ð¾Ð¼ Ð½Ð° ÐºÑÑÐ½Ðµ Ð¸ ÑÐµÐ±Ðµ Ð² ÑÐ¾Ñ ÑÐ¼Ð¾ÑÑÐ¸Ñ Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑÑÐ°ÑÐ¾Ñ. ÐÐ²ÐµÑÑ Ð²ÑÐ¾Ð´Ð½Ð°Ñ Ð½Ð¸ÐºÐ¾Ð³Ð´Ð° Ð½Ðµ Ð·Ð°ÐºÑÑÐ²Ð°ÐµÑÑÑ, Ð° Ð² Ð´Ð²ÐµÑÑÑ Ð½Ð¾Ð¼ÐµÑÐ° Ð¿ÑÐ¾ÑÑÐ¾ Ð½ÐµÑ Ð·Ð°Ð¼ÐºÐ¾Ð². Ð§ÑÐ¾Ð±Ñ ÑÐ²Ð°ÑÐ¸ÑÑ Ð¿ÐµÐ»ÑÐ¼ÐµÐ½Ð¸ Ð¸Ð»Ð¸ ÑÑÐ¾-ÑÐ¾ Ð¿Ð¾Ð´Ð¾Ð±Ð½Ð¾Ðµ, Ð½ÑÐ¶Ð½Ð¾ ÑÐ°Ñ Ð¶Ð´Ð°ÑÑ ÐºÐ¾Ð²ÑÐ¸Ðº, Ñ.Ðº. Ð¾Ð½ ÐµÐ´Ð¸Ð½ÑÑÐ²ÐµÐ½Ð½ÑÐ¹. ÐÐ¾ÑÐ¾Ð¼ Ð¼Ñ Ð¿Ð»ÑÐ½ÑÐ»Ð¸ Ð¸ ÑÑÐ°Ð»Ð¸ ÐºÑÑÐ°ÑÑ Ð² ÐºÐ°ÑÐµ. Ð¢Ð°Ðº Ð²Ð¾Ñ Ð½Ð° ÑÑÐµÑ 2-ÑÐ¼ÐµÑÑÐ½Ð¾Ð³Ð¾ Ð½Ð¾Ð¼ÐµÑÐ°. Ð¢Ð°Ð¼ Ð´ÐµÐ¹ÑÑÐ²Ð¸ÑÐµÐ»ÑÐ½Ð¾ Ð½ÐµÑ Ð¾ÐºÐ¾Ð½ Ð¸ Ð¿Ð¾ Ð½Ð¾ÑÐ°Ð¼ Ð±ÑÐ»Ð¾ Ð´ÑÑÐ½Ð¾ ÑÐ¿Ð°ÑÑ. Ð¡ÑÐµÐ½Ñ ÐºÐ°ÑÑÐ¾Ð½Ð½ÑÐµ Ð¸ Ð²ÑÐµ ÑÐ¾Ð¶Ð´ÐµÐ½Ð¸Ñ, ÑÐ°Ð·Ð³Ð¾Ð²Ð¾ÑÑ ÑÐ»ÑÑÐ½Ñ Ð¾ÑÐµÐ½Ñ ÑÐ¾ÑÐ¾ÑÐ¾. ÐÐ¾ Ð¼Ñ ÑÐ°Ðº Ð²ÑÐ¼Ð°ÑÑÐ²Ð°Ð»Ð¸ÑÑ Ð·Ð° Ð´ÐµÐ½Ñ, ÑÑÐ¾ Ð²ÐµÑÐµÑÐ¾Ð¼ Ð¿Ð°Ð´Ð°Ð»Ð¸ Ð±ÐµÐ· Ð½Ð¾Ð³ Ð¸ Ð²ÐµÑÑ Ð¿Ð¾ÑÑÐ¾ÑÐ¾Ð½Ð½Ð¸Ð¹ ÑÑÐ¼ Ð½Ð°Ð¼ Ð±ÑÐ» Ð±ÐµÐ·ÑÐ°Ð·Ð»Ð¸ÑÐµÐ½. ÐÐ¾Ð³Ð´Ð° Ð¼Ñ Ð¿ÑÐ¸Ð±ÑÐ»Ð¸, ÑÐ¾ Ð¾ÐºÐ°Ð·Ð°Ð»Ð¾ÑÑ, ÑÑÐ¾ Ð½Ð°Ñ Ð½Ð¾Ð¼ÐµÑ Ð·Ð°Ð½ÑÑ. ÐÑÐµÐ´Ð»Ð°Ð³Ð°Ð»Ð¸ Ð¼ÐµÑÑÐ° Ð² 6-ÑÐ¸ Ð¼ÐµÑÑÐ½Ð¾Ð¼ Ð½Ð¾Ð¼ÐµÑÐµ. ÐÑ Ð¾ÑÐºÐ°Ð·Ð°Ð»Ð¸ÑÑ. Ð Ð¾Ð±ÐµÐ´Ñ Ð½Ð°Ñ Ð½Ð¾Ð¼ÐµÑ Ð²ÑÐµ-ÑÐ°ÐºÐ¸ Ð¾ÑÐ²Ð¾Ð±Ð¾Ð´Ð¸Ð»Ð¸. 2300 Ð·Ð° ÑÐ°ÐºÐ¾Ðµ ÑÐ±Ð¾Ð¶ÐµÑÑÐ²Ð¾ - ÑÑÐ¾, ÐºÐ¾Ð½ÐµÑÐ½Ð¾, ÑÐ»Ð¸ÑÐºÐ¾Ð¼. Ð Ð¾ÑÐ½Ð¾Ð²Ð½Ð¾Ð¼ ÐºÐ¾Ð½ÑÐ¸Ð½Ð³ÐµÐ½Ñ - Ð¸Ð½Ð¾ÑÑÑÐ°Ð½ÑÑ Ñ ÑÐ°Ð·Ð½ÑÑ ÑÐ³Ð¾Ð»ÐºÐ¾Ð² Ð¼Ð¸ÑÐ° - ÑÑÑÐºÐ¸, ÑÐ²ÐµÐ´Ñ, Ð°Ð½Ð³Ð»Ð¸ÑÐ°Ð½Ðµ, ÑÐ¿Ð¾Ð½ÑÑ Ð¸ Ñ.Ð´. Ð ÑÑÑÐºÐ¸Ñ ÑÐ¾Ð²ÑÐµÐ¼ Ð¼Ð°Ð»Ð¾. Ð ÑÐµÐ¿ÐµÑÑ Ñ Ð¿Ð¾Ð½ÑÐ»Ð° Ð¿Ð¾ÑÐµÐ¼Ñ. Ð£ Ð°Ð´Ð¼Ð¸Ð½Ð¸ÑÑÑÐ°ÑÐ¾ÑÐ¾Ð² Ðº Ð¸Ð½Ð¾ÑÑÑÐ°Ð½ÑÐ°Ð¼ ÑÐ¾Ð²ÑÐµÐ¼ Ð´ÑÑÐ³Ð¾Ðµ Ð¾ÑÐ½Ð¾ÑÐµÐ½Ð¸Ðµ, ÑÐµÐ¼ Ðº ÑÑÑÑÐºÐ¸Ð¼. ÐÐ½Ð¸ Ñ Ð½Ð¸Ð¼Ð¸ ÑÐ°Ð·Ð³Ð¾Ð²Ð°ÑÐ¸Ð²Ð°ÑÑ, ÑÐ¼ÐµÑÑÑÑ. Ð¡ Ð½Ð°ÑÐ¸Ð¼ Ð¶Ðµ Ð±ÑÐ°ÑÐ¾Ð¼ ÑÐµÐ´ÑÑ ÑÐºÐ²Ð¾Ð·Ñ Ð·ÑÐ±Ñ, ÑÑÐ¾-Ð½Ð¸Ð±ÑÐ´Ñ ÑÐ¿ÑÐ¾ÑÐ¸ÑÑ, Ð¾Ð½Ð¸ Ð¾ÑÐ²ÐµÑÑÑ Ð¸ ÑÑÐ°Ð·Ñ Ð¶Ðµ Ð¾ÑÐ²ÐµÑÐ½ÑÑÑÑ, ÑÐ¸Ð¿Ð° Ð²Ð°Ð»Ð¸, Ð½ÐµÐºÐ¾Ð³Ð´Ð°. Ð¡Ð°Ð¼Ð¾Ðµ Ð¸Ð½ÑÐµÑÐµÑÐ½Ð¾Ðµ Ð½Ð°ÑÐ°Ð»Ð¾ÑÑ Ð² Ð¿Ð¾ÑÐ»ÐµÐ´Ð½Ð¸Ð¹ Ð´ÐµÐ½Ñ Ð²ÐµÑÐµÑÐ¾Ð¼, Ð½Ð° ÑÐ»ÐµÐ´ÑÑÑÐ¸Ð¹ Ð½Ð°Ð¼ ÑÐµÐ·Ð¶Ð°ÑÑ. ÐÑÐ¸ÑÐ¾Ð´Ð¸Ð¼ Ð²ÐµÑÐµÑÐ¾Ð¼ Ð² 20-00 Ð² ÑÐ¾ÑÑÐµÐ», Ð° Ð°Ð´Ð¼Ð¸Ð½. ÐÐºÑÐ°Ð½Ð° Ð½Ð°Ñ ÐºÐ°Ðº Ð¿ÑÐ»ÑÐ½ÑÐ¼ Ð¼ÐµÑÐºÐ¾Ð¼ Ð¿Ð¾ Ð³Ð¾Ð»Ð¾Ð²Ðµ: &quot;Ð£ Ð½Ð°Ñ Ð½Ð°ÐºÐ»Ð°Ð´Ð¾ÑÐºÐ° Ð²ÑÑÐ»Ð°, Ð½Ð° ÑÑÑÐºÐ¸ ÑÐ°Ð½ÑÑÐµ Ð¿ÑÐ¸ÐµÑÐ°Ð»Ð¸ Ð³Ð¾ÑÑÐ¸, Ð½ÑÐ¶Ð½Ð¾ Ð¾ÑÐ²Ð¾Ð±Ð¾Ð´Ð¸ÑÑ Ð½Ð¾Ð¼ÐµÑ. Ð¢ÑÑ Ð½ÐµÐ´Ð°Ð»ÐµÐºÐ¾ ÐµÑÑÑ Ð´ÑÑÐ³Ð¾Ð¹ ÑÐ¾ÑÑÐµÐ» ÑÐ¾ ÑÐ²Ð¾Ð±Ð¾Ð´Ð½ÑÐ¼ Ð½Ð¾Ð¼ÐµÑÐ¾Ð¼&quot;. Ð¯ Ð³Ð¾Ð²Ð¾ÑÑ, ÑÑÐ¾ Ð½Ð¸ÑÐµÐ³Ð¾ Ð½Ðµ Ð·Ð½Ð°Ñ, Ð·Ð° Ð²ÑÐµ Ð´Ð½Ð¸ Ð·Ð°Ð¿Ð»Ð°ÑÐµÐ½Ð¾. Ð¡Ð¼Ð¾ÑÑÐ¸Ð¼, Ð° Ð½Ð°ÑÐ¸ ÑÐµÐ¼Ð¾Ð´Ð°Ð½Ñ ÑÐ¶Ðµ ÑÐ¾Ð±ÑÐ°Ð½Ñ Ð¸ ÑÑÐ¾ÑÑ Ð² ÐºÐ¾ÑÐ¸Ð´Ð¾ÑÐµ. ÐÐ°Ðº Ð²Ð°Ð¼ ÑÑÐ¾ Ð½ÑÐ°Ð²Ð¸ÑÑÑ? ÐÐµ Ð·Ð°ÑÐ¾ÑÐµÐ»Ð¾ÑÑ Ñ Ð³Ð¾Ð²Ð½Ð¾Ð¼ ÑÐ²ÑÐ·ÑÐ²Ð°ÑÑÑÑ. Ð¢Ð°Ðº ÑÑÐ¾, ÐµÑÐ»Ð¸ Ð½Ð° Ð²Ð°ÑÐµ Ð¼ÐµÑÑÐ¾ Ð¿ÑÐ¸ÐµÐ´ÑÑ Ð¸Ð½Ð¾ÑÑÑÐ°Ð½ÑÑ, ÑÐ¾ Ð±ÑÐ´ÑÑÐµ ÑÐ²ÐµÑÐµÐ½Ñ, ÑÑÐ¾ Ð²Ð°Ñ Ð²ÑÑÐµÐ»ÑÑ. ÐÑÐ¸ÑÐ»Ð¾ÑÑ Ð¿ÐµÑÐµÑÑÑÑ Ð¿Ð¾Ð´ Ð´Ð¾Ð¶Ð´ÐµÐ¼ Ð² 22-00 Ñ ÑÐµÐ±ÐµÐ½ÐºÐ¾Ð¼ Ð² Ð´ÑÑÐ³Ð¾Ð¹ ÑÐ¾ÑÑÐµÐ». Ð ÑÐ¾Ð²ÑÐµÐ¼ Ð¾Ð½ Ð¾ÐºÐ°Ð·Ð°Ð»ÑÑ Ð½Ðµ ÑÑÐ´Ð¾Ð¼, Ð² 20 Ð¼Ð¸Ð½. ÑÐ¾Ð´ÑÐ±Ñ. ÐÐ´Ð¼Ð¸Ð½ ÑÑÐ¾Ð³Ð¾ ÑÐ¾ÑÑÐµÐ»Ð° ÑÐºÐ°Ð·Ð°Ð», ÑÑÐ¾ Ñ Ð½Ð¸Ñ ÑÑÐ¾ Ð¾Ð±ÑÑÐ½Ð°Ñ Ð¿ÑÐ°ÐºÑÐ¸ÐºÐ° Ð¸ Ð¼Ñ Ð½Ðµ Ð¿ÐµÑÐ²ÑÐµ. Ð¢Ð°Ðº ÑÑÐ¾ 10 ÑÐ°Ð· Ð¿Ð¾Ð´ÑÐ¼Ð°Ð¹ÑÐµ, Ð¿ÑÐµÐ¶Ð´Ðµ ÑÐµÐ¼ ÑÑÐ´Ð° Ð¿Ð¾ÐµÑÐ°ÑÑ.
</p>
<div class="reviewItem">
<b>Ð¡Ð¾Ð²ÐµÑ Ð¿Ð¾ Ð²ÑÐ±Ð¾ÑÑ Ð½Ð¾Ð¼ÐµÑÐ°:</b> Ð¡Ð¾Ð²ÐµÑÑÑ Ð¾Ð±ÑÐ¾Ð´Ð¸ÑÑ ÑÑÐ¾ Ð¼ÐµÑÑÐ¾ ÑÑÐ¾ÑÐ¾Ð½Ð¾Ð¹
<div class="taLnk hvrIE6" onclick="ta.call('ta.overlays.Factory.showRoomTipsOverlay', event, this, 'ru');">ÐÑÑÐ³Ð¸Ðµ ÑÐ¾Ð²ÐµÑÑ Ð¿Ð¾ Ð²ÑÐ±Ð¾ÑÑ Ð½Ð¾Ð¼ÐµÑÐ°</div>
</div>
</div>
<div class="rating-list">
<ul class="recommend">
<li>
<span class="recommend-titleInline">ÐÑÐµÐ±ÑÐ²Ð°Ð½Ð¸Ðµ Ð² Ð¸ÑÐ»Ðµ 2012, ÑÐ¸Ð¿ Ð¿Ð¾ÐµÐ·Ð´ÐºÐ¸: ÑÐµÐ¼ÐµÐ¹Ð½Ð°Ñ Ð¿Ð¾ÐµÐ·Ð´ÐºÐ°</span>
<ul class="recommend-column first">
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="1.0"/>
</span>
Ð¦ÐµÐ½Ð°/ÐºÐ°ÑÐµÑÑÐ²Ð¾</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="5.0"/>
</span>
Ð Ð°ÑÐ¿Ð¾Ð»Ð¾Ð¶ÐµÐ½Ð¸Ðµ</li>
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="1.0"/>
</span>
ÐÐ°ÑÐµÑÑÐ²Ð¾ ÑÐ½Ð°</li>
</ul>
<ul class="recommend-column">
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="1.0"/>
</span>
ÐÐ¾Ð¼ÐµÑÐ°</li>
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="1.0"/>
</span>
Ð§Ð¸ÑÑÐ¾ÑÐ°</li>
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 Ð¸Ð· 5 Ð·Ð²ÐµÐ·Ð´" content="1.0"/>
</span>
ÐÐ±ÑÐ»ÑÐ¶Ð¸Ð²Ð°Ð½Ð¸Ðµ</li>
</ul>
</li>
</ul>
</div>
<div class="expanded lessLink">
<span class="taLnk collapse ">ÐÐµÐ½ÐµÐµ</span><img class="textArrow_more sprite-arrow_dropdown_blu_up" src="http://c1.tacdn.com/img2/x.gif" alt=""/>
</div>
<div class="reportProblem"> <span id="ReportIAP_138504558" class="problem collapsed taLnk" onclick="ta.call('ta.overlays.Factory.iapFlyout', event, this, {voteContentType:'USERREVIEW', contentId: '138504558'})">Возникли проблемы с этим отзывом?</span>
</div>
<div class="askQuestion">
</div>
<div class="note">
Этот отзыв является субъективным мнением пользователя TripAdvisor, а не компании TripAdvisor LLC. </div>
</div>
</div>
</div>
<div id="expanded_review_137970810">
<a name="UR137970810"></a>
<div id="UR137970810" class=" extended provider0  ">
<div class="col1of2">
<div class="member_info">
<div id="UID_4FDB1025A8D140C7DA3127A4BDBAE0E8-SRC_137970810" class="memberOverlayLink" onmouseover="ta.call('ta.overlays.Factory.memberOverlay', event, this, 's3 dg rgba_gry update2012');">
<div class="avatar profile_4FDB1025A8D140C7DA3127A4BDBAE0E8 ">
<span class="taLnk" onclick=>
<img src="http://media-cdn.tripadvisor.com/media/photo-t/01/2e/70/73/avatar055.jpg" class="avatar potentialFacebookAvatar avatarGUID:4FDB1025A8D140C7DA3127A4BDBAE0E8" width="74" height="74"/>
</span>
</div>
<div class="username mo">
<span class="expand_inline scrname hvrIE6 mbrName_4FDB1025A8D140C7DA3127A4BDBAE0E8">konoko777</span>
</div>
</div>
<div class="location">
Тверь, Россия
</div>
</div>
<div class="memberBadging">
<div id="UID_4FDB1025A8D140C7DA3127A4BDBAE0E8-CONT" class="totalReviewBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15984'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -25, -50);">
<span class="badgeText">2 отзыва</span>
</div>
<div id="UID_4FDB1025A8D140C7DA3127A4BDBAE0E8-HV" class="helpfulVotesBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15983'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -22, -50);">
<img src="http://c1.tacdn.com/img2/badges/ribbon.gif" alt="1 благодарность" class="icon" width="25" height="24">
<span class="badgeText">1 благодарность</span>
</div>
</div>
</div>
<div class="col2of2">
<div class="quote"><a href="/ShowUserReviews-g298507-d2210614-r137970810-Apple_Hostel-St_Petersburg_Northwestern_District.html#CHECK_RATES_CONT" onclick="setPID()" id="r137970810">&#x201c;сюрприз&#x201d;</a></div>
<div class="rating reviewItemInline">
<span class="rate rate_s s20">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="2 из 5 звезд" content="2.0"/>
</span>
<span class="ratingDate">Отзыв от 22 августа 2012
</span>
</div>
<div id="helpfulq137970810_expanded" class="helpful">
<span class="isHelpful"><strong>Был ли этот отзыв полезным?</strong></span>
<span class="button_2011_grn">
<span class="yes tgt_helpfulq137970810 sprite-gradient1x32_grn gradient" onmouseover="this.style.cursor='pointer';" onclick="ta.util.cookie.setPIDCookie(5034); ta.call('ta.servlet.Reviews.helpfulVoteHandlerOb', event, this, 'LeJIVqd4EVIpECri1GII26mbqgqguuuxizSxiEpqgqWQQoqnQQeVsSVuqHyXAvoKkqHMXXUK3UdqHxfqHb22cVQQoqnQQ5itIVcqHhIQQoqnQQwVIVEtHpEyQQoqnQQZiEIGuVtIVECQQoqnQQxMStIESnIxiGIac6XoXmqoTpcUmkAkKvUK0tEn1UmkAkKvUK0zH1XAvoKk0pSM1dqnxM7UKXobvxMUdKfkxMbmUXkbd7xM7bzsKzsv0EJIVqiJcpV1U');">Да</span> </span>
<span class="sprite-grayArrowLeft"></span>
<span class="numHlp"><span class="numHlpIn">1</span></span>
</div>
<div class="clearFix"></div>
<div class="entry">
<p>
Долго выбирали для поездки в Питер на неделю хороший хостел. И остановились почему-то на Apple.. Хорошие отзывы, сайт, милые фотографии. В общем впечатление было хорошее. Забронировали мы номер на двоих,внесли предоплату,все как положено. И разумеется чувствовали себя крайне уверенными и устроенными. Но в реальности все вышло не так хорошо,как мы представляли. Когда мы приехали туда, выяснилась странная вещь. Что обещанный нам хороший двуместный номер, ничто иное как каморка. Там даже не было окна!! Там стояла кровать..стол..и все. там не было даже свободного пространства. В общем,может я не права, но платить за это 2300 в сутки было бы крайне странно. На удивление,администратор сказала,что не любит туда никого заселять.. И предложила нам варианты в других отелях(к Apple hostel никакого отношения они не имели). В результате нам вернули нашу предоплату и мы отправились в другой отель. К счастью,там все сложилось благополучно.<br/>После всего этого у меня остались вопросы.. Зачем тогда они вообще забронировали нам номер,зачем брали предоплату,если в результате им некуда было нас селить... и они не собирались нас селить.. все очень странно. И нервотрепка. Не советую вам связываться с Apple Hostel,могут получиться достаточно забавные ситуации,потому что кроме нас там еще были ребята,которые ждали своей очереди..и которых тоже отправляли в другие места.
</p>
<div class="reviewItem">
<b>Совет по выбору номера:</b> Выбирайте другой хостел :)
<div class="taLnk hvrIE6" onclick="ta.call('ta.overlays.Factory.showRoomTipsOverlay', event, this, 'ru');">Другие советы по выбору номера</div>
</div>
</div>
<div class="rating-list">
<ul class="recommend">
<li>
<span class="recommend-titleInline">Пребывание в августе 2012, тип поездки: поездка вдвоём</span>
<ul class="recommend-column first">
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 из 5 звезд" content="1.0"/>
</span>
Цена/качество</li>
<li class="recommend-answer">
<span class="rate rate_ss ss30">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="3 из 5 звезд" content="3.0"/>
</span>
Расположение</li>
</ul>
<ul class="recommend-column">
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 из 5 звезд" content="1.0"/>
</span>
Номера</li>
<li class="recommend-answer">
<span class="rate rate_ss ss30">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="3 из 5 звезд" content="3.0"/>
</span>
Чистота</li>
</ul>
</li>
</ul>
</div>
<div class="expanded lessLink">
<span class="taLnk collapse ">Менее</span><img class="textArrow_more sprite-arrow_dropdown_blu_up" src="http://c1.tacdn.com/img2/x.gif" alt=""/>
</div>
<div class="reportProblem"> <span id="ReportIAP_137970810" class="problem collapsed taLnk" onclick="ta.call('ta.overlays.Factory.iapFlyout', event, this, {voteContentType:'USERREVIEW', contentId: '137970810'})">Возникли проблемы с этим отзывом?</span>
</div>
<div class="askQuestion">
</div>
<div class="note">
Этот отзыв является субъективным мнением пользователя TripAdvisor, а не компании TripAdvisor LLC. </div>
</div>
</div>
</div>
<div id="expanded_review_136852049">
<a name="UR136852049"></a>
<div id="UR136852049" class=" extended provider0  ">
<div class="col1of2">
<div class="member_info">
<div id="UID_4719D4D8B0556443CE7ED6E01280BFDA-SRC_136852049" class="memberOverlayLink" onmouseover="ta.call('ta.overlays.Factory.memberOverlay', event, this, 's3 dg rgba_gry update2012');">
<div class="avatar profile_4719D4D8B0556443CE7ED6E01280BFDA ">
<span class="taLnk" onclick=>
<img src="http://media-cdn.tripadvisor.com/media/photo-l/02/bb/6e/3d/anya-x.jpg" class="avatar potentialFacebookAvatar avatarGUID:4719D4D8B0556443CE7ED6E01280BFDA" width="74" height="74"/>
</span>
</div>
<div class="username mo">
<span class="expand_inline scrname hvrIE6 mbrName_4719D4D8B0556443CE7ED6E01280BFDA">Anya X</span>
</div>
</div>
<div class="location">
Кёльн, Германия
</div>
</div>
<div class="memberBadging">
<div id="UID_4719D4D8B0556443CE7ED6E01280BFDA-CONT" class="totalReviewBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15984'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -10, -50);">
<div class="reviewerTitle">Критик</div>
<img src="http://c1.tacdn.com/img2/badges/star2.gif" alt="7 отзывов" class="icon" width="25" height="24">
<span class="badgeText">7 отзывов</span>
<div class="contributionReviewBadge">
<img src="http://c1.tacdn.com/img2/badges/hotel_review_1.gif" alt="" class="icon" width="25" height="24">
<span class="badgeText">3 отзыва об отелях</span>
</div> </div>
<div class="passportStampsBadge badge" onclick="ta.call('ta.overlays.Factory.memberPassportStampOverlay', event, this,
       { actionRecord: 'Cities_Badge_Clicked', memberId: '4719D4D8B0556443CE7ED6E01280BFDA', screenName: 'Anya X', geos: [187849, 187830, 298507, 187309], geo: '298507' })">
<img src="http://c1.tacdn.com/img2/badges/passport.gif" alt="Отзывы в 4 городах" class="icon" width="25" height="24">
<span class="badgeText">Отзывы в 4 городах</span> </div>
<div id="UID_4719D4D8B0556443CE7ED6E01280BFDA-HV" class="helpfulVotesBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15983'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -22, -50);">
<img src="http://c1.tacdn.com/img2/badges/ribbon.gif" alt="4 благодарности" class="icon" width="25" height="24">
<span class="badgeText">4 благодарности</span>
</div>
</div>
</div>
<div class="col2of2">
<div class="quote"><a href="/ShowUserReviews-g298507-d2210614-r136852049-Apple_Hostel-St_Petersburg_Northwestern_District.html#CHECK_RATES_CONT" onclick="setPID()" id="r136852049">&#x201c;Очень хорошее место!&#x201d;</a></div>
<div class="rating reviewItemInline">
<span class="rate rate_s s50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
<span class="ratingDate">Отзыв от 10 августа 2012
</span>
</div>
<div id="helpfulq136852049_expanded" class="helpful">
<span class="isHelpful"><strong>Был ли этот отзыв полезным?</strong></span>
<span class="button_2011_grn">
<span class="yes tgt_helpfulq136852049 sprite-gradient1x32_grn gradient" onmouseover="this.style.cursor='pointer';" onclick="ta.util.cookie.setPIDCookie(5034); ta.call('ta.servlet.Reviews.helpfulVoteHandlerOb', event, this, 'LeJIVqd4EVIpECri1GII26mbqgqguuuxizSxiEpqgqWQQoqnQQeVsSVuqHyXAvoKkqHMXXUK3UdqHxfqHb22cVQQoqnQQ5itIVcqHhIQQoqnQQwVIVEtHpEyQQoqnQQZiEIGuVtIVECQQoqnQQxMStIESnIxiGIac6XoXmqoTpcUm3voXKdA0tEn1Um3voXKdA0zH1XAvoKk0pSM1dkUAxMdxMv7Koo3ddmfzskzsxM3zsKUXvK7qnxMb0EJIVqiJcpV1U');">Да</span> </span>
<span class="sprite-grayArrowLeft"></span>
<span class="numHlp"><span class="numHlpIn">1</span></span>
</div>
<div class="clearFix"></div>
<div class="entry">
<p>
Очень хороший хостел, всё понравилось. Приветливый и очень профессиональный персонал, знающий город и дающий ценные советы. Есть кухня, где можно готовить, душевые чистые - убираются несколько раз в день. В комнате есть шкафчики для ценных вещей. Ну и самое главное - отличная компания! Туристы со всего мира! Спасибо, мы приедем ещё :)
</p>
<div class="reviewItem">
<b>Совет по выбору номера:</b> выбирайте комнату 5)
<div class="taLnk hvrIE6" onclick="ta.call('ta.overlays.Factory.showRoomTipsOverlay', event, this, 'ru');">Другие советы по выбору номера</div>
</div>
</div>
<div class="rating-list">
<ul class="recommend">
<li>
<span class="recommend-titleInline">Пребывание в августе 2012, тип поездки: поездка с друзьями</span>
<ul class="recommend-column first">
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Цена/качество</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Расположение</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Качество сна</li>
</ul>
<ul class="recommend-column">
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Номера</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Чистота</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Обслуживание</li>
</ul>
</li>
</ul>
</div>
<div class="reportProblem"> <span id="ReportIAP_136852049" class="problem collapsed taLnk" onclick="ta.call('ta.overlays.Factory.iapFlyout', event, this, {voteContentType:'USERREVIEW', contentId: '136852049'})">Возникли проблемы с этим отзывом?</span>
</div>
<div class="askQuestion">
</div>
<div class="note">
Этот отзыв является субъективным мнением пользователя TripAdvisor, а не компании TripAdvisor LLC. </div>
</div>
</div>
</div>
<div id="expanded_review_136317436">
<a name="UR136317436"></a>
<div id="UR136317436" class=" extended provider0  ">
<div class="col1of2">
<div class="member_info">
<div id="UID_8D74CA8CCD0ADD5AB255DCACBA1F453F-SRC_136317436" class="memberOverlayLink" onmouseover="ta.call('ta.overlays.Factory.memberOverlay', event, this, 's3 dg rgba_gry update2012');">
<div class="avatar profile_8D74CA8CCD0ADD5AB255DCACBA1F453F ">
<span class="taLnk" onclick=>
<img src="http://media-cdn.tripadvisor.com/media/photo-t/01/2e/70/57/avatar030.jpg" class="avatar potentialFacebookAvatar avatarGUID:8D74CA8CCD0ADD5AB255DCACBA1F453F" width="74" height="74"/>
</span>
</div>
<div class="username mo">
<span class="expand_inline scrname hvrIE6 mbrName_8D74CA8CCD0ADD5AB255DCACBA1F453F">Smosy</span>
</div>
</div>
<div class="location">
Клин, Россия
</div>
</div>
<div class="memberBadging">
<div id="UID_8D74CA8CCD0ADD5AB255DCACBA1F453F-CONT" class="totalReviewBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15984'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -25, -50);">
<span class="badgeText">1 отзыв</span>
</div>
<div id="UID_8D74CA8CCD0ADD5AB255DCACBA1F453F-HV" class="helpfulVotesBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15983'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -22, -50);">
<img src="http://c1.tacdn.com/img2/badges/ribbon.gif" alt="3 благодарности" class="icon" width="25" height="24">
<span class="badgeText">3 благодарности</span>
</div>
</div>
</div>
<div class="col2of2">
<div class="quote"><a href="/ShowUserReviews-g298507-d2210614-r136317436-Apple_Hostel-St_Petersburg_Northwestern_District.html#CHECK_RATES_CONT" onclick="setPID()" id="r136317436">&#x201c;Яблочко с гнильцой&#x201d;</a></div>
<div class="rating reviewItemInline">
<span class="rate rate_s s10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 из 5 звезд" content="1.0"/>
</span>
<span class="ratingDate">Отзыв от 5 августа 2012
</span>
</div>
<div id="helpfulq136317436_expanded" class="helpful">
<span class="isHelpful"><strong>Был ли этот отзыв полезным?</strong></span>
<span class="button_2011_grn">
<span class="yes tgt_helpfulq136317436 sprite-gradient1x32_grn gradient" onmouseover="this.style.cursor='pointer';" onclick="ta.util.cookie.setPIDCookie(5034); ta.call('ta.servlet.Reviews.helpfulVoteHandlerOb', event, this, 'LeJIVqd4EVIpECri1GII26mbqgqguuuxizSxiEpqgqWQQoqnQQeVsSVuqHyXAvoKkqHMXXUK3UdqHxfqHb22cVQQoqnQQ5itIVcqHhIQQoqnQQwVIVEtHpEyQQoqnQQZiEIGuVtIVECQQoqnQQxMStIESnIxiGIac6XoXmqoTpcUm3mUkdm30tEn1Um3mUkdm30zH1XAvoKk0pSM1vxMkdfbvffxMKbxMxMob7XooxMfbf7bUqndomqn0EJIVqiJcpV1U');">Да</span> </span>
<span class="sprite-grayArrowLeft"></span>
<span class="numHlp"><span class="numHlpIn">3</span></span>
</div>
<div class="clearFix"></div>
<div class="entry">
<p>
Друзья, это просто шок! Нам обещали золотые горы и что это будет вообще &quot;очень романтичное место&quot;(с)администратор. Опыт поездок в Питер у нас был, хостелы тоже разные пробовали, но эппл чем то зацепил... Красивый сайт, замечательный диалог по телефону, довольно лояльные отзывы... но это только начало.<br/>Приехали, нашли нужный дом(кстати он находить на ген.ремонте согласно администрации города). Дом был в лесах, но нас это не особо испугало, ну всякое бывает... <br/>А вот дальше началось. Попали мы в довольно, маленькую клетушку, которая совмещала в себе кухню и ресепшн, а позже оказалось, что это ещё и комната отдыха. Ну ладно, решили мы... не &quot;хилтон&quot; же. Было утро, даже раннее утро, потому мы сразу спросили, где бы сложить вещи, помня, что на сайте написано: &quot;камера для хранения багажа&quot;. Но нам указали на коридор и сообщили- &quot;да вот тут бросайте&quot;. Ладно, ну может все камеры заняты, всякое бывает. Ждать нам необходимо было, до часа дня, так что время изучить всё это было.. <br/>Туалета нам обещали три, но на деле, один оказался закрыт, так как его засорили &quot;китайские друзья&quot;(с) администратор. Ладно, два тоже ничего... но... вот только в первом пахло кислятиной и почему то рядом с унитазом красовалась стремянка, с белыми следами побелки, на которой гордо высился рулон туалетной бумаги. Заглянув в ванную, я не обнаружил там ни &quot;радио FM&quot;(цитата с сайта), ни &quot;гидромассажера&quot;(цитата с сайта), ладно мы не буржуи, но вот черная плесень между плитами на полу, это уже слишком! <br/>Прошелся по хостелу... понял что фото и реальность &quot;слегка&quot; разные... более того, как написано в посте ранее, там реально нет возможности закрыть дверь!!<br/>Шок.. ну ладно, надо попить... на кухне оказалось, что нет чистых чашек. Везде след от вечернего чая, кофе или колы. В чайнике обнаружил целые пласты накипи, которые свободно дрейфовали по поверхности кипятка. Тут уже и чай пить не захотелось... развернулись и ушли. <br/><br/>Друзья, это не попытка обидеть хостел или его админов, просто попытка привлечь их внимание к этим проблемам. Сумма номера такая же как и у конкурентов, но сервис, это просто беда! На том же Невском есть ряд хостелов по таким же ценам, но с реально уютными номерами и чистыми туалетами. Я понимаю, что это не отель, это эконом вариант, но банальная гигиена и чистота должна соблюдаться везде.
</p>
</div>
<div class="rating-list">
<ul class="recommend">
<li>
<span class="recommend-titleInline">Пребывание в августе 2012, тип поездки: поездка вдвоём</span>
<ul class="recommend-column first">
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 из 5 звезд" content="1.0"/>
</span>
Цена/качество</li>
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 из 5 звезд" content="1.0"/>
</span>
Расположение</li>
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 из 5 звезд" content="1.0"/>
</span>
Качество сна</li>
</ul>
<ul class="recommend-column">
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 из 5 звезд" content="1.0"/>
</span>
Номера</li>
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 из 5 звезд" content="1.0"/>
</span>
Чистота</li>
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 из 5 звезд" content="1.0"/>
</span>
Обслуживание</li>
</ul>
</li>
</ul>
</div>
<div class="expanded lessLink">
<span class="taLnk collapse ">Менее</span><img class="textArrow_more sprite-arrow_dropdown_blu_up" src="http://c1.tacdn.com/img2/x.gif" alt=""/>
</div>
<div class="reportProblem"> <span id="ReportIAP_136317436" class="problem collapsed taLnk" onclick="ta.call('ta.overlays.Factory.iapFlyout', event, this, {voteContentType:'USERREVIEW', contentId: '136317436'})">Возникли проблемы с этим отзывом?</span>
</div>
<div class="askQuestion">
</div>
<div class="note">
Этот отзыв является субъективным мнением пользователя TripAdvisor, а не компании TripAdvisor LLC. </div>
</div>
</div>
</div>
<div id="expanded_review_131958832">
<a name="UR131958832"></a>
<div id="UR131958832" class=" extended provider0  ">
<div class="col1of2">
<div class="member_info">
<div id="UID_7898952FEC9713BAA74B549873449F4B-SRC_131958832" class="memberOverlayLink" onmouseover="ta.call('ta.overlays.Factory.memberOverlay', event, this, 's3 dg rgba_gry update2012');">
<div class="avatar profile_7898952FEC9713BAA74B549873449F4B ">
<span class="taLnk" onclick=>
<img src="http://media-cdn.tripadvisor.com/media/photo-l/02/b7/7b/60/kilimandjar1.jpg" class="avatar potentialFacebookAvatar avatarGUID:7898952FEC9713BAA74B549873449F4B" width="74" height="74"/>
</span>
</div>
<div class="username mo">
<span class="expand_inline scrname hvrIE6 mbrName_7898952FEC9713BAA74B549873449F4B">kilimandjar1</span>
</div>
</div>
<div class="location">
Москва, Россия
</div>
</div>
<div class="memberBadging">
<div id="UID_7898952FEC9713BAA74B549873449F4B-CONT" class="totalReviewBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15984'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -25, -50);">
<span class="badgeText">1 отзыв</span>
</div>
<div id="UID_7898952FEC9713BAA74B549873449F4B-HV" class="helpfulVotesBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15983'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -22, -50);">
<img src="http://c1.tacdn.com/img2/badges/ribbon.gif" alt="1 благодарность" class="icon" width="25" height="24">
<span class="badgeText">1 благодарность</span>
</div>
</div>
</div>
<div class="col2of2">
<div class="quote"><a href="/ShowUserReviews-g298507-d2210614-r131958832-Apple_Hostel-St_Petersburg_Northwestern_District.html#CHECK_RATES_CONT" onclick="setPID()" id="r131958832">&#x201c;Плохой персонал&#x201d;</a></div>
<div class="rating reviewItemInline">
<span class="rate rate_s s20">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="2 из 5 звезд" content="2.0"/>
</span>
<span class="ratingDate">Отзыв от 14 июня 2012
</span>
</div>
<div id="helpfulq131958832_expanded" class="helpful">
<span class="isHelpful"><strong>Был ли этот отзыв полезным?</strong></span>
<span class="button_2011_grn">
<span class="yes tgt_helpfulq131958832 sprite-gradient1x32_grn gradient" onmouseover="this.style.cursor='pointer';" onclick="ta.util.cookie.setPIDCookie(5034); ta.call('ta.servlet.Reviews.helpfulVoteHandlerOb', event, this, 'LeJIVqd4EVIpECri1GII26mbqgqguuuxizSxiEpqgqWQQoqnQQeVsSVuqHyXAvoKkqHMXXUK3UdqHxfqHb22cVQQoqnQQ5itIVcqHhIQQoqnQQwVIVEtHpEyQQoqnQQZiEIGuVtIVECQQoqnQQxMStIESnIxiGIac6XoXmqoTpcUmUAovvmX0tEn1UmUAovvmX0zH1XAvoKk0pSM1kvAvAoXqnzsfAkUm7bbkd7odAvkmddAqnd70EJIVqiJcpV1U');">Да</span> </span>
<span class="sprite-grayArrowLeft"></span>
<span class="numHlp"><span class="numHlpIn">1</span></span>
</div>
<div class="clearFix"></div>
<div class="entry">
<p>
Во-первых, в хостеле никогда не запираются двери. Ни входные, ни двери в комнаты. Надо быть готовым к тому, что в любой момент к вам в комнату заглянут другие постояльцы или сотрудники хостела, которые не считают нужным даже постучаться. Так что, если хотите переодеться, надо или идти в душ (хорошо хоть там двери запираются) или просить чтоб кто-нибудь стоял, охранял дверь. <br/>Во-вторых, персонал не отличается профессионализмом. <br/>Забронировали комнату на 8 человек, оплатили ее полностью на две ночи. Но нас приехало семеро, одна кровать осталась пустая. Зная это, на второй день, администратор подселила к нам иностранца. Когда мы зашли, она спросила не будем ли мы против (в это время иностранец уже спокойно сидел в нашей комнате за компьютером, расстелил себе постель, в общем обустроился). Мы ответили, что мы против, наша комната полностью оплачена и к нам не надо никого подселять. Администратор согласилась, что переселит его в другую комнату. <br/>Вернувшись ночевать мы конечно же застали этого иностранца у нас, со всеми его вещами. Скорее всего дневной администратор, Оксана, не захотела напрягаться, думать куда селить человека. Пришлось в 2 часа ночи скандалить уже с другим администратором. Сама она видимо ничего придумать не могла, обзванивала свое начальство, дневного администратора, плакала. Пока мы лично не поговорили по телефону с их начальством – ничего не решилось. Администратор переселила иностранца, долго перед ним извинялась. Нам вместо извинений сказала: «Ну я же не виновата, это все дневной администратор». Правильно, зачем перед своими извиняться, другое дело иностранный гражданин!<br/>В центре полно других хостелов. Думайте стоит ли выбирать Apple.
</p>
</div>
<div class="rating-list">
<ul class="recommend">
<li>
<span class="recommend-titleInline">Пребывание в июне 2012, тип поездки: поездка с друзьями</span>
<ul class="recommend-column first">
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Расположение</li>
</ul>
<ul class="recommend-column">
<li class="recommend-answer">
<span class="rate rate_ss ss30">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="3 из 5 звезд" content="3.0"/>
</span>
Номера</li>
<li class="recommend-answer">
<span class="rate rate_ss ss30">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="3 из 5 звезд" content="3.0"/>
</span>
Чистота</li>
<li class="recommend-answer">
<span class="rate rate_ss ss10">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="1 из 5 звезд" content="1.0"/>
</span>
Обслуживание</li>
</ul>
</li>
</ul>
</div>
<div class="expanded lessLink">
<span class="taLnk collapse ">Менее</span><img class="textArrow_more sprite-arrow_dropdown_blu_up" src="http://c1.tacdn.com/img2/x.gif" alt=""/>
</div>
<div class="reportProblem"> <span id="ReportIAP_131958832" class="problem collapsed taLnk" onclick="ta.call('ta.overlays.Factory.iapFlyout', event, this, {voteContentType:'USERREVIEW', contentId: '131958832'})">Возникли проблемы с этим отзывом?</span>
</div>
<div class="askQuestion">
</div>
<div class="note">
Этот отзыв является субъективным мнением пользователя TripAdvisor, а не компании TripAdvisor LLC. </div>
</div>
</div>
</div>
<div id="expanded_review_157921600">
<a name="UR157921600"></a>
<div id="UR157921600" class=" extended provider0  ">
<div class="col1of2">
<div class="member_info">
<div id="UID_7294956A347462C3855787C50DDC96CE-SRC_157921600" class="memberOverlayLink" onmouseover="ta.call('ta.overlays.Factory.memberOverlay', event, this, 's3 dg rgba_gry update2012');">
<div class="avatar profile_7294956A347462C3855787C50DDC96CE ">
<span class="taLnk" onclick=>
<img src="http://media-cdn.tripadvisor.com/media/photo-l/03/ac/7a/f8/sueoil.jpg" class="avatar potentialFacebookAvatar avatarGUID:7294956A347462C3855787C50DDC96CE" width="74" height="74"/>
</span>
</div>
<div class="username mo">
<span class="expand_inline scrname hvrIE6 mbrName_7294956A347462C3855787C50DDC96CE">Sueoil</span>
</div>
</div>
<div class="location">
Лондон, Соединенное Королевство
</div>
</div>
<div class="memberBadging">
<div id="UID_7294956A347462C3855787C50DDC96CE-CONT" class="totalReviewBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15984'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -10, -50);">
<div class="reviewerTitle">Критик</div>
<img src="http://c1.tacdn.com/img2/badges/star2.gif" alt="8 отзывов" class="icon" width="25" height="24">
<span class="badgeText">8 отзывов</span>
<div class="contributionReviewBadge">
<img src="http://c1.tacdn.com/img2/badges/hotel_review_1.gif" alt="" class="icon" width="25" height="24">
<span class="badgeText">8 отзывов об отелях</span>
</div> </div>
<div class="passportStampsBadge badge" onclick="ta.call('ta.overlays.Factory.memberPassportStampOverlay', event, this,
       { actionRecord: 'Cities_Badge_Clicked', memberId: '7294956A347462C3855787C50DDC96CE', screenName: 'Sueoil', geos: [60754, 189970, 2137552, 504162, 298507, 298484, 186416, 551687], geo: '298507' })">
<img src="http://c1.tacdn.com/img2/badges/passport.gif" alt="Отзывы в 8 городах" class="icon" width="25" height="24">
<span class="badgeText">Отзывы в 8 городах</span> </div>
<div id="UID_7294956A347462C3855787C50DDC96CE-HV" class="helpfulVotesBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15983'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -22, -50);">
<img src="http://c1.tacdn.com/img2/badges/ribbon.gif" alt="6 благодарностей" class="icon" width="25" height="24">
<span class="badgeText">6 благодарностей</span>
</div>
</div>
</div>
<div class="col2of2">
<div class="quote"><a href="/ShowUserReviews-g298507-d2210614-r157921600-Apple_Hostel-St_Petersburg_Northwestern_District.html#CHECK_RATES_CONT" onclick="setPID()" id="r157921600">&#x201c;Отличное начало моего едущего приключения&#x201d;</a></div>
<div class="rating reviewItemInline">
<span class="rate rate_s s50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
<span class="ratingDate">Отзыв от 16 апреля 2013
</span>
<a class="viaMobile sprite-greenPhone" href="/apps" target="_blank" onclick="ta.util.cookie.setPIDCookie(24687)">через мобильное устройство</a>
</div>
<div id="helpfulq157921600_expanded" class="helpful">
<span class="isHelpful"><strong>Был ли этот отзыв полезным?</strong></span>
<span class="button_2011_grn">
<span class="yes tgt_helpfulq157921600 sprite-gradient1x32_grn gradient" onmouseover="this.style.cursor='pointer';" onclick="ta.util.cookie.setPIDCookie(5034); ta.call('ta.servlet.Reviews.helpfulVoteHandlerOb', event, this, 'LeJIVqd4EVIpECri1GII26mbqgqguuuxizSxiEpqgqWQQoqnQQeVsSVuqHyXAvoKkqHMXXUK3UdqHxfqHb22cVQQoqnQQ5itIVcqHhIQQoqnQQwVIVEtHpEyQQoqnQQZiEIGuVtIVECQQoqnQQxMStIESnIxiGIac6XoXmqoTpcUokAXU3KK0tEn1UokAXU3KK0zH1XAvoKk0pSM1kXAdAo3bmdkd3XfmvookvkfoKxMxMfA3fzs0EJIVqiJcpV1U');">Да</span> </span>
</div>
<div class="clearFix"></div>
<div class="translation" id="mtreview_157921600">
<div class="translationIntro">
<span class="">Это автоматический перевод отзыва c английского</span>
<span class="tooltip taLnk" onmouseover="ta.call('ta.overlays.Factory.relBelowH', event, this); this.onmouseover=null">
Что это? <div class="overlayContents">
<div class="help">Чтобы предоставить Вам советы от максимального количества путешественников, этот отзыв был автоматически переведен на русский язык. Возможно, он не полностью передает суть оригинального отзыва. Надеемся, это поможет Вам спланировать поездку.</div> </div>
</span>
</div>
<span class="translatedBy noimage">
Перевод: PROMT
</span>
<span class="formLabel">Показать автоматические переводы</span>
<form action="/SetTranslationOption" class="translationOptionForm" method="post">
<input type="hidden" name="returnTo" value="http%3A__2F____2F__www__2E__tripadvisor__2E__ru__2F__ExpandedUserReviews%23mtreview_157921600"/>
<label>Да <input type="radio" name="translateAuto" value="true" class="submitOnClick" checked onclick="return ta.call('ta.servlet.Reviews.mtSubmitOnClick',event);"/>
</label>
<label>Нет <input type="radio" name="translateAuto" value="false" class="submitOnClick" onclick="return ta.call('ta.servlet.Reviews.mtSubmitOnClick',event);"/>
</label>
</form>
</div>
<div class="entry">
<p>
Я останавливался в Хостеле Apple в течение трех ночей в смешанном общежитии как первая остановка на двухлетнем приключении путешествия. Какое отличное начало моей поездки. Катерина и другие менеджеры были очень любезными и ответили на все мои вопросы, стараясь изо всех сил быть предупредительными. Номер был удобным и безупречно чистым. Был Wi-Fi и хорошо снабженная кухня, так подготовка еды была легкой. Все говорили на английском языке и были супер доброжелательными. Как кто-то путешествующий один было замечательно встретить много других людей и выйти с ними. Это было в прекрасном месте также - десять минут ходьбы от Эрмитажа и церквей. Я определенно рекомендовал бы говорить здесь и вернусь!
</p>
</div>
<div class="translation footer">
<form action="/RateUserReviewSlider" method="post" class="translationRating">
<input type="hidden" name="userId" value="7294956A347462C3855787C50DDC96CE"/>
<input type="hidden" name="reviewId" value="157921600"/>
<span class="rateLabel">Оценить этот перевод:</span> <span class="thanks">Благодарим Вас за оценку</span> <span class="translationRatingForm">
<label>
<span class="rateChoiceLabel">Плохой</span> <input type="radio" name="translateRating" class="translateChoice" value="1" onclick="return ta.call('ta.servlet.Reviews.rateMTReview',event);"/>
<img src="http://c1.tacdn.com/img2/icons/left_arrow.gif" class="ratingArrow"/>
</label>
<input type="radio" name="translateRating" class="translateChoice" value="3" onclick="return ta.call('ta.servlet.Reviews.rateMTReview',event);"/>
<label>
<img src="http://c1.tacdn.com/img2/icons/right_arrow.gif" class="ratingArrow"/>
<input type="radio" name="translateRating" class="translateChoice" value="5" onclick="return ta.call('ta.servlet.Reviews.rateMTReview',event);"/>
<span class="rateChoiceLabel">Хороший</span> </label>
</span>
</form>
</div>
<div class="rating-list">
<div class="recommend">
<span class="recommend-titleInline noRatings">Пребывание в апреле 2013, тип поездки: поездка в одиночку</span>
</div>
</div>
<div class="expanded lessLink">
<span class="taLnk collapse ">Менее</span><img class="textArrow_more sprite-arrow_dropdown_blu_up" src="http://c1.tacdn.com/img2/x.gif" alt=""/>
</div>
<div class="reportProblem"> <span id="ReportIAP_157921600" class="problem collapsed taLnk" onclick="ta.call('ta.overlays.Factory.iapFlyout', event, this, {voteContentType:'USERREVIEW', contentId: '157921600'})">Возникли проблемы с этим отзывом?</span>
</div>
<div class="askQuestion">
</div>
<div class="note">
Этот отзыв является субъективным мнением пользователя TripAdvisor, а не компании TripAdvisor LLC. <br/>
Первоначально предоставлено на www.tripadvisor.co.uk на: английский <a rel="nofollow" href="/ShowOneUserReview-g298507-d2210614-r157921600-Apple_Hostel-St_Petersburg_Northwestern_District.html" class="js_popReview">Просмотреть оригинал</a> </div>
</div>
</div>
</div>
<div id="expanded_review_150934078">
<a name="UR150934078"></a>
<div id="UR150934078" class=" extended provider0  ">
<div class="col1of2">
<div class="member_info">
<div id="UID_3B77F16DECE3734269E2AEA20700F59E-SRC_150934078" class="memberOverlayLink" onmouseover="ta.call('ta.overlays.Factory.memberOverlay', event, this, 's3 dg rgba_gry update2012');">
<div class="avatar profile_3B77F16DECE3734269E2AEA20700F59E ">
<span class="taLnk" onclick=>
<img src="http://media-cdn.tripadvisor.com/media/photo-l/03/23/c3/16/facebook-avatar.jpg" class="avatar potentialFacebookAvatar avatarGUID:3B77F16DECE3734269E2AEA20700F59E" width="74" height="74"/>
</span>
</div>
<div class="username mo">
<span class="expand_inline scrname hvrIE6 mbrName_3B77F16DECE3734269E2AEA20700F59E">Ryankirke</span>
</div>
</div>
<div class="location">
Перт, Австралия
</div>
</div>
<div class="memberBadging">
<div id="UID_3B77F16DECE3734269E2AEA20700F59E-CONT" class="totalReviewBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15984'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -25, -50);">
<span class="badgeText">1 отзыв</span>
</div>
</div>
</div>
<div class="col2of2">
<div class="quote"><a href="/ShowUserReviews-g298507-d2210614-r150934078-Apple_Hostel-St_Petersburg_Northwestern_District.html#CHECK_RATES_CONT" onclick="setPID()" id="r150934078">&#x201c;Хостел Best Hostel! Сделанное наше путешествие в Санкт-Петербурге.&#x201d;</a></div>
<div class="rating reviewItemInline">
<span class="rate rate_s s50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
<span class="ratingDate">Отзыв от 29 января 2013
</span>
<a class="viaMobile sprite-greenPhone" href="/apps" target="_blank" onclick="ta.util.cookie.setPIDCookie(24687)">через мобильное устройство</a>
</div>
<div id="helpfulq150934078_expanded" class="helpful">
<span class="isHelpful"><strong>Был ли этот отзыв полезным?</strong></span>
<span class="button_2011_grn">
<span class="yes tgt_helpfulq150934078 sprite-gradient1x32_grn gradient" onmouseover="this.style.cursor='pointer';" onclick="ta.util.cookie.setPIDCookie(5034); ta.call('ta.servlet.Reviews.helpfulVoteHandlerOb', event, this, 'LeJIVqd4EVIpECri1GII26mbqgqguuuxizSxiEpqgqWQQoqnQQeVsSVuqHyXAvoKkqHMXXUK3UdqHxfqHb22cVQQoqnQQ5itIVcqHhIQQoqnQQwVIVEtHpEyQQoqnQQZiEIGuVtIVECQQoqnQQxMStIESnIxiGIac6XoXmqoTpcUoKAmdKkv0tEn1UoKAmdKkv0zH1XAvoKk0pSM1m7kkqnU3xMzsfzsmkmdX3AzsXbzsbXKkKKqnoAzs0EJIVqiJcpV1U');">Да</span> </span>
</div>
<div class="clearFix"></div>
<div class="translation" id="mtreview_150934078">
<div class="translationIntro">
<span class="">Это автоматический перевод отзыва c английского</span>
<span class="tooltip taLnk" onmouseover="ta.call('ta.overlays.Factory.relBelowH', event, this); this.onmouseover=null">
Что это? <div class="overlayContents">
<div class="help">Чтобы предоставить Вам советы от максимального количества путешественников, этот отзыв был автоматически переведен на русский язык. Возможно, он не полностью передает суть оригинального отзыва. Надеемся, это поможет Вам спланировать поездку.</div> </div>
</span>
</div>
<span class="translatedBy noimage">
Перевод: PROMT
</span>
<span class="formLabel">Показать автоматические переводы</span>
<form action="/SetTranslationOption" class="translationOptionForm" method="post">
<input type="hidden" name="returnTo" value="http%3A__2F____2F__www__2E__tripadvisor__2E__ru__2F__ExpandedUserReviews%23mtreview_150934078"/>
<label>Да <input type="radio" name="translateAuto" value="true" class="submitOnClick" checked onclick="return ta.call('ta.servlet.Reviews.mtSubmitOnClick',event);"/>
</label>
<label>Нет <input type="radio" name="translateAuto" value="false" class="submitOnClick" onclick="return ta.call('ta.servlet.Reviews.mtSubmitOnClick',event);"/>
</label>
</form>
</div>
<div class="entry">
<p>
Хостел был такой забавой. Весь персонал был супер предупредительным и доброжелательным, они знали много о городе и всегда знали, что пошли места для нас.Сам хостел был чистым и хорошим, и было много номера в нашей спальне.Лучший бит был то, как удобен и дома меня и моих друзей, которых чувствуют там. Если вы должны останавливаться в хостеле в Санкт-Петербурге, не смотрят больше нигде.
</p>
</div>
<div class="translation footer">
<form action="/RateUserReviewSlider" method="post" class="translationRating">
<input type="hidden" name="userId" value="3B77F16DECE3734269E2AEA20700F59E"/>
<input type="hidden" name="reviewId" value="150934078"/>
<span class="rateLabel">Оценить этот перевод:</span> <span class="thanks">Благодарим Вас за оценку</span> <span class="translationRatingForm">
<label>
<span class="rateChoiceLabel">Плохой</span> <input type="radio" name="translateRating" class="translateChoice" value="1" onclick="return ta.call('ta.servlet.Reviews.rateMTReview',event);"/>
<img src="http://c1.tacdn.com/img2/icons/left_arrow.gif" class="ratingArrow"/>
</label>
<input type="radio" name="translateRating" class="translateChoice" value="3" onclick="return ta.call('ta.servlet.Reviews.rateMTReview',event);"/>
<label>
<img src="http://c1.tacdn.com/img2/icons/right_arrow.gif" class="ratingArrow"/>
<input type="radio" name="translateRating" class="translateChoice" value="5" onclick="return ta.call('ta.servlet.Reviews.rateMTReview',event);"/>
<span class="rateChoiceLabel">Хороший</span> </label>
</span>
</form>
</div>
<div class="rating-list">
<div class="recommend">
<span class="recommend-titleInline noRatings">Пребывание в январе 2013, тип поездки: поездка с друзьями</span>
</div>
</div>
<div class="expanded lessLink">
<span class="taLnk collapse ">Менее</span><img class="textArrow_more sprite-arrow_dropdown_blu_up" src="http://c1.tacdn.com/img2/x.gif" alt=""/>
</div>
<div class="reportProblem"> <span id="ReportIAP_150934078" class="problem collapsed taLnk" onclick="ta.call('ta.overlays.Factory.iapFlyout', event, this, {voteContentType:'USERREVIEW', contentId: '150934078'})">Возникли проблемы с этим отзывом?</span>
</div>
<div class="askQuestion">
</div>
<div class="note">
Этот отзыв является субъективным мнением пользователя TripAdvisor, а не компании TripAdvisor LLC. <br/>
Первоначально предоставлено на www.tripadvisor.com.au на: английский <a rel="nofollow" href="/ShowOneUserReview-g298507-d2210614-r150934078-Apple_Hostel-St_Petersburg_Northwestern_District.html" class="js_popReview">Просмотреть оригинал</a> </div>
</div>
</div>
</div>
<div id="expanded_review_147812731">
<a name="UR147812731"></a>
<div id="UR147812731" class=" extended provider0  ">
<div class="col1of2">
<div class="member_info">
<div id="UID_DF240A54C1140C45E1EC279EF19F32F6-SRC_147812731" class="memberOverlayLink" onmouseover="ta.call('ta.overlays.Factory.memberOverlay', event, this, 's3 dg rgba_gry update2012');">
<div class="avatar profile_DF240A54C1140C45E1EC279EF19F32F6 ">
<span class="taLnk" onclick=>
<img src="http://media-cdn.tripadvisor.com/media/photo-t/01/2e/70/9e/avatar069.jpg" class="avatar potentialFacebookAvatar avatarGUID:DF240A54C1140C45E1EC279EF19F32F6" width="74" height="74"/>
</span>
</div>
<div class="username mo">
<span class="expand_inline scrname hvrIE6 mbrName_DF240A54C1140C45E1EC279EF19F32F6">Jennifer P</span>
</div>
</div>
<div class="location">
Bozeman, Монтана
</div>
</div>
<div class="memberBadging">
<div id="UID_DF240A54C1140C45E1EC279EF19F32F6-CONT" class="totalReviewBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15984'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -10, -50);">
<div class="reviewerTitle">Критик</div>
<img src="http://c1.tacdn.com/img2/badges/star2.gif" alt="10 отзывов" class="icon" width="25" height="24">
<span class="badgeText">10 отзывов</span>
<div class="contributionReviewBadge">
<img src="http://c1.tacdn.com/img2/badges/hotel_review_1.gif" alt="" class="icon" width="25" height="24">
<span class="badgeText">7 отзывов об отелях</span>
</div> </div>
<div class="passportStampsBadge badge" onclick="ta.call('ta.overlays.Factory.memberPassportStampOverlay', event, this,
       { actionRecord: 'Cities_Badge_Clicked', memberId: 'DF240A54C1140C45E1EC279EF19F32F6', screenName: 'Jennifer P', geos: [187147, 662364, 274707, 665310, 190454, 60763, 298507, 298484, 187309], geo: '298507' })">
<img src="http://c1.tacdn.com/img2/badges/passport.gif" alt="Отзывы в 9 городах" class="icon" width="25" height="24">
<span class="badgeText">Отзывы в 9 городах</span> </div>
<div id="UID_DF240A54C1140C45E1EC279EF19F32F6-HV" class="helpfulVotesBadge badge no_cpu" onclick="ta.util.cookie.setPIDCookie('15983'); ta.call('ta.overlays.Factory.memberOverlayWOffset', event, this, 's3 dg rgba_gry update2012', -22, -50);">
<img src="http://c1.tacdn.com/img2/badges/ribbon.gif" alt="5 благодарностей" class="icon" width="25" height="24">
<span class="badgeText">5 благодарностей</span>
</div>
</div>
</div>
<div class="col2of2">
<div class="quote"><a href="/ShowUserReviews-g298507-d2210614-r147812731-Apple_Hostel-St_Petersburg_Northwestern_District.html#CHECK_RATES_CONT" onclick="setPID()" id="r147812731">&#x201c;приятный отдых&#x201d;</a></div>
<div class="rating reviewItemInline">
<span class="rate rate_s s40">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="4 из 5 звезд" content="4.0"/>
</span>
<span class="ratingDate">Отзыв от 20 декабря 2012
</span>
</div>
<div id="helpfulq147812731_expanded" class="helpful">
<span class="isHelpful"><strong>Был ли этот отзыв полезным?</strong></span>
<span class="button_2011_grn">
<span class="yes tgt_helpfulq147812731 sprite-gradient1x32_grn gradient" onmouseover="this.style.cursor='pointer';" onclick="ta.util.cookie.setPIDCookie(5034); ta.call('ta.servlet.Reviews.helpfulVoteHandlerOb', event, this, 'LeJIVqd4EVIpECri1GII26mbqgqguuuxizSxiEpqgqWQQoqnQQeVsSVuqHyXAvoKkqHMXXUK3UdqHxfqHb22cVQQoqnQQ5itIVcqHhIQQoqnQQwVIVEtHpEyQQoqnQQZiEIGuVtIVECQQoqnQQxMStIESnIxiGIac6XoXmqoTpcUdkvUXkmU0tEn1UdkvUXkmU0zH1XAvoKk0pSM1xMqnXdKbodfUUdKfdozsUzsfXkAzsqnUAqnmXqn30EJIVqiJcpV1U');">Да</span> </span>
</div>
<div class="clearFix"></div>
<div class="translation" id="mtreview_147812731">
<div class="translationIntro">
<span class="">Это автоматический перевод отзыва c английского</span>
<span class="tooltip taLnk" onmouseover="ta.call('ta.overlays.Factory.relBelowH', event, this); this.onmouseover=null">
Что это? <div class="overlayContents">
<div class="help">Чтобы предоставить Вам советы от максимального количества путешественников, этот отзыв был автоматически переведен на русский язык. Возможно, он не полностью передает суть оригинального отзыва. Надеемся, это поможет Вам спланировать поездку.</div> </div>
</span>
</div>
<span class="translatedBy noimage">
Перевод: PROMT
</span>
<span class="formLabel">Показать автоматические переводы</span>
<form action="/SetTranslationOption" class="translationOptionForm" method="post">
<input type="hidden" name="returnTo" value="http%3A__2F____2F__www__2E__tripadvisor__2E__ru__2F__ExpandedUserReviews%23mtreview_147812731"/>
<label>Да <input type="radio" name="translateAuto" value="true" class="submitOnClick" checked onclick="return ta.call('ta.servlet.Reviews.mtSubmitOnClick',event);"/>
</label>
<label>Нет <input type="radio" name="translateAuto" value="false" class="submitOnClick" onclick="return ta.call('ta.servlet.Reviews.mtSubmitOnClick',event);"/>
</label>
</form>
</div>
<div class="entry">
<p>
Хостел опрятный и чистый со всеми ожидаемыми удобствами, включая свободную прачечную! Кровати не были супер удобными, как бы то ни было. Хостел находится в отличном месте, и Оксана и Трина действительно хорошие и предупредительные.
</p>
</div>
<div class="translation footer">
<form action="/RateUserReviewSlider" method="post" class="translationRating">
<input type="hidden" name="userId" value="DF240A54C1140C45E1EC279EF19F32F6"/>
<input type="hidden" name="reviewId" value="147812731"/>
<span class="rateLabel">Оценить этот перевод:</span> <span class="thanks">Благодарим Вас за оценку</span> <span class="translationRatingForm">
<label>
<span class="rateChoiceLabel">Плохой</span> <input type="radio" name="translateRating" class="translateChoice" value="1" onclick="return ta.call('ta.servlet.Reviews.rateMTReview',event);"/>
<img src="http://c1.tacdn.com/img2/icons/left_arrow.gif" class="ratingArrow"/>
</label>
<input type="radio" name="translateRating" class="translateChoice" value="3" onclick="return ta.call('ta.servlet.Reviews.rateMTReview',event);"/>
<label>
<img src="http://c1.tacdn.com/img2/icons/right_arrow.gif" class="ratingArrow"/>
<input type="radio" name="translateRating" class="translateChoice" value="5" onclick="return ta.call('ta.servlet.Reviews.rateMTReview',event);"/>
<span class="rateChoiceLabel">Хороший</span> </label>
</span>
</form>
</div>
<div class="rating-list">
<ul class="recommend">
<li>
<span class="recommend-titleInline">Пребывание в декабре 2012, тип поездки: поездка вдвоём</span>
<ul class="recommend-column first">
<li class="recommend-answer">
<span class="rate rate_ss ss40">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="4 из 5 звезд" content="4.0"/>
</span>
Цена/качество</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Расположение</li>
<li class="recommend-answer">
<span class="rate rate_ss ss40">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="4 из 5 звезд" content="4.0"/>
</span>
Качество сна</li>
</ul>
<ul class="recommend-column">
<li class="recommend-answer">
<span class="rate rate_ss ss40">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="4 из 5 звезд" content="4.0"/>
</span>
Номера</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Чистота</li>
<li class="recommend-answer">
<span class="rate rate_ss ss50">
<img class="sprite-ratings" src="http://c1.tacdn.com/img2/x.gif" alt="5 из 5 звезд" content="5.0"/>
</span>
Обслуживание</li>
</ul>
</li>
</ul>
</div>
<div class="reportProblem"> <span id="ReportIAP_147812731" class="problem collapsed taLnk" onclick="ta.call('ta.overlays.Factory.iapFlyout', event, this, {voteContentType:'USERREVIEW', contentId: '147812731'})">Возникли проблемы с этим отзывом?</span>
</div>
<div class="askQuestion">
</div>
<div class="note">
Этот отзыв является субъективным мнением пользователя TripAdvisor, а не компании TripAdvisor LLC. <br/>
Первоначально предоставлено на www.tripadvisor.com на: английский <a rel="nofollow" href="/ShowOneUserReview-g298507-d2210614-r147812731-Apple_Hostel-St_Petersburg_Northwestern_District.html" class="js_popReview">Просмотреть оригинал</a> </div>
</div>
</div>
</div>
