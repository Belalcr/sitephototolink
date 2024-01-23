<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileToUpload"])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadSuccess = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile);

    if ($uploadSuccess) {
        echo "تەواو بەرێز بە سەرکەوتوی بوو بە لینک. ";

        // فحص إذا كان الملف مضغوطًا وقم بفك الضغط
        $zip = new ZipArchive;
        $res = $zip->open($targetFile);

        if ($res === TRUE) {
            $extractPath = $targetDir . pathinfo($targetFile, PATHINFO_FILENAME) . "/";
            $zip->extractTo($extractPath);
            $zip->close();

            // إنشاء رابط لمحتوى الملفات المستخرجة
            echo "تم فك الضغط. رابط الملفات المستخرجة: <a href='$extractPath'>$extractPath</a>";
        } else {
            echo "جۆینی تێلیگرام بکەن .";
        }

        echo "رابط الملف المضغوط: <a href='$targetFile'>$targetFile</a>";
    } else {
        echo "فشل في رفع الملف.";
    }
}
?>