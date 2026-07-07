<?php
// إعدادات الاتصال بقاعدة البيانات السحابية (Neon)
$host = 'ep-cool-dawn-atdm8oah-pooler.c-9.us-east-1.aws.neon.tech';
$db   = 'neondb';
$user = 'neondb_owner';
$pass = 'npg_CUN4mOuh8PDK';
$port = '5432';

try {
    // إنشاء الاتصال باستخدام PDO ومطالبة السحابة ببروتوكول الأمان SSL
    $dsn = "pgsql:host=$host;port=$port;dbname=$db;sslmode=require";
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    echo "تم الاتصال بقاعدة البيانات السحابية بنجاح! السيرفر يعمل بشكل ممتاز.";
} catch (PDOException $e) {
    echo "فشل الاتصال بقاعدة البيانات: " . $e->getMessage();
}
?>