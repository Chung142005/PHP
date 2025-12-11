-- 1. thể loại
--     - id int primary key
--     - ten_the_loai varchar(50)
-- 2. người dùng
--     - id int
--     - ten_dang_nhap varchar(50)
--     - matKhau varchar(50)
--     - ho_ten varchar(50)
--     - email varchar(50)
--     - sdt varchar(10)
--     - vai_tro_id int 
--     - ngay_sinh datetime
-- 3. vai_tro
--     - id int
--     - ten_vai_tro varchar(20)
-- 4. phim
--     - id int primary key
--     - ten_phim varchar
--     - dao_dien_id int
--     - nam_phat_hanh int
--     - poster varchar
--     - quoc_gia_id int
--     - so_tap int
--     - trailer varchar
--     - mo_ta text
-- 5. phim_dien_vien
--     - id int
--     - phim_id int
--     - dien_vien_id int
-- 6. phim_the_loai
--     - id int
--     - phim_id int
--     - the_loai_id int
-- 7. quốc gia
--     -id int
--     -ten_quoc_gia varchar
-- 5. Tập phim
--     - id int
--     - so_tap int
--     - tieu_de varchar
--     - phim_id int
--     - thoiLuong float 
--     - trailer varchar





CREATE DATABASE IF NOT EXISTS quan_ly_web_xem_phim
USE quan_ly_web_xem_phim

CREATE TABLE IF NOT EXISTS the_loai(
    id int PRIMARY KEY,
    ten_the_loai varchar(50)
    );
CREATE TABLE IF NOT EXISTS vai_tro(
    id int PRIMARY KEY,
	ten_vai_tro varchar(20)
    );
CREATE TABLE IF NOT EXISTS nguoi_dung(
    id int PRIMARY KEY,
    ten_dang_nhap varchar(50),
    matKhau varchar(50),
    ho_ten varchar(50),
	email varchar(50),
	sdt varchar(10),
	vai_tro_id int ,
	ngay_sinh datetime,
    FOREIGN KEY (vai_tro_id) REFERENCES vai_tro(id)
    );
CREATE TABLE IF NOT EXISTS phim_dien_vien(
	id int PRIMARY KEY,
	phim_id int,
	dien_vien_id int
    );
CREATE TABLE IF NOT EXISTS quoc_gia(
    id int PRIMARY KEY,
	ten_quoc_gia varchar(25)
    );
CREATE TABLE IF NOT EXISTS phim(
    id int primary key,
	ten_phim varchar(100),
	dao_dien_id int,
    dien_vien_id int,
	nam_phat_hanh int,
	poster varchar(200),
	quoc_gia_id int,
	so_tap int,
	trailer varchar(200),
	mo_ta text,
    FOREIGN KEY (quoc_gia_id) REFERENCES quoc_gia(id)
    );

CREATE TABLE IF NOT EXISTS phim_the_loai(
    id int,
	phim_id int,
	the_loai_id int,
    FOREIGN KEY (the_loai_id) REFERENCES the_loai(id),
    FOREIGN KEY (phim_id) REFERENCES phim(id)
    );

CREATE TABLE IF NOT EXISTS tap_phim(
    id int,
	so_tap int,
	tieu_de varchar(200),
	phim_id int,
	thoiLuong float, 
	trailer varchar(200),
    FOREIGN KEY (phim_id) REFERENCES phim(id)
    );

-- chèn dữ liệu
INSERT IGNORE INTO the_loai(id, ten_the_loai) VALUES (1, "hoạt hình"), (2, "kinh dị"),(3, "ngôn tình"),(4, "hài"),
(5, "khoa học viễn tưởng"), (6, "chiến tranh"),(7,"tình cảm gia đình"),(8,"hành động"),(9,"cổ trang"),(10, "thể thao"),
(11,"phiêu lưu"),(12,"trinh thám");
SELECT * FROM the_loai;

INSERT IGNORE INTO vai_tro(id, ten_vai_tro) VALUES (1, "user"),(2,"diễn viên"),(3,"đạo diễn"),(4,"biên kịch");
SELECT * FROM vai_tro;

INSERT IGNORE INTO nguoi_dung(id, ten_dang_nhap, matKhau,ho_ten, email, sdt, vai_tro_id, ngay_sinh)
VALUES (1,"ten_dang_nhap_1", "0001", "nguyễn văn 1","nguyenvan1@gmail.com", "012341",1, "2005-01-01"),
(2,"ten_dang_nhap_2", "0002", "nguyễn văn 2","nguyenvan2@gmail.com", "012342",1, "2005-01-01"),
(3,"ten_dang_nhap_3", "0003", "nguyễn văn 3","nguyenvan3@gmail.com", "012343",1, "2005-02-01"),
(4,"ten_dang_nhap_4", "0004", "nguyễn văn 4","nguyenvan4@gmail.com", "012344",1, "2005-01-02"),
(5, "ten_dang_nhap_5", "0005", "nguyen van 5", "nguyenvan5@gmail.com", "012345", 1, "2005-01-01"),
(6, "ten_dang_nhap_6", "0006", "nguyen van 6", "nguyenvan6@gmail.com", "012346", 1, "2005-01-01"),
(7, "ten_dang_nhap_7", "0007", "nguyen van 7", "nguyenvan7@gmail.com", "012347", 1, "2005-01-01"),
(8, "ten_dang_nhap_8", "0008", "nguyen van 8", "nguyenvan8@gmail.com", "012348", 1, "2005-01-01"),
(9, "ten_dang_nhap_9", "0009", "nguyen van 9", "nguyenvan9@gmail.com", "012349", 1, "2005-01-01"),
(10, "ten_dang_nhap_10", "00010", "nguyen van 10", "nguyenvan10@gmail.com", "0123410", 1, "2005-01-01"),
(11, "ten_dang_nhap_11", "00011", "nguyen van 11", "nguyenvan11@gmail.com", "0123411", 1, "2005-01-01"),
(12, "ten_dang_nhap_12", "00012", "nguyen van 12", "nguyenvan12@gmail.com", "0123412", 1, "2005-01-01"),
(13, "ten_dang_nhap_13", "00013", "nguyen van 13", "nguyenvan13@gmail.com", "0123413", 1, "2005-01-01"),
(14, "ten_dang_nhap_14", "00014", "nguyen van 14", "nguyenvan14@gmail.com", "0123414", 1, "2005-01-01"),
(15, "ten_dang_nhap_15", "00015", "nguyen van 15", "nguyenvan15@gmail.com", "0123415", 1, "2005-01-01"),
(16, "ten_dang_nhap_16", "00016", "nguyen van 16", "nguyenvan16@gmail.com", "0123416", 1, "2005-01-01"),
(17, "ten_dang_nhap_17", "00017", "nguyen van 17", "nguyenvan17@gmail.com", "0123417", 1, "2005-01-01"),
(18, "ten_dang_nhap_18", "00018", "nguyen van 18", "nguyenvan18@gmail.com", "0123418", 1, "2005-01-01"),
(19, "ten_dang_nhap_19", "00019", "nguyen van 19", "nguyenvan19@gmail.com", "0123419", 1, "2005-01-01"),
(20, "ten_dang_nhap_20", "00020", "nguyen van 20", "nguyenvan20@gmail.com", "0123420", 1, "2005-01-01"),
(21, "ten_dang_nhap_21", "00021", "nguyen van 21", "nguyenvan21@gmail.com", "0123421", 1, "2005-01-01"),
(22, "ten_dang_nhap_22", "00022", "nguyen van 22", "nguyenvan22@gmail.com", "0123422", 1, "2005-01-01"),
(23, "ten_dang_nhap_23", "00023", "nguyen van 23", "nguyenvan23@gmail.com", "0123423", 1, "2005-01-01"),
(24, "ten_dang_nhap_24", "00024", "nguyen van 24", "nguyenvan24@gmail.com", "0123424", 1, "2005-01-01"),
(25, "ten_dang_nhap_25", "00025", "nguyen van 25", "nguyenvan25@gmail.com", "0123425", 1, "2005-01-01"),
(26, "ten_dang_nhap_26", "00026", "nguyen van 26", "nguyenvan26@gmail.com", "0123426", 1, "2005-01-01"),
(27, "ten_dang_nhap_27", "00027", "nguyen van 27", "nguyenvan27@gmail.com", "0123427", 1, "2005-01-01"),
(28, "ten_dang_nhap_28", "00028", "nguyen van 28", "nguyenvan28@gmail.com", "0123428", 1, "2005-01-01"),
(29, "ten_dang_nhap_29", "00029", "nguyen van 29", "nguyenvan29@gmail.com", "0123429", 1, "2005-01-01"),
(30, "ten_dang_nhap_30", "00030", "nguyen van 30", "nguyenvan30@gmail.com", "0123430", 1, "2005-01-01");
SELECT * FROM nguoi_dung;

INSERT IGNORE INTO phim_dien_vien(id, phim_id,dien_vien_id) VALUES
(1, 1, 5),(2, 5, 2),(3, 2, 8),(4, 3, 3),(5, 4, 1),(6, 7, 4),(7, 11, 9),(8, 15, 7),(9, 16, 15),(10, 9, 12),(11, 17, 13),(12, 19, 16),(13, 22, 17),(14, 21, 14),(15, 20, 20);
SELECT * FROM phim_dien_vien;

INSERT IGNORE INTO quoc_gia(id, ten_quoc_gia) VALUES
(1,"Việt Nam"),(2,"Hàn Quốc"),(3,"Trung Quốc"),(4,"Nhật Bản"),(5,"Mỹ"),(6,"Thái Lan"),(7,"Singapore"),(8,"Anh"),(9,"Ấn Độ"),(10,"Pháp");
SELECT * FROM quoc_gia;

INSERT IGNORE INTO phim(id, ten_phim, dao_dien_id, dien_vien_id, nam_phat_hanh, poster, quoc_gia_id, so_tap, trailer, mo_ta)
VALUES (1,"ten_phim_1",1,1,2021,"link_poster_1", 1, 30, "link_trailer_1","mo_ta_1"),
(2,"ten_phim_2",1,5,2021,"link_poster_2", 1, 30, "link_trailer_2","mo_ta_2"),
(3,"ten_phim_3",2,7,2021,"link_poster_3", 1, 30, "link_trailer_3","mo_ta_3"),
(4,"ten_phim_4",8,1,2021,"link_poster_4", 1, 30, "link_trailer_4","mo_ta_4"),
(5,"ten_phim_5",5,4,2021,"link_poster_5", 1, 30, "link_trailer_5","mo_ta_5"),
(6,"ten_phim_6",7,2,2021,"link_poster_6", 1, 30, "link_trailer_6","mo_ta_6"),
(7,"ten_phim_7",22,3,2021,"link_poster_7", 1, 30, "link_trailer_7","mo_ta_7"),
(8,"ten_phim_8",15,5,2021,"link_poster_8", 1, 30, "link_trailer_8","mo_ta_8"),
(9,"ten_phim_9",7,9,2021,"link_poster_9", 1, 30, "link_trailer_9","mo_ta_9"),
(10,"ten_phim_10",5,10,2021,"link_poster_10", 1, 30, "link_trailer_10","mo_ta_10"),
(11,"ten_phim_11",7,12,2021,"link_poster_11", 1, 30, "link_trailer_11","mo_ta_11"),
(12,"ten_phim_12",12,15,2021,"link_poster_12", 1, 30, "link_trailer_12","mo_ta_12"),
(13,"ten_phim_13",14,11,2021,"link_poster_13", 1, 30, "link_trailer_13","mo_ta_13"),
(14,"ten_phim_14",22,13,2021,"link_poster_14", 1, 30, "link_trailer_14","mo_ta_14"),
(15,"ten_phim_15",3,14,2021,"link_poster_15", 1, 30, "link_trailer_15","mo_ta_15"),
(16,"ten_phim_16",8,18,2021,"link_poster_16", 1, 30, "link_trailer_16","mo_ta_16"),
(17,"ten_phim_17",9,17,2021,"link_poster_17", 1, 30, "link_trailer_17","mo_ta_17"),
(18,"ten_phim_18",6,15,2021,"link_poster_18", 1, 30, "link_trailer_18","mo_ta_18"),
(19,"ten_phim_19",23,12,2021,"link_poster_19", 1, 30, "link_trailer_19","mo_ta_19"),
(20,"ten_phim_20",30,16,2021,"link_poster_20", 1, 30, "link_trailer_20","mo_ta_20"),
(21,"ten_phim_21",24,25,2021,"link_poster_21", 1, 30, "link_trailer_21","mo_ta_21"),
(22,"ten_phim_22",25,22,2021,"link_poster_22", 1, 30, "link_trailer_22","mo_ta_22"),
(23,"ten_phim_23",28,20,2021,"link_poster_23", 1, 30, "link_trailer_23","mo_ta_23"),
(24,"ten_phim_24",29,26,2021,"link_poster_24", 1, 30, "link_trailer_24","mo_ta_24"),
(25,"ten_phim_25",26,30,2021,"link_poster_25", 1, 30, "link_trailer_25","mo_ta_25"),
(26,"ten_phim_26",24,2,2021,"link_poster_26", 1, 30, "link_trailer_26","mo_ta_26"),
(27,"ten_phim_27",21,1,2021,"link_poster_27", 1, 30, "link_trailer_27","mo_ta_27"),
(28,"ten_phim_28",19,1,2021,"link_poster_28", 1, 30, "link_trailer_28","mo_ta_28"),
(29,"ten_phim_29",15,1,2021,"link_poster_29", 1, 30, "link_trailer_29","mo_ta_29"),
(30,"ten_phim_30",17,1,2021,"link_poster_30", 1, 30, "link_trailer_30","mo_ta_30");
SELECT * FROM phim;

INSERT IGNORE INTO phim_the_loai(id, phim_id, the_loai_id)
VALUES (1, 19, 1),(2, 17, 8),(3, 4, 7),(4, 15, 4),(5, 26, 12),(6, 25, 6),(7, 17, 3),(8, 20, 10),(9, 19, 10),(10, 15, 11),(11, 28, 6),(12, 14, 6);
SELECT * FROM phim_the_loai;

INSERT IGNORE INTO tap_phim(id, so_tap, tieu_de, phim_id, thoiLuong, trailer)
VALUES (1, 30, "tieu_de_1", 1, 1.5,"link_trailer_1"),
(2, 30, "tieu_de_2", 1, 1.5,"link_trailer_2"),
(3, 30, "tieu_de_3", 1, 1.5,"link_trailer_3"),
(4, 30, "tieu_de_4", 1, 1.5,"link_trailer_4"),
(5, 30, "tieu_de_5", 1, 1.5,"link_trailer_5"),
(6, 30, "tieu_de_6", 1, 1.5,"link_trailer_6"),
(7, 30, "tieu_de_7", 1, 1.5,"link_trailer_7"),
(8, 30, "tieu_de_8", 1, 1.5,"link_trailer_8"),
(9, 30, "tieu_de_9", 1, 1.5,"link_trailer_9"),
(10, 30, "tieu_de_10", 1, 1.5,"link_trailer_10"),
(11, 30, "tieu_de_11", 1, 1.5,"link_trailer_11"),
(12, 30, "tieu_de_12", 1, 1.5,"link_trailer_12");
SELECT * FROM tap_phim;

