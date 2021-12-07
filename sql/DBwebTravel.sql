create database if not EXISTS `webtravel`;
use `webtravel`;

create table IF NOT EXISTS `categories`(
    `id_category` int not null  primary key AUTO_INCREMENT,
    `category_name` varchar(50),
    CONSTRAINT UC_categories UNIQUE ( `id_category`,`category_name`)
);
create table IF NOT EXISTS `tours`(
    `id_tour` int not null primary key AUTO_INCREMENT,
    `name_tour` varchar(255),
    `price` int CHECK (`price`>=1),
    `date_start` DATETIME,
    `date_end` DATETIME,
    `from_place` varchar(50),
    `description` TEXT,
    `people` int CHECK(`people`>=1),
    `remark` int CHECK(`remark`>=0 AND `remark`<=5),
    `img` TEXT,
    `id_cate` int,
    `sale` boolean,
    foreign key(`id_cate`) references `categories`(`id_category`)    
);

create table IF NOT EXISTS `accounts`(
    `id_acc` int not null  primary key AUTO_INCREMENT,
    `username` varchar(255),
    `email` varchar(255),
    `password` varchar(255),
    `lname` varchar(255),
    `fname` varchar(255),
    `phone` varchar(11),
    `address` varchar(255),
    `img` TEXT,
    `role` varchar(30)   
);



create TABLE IF NOT EXISTS `book_tour`(
    `id_order` int not null  primary key AUTO_INCREMENT,
    `id_acc` int,
    `id_tour` int,    
    `date_book` DATETIME,
    foreign key(`id_acc`) references `accounts`(`id_acc`),
    foreign key(`id_tour`) references `tours`(`id_tour`)
);

create TABLE IF NOT EXISTS `log_in`(
    `id_acc` int,
    foreign key(`id_acc`) references `accounts`(`id_acc`)
);

create TABLE IF NOT EXISTS `log_history`(
    `id_history` int not null  primary key AUTO_INCREMENT,
    `id_acc` int,
    `date_log` DATETIME
);
DELIMITER $$
CREATE TRIGGER if not EXISTS before_login_delete 
    BEFORE DELETE ON `log_in` 
    For each row
BEGIN
	INSERT INTO `log_history`
    SET `log_history`.`id_acc`=OLD.id_acc,
        `date_log`=now();
END$$
DELIMITER ;

INSERT INTO `accounts`(`id_acc`, `username`, `email`, `password`,`lname`,`fname`,`phone`,`address`,`img`,`role`) 
VALUES 
    (1,"admin","quan.nguyen22@student.paserellesnumeriques.org","admin","admin","admin","000","admin",'sondoong.jpg',"admin"),
    (2,"QuanNg","quan.nguyen@gmail.com","113","Quân","Nguyễn","000","admin",'otaru.jpg',"customer"),
    (3,"DieuHo","dieu.ho22@student.paserellesnumeriques.org","123","Diệu","Hồ","000","admin",'paris.jpg',"customer"),
    (4,"HaiHuynh","hai.huynh@gmail.com","123","Hải","Huỳnh","000","admin",'danang.jpg',"customer"),
    (5,"HoaLe","hoa.le@gmail.com","123","Hoa","Lê","000","admin",'sapa.jpg',"customer");

INSERT INTO `categories`(`id_category`,`category_name`) 
VALUES (1,"Viet Nam"),(2,"China"),(3,"japan"),
(4,"Paris"),(5,"Dubai") ,(6,"Bangkok");


INSERT INTO `tours`(`id_tour`,`name_tour`, `price`, `date_start`,`date_end`, `from_place`, `description`,`people`,`remark`,`img`,`id_cate`,`sale`) 
VALUES 
    (1,
    "Hà Nội – Sapa",
     9000000,
     "2021-03-29",
     "2021-03-31",
     "Hà Nội",
     "Traveling to the North, visitors will discover enchanting natural landscapes and many impressive architectural works created by skillful hands of people. Linh in the north is the most attractive such as Hanoi - Lao Cai - Sapa - Fansipan.",
     3,
     5,
     'sapa.jpg',
     1,
     true),

    (2,
    "Hà Nội – Hạ Long",
    9000000, 
    "2021-03-29",
    "2021-03-31",
    "Hà Nội", 
    "The North - the land of the Vietnamese dynasties, the seat of most of the feudal dynasties of Vietnam, 
    is therefore considered as a thousand-year-old cultural capital with a rich culture and calendar. 
    However, when coming here, visitors are not only allowed to visit ancient cultural and historical works such as: 
    Temple of Literature, Imperial Citadel of Thang Long, experience the unique cultural features of capital land such as: sightseeing 36 streets, 
    enjoying food, watching water puppetry; but also visiting famous sights here such as: Ha Long Bay",
    3,
    5,
    'halong.jpg',
    1,
    true),

    (3,
    "Đà Nẵng - Hội An", 
    1000000, 
    "2021-03-29",
    "2021-03-31", 
    "Đà Nẵng", 
    "Dubbed '' a worthy city '' with the romantic Han River with Dragon Bridge
    symbol of Danang tourist beach city - where you can feel the mix of northern and southern climate.
    many beautiful landscapes captivating people such as: Ba Na Hills, Son Tra Peninsula, Da Nang, Hoi An ancient town…. Da Nang tour will take you to explore the beach
    selected by Forbes as the most attractive beach on the planet with long coastline, clear blue water, cool air",
    3,
    5, 
    'danang.jpg',
    1,
    false),

    (4,
    "Sơn Đoòng Cave", 
    60000000, 
    "2021-03-29",
    "2021-03-31", 
    "Quảng Bình", 
    "150 m wide, 200 m high, stretching nearly 9km. With such a size, Son Doong cave
    passed Deer Cave in Gunung Mulu National Park - Malaysia (with a height of 100 m, width of 90 m, and length of 2 km) to occupy the position as the largest natural cave in the world.", 
    3,
    5, 
    'sondoong.jpg',
    1,
     true),
    
    (5, 
    "Beijing-Haizhou", 
    1200000, 
    "2021-03-29",
    "2021-03-31", 
    "Bắc Kinh", 
    "China is a country of magnificent natural beauty, with a brilliant 3,500-year culture, different from the red color of the Forbidden City, the Great Wall of China, modern space interspersed with castles and ancient citadels. Step into Suzhou, Hangzhou to explore a long historical city that blends romantic natural beauty. Come to Shanghai to the largest city in China with both ancient and modern Western architecture.", 
    3,
    5, 
    'backinh.jpg',
    2,
     true),
    
    (6, 
    "Phoenix Ancient Town", 
    1200000, 
    "2021-03-29",
    "2021-03-31", 
    "Hồ Nam", 
    "China is alive and proud with Truong Gia Gioi - Phuong Hoang Co Tran, where the beauty of Chinese national culture flows through and leaves the most beautiful traditional values. The place where the scenery is full of attraction and mystery is like being lost in the fairy realm in the middle of the world.", 
    3,
    5, 
    'phuonghoangcotran.jpg',
    2,
     false),

    (7, 
    "Great Wall", 
    1200000, 
    "2021-03-29",
    "2021-03-31", 
    "Bắc Kinh", 
    "China is a country of magnificent natural beauty, with a brilliant 3,500-year culture, different from the red color of the Forbidden City, the Great Wall of China, modern space interspersed with castles and ancient citadels. Step into Suzhou, Hangzhou to explore a long historical city that blends romantic natural beauty. Come to Shanghai to the largest city in China with both ancient and modern Western architecture. ", 
    3,
    5, 
    'vanlytruongthanh.jpg',
    2,
     false),
        
     (8, 
     "Forbidden City", 
     1200000, 
     "2021-03-29",
     "2021-03-31", 
     "Bắc Kinh", 
     "The question of where Chinese tourism is beautiful, then surely the Forbidden City will give you the most obvious answer, surely you are too familiar with the name, there are so many movies in it The Forbidden City was inhabited by the Emperors of the Ming and Qing dynasties, with an ever-increasing demand for tourism, so the Forbidden City is now open to welcome guests. Let's count and discover that beauty right away.", 
     3,
     5, 
     'tucamthanh.jpg',
     2,
     false),
     --         
     (9, 
     "Japan - Otaru", 
     1200000, 
     "2021-03-29",
     "2021-03-31", 
     "Otaru",
     "In its heyday, the tiny port city of Otaru used to be one of the main commercial, financial and business centers.
     of Japan during the Meiji period (Meiji) and the Great Government (Taisho) (1868–1926). Although it was no longer a land of strong financial power, the town had grown into a city with great amount
     There are many charms of ancient times, where artisans create beautifully crafted music boxes and glassworks, romantic poetic landscapes and ocean gifts.
     great seafood dishes. In addition, the area offers hot springs and the opportunity to play sports in four seasons.",  
     3,
     5, 
     'otaru.jpg',
     3,
     false),
     --         
     (10, 
     "Japan - Fuji montain", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Shizuoka và Yam",
     "Stunning at 3,776 meters, Mount Fuji is the highest peak in Japan, the result of volcanic activity
     it started about 100,000 years ago. Today, Mount Fuji and the surrounding area are a popular recreational destination for hiking, camping, and relaxation.", 
     3,
     5, 
     'nuiphusi.jpg',
     3,
     false),
          
     (11, 
     "Japan - Tokyo tower", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Tokyo",
     "Located at the foot of Yufu Mountain, Yufuin Hot Spring is one of the most popular resort towns in Japan.
     There are many modern hotels and traditional ryokan inns for you to drop by during the day and take a dip or stay overnight.
     Considered a symbol of Tokyo since it was first built in 1958. This iconic tower attracts visitors day and night and is a must-see when visiting this capital.", 
     3,
     5, 
     'tokyo.jpg',
     3,
     false),
     --          
     (12, 
     "Japan - Shinsekai", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Shinsekai",
     "Shinsekai is the last place when it comes to modernity and entertainment in its heyday before the outbreak of war,
     was developed in 1912 around a futuristic amusement park at the time and Tsutenkaku Tower - a prominent landmark of the area. Come here to feel the old street life for a while
     Experience the nostalgic atmosphere of Osaka, drink chilled beer and eat the best kushikatsu in town.", 
     3,
     5, 
     'shinsekai.jpg',
     4,
     false),
     --         
     (13, 
     "HCM – PARIS(PHÁP)", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "PARIS",
     "Paris, the Capital of Light, evokes romantic feelings in the hearts of anyone who has ever visited. This century city is
     The most visited city in the world, and for good reason. There is plenty to do in Paris to satisfy travelers of all tastes.", 
     3,
     5, 
     'paris.jpg',
     4,
     false),
          
     (14, 
     "Island of Mont Saint-Michel", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Avranches",
     "If you are looking for a picturesque scene then there is definitely no place to beat breathtaking beauty
     item of the Island of Mont Saint-Michel. As a medieval town atop a majestic rocky mountain, Mont Saint-Michel Island is one of the most popular tourist destinations in France, attracting millions
     visitors visit every year. Especially, when you come to Mont Saint-Michel Island, you will have the opportunity to admire the beauty of a monastery designed in ancient Roman style, a medieval church.
     and the battlefield of historical battles.", 
     3,
     5, 
     'montsaintmichel.jpg',
     4,
     false),
     --           
     (15,
     "Louvre museum", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Paris",
     "As one of the famous tourist destinations in France that you must definitely visit, the Louvre Museum is home to many
     World-famous works of art, sculptures, and artifacts date back more than 2000 years. In fact, this building was originally an old fortress, built
     built in the 12th century. After that, it was converted into a medieval palace.", 
     3,
     5, 
     'louver.jpg',
     4,
     false),

     (16, 
     "Burj Khalifa", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Dubai",
     "Do we need to say anything more because this skyscraper is so famous in Dubai and the world says it
     General? Burj Khalifa is a landmark building on the list of the most visited tourist destinations in Dubai.", 
     3,
     5, 
     'mavel.jpg',
     5,
     false),
               
     (17, 
     "Wild Wadi", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Dubai",
     "Wild Wadi is a popular theme park located in front of Burj Khalifa, where many trips are concentrated
     fun with over 25 games. This is a perfect place to enjoy with your family while learning about Arab folklore, on which Wild Wadi is based.
     Family travel, especially with children.", 
     3,
     5, 
     'wildwadi.jpg',
     5,
     true),
     --
     (18, 
     "Dubai Aquarium", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Dubai Mall",
     "Have you ever been to an underwater zoo? It really exists as the Dubai Aquarium. this is a
     one of the most popular tourist attractions in Dubai, where there is a variety of activities, including an underwater zoo, glass bottom tours, snorkeling and shark diving. That is a conclusion
     unique fusion, so you will surely reap many memorable memories.", 
     3,
     5, 
     'thuycungdubai.jpg',
     5,
     false),

     (19, 
     "Mall Of The Emirates", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Dubai ",
     "The 4th place on our list of best places to visit in Dubai is the Mall of the Emirates, which is fully equipped
     everything under one roof. You can enjoy dishes from all over the world, shop for products with top brands or exclusive Dubai Ski including one gear
     Excellent ski setting and penguin enclosure - all same mild climate of -4 degrees Celsius", 
     3,
     5, 
     'mall.jpg',
     5,
     false),
     --  
     (20, 
     "Grand Palace", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Bangkok",
     "Grand Palace is also known by its Vietnamese name as the Royal Palace of Thailand. This Thai resort is not just the place
     living and working of Thai royalty, but it also possesses beautiful architecture and becomes one of the places to visit that no one can ignore. The pointed towers here are also inlaid
     Yellow leaves, creating a golden color that persists over time and especially they shine in the sunshine of Bangkok city.", 
     3,
     5, 
     'palace.jpg',
     6,
     false),
     
     (21, 
     "Temple of the Golden Buddha", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Bangkok",
     "The Golden Buddha Temple is located in Bangkok's China Town. This place owns a Buddha statue which is cast entirely in gold and in size
     the largest in the world. Besides that highlight, this temple also attracts visitors by its beautiful luxurious architecture. Still with the familiar image of the yellow tops of the roofs of the temples
     In Thailand, the Golden Buddha Temple appears like a large palace, causing visitors to admire praise.", 
     3,
     5, 
     'chuaphatvang.jpg',
     6,
     false),
     --     
     (22, 
     "Dream World", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Pathum Thani ",
     "Contrary to the wild Safari World, Dream World is an amusement park filled with colors.
     This is also the largest and most attractive amusement park in Thailand, so to be able to explore and have fun here, you should spend a full day to enjoy the exciting games.
     investment is very meticulous. If your family has children or comes with your group of friends, Dream World will definitely be an indispensable place in your itinerary!.", 
     3,
     5, 
     'dreamworld.jpg',
     6,
     true),
     --      
     (23, 
     "Koh Larn", 
     1200000, 
     "2021-03-29",
     "2021-03-31",
     "Pattaya ",
     "Koh Larn is also known by Vietnamese tourists as the Coral Island. It is located in the famous Pattaya waters and is also one of the
     The most popular tourist destinations in Thailand, the sea here possesses a peaceful, romantic beauty that is sure to bring a wonderful vacation. Besides here also
     There are familiar games like water motorcycling, windsurfing or jumping.", 
     3,
     5, 
     'kohlarn.jpg',
     6,
     false);




INSERT INTO `book_tour`(`id_order`, `id_acc`, `id_tour`,`date_book`) 
VALUES 
    (1,1,1,"2021-03-04"),
    (2,2,14,"2021-03-04"),
    (3,3,8,"2021-03-04"),
    (4,4,15,"2021-03-04"),
    (5,1,12,"2021-03-04"),
    (6,2,2,"2021-03-04"),
    (7,3,19,"2021-03-04"),
    (8,4,9,"2021-03-04"),
    (9,1,20,"2021-03-04");
