<?php  
include 'db.php'; 
session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center">Login</h2>
                        <?php 
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $email = trim($_POST['email']);
                            $password = trim($_POST['password']);
                        
                            $sql = "SELECT * FROM users WHERE email = :email";
                            $stmt = $pdo->prepare($sql);
                            $stmt->bindParam(':email', $email, PDO::PARAM_STR);  
                            $stmt->execute();
                            $user = $stmt->fetch(PDO::FETCH_ASSOC);
                        
                            if ($user && password_verify($password, $user['password'])) {
                                $_SESSION['user_id'] = $user['id'];
                                $_SESSION['role'] = $user['role'] ?? 'user'; // Default role
                                header("Location: index.php");
                                exit;
                            } else {
                                echo "<div class='alert alert-danger'>Invalid email or password</div>";
                            }
                        }
                        ?>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3 w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
