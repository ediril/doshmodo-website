<?php 
require_once 'common.php';
$common = new Common();
$heroTitle = 'What are you paying for?';
$heroSubtitle = 'DoshModo turns bank, card, CSV, statement, and Stripe activity into a clear view of your vendors, recurring charges, changes, and review items.';
$heroSupport = 'See what repeats. Catch what changed. Decide what needs attention.';
?>
<?php echo $common->renderHead($heroTitle, $heroSubtitle); ?>

    <?php echo $common->renderMainHeader($heroTitle, $heroSubtitle . '<span class="hero-buyer">' . $heroSupport . '</span>'); ?>

    <main>
        <section class="audit-strip">
            <div class="container">
                <div class="audit-grid">
                    <div class="audit-metric audit-metric-green">
                        <span class="audit-label">vendors</span>
                        <strong>47</strong>
                    </div>
                    <div class="audit-metric audit-metric-blue">
                        <span class="audit-label">recurring spend</span>
                        <strong>$7.2k</strong>
                    </div>
                    <div class="audit-metric audit-metric-amber">
                        <span class="audit-label">changes</span>
                        <strong>9</strong>
                    </div>
                    <div class="audit-metric audit-metric-red">
                        <span class="audit-label">review items</span>
                        <strong>18</strong>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2 class="section-title text-center">From Activity to Attention</h2>
                <div class="pain-line mx-auto text-center">Money activity comes in scattered across statements, cards, exports, and Stripe. DoshModo turns it into a reviewable view of vendors, recurring charges, changes, renewals, unusual activity, and open questions.</div>
                <div class="row g-4">
                    <?php 
                    $features = [
                        ['tone' => 'green', 'icon' => 'ledger', 'title' => 'Vendor Ledger', 'description' => 'Who you pay, how often, how much, and where each vendor shows up across your money activity.'],
                        ['tone' => 'blue', 'icon' => 'changes', 'title' => 'Change Report', 'description' => 'New vendors, price increases, renewals, unusual charges, and fees that deserve a closer look.'],
                        ['tone' => 'amber', 'icon' => 'queue', 'title' => 'Review Queue', 'description' => 'Open questions and items that need attention: unknown charges, changed amounts, upcoming renewals, and recurring payments worth reviewing.'],
                        ['tone' => 'red', 'icon' => 'summary', 'title' => 'Review Notes', 'description' => 'Keep notes on what something is, why it matters, and what you decided.']
                    ];
                    
                    foreach ($features as $feature): ?>
                    <div class="col-md-6">
                        <div class="feature-card feature-card-<?php echo htmlspecialchars($feature['tone']); ?> h-100">
                            <div class="feature-icon">[<?php echo htmlspecialchars($feature['icon']); ?>]</div>
                            <h3><?php echo htmlspecialchars($feature['title']); ?></h3>
                            <p><?php echo htmlspecialchars($feature['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="review-example">
            <div class="container">
                <div class="row align-items-start g-4">
                    <div class="col-lg-4">
                        <h2 class="section-title">Your Review Queue</h2>
                        <p class="section-copy">See what changed, why it matters, and what needs a decision.</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="review-panel">
                            <div class="review-row review-header">
                                <span>review item</span>
                                <span>why it matters</span>
                            </div>
                            <div class="review-row">
                                <span>New vendor: Linear - $96/mo</span>
                                <span>Confirm owner and category</span>
                            </div>
                            <div class="review-row">
                                <span>Stripe fees up 22%</span>
                                <span>Check refund or chargeback trend</span>
                            </div>
                            <div class="review-row">
                                <span>Adobe increased from $59 to $89</span>
                                <span>Review plan and renewal date</span>
                            </div>
                            <div class="review-row">
                                <span>Annual renewal: Webflow in 12 days</span>
                                <span>Decide keep, change, or cancel</span>
                            </div>
                            <div class="review-row">
                                <span>Unknown recurring charge - $49/mo</span>
                                <span>Needs context before export</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ai-advisor">
            <div class="container">
                <h2 class="section-title text-center">Awareness That Stays Useful</h2>
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="ai-text">
                            <p>Saving money is a good reason to start. Staying aware is the reason to come back. Vendors appear, prices move, renewals get closer, fees shift, and recurring charges keep showing up.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ai-visual">
                            <div class="ai-card">
                                <div class="ai-avatar"></div>
                                <div class="ai-message">
                                    <p>new activity -> vendor ledger -> changes -> review queue -> decisions -> notes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2 class="section-title text-center">Built for messy money activity</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="feature-card">
                            <div class="feature-icon">[review]</div>
                            <p>Use DoshModo for personal finances, freelance work, small-business spending, or bookkeeping prep. Start with the activity you already have and turn it into a view you can review.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <div class="cta-content text-center">
                    <h2>run your first money review</h2>
                    <p>Join the early access list. We are looking for people who want to turn real bank, card, CSV, statement, and Stripe activity into a review they can act on.</p>
                    <div class="waitlist-form mx-auto">
                        <h3>Join the Waitlist</h3>
                        <?php echo $common->renderWaitlistForm('email@example.com'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php echo $common->renderFooter(); ?>

<?php echo $common->renderScripts(); ?>
