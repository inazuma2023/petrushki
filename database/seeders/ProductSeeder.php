<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name'          => 'Шампунь для кошек WONDER Lab 550мл',
                'brand_id'         => '3',
                'price'         => 489,
                'price_with_discount' => 366,
                'discount'       => 25,
                'article'       => '17894387291',
                'description'   => 'Гипоаллергенный и безопасный шампунь для кошек поддерживает красоту и здоровье длинношерстных и короткошерстных кошек. Средство предотвращает спутывание шерсти, облегчает расчесывание, эффективно, но бережно удаляет загрязнения и посторонние запахи. Шампунь для кошек гипоаллергенный, имеет нейтральный аромат и не раздражает вашего питомца во время купания. После мытья средство полностью смывается и не оставляет на шерсти посторонних запахов. Подходит для котят. Экошампунь создает плотную пену и экономично расходуется, не содержит отдушек, красителей и щелочного мыла. Шампунь очень быстро смывается, уменьшая время мытья кошки в 3 раза, сохраняя отличную моющую способность. ',
                'category_id'      => '1',
            ],
            [
                'name'          => 'Когтеточка для кошек домик БРИСИ бежевый',
                'brand_id'         => '4',
                'price'         => 7999,
                'price_with_discount' => 3199,
                'discount'       => 60,
                'article'       => '17894387293',
                'description'   => 'Высокая когтеточка, кошке комфортно точить когти в полный рост и вытянутся. Игровой Комплекс вмешает сразу несколько крупных кошек. Целых 2 точки опоры! Максимальная прочность и устойчивость. Множество мест для игр и отдыха, домик, лежак, шар, игрушка-дразнилка для кота. Съёмный чехол домика , можно снять или постирать. Плотная автоматическая намотка, с проклейкой, благодаря чему когтеточка невероятно прочная. Очень плотный и мягкий искусственный мех, кошке невероятно приятно лежать, в отличие от других дешевых материалов (каролина, рогожки, велюра и т.п)',
                'category_id'      => '1',
            ],
            [
                'name'          => 'Лежак для кошек Не один дома Колыбель снов',
                'brand_id'         => '5',
                'price'         => 3180,
                'price_with_discount' => 954,
                'discount'       => 70,
                'article'       => '17894387292',
                'description'   => 'Это высококачественный лежак для ваших любимых питомцев. Он изготовлен из прочных материалов, что обеспечивает хорошую износостойкость. Спальное место питомца легко почистить от грязи. Маленькому котенку будет уютно на диване с бортиками и на мягком матрасе. Мягкая подстилка коврик для котят - это идеальное место для отдыха и сна. Этот диванчик-кровать создан специально с мягкой подушкой. Почему бы не порадовать своего четвероногого друга новой кроваткой? На этой кошачьей кроватке Ваш пушистик будет чувствовать себя, как настоящий король. Маленький котенок или взрослый кот найдут здесь свое спальное место без проблем.',
                'category_id'      => '1',
            ],
            [
                'name'          => 'Миска для собак Stefan двойная с силиконовым основанием',
                'brand_id'         => '7',
                'price'         => 8273,
                'price_with_discount' => 2283,
                'discount'       => 72,
                'article'       => '82918238922',
                'description'   => 'Силиконовая миска для кормления животных - это уникальная конструкция, состоящая их двух стальных чаш с толстыми стенками, надежно закрепленных на съемной силиконовой подставке. Полностью безвредные, нетоксичные изделия не впитывают запахи и легко моются под краном с мыльным раствором. Двойная тарелка подходит также для чистки в посудомоечной машине. Собачья миска не займет много места, удачно впишется в Ваш интерьер и оставит чистым пол. Противоскользящая миска подходит для воды сухого корма и влажной еды. Достаточно глубокая емкость позволяет накормить собаку мелких и средних пород. Антискользящая миска имеет силикон овый поддон благодаря которому будет прочно находиться на одном месте, с такой задачей не смогут справится пластмассовые тарелочки. Больше не требуется держатель, который обычно используют под пластик, пища не будет вываливаться из посуды. Нескользящая миска подойдет для сабаки и щенков. Металлическая чаша более долговечна и в использовании, пластиковая мнее практична.',
                'category_id'      => '2',
            ],
            [
                'name'          => 'Клетка для грызунов Пижон 23х17х26см',
                'brand_id'         => '10',
                'price'         => 3503,
                'price_with_discount' => 1120,
                'discount'       => 68,
                'article'       => '68298374245',
                'description'   => 'Клетка для мелких животных с эмалированной решеткой – яркий, уютный, практичный и безопасный дом для Вашего питомца!Ключевые особенности:Компактная.Аксессуары в комплекте.Ручка на крыше для переноски.Легко чистить.Яркая и просторная клетка с прочным металлическим каркасом - то, что нужно любому грызуну. Она не занимает много места и отлично подходит для мелких домашних животных вроде крыс, мышей и хомяков.Кроме того, клетка оборудована специальным пластиковым наружным поддоном, облегчающим процесс уборки, а удобная ручка сверху максимально упрощает транспортировку изделия.',
                'category_id'      => '3',
            ],
            [
                'name'          => 'Шампунь для грызунов Шустрик дезодорирующий 100мл',
                'brand_id'         => '11',
                'price'         => 211,
                'price_with_discount' => 211,
                'discount'       => 0,
                'article'       => '68298374242',
                'description'   => 'Зоошампунь предназначен для регулярного ухода за кожно-волосяным покровом декоративных и карликовых кроликов, морских свинок, крыс, хомяков, сусликов, сурков, тушканчиков, белок, бурундуков и других грызунов. Шампунь активизирует рост шерсти, укрепляет волосяной стержень, усиливает защитные функции эпидермиса, удаляет неприятный запах и придает шерсти аромат трав.',
                'category_id'      => '3',
            ],
            [
                'name'          => 'Колесо Пижон для грызунов металлическое сетчатое 14см',
                'brand_id'         => '10',
                'price'         => 1548,
                'price_with_discount' => 557,
                'discount'       => 64,
                'article'       => '68298374244',
                'description'   => 'Все грызуны очень любопытны и подвижны. В природных условиях они способны пробежать несколько километров в поисках пропитания. К сожалению, в домашних условиях, владельцы редко выпускают грызунов на волю. Беговое колесо - это настоящий выход для мышей, крыс и хомяков, живущих в клетках.',
                'category_id'      => '3',
            ],
            [
                'name'          => 'Био-камень для грызунов Fiory Maisalt с солью в форме кукурузы 90г',
                'brand_id'         => '12',
                'price'         => 340,
                'price_with_discount' => 204,
                'discount'       => 40,
                'article'       => '68298374241',
                'description'   => 'FIORY био-камень для грызунов в форме кукурузы. Удобная форма био-камня позволит Вашему питомцу каждый день укреплять зубы и предотвращать их излишний рост. Кроме того, био-камень является сбалансированной минеральной добавкой для вашего грызуна.',
                'category_id'      => '3',
            ],
            [
                'name'          => 'Корм Tetra Min Crisps для всех видов рыб чипсы 12г',
                'brand_id'         => '13',
                'price'         => 134,
                'price_with_discount' => 127,
                'discount'       => 5,
                'article'       => '79287392842',
                'description'   => 'TetraMin Pro Crisps - gолноценный корм для любых видов тропических рыб. Благодаря низкотемпературной технологии изготовления ТетраМин Криспс очень питателен. С формулой Чистой и прозрачной воды. Запатентованная БиоАктив-формула поддерживает здоровую иммунную систему. Для понижения уровня загрязнения воды, и вследствие этого, уменьшения роста водорослей. Храните продукт в прохладном сухом месте вдали от прямых солнечных лучей.',
                'category_id'      => '4',
            ],
            [
                'name'          => 'Декор Пижон для аквариума Микроавтобус. 13х8х8см',
                'brand_id'         => '10',
                'price'         => 499,
                'price_with_discount' => 499,
                'discount'       => 0,
                'article'       => '79287392843',
                'description'   => 'Оформление аквариума – это не менее увлекательный процесс, нежели разведение обитателей домашнего мини-водоема. Интересно ведь не только наблюдать за подводной жизнью, но и собственноручно создавать декорации к ней. Будет ли это с обломками легендарного корабля, или может получиться резервуар в духе японского минимализма – решать вам.',
                'category_id'      => '4',
            ],
            [
                'name'          => 'Помпа аквариумная Пижон Sea Star HX-1480D',
                'brand_id'         => '10',
                'price'         => 3790,
                'price_with_discount' => 1364,
                'discount'       => 64,
                'article'       => '79287392844',
                'description'   => 'Помпа аквариумная Sea Star HX-1480D, 2800 л/ч, 35 Вт, высота подъема воды 2,2 м. Только качественные товары для вашего домашнего питомца.',
                'category_id'      => '4',
            ],
            [
                'name'          => 'Набор аквариумный AquaLighter Nano Marine Set 15л',
                'brand_id'         => '14',
                'price'         => 13231,
                'price_with_discount' => 10110,
                'discount'       => 24,
                'article'       => '79287392841',
                'description'   => 'Аквариумный набор NanoMarineset 15л Торговой марки AquaLighter–аквариумный набор для офиса и дома. Идеально подходит для содержаниямаленьких морских рыб, креветок и крабов, морских улиток, мягких и LPS кораллов, а также для оформления аквариума в стиле «псевдоморе». Прекрасное дополнение к интерьеру. С помощью NanoMarineSetлегко стать обладателем собственного маленького моря.',
                'category_id'      => '4',
            ],
            [
                'name'          => 'Автоматическая кормушка для рыб ZooWell Smart белая',
                'brand_id'         => '15',
                'price'         => 2594,
                'price_with_discount' => 2594,
                'discount'       => 0,
                'article'       => '79287392845',
                'description'   => 'Откройте для себя новый уровень ухода за обитателями аквариума. С нашей автоматической кормушкой ваши питомцы всегда будут сыты и довольны, а вы сможете наслаждаться красотой подводного мира без лишних хлопот. Интеллектуальный контроль: Крупный, четкий и яркий дисплей отображает все самое необходимое - текущее время, время кормления, режимы и заряд батареи. Вы всегда будете в курсе того, когда и сколько вкусняшек получают ваши черепахи, рыбки, улитки и лягушки. Дозатор для корма работает от 2 батареек типа АА 1.5V (входят в комплект). Надежность крепления кормушки для террариума позволят установить ее за считанные минуты.',
                'category_id'      => '4',
            ],
            [
                'name'          => 'Клетка для птиц Savic Camille 30 бежевая',
                'brand_id'         => '17',
                'price'         => 5947,
                'price_with_discount' => 2692,
                'discount'       => 55,
                'article'       => '28470294824',
                'description'   => 'Уютная и симпатичная клетка Savic Camille 30 премиум класса с оригинальным дизайном для мелких декоративных и певчих птиц. Глубокий пластиковый поддон с выдвижным лотком, маленькое расстояние между прутьями. Клетка для попугаев и канареек. Клетка имеет вертикальные и горизонтальные провода. В комплекте две кормушки, три пластиковые жердочки в форме веток.',
                'category_id'      => '5',
            ],
            [
                'name'          => 'Песок для птиц Vitakraft Vita Grit Nature 300г',
                'brand_id'         => '18',
                'price'         => 135,
                'price_with_discount' => 135,
                'discount'       => 0,
                'article'       => '28470294825',
                'description'   => 'Натуральный биопесок содержит качественный ракушечный известняк, обеспечивающий необходимыми минеральными веществами. Поддерживает здоровое пищеварение. У птицы всегда должен быть доступ к песку, чтобы предотвратить дефицит питания.',
                'category_id'      => '5',
            ],
            [
                'name'          => 'Лакомство для птиц Triol камень минеральный звездочка',
                'brand_id'         => '19',
                'price'         => 150,
                'price_with_discount' => 150,
                'discount'       => 0,
                'article'       => '28470294823',
                'description'   => 'Минеральный камень для всех видов декоративных птиц помогает естественному стачиванию клюва, корректирует соотношение кальция и фосфора в организме птицы, улучшает функционирование пищеварительной системы, а также способствует улучшению оперения во время линьки и укреплению костей.',
                'category_id'      => '5',
            ],
            [
                'name'          => 'Антигельминтик для кошек Elanco Мильбемакс 2 таблетки',
                'brand_id'         => '20',
                'price'         => 1259,
                'price_with_discount' => 936,
                'discount'       => 25,
                'article'       => '93823948362',
                'description'   => 'Мильбемакс, таблетки от глистов для кошек – препарат от компании Elanco, помогающий избавить вашего питомца от самых распространенных гельминтов – круглых и ленточных, а также препятствующий заражению опасными сердечными паразитами – дирофиляриями. Мильбемакс имеет маленький размер таблетки с удобной дозировкой по весу животного, его легко давать кошкам: таблетка со вкусом говядины и покрыта оболочкой для маскировки горького вкуса. Мильбемакс можно использовать для котят с 6-недельного возраста, беременных и кормящих кошек. Производится во Франции.',
                'category_id'      => '6',
            ],
            [
                'name'          => 'Антигельминтик для собак KRKA Милпразон 2 таблетки',
                'brand_id'         => '21',
                'price'         => 1008,
                'price_with_discount' => 749,
                'discount'       => 25,
                'article'       => '93823948364',
                'description'   => 'Милпразон - препарат, помогающий избавить вашего питомца от самого широкого спектра круглых и ленточных гельминтов — кишечных, легочных и глазных, а также предотвратить заражение смертельно опасными сердечными гельминтами – дирофиляриями, предающимися через укусы комаров. Активен против взрослых и личиночных форм паразитов. Для лечения и профилактики кишечных гельминтов применяется однократно.',
                'category_id'      => '6',
            ],
            [
                'name'          => 'Таблеткодаватель для кошек Favet 1 шт',
                'brand_id'         => '22',
                'price'         => 55,
                'price_with_discount' => 51,
                'discount'       => 6,
                'article'       => '93823948361',
                'description'   => 'Favet Вкусный таблеткодаватель для кошек, 1 шт. Вкусный таблеткодаватель – это мягкое лакомство, с помощью которого можно облегчить процесс дачи таблеток кошкам. Проще владельцу – вкуснее питомцу! Уникальная текстура придется по вкусу требовательным питомцам. Безопасен для животных, изготавливается из ингредиентов только высочайшего качества. Подходит для животных с особыми потребностями. Как использовать? Отломите кусочек лакомства и предложите его попробовать кошке, чтобы она привыкла его к вкусу и аромату. Положите необходимую таблетку в мягкое лакомство, полностью покрыв им таблетку. Дайте кошке лакомство со спрятанной внутри таблеткой.',
                'category_id'      => '6',
            ],
            [
                'name'          => 'Успокоительное для собак Астрафарм Экспресс Успокоин 6 таблеток',
                'brand_id'         => '23',
                'price'         => 609,
                'price_with_discount' => 517,
                'discount'       => 21,
                'article'       => '93823948365',
                'description'   => 'Успокоительное для собак средних и крупных пород Астрафарм Экспресс Успокоин 6 таблетки успокоительный препарат для быстрого и эффективного решения поведенческих проблем у собак в стрессовых ситуациях. Экспресс Успокоин уверенно решает поведенческие проблемы животных благодаря своему составу. В препарат входит действующее вещество тразодона сукцинат – оригинальная запатентованная разработка. Экспресс Успокоин таблетки назначают собакам для коррекции поведенческих реакций, снижения степени возбуждения при стрессах и фобиях, вызываемых разлукой с хозяином, фейерверком, посещением ветеринарных клиник и пребыванием в условиях стационара, громкими звуками и транспортировкой.',
                'category_id'      => '6',
            ],
            [
                'name'          => 'Добавка для щенков и собак Pro Plan Veterinary Diets Forti Flora',
                'brand_id'         => '24',
                'price'         => 3249,
                'price_with_discount' => 2717,
                'discount'       => 16,
                'article'       => '93823948363',
                'description'   => 'Общее физическое здоровье и своевременное развитие щенков и взрослых собак во многом зависят от того, насколько правильно работает их пищеварительная система. Если у питомцев нестабильный аппетит, они страдают от метеоризма, диареи или запоров — это может свидетельствовать о нарушении баланса микрофлоры кишечника. Для его восстановления необходима ветеринарная диета с использованием пищевых добавок. Специально для питомцев любого возраста с дисбактериозом наша команда квалифицированных ветеринарных специалистов и диетологов PURINA разработала кормовую добавку для собак PRO PLAN® VETERINARY DIETS FortiFlora® / Для поддержания баланса микрофлоры. Она эффективно справляется с нарушениями работы желудочно-кишечного тракта собак, которые были спровоцированы стрессом, перенесенными инфекциями, антибактериальной терапией, ослаблением иммунной системы и другими факторами.',
                'category_id'      => '6',
            ],
        ];

        $products_in_home = [
            [
                'name'          => 'Корм для волнистых попугаев RIO основной 1кг',
                'brand_id'         => '16',
                'price'         => 315,
                'price_with_discount' => 283,
                'discount'       => 10,
                'article'       => '28470294821',
                'description'   => 'Зерновая смесь для ежедневного кормления волнистых попугаев. Содержит редкие семена абиссинского нуга и другие любимые попугайчиками зерна и семена.',
                'category_id'      => '5',
                'inHome' => 1
            ],
            [
                'name'          => 'Наполнитель для кошек СиСиКэт силикагелевый 3.8л',
                'brand_id'         => '1',
                'price'         => 620,
                'price_with_discount' => 496,
                'discount'       => 20,
                'article'       => '17894387294',
                'description'   => 'Силикагелевый наполнитель СиСиКэт быстро впитывает влагу и нейтрализует запах, заботясь о чистоте и свежести в вашем доме. Силикагель эффективно поглощает влагу и справляется с запахом. Не прилипает к лапкам и шерсти, не разносится по квартире. Удобно поддерживать чистоту лотка. Экономичный расход. Рекомендации по применению: насыпать в лоток слоем от 3 см. Регулярно удаляйте твердые отходы и перемешивайте наполнитель. Замените наполнитель, когда кристаллы перестанут удерживать запах.',
                'category_id'      => '1',
                'inHome' => 1
            ],
            [
                'name'          => 'Корм сухой ROYAL CANIN Sterilised 2кг для стерилизованных кошек',
                'brand_id'         => '2',
                'price'         => 2362,
                'price_with_discount' => 2362,
                'discount'       => 0,
                'article'       => '17894387295',
                'description'   => 'Сухой корм суперпремиум класса с оптимально сбалансированным составом, который обеспечивает питомца необходимыми микроэлементами и энергией для активной жизни. В составе корма - только мясные ингредиенты высшего качества.После стерилизации у кошек уменьшаются энергетические потребности, корм помогает снизить риск появления избыточного веса благодаря умеренному содержанию жиров, при соблюдении рекомендуемых норм кормления.',
                'category_id'      => '1',
                'inHome' => 1
            ],
            [
                'name'          => 'Корм ROYAL CANIN для щенков средних пород 2-12 месяцев 3кг',
                'brand_id'         => '2',
                'price'         => 2292,
                'price_with_discount' => 2292,
                'discount'       => 0,
                'article'       => '82918238923',
                'description'   => 'Формула продукта ROYAL CANIN Medium Puppy разработана с учетом потребностей щенков средних пород (вес взрослой собаки 11-25 кг) и подходит для щенков в возрасте от 2 до 12 месяцев. Этот продукт также поддерживает формирование здоровой иммунной системы щенка за счет содержания питательных веществ с научно доказанной эффективностью, таких как витамины С и Е. Специально разработанный рацион обогащен полиненасыщенной жирной кислотой Омега-3 (ДГК), которая, как научно доказано, поддерживает развитие мозга щенка. Благодаря сочетанию пребиотиков (МОС) и легкоусвояемых белков, формула ROYAL CANIN Medium Puppy поддерживает баланс микрофлоры кишечника, способствуя здоровому пищеварению. Гранулы ROYAL CANIN Medium Puppy достаточно крупные, чтобы щенок не мог их быстро проглатывать, но не настолько, чтобы он совсем отказался от корма. Поддерживают здоровье полости рта за счет эффекта механической очистки зубов во время разгрызания.',
                'category_id'      => '2',
                'inHome' => 1
            ],
            [
                'name'          => 'Шампунь для собак и щенков Wonder Lab 550мл',
                'brand_id'         => '3',
                'price'         => 490,
                'price_with_discount' => 298,
                'discount'       => 39,
                'article'       => '82918238924',
                'description'   => 'Шампунь WONDER LAB подходит для собак любых пород и безопасен для щенков. Средство предотвращает спутывание шерсти и эффективно удаляет загрязнения после весёлых прогулок в любую погоду. Приятный аромат тропических фруктов не будет раздражать чувствительных питомцев и их хозяев. Экономичный расход и удобный дозатор. В составе экошампуня нет красителей и щелочного мыла. После мытья экошампунем, шерсть приобретает здоровый блеск и хорошо расчесывается. Средством можно мыть и лапы животного после прогулки. Шампунь не оставляет неприятных запахов на шерсти собаки, полностью смывается, что безопасно для животного при вылизывании после купания. Экошампунь WONDER LAB одобрен профессиональными грумерами.',
                'category_id'      => '2',
                'inHome' => 1
            ],
            
            [
                'name'          => 'Поводок Flexi рулетка New Comfort лента L 8м',
                'brand_id'         => '8',
                'price'         => 4580,
                'price_with_discount' => 2564,
                'discount'       => 43,
                'article'       => '82918238921',
                'description'   => 'Перед началом использования рулетки необходимо внимательно ознакомиться с инструкцией! Рулетка для собак flexi - это уникальный и функциональный аксессуар для прогулок с животными. Серия safari обладает наилучшим соотношением цена/качество. Рулетки Safari имеют оригинальный и неповторимый дизайн, что принесет вам еще большую радость от моментов, проведенных с любимцем. Этот поводок-рулетка обладает рядом преимуществ, которые делают его идеальным выбором для активных и энергичных питомцев. Рулетки flexi обладают рядом особенностей и преимуществ. Рулетка имеет эргономичную ручку. Благодаря комфортной и удобной ручке, вы сможете прогуливаться с собакой без усталости и боли в руке.',
                'category_id'      => '2',
                'inHome' => 1
            ],
            [
                'name'          => 'Корм для хомяков HappyJungle 900г',
                'brand_id'         => '9',
                'price'         => 349,
                'price_with_discount' => 296,
                'discount'       => 15,
                'article'       => '68298374243',
                'description'   => 'Happy Jungle – корм для хомяков.Сбалансированная смесь из зерна и зерновых гранул, овощей, фруктов и арахиса обеспечит животное всеми необходимыми питательными веществами. Злаки и бобовые - составляют основу рациона, обладают высокой питательной и энергетической ценностью.Фрукты и овощи - дополнение к основному рациону, насыщают организм витаминами и повышают иммунитет. Арахис - Источник белка и жирных кислот, минеральных веществ и витаминов. Прекрасный антиоксидант, замедляет старение организма.',
                'category_id'      => '3',
                'inHome' => 1
            ],
            [
                'name'          => 'Лакомство для попугаев Triol Original с медом и хитином 55г',
                'brand_id'         => '19',
                'price'         => 95,
                'price_with_discount' => 95,
                'discount'       => 0,
                'article'       => '28470294822',
                'description'   => 'Лакомство для волнистых попугаев с мёдом и хитином является дополнительным источником витаминов и минералов, необходимых для крепкого здоровья и жизненного тонуса вашего питомца. Каждая палочка содержит натуральные компоненты, изготовленные из отборного зерна с добавлением семян растений и овощей. Усиленное сцепление компонентов предотвращает рассыпание,  а пластиковый крючок позволяет удобно закрепить лакомство в клетке. Две палочки лакомства запаяны в полиэтиленовый пакет и уложены в картонную коробочку, обеспечивающие лучшую сохранность продукта.',
                'category_id'      => '5',
                'inHome' => 1
            ],
        ];

        DB::table('products')->insert($products); 
        DB::table('products')->insert($products_in_home); 
    }
}



