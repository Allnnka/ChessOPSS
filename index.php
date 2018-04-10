<!DOCTYPE html>
<html lang="pl">

<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	<meta charset="utf-8" />
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1" />
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto+Slab" rel="stylesheet">
	<link rel="stylesheet" href="styles/style.css" />
	<title>Strona główna</title>
</head>

<body>
	<div id="content">
		<header>
			<?php
					include 'modules/header.php';
			?>
				<nav id="topnav">

					<?php
					include 'modules/menu.php';
				?>
				</nav>
		</header>
		<main>
			<div id="container">
				<article>
					<header>
						<h1 class="headerText"> Zasay gry w szachy na 4 osoby </h1>
					</header>
					<hr/>

					<img class="chessImage" src="img/chess.png" />
					<ul class="rulesList">

						<li>Po zgłoszeniach gracze wykonują jeden ruch, zgodnie z ruchem wskazówek zegara(czyli najpierw białe, potem żółte, czarne
							i na końcu niebieskie).
							<strong>Czas na ruch wynosi 12 godzin od ruchu poprzedniego(nie licząc godzin 23-8), co znaczy że jak jeden gracz ruszy się
								np. o godzinie 8:00 to drugi musi się ruszyć do 20:00,a jak ruszy się o 20:00 następny rusza się do 17:00 następnego
								dnia i.t.d.</strong>
						</li>

						<li>
							<strong>Ruch zapisujemy zapisując pole z którego ruszamy</strong> - zgodnie z literkami zaznaczonymi na zdjęciu niżej (najpierw
							litera kolumny - pionowa, potem pozioma - wiersza) np. pole AB to kolumna A wiersz B; oraz pole na które wykonujemy
							ruch np. Ruch z AA na AB. Ruchy specjalne zapisujemy zdaniami: np. Roszada krótka, Roszada długa, Promocja piona z
							pola ... na pole ... na Hetmana.</li>
						<li>Co rundę prowadzący, lub któryś z graczy wrzuca aktualną sytuację na planszy.</li>
						<li>Celem gry jest doprowadzenie do sytuacji, gdy król przeciwnika nie może wykonać ruchu w żadną stronę a w miejscu obecnym
							leży na drodze bicia dowolnej bierki przeciwnika. Pat następuje w sytuacji, gdy król nie jest szachowany, ale ten
							gracz nie jest wstanie wykonać żadnego ruchu żadną bierką.</li>
						<li>
							<strong>1 miejsce zajmuje gracz, który ostatni został na planszy; 2 miejsce gracz przez niego pokonany; 3,4 miejsce gracze
								kolejni w kolejności takiej w jakiej mieli szacha mata, czyli np. Gracz A ma szacha mata najwcześniej - ma 4 miejsce;
								Gracz B ma pata później niż Gracz A - jest na 3 miejscu; Gracz D doprowadza do szacha mata Gracza C - Gracz D jest
								1, a Gracz C 2.</strong>
						</li>
						<li>Na zdjęciu wyżej, bierki od lewego dolnego rogu w kolorze białym nazywają się Wieża, Skoczek, Goniec, Hetman, Król,
							Goniec, Skoczek, Wieża; W górnej linii jest 8 pionów.</li>
						<li>Poruszanie się bierek - wyżej wymienione</li>

						Każda bierka porusza się na sobie właściwy sposób. Ruchy wykonuje się na wolne pola, wyjąwszy pola zajęte przez bierki przeciwnika.
						Z wyjątkiem skoczków bierki nie mogą przeskakiwać innych. Bicie bierki przeciwnika to ruch bierki na pole, na której
						stoi bierka przeciwnika (jedynym wyjątkiem jest bicie w przelocie o tym później), wówczas bierka atakująca zajmuje
						miejsce bierki zbijanej, która jest zdejmowana z szachownicy i nie bierze udziału w dalszej grze. Król może być szachowany,
						tzn. może być zagrożony zbiciem, lecz nie może być zbity - po szachu macie wszystkie bierki są usuwane z planszy.

						<li>
							<strong>Król</strong> może ruszać się o jedno pole w poziomie, pionie lub na ukos. Najwyżej raz w grze każdy z króli może
							wykonać specjalny ruch zwany roszadą - o tym niżej.</li>

						<li>
							<strong>Wieża</strong> porusza się o dowolną liczbę wolnych pól w poziomie i pionie; porusza się ona również podczas roszady.</li>

						<li>
							<strong>Goniec</strong> może ruszać się o dowolną liczbę wolnych pól po przekątnych.</li>

						<li>
							<strong>Hetman</strong> porusza się o dowolną liczbę wolnych pól w poziomie, pionie i na ukos (łączy w ten sposób w sobie
							ruchy wieży i gońca).</li>

						<li>
							<strong>Skoczek</strong> rusza się na najbliższe pole nie znajdujące się w tym samym rzędzie, kolumnie lub przekątnej; innymi
							słowy poruszają się one o dwa pola na kształt wieży, a następnie jedno pole prostopadle do tego kierunku. Ruch skoczka
							nie jest blokowany przez inne bierki, tzn. „skacze” on na nowe pole. Ruchy skoczka opisuje się także porównując je
							do litery „L” lub cyfry „7” (lub dowolnej odbitej, w poziomie i pionie, ich postaci), przy czym wykonuje on dwa kroki
							w danym kierunku, 90° zwrot w jednym z kierunków i krok w nowo wybranych kierunku.</li>

						<li>
							<strong>Pion</strong> ma najbardziej rozbudowane zasady poruszania się: Pion może poruszyć się o jedno pole naprzód, o ile
							nie jest ono zajęte. Jeżeli nie wykonano danym pionem posunięcia, to w pierwszym ruchu ma on możliwość wykonania ruchu
							o dwa pola naprzód, o ile żadne z tych pól nie jest zajęte. Pion nie może ruszać się do tyłu. Piony są jedynymi bierkami,
							które biją inaczej niż się poruszają. Mogą one zbić wrogą bierkę, jeśli znajduje się ona na jednym z dwóch pól sąsiadujących
							w poziomie z polem przed nimi (tzn. z pól na ukos przed nimi), lecz nie mogą się tam ruszyć, jeśli pola te są wolne.</li>
						<li>Ruchy specjalne: Roszada składa się z wykonania posunięcia króla o dwa pola w stronę wieży, a następnie umieszczeniu
							wieży po drugiej stronie króla na polu z nim sąsiadującym. Roszada jest możliwa wyłącznie wtedy, gdy spełnione są
							wszystkie poniższe warunki: 1)król jak i wieża biorąca udział w roszadzie nie wykonały jeszcze posunięcia; 2)między
							królem a wieżą nie ma innych bierek; 3)król nie może być szachowany, nie może przechodzić ani zakończyć ruchu na polu
							atakowanym przez bierkę przeciwnika; 4)król oraz wieża muszą znajdować się w tym samym rzędzie Bicie w przelocie -
							jest to napisane z perspektywy szachów tradycyjnych(2 osobowych), ale na podobnej zasadzie działa także w czteroosobowych
							Jeśli gracz A wykona ruch pionem o dwa pola, zaś gracz B ma piona w piątym, patrząc z jego perspektywy, rzędzie i
							sąsiadującej kolumnie, to pion gracza B może zbić piona gracza A tak, jak gdyby wykonał on posunięcie o jedno pole.
							Bicie to można wykonać tylko w ruchu bezpośrednio po ruchu pionem o dwa pola. W przykładzie obok: jeśli biały pion
							wykona posunięcie z a2 na a4, to czarny pion na b4 może zbić go en passant (w przelocie) kończąc swe posunięcie na
							polu a3. Promocja piona Jeśli pion osiągnie rząd początkowy(pierwszy rząd - ten gdzie stoi wieża, skoczek, goniec
							i.t.d.) przeciwnika, to wówczas jest on promowany (zamieniany) na hetmana, wieżę, gońca lub skoczka tego samego koloru,
							przy czym wybór zależy od gracza (zwykle jest to hetman). Wybór nie ogranicza się do poprzednio zbitych bierek, stąd
							teoretycznie możliwe jest posiadanie przez gracza do dziewięciu hetmanów oraz co najwyżej dziesięciu wież, gońców
							lub skoczków (o ile tylko wszystkie piony będą promowane i żadna z figur danego rodzaju nie zostanie zbita). W przypadku
							braku potrzebnej bierki gracz powinien wezwać sędziego, aby ten ją dostarczył</li>
						<li>Dodatkowo w szachach czteroosobowych, gdy król jest szachowany - patrz niżej - ruch wykonuje gracz, którego król jest
							szachowany, po czym powraca się do normalnej kolejki - przykład gracz biały szachuje gracza czarnego, ale posunąć
							ma się gracz żółty, rusza się gracz czarny po czym dopiero gracz żółty i kolejni zgodnie z kolejką. Szach Jeżeli gracz
							wykona ruch, w którym grozi królowi przeciwnika zbiciem (niekoniecznie przez bierkę, którą poruszył), to mówi się,
							że król jest szachowany. Szachem nazywa się taką pozycję, w której jedna lub więcej bierek przeciwnika może teoretycznie
							zbić króla w kolejnym ruchu (choć król nigdy nie jest zbijany). Obowiązkiem gracza, którego król jest szachowany,
							jest wyeliminowanie w kolejnym ruchu zagrożenia zbiciem; gracz nie może pozostawić swojego króla szachowanym po zakończeniu
							swego posunięcia. Można to uczynić na kilka sposobów: 1)przesunąć króla na pole, na którym nie jest on zagrożony;
							2)zbić grożącą bierkę (również królem, jeśli nie sprawi to, że będzie on szachowany); 3)umieścić bierkę między królem
							a grożącą bierką; nie jest to możliwe w przypadku skoczka i piona lub gdy szachujące hetman, wieża albo goniec znajdują
							się na polu sąsiadującym z królem."</li>


					</ul>
					<hr/>
				</article>
			</div>
		</main>
	</div>
	<?php
		include 'modules/footer.php';
	?>
</body>

</html>