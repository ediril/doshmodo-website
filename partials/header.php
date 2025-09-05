<?php
$headerTitle = $headerTitle ?? 'Default Title';
$headerSubtitle = $headerSubtitle ?? 'Default Subtitle';
$isMainHeader = $isMainHeader ?? false;
$headerStyle = $isMainHeader ? '' : 'style="min-height: 40vh;"';
?>

<header class="hero" <?php echo $headerStyle; ?>>
    <nav class="nav">
        <div class="container-fluid px-4">
            <?php if ($isMainHeader): ?>
                <div class="d-flex align-items-center logo">
                    <img src="logo.png" alt="DoshModo" class="logo-img">
                    <span class="logo-text">DoshModo</span>
                </div>
            <?php else: ?>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center logo">
                        <img src="logo.png" alt="DoshModo" class="logo-img">
                        <span class="logo-text">DoshModo</span>
                    </div>
                    <a href="index.php" class="btn text-light text-decoration-none">← Back to Home</a>
                </div>
            <?php endif; ?>
        </div>
    </nav>
    
    <div class="hero-content d-flex <?php echo $isMainHeader ? 'align-items-start' : 'align-items-center'; ?> justify-content-center text-center">
        <div class="hero-container">
            <h1 class="hero-title"><?php echo htmlspecialchars($headerTitle); ?></h1>
            <p class="hero-subtitle"><?php echo $headerSubtitle; ?></p>
        </div>
    </div>
</header>