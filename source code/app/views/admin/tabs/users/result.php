<?php 
const message = array(
    0 => 'Đã có lỗi xảy ra, vui lòng thử lại sau',
    1 => 'Xóa thành công'
);
?>

<div class="flex w-full h-[80vh] justify-center items-center">
    <div class="flex flex-col justify-between items-center max-w-md h-44 p-6 bg-white border border-gray-200 rounded-lg shadow">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?php echo message[$data['result']]?></h5>
        <a href="<?php echo $path; ?>admin/users" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Quay lại
        </a>
    </div>
</div>