<?php
include 'check.php';
if(isset($_POST['garah'])){
    session_destroy();
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Document</title>

	<link rel="stylesheet" href="admin.css">
	<script src="main.js" defer></script>

</head>
<body>

	<div class="wrapper">
		<div class="content">

			<header class="main-header">
				<div class="layers">
					<div class="layer__header">
						<div class="layers__caption">Welcome to</div>
						<div class="layers__title">Admin's Website</div>
					</div>
					<div class="layer layers__base" style="background-image: url(img/layer-base.png);"></div>
					<div class="layer layers__middle" style="background-image: url(img/layer-middle.png);"></div>
					<div class="layer layers__front" style="background-image: url(img/layer-front.png);"></div>
				</div>
			</header>
            <header>
                <ul class="navlist">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="index.html">Log out</a></li>
                </ul>
            </header>
		
			<article class="main-article" style="background-image: url(img/dungeon.jpg);">
				<div class="main-article__content">
					<h2 class="main-article__header">СЭТГЭЛД ТАНЬ ЗОРИУЛАН БИЧИВ</h2>
					<p class="main-article__paragraph">
                    Сайн байна уу? Хүндэт хэнээ~! <br></br>
                    Энэ захидлыг хэзээ нэгэн цагт хэн нэгэнд гомдсон, шантарсан үедээ уншаарай.
                    Чамд юу яг юу тохиож, чамайг одоо яг юу ганцаардуулж, хүний халуун дулаанаас хол санагдах болсоныг би сайн мэдэхгүй ээ.
                    Үүрэн телефоны мессеж шиг хүн бүрт “зүгээр дээ” гэж бичнэ гэдэг нэгэн төрлийн худал санагдаж байж мэднэ. Тийм, үнээн. 
                    Энэ захидал худлаа, учир нь танд илүү “бодитой, дулаахан” зүйлс хэрэгтэй. Бодол, мэдрэмжийг, үгсийг нууж болдог.
                    Гэвч нулимсыг, уур хилэнг зангиртал дарж удаан явах боломжгүй. Энэ бол хүний мэдрэмж, сэтгэл хөдлөл. Миний бас чиний дотор байгаа олон олон мэдрэмжүүд.<br></br>
                    Заримдаа надад олны дунд ганцаардаж, нөхдийн дунд эргэлзээ төрж, хайрлая гэсэн нэгнээс зугтах үе бий. 
                    Дотор минь орших энэ айдсыг би илчилж гаргадаггүй мөртлөө өөр нэгнээс олж харах хялбархан байдаг. 
                    Заримдаа хүмүүс надад толь юм шиг санагддаг. Тэвэрмээр санагдахдаа өөрийгөө тэврүүлж, хайрламаар санагдахаа өөрийгөө хайрлуулж, 
                    үзэн ядахдаа өөртөө бас дургүй хүрсэн байдаг. Заримдаа би үхчихвэл хялбархан санагддаг. 
                    Тэгвэл энэ ойлгомжгүй, хүйтэн хөндий орчлонгоос илүү дулаахан байх юм шиг бодол төрнө. Шантраад би шалан дээр суудаг. 
                    Шантраад би шалан дээрээ хэвтдэг. Тэгээд зүрхнийхээ цохилтыг чагнадаг. Энд миний зүрх бүдэгхэн бас бүлээнээр цохилож байдаг. 
                    Цээжээ гаран дээрээ тавиад энэ бүлээнийг мэдрэхэд надад цаг, мөнгө шаардлагагүй. Заримдаа миний хайсан зүйлс зөвхөн миний дотор байдаг. 
                    Заримдаа би өөрөө шаналал, заримдаа би өөрөө гутрал, заримдаа би өөрөө хайр, заримдаа би өөрөө ганцаардал. Надад ганц хуваалцах л хэрэг болдог… 
                    Надад ганцхан би өөрийгөө ганцаараа биш гэдгээ мэдрэх хэрэгтэй байдаг.. Үүнийг минь шүүмжлэлгүй сонсох хүнээр дутаж орхидог. 
                    Учир нь би өөрийгөө сонссоор заримдаа үнэхээр залхдаг. Иймд л “хүн хүнээрээ дутдаг” гэдэг үгэнд би итгэдэг<br></br>
                    Хэнээ! Сайн хүн байх гэж тэвчиж, бусдад таалагдах гэж дүр эсгэж, таашаалд нь нийцэх гэж дургүйгээ хийж, их мөнгө олохын төлөө чардайж байгаа юу?
                    Ямар асуудал дунд, юуг туулж явааг чинь би таах аргагүй. Гэхдээ хоолоо сэтгэл амар идэж, шөнө унтахдаа дулаахан унтаж байвал л арга нь олдоноо. 
                    Яагаад ч юм чиний хэдэн настай байх, ямар хүйстэй байх, хэнтэй хамт байхаас үл хамаарч ганцаардах, шантрах мэдрэмж төрж байж болно. 
                    Гурван хоногийн өмнө би гэрээслэл бичиж үзсэн гэвэл чи итгэх үү? Гурван пивоны дараа л даа. Гэхдээ үхэхийг хүсээгүй учраас мэдрэмжээ бичээд хөнжилдөө орсон. 
                    Өглөө ахин нар мандсан, өнөөх бичгээ уншсан чинь “баярлалаа, хайртай шүү, ахиад баярлалаа” гэж бичсэн байсан.<br></br>
                    Зүгээр л бид заримдаа хүчтэй хүн байх гэж дэндүү удаан тэвчдэг ч юм шиг. Нурж унахдаа хэр удаан тэвчсэнээс хамаарч талаар нэг тарчихдаг ч юм шиг. 
                    Уйлж, уурлаж чадахаа больж хүйтэн хөшүүн болон хувирдаг ч юм шиг. Уйтгар гунигтаа автаж, хайрлаж бас хайрлуулахаас зугтаадаг ч юм шиг. 
                    Өгөөд л байхад аваад л байдаг хайр биш, өгсөн болохоор л нь л эргүүлээд өгдөг хайр биш, цавын цаанаа бодитой, тустай, дулаахан хайраар дутаж эхлэх нь буруу биш ээ. 
                    Гуниг гутрал бол утга зохиол биш, шүлэг биш, онгод биш — хүний мэдрэмж. Зөвхөн нэг хэсэг нь. Гуниг бас гутрал бол дохио тэмдэг. 
                    Хуваалцахыг хүссэн эрэл хайгуул ч байж магадгүй ээ. <br></br>
                    Хэнээ! Ганцаараа юм шиг санагдаад хачин хүйтэн байвал нартай өдөр гадаа гарч суугаарай. Мододыг ажаарай. Тэд үнэ төлбөргүй. 
                    Чи мөнгөгүй байсан ч болно. Тэд чамаас хариу нэхэхгүй. Нээрээ, модыг очоод тэвэрбэл тэр цаашаа гэж түлхэхгүй. Тогтуунаар чамд дулаанаа мэдрүүлнэ. 
                    Тайвнаар чиний амьд, халуун гэдгийг чинь сануулна. <br></br>
                    Хэнээ! Хуваалцаарай, гунигаа, гутралаа, хайраа, итгэлээ. Гэхдээ бас өөртөө үлдээгээрэй. Хэн ч гэж чамайг хайрцганд хиймээргүй байгаа учраас хэрэглэж нэрийг тань асуусангүй ээ. <br></br>
                    Сайн сайхныг хүсье!
                    Сайхан амраарай.

                    2022.03.04


                    </p>
                </div>
			</article>

		</div>
	</div>

</body>
</html>