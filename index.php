<?php
// 1. إعدادات السيرفر وبيانات المشتركين (صاحب الحلال)
$username_allowed = "mohammad1"; // اسم المستخدم لتجربتك
$password_allowed = "pass123";   // كلمة المرور لتجربتك

// 2. استقبال البيانات من شاشة التلفزيون أو الجوال
$user = $_GET['user'] ?? '';
$pass = $_GET['password'] ?? '';

// 3. التحقق من الحساب إذا كان صحيحاً
if ($user !== $username_allowed || $pass !== $password_allowed) {
    die("حساب غير صحيح أو منتهي الصلاحية");
}

// 4. مكتبة الأفلام والمسلسلات والأقسام (M3U)
header('Content-Type: audio/x-mpegurl');
echo "#EXTM3U\n";

// --- قسم أفلام أكشن ---
echo '#EXTINF:-1 group-title="أفلام أكشن",فيلم الحريف' . "\n";
echo "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4\n"; // رابط فيلم تجريبي شغال 100%

// --- قسم مسلسلاتك ---
echo '#EXTINF:-1 group-title="مسلسلات عربية",مسلسل خلف الباب - الحلقة 1' . "\n";
echo "https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4\n"; // رابط مسلسل تجريبي شغال 100%
?>
