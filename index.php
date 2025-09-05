<?php 
require_once 'common.php';
$common = new Common();
?>
<?php echo $common->renderHead(); ?>

    <?php echo $common->renderMainHeader('Find Your Way of Money', 'The practical finance app that focuses on what matters most:<br>Building healthy financial habits'); ?>

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
                        <?php echo $common->renderWaitlistForm('Enter your email address'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php echo $common->renderFooter(); ?>

<?php echo $common->renderScripts(); ?>