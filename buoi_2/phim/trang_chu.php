<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>web FPTplay</title>
  </head>
  <body>
    <header style="background-color: black">
      <div class="thanhtieude">
        <img src="./img/logowebsite4x_1748221195181.png" alt="" />
        <ul style="margin-left: -150px">
          <li><a href="#">Trang chủ</a></li>
          <li><a href="#">Truyền hình</a></li>
          <li><a href="#">Phim bộ</a></li>
          <li><a href="#">V.League</a></li>
          <li><a href="#">Thiếu nhi</a></li>
          <li><a href="#">Xem thêm</a></li>
        </ul>

        <div>
          <!-- <i class="fa fa-search" aria-hidden="true" style="color: white"></i>
          <i class="fa fa-bell" aria-hidden="true" style="color: white"></i> -->
          <div>
            <a href="#">
              <img
                src="./img/Wallet.png"
                style="width: 30px; height: 30px; margin-left: 10px"
                alt=""
              />
              <p style="margin: 16px 10px">Mua gói</p>
            </a>
          </div>
          <a href="#">Đăng nhập</a>
        </div>
      </div>
    </header>
    <main style="background-color: rgb(53, 53, 53)">
      <div class="noidung">
        <div>
          <a><img src="./img/banner_football.jpg" alt="" /></a>
        </div>
        <br />
        <div href="#" class="banner">
          <img id="banner" src="./img/mua-do2-1122.jpeg" />
          <div class="banner-infor">
            <h2>MƯA ĐỎ</h2>
            <div style="font-size: x-large">
              <p>2025</p>
              <p>•</p>
              <p>T16</p>
              <p>•</p>
              <p>Việt Nam</p>
            </div>
          </div>
        </div>
        <br />
        <div href="#">
          <img src="./img/qc.jpg" style="margin-top: 25px" alt="" />
        </div>
      </div>
      <div class="content">
        <div>
          <div class="header_cayphimmoingay header">
            <p>Cày phim mỗi ngày</p>
            <a href="">Xem thêm</a>
          </div>
          <div class="content_cayphimmoingay">
            <div>
              <a href="#"
                ><img
                  onclick="chonPhim(1)"
                  src="./img/350x495-muado.jpg"
                  alt=""
              /></a>
              <p>Mưa Đỏ</p>
            </div>
            <div>
              <a href="#"
                ><img
                  onclick="chonPhim(3)"
                  src="./img/tinh_cuong_si.png"
                  alt=""
              /></a>
              <p>Tình Cuồng Si</p>
            </div>
            <div>
              <a href="#"
                ><img
                  onclick="chonPhim(4)"
                  src="./img/thoi_toi_can_khong_kip.png"
                  alt=""
              /></a>
              <p>Thời Tới Cản Không Kịp</p>
            </div>
            <div>
              <a href="#"><img src="./img/350x495-muado.jpg" alt="" /></a>
              <p>Mưa Đỏ</p>
            </div>
            <div>
              <a href="#"><img src="./img/350x495-muado.jpg" alt="" /></a>
              <p>Mưa Đỏ</p>
            </div>
          </div>
        </div>
        <div>
          <div class="header_moi_ra_mat header">
            <p>Mới ra mắt</p>
          </div>
          <div class="content_moi_ra_mat">
            <div onclick="chonPhim(2)">
              <div href="#"><img src="./img/one-punch-man.png" alt="" /></div>
              <p>One Punch Man</p>
            </div>
            <div>
              <a href="#"
                ><img
                  onclick="chonPhim(5)"
                  src="./img/doc_than_tuoi_30.png"
                  alt=""
              /></a>
              <p>Đọc Thân Tuổi 30</p>
            </div>
            <div>
              <a href="#"><img src="./img/one-punch-man.png" alt="" /></a>
              <p>One Punch Man</p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer style="background-color: rgb(53, 53, 53)">
      <div class="footer">
        <div style="width: 250px">
          <div>
            <img src="./img/logowebsite4x_1748221195181.png" alt="" />
          </div>
          <div>
            <a href="#"
              ><img src="./img/logoSaleNoti.cb85045.png" width="130px" alt=""
            /></a>
          </div>
          <div>
            <a href="#"
              ><img src="./img/_dmca_premi_badge_4.png" width="149px" alt=""
            /></a>
          </div>
        </div>
        <div style="width: 190px">
          <p>Về FPT Play</p>
          <a href="#">Giới thiệu</a> <br />
          <a href="#">Các gói dịch vụ</a> <br />
          <a href="#">Liên hệ</a> <br />
          <a href="#">Trung tâm hỗ trợ</a> <br />
          <a href="#">Thông tin</a> <br />
        </div>
        <div style="width: 170px">
          <p>Dịch vụ</p>
          <a href="#">Gói data</a> <br />
          <a href="#">Quảng cáo</a> <br />
          <a href="#">Mua gói</a> <br />
          <a href="#">Bảo hành</a> <br />
        </div>
        <div style="width: 190px">
          <p>Quy định</p>
          <a href="#">Điều khoản sử dụng</a> <br />
          <a href="#">Chính sách thanh toán</a> <br />
          <a href="#">Chính sách bảo mật thông tin dữ liệu</a> <br />
          <a href="#">Cam kết của FPT Telecom</a> <br />
        </div>
        <div>
          <p><i class="fa fa-phone" aria-hidden="true"></i> 19006600</p>
          <p>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            hotrofptplay@fpt.com
          </p>
          <p>Theo dõi chúng tôi trên:</p>
          <a href="#" style="margin-right: 15px"
            ><i class="fa fa-facebook-square" aria-hidden="true"></i
          ></a>
          <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="footer">
        <p>
          Công ty Cổ phần Viễn Thông FPT - Người đại diện: Ông Hoàng Việt Anh.
          Trụ sở: Tầng 2, Tòa nhà FPT Cầu Giấy, Số 17 Phố Duy Tân, Phường Dịch
          Vọng Hậu, Quận Cầu Giấy, TP.Hà Nội
        </p>
      </div>
    </footer>

    <script src="main.js"></script>
  </body>
</html>
