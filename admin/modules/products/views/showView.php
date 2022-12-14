<?php get_header(); ?>



<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Sửa sản phẩm</h3>
                    <a href="?modules=products&controllers=index&action=list" title="" id="add-new" class="fl-left">Danh
                        sách</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <?php if (!empty($data)) foreach ($data as $value) { ?>

                    <form method="POST"
                        action="?modules=products&controllers=index&action=edit&id=<?php echo $value['id']; ?>"
                        enctype="multipart/form-data"">

                        <div style=" display: flex;">
                        <div style="width: 400px;">
                            <label for="product-name">Tên sản phẩm</label>
                            <input type="text" name="name" id="product-name" value="<?php echo $value['name']; ?>"
                                style="display: block;width: 300px;">
                            <label for="product-code">Mã sản phẩm</label>
                            <input type="text" name="code" id="product-code" value="<?php echo $value['code']; ?>"
                                style="display: block;width: 300px;">
                            <label for="price">Giá sản phẩm</label>
                            <input type="text" name="price" id="price" value="<?php echo $value['price']; ?>"
                                style="display: block;width: 300px;">
                            <label for="price">Giá khuyến mãi</label>
                            <input type="text" name="promotional_price" id="price"
                                value="<?php echo $value['promotional_price']; ?>" style="display: block;width: 300px;">
                            <label for="price">Số lượng</label>
                            <input type="text" name="quantity" id="price" value="<?php echo $value['quantity']; ?>"
                                style="display: block;width: 300px;">
                            <label for="price">Người tạo</label>
                            <input type="text" name="user" id="price" value="<?php echo $value['user']; ?>"
                                style="display: block;width: 300px;">
                        </div>
                        <div style="width: 400px;">
                            <label for="price">Màn hình</label>
                            <input type="text" name="screen" id="price" value="<?php echo $value['screen']; ?>"
                                style="display: block;width: 300px;">
                            <label for="price">Ram</label>
                            <input type="text" name="ram" id="price" value="<?php echo $value['ram']; ?>"
                                style="display: block;width: 300px;">
                            <label for="price">Cpu</label>
                            <input type="text" name="cpu" id="price" value="<?php echo $value['cpu']; ?>"
                                style="display: block;width: 300px;">
                            <label for="price">Bộ nhớ</label>
                            <input type="text" name="memory" id="price" value="<?php echo $value['memory']; ?>"
                                style="display: block;width: 300px;">
                            <label for="price">Hệ điều hành</label>
                            <input type="text" name="operating_system" id="price"
                                value="<?php echo $value['operating_system']; ?>" style="display: block;width: 300px;">
                            <label for="price">Camera trước</label>
                            <input type="text" name="front_camera" id="price"
                                value="<?php echo $value['front_camera']; ?>" style="display: block;width: 300px;">
                            <label for="price">Camera sau</label>
                            <input type="text" name="rear_camera" id="price"
                                value="<?php echo $value['rear_camera']; ?>" style="display: block;width: 300px;">
                        </div>
                        <div style="width: 400px;">
                            <label for="status">Độ hot sản phẩm</label>
                            <select name="level" value="<?php echo $value['level']; ?>"
                                style="display: block;width: 300px;">

                            </select>
                            <label for="status">Trạng thái</label>
                            <select name="status" style="display: block;width: 300px;">
                                <option value="<?php echo $value['status']; ?>"> </option>
                            </select>
                            <label for="category ">Danh mục sản phẩm</label>
                            <select name="id_category" style="display: block;width: 300px;">
                                <option value="<?php echo $value['id_catogory']; ?>"></option>

                            </select>
                            <label for="brand">Thương hiệu sản phẩm</label>
                            <select name="id_brand" style="display: block;width: 300px;">
                                <option value="<?php echo $value['id']; ?>">
                                    <?php echo $value['name']; ?>
                                </option>
                            </select>

                            <label>Hình ảnh</label>
                            <div id="uploadFile">
                                <input type="file" name="image" id="upload-thumb">
                                <img src="<?php echo $value['image']; ?>">
                            </div>
                        </div>
                </div>
                <label for="desc">Mô tả sản phẩm</label>
                <textarea name="description" id="desc" class="ckeditor"><?php echo $value['description']; ?></textarea>
                <?php }
                ; ?>
                <input type="submit" name="btn_submit" id="btn-submit" value="Thêm mới"
                    style="height: 40px;
                                                                                                border-radius: 60px;
                                                                                                width: 150px;
                                                                                                color: green;
                                                                                                border-color: white;
                                                                                                color: white;
                                                                                                background-color: #48ad48;">

                </form>

            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>