<?php
// Kiểm tra quá trình upload file có bị lỗi gì không ?
if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
    // Mảng chưa định dạng file cho phép
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
    // Lấy thông tin file bao gồm tên file, loại file, kích cỡ file
    $filename = $_FILES['photo']['name'];
    $filetype = $_FILES['photo']['type'];
    $filesize = $_FILES['photo']['size'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    $path = "../../../../luli/upload/";

    echo $filename;
    echo $filetype;
    echo $filesize;


    // Kiểm tra định dạng file .jpg, png,...
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    // Nếu không đúng định dạng file thì báo lỗi
    if (!array_key_exists($ext, $allowed)) die("Lỗi : Vui lòng chọn đúng định dang file.");

    // Cho phép kích thước tối đa của file là 5MB
    $maxsize = 50 * 7020 * 4960;
    // Nếu kích thước lớn hơn 5MB thì báo lỗi
    if ($filesize > $maxsize) die("Lỗi : Kích thước file lớn hơn giới hạn cho phép");

    // Kiểm tra file ok hết chưa
    if (in_array($filetype, $allowed)) {
        // Kiểm tra xem file đã tồn tại chưa, nếu rồi thì báo lỗi, không thì tiến hành upload
        if (file_exists("../../../../luli/upload/" . $_FILES["photo"]["name"])) {
            echo $_FILES["photo"]["name"] . " đã tồn tại";
        } else {
            // Hàm move_uploaded_file sẽ tiến hành upload file lên thư mục upload
            $upload = move_uploaded_file($file_tmp, "../../../../luli/upload/".$filename);
            echo $upload;
            if ($upload) {
                // Thông báo thành công
                echo "Upload file thành công";
            } else {
                echo "Upload file khong thành công";
            }
        }
    } else {
        echo "Lỗi : Có vấn đề xảy ra khi upload file";
    }
} else {
    echo "Lỗi: " . $_FILES["photo"]["error"];
}
