-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 28, 2020 lúc 08:24 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `longnnbv_animal_website`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `id_parent`) VALUES
(1, 'SHOP ALL', 0),
(2, 'DOGS', 1),
(3, 'CATS', 1),
(4, 'BIRDS', 1),
(5, 'FISH AND AQUATICS', 1),
(6, 'SMALL ANIMALS', 1),
(7, 'REPTILES', 1),
(8, 'CONTACT', 0),
(9, 'Dog Beds', 2),
(10, 'Dog Collars', 2),
(11, 'Dog Foods', 2),
(12, 'Dog Toys', 2),
(13, 'Cat Litters', 3),
(14, 'Cat Poles', 3),
(15, 'Cat Toys', 3),
(16, 'Cat Tools', 3),
(17, 'Bird Houses', 4),
(18, 'Bird Toys', 4),
(19, 'Bird Food', 4),
(20, 'Fish Aquariums', 5),
(21, 'Fish Decoration', 5),
(22, 'Fish Cleaning', 5),
(23, 'Small Animal Cages', 6),
(24, 'Small Animal Equipment', 6),
(25, 'Small Animal Toys', 6),
(26, 'Reptile Aquariums', 7),
(27, 'Reptile Heating', 7),
(28, 'Reptile Decoration', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `day_order` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `name`, `address`, `phone`, `email`, `day_order`) VALUES
(1, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'tuvo1632@gmail.com', '2019-11-26'),
(2, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'tuvo1632@gmail.com', '2019-11-26'),
(3, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'tuvo1632@gmail.com', '2019-11-26'),
(4, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'tuvo1632@gmail.com', '2019-11-26'),
(5, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'tuvo1632@gmail.com', '2019-11-26'),
(6, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'tuvo1632@gmail.com', '2019-11-26'),
(7, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'tuvo1632@gmail.com', '2019-11-26'),
(8, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-26'),
(9, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-26'),
(10, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-26'),
(16, 'đasad', 'sadasd', 901484065, 'votu399@gmail.com', '2019-11-28'),
(17, 'đasad', 'sadasd', 901484065, 'votu399@gmail.com', '2019-11-28'),
(18, 'dasd', 'asdasd', 256516, 'tuvo1632@gmail.com', '2019-11-28'),
(19, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-28'),
(20, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-28'),
(21, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-28'),
(22, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-28'),
(23, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-28'),
(24, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-28'),
(25, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-28'),
(26, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-28'),
(27, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'votu339@gmail.com', '2019-11-28'),
(29, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'votu339@gmail.com', '2019-11-28'),
(30, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'votu339@gmail.com', '2019-11-28'),
(38, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'tuvo1632@gmail.com', '2019-11-28'),
(39, 'Lap Vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'ponz_punz_2000@yahoo.com.vn', '2019-11-28'),
(41, 'tu vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'longnv@gmail.com', '2019-12-07'),
(42, 'tu vo', '262/13/11A Lũy Bán Bích, Hòa Thạnh, Tân Phú', 901484065, 'longnv@gmail.com', '2019-12-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(2) NOT NULL,
  `images` varchar(255) NOT NULL,
  `day_order` timestamp NOT NULL DEFAULT current_timestamp(),
  `quantity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id_order`, `id_product`, `name`, `price`, `images`, `day_order`, `quantity`) VALUES
(42, 2, '\r\nĐệm cho chó mèo hình My Neighbor Totoro Cawaii', 65, 'dog2.png', '2019-12-06 17:00:00', 3),
(42, 86, 'Exo-Terra Silk Ficus Jungle Plant', 12, 'ke11.png', '2019-12-06 17:00:00', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_catalog` int(11) NOT NULL,
  `id_catalog_parent` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `buyed` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `id_catalog`, `id_catalog_parent`, `name`, `images`, `price`, `buyed`, `content`, `info`) VALUES
(1, 9, 2, '\r\nNệm cho chó mèo hình vuông Bobby Pet 16RB002', 'dog1.png', 65, 20, 'Nệm cho chó mèo hình vuông Bobby Pet 16RB002 được thiết kế dành riêng cho vật nuôi. Phù hợp với tất cả các giống chó mèo.', 'Lợi ích chính\r\n\r\nNệm cho chó mèo hình vuông Bobby Pet 16RB002 bao gồm lớp vải mỏng bên ngoài. Bên trong được cấu tạo bởi một lớp lông cừu dày ấm áp. Chất liệu bền và dễ dàng vệ sinh sạch sẽ. Thiết kế hình vuông, xung quanh có thành cao, cún cưng có thể nằ'),
(2, 9, 2, '\r\nĐệm cho chó mèo hình My Neighbor Totoro Cawaii', 'dog2.png', 65, 651, 'Đệm cho chó mèo hình My Neighbor Totoro Cawaii êm ái được thiết kế dành cho tất cả các giống chó mèo. Một chiếc ổ nằm ấm áp giúp cún cưng thoải mái và ngủ ngon hơn.', 'Lợi ích chính\r\n\r\nĐệm cho chó mèo hình My Neighbor Totoro Cawaii được thiết kế độc đáo dành cho các giống chó mèo vừa và nhỏ. Ổ nệm tạo cảm giác ấm áp vào mùa đông, mát mẻ vào mùa mè. Đệm được sử dụng nguyên liệu vải nhung siêu mềm và êm tạo cảm giác an to'),
(3, 9, 2, 'Ổ đệm cho chó mèo hình ngôi nhà', 'dog3.png', 125, 152, 'Ổ đệm cho chó mèo hình ngôi nhà màu nâu rêu, được thiết kế độc đáo dành cho các giống chó mèo vừa và nhỏ. Với hình dáng vô cùng đáng yêu mang tới cho cún cưng, mèo cưng một chiếc giường nằm thoải mái nhất.', 'Lợi ích chính\r\n\r\nỔ đệm cho chó mèo hình ngôi nhà tạo cảm giác ấm áp vào mùa đông. Đồng thời mát mẻ vào mùa mè. Với chất liệu vải và bông cao cấp. Phần nhung lót công nghệ xốp tiên tiến để giữ phom cho ngôi nhà.\r\n\r\nNgôi nhà không chỉ cung cấp cho thú cưng '),
(4, 10, 2, 'Dây dắt chó kèm vòng cổ Hand In Hand', 'dog6.png', 9, 10, 'Dây dắt chó kèm xích đeo cổ Hand In Hand là sản phẩm dành cho tất cả giống chó.', 'Lợi ích chính\r\n\r\nDây dắt chó kèm xích đeo cổ Hand In Hand được làm bằng chất liệu 100% nylon\r\n\r\nVới thiết kế mang phong cách truyền thống và cổ điển từ xích đeo cổ đến dây dắt\r\n\r\nTay nắm dây dắt và xích đeo cổ chó có lớp cao su tổng hợp làm cho chú chó cả'),
(5, 10, 2, '\r\nVòng cổ cho chó cỡ lớn bằng da đính cườm cao cấp', 'dog7.png', 10, 54, 'Vòng cổ cho chó cỡ lớn bằng da đính cườm cao cấp là sản phẩm dành cho tất cả giống chó cỡ nhỏ.', 'Lợi ích chính\r\n\r\nVòng cổ cho chó cỡ lớn bằng da đính cườm cao cấp với thiết kế nhỏ gọn, chất lượng tốt, chất liệu da lộn mềm mại\r\n\r\nSản phẩm được đính những hạt kim cương lấp lánh\r\n\r\nKiểu dáng thời trang sẽ giúp cho thú cưng nổi bật trong đám đông'),
(6, 10, 2, '\r\nVòng cổ cho chó bằng da cỡ mini', 'dog8.png', 11, 89, 'Vòng cổ cho chó bằng da là sản phẩm dành cho tất cả giống chó cỡ mini.', 'Lợi ích chính\r\n\r\nVòng cổ cho chó bằng da cỡ mini với thiết kế nhỏ gọn, chất lượng tốt, chất liệu da lộn mềm mại\r\n\r\nSản phẩm được đính những hạt kim cương lấp lánh\r\n\r\nRất hợp thời trang, là phụ kiện không thể thiếu cho thú cưng của bạn'),
(7, 11, 2, '\r\nBánh thưởng cho chó làm sạch răng Pedigree DentaStix Adult Snack', 'dog11.png', 10, 100, 'Bánh thưởng cho chó làm sạch răng Pedigree DentaStix Adult Snack dành cho chó trưởng thành trên 12 tháng tuổi. Với tinh chất chống cao răng và ngăn ngừa mảng bám giúp thú cưng có hơi thở thơ mát.', 'Lợi ích chính\r\n\r\nBánh thưởng cho chó làm sạch răng Pedigree DentaStix Adult Snack dinh dưỡng hình chữ “X” đặc biệt. Thiết kế hình chữ “X” đặc biệt, chứa thành phần hoạt tính và tính chất được nghiên cứu chuyên sâu trong mỗi gói của Pedigree. Răng sáng, nụ'),
(8, 11, 2, 'Bánh thưởng cho chó vị thịt bò Orgo Freshening Biscuit Bacon Beef', 'dog12.png', 15, 101, 'Bánh thưởng cho chó vị thịt bò Orgo Freshening Biscuit Bacon Beef có tác dụng làm sạch răng cho chó vị thịt bò. Sản phẩm có chứa các thành phần bạc hà tự nhiên kết hợp với hương vị thịt bò, có khả năng loại bỏ các vi khuẩn gây hôi miệng cho chú chó của bạ', 'Lợi ích chính\r\n\r\nĐặc biệt bánh thưởng cho chó vị thịt bò Orgo Freshening Biscuit Bacon Beef có thêm thịt bò tươi ngon, thông qua quá trình sấy khô tỉ mỉ, vẫn có thể đảm bảo được thành phần dinh dưỡng có trong thịt bò, bổ sung cho thú cưng lượng protein và'),
(9, 11, 2, '\r\nBánh thưởng cho chó vị cá JerHigh Fish Stick', 'dog13.png', 11, 164, 'Bánh thưởng cho chó JerHigh Fish vị cá phù hợp với tất cả các giống chó.', 'Lợi ích chính\r\n\r\nBánh thưởng cho chó vị cá JerHigh Fish Stick được sử dụng như một món quà hỗ trợ huấn luyện. Món ăn đặc biệt này có vị thơm ngon và vô cùng hấp dẫn. Mang lại cho thú cưng nguồn dinh dưỡng và tổng hợp các vitamin. Vitamin A là dưỡng chất t'),
(10, 11, 2, '\r\nBánh thưởng cho chó vị thịt gà và cá TRIXIE PREMIO Fish Chicken Wraps', 'dog14.png', 13, 132, 'Bánh thưởng cho chó vị thịt gà và cá TRIXIE PREMIO Fish Chicken Wraps là thức ăn nhẹ dành cho tất cả giống chó.', 'Lợi ích chính\r\n\r\nBánh thưởng cho chó vị thịt gà và cá TRIXIE PREMIO Fish Chicken Wraps giàu axit béo Omega 3 và Omega 6 tự nhiên\r\n\r\nGà cung cấp nhiều protein\r\n\r\nKhông thêm đường và gluten\r\n\r\nThành phần dinh dưỡng\r\n\r\nBánh thưởng cho chó vị thịt gà và cá TR'),
(11, 11, 2, '\r\nBánh thưởng cho chó vị cà rốt JerHigh Carrot', 'dog15.png', 2, 254, 'Bánh thưởng cho chó JerHigh Carrot vị cà rốt dành cho tất cả các giống chó.', 'Lợi ích chính\r\n\r\nBánh thưởng cho chó vị cà rốt JerHigh Carrot chứa nhiều chất dinh dưỡng, protein và bổ sung hàm lượng vitamin giúp thú cưng phát triển toàn diện. Thịt gà cung cấp protein duy trì nguồn năng lượng cần thiết mỗi ngày. Vitamin A là dưỡng chấ'),
(12, 11, 2, 'Xương cho chó thơm miệng BONE Fresh Breath', 'dog16.png', 10, 121, 'Xương cho chó thơm miệng BONE Fresh Breath thích hợp với: chó kích thước nhỏ, kích thước trung bình và kích thước lớn. Sử dụng: cho ăn trực tiếp, hoặc có thể dùng làm đồ ăn khi huấn luyện hoặc khen thưởng.', 'Lợi ích chính\r\n\r\nThiết kế hình lập thể: hình lập thể có lợi cho việc làm sạch răng, còn có hiệu quả loại bỏ mảng bám cứng đầu, làm sạch bộ phận nướu.\r\n\r\nXương cho chó thơm miệng BONE Fresh Breath với nguyên liệu tự nhiên: đặc biệt có thêm bột sữa, gluten,'),
(13, 11, 2, 'Bánh thưởng cho chó vị thịt bò Orgo Beef Small Bone', 'dog17.png', 12, 78, 'Bánh thưởng cho chó vị thịt bò Orgo Beef Small Bone là sản phẩm thức ăn dành cho tất cả giống chó.', 'Làm sạch răng toàn diện, loại bỏ 99% cao răng \r\n\r\nHơi thở thơm tho, giảm mùi hôi miệng\r\n\r\nBánh thưởng cho chó vị thịt bò Orgo Beef Small Bone dùng tốt cho tất cả các con chó, kể cả chó con và chó già\r\n\r\nThành phần dinh dưỡng\r\n\r\nNgũ cốc, Thịt và Động vật ('),
(14, 12, 2, '\r\nĐồ chơi cho chó mèo dạng bóng thừng BOBO 1030 size S', 'dog18.png', 15, 72, 'Đồ chơi cho chó mèo dạng bóng thừng BOBO 1030 size S là sản phẩm dành cho tất cả giống chó và mèo.', 'Lợi ích chính\r\n\r\nĐồ chơi cho chó mèo dạng bóng thừng BOBO 1030 với màu sắc đa dạng, ngẫu nhiên\r\n\r\nSản phẩm được làm bởi chất liệu thừng cotton chất lượng cao, dệt đan chắc chắn, bền bỉ đáp ứng nhu cầu gặm cắn của chó mèo\r\n\r\nSản phẩm này là lựa chọn tuyệt '),
(15, 12, 2, 'Đồ chơi dây thừng cho chó mèo hình động vật', 'dog19.png', 7, 22, 'Đồ chơi dây thừng cho chó mèo hình động vật là sản phẩm dành cho tất cả giống chó.', 'Lợi ích chính\r\n\r\nĐồ chơi dây thừng cho chó mèo hình động vật có tác dụng làm sạch răng cho chó, tăng cường chức năng của hàm và giúp răng khỏe mạnh hơn\r\n\r\nSản phẩm giúp hạn chế nhu cầu gặm phá đồ đạc của thú cưng trong gia đình\r\n\r\nMàu sắc như thật, âm tha'),
(16, 12, 2, '\r\nĐồ chơi cho chó mèo bằng bông ELITE 1012 size M', 'dog20.png', 5, 15, 'Đồ chơi cho chó mèo bằng bông ELITE 1012 size M là sản phẩm phù hợp với tất cả giống chó và mèo.', 'Lợi ích chính\r\n\r\nĐồ chơi cho chó mèo bằng bông ELITE 1012 được sản xuất từ cao su mềm không gây độc hại cho thú cưng\r\n\r\nMàu sắc như thật, âm thanh chút chít đáng yêu sẽ khiến cho cún cưng không cảm thấy cô đơn khi ở nhà một mình\r\n\r\nSản phẩm có thiết kế cá'),
(17, 13, 3, '\r\nKhay vệ sinh cho mèo Makar Cat Litter Station', 'cat1.png', 45, 8, 'Khay vệ sinh cho mèo Makar Cat Litter Station phù hợp cho mèo con và các giống mèo cỡ nhỏ. Màu sắc: nâu cà phê, xanh biển, hồng, trắng kem. Kích thước: 46 x 36,3 x 11cm. Với kích thước nhỏ gọn, không chiếm diện tích quá lớn. Sản phẩm có độ bền cao, hình t', 'Lợi ích chính\r\n\r\nKhay vệ sinh cho mèo Makar Cat Litter Station chuyên dùng cho mèo con trên dưới 3 tháng tuổi. Hoặc các giống mèo cỡ nhỏ. Kích thước nhỏ giúp mèo đi vệ sinh dễ dàng, không tốn sức. Lối ra khay vệ sinh có thiết kế dạng lưới giúp làm sạch cá'),
(18, 13, 3, 'Nhà vệ sinh cho mèo Makar Luxury Cat Litter Box', 'cat2.png', 30, 19, 'Nhà vệ sinh cho mèo Makar Luxury Cat Litter Box với không gian rộng rãi, thoải mái, tiện nghi. Có nhiều màu sắc để chọn lựa: trắng kem, hồng, cà phê, xanh biển, xám. Kích thước 62 x 46 x 44 cm.', 'Lợi ích chính\r\n\r\nNhà vệ sinh cho mèo Makar Luxury Cat Litter Box có nắp đậy chất lượng cao. Không gian rộng rãi, thông thoáng phù hợp với nhu cầu của mèo. Thiết kế bo tròn các góc, không có cạnh sắc nhọn. Rất an toàn cho mèo và chủ nhân. Màu sắc trang nhã'),
(19, 13, 3, '\r\nNhà vệ sinh cho mèo hình tai mèo Aupet size M', 'cat3.png', 115, 99, 'Nhà vệ sinh cho mèo hình tai mèo Aupet size M phù hợp với những con mèo thích cào bới chậu cát tung tóe ra sàn. Bao gồm mèo ở tất cả các lứa tuổi khác nhau.', 'Lợi ích chính\r\n\r\nNhà vệ sinh cho mèo hình tai mèo Aupet size M được thiết kế riêng cho mèo đi vệ sinh. Với kiểu dáng, màu sắc bắt mắt chất lượng bền, đẹp. Vì thiết kế dạng hộp kín nên bạn yên tâm không lo cát hay sản phẩm vệ sinh bị rơi vãi ra ngoài sàn n'),
(20, 14, 3, 'Nhà cây cho mèo Cat Tree DS706', 'cat6.png', 30, 20, 'Nhà cây cho mèo Cat Tree DS706 hay còn gọi là cat stand, cat condo. Có thể hiểu như một ngôi nhà, một sân chơi, một phòng tập thể hình dành cho mèo yêu tận hưởng những giây phút thư giãn, giải trí. Kích thước 60 x 50 x 182 (cm). Trọng lượng 20 (kg). Màu s', 'Nhà cây cho mèo Cat Tree DS706 được thiết kế như 1 ngôi nhà nhiều tầng. Trên đỉnh các trụ chính được bố trí nhiều ổ đệm, bàn cao để nằm vô cùng êm ái. Trụ cào móng an toàn không gây xước và tổn thương nối với nhau bằng cầu thang tiện lợi. Tạo sự hấp dẫn c'),
(21, 14, 3, 'Nhà cây cho mèo Cat Tree 80334', 'cat7.png', 30, 1, 'Nhà cây cho mèo Cat Tree 80334 hay còn gọi là cat stand, cat condo. Có thể hiểu như một ngôi nhà, một sân chơi, một phòng tập thể hình dành cho Mèo yêu tận hưởng những giây phút thư giãn, giải trí. Kích thước: 90 x 51 x 130 (cm). Trọng lượng: 12 (kg).', 'Nhà cây cho mèo Cat Tree 80334 là món đồ chơi hấp dẫn mèo cưng chơi đùa, nghỉ ngơi. Mèo có thể ngủ 14 tiếng một ngày trong cat tree. Thậm chí chơi đùa không biết mệt mỏi với nhà cây. Hoặc có thể leo lên leo xuống cầu thang như bạn tập trên máy chạy bộ. Vớ'),
(22, 14, 3, 'Nhà cây cho mèo Cat Tree 80039', 'cat8.png', 30, 23, 'Nhà cây cho mèo Cat Tree 80039 hay còn gọi là cat stand, cat condo. Có thể hiểu như một ngôi nhà, một sân chơi, một phòng tập thể hình dành cho Mèo yêu tận hưởng những giây phút thư giãn, giải trí. Kích thước: 81 x 61 x 163 (cm). Trọng lượng: 14 (kg)', 'Nhà cây cho mèo Cat Tree 80039 được thiết kế như 1 ngôi nhà cao tầng. Tạo sự hấp dẫn cho mèo cưng chơi đùa, nghỉ ngơi. Mèo có thể ngủ 14 tiếng một ngày trong cat tree. Thậm chí chơi đùa không biết mệt mỏi với nhà cây. Hoặc có thể leo lên leo xuống như bạn'),
(23, 15, 3, '\r\nĐồ chơi cho mèo SOLEIL Cat Toy Natural Every Day Sisal Ball', 'cat11.png', 4, 98, 'Đồ chơi cho mèo SOLEIL Cat Toy Natural Every Day Sisal Ball là sản phẩm dành cho tất cả giống mèo.', 'Đồ chơi cho mèo Cat Toy Natural Every Day Sisal Ball được sản xuất bởi công ty Soliel với chất liệu bằng cói, len tự nhiên, không gây độc hại cho vật nuôi. Có độ bền rất cao và khả năng đàn hồi tốt. Đồ chơi được thiết kế với nhiều hình dáng khác nhau phục'),
(24, 15, 3, 'Đồ chơi cho mèo SOLEIL Cat Toy Natural Every Day Sisal Ball with Feather', 'cat12.png', 8, 36, 'Đồ chơi cho mèo  Cat Toy Natural Every Day Sisal Ball with Feather là sản phẩm dành cho tất cả giống mèo.', 'Đồ chơi cho mèo Cat Toy Natural Every Day Sisal Ball with Feather được sản xuất bởi công ty Soliel với chất liệu bằng cói, len tự nhiên, không gây độc hại cho vật nuôi. Có độ bền rất cao và khả năng đàn hồi tốt. Đồ chơi được thiết kế với nhiều hình dáng k'),
(25, 15, 3, '\r\nĐồ chơi cho mèo SOLEIL Cat Toy Natural Every Day Sisal Fish with Feather', 'cat13.png', 7, 115, 'Đồ chơi cho mèo SOLEIL Cat Toy Natural Every Day Sisal Fish with Feather là sản phẩm dành cho tất cả giống mèo.', 'Sản phẩm được sản xuất bởi công ty Soliel với chất liệu bằng cói, len tự nhiên, không gây độc hại cho vật nuôi. Có độ bền rất cao và khả năng đàn hồi tốt. Đồ chơi được thiết kế với nhiều hình dáng khác nhau phục vụ nhu cầu giải trí, mài móng cho chú mèo c'),
(26, 15, 3, 'Đồ chơi cho mèo BOBO BO4802', 'cat14.png', 7, 34, 'Đồ chơi cho mèo BOBO BO4802 là sản phẩm dành cho tất cả giống mèo.', 'Đồ chơi cho mèo BOBO BO4802 với chất liệu bằng cói tự nhiên rất an toàn và không gây độc hại. Không những chỉ có tính năng làm đồ chơi, sản phẩm còn giúp mèo của bạn trở nên hoạt bát hơn, năng động hơn. Đồng thời còn có tác dụng để kích thích và định hướn'),
(27, 15, 3, 'Đồ chơi cho mèo bằng cói size XL', 'cat15.png', 8, 555, 'Đồ chơi cho mèo bằng cói size XL là sản phẩm dành cho tất cả giống mèo.', 'Đồ chơi cho mèo bằng cói size XL với chất liệu bằng cói tự nhiên rất an toàn và không gây độc hại. Không những chỉ có tính năng làm đồ chơi. Sản phẩm còn giúp mèo của bạn trở nên hoạt bát hơn, năng động hơn. Đồng thời còn có tác dụng để kích thích và định'),
(28, 15, 3, 'Đồ chơi cho mèo Happy Pet Circle', 'cat16.png', 12, 42, 'Đồ chơi cho mèo Happy Pet Circle được thiết kế dành riêng cho những chú mèo.', 'Đồ chơi cho mèo Happy Pet Circle gồm có khuôn hình tròn bằng nhựa và chuột bông được gắn trên lò xo, với màu sắc vui nhộn khiến mèo cảm thấy yêu thích, năng động hơn\r\nGiúp cho mèo cảm thấy vui vẻ, đỡ nhàm chán khi bị ở trong nhà cả ngày\r\nChúng có thể tự c'),
(29, 16, 3, '\r\nNơ cho chó mèo', 'cat17.png', 6, 42, 'Nơ cho chó mèo với màu sắc tươi sáng và chất liệu dày dặn. Có đến 100 màu sắc mẫu mã để bạn lựa chọn, bạn không thể tìm thấy ở đâu có nhiều màu sắc và chất lượng lại tốt hơn', 'Nơ cho chó mèo chính là thứ mà thú cưng nhà bạn đang cần. Bạn có thể chọn mua vài chiếc để thay đổi cho thú cưng của mình mỗi ngày. Chiếc nơ này sẽ khiến thú cưng của bạn trở nên vô cùng dễ thương và đáng yêu vô cùng. Là một trong những phụ kiện cực kì xi'),
(30, 16, 3, 'Vòng cổ cho chó mèo kèm dây dắt AMBABY PET 1JXS083', 'cat18.png', 12, 0, 'Vòng cổ cho chó mèo kèm dây dắt AMBABY PET 1JXS083 là sản phẩm dùng cho tất cả giống chó và mèo theo từng kích cỡ phù hợp.', 'Màu sắc hài hòa, bắt mắt sẽ làm cho thú cưng trở nên thu hút bởi mọi người\r\n\r\nSản phẩm giúp chó mèo cảm thấy thoải mái và không bị khó chịu khi đeo cho chúng\r\n\r\nThiết kế giúp bạn dễ dàng đeo hoặc tháo mở vòng một cách nhanh chóng'),
(31, 16, 3, '\r\nVòng cổ cho chó mèo kèm dây dắt AMBABY PET 1JXS046', 'cat19.png', 5, 35, 'Vòng cổ cho chó mèo kèm dây dắt AMBABY PET 1JXS046 là sản phẩm dùng cho tất cả giống chó và mèo theo từng kích cỡ phù hợp.', 'Màu sắc hài hòa, bắt mắt sẽ làm cho thú cưng trở nên thu hút bởi mọi người\r\n\r\nSản phẩm giúp chó mèo cảm thấy thoải mái và không bị khó chịu khi đeo cho chúng\r\n\r\nThiết kế giúp bạn dễ dàng đeo hoặc tháo mở vòng một cách nhanh chóng'),
(32, 17, 4, 'S&K Manufacturing Gourd House, Two-Pack, 11\" L X 7.6\" W X 16.4\" H', 'bird.png', 31, 0, 'This house is a welcoming home for purple martins, tree swallows, or blue birds, with various entrances. It easily assembles and is made of UV-protected copolymer plastic.', 'Multi-use gourd for purple martins, blue birds, & tree swallows\r\nNesting compartments feature non-skid texture for better traction\r\nUses a dry-nest drainage system.\r\nCrescent and round openings\r\nLarge oval cleanout and inspection port\r\nUV-protected polypr'),
(33, 17, 4, 'You & Me Parakeet Nest Box', 'bird2.png', 45, 0, 'You & Me Parakeet Nest Box', 'Features front access hole and perch\r\nSturdy hardwood nesting box for parakeets'),
(34, 17, 4, 'You & Me Parakeet Scallop Top Cage', 'bird3.png', 31, 0, 'The You & Me Parakeet Habitat provides a secure, comfortable home for small birds. Includes three doos for easy access to your pet, dishes and clean up, plus two perches, two covered dishes and pull-out tray and removable grate for easy cleaning.', 'Includes two 1/2-inch diameter perches and two covered dishes\r\nWash with warm water and mild cleanser as needed'),
(35, 17, 4, 'You & Me Parakeet Mansard Roof Habitat', 'bird5.png', 31, 0, 'This house is a welcoming home for purple martins, tree swallows, or blue birds, with various entrances. It easily assembles and is made of UV-protected copolymer plastic.', 'Multi-use gourd for purple martins, blue birds, & tree swallows\r\nNesting compartments feature non-skid texture for better traction\r\nUses a dry-nest drainage system.\r\nCrescent and round openings\r\nLarge oval cleanout and inspection port\r\nUV-protected polypr'),
(36, 17, 4, 'You & Me Parakeet Ranch House Cage, Navy', 'bird4.png', 31, 0, 'The You & Me Parakeet Habitat provides a secure, comfortable home for small birds. Includes three doors for easy access to your pet, dishes and clean up, plus two perches, two covered dishes and pull-out tray and removable grate for easy cleaning.', 'Wash with warm water and mild cleanser as needed\r\nIncludes two 1/2-inch diameter perches and two covered dishes'),
(37, 18, 4, 'You & Me Swing with Mirror and Spinner Bird Toy', 'bird6.png', 8, 444, 'You & Me Swing with Mirror and Spinner Bird Toy', 'Fun and exciting shapes and colors to entertain and delight your pet bird\r\nPerfect size and shape to complement your small bird\'s home\r\nDurable and easy to clean plastic construction\r\nBird swing designed with a spinner toy and bird mirror'),
(38, 18, 4, 'You & Me Two-Sided Mirror with Bell Bird Toy', 'bird7.png', 5, 0, 'You & Me Two-Sided Mirror with Bell Bird Toy', 'Mirror with bell in bright colors to entertain and delight your small bird\r\nDurable and easy to clean plastic'),
(39, 18, 4, 'You & Me Bullet Bird Feeding Station, Medium', 'bird8.png', 5, 0, 'The You & Me Bullet Bird Feeding Station is a perfect place to store and provide your pet with food or water. This sleek accessory can snap securely into most vertical wire bird habitats.', 'Bullet Bird Feeding Station from You & Me\r\nFeatures a sleek, bullet-shaped design\r\nAttaches easily with a snap\r\nWorks with most vertical wire habitats.'),
(40, 18, 4, 'Insight Sand Perch Swing', 'bird9.png', 8, 0, 'Perch with varying diameters promotes exercise. Rough texture helps wear your bird\'s nails. Easily attaches to cage ceiling wire.', 'Easily attaches to cage ceiling wire\r\nPerch with varying diameters promotes exercise\r\nRough texture helps wear your bird\'s nails'),
(41, 18, 4, 'You & Me Round Rope Bird Swing, 13\" L X 6.5\" W', 'bird10.png', 4, 0, 'You & Me Round Rope Bird Swing, 13\" L X 6.5\" W', 'Fun bird swing\r\nMade of rope & wood\r\nHelps your bird get exercise'),
(42, 18, 4, 'You & Me 3/4-inch Natural Fir Wood Bird Perch, Medium', 'bird11.png', 4, 0, 'The You & Me Natural Fir Wood Bird Perch lets you add a touch of the wild to your pet\'s habitat. This comfortable place to rest can be paired with a variety of perch sizes and varieties to help support your bird\'s foot health.', 'Natural Fir Wood Bird Perch from You & Me\r\nCan be paired with a range of perch sizes to benefit your bird\'s foot health\r\nEasy to install thanks to the metal bolt and wing nut fastener and washers included'),
(43, 19, 4, 'Higgins Sunburst Gourmet Blend Seed Canary & Finch Bird Food, 2 lbs.', 'bird12.png', 2, 0, 'Higgins Sunburst is the premium gourmet companion bird food that is loaded with natural goodness. Sunburst contains mixed fruits and vegetables, wholesome seeds, grains, nuts, and much more! This all natural blend contains added vitamins, minerals and ami', 'Food and treat all in one\r\nNatural with added vitamins, minerals and amino acids\r\nColors sourced from seeds, spices and vegetables\r\nNo artificial flavors or preservatives\r\nBalanced omega-3 & 6 fatty acids\r\nProtected probiotics to support digestive system '),
(44, 19, 4, 'Higgins inTune Harmony Fruit Extruded Macaw and Cockatoo Bird Food, 3 lbs.', 'bird13.png', 2, 0, 'inTune Harmony for macaws and cockatoos is made with inTune macaw-sized, extruded morsels blended with proper portions of healthy treats, including pineapple, almonds in shell, bananas, dried apricots, apple rings and more. Your pet bird will enjoy the di', 'Food and treat all in one\r\nColors sourced from seeds, spices and vegetables\r\nNo artificial flavors or preservatives\r\nAntioxidant formula enriched with balanced omega-3 & 6 fatty acids\r\nProtected probiotics to support digestive system and immunity\r\nSeedles'),
(45, 19, 4, 'White Mill Gourmet Seed Mixture for Cockatiel, 4.4 lbs.', 'bird14.png', 10, 0, 'PURE gourmet seed mix is specially tailored to your cockatiel and cockatoo. PUUR ingredients include papaya, sunflower seeds, grapes, oregano and egg as well as added prebiotics to support healthy digestion. This balanced composition provides pure enjoyme', 'All natural ingredients for a healthy and happy life\r\nNo artificial ingredients, colors or flavors\r\nAdded minerals & trace elements for extra vitality\r\nMade in The Netherlands'),
(46, 19, 4, 'Sun Seed Crazy Good Cookin\' Jungle Rice Treat for Birds, 16 oz.', 'bird15.png', 3, 0, 'A nutritious, cookable snack for birds featuring delicious jungle-inspired fruits and flavors. Sunseed Crazy Good Cookin\' adds fun and flavorful variety to your companion bird\'s diet. Made with bananas, brown rice, dates, and pistachios, Jungle Rice bring', 'Prepare ahead of time for quick and easy feeding\r\nGreat for birds of all sizes\r\nPerfect morning treat or as a snack to occupy your bird during meal time for the humans'),
(47, 20, 5, 'Aqueon 1.6 Gallon LED Mini Cube Kit', 'fish1.png', 35, 0, 'LED Mini Cube Desktop kit comes with soft touch LED lighting, lid equipped with feeding hole, pet specialty filter cartridge and single plug controls for filter and LED. Elevated pedestal base with 360 degrees of viewing.', '360 Degree viewing with elevated pedestal.\r\nSoft touch LED Lighting with single plug controls for LED and filter.\r\nLid equipped with feeding hole.\r\nComes with filter, cartridges, water care and food samples.'),
(48, 20, 5, 'Imagitarium 1.4 Gallon Betta Aquarium', 'fish2.png', 20, 0, 'The Imagitarium 1.4 Gallon Betta Aquarium is a cube-shaped fish tank with LED lighting featuring 7 dazzling color options you can choose depending on time of day or night. This panoramic aquarium will showcase the natural beauty of your betta.', '7 color selections; amber, aqua, blue, green, purple, red and daylight white\r\nMade of crystal-clear plastic with clarity so good that most think it\'s glass\r\nLid is designed for easy access for feeding and aquarium maintenance\r\nLED light uses 2 AA batterie'),
(49, 20, 5, 'Imagitarium 1.7 Gallon Hexagonal Aquarium', 'fish3.png', 125, 0, 'The Imagitarium Betta Hexagonal Aquarium is a panoramic, acrylic aquarium with built-in multi-color LED lighting options at the press of a button.', 'Compatible with Imagitarium Replacement Mini H Filter Cartridge Pads\r\nIncludes a Power Filter\r\nLED Lighting with 2-hour Setting, 4 -hour setting and a continuous setting'),
(50, 20, 5, 'Imagitarium 2 Gallon Cumberland Tank', 'fish4.png', 80, 0, 'Dive into your love for the aquatic with the Imagitarium Cumberland 2 Gallon Fish Tank. Perfectly sized for beginners and small spaces, the tank?s LED light boasts 7 color options to enhance your viewing pleasure and an internal filtration system to help ', '2 Gallon Cumberland Fish Tank from Imagitarium\r\nLED light comes with 7 dazzling color choices including daylight white, blue, amber, aqua, green, purple, and red\r\nManufactured with impact-resistant plastic for fantastic clarity\r\nIncludes internal power fi'),
(51, 21, 5, 'Imagitarium Bright Green Fern Silk Aquarium Plant', 'fish6.png', 12, 0, 'Natural looking & beautiful. A great addition to your freshwater or saltwater aquarium. Lush, life-like silk plant enhances your aquarium.', 'Enhances aquarium while producing shelter to reduce fish stress\r\nSafe for both freshwater or saltwater environments\r\nAdds interest and natural beauty to your aquatic habitat'),
(52, 21, 5, 'Imagitarium Purple Bunch Silk Aquarium Plant', 'fish7.png', 14, 0, 'Adds interest and natural beauty to your aquatic habitat\r\nEnhances aquarium while producing shelter to reduce fish stress\r\nSafe for both freshwater or saltwater environments\r\nEnhanced design with weighted base', 'Natural looking & beautiful. A great addition to your freshwater or saltwater aquarium. Lush, life-like silk plant enhances your aquarium.'),
(53, 21, 5, 'Imagitarium Silk Fern Blue Aquarium Plant', 'fish8.png', 6, 0, 'Natural looking & beautiful aquarium plant, a great addition to your freshwater or saltwater aquarium. Lush, life-like silk plant enhances your aquarium.', 'Safe for both freshwater or saltwater environments\r\nEnhanced design with weighted base\r\nLarge, background plant covers wires, tubes and heaters'),
(54, 21, 5, 'Imagitarium Purple Cluster Silk Aquarium Plant', 'fish9.png', 12, 0, 'Natural looking & beautiful. A great addition to your freshwater or saltwater aquarium. Lush, life-like silk plant enhances your aquarium.', 'Adds interest and natural beauty to your aquatic habitat\r\nEnhances aquarium while producing shelter to reduce fish stress\r\nSafe for both freshwater or saltwater environments\r\nEnhanced design with weighted base'),
(55, 21, 5, 'Imagitarium Red Fire Silk Aquarium Plant', 'fish10.png', 33, 0, 'Natural looking & beautiful. A great addition to your freshwater or saltwater aquarium. Lush, life-like silk plant enhances your aquarium.', 'Adds interest and natural beauty to your aquatic habitat\r\nEnhances aquarium while producing shelter to reduce fish stress\r\nSafe for both freshwater or saltwater environments\r\nEnhanced design with weighted base'),
(56, 22, 5, 'Imagitarium Aquarium Net for Fish, 10\" x 14\"', 'fish11.png', 6, 0, 'The Imagitarium Aquarium Net for Fish is a reliable and safe way to scoop up and move your finned pets. The gentle mesh on this fish net can assist you whenever you need to clean their habitat or move them into a new tank.', 'Aquarium Net for Fish from Imagitarium\r\nFeatures a soft and dependable weave that can gently scoop up and help relocate pet fish\r\nCovered handle allows for a comfortable and secure grip\r\nIdeal for freshwater or saltwater habitats'),
(57, 22, 5, 'Imagitarium Telescoping Aquarium Net, 3\" Net, 13.25\" Handle', 'fish12.png', 20, 0, 'The Imagitarium Telescoping Aquarium Net reliably and safely catches your fish for transport during cleaning or relocation. The handle expands from 5.5 to 13.25 inches to extend your reach, and works with freshwater and saltwater aquariums.', 'Telescoping Aquarium Net from Imagitarium\r\nHandle expands from 5.5 to 13.25 inches\r\nSafe for freshwater and saltwater aquarium setups\r\nHelps to safely move your fish during water changes or relocation'),
(58, 22, 5, 'Imagitarium Small Muck Magnet Glass Aquarium Scraper', 'fish13.png', 3, 0, 'Imagitarium Small Muck Magnet Glass Aquarium Scraper', 'Slime scraper\r\nFor glass only\r\nGreat to use on saltwater and freshwater tanks'),
(59, 22, 5, 'Imagitarium Floating Magnetic Scraper, Medium', 'fish14.png', 15, 0, 'The Imagitarium Floating Magnetic Scraper provides scratch-free algae maintenance for glass aquariums with a magnetic 2-piece system. The easy-to-use outside piece helps guide the floatable scraper inside so you can keep your habitat clear of algae withou', 'Floating Magnetic Algae Scraper from Imagitarium\r\n2-Piece aquarium maintenance tool\r\nFloating scraper uses a scrubbing magnetic surface to clean algae\r\nSecond piece uses a soft felt to help guide floating scraper\r\nFor glass freshwater or saltwater aquariu'),
(60, 22, 5, 'Aqueon Mini Bow Algae Cleaning Aquarium Magnet, 2.5\" L X 4.5\" W X 7.5\" H, Small', 'fish15.png', 8, 0, 'For Acrylic Desktop Aquariums. The Algae Cleaning Magnet from Aqueon is the easiest solution to effectively remove algae from your acrylic aquarium. The weighted scrubber will not float away.', 'For desktop acrylic aquariums\r\nWeighted scrubber will not float away\r\nUnique design reduces the risk of scratching the aquarium walls\r\nReplacement pads sold separately'),
(61, 23, 6, 'You & Me Small Animal High Rise Tank Topper, 19.25\" L X 9.75\" W X 11.5\" H', 'small1.png', 145, 0, 'The You & Me Home Expander creates double the living space for pets residing in 10-gallon tanks, including rats, mice, hamsters and gerbils.', 'Convenient, fully assembled design\r\nEasy access top door entry'),
(62, 23, 6, 'Midwest Critterville Arcade Hamster Cage, 18.11\" L X 11.41\" W X 21.57\" H', 'small2.png', 60, 0, 'The Critterville Arcade Hamster Home is the perfect multi-level hamster habitat! This fun and unique cage has everything you need to make your hamster feel at home. Each Critterville Arcade comes with an exercise wheel, water bottle, food bowl, circular c', 'Deep base to contain hamster bedding and a removable, durable plastic cover for easy cleaning\r\nConnector pieces included to fit standard play tubes if you want to connect to another hamster habitat or accessory\r\nNo tools needed for assembly\r\nThe Arcade Ha'),
(63, 23, 6, 'YML Blue Large Hamster Cage, 18\" L X 12\" W X 12\" H', 'small3.png', 55, 0, '2 level habitat. Plasic base and a slide, playhouse and water and food bowl.', 'Fun home for hamsters, mice and other small pets\r\nHeavy duty plastic base\r\n17 plastic tubes\r\nColors on accessories may vary'),
(64, 24, 6, 'So Phresh Small Animal Litter Pan, Medium', 'small6.png', 6, 0, 'The SoPhresh Small Animal Litter Pan is a colorful, helpful habitat accessory that can help facilitate potty training hamsters, mice, gerbils and other similar sized pets. Its triangular shape also makes it easy to fit in corners for a more efficient use ', 'Small Animal Litter Pan from SoPhresh\r\nFeatures a high-back wall to help contain scatter\r\nMade from a dependable plastic\r\nSpace-saving design'),
(65, 24, 6, 'Marshall Pet Products Small Animal High Back Litter Pan', 'small7.png', 6, 0, '14\";L X 12\";W X 7\";H. Easy to clean plastic litter pan has high back to contain scatter and a low front for easy access. Fits most large sized cages. Assorted colors - let us choose.', 'Perfect to housebreak your small animal\r\nEasy to clean surface\r\nFits most large size cages\r\nLow front entry'),
(66, 24, 6, 'So Phresh High-Back Small Animal Litter Pan, Large', 'small8.png', 6, 0, 'The SoPhresh High-Back Small Animal Litter Pan is a durable plastic receptacle for your pet\'s bathroom breaks. Thanks to the height of the back wall and depth on this pan, it also helps reduce and contain scatter.', 'High-Back Small Animal Litter Pan from SoPhresh\r\nFeatures a high-back wall and deep pan to help contain scatter\r\nMade from a dependable plastic\r\nGreat for multiple rabbits, ferrets or other small animal pets'),
(67, 24, 6, 'You & Me Skulls Small Animal Hammock', 'small9.png', 6, 0, 'The You & Me Skulls Small Animal Hammock creates more room for play and offers a snuggly retreat where ferrets or small pets can burry themselves in a treasure chest of soft, breathable materials. Featuring carabineer clips that fasten securely into wire ', 'Foldable layout for a stress-free install and transfer\r\nTie together their habitat\'s theme with the matching small animal You & Me Skulls harness, toys and more\r\nSkulls Small Animal Hammock from You & Me\r\nIdeal for ferrets and other small animals\r\nFeature'),
(68, 24, 6, 'You & Me Skulls Small Animal Cuddler Bed', 'small10.png', 6, 0, 'The You & Me Skulls Small Animal Cuddler Bed features ultra-soft plush and padded walls, completing your adventurous critter\'s quest for comfort. Fitted for ferrets, guinea pigs, chinchillas, or other petite pets, this bed is layered with smooth, lightwei', 'Skulls Small Animal Cuddler Bed from You & Me\r\nIdeal for ferrets, guinea pigs, chinchillas, and rats\r\nMade of grey ultra-soft plush and black and white plain-weave fabric printed with a skull-and-crossbones motif\r\nDouble-sided, removable base offers two d'),
(69, 25, 6, 'WARE Willow Branch Ball Chew Toy', 'small11.png', 6, 0, 'Add a naturally fun flavor to playtime! This all natural willow branch chew toy is perfect for tooth trimming and playtime for small pets. This chew toy encourages healthy activity while also alleviating boredom.', 'Wholesome and appealing rabbit treat or guinea pig treat\r\nSatisfies your pet\'s natural chewing instincts\r\nEncourages healthy, playful activity\r\nMade with environmentally friendly material\r\nPerfect for tooth trimming'),
(70, 25, 6, 'Kaytee Apple Orchard Sticks Small Animal Chews', 'small12.png', 10, 0, '10-pack, 3\" L, All-natural wood chews that prevent boredom and help maintain healthy teeth for your pet. Made from real apple trees. Ideal for rabbits, guinea pigs, chinchillas, hamsters, gerbils and other small furry critters.', 'All-natural Kaytee wood chews prevent boredom and help maintain healthy teeth for your small animal pet companion\r\nMade from real apple trees, makes great rabbit treats\r\nCompletely safe to chew, makes great hamster or guinea pig treats\r\nIdeal for rabbits,'),
(71, 25, 6, 'WARE Critter Totter Chew Toy, 8\" L X 3.5\" W', 'small13.png', 20, 0, 'This teeter-totter provides chewing entertainment & offers climbing joy as well. Made with pet safe materials, this fun fitness toy is sure to encourage exercise & activity. Stimulating play enhances your pet\'s life.', 'Promotes stimulating play to enhance your pet\'s life\r\nUSDA-approved food colors\r\nEncourages exercise & activity\r\n100% safe to chew'),
(72, 25, 6, 'You & Me Large Block Chews for Small Animal, 2.19 oz.', 'small14.png', 15, 0, 'The You & Me Block Chews for Small Animal engage your pets love for chewing with colorful wooden details. They also help promote their dental health as they chew.', 'Features colorful letters shapes and characters\r\nSatisfies your small animal\'s natural chewing instincts\r\nColored with vegetable based dye\r\nChewing action helps promote small animal dental health\r\nIdeal for guinea pig, hamster, rabbit, and other small ani'),
(73, 25, 6, 'You & Me Willow Ball Pack Chews', 'small15.png', 8, 0, 'Willow Branch Balls Small Animal Chews are great for hamsters, rabbits, guinea pigs, chinchillas, gerbils, mice or rats. These willow branch balls help keep your small, furry pet\'s teeth trim and healthy. Comes with two 3\" diameter balls and three 1.5\" di', 'Great for hamsters, rabbits & other small animal\r\nHelps keep teeth trim & healthy\r\nMade with pet-safe dye'),
(74, 25, 6, 'You & Me Wood Chew Sticks for Small Animals, 30 g.', 'small16.png', 20, 0, 'The You & Me Wood Chew Sticks for Small Animals are fun and irresistible chew toys designed to encourage your pet\'s natural urge to gnaw. These wood chew sticks work double duty and help promote dental health as they relieve boredom.', 'Wood Chew Sticks for Small Animals from You & Me\r\nSatisfies your small animal\'s natural chewing instincts\r\nColored with vegetable based dye\r\nChewing action helps promote small animal dental health\r\nIdeal for guinea pig, hamster, rabbit, and other small an'),
(75, 26, 7, 'R&J Enterprises Cabin Tank House, 20.75\" L X 12\" W X 15\" H', 'ke1.png', 68, 0, 'Stylish waterproof tank house for 10 gallon aquariums.', 'Waterproof house that accommodates filtration and lighting\r\nPerfect for Fish, Turtles, Mice, Hamsters, Snakes, Reptiles and much more\r\nHides your ugly glass tank frame for a perfect looking house for your pet.\r\nTurning your boring 10 gallon glass tank int'),
(76, 26, 7, 'R&J Enterprises Barn Tank House, 20.75\" L X 12\" W X 15\" H', 'ke2.png', 250, 0, 'Stylish waterproof Tank House cover your pet will enjoy. It is waterproof and accommodates lighting and filtration.', 'Turning your boring 10 gallon glass tanks into a house for any pet\r\nWaterproof house that accommodates filtration and lighting\r\nPerfect for fish, Turtles, Mice, Hamsters, Snakes, Reptiles and much more.\r\nHides your ugly glass tank frame for a perfect look'),
(77, 27, 7, 'Zilla Slimline Desert 50 UVB T8 Fluorescent Fixture', 'ke15.png', 10, 0, '15 Watts, Zilla Slimline Reptile Fixtures offers high-quality fluorescent lighting in a convenient, ready-to-use fixture. Its compact and lightweight design makes it easy to install and suitable for applications where space is limited.', 'Simulates natural daylight and fulfills photo-biological requirements of reptiles\r\nCompact & lightweight\r\nPre-assembled'),
(78, 27, 7, 'Zoo Med Naturalistic Terrarium Hood', 'ke16.png', 8, 0, 'Fits Naturalistic Terrariums. Built-in reflector allows for increased heat & UVB penetration. On/Off switch is conveniently located on back of hood. Different sockets allow for a combination of fluorescent, heat, daylight or nightlight bulbs.', 'Designed to fit Zoo Med\'s Naturalistic Terrariums\r\nBuilt-in reflector allows for increased heat & UVB penetration\r\nOn/Off switch is conveniently located on back of hood\r\nDifferent sockets allow for a combination of fluorescent, heat, daylight or nightligh'),
(79, 27, 7, 'Exo Terra Compact Top/Compact Fluorescent Terrarium Canopy', 'ke17.png', 68, 0, 'The Exo Terra Compact Top Canopy is a compact fluorescent terrarium canopy designed for use with the Exo Terra Glass Terrarium. This easy-to-install canopy accommodates compact fluorescent bulbs or low wattage incandescent bulbs. A combination of differen', 'Fits one or more Exo Terra compact fluorescent or incandescent bulb (maximum 26 W)\r\nWith built-in reflector\r\nEasy to install\r\nSliding rim to mount accessories'),
(80, 27, 7, 'Zilla Mini Heat & UVB Fixture', 'ke18.png', 22, 0, 'The Mini Heat & UVB Fixture is a 3-in-1 solution that combines essential heat, UVB and visible light in a single compact design.', 'The two Mini Bulb sockets accommodate the Zilla Mini Compact Fluorescent Bulbs and Mini Halogen Bulbs\r\nPerfect for desert or tropical environments\r\n3-in-1 Solution that combines essential heat, UVB and visible light in a single fixture\r\nBuilt-in reflector'),
(81, 28, 7, 'Zoo Med Natural Full Cork Round Reptile Hideaway, Medium', 'ke6.png', 12, 0, '7\"; L X 4\"; Diameter, Makes a great natural hiding place. Safe for all reptiles, amphibians and arachnids. Can be easily cut to any desired shape.', 'Great for use as natural hiding places or shelters\r\nSafe for all reptiles, amphibians and arachnids\r\nCan be used as a plant holder when standing upright\r\nCreate a naturalistic forest look in your terrarium'),
(82, 28, 7, 'Zoo Med Mopani Wood Terrarium Accents, Medium', 'ke7.png', 12, 0, 'Smooth surface, textured detail, and unique mottled color adds interest and enrichment to habitats.', 'High density resists rotting in humid enviroments.\r\nIn aquariums, sinks immediately, no weighting down required.\r\nResists rotting'),
(83, 28, 7, 'T-Rex Grapevine Large Bark Log, 23\" L X 9\" W', 'ke8.png', 12, 0, 'This bark log is a perfect natural accent for tropical & desert terrariums. Allows your pet reptile or amphibian a place to climb or they may use it to hide. Offers a great way to enhance your pet\'s habitat.', 'For desert & tropical environments\r\nMade in the USA\r\nNatural accessory\r\nIdeal for reptiles & amphibians'),
(84, 28, 7, 'T-Rex Terra Accents Lichen Sticks', 'ke9.png', 20, 0, 'Assorted Dimensions, A perfect natural accent for tropical & desert terrariums. Offers a great way to enhance your pet\'s habitat. Lichen will not grow in a terrarium setting, but will not die off.', 'Natural accessory\r\nIdeal for reptiles & amphibians\r\nFor desert & tropical environments\r\nMade in the USA'),
(85, 28, 7, 'Exo-Terra Mandarin Jungle Plant, 12\" Length', 'ke10.png', 18, 0, 'Exo-Terra Mandarin Jungle Plant creates natural hiding spots for reptiles and amphibians. They can be used in conjunction with real plants and are extremely easy to clean and care for.', 'Can be used in conjunction with real plants in dry or hot areas of the terrarium\r\nEasy to clean and care for\r\nCreates natural hiding spots for amphibians and reptiles\r\nVibrant green plant is extremely realistic replica of real mandarin plants'),
(86, 28, 7, 'Exo-Terra Silk Ficus Jungle Plant', 'ke11.png', 12, 0, 'Small Exo-Terra Silk Ficus Jungle Plant creates natural hiding spots for reptiles and amphibians. They can be used in conjunction with real plants and are extremely easy to clean and care for.', 'Vibrant green silk plants are extremely realistic replicas of real ficus plants\r\nCan be used in conjunction with real plants in dry or hot areas of the terrarium\r\nEasy to clean and care for\r\nCreates natural hiding spots for amphibians and reptiles'),
(87, 28, 7, 'Zilla Reptile Basking Platform Corner Ramp, Small', 'ke12.png', 12, 0, 'Promote healthy behaviors for reptiles of any size by basking in healthful UV light or burrowing in the cool darkness of a Basking Platform, cold-blooded reptiles instinctively regulate their body temperatures for optimal health.', 'Recreates the look of natural river rock\r\nStairstep design suits large or small reptiles\r\nExterior finish makes thorough cleaning easy'),
(88, 28, 7, 'Zilla Reptile Basking Platform with Ramp, Jumbo', 'ke13.png', 12, 0, '15.5\"; length. Natural-looking, river-rock platform provides the basking area for your aquatic and land animals. Stepped sides allow your pets to easily climb up to the platform. Easy clean, durable poly-resin construction.', 'Easy clean, durable poly-resin construction\r\nNatural-looking, river-rock platform provides a basking area for your aquatic and land animals\r\nStepped sides allow your pets to easily climb up to the platform'),
(89, 28, 7, 'Zilla Floating Basking Turtle Trunk, 12.25\" L, Large', 'ke14.png', 12, 0, 'Freedom and mobility of decor is a key element to creating a naturalistic habitat for your pet. These Basking Platforms are freestanding so they can be placed anywhere within an aquatic environment.', 'Amazing natural look\r\nFloating platform stays at water level\r\nDurable and easy to clean\r\nAble to be positioned anywhere for optimum heat and UVB exposure'),
(90, 9, 2, '\r\nĐệm cho chó mèo hình gấu Bear Cawaii', 'dog4.png', 35, 40, 'Đệm cho chó mèo hình gấu Bear Cawaii êm ái được thiết kế dành cho tất cả các giống chó mèo. Một chiếc ổ nằm ấm áp giúp cún cưng thoải mái và ngủ ngon hơn.', 'Lợi ích chính\r\n\r\nĐệm cho chó mèo hình gấu Bear Cawaii được thiết kế độc đáo dành cho các giống chó mèo vừa và nhỏ. Ổ nệm tạo cảm giác ấm áp vào mùa đông, mát mẻ vào mùa mè. Đệm được sử dụng nguyên liệu vải nhung siêu mềm và êm tạo cảm giác an toàn. Với ki'),
(91, 9, 2, '\r\nỔ đệm cho chó mèo hình quả chuối', 'dog5.png', 65, 325, 'Ổ đệm cho chó mèo hình quả chuối được thiết kế độc đáo dành cho các giống chó mèo vừa và nhỏ. Với hình dáng vô cùng đáng yêu mang tới cho cún cưng, mèo cưng một chiếc giường nằm thoải mái nhất.', 'Lợi ích chính\r\n\r\nỔ đệm cho chó mèo hình quả chuối tạo cảm giác ấm áp vào mùa đông. Đồng thời mát mẻ vào mùa mè. Với chất liệu vải và bông cao cấp. Giống như một chiếc võng nhỏ để những người bạn 4 chân có thể nằm thoải mái ở mọi tư thế. Màu sắc nổi bật tạ'),
(95, 10, 2, '\r\nXích cho chó đai ngực bằng vải dù kèm dây dắt Hand In Hand', 'dog9.png', 42, 325, 'Xích cho chó đai ngực kèm dây dắt chó Hand In Hand là sản phẩm dành cho tất cả giống chó.', 'Lợi ích chính\r\n\r\nXích cho chó đai ngực kèm dây dắt chó Hand In Hand được làm bằng chất liệu 100% nylon\r\n\r\nThiết kế đơn giản mang phong cách cổ điển\r\n\r\nSử dụng xích đai cho pháp kiểm soát tự nhiên và thoải mái cho chó\r\n\r\nXích đai ngực có thể tùy ý điều chỉ'),
(98, 10, 2, 'Vòng cổ cho chó kèm dây dắt Hand In Hand', 'dog10.png', 56, 251, 'Vòng cổ cho chó kèm dây dắt Hand In Hand là bộ sản phẩm được thiết kế cho tất cả giống chó.', 'Lợi ích chính\r\n\r\nVòng cổ cho chó kèm dây dắt Hand In Hand được làm từ sợi Polypropylene\r\n\r\nThiết kế mang phong cách truyền thống và cổ điển nhưng vẫn thời trang cho thú cưng của bạn\r\n\r\nTay nắm và vòng cổ được thiết kế bằng sợi cao su tổng hợp giúp chó tho'),
(99, 12, 2, '\r\nĐồ chơi cho chó hình bóng cao su SOLEIL Rubber Dog Toy Small Jingle Ball', 'dog21.png', 9, 72, 'Đồ chơi cho chó hình bóng cao su SOLEIL Rubber Dog Toy Small Jingle Ball là sản phẩm dành cho tất cả giống chó.', 'Lợi ích chính\r\n\r\nĐồ chơi cho chó hình bóng cao su SOLEIL Rubber Dog Toy Small Jingle Ball được sản xuất với chất liệu bằng cao su cao cấp tự nhiên, không gây độc hại cho chó. Có độ bền cao và khả năng đàn hồi tốt\r\n\r\nSản phẩm đồ chơi cho chó được thiết kế '),
(100, 12, 2, '\r\nĐồ chơi cho chó gặm bằng cao su SOLEIL Rubber Dog Toy Jingle Dumbbell', 'dog22.png', 8, 62, 'Đồ chơi cho chó gặm bằng cao su SOLEIL Rubber Dog Toy Jingle Dumbbell', 'Lợi ích chính\r\n\r\nĐồ chơi cho chó gặm bằng cao su SOLEIL Rubber Dog Toy Jingle Dumbbell được sản xuất với chất liệu bằng cao su cao cấp tự nhiên\r\n\r\nCó độ bền cao và khả năng đàn hồi tốt, không gây độc hại cho chó\r\n\r\nSản phẩm đồ chơi cho chó được thiết kế v'),
(101, 13, 3, '\r\nNhà vệ sinh cho mèo có nắp đậy Aupet Flower Litter Box', 'cat4.png', 15, 40, 'Nhà vệ sinh cho mèo có nắp đậy Aupet Flower Litter Box có nắp đậy. Áp dụng cho các loại cát mèo dạng viên nén mùn cưa, giấy, gỗ, đất. Nhà vệ sinh cho mèo có không gian rộng, phù hợp cho tất cả các giống mèo. Kích thước của 49 x 40 x 42cm. Trọng lượng 2,3k', 'Lợi ích chính\r\n\r\nNhà vệ sinh cho mèo có nắp đậy Aupet Flower Litter Box Tạo sự riêng tư nhưng vẫn thoải mái cho mèo đi vệ sinh. Không làm mèo sợ hãi khi ở trong không gian kín. Chất lượng siêu bền, siêu tiết kiệm. Màu sắc bắt mắt, có tính thẩm mỹ cao. Nắp'),
(102, 13, 3, 'Nhà vệ sinh cho mèo IRIS WNT510', 'cat5.png', 30, 325, 'Nhà vệ sinh cho mèo IRIS WNT510 có nắp đậy. Thương hiệu đến từ Nhật Bản với sản phẩm không mùi không bẩn, kích thước lớn, mèo thoải mái đi vệ sinh. Cửa ra vào rộng rãi, ngăn cát rơi ra ngoài. Chất lượng tốt, siêu bền, bị ném mạnh xuống đất vẫn không bị nứ', 'Lợi ích chính\r\n\r\nNhà vệ sinh cho mèo IRIS WNT510 tạo không gian riêng tư, giúp mèo đi vệ sinh dễ dàng hơn. Hình thức đẹp, hài hòa với không gian ngôi nhà. Tặng kèm xẻng xúc cát và thuốc khử mùi. Tiết kiệm thời gian cho chủ nuôi, giúp bảo vệ môi trường và '),
(103, 14, 3, 'Nhà cây cho mèo Cat Tree 80021', 'cat9.png', 15, 72, 'Nhà cây cho mèo Cat Tree 80021 hay còn gọi là cat stand, cat condo. Có thể hiểu như một ngôi nhà, một sân chơi, một phòng tập thể hình dành cho Mèo yêu tận hưởng những giây phút thư giãn, giải trí.', 'Nhà cây cho mèo Cat Tree 80021 được thiết kế như 1 tòa nhà có đầy đủ nội thất là những món đồ chơi. Tạo sự hấp dẫn cho mèo cưng chơi đùa, nghỉ ngơi. Mèo có thể ngủ 14 tiếng một ngày trong cat tree. Thậm chí chơi đùa không biết mệt mỏi với nhà cây. Hoặc có'),
(104, 14, 3, 'Nhà cây cho mèo Cat Tree 80357', 'cat10.png', 10, 22, 'Nhà cây cho mèo Cat Tree 80357 hay còn gọi là cat stand, cat condo. Có thể hiểu như một ngôi nhà, một sân chơi, một phòng tập thể hình dành cho Mèo yêu tận hưởng những giây phút thư giãn, giải trí. Kích thước: 76 x 62 x 80 (cm). Trọng lượng: 10 (kg).', 'Nhà cây cho mèo Cat Tree 80361 là món đồ chơi hấp dẫn mèo cưng chơi đùa, nghỉ ngơi. Mèo có thể ngủ 14 tiếng một ngày trong cat tree. Thậm chí chơi đùa không biết mệt mỏi với nhà cây. Hoặc có thể leo lên leo xuống như bạn tập trên máy chạy bộ. Với trụ cào '),
(105, 16, 3, 'Quần áo cho chó mèo AMBABY PET 2JXF112', 'cat20.png', 23, 23, 'Quần áo cho chó mèo AMBABY PET 2JXF112 là sản phẩm dành cho cả chó và mèo.', 'Quần áo cho chó mèo AMBABY PET 2JXF112 sẽ làm cho thú cưng trở nên sành điệu và xinh xắn\r\nSản phẩm được thiết kế với chất liệu cotton và gia công tỉ mỉ\r\nKiểu dáng dễ mặc, dễ vận động đem đến sự thoải mái cho chó mèo\r\nCó nhiều kích cỡ cho bạn lựa chọn phù '),
(106, 16, 3, 'Quần áo cho chó mèo AMBABY PET 2JXF166', 'cat21.png', 32, 57, 'Quần áo cho chó mèo AMBABY PET 2JXF166 là sản phẩm dành cho cả chó và mèo.', 'Quần áo cho chó mèo AMBABY PET 2JXF166 sẽ làm cho thú cưng trở nên sành điệu và xinh xắn\r\nSản phẩm được thiết kế với chất liệu cotton và gia công tỉ mỉ\r\nKiểu dáng dễ mặc, dễ vận động đem đến sự thoải mái cho chó mèo\r\nCó nhiều kích cỡ cho bạn lựa chọn phù '),
(107, 19, 4, 'White Mill Gourmet Seed Sticks Papaya & Orange Flavor for Parakeet, 0.13 lbs.', 'bird16.png', 15, 232, 'PURE gourmet seed sticks are specially tailored for parakeets. Your parakeet will enjoy this tasty and healthy treat and will keep your pet active and entertained. These oven baked sticks are richly coated with delicious papaya, orange and egg.', 'Tasty and healthy activity for your bird\r\nNo artificial ingredients, colors or flavors\r\nOven baked\r\nTreat up to 20% of the daily diet\r\nMade in The Netherlands'),
(108, 20, 5, 'Imagitarium 1.3 Gallon Lotus Tank', 'fish5.png', 32, 0, 'Dive into your love for the aquatic with the panoramic Imagitarium Betta Habitat featuring multiple LED light options for added beauty day or night. Designed to maximize views of your Betta and accommodate their unique way of surface breathing, the Imagit', 'Great for beginning aquarium enthusiasts\r\nComes complete with LED light system, Aquarium, Aquarium lid, Removable base and USB cord (2 AA batteries not included)'),
(109, 23, 6, 'Oxbow Timothy Club Timothy Bungalow Hideout, Large', 'small4.png', 32, 0, '100% all-natural Timothy Hay small pet cage accessories are hand-woven to perfection. Hay is so fresh and aromatic, you can actually smell the quality. Oversized, all-grass accessories give your small pet a place to rest and relax while in the comfort of ', '100% all-natural Timothy Hay cage accessories - hideouts, mats & beds\r\nHand selected grass hay is hand-softened and hand-woven\r\nSafe accessories do not have chemicals, wire, or thread');
INSERT INTO `product` (`id`, `id_catalog`, `id_catalog_parent`, `name`, `images`, `price`, `buyed`, `content`, `info`) VALUES
(110, 23, 6, 'Kaytee Multi-Level Exotic Pet Home, 30.5\" L X 18\" W X 30\" H', 'small5.png', 23, 0, 'The perfect home for your chinchilla, rat or exotic pet. The roomy chew-proof wire cage has an easy to clean plastic base that helps keep your pet?s bedding in the cage and not scattered on the floor. Features extra narrow 1/2\" wire spacing, chew proof lo', 'Multi-level cage for an exotic pet\r\nUnique design to ensure added security and durability\r\nFeatures extra narrow 1/2\" wire spacing\r\nChew proof locks'),
(111, 26, 7, 'R&J Enterprises Tiki Hut Tank House, 20.75\" L X 12\" W X 15\" H', 'ke3.png', 23, 0, 'Stylish waterproof Tank House for 10 Gallon Aquariums.', 'Turning boring 10 gallon glass tanks into a house for any pet.\r\nWaterproof house that accommodates filtration and lighting.\r\nPerfect for Fish, Turtles, Mice, Hamsters, snakes, reptiles and much more.\r\nHides your ugly glass tank frame for a perfect looking'),
(112, 26, 7, 'Zilla Aquatic Turtle Aquarium Kit, 20 Liter', 'ke4.png', 32, 0, 'Zilla 20L Aquatic Turtle Kit is a complete kit with heat and UVB which provide essential sources of energy for healthy development of your aquatic turtle.', 'Innovative, compact and energy efficient light fixture\r\nKit includes: 20L Aquarium, Fresh Air Screen Cover, Mini Heat and UVB Light Fixture, Tropical Mini Compact Fluorescent Bulb, Day Blue Mini Halogen Bulb, Basking Platform with Medium Cartridge, Aquati'),
(113, 26, 7, 'Tetra Aquarium Reptile Glass Kit with Two Dome Lamps, 30\" L X 12\" W X 12\" H', 'ke5.png', 32, 0, 'Tetra Aquatic Turtle Deluxe Kit includes the essentials needed to get started with your new turtle. Also great for frogs and newts, this 20-gallon terrarium environment with filter and heating lamps incorporates a basking platform for your pet\'s pleasure.', 'Complete aquarium kit: 20-gallon tank is ideal for aquatic turtles, and this kit includes all the essentials needed for success, including a decorative filter with cartridges, basking platform, heating lamp, boxwood plant mat and screen top.\r\nIncludes wat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `authority` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `authority`) VALUES
(1, 'Văn Tự', 'tuvo1632@gmail.com', '1', 1),
(2, 'Bảo Long', 'longnv@gmail.com', '1', 0),
(3, 'Van Lap', 'a@gmail.com', '1', 1),
(4, 'Lap Vo', 'votu339@gmail.com', '3', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_catalog` (`id_catalog`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `donhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
