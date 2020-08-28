<?php

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function categories_insert($name, $id_parent){
    $sql = "INSERT INTO catalog(name, id_parent) VALUES(?,?)";
    pdo_execute($sql, $name, $id_parent);
    
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function categories_update($id, $name, $id_parent){
    $sql = "UPDATE catalog SET name=?, id_parent=? WHERE id=?";
    pdo_execute($sql, $name, $id_parent, $id);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function categories_delete($id){
    $sql = "DELETE FROM catalog WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function categories_select_all(){
    $sql = "SELECT * FROM catalog ORDER BY id DESC";
    return pdo_query($sql);
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function categories_select_by_id($id){
    $sql = "SELECT * FROM catalog WHERE id=$id";
    return pdo_query_one($sql, $id);
}

function categories_select_by_name($name){
    $sql = "SELECT * FROM catalog WHERE name='".$name."'";
    return pdo_query_one($sql, $name);
}

function categories_select_by_id_parent($id_parent){
    $sql = "SELECT * FROM catalog WHERE id_parent=$id_parent";
    return pdo_query($sql, $id_parent);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function categories_exist($id){
    $sql = "SELECT count(*) FROM catalog WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}
//menu đa cấp
//function Menu($parent = 0,$space = '---', $trees = NULL){ 
//        if(!$trees){ $trees = array(); }
//	$sql = mysql_query("SELECT * FROM loai WHERE parent = ".intval($parent)." ORDER BY tenloai"); 
//	while($rs = mysql_fetch_assoc($sql)){ 
//		$trees[] = array('ma_loai'=>$rs['ma_loai'],'tenloai'=>$space.$rs['tenloai']); 
//		$trees = Menu($rs['ma_loai'],$space.'---',$trees); 
//	} 
//	return $trees; 
//} 

// Get name tên loai sản phẩm

function get_ten_loai_sp($id){
    $sql = "select ten_loai_sp from loai_san_pham where ma_loai_sp=".$id;
    $kq = pdo_query_one($sql);
    return $kq;
}