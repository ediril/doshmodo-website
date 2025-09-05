<?php require_once 'collectiq/component/WaitlistComponent.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoshModo - Find your way of money</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php $waitlist = new WaitlistComponent(); echo $waitlist->renderStyles(); ?>
    <link rel="stylesheet" href="styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header class="hero">
        <nav class="nav">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center logo">
                    <img src="logo.png" alt="DoshModo" class="logo-img">
                    <span class="logo-text">DoshModo</span>
                </div>
            </div>
        </nav>
        
        <div class="hero-content d-flex align-items-start justify-content-center text-center">
            <div class="hero-container">
                <h1 class="hero-title">Find Your Way of Money</h1>
                <p class="hero-subtitle">The practical finance app that focuses on what matters most:<br>Building healthy financial habits</p>
            </div>
        </div>
    </header>

    <main>
        <section class="video-section">
            <div class="container">
                <h2 class="section-title text-center">See DoshModo in Action</h2>
                <div class="video-container text-center">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/-wv7KriIYKM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2 class="section-title text-center">Smart Financial Management</h2>
                <div class="row g-4">
                    <?php 
                    $features = [
                        ['icon' => '💰', 'title' => 'Multiple Account Types', 'description' => 'Track checking, savings, credit cards, and investment accounts all in one place.'],
                        ['icon' => '🎯', 'title' => 'Focus on What Matters', 'description' => 'Track significant transactions rather than every small purchase. Less noise, more insight.'],
                        ['icon' => '📊', 'title' => 'Balance Tracking', 'description' => 'Monitor your account balances through statements with easy reconciliation tools.'],
                        ['icon' => '📄', 'title' => 'Bank Statement Import', 'description' => 'Seamlessly import transactions from your bank statements to keep everything up to date.'],
                        ['icon' => '🎮', 'title' => 'Gamified Experience', 'description' => 'Earn points for healthy financial activities and build responsible money habits.'],
                        ['icon' => '📈', 'title' => 'Powerful Analytics', 'description' => 'Beautiful charts and detailed reports to understand your financial patterns.']
                    ];
                    
                    foreach ($features as $feature): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card text-center h-100">
                            <div class="feature-icon"><?php echo $feature['icon']; ?></div>
                            <h3><?php echo htmlspecialchars($feature['title']); ?></h3>
                            <p><?php echo htmlspecialchars($feature['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="ai-advisor">
            <div class="container">
                <h2 class="section-title text-center">Meet Your AI Financial Advisor</h2>
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="ai-text">
                            <p>Get personalized insights and recommendations based on your spending patterns, balance trends, and financial goals. Our AI advisor helps you make smarter decisions without overwhelming you with data.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ai-visual">
                            <div class="ai-card">
                                <div class="ai-avatar">🤖</div>
                                <div class="ai-message">
                                    <p>"Based on your spending this month, you're on track to save an extra $200. Consider moving it to your high-yield savings account!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <div class="cta-content text-center">
                    <h2>Ready to Find Your Way of Money?</h2>
                    <div class="waitlist-form mx-auto">
                        <h3>Join the Waitlist</h3>
                        <?php 
                            echo $waitlist->renderForm('Enter your email address');
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content d-flex flex-column align-items-center justify-content-center">
                <p>🌘 Newmoon Software &copy; <?php echo date('Y'); ?></p>
                <p>All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php echo $waitlist->renderScripts(); ?>
    <script async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/collectiq/component/assets/waitlist.js"></script>
    <script src="script.js"></script>
</body>
</html>