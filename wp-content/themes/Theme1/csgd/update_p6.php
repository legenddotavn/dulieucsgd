<?php
$ID = $_GET['ID'];
$select = $wpdb->get_row("SELECT * FROM csgd_vi_csvcvatvvatc WHERE ID = $ID",ARRAY_N);
$select2 = $wpdb->get_results("SELECT * FROM csgd_vi_noivuichoigiaitri WHERE ID = $ID",ARRAY_N);
if ($select[22]==0) {
?>
<div class="panel panel-primary">
  	<div class="panel-heading">
   		<h2 class="panel-title">VI. Cơ sở vật chất, thư viện, tài chính</h2>
 	</div>
  	<div class="panel-body">
    	<form action="" method="POST" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6"><h4>38.Tổng diện tích đất sử dụng của trường (tính bằng m2):</h4></div>
                <div class="col-md-2"><input type="text" name="VI38" id="input" class="form-control" value="<?php echo $select[2]; ?>"></div>
            </div>
            <div class="row">
                <div class="col-md-6"><h4>39. Diện tích sử dụng cho các hạng mục sau (tính bằng m2):</h4></div>
                <div class="col-md-12">
                    <table class="table table-striped table-hover" id="IV39">
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Nơi làm việc</td>
                                <td colspan="6"><input type="text" name="VI39a" class="form-control" value="<?php echo $select[3]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Nơi học</td>
                                <td colspan="6"><input type="text" name="VI39b" class="form-control" value="<?php echo $select[4]; ?>"></td>
                            </tr>
                            <tr>
                                <td colspan="7" style="vertical-align:middle">Nơi vui chơi giải trí <p>(Điền tên vào bên dưới /Ví dụ: Sân bóng đá, sân bóng chuyền...)</p></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Tên:</td>
                                <td style="min-width:150px"><input type="text" name="VI39c_1a" class="form-control"></td>
                                <td style="vertical-align:middle">Số lượng:</td>
                                <td><input type="text" name="VI39c_1b" class="form-control"></td>
                                <td style="vertical-align:middle">Diện tích trên mỗi sân</td>
                                <td style="min-width:150px"><input type="text" name="VI39c_1c" class="form-control"></td>
                                <td><button type="button" class="btn btn-warning xoa">Xóa</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary" id="VI39_them">Thêm</button>
                    <input type="hidden" id="VI39_stt" name="VI39_stt" value="1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>40.Diện tích phòng học (tính bằng m2):</h4></div>
                <div class="col-md-5">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td class="alignleft" style="vertical-align:middle">- Tổng diện tích phòng học:</td>
                                <td><input type="text" name="VI40a" id="input" class="form-control" value="<?php echo $select[5]; ?>"></td>
                            </tr>
                            <tr>
                                <td class="alignleft" style="vertical-align:middle">- Tỷ số diện tích phòng học trên sinh viên chính quy:</td>
                                <td><input type="text" name="VI40b" id="input" class="form-control" value="<?php echo $select[6]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5"><h4>41.Tổng số đầu sách trong thư viện của nhà trường :</h4></div>
                <div class="col-md-2"><input type="text" name="VI41" id="input" class="form-control" value="<?php echo $select[7]; ?>"></div>
            </div>
            <div class="row">
                <div class="col-md-7"><h4>42. Tổng số đầu sách gắn với các ngành đào tạo có cấp bằng của nhà trường: </h4></div>
                <div class="col-md-2"><input type="text" name="VI42" id="input" class="form-control" value="<?php echo $select[8]; ?>"></div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>43. Tổng số máy tính của trường:</h4></div>
                <div class="col-md-6">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td class="alignleft" style="vertical-align:middle">- Dùng cho hệ thống văn phòng:</td>
                                <td><input type="text" name="VI43a" id="input" class="form-control" value="<?php echo $select[9]; ?>"></td>
                            </tr>
                            <tr>
                                <td class="alignleft" style="vertical-align:middle">- Dùng cho sinh viên học tập:</td>
                                <td><input type="text" name="VI43b" id="input" class="form-control" value="<?php echo $select[10]; ?>"></td>
                            </tr>
                            <tr>
                                <td class="alignleft" style="vertical-align:middle">- Tỷ số số máy tính dùng cho sinh viên trên sinh viên chính quy:</td>
                                <td><input type="text" name="VI43c" id="input" class="form-control" value="<?php echo $select[11]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>44. Tổng kinh phí từ các nguồn thu của trường trong 5 năm gần đây:</h4></div>
                <div class="col-md-4">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Năm 2010</td>
                                <td><input type="text" name="VI44a" id="input" class="form-control" value="<?php echo $select[12]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2011</td>
                                <td><input type="text" name="VI44b" id="input" class="form-control" value="<?php echo $select[13]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2012</td>
                                <td><input type="text" name="VI44c" id="input" class="form-control" value="<?php echo $select[14]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2013</td>
                                <td><input type="text" name="VI44d" id="input" class="form-control" value="<?php echo $select[15]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2014</td>
                                <td><input type="text" name="VI44e" id="input" class="form-control" value="<?php echo $select[16]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>45. Tổng thu học phí (chỉ tính hệ chính quy) trong 5 năm gần đây:</h4></div>
                <div class="col-md-4">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Năm 2009-2010</td>
                                <td><input type="text" name="VI45a" id="input" class="form-control" value="<?php echo $select[17]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2010-2011</td>
                                <td><input type="text" name="VI45b" id="input" class="form-control" value="<?php echo $select[18]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2011-2012</td>
                                <td><input type="text" name="VI45c" id="input" class="form-control" value="<?php echo $select[19]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2012-2013</td>
                                <td><input type="text" name="VI45d" id="input" class="form-control" value="<?php echo $select[20]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2013-2014</td>
                                <td><input type="text" name="VI45e" id="input" class="form-control" value="<?php echo $select[21]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <input type="submit" name="update_trang6" value="Cập nhật" class="btn btn-primary">
		</form>
  	</div>
</div>
<?php } else if (isset($_POST['update_trang6'])) {
    $trang = $_GET['trang'];
    $trangtiep = $trang+1;
?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <p style="text-align:center">
                <a href="<?php echo home_url().'/thong-tin-csgd/?act=update&ID='.$ID.'&trang='.$trang; ?>" class="btn btn-primary">Xem lại thông tin</a>
                <a href="<?php echo home_url().'/thong-tin-csgd/?act=update&ID='.$ID.'&trang='.$trangtiep; ?>" class="btn btn-primary">Qua trang tiếp theo</a>
            </p>
        </div>
    </div>
<?php } else { ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="panel-title">VI. Cơ sở vật chất, thư viện, tài chính</h2>
    </div>
    <div class="panel-body">
        <form action="" method="POST" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6"><h4>38.Tổng diện tích đất sử dụng của trường (tính bằng m2):</h4></div>
                <div class="col-md-2"><?php echo $select[2]; ?></div>
            </div>
            <div class="row">
                <div class="col-md-6"><h4>39. Diện tích sử dụng cho các hạng mục sau (tính bằng m2):</h4></div>
                <div class="col-md-12">
                    <table class="table table-striped table-hover" id="IV39">
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Nơi làm việc</td>
                                <td colspan="6"><?php echo $select[3]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Nơi học</td>
                                <td colspan="6"><?php echo $select[4]; ?></td>
                            </tr>
                            <tr>
                                <td colspan="7" style="vertical-align:middle">Nơi vui chơi giải trí <p>(Điền tên vào bên dưới /Ví dụ: Sân bóng đá, sân bóng chuyền...)</p></td>
                            </tr>
                            <?php foreach ($select2 as $data) { ?>
                            <tr>
                                <td style="vertical-align:middle">Tên:</td>
                                <td style="min-width:150px"><?php echo $data[2]; ?></td>
                                <td style="vertical-align:middle">Số lượng:</td>
                                <td><?php echo $data[3]; ?></td>
                                <td style="vertical-align:middle">Diện tích trên mỗi sân</td>
                                <td style="min-width:150px"><?php echo $data[4]; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
<!--                     <button type="button" class="btn btn-primary" id="VI39_them">Thêm</button>
                    <input type="hidden" id="VI39_stt" name="VI39_stt" value="1"> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>40.Diện tích phòng học (tính bằng m2):</h4></div>
                <div class="col-md-5">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td class="alignleft" style="vertical-align:middle">- Tổng diện tích phòng học:</td>
                                <td><?php echo $select[5]; ?></td>
                            </tr>
                            <tr>
                                <td class="alignleft" style="vertical-align:middle">- Tỷ số diện tích phòng học trên sinh viên chính quy:</td>
                                <td><?php echo $select[6]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5"><h4>41.Tổng số đầu sách trong thư viện của nhà trường :</h4></div>
                <div class="col-md-2"><?php echo $select[7]; ?></div>
            </div>
            <div class="row">
                <div class="col-md-7"><h4>42. Tổng số đầu sách gắn với các ngành đào tạo có cấp bằng của nhà trường: </h4></div>
                <div class="col-md-2"><?php echo $select[8]; ?></div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>43. Tổng số máy tính của trường:</h4></div>
                <div class="col-md-6">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td class="alignleft" style="vertical-align:middle">- Dùng cho hệ thống văn phòng:</td>
                                <td><?php echo $select[9]; ?></td>
                            </tr>
                            <tr>
                                <td class="alignleft" style="vertical-align:middle">- Dùng cho sinh viên học tập:</td>
                                <td><?php echo $select[10]; ?></td>
                            </tr>
                            <tr>
                                <td class="alignleft" style="vertical-align:middle">- Tỷ số số máy tính dùng cho sinh viên trên sinh viên chính quy:</td>
                                <td><?php echo $select[11]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>44. Tổng kinh phí từ các nguồn thu của trường trong 5 năm gần đây:</h4></div>
                <div class="col-md-4">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Năm 2010</td>
                                <td><?php echo $select[12]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2011</td>
                                <td><?php echo $select[13]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2012</td>
                                <td><?php echo $select[14]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2013</td>
                                <td><?php echo $select[15]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2014</td>
                                <td><?php echo $select[16]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>45. Tổng thu học phí (chỉ tính hệ chính quy) trong 5 năm gần đây:</h4></div>
                <div class="col-md-4">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Năm 2009-2010</td>
                                <td><?php echo $select[17]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2010-2011</td>
                                <td><?php echo $select[18]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2011-2012</td>
                                <td><?php echo $select[19]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2012-2013</td>
                                <td><?php echo $select[20]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Năm 2013-2014</td>
                                <td><?php echo $select[21]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <input type="submit" name="update_lai_trang6" value="Cập nhật" class="btn btn-primary">
        </form>
    </div>
</div>
<?php } ?>
<?php get_template_part('csgd/pagination'); ?>