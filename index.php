<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--300 giáo viên nước ngoài có chứng chỉ quốc tế-->
<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <h2 class="home__title uk-h2 uk-text-center"><span class="uk-border-pill" style="background: #B3FFCD;">300 giáo viên nước ngoài</span> có chứng chỉ quốc tế</h2>
        <div class="item__16 home__txt uk-text-center">Quy trình tuyển dụng chặt chẽ với chỉ 5% ứng viên được chọn. Chip Chip tự hào có đội ngũ giáo viên nước <br class="uk-visible@m"> ngoài giàu kinh nghiệm, sẵn sàng giúp các con nhanh tiến bộ tiếng Anh giao tiếp</div>
        <div class="uk-text-center item__24-16">
            <button class="uk-button home__form__btn home__form__btn--c1 uk-button-primary uk-border-pill">Tìm hiểu thêm</button>
        </div>
    </div>
    <div class="item__36-24">
        <div class="slider__container">
            <div class="slider__container__wrapper c1">
                <div class="uk-grid-32-m uk-grid-16 uk-flex-nowrap" style="width: max-content" uk-grid>
                    <?php
                    $data1 = array(
                        'images/21.png',
                        'images/22.png',
                        'images/23.png',
                        'images/24.png',
                        'images/25.png',
                        'images/26.png',
                        'images/27.png',
                        'images/28.png',
                        'images/21.png',
                        'images/22.png',
                        'images/23.png',
                        'images/24.png',
                        'images/25.png',
                        'images/26.png',
                        'images/27.png',
                        'images/28.png',
                    );
                    foreach ($data1 as $value): ?>
                    <div>
                        <div class="home__giaovien__coverImg uk-cover-container uk-border-rounded">
                            <img src="<?= $value ?>" alt="" uk-cover="">
                            <canvas class="uk-visible@m" width="256" height="160"></canvas>
                            <canvas class="uk-hidden@m" width="161" height="100"></canvas>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="slider__container item__22-8">
            <div class="slider__container__wrapper c2">
                <div class="uk-grid-32-m uk-grid-16 uk-flex-nowrap" style="width: max-content" uk-grid>
                    <?php
                    $data2 = array(
                        'images/28.png',
                        'images/27.png',
                        'images/26.png',
                        'images/25.png',
                        'images/24.png',
                        'images/23.png',
                        'images/22.png',
                        'images/21.png',
                        'images/28.png',
                        'images/27.png',
                        'images/26.png',
                        'images/25.png',
                        'images/24.png',
                        'images/23.png',
                        'images/22.png',
                        'images/21.png',
                    );
                    foreach ($data2 as $value): ?>
                        <div>
                            <div class="home__giaovien__coverImg uk-cover-container uk-border-rounded">
                                <img src="<?= $value ?>" alt="" uk-cover="">
                                <canvas class="uk-visible@m" width="256" height="160"></canvas>
                                <canvas class="uk-hidden@m" width="161" height="100"></canvas>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="slider__container item__22-8 uk-hidden@m">
            <div class="slider__container__wrapper c1">
                <div class="uk-grid-32-m uk-grid-16 uk-flex-nowrap" style="width: max-content" uk-grid>
                    <?php
                    $data1 = array(
                        'images/21.png',
                        'images/22.png',
                        'images/23.png',
                        'images/24.png',
                        'images/25.png',
                        'images/26.png',
                        'images/27.png',
                        'images/28.png',
                        'images/21.png',
                        'images/22.png',
                        'images/23.png',
                        'images/24.png',
                        'images/25.png',
                        'images/26.png',
                        'images/27.png',
                        'images/28.png',
                    );
                    foreach ($data1 as $value): ?>
                        <div>
                            <div class="home__giaovien__coverImg uk-cover-container uk-border-rounded">
                                <img src="<?= $value ?>" alt="" uk-cover="">
                                <canvas class="uk-visible@m" width="256" height="160"></canvas>
                                <canvas class="uk-hidden@m" width="161" height="100"></canvas>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/300 giáo viên nước ngoài có chứng chỉ quốc tế-->

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-card uk-card-body uk-background-muted">

        </div>
    </div>
</div>

<!--Đăng ký lớp nhóm ngay hôm nay với chỉ 50.000đ/buổi học-->
<div class="uk-section uk-section-primary home__bgGreen">
    <div class="uk-container">
        <h2 class="home__title uk-h2 uk-text-center">Đăng ký lớp nhóm ngay hôm nay với chỉ 50.000đ/buổi học</h2>
        <div class="item__16 home__txt uk-text-center">Vui lòng để lại thông tin, Chip Chip sẽ liên hệ lại tư vấn chương trình học trong thời gian sớm nhất</div>
        <form class="uk-grid-8 home__form uk-flex-center item__32-24" uk-grid>
            <div class="uk-width-auto@s">
                <input class="uk-input home__form__input uk-form-width-large uk-form-large uk-border-pill" type="text" placeholder="Nhập số điện thoại" aria-label="100">
            </div>
            <div class="uk-width-auto@s">
                <button class="uk-button home__form__btn uk-width uk-button-primary uk-button-large uk-border-pill">Đăng ký tư vấn</button>
            </div>
        </form>
    </div>
</div>
<!--/Đăng ký lớp nhóm ngay hôm nay với chỉ 50.000đ/buổi học-->





<!--Câu hỏi thường gặp-->
<div class="uk-section">
    <div class="uk-container uk-container-xsmall">
        <h2 class="home__title uk-h2 uk-text-center">Câu hỏi thường gặp</h2>
        <ul class="home__accordion item__48-24" uk-accordion>
            <li class="home__accordion__li uk-open">
                <a class="uk-accordion-title home__accordion__title" href="#">Chip Chip là gì?</a>
                <div class="uk-accordion-content home__accordion__content">
                    <p>Chip Chip là nền tảng học tiếng Anh trực tuyến dành cho trẻ em từ 5-12 tuổi. Với sứ mệnh giúp hàng triệu trẻ em Việt Nam có thể sử dụng tiếng Anh như một ngôn ngữ thứ Hai, Chip Chip nỗ lực tạo ra một môi trường tương tác hoàn toàn bằng tiếng Anh với những giáo viên nước ngoài giỏi, xây dựng chương trình học tập trung vào giúp các con khơi gợi niềm yêu thích tiếng Anh, tự tin sử dụng tiếng Anh để giao tiếp thành thạo và phát âm giọng chuẩn bản xứ.</p>
                </div>
            </li>
            <li class="home__accordion__li">
                <a class="uk-accordion-title home__accordion__title" href="#">Học tại Chip Chip như thế nào?</a>
                <div class="uk-accordion-content home__accordion__content">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                </div>
            </li>
            <li class="home__accordion__li">
                <a class="uk-accordion-title home__accordion__title" href="#">Giáo viên Chip Chip là người nước nào?</a>
                <div class="uk-accordion-content home__accordion__content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                </div>
            </li>
            <li class="home__accordion__li">
                <a class="uk-accordion-title home__accordion__title" href="#">Tại sao tôi nên cho con học với giáo viên Chip Chip thay vì các trung tâm Online khác?</a>
                <div class="uk-accordion-content home__accordion__content">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                </div>
            </li>
            <li class="home__accordion__li">
                <a class="uk-accordion-title home__accordion__title" href="#">Mỗi tuần học mấy buổi?</a>
                <div class="uk-accordion-content home__accordion__content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                </div>
            </li>
            <li class="home__accordion__li">
                <a class="uk-accordion-title home__accordion__title" href="#">Thời gian học bao lâu?</a>
                <div class="uk-accordion-content home__accordion__content">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--/Câu hỏi thường gặp-->

<footer class="uk-section-xsmall uk-section-muted">
    <div class="uk-container">
        <div class="uk-grid-16" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-flex footer__flex">
                    <div class="footer__txt">Hotline: 1900 066 818</div>
                    <div class="footer__txt">Tầng 9, N2, 210 Lê Trọng Tấn, toà nhà ACCI, 210 Lê Trọng Tấn, Thanh Xuân, Hà Nội</div>
                </div>
            </div>
            <div class="uk-width-auto@m">
                <div class="footer__txt1">Bản quyền thuộc về Công ty cổ phần Công Nghệ Giáo Dục Chip Chip</div>
            </div>
        </div>
    </div>
</footer>

<?php require "template-parts/layouts/footer.php"; ?>