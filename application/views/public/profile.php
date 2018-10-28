<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 10/11/2018
 * Time: 22:46
 */
?>

<div class="faq-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="container">

                <!-- Trigger the modal with a button -->

                <div class="tm-account bg-white p-md-5 pt-md-4 p-3">
                    <div class="profilecard media bg-gray-lighter p-sm-4 p-3" style="margin-bottom: 50px;">
                        <img class="profilecard__img wf-80 wf-md-126 mr-md-5 mr-3" style="cursor: pointer;" src="/Template1/images/avatar-default-2.svg" alt="avatar-san-tai-chinh-Thanh Lam" id="imgAvatar" onclick="CallUploadFile()" title="Đổi ảnh đại diện khác">
                        <input type="file" name="uploadAvatar" id="uploadAvatar" multiple="" style="display: none;" accept="image/*">
                        <input type="hidden" id="hddImgDomain" value="https://rs.tima.vn/staticFile">
                        <input type="hidden" id="UserID" value="1022598">
                        <div class="profilecard__body media-body align-self-center">
                            <p class="fs-13 text-gray-light mb-0">
                                <span>Thông tin tài khoản</span>
                                <span style="position: absolute; right: 68px;margin-top:-7px" class="hidden-xs-down">
                            <a class="btn btn-primary text-uppercase text-white fs-15 fs-lg-15 btn-sm" href="/Borrower/ListLoan/">
                                Quản lý đơn vay
                            </a>
                        </span>
                            </p>

                            <hr class="mt-2 border-gray">
                            <div class="row  mb-4">
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="col-sm-4 fs-13">Tên đăng nhập :</label>
                                        <label class="col-sm-4 fs-13"><b>0969600981</b></label>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4 fs-13">Loại tài khoản<span style="margin-left: 8px">:</span></label>
                                        <label class="col-sm-4 fs-13"><b>Người vay</b></label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xl-6">
                                    <div class="profilecard__progress">
                                        <p class="mb-0 text-gray-light fs-13">Mức độ hoàn thành hồ sơ</p>
                                        <div class="progress mb-2">
                                            <div class="progress-bar" role="progressbar" style="width: 43%;" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100">
                                                <span class="progress-tooltip">43%</span>
                                            </div>
                                        </div>
                                        <p class="mb-0 text-gray-light fs-13">Bạn vui lòng cập nhật đầy đủ thông tin để đơn vay của bạn được duyệt nhanh hơn.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="hddUserID" value="1022598">
                    <input type="hidden" id="hddCityID" value="1">
                    <input type="hidden" id="hddCityName" value="Hà Nội">



                    <div class="accinfo-2">
                        <div class="row mb-3">

                            <input type="hidden" id="hddLenderId" value="1022598">

                            <div class="row col-xl-12">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="txtFullName" class="col-sm-4 col-form-label text-sm-right">Họ &amp; Tên</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <input type="text" class="form-control" id="txtFullName" placeholder="" disabled="disabled" value="Doan Hoa">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="txtPhone" class="col-sm-4 col-form-label text-sm-right">Điện thoại</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <input type="tel" class="form-control" id="txtPhone" placeholder="" disabled="disabled" value="0969600981">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row col-xl-12">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="txtCardNumber" class="col-sm-4 col-form-label text-sm-right">CMND</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <input type="text" class="form-control" id="txtCardNumber" placeholder="" disabled="disabled">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="txtBirthDay" class="col-sm-4 col-form-label text-sm-right">Ngày sinh</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" id="txtBirthDay" placeholder="" disabled="disabled" value="01/01/0001">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row col-xl-12">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="slGender" class="col-sm-4 col-form-label text-sm-right">Giới tính</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <select class="form-control form-control-default" id="slGender" disabled="disabled">
                                                <option value="0" selected="">Nam</option>
                                                <option value="1">Nữ</option>
                                                <option value="2">Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="txtEmail" class="col-sm-4 col-form-label text-sm-right">Email</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <input type="text" class="form-control" id="txtEmail" placeholder="" disabled="disabled">
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="row col-xl-12">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="cbCity" class="col-sm-4 col-form-label text-sm-right">Thành phố</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <span class="select2 select2-container select2-container--bootstrap select2-container--disabled" dir="ltr" style="width: 323.328px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-cbCity-container"><span class="select2-selection__rendered" id="select2-cbCity-container" title=" Hà Nội "> Hà Nội </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><select class="form-control select2-hidden-accessible" id="cbCity" disabled="" tabindex="-1" aria-hidden="true">
                                                <option value=""></option>
                                                <option value="1" selected=""> Hà Nội </option>
                                                <option value="2"> Hà Giang </option>
                                                <option value="4"> Cao Bằng </option>
                                                <option value="6"> Bắc Kạn </option>
                                                <option value="8"> Tuyên Quang </option>
                                                <option value="10"> Lào Cai </option>
                                                <option value="11"> Điện Biên </option>
                                                <option value="12"> Lai Châu </option>
                                                <option value="14"> Sơn La </option>
                                                <option value="15"> Yên Bái </option>
                                                <option value="17"> Hòa Bình </option>
                                                <option value="19"> Thái Nguyên </option>
                                                <option value="20"> Lạng Sơn </option>
                                                <option value="22"> Quảng Ninh </option>
                                                <option value="24"> Bắc Giang </option>
                                                <option value="25"> Phú Thọ </option>
                                                <option value="26"> Vĩnh Phúc </option>
                                                <option value="27"> Bắc Ninh </option>
                                                <option value="30"> Hải Dương </option>
                                                <option value="31"> Hải Phòng </option>
                                                <option value="33"> Hưng Yên </option>
                                                <option value="34"> Thái Bình </option>
                                                <option value="35"> Hà Nam </option>
                                                <option value="36"> Nam Định </option>
                                                <option value="37"> Ninh Bình </option>
                                                <option value="38"> Thanh Hóa </option>
                                                <option value="40"> Nghệ An </option>
                                                <option value="42"> Hà Tĩnh </option>
                                                <option value="44"> Quảng Bình </option>
                                                <option value="45"> Quảng Trị </option>
                                                <option value="46"> Thừa Thiên Huế </option>
                                                <option value="48"> Đà Nẵng </option>
                                                <option value="49"> Quảng Nam </option>
                                                <option value="51"> Quảng Ngãi </option>
                                                <option value="52"> Bình Định </option>
                                                <option value="54"> Phú Yên </option>
                                                <option value="56"> Khánh Hòa </option>
                                                <option value="58"> Ninh Thuận </option>
                                                <option value="60"> Bình Thuận </option>
                                                <option value="62"> Kon Tum </option>
                                                <option value="64"> Gia Lai </option>
                                                <option value="66"> Đắk Lắk </option>
                                                <option value="67"> Đắk Nông </option>
                                                <option value="68"> Lâm Đồng </option>
                                                <option value="70"> Bình Phước </option>
                                                <option value="72"> Tây Ninh </option>
                                                <option value="74"> Bình Dương </option>
                                                <option value="75"> Đồng Nai </option>
                                                <option value="77"> Bà Rịa - Vũng Tàu </option>
                                                <option value="79"> Hồ Chí Minh </option>
                                                <option value="80"> Long An </option>
                                                <option value="82"> Tiền Giang </option>
                                                <option value="83"> Bến Tre </option>
                                                <option value="84"> Trà Vinh </option>
                                                <option value="86"> Vĩnh Long </option>
                                                <option value="87"> Đồng Tháp </option>
                                                <option value="89"> An Giang </option>
                                                <option value="91"> Kiên Giang </option>
                                                <option value="92"> Cần Thơ </option>
                                                <option value="93"> Hậu Giang </option>
                                                <option value="94"> Sóc Trăng </option>
                                                <option value="95"> Bạc Liêu </option>
                                                <option value="96"> Cà Mau </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="cbDistrict" class="col-sm-4 col-form-label text-sm-right">Quận/Huyện</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 323.328px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-cbDistrict-container"><span class="select2-selection__rendered" id="select2-cbDistrict-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><select class="form-control form-control-default select2-hidden-accessible" id="cbDistrict" tabindex="-1" aria-hidden="true">
                                                <option value=""></option>
                                                <option value="1"> Ba Đình </option>
                                                <option value="2"> Hoàn Kiếm </option>
                                                <option value="3"> Tây Hồ </option>
                                                <option value="4"> Long Biên </option>
                                                <option value="5"> Cầu Giấy </option>
                                                <option value="6"> Đống Đa </option>
                                                <option value="7"> Hai Bà Trưng </option>
                                                <option value="8"> Hoàng Mai </option>
                                                <option value="9"> Thanh Xuân </option>
                                                <option value="10"> Nam Từ Liêm </option>
                                                <option value="16"> Sóc Sơn </option>
                                                <option value="17" selected=""> Đông Anh </option>
                                                <option value="18"> Gia Lâm </option>
                                                <option value="19"> Bắc Từ Liêm </option>
                                                <option value="20"> Thanh Trì </option>
                                                <option value="250"> Mê Linh </option>
                                                <option value="268"> Hà Đông </option>
                                                <option value="269"> Sơn Tây </option>
                                                <option value="271"> Ba Vì </option>
                                                <option value="272"> Phúc Thọ </option>
                                                <option value="273"> Đan Phượng </option>
                                                <option value="274"> Hoài Đức </option>
                                                <option value="275"> Quốc Oai </option>
                                                <option value="276"> Thạch Thất </option>
                                                <option value="277"> Chương Mỹ </option>
                                                <option value="278"> Thanh Oai </option>
                                                <option value="279"> Thường Tín </option>
                                                <option value="280"> Phú Xuyên </option>
                                                <option value="281"> Ứng Hòa </option>
                                                <option value="282"> Mỹ Đức </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row col-xl-12">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="cbWard" class="col-sm-4 col-form-label text-sm-right">Phường/Xã</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <span class="select2 select2-container select2-container--bootstrap select2-container--disabled" dir="ltr" style="width: 323.328px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-cbWard-container"><span class="select2-selection__rendered" id="select2-cbWard-container"><span class="select2-selection__placeholder">Chọn Phường/Xã...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span><select class="form-control form-control-default select2-hidden-accessible" id="cbWard" disabled="" tabindex="-1" aria-hidden="true">
                                                <option value=""></option>
                                                <option value="454"> Đông Anh </option>
                                                <option value="457"> Xuân Nộn </option>
                                                <option value="460"> Thuỵ Lâm </option>
                                                <option value="463"> Bắc Hồng </option>
                                                <option value="466"> Nguyên Khê </option>
                                                <option value="469"> Nam Hồng </option>
                                                <option value="472"> Tiên Dương </option>
                                                <option value="475"> Vân Hà </option>
                                                <option value="478"> Uy Nỗ </option>
                                                <option value="481"> Vân Nội </option>
                                                <option value="484"> Liên Hà </option>
                                                <option value="487"> Việt Hùng </option>
                                                <option value="490"> Kim Nỗ </option>
                                                <option value="493"> Kim Chung </option>
                                                <option value="496"> Dục Tú </option>
                                                <option value="499"> Đại Mạch </option>
                                                <option value="502"> Vĩnh Ngọc </option>
                                                <option value="505"> Cổ Loa </option>
                                                <option value="508"> Hải Bối </option>
                                                <option value="511"> Xuân Canh </option>
                                                <option value="514"> Võng La </option>
                                                <option value="517"> Tầm Xá </option>
                                                <option value="520"> Mai Lâm </option>
                                                <option value="523"> Đông Hội </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="txtAddress" class="col-sm-4 col-form-label text-sm-right">Địa chỉ nơi ở</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <input type="text" class="form-control" id="txtAddress" placeholder="" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row col-xl-12">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="slJob" class="col-sm-4 col-form-label text-sm-right">Nghề nghiệp</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <select class="form-control form-control-default" id="slJob" disabled="disabled">
                                                <option value=""></option>
                                                <option value="30"> Nhân viên văn phòng </option>
                                                <option value="24"> Nhân viên nhà nước </option>
                                                <option value="26"> Kinh doanh tự do </option>
                                                <option value="32"> Công nhân nhà máy </option>
                                                <option value="33"> Doanh nghiệp tư nhân </option>
                                                <option value="31"> Hộ kinh doanh cá thể </option>
                                                <option value="29"> Ngành nghề khác </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="txtCompanyName" class="col-sm-4 col-form-label text-sm-right">Công ty</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <input type="text" class="form-control" id="txtCompanyName" placeholder="" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row col-xl-12">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="txtCompanyAddress" class="col-sm-4 col-form-label text-sm-right">Địa chỉ công ty</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <input type="text" class="form-control" id="txtCompanyAddress" placeholder="" disabled="disabled">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label for="txtCompanyPhone" class="col-sm-4 col-form-label text-sm-right">ĐT công ty</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <input type="text" class="form-control" id="txtCompanyPhone" placeholder="" disabled="disabled">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="text-center">
                            <input type="button" id="btnUpdateInfoLoaner" data-id="1022598" data-cmd="enable-form" class="btn btn-primary mx-auto text-uppercase" value="Thay đổi thông tin">
                        </div>
                    </div>




                </div>
            </div>

            <div class="container pb-5">

                <div class="tm-account bg-white p-md-5 pt-md-4 p-3">





                    <input type="hidden" id="hddTypeImg" value="0">
                    <input type="file" name="uploadImg" id="uploadImg" multiple="" style="display: none;" accept="image/*">

                    <div class="uploadct bg-white p-md-5 pt-md-4 p-3">
                        <h2 class="text-uppercase fs-16 fw-6 mb-0">
                            Upload chứng từ
                        </h2>

                        <hr class="border-gray mt-md-4 mt-3 mb-0">

                        <div class="uploadct-item">
                            <div class="uploadct-item__header" onclick="UploadImg(1)">
                                <div class="upload btn-file mb-2">
                                    <div class="upload__icon">
                    <span class="icon-id-card">
                        <span class="upload__icon-plus"></span>
                    </span>
                                    </div>
                                    <div class="upload__text">
                                        Nhân thân
                                    </div>

                                </div>

                                <em class="text-gray-light fs-13">
                                    CMND, Hộ chiếu, Thẻ căn cước
                                </em>
                            </div>

                            <div class="uploadct-item__body" id="divImgCardNumber" name="divImgCardNumber">

                            </div>
                        </div>

                        <div class="uploadct-item">
                            <div class="uploadct-item__header" onclick="UploadImg(2)">
                                <div class="upload btn-file mb-2">
                                    <div class="upload__icon">
                    <span class="icon-house">
                        <span class="upload__icon-plus"></span>
                    </span>
                                    </div>
                                    <div class="upload__text">
                                        Cư trú
                                    </div>

                                </div>

                                <em class="text-gray-light fs-13">
                                    Sổ hộ khẩu, KT3, Tạm trú tạm vắng
                                </em>
                            </div>

                            <div class="uploadct-item__body" id="divImgLocation" name="divImgLocation">
                            </div>
                        </div>

                        <div class="uploadct-item">
                            <div class="uploadct-item__header" onclick="UploadImg(3)">
                                <div class="upload btn-file mb-2">
                                    <div class="upload__icon">
                    <span class="icon-wallet-gray">
                        <span class="upload__icon-plus"></span>
                    </span>
                                    </div>
                                    <div class="upload__text">
                                        Thu nhập
                                    </div>

                                </div>

                                <em class="text-gray-light fs-13">
                                    Sao kê bảng lương. HĐLĐ, BHXH ...
                                </em>
                            </div>

                            <div class="uploadct-item__body" id="divImgContractAndSalary" name="divImgContractAndSalary">
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
