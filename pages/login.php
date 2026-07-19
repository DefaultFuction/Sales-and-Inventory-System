<?php require('session.php');?>
<?php if(logged_in()){ ?>
    <script type="text/javascript">
        window.location = "index.php";
    </script>
<?php } ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="DefaultFcuntion">
    <title>Sales And Inventory - Login</title>

    <!-- Custom fonts -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- SB Admin 2 styles -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        /* ===== Full-page background ===== */
        body.bg-gradient-primary {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f0c29 0%, #302b63 50%, #24243e 100%) !important;
            display: flex;
            align-items: center;
            font-family: 'Nunito', sans-serif;
        }

        .container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        /* ===== Main card ===== */
        .card.login-card {
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.45) !important;
            max-width: 1000px;
            width: 100%;
            background: #fff;
            border: none;
        }

        /* ===== Left — Cover image with overlay ===== */
        .bg-login-image {
            background: url("https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=800&fit=crop&q=80") !important;
            background-position: center !important;
            background-size: cover !important;
            position: relative;
            min-height: 500px;
        }

        .bg-login-image::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(
                160deg,
                rgba(15, 12, 41, 0.88) 0%,
                rgba(48, 43, 99, 0.75) 40%,
                rgba(36, 36, 62, 0.60) 100%
            );
        }

        .bg-login-image .cover-content {
            position: relative;
            z-index: 2;
            padding: 3.5rem 3rem;
            height: 100%;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #fff;
        }

        .cover-content .brand-icon {
            width: 64px;
            height: 64px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.10);
        }

        .cover-content h2 {
            font-weight: 800;
            font-size: 2rem;
            line-height: 1.25;
            margin-bottom: 1rem;
        }

        .cover-content p {
            font-weight: 300;
            font-size: 1rem;
            line-height: 1.7;
            opacity: 0.80;
            max-width: 320px;
        }

        .cover-content .cover-features {
            margin-top: 2.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .cover-content .cover-features .feat-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.90rem;
            opacity: 0.75;
        }
        .cover-content .cover-features .feat-item i {
            width: 20px;
            font-size: 0.85rem;
            opacity: 0.9;
        }

        /* ===== Right — Form panel ===== */
        .form-panel {
            padding: 3rem 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 500px;
        }

        .form-panel .form-header {
            margin-bottom: 2rem;
        }
        .form-panel .form-header h1 {
            font-size: 1.75rem;
            font-weight: 800;
            color: #1e1e2f;
            margin-bottom: 0.4rem;
            letter-spacing: -0.02em;
        }
        .form-panel .form-header p {
            color: #888;
            font-size: 0.95rem;
        }

        /* ===== Form fields ===== */
        .input-group-custom {
            position: relative;
            margin-bottom: 1.25rem;
        }
        .input-group-custom .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #b8b8c8;
            z-index: 3;
            font-size: 0.95rem;
            transition: color 0.25s;
            pointer-events: none;
        }
        .input-group-custom .form-control-user {
            border-radius: 14px !important;
            padding: 1.35rem 1rem 1.35rem 3rem !important;
            border: 2px solid #edf0f5 !important;
            font-size: 0.92rem !important;
            transition: all 0.3s ease !important;
            background: #f8f9fe !important;
            height: auto !important;
            color: #1e1e2f;
        }
        .input-group-custom .form-control-user::placeholder {
            color: #b8b8c8;
            font-weight: 400;
        }
        .input-group-custom .form-control-user:focus {
            border-color: #667eea !important;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.12) !important;
            background: #fff !important;
        }
        .input-group-custom:focus-within .input-icon {
            color: #667eea;
        }

        /* ===== Checkbox & Forgot ===== */
        .form-extras {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .form-extras .custom-control-label {
            color: #666;
            font-size: 0.88rem;
            cursor: pointer;
        }
        .form-extras .forgot-link {
            color: #667eea;
            font-size: 0.85rem;
            font-weight: 600;
            transition: color 0.25s;
        }
        .form-extras .forgot-link:hover {
            color: #764ba2;
            text-decoration: none;
        }

        /* ===== Login button ===== */
        .btn-login {
            border-radius: 14px !important;
            padding: 0.9rem 1rem !important;
            font-weight: 700 !important;
            font-size: 0.95rem !important;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            border: none !important;
            transition: all 0.35s ease !important;
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.35) !important;
            letter-spacing: 0.01em;
        }
        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.45) !important;
        }
        .btn-login:active {
            transform: translateY(-1px);
        }

        /* ===== Extra links ===== */
        .extra-links {
            margin-top: 2rem;
            text-align: center;
        }
        .extra-links a {
            color: #999;
            font-size: 0.85rem;
            transition: color 0.25s;
        }
        .extra-links a:hover {
            color: #667eea;
            text-decoration: none;
        }
        .extra-links .divider {
            color: #ddd;
            margin: 0 0.6rem;
        }

        /* ===== Entrance animation ===== */
        .animate-in {
            animation: fadeInUp 0.7s ease both;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== Responsive ===== */
        @media (max-width: 991.98px) {
            .bg-login-image {
                min-height: 220px;
            }
            .bg-login-image .cover-content {
                min-height: 220px;
                padding: 2rem 1.5rem;
            }
            .cover-content h2 {
                font-size: 1.4rem;
            }
            .cover-content .cover-features {
                display: none;
            }
            .cover-content .brand-icon {
                margin-bottom: 1rem;
            }
            .form-panel {
                padding: 2rem 1.5rem;
                min-height: auto;
            }
            .form-panel .form-header h1 {
                font-size: 1.4rem;
            }
            .card.login-card {
                border-radius: 16px;
            }
        }

        @media (max-width: 575.98px) {
            .form-extras {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center w-100">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg login-card">
                    <div class="card-body p-0">
                        <div class="row shadow">

                            <!-- Left — Cover Image -->
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <div class="cover-content animate-in">
                                    <div class="brand-icon">
                                        <i class="fas fa-store-alt"></i>
                                    </div>
                                    <h2>Sales &amp; Inventory<br>Management System</h2>
                                    <p>Streamline your business operations with powerful sales tracking and real-time inventory management.</p>
                                    <div class="cover-features">
                                        <div class="feat-item">
                                            <i class="fas fa-check-circle"></i>
                                            <span>Real-time inventory tracking</span>
                                        </div>
                                        <div class="feat-item">
                                            <i class="fas fa-check-circle"></i>
                                            <span>Sales analytics &amp; reporting</span>
                                        </div>
                                        <div class="feat-item">
                                            <i class="fas fa-check-circle"></i>
                                            <span>Multi-user role management</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right — Login Form -->
                            <div class="col-lg-6">
                                <div class="form-panel animate-in" style="animation-delay:0.15s;">
                                    <div class="form-header">
                                        <h1>Welcome Back</h1>
                                        <p>Sign in to your account to continue</p>
                                    </div>

                                    <form class="user" role="form" action="processlogin.php" method="post">
                                        <div class="input-group-custom">
                                            <input class="form-control form-control-user"
                                                   placeholder="Username"
                                                   name="user"
                                                   type="text"
                                                   autofocus
                                                   required>
                                            <i class="fas fa-user input-icon"></i>
                                        </div>

                                        <div class="input-group-custom">
                                            <input class="form-control form-control-user"
                                                   placeholder="Password"
                                                   name="password"
                                                   type="password"
                                                   required>
                                            <i class="fas fa-lock input-icon"></i>
                                        </div>

                                        <div class="form-extras">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox"
                                                       class="custom-control-input"
                                                       id="customCheck">
                                                <label class="custom-control-label"
                                                       for="customCheck">Remember me</label>
                                            </div>
                                            <a class="forgot-link" href="#">
                                                Forgot password?
                                            </a>
                                        </div>

                                        <button class="btn btn-primary btn-user btn-block btn-login"
                                                type="submit"
                                                name="btnlogin">
                                            <i class="fas fa-sign-in-alt mr-2"></i>
                                            Sign In
                                        </button>
                                    </form>

                                    <div class="extra-links">
                                        <a href="#">Create an account</a>
                                        <span class="divider">|</span>
                                        <a href="#">Need help?</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/sb-admin-2.min.js"></script>
</body>
</html>
