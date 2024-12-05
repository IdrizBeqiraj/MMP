<?php  include 'include/db.php'; session_start();  ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
 </head>
 <body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="crad-body">
                        <h2 class="tect-center">Login</h2>

                        <form action="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email"  class="form-control"  required>

                                <label for="password" class="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="password" class="form-control"  required>
                                <button type="submit" class="btn btn-primary mb-3 w-100">Login</button>
                                   </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
 </body>
 </html>