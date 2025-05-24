<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Profil User</title>
</head>
<body>
    <h2>Profil</h2>
    <form>
        Nama: <input type="text" value="<?php echo htmlspecialchars($user['nama']); ?>" readonly /><br /><br />
        Email: <input type="email" value="<?php echo htmlspecialchars($user['email']); ?>" readonly /><br /><br />
        Telepon: <input type="text" value="<?php echo htmlspecialchars($user['telepon']); ?>" readonly /><br /><br />
    </form>
    <a href="logout.php">Logout</a>
</body>
</html>