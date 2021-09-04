<DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Social Giving</title>
        <link rel="stylesheet" href="style.css">
        <link rel="equipmentsheet" href="equipment.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        <section class="<?= $HeaderImage;?>">
            <nav>
            <a href="index.html"><img src="images/finallogo.png.jpg"></a>
            <div class="nav-links" id="navLinks">
                <section class="closeicon">
                <i class="fas fa-times" onclick="hideMenu()"></i>
                </section>
                <ul>
                    <li><a href="/socialgiving/public" class="actiive">Home Page</a></li>
                    <li><a href="BloodDonations">Blood Donations</a></li>
                    <li><a href="EquipmentDonations">Equipment Donations</a></li>
                    <li><a href="FinancialDonations">Financial Donations</a></li>
                    <li><a href="CommunityProjects">Community Projects</a></li>
                </ul>
    
                </div>
                <section class="openicon">
                    <i class="fas fa-bars" onclick="showMenu()"></i> 
                </section> 
            </nav>
    <div class="text-box">
        <h1><?= $Title; ?></h1>
    </div>
        </section>