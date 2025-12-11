let danhSachPhim = [
  {
    id: 1,
    tenPhim: "Mưa đỏ",
    namPhatHanh: 2025,
    tuoi: "T16",
    thoiLuong: "2 giờ",
    quocGia: "Việt Nam",
    poster: "img/640x396-muado.jpg",
    theLoai: "Phim chiếu rạp",
  },
  {
    id: 2,
    tenPhim: "One Punch Man",
    namPhatHanh: 2023,
    tuoi: "T10",
    thoiLuong: "1.5 giờ",
    quocGia: "Nhật Bản",
    poster: "img/one-punch-man.png",
    theLoai: "Phim hoạt hình",
  },
  {
    id: 3,
    tenPhim: "Tình Cuồng Si",
    namPhatHanh: 2008,
    tuoi: "T13",
    thoiLuong: "2 giờ",
    quocGia: "Thái Lan",
    poster: "img/tinh_cuong_si_poster.png",
    theLoai: "Phim tình cảm",
  },
  {
    id: 4,
    tenPhim: "Thời Tới Cản Không Kịp",
    namPhatHanh: 2022,
    tuoi: "T13",
    thoiLuong: "2 giờ",
    quocGia: "Việt Nam",
    poster: "./img/thoi_toi_can_khong_kip_poster.png",
    theLoai: "Phim chiếu rạp",
  },
  {
    id: 5,
    tenPhim: "Độc Thân Tuổi 30",
    namPhatHanh: 2014,
    tuoi: "T13",
    thoiLuong: "2 giờ",
    quocGia: "Việt Nam",
    poster: "./img/doc_than_tuoi_30_poster.png",
    theLoai: "Phim chiếu rạp",
  },
];
let phimHienTai = danhSachPhim[0];

let banner = document.getElementById("banner");
let banner_infor = document.getElementsByClassName("banner-infor")[0];
function chonPhim(idPhim) {
  for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id == idPhim) {
      banner.src = danhSachPhim[i].poster;
      banner_infor.getElementsByTagName("h2")[0].textContent =
        danhSachPhim[i].tenPhim.toLocaleUpperCase();
      banner_infor.getElementsByTagName("p")[0].textContent =
        danhSachPhim[i].namPhatHanh;
      banner_infor.getElementsByTagName("p")[2].textContent =
        danhSachPhim[i].tuoi;
      banner_infor.getElementsByTagName("p")[4].textContent =
        danhSachPhim[i].quocGia;
    }
  }
}
