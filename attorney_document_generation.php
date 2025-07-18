<?php
session_start();
if (!isset($_SESSION['attorney_name']) || $_SESSION['user_type'] !== 'attorney') {
    header('Location: login_form.php');
    exit();
}
require_once 'config.php';
$attorney_id = $_SESSION['user_id'];
$res = $conn->query("SELECT profile_image FROM user_form WHERE id=$attorney_id");
$profile_image = '';
if ($res && $row = $res->fetch_assoc()) {
    $profile_image = $row['profile_image'];
}
if (!$profile_image || !file_exists($profile_image)) {
    $profile_image = 'assets/images/attorney-avatar.png';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Generation - Opiña Law Office</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
        <img src="images/logo.jpg" alt="Logo">
            <h2>Opiña Law Office</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="attorney_dashboard.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="attorney_cases.php" class="active"><i class="fas fa-gavel"></i><span>Manage Cases</span></a></li>
            <li><a href="attorney_documents.php"><i class="fas fa-file-alt"></i><span>Document Storage</span></a></li>
            <li><a href="attorney_document_generation.php"><i class="fas fa-file-alt"></i><span>Document Generation</span></a></li>
            <li><a href="attorney_schedule.php"><i class="fas fa-calendar-alt"></i><span>My Schedule</span></a></li>
            <li><a href="attorney_clients.php"><i class="fas fa-users"></i><span>My Clients</span></a></li>
            <li><a href="attorney_messages.php"><i class="fas fa-envelope"></i><span>Messages</span></a></li>
            <li><a href="attorney_efiling.php"><i class="fas fa-paper-plane"></i><span>E-Filing</span></a></li>
            <li><a href="attorney_audit.php"><i class="fas fa-history"></i><span>Audit Trail</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <div class="header-title">
                <h1>Document Generation</h1>
                <p>Generate document storage and forms</p>
            </div>
            <div class="user-info">
                <img src="<?= htmlspecialchars($profile_image) ?>" alt="Attorney" style="object-fit:cover;width:60px;height:60px;border-radius:50%;border:2px solid #1976d2;">
                <div class="user-details">
                    <h3><?php echo $_SESSION['attorney_name']; ?></h3>
                    <p>Attorney at Law</p>
                </div>
            </div>
        </div>

        <!-- Document Generation Grid -->
        <div class="document-grid">
            <!-- Row 1 -->
            <div class="document-box">
                <div class="document-icon">
                    <i class="fas fa-file-contract"></i>
                </div>
                <h3>Affidavit of Loss</h3>
                <p>Generate affidavit of loss document</p>
                <button class="btn btn-primary generate-btn">
                    <i class="fas fa-magic"></i> Generate
                </button>
            </div>

            <div class="document-box">
                <div class="document-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Deed of Sale</h3>
                <p>Generate deed of sale document</p>
                <button class="btn btn-primary generate-btn">
                    <i class="fas fa-magic"></i> Generate
                </button>
            </div>

            <div class="document-box">
                <div class="document-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Sworn Affidavit of Solo Parent</h3>
                <p>Generate sworn affidavit of solo parent</p>
                <button class="btn btn-primary generate-btn">
                    <i class="fas fa-magic"></i> Generate
                </button>
            </div>

            <!-- Row 2 -->
            <div class="document-box">
                <div class="document-icon">
                    <i class="fas fa-file-invoice"></i>
                </div>
                <h3>Sworn Affidavit of Mother</h3>
                <p>Generate sworn affidavit of mother</p>
                <button class="btn btn-primary generate-btn">
                    <i class="fas fa-magic"></i> Generate
                </button>
            </div>

            <div class="document-box">
                <div class="document-icon">
                    <i class="fas fa-file-signature"></i>
                </div>
                <h3>Sworn Affidavit of Father</h3>
                <p>Generate sworn affidavit of father</p>
                <button class="btn btn-primary generate-btn">
                    <i class="fas fa-magic"></i> Generate
                </button>
            </div>

            <div class="document-box">
                <div class="document-icon">
                    <i class="fas fa-file-medical"></i>
                </div>
                <h3>Sworn Statement of Mother</h3>
                <p>Generate sworn statement of mother</p>
                <button class="btn btn-primary generate-btn">
                    <i class="fas fa-magic"></i> Generate
                </button>
            </div>

            <!-- Row 3 -->
            <div class="document-box">
                <div class="document-icon">
                    <i class="fas fa-file-certificate"></i>
                </div>
                <h3>Sworn Statement of Father</h3>
                <p>Generate sworn statement of father</p>
                <button class="btn btn-primary generate-btn">
                    <i class="fas fa-magic"></i> Generate
                </button>
            </div>

            <div class="document-box">
                <div class="document-icon">
                    <i class="fas fa-file-powerpoint"></i>
                </div>
                <h3>Joint Affidavit of Two Disinterested Persons</h3>
                <p>Generate joint affidavit of two disinterested persons</p>
                <button class="btn btn-primary generate-btn">
                    <i class="fas fa-magic"></i> Generate
                </button>
            </div>

            <div class="document-box">
                <div class="document-icon">
                    <i class="fas fa-file-archive"></i>
                </div>
                <h3>Agreement</h3>
                <p>Generate agreement document</p>
                <button class="btn btn-primary generate-btn">
                    <i class="fas fa-magic"></i> Generate
                </button>
            </div>
        </div>
    </div>

    <style>
         .document-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
        }

        .document-box {
            background: white;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 15px;
            transition: transform 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .document-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .document-icon {
            width: 60px;
            height: 60px;
            background: var(--primary-color);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
        }

        .document-info h3 {
            margin: 0;
            font-size: 1.2rem;
            color: #333;
        }

        .document-info p {
            margin: 5px 0 0;
            color: #666;
            font-size: 0.9rem;
        }

        .btn-primary {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }

        @media (max-width: 1024px) {
            .document-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .document-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</body>
</html> 