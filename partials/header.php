<?php
$headerTitle = $headerTitle ?? 'DoshModo';
$headerSubtitle = $headerSubtitle ?? 'Statement-backed money tracking';
$isMainHeader = $isMainHeader ?? false;
$headerStyle = $isMainHeader ? '' : 'style="min-height: 36vh;"';
?>

<header class="hero" <?php echo $headerStyle; ?>>
    <nav class="nav">
        <div class="container-fluid px-4">
            <?php if ($isMainHeader): ?>
                <a href="/" class="d-flex align-items-center logo text-decoration-none">
                    <img src="logo.png" alt="DoshModo" class="logo-img">
                    <span class="logo-text">doshmodo</span>
                </a>
            <?php else: ?>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="/" class="d-flex align-items-center logo text-decoration-none">
                        <img src="logo.png" alt="DoshModo" class="logo-img">
                        <span class="logo-text">doshmodo</span>
                    </a>
                    <a href="/" class="btn text-light text-decoration-none">Back to Home</a>
                </div>
            <?php endif; ?>
        </div>
    </nav>
    
    <div class="hero-content d-flex align-items-center justify-content-center text-center">
        <div class="hero-container">
            <h1 class="hero-title"><?php echo htmlspecialchars($headerTitle); ?></h1>
            <p class="hero-subtitle"><?php echo $headerSubtitle; ?></p>
        </div>
    </div>
</header>
