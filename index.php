<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-section-small uk-height-viewport">
    <div class="uk-container">

    </div>
</div>
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
                        'images/photo.jpg',
                        'images/21.png',
                        'images/light.jpg',
                        'images/22.png',
                        'images/lemanhhai_anhthe.jpg',
                        'images/23.png',
                        'images/dark.jpg',
                        'images/24.png',
                        'images/slider1.jpeg',
                        'images/25.png',
                        'images/slider2.jpeg',
                        'images/26.png',
                        'images/slider4.jpeg',
                        'images/27.png',
                        'images/slider3.jpeg',
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
        <div class="slider__container item__32-16">
            <div class="slider__container__wrapper c2">
                <div class="uk-grid-32-m uk-grid-16 uk-flex-nowrap" style="width: max-content" uk-grid>
                    <?php
                    $data2 = array(
                        'images/28.png',
                        'images/noimage.jpg',
                        'images/27.png',
                        'images/noimage.jpg',
                        'images/26.png',
                        'images/noimage.jpg',
                        'images/25.png',
                        'images/noimage.jpg',
                        'images/24.png',
                        'images/noimage.jpg',
                        'images/23.png',
                        'images/photo.jpg',
                        'images/22.png',
                        'images/light.jpg',
                        'images/21.png',
                        'images/dark.jpg',
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
        <div class="slider__container item__32-16 uk-hidden@m">
            <div class="slider__container__wrapper c3">
                <div class="uk-grid-32-m uk-grid-16 uk-flex-nowrap" style="width: max-content" uk-grid>
                    <?php foreach ($data1 as $value): ?>
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
        <!--Chương trình tiếng Anh vừa thúc đẩy giao tiếp vừa giúp tăng điểm số-->
        <div class="home__chuongtrinh__card uk-card">
            <h2 class="home__title uk-h2 uk-text-center">Chương trình tiếng Anh <span class="uk-border-pill" style="background: #F8BAD7;">vừa thúc đẩy giao tiếp vừa giúp tăng điểm số</span></h2>
            <div class="uk-child-width-1-2@m item__24" uk-grid>
                <div>
                    <div class="uk-card-body" uk-toggle="cls: uk-card-body; mode: media; media: @m">
                        <div class="uk-grid-32-m uk-grid-small uk-child-width" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'img' => 'images/img1.png',
                                    'txt1' => 'Nội dung tương tác, hình ảnh bắt mắt',
                                    'txt2' => 'Bài giảng sinh động, đúng với khả năng của trẻ, giúp con hiểu bài nhanh, tạo sự hứng thú xuyên suốt buổi học',
                                ),
                                array(
                                    'img' => 'images/img2.png',
                                    'txt1' => 'Giúp con đạt điểm cao môn tiếng Anh ở trường',
                                    'txt2' => 'Nội dung chương trình được thiết kế bám theo khung kiến thức trong Sách Giáo Khoa tiếng Anh của Bộ Giáo dục và Đào tạo, giúp củng cố thêm vốn từ vựng và ngữ pháp của con, tự tin đạt điểm cao trong các kỳ thi tiếng Anh tại trường',
                                ),
                                array(
                                    'img' => 'images/img3.png',
                                    'txt1' => 'Bài tập về nhà thú vị, không nhàm chán',
                                    'txt2' => 'Con vừa học vừa chơi mà vẫn nắm chắc kiến thức tiếng Anh ở trường nhờ hệ thống bài tập về nhà được thiết kế dưới dạng game tương tác vui nhộn',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                            <div>
                                <div class="uk-grid-16-m uk-grid-8" uk-grid>
                                    <div class="uk-width-auto@s">
                                        <div class="home__chuongtrinh__card__coverImg uk-cover-container uk-background-default uk-border-circle">
                                            <img class="uk-position-center" src="<?= $v['img'] ?>" alt="">
                                            <canvas width="60" height="60"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="home__chuongtrinh__card__title"><?= $v['txt1'] ?></div>
                                        <div class="item__8 home__chuongtrinh__card__txt"><?= $v['txt2'] ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div>
                    <img class="uk-width uk-visible@m" src="images/Group17.png" alt="">
                    <img class="uk-width uk-hidden@m" src="images/Group17-2.png" alt="">
                </div>
            </div>
        </div>
        <!--/Chương trình tiếng Anh vừa thúc đẩy giao tiếp vừa giúp tăng điểm số-->
    </div>
    <div class="uk-container item__64-32">
        <h2 class="home__title uk-h2 uk-text-center">Tự hào giúp hàng ngàn trẻ em <span class="uk-border-pill" style="background: #A5E4F8;">nói tiếng Anh tự tin, phát âm chuẩn</span></h2>
    </div>
    <div class="uk-container home__hocsinh__container uk-container-expand-right item__48-24">
        <div class="uk-overflow-auto home__hocsinh__overflow">
            <div class="uk-grid-32-m uk-flex-nowrap" style="width: max-content" uk-grid>
                <?php for ($i=1;$i<=16;$i++): ?>
                    <div>
                        <div class="uk-cover-container home__hocsinh__box uk-light">
                            <img src="images/slider1.jpeg" alt="" uk-cover="">
                            <canvas width="256" height="366"></canvas>
                            <div class="home__hocsinh__box__overlay uk-overlay-primary uk-position-bottom"></div>
                            <img class="uk-position-center" src="images/btn_play.png" alt="">
                            <div class="uk-position-bottom uk-position-small">
                                <div class="home__hocsinh__box__name">Phạm Thảo Linh</div>
                                <div class="uk-grid-small item__8" uk-grid>
                                    <div>
                                        <div class="uk-flex uk-flex-middle home__hocsinh__box__txt"><img src="images/birthday.png" alt="">7 tuổi</div>
                                    </div>
                                    <div>
                                        <div class="uk-flex uk-flex-middle home__hocsinh__box__txt"><img src="images/medal.png" alt="">Đã học 90 buổi</div>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="uk-position-cover"></a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
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