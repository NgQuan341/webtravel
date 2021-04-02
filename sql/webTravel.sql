
use `webtravel`;

create table `tours`(
    `id_tour` int primary key AUTO_INCREMENT,
    `name_tour` varchar(50),
    `price` varchar(50),
    `time` DATETIME,
    `from_place` varchar(50),
    `description` TEXT,
    `img` binary
);

create table `account`(
    `id_acc` int  primary key AUTO_INCREMENT,
    `username` varchar(50),
    `email` varchar(100),
    `password` varchar(100)
);

create table `categories`(
    `id_category` int  primary key AUTO_INCREMENT,
    `category_name` varchar(50)
);
create table `tour_category`(
    `id_tour` int,
    `id_category` int,
    foreign key(`id_tour`) references `tours`(`id_tour`),
    foreign key(`id_category`) references `categories`(`id_category`)
);
create TABLE `book_tour`(
    `id_order` int  primary key AUTO_INCREMENT,
    `id_acc` int,
    `id_tour` int,
    `date_start` DATETIME,
    `date_finish` DATETIME,
    foreign key(`id_acc`) references `account`(`id_acc`),
    foreign key(`id_tour`) references `tours`(`id_tour`)
);
INSERT INTO `tours`(`id_tour`, `name_tour`, `price`, `time`, `from_place`, `description`, `img`) 
value (1, "Du Lịch – Hà Nội – Sapa", "9000000", "2021-03-29 04:55:28", "Sapa", "Du lịch miền Bắc du khách sẽ được khám phá những thắng cảnh thiên nhiên đẹp
         mê hồn cùng nhiều công trình kiến trúc ấn tượng được tạo nên bởi bàn tay khéo léo của con người.Cùng Du Lịch SaoViettravel tìm hiểu những địa điểm 
         du lịch tâm linh ở miền bắc hấp dẫn nhất như Hà Nội –  Lào Cai – Sapa – Fansipan.", null),
        (2, "Hà Nội – Hạ Long", "9000000", "2021-03-29 04:55:28", "Hà Nội-Hạ Long", "Xứ Bắc – vùng đất khai cơ của các Vương triều Việt, nơi định đô của hầu hết 
        các triều đại phong kiến Việt Nam chính vì vậy nơi đây được xem như là đất kinh đô ngàn năm văn hiến với một bề dày văn hóa, lịch sử sâu sắc và đa dạng.
        Tuy nhiên, khi đến đây, Du khách không chỉ được tham quan những công trình văn hóa – lịch sử cổ kính như : Văn Miếu, Hoàng thành Thăng Long, trải nghiệm 
        những nét văn hóa đặc sắc của đất kinh đô như: ngoạn cảnh 36 phố phường, thưởng thức ẩm thực, xem múa rối nước; 
        mà còn có thể thăm thú các thắng cảnh nổi tiếng nơi đây như: Vịnh Hạ Long", null),
        (3, "Đà Nẵng-Hội An", "9000000", "2021-03-29 04:55:28", "Đà Nẵng", "Được mệnh danh là ‘’thành phố đáng đến’’ với dòng sông Hàn thơ mộng với cây cầu Rồng 
        biểu tượng của Thành phố biển du lịch Đà Nẵng – nơi mà quý khách có thể cảm nhận được sự pha trộn giữa khí hậu miền Bắc, miền Nam.Ngoài ra Đà Nẵng còn sở hữu 
        nhiều danh lam thắng cảnh làm say lòng người như: Bà Nà Hills, Bán Đảo Sơn Trà, Đà Nẵng, phố cổ Hội An…. Tour du lịch Đà Nẵng sẽ đưa quý khách khám phá bãi biển 
        được Forbes lựa chọn là bãi biển quyến rũ nhất hành tinh với bờ biển dài,làn nước trong xanh, không khí mát mẻ ", null),
        (4, "Hang Sơn Đoòng", "9000000", "2021-03-29 04:55:28", "Quảng Bình", "rộng 150 m, cao hơn 200 m, kéo dài gần 9km. Với kích thước như thế, hang Sơn Đoòng 
        đã vượt qua hang Deer ở Vườn quốc gia Gunung Mulu - Malaysia (với chiều cao 100 m, rộng 90 m, dài 2km) để chiếm vị trí là hang động tự nhiên lớn nhất thế giới.", null),
        (5, "Bắc Kinh-Hải Châu", "9000000", "2021-03-29 04:55:28", "Bắc Kinh", "Trung Quốc đất nước thiên nhiên cẩm tú tráng lệ, có nền văn hóa 3.500 năm rực rỡ, 
        khác biệt với sắc đỏ của Tử Cấm Thành, Vạn Lý Trường Thành, không gian hiện đại xen kẽ những lâu đài và tòa thành cổ. Bước sang Tô Châu, Hàng Châu khám phá thành phố lịch sử
         lâu đời pha trộn vẻ đẹp thiên nhiên lãng mạn, về Thượng Hải bước đến thành phố lớn nhất Trung Quốc với những kiến trúc Phương Tây vừa cổ kính vừa hiện đại.", null),
        (6, "Phượng Hoàng Cổ Trấn", "9000000", "2021-03-29 04:55:28", "Hồ Nam", "Trung Hoa sống động và hào hoa với Trương Gia Giới - Phượng Hoàng Cổ Trấn , nơi nét đẹp của văn hóa dân tộc 
        Trung Hoa chảy qua và để lại những giá trị truyền thống đẹp đẽ nhất. Nơi cảnh sắc đầy cuốn hút và bí ẩn như lạc vào cõi thần tiên ngay giữa dương gian.", null),
        (7, "Vạn Lý Trường Thành", "9000000", "2021-03-29 04:55:28", "Bắc Kinh", "Trung Quốc đất nước thiên nhiên cẩm tú tráng lệ, có nền văn hóa 3.500 năm rực rỡ,
         khác biệt với sắc đỏ của Tử Cấm Thành, Vạn Lý Trường Thành, không gian hiện đại xen kẽ những lâu đài và tòa thành cổ. Bước sang Tô Châu, Hàng Châu khám phá thành phố 
         lịch sử lâu đời pha trộn vẻ đẹp thiên nhiên lãng mạn, về Thượng Hải bước đến thành phố lớn nhất Trung Quốc với những kiến trúc Phương Tây vừa cổ kính vừa hiện đại. ", null),
        (8, "Tử Cấm Thành", "9000000", "2021-03-29 04:55:28", "Bắc Kinh", "Câu hỏi du lịch Trung Quốc ở đâu đẹp thì chắc chắn rằng Tử Cấm Thành sẽ mang lại cho bạn câu trả lời rõ ràng nhất,
         chắc chắn rằng bạn đã quá quen thuộc với cái tên này, đã quá nhiều phim ảnh có mặt nó, Tử Cấm Thành là nơi sinh sống của các Hoàng đế triều đại nhà Minh và nhà Thanh, với nhu cầu du lịch 
         luôn luôn tăng cao do vậy Tử Cấm Thành giờ đây đã được mở cửa để chào đón các vị khách. Bạn hãy đếm và khám phá ngay vẻ đẹp đó đi nào.", null),
        (9, "Japan - Otaru", "9000000", "2021-03-29 04:55:28", "Otaru","Vào thời hoàng kim, thành phố cảng nhỏ bé Otaru từng là một trong những trung tâm thương mại, tài chính và kinh doanh chính 
        của Nhật Bản trong thời Minh Trị (Meiji) và Đại Chính (Taisho) (1868–1926). Dù không còn là một vùng đất có thế lực tài chính mạnh mẽ, thị trấn đã phát triển thành một thành phố với rất 
        nhiều nét quyến rũ của thời cổ xưa.Ở đây, các nghệ nhân tạo ra những hộp nhạc và tác phẩm thủy tinh thủ công tuyệt đẹp, phong cảnh nên thơ truyền cảm hứng lãng mạn và đại dương gửi tặng 
        những món hải sản tuyệt vời. Ngoài ra, khu vực còn có suối nước nóng và cơ hội chơi thể thao bốn mùa.", null),
        (10, "Japan - Núi Phú Sĩ", "9000000", "2021-03-29 04:55:28","Shizuoka và Yam","Sừng sững ở độ cao 3.776 mét, Núi Phú Sĩ  là đỉnh núi cao nhất ở Nhật Bản, kết quả của hoạt động núi lửa
         đã bắt đầu từ khoảng 100.000 năm trước. Ngày nay, Núi Phú Sĩ và khu vực xung quanh là một điểm đến giải trí phổ biến cho hoạt động đi bộ đường dài, cắm trại và thư giãn.", null),
         (11, "Japan - Tháp Tokyo", "9000000", "2021-03-29 04:55:28","Tokyo","Nằm dưới chân Núi Yufu , Suối nước nóng Yufuin là một trong những thị trấn nghỉ dưỡng nổi tiếng nhất Nhật Bản.
          Nơi đây có nhiều khách sạn hiện đại và lữ quán ryokan truyền thống để bạn có thể ghé trong ngày và ngâm mình hoặc ở lại qua đêm.Tháp Tokyo: Với chiều cao 333 mét, Tháp Tokyo đã được
           xem là biểu tượng của Tokyo kể từ khi mới xây dựng vào năm 1958. Tòa tháp mang tính biểu tượng này thu hút du khách cả ngày lẫn đêm và là địa điểm không thể bỏ qua khi đến thủ đô này.", null),
         (12, "Japan - Shinsekai", "9000000", "2021-03-29 04:55:28","Shinsekai","Shinsekai là địa điểm cuối cùng khi nói về sự hiện đại và giải trí trong thời kỳ hoàng kim trước khi chiến tranh bùng nổ, 
         được phát triển vào năm 1912 quanh một công viên giải trí mang tính tương lai lúc bấy giờ và Tháp Tsutenkaku  – địa danh nổi bật của khu vực. Hãy đến đây để cảm nhận cuộc sống đường phố xưa cũ một thời
          đã qua của Osaka, trải nghiệm bầu không khí hoài cổ, uống bia ướp lạnh và ăn món kushikatsu ngon nhất trong thị trấn nhé.", null),
        (13, "TP.HCM – PARIS(PHÁP)", "9000000", "2021-03-29 04:55:28","PARIS","Paris, Kinh đô ánh sáng, gợi lên những cảm xúc lãng mạn trong lòng bất kỳ ai đã từng ghé thăm. Thành phố hàng thế kỷ này là 
        thành phố được ghé thăm nhiều nhất trên thế giới, và vì lý do chính đáng. Có rất nhiều điều để làm ở Paris để đáp ứng du khách thuộc mọi sở thích.", null),
        (14, "Đảo Mont Saint-Michel", "9000000", "2021-03-29 04:55:28","Avranches","Nếu bạn đang tìm kiếm một khung cảnh đẹp như tranh vẽ thì chắc chắn không nơi nào có thể đánh bại được vẻ đẹp ngoạn
         mục của Đảo Mont Saint-Michel. Là một thị trấn thời trung cổ nằm trên đỉnh một ngọn núi đá hùng vĩ, Đảo Mont Saint-Michel là một trong những địa điểm du lịch nổi tiếng ở Pháp, thu hút hàng triệu 
         du khách ghé thăm mỗi năm. Đặc biệt, khi tới Đảo Mont Saint-Michel, bạn sẽ có cơ hội được chiêm ngưỡng vẻ đẹp của một tu viện được thiết kế theo phong cách La Mã cổ đại, một nhà thờ thời trung cổ
          và chiến trường của các trận chiến lịch sử.", null),
          (15, "Bảo tàng Louvre", "9000000", "2021-03-29 04:55:28","Paris","Là một trong những điểm du lịch nổi tiếng ở Pháp mà bạn nhất định phải ghé thăm, Bảo tàng Louvre là nơi trưng bày những 
          tác phẩm nghệ thuật, những bức tượng điêu khắc, và những món đồ tạo tác nổi tiếng thế giới, có niên đại từ hơn 2000 năm trước. Trên thực tế, tòa nhà này ban đầu là một pháo đài cổ, được xây 
          dựng từ thế kỷ 12. Sau đó, nó được chuyển đổi thành một cung điện thời trung cổ.", null),
          (16, "Burj Khalifa – Kiến trúc Marvel", "9000000", "2021-03-29 04:55:28","Dubai","Chúng ta có cần phải nói thêm gì không vì tòa tháp chọc trời này đã quá nổi tiếng ở Dubai và thế giới nói
           chung rồi? Burj Khalifa là tòa nhà mang tính bước ngoặt nằm trong danh sách những địa điểm du lịch được ghé thăm nhiều nhất ở Dubai.", null),
           (17, "Wild Wadi", "9000000", "2021-03-29 04:55:28","Dubai","Wild Wadi là một công viên giải trí nổi tiếng nằm ở phía trước Burj Khalifa, nơi tập trung nhiều chuyến đi
            vui nhộn với hơn 25 trò chơi. Đây là một nơi hoàn hảo để thưởng thức cùng gia đình bạn trong khi tìm hiểu về văn hóa dân gian Ả Rập, nơi mà Wild Wadi dựa vào.Nó rất thích hợp cho các nhóm khách
             du lịch gia đình, nhất là có trẻ em.", null),
             (18, "Thủy cung Dubai", "9000000", "2021-03-29 04:55:28","Dubai Mall","Bạn đã từng đến một sở thú dưới nước bao giờ chưa? Nó thật sự tồn tại với tên gọi thủy cung Dubai đấy. Đây là một
              trong những điểm thu hút khách du lịch nổi tiếng ở Dubai, nơi có nhiều hoạt động đa dạng, bao gồm vườn thú dưới nước , tour du lịch đáy kính , lặn ống lồng và lặn cá mập. Đó là một sự kết 
              hợp độc đáo, vì vậy bạn chắc chắn sẽ gặt hái được nhiều kỷ niệm đáng nhớ.", null),
              (19, "Mall Of The Emirates", "9000000", "2021-03-29 04:55:28","Dubai ","Vị trí thứ 4 trong danh sách những nơi tốt nhất để ghé thăm ở Dubai là Mall of the Emirates, nó được trang bị hầu
               hết mọi thứ dưới một mái nhà. Bạn có thể thưởng thức những món ăn từ khắp nơi trên thế giới, mua sắm sản phẩm với những thương hiệu hàng đầu hoặc Dubai Ski độc quyền bao gồm một dụng cụ 
               trượt tuyết tuyệt vời thiết lập và bao vây chim cánh cụt – tất cả cùng một khí hậu ôn hòa của -4 độ C.", null),
   (20, "Grand Palace", "9000000", "2021-03-29 04:55:28","Bangkok ","Grand Palace hay còn được biết đến với tên tiếng việt là Cung điện Hoàng gia Thái Lan. Khu du lịch Thái Lan này không chỉ là nơi 
   sinh sống, làm việc của hoàng gia Thái, mà nó còn sở hữu những nét kiến trúc cực đẹp và trở thành một trong những địa điểm tham quan mà không ai có thể bỏ qua được. Các tháp nhọn ở đây còn được dát 
   lên bởi những lá vàng, tạo ra màu vàng bền bỉ qua thời gian và đặc biệt là chúng tỏa sáng trong mỗi ánh nắng của thành phố Bangkok.", null),
   (21, "Chùa Phật Vàng", "9000000", "2021-03-29 04:55:28","Bangkok ","Chùa Phật Vàng nằm ở khu China Town của Bangkok. Nơi này sở hữu bức tượng Phật được đúc hoàn toàn bằng vàng và có kích thước 
   lớn nhất trên thế giới. Bên cạnh điểm nổi bật ấy, ngôi chùa này còn hấp dẫn du khách bởi nét kiến trúc sang trọng cực đẹp của nó. Vẫn với hình ảnh mái chóp ngọn màu vàng quen thuộc của các ngôi chùa
    ở Thái Lan, chùa Phật Vàng hiện ra như một cung điện lớn, khiến du khách phải trầm trồ khen ngợi.", null),
    (22, "Dream World", "9000000", "2021-03-29 04:55:28","Pathum Thani ","Trái ngược với Safari World đầy hoang dã thì Dream World lại là một công viên vui chơi giải trí tràn ngập sắc màu. 
    Đây cũng là một công viên giải trí lớn nhất và hấp dẫn nhất của Thái Lan.Để có thể khám phá và vui chơi hết ở đây, bạn nên dành trọn 1 ngày để có thể thỏa thích tận hưởng các trò chơi đầy hấp
     dẫn được đầu tư vô cùng công phu. Nếu gia đình có trẻ nhỏ hoặc đi cùng nhóm bạn của mình thì chắc chắn Dream World sẽ là một địa điểm không thể nào thiếu được trong lịch trình của bạn đấy!.", null),
     (23, "Koh Larn", "9000000", "2021-03-29 04:55:28","Pattaya ","Koh Larn hay còn được du khách Việt biết đến với cái tên là Đảo San Hô. Nó nằm ở vùng biển Pattaya nổi tiếng và cũng là một trong
      những địa điểm được đông đảo du khách quan tâm nhất ở Thái Lan.Biển nơi đây sở hữu một vẻ đẹp bình yên, đầy lãng mạn, chắc chắn sẽ đưa đến cho một một kì nghỉ dưỡng thật tuyệt. Bên cạnh đó ở đây cũng
       có các trò chơi quen thuộc như lái mô tô nước, lướt ván hay nhảy dủ.", null);


INSERT INTO `account`(`id_acc`, `username`, `email`, `password`) VALUES (1,"Quân","quan.nguyen@gmail.com","12345678"),
(2,"Diệu","dieu.ho@gmail.com","123456789"),(3,"Hải","hai.huynh@gmail.com","987654321"),
(4,"Hoa","hoa.le@gmail.com","87654321");

INSERT INTO `book_tour`(`id_order`, `id_acc`, `id_tour`, `date_start`, `date_finish`) VALUES (1,1,2,"2021-03-29 05:26:36","2021-04-29 05:26:36"),
(2,2,14,"2021-03-29 05:26:36","2021-04-29 05:26:36"),(3,3,8,"2021-03-29 05:26:36","2021-04-29 05:26:36"),
(4,4,15,"2021-01-29 05:26:36","2021-04-29 05:26:36"),(5,1,12,"2021-03-29 05:26:36","2021-04-29 05:26:36"),
(6,2,2,"2021-03-29 05:26:36","2021-04-29 05:26:36"),(7,3,19,"2021-03-29 05:26:36","2021-04-29 05:26:36"),
(8,4,9,"2021-03-29 05:26:36","2021-04-29 05:26:36"),(9,1,20,"2021-03-29 05:26:36","2021-04-29 05:26:36");


INSERT INTO `categories`(`id_category`, `category_name`) VALUES (1,"Viet Nam"),(2,"Trung Quốc"),(3,"Nhật Bản"),
(4,"Pháp"),(5,"Dubai") ,(6,"Bangkok");

INSERT INTO `tour_category`(`id_tour`, `id_category`) VALUES (10,1),(2,4),(13,3),
(4,4),(5,5) ,(6,6);