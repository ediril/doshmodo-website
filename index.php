<?php
// DoshModo Landing Page
$current_year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoshModo - Find your way of money</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header class="hero">
        <nav class="nav">
            <div class="nav-container">
                <div class="logo">
                    <img src="logo.png" alt="DoshModo" class="logo-img">
                    <span class="logo-text">DoshModo</span>
                </div>
            </div>
        </nav>
        
        <div class="hero-content">
            <div class="hero-container">
                <h1 class="hero-title">Find Your Way of Money</h1>
                <p class="hero-subtitle">The practical finance app that focuses on what matters most:<br>Building healthy financial habits.</p>
                
                <div class="waitlist-form">
                    <h3>Join the Waitlist</h3>
                    <form class="email-form">
                        <input type="email" placeholder="Enter your email address" class="email-input" required>
                        <button type="submit" class="submit-btn">Get Early Access</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="video-section">
            <div class="container">
                <h2 class="section-title">See DoshModo in Action</h2>
                <div class="video-placeholder">
                    <div class="play-button">▶</div>
                    <p>Coming Soon: Product Demo Video</p>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2 class="section-title">Smart Financial Management</h2>
                <div class="features-grid">
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
                    <div class="feature-card">
                        <div class="feature-icon"><?php echo $feature['icon']; ?></div>
                        <h3><?php echo htmlspecialchars($feature['title']); ?></h3>
                        <p><?php echo htmlspecialchars($feature['description']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="ai-advisor">
            <div class="container">
                <div class="ai-content">
                    <div class="ai-text">
                        <h2>Meet Your AI Financial Advisor</h2>
                        <p>Get personalized insights and recommendations based on your spending patterns, balance trends, and financial goals. Our AI advisor helps you make smarter decisions without overwhelming you with data.</p>
                    </div>
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
        </section>

        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Balance Your Finances?</h2>
                    <p>Join thousands of others who are taking control of their financial future with DoshModo.</p>
                    
                    <div class="waitlist-form">
                        <form class="email-form">
                            <input type="email" placeholder="Enter your email address" class="email-input" required>
                            <button type="submit" class="submit-btn">Join Waitlist</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="logo.png" alt="DoshModo" class="logo-img">
                    <span class="logo-text">DoshModo</span>
                </div>
                <p>&copy; <?php echo $current_year; ?> DoshModo. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>