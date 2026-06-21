<?php 
require_once 'common.php';
$common = new Common();
?>
<?php echo $common->renderHead('DoshModo - Monthly money review', 'See what changed across your bank, card, statement, CSV, and Stripe activity: vendors, recurring spend, renewals, unusual charges, and review items.'); ?>

    <?php echo $common->renderMainHeader('What are you paying for?', 'DoshModo turns bank, card, statement, CSV, and Stripe activity into a monthly money review: vendors, recurring spend, changes, renewals, and the items that need your attention.'); ?>

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
                <h2 class="section-title text-center">Monthly Money Review</h2>
                <div class="row g-4">
                    <?php 
                    $features = [
                        ['tone' => 'green', 'icon' => '01', 'title' => 'Import the messy stuff', 'description' => 'Start with bank statements, card statements, PDFs, and CSVs. Bring Stripe and accounting exports into the workflow later.'],
                        ['tone' => 'blue', 'icon' => '02', 'title' => 'See every vendor', 'description' => 'Turn raw transactions into a vendor ledger so you can see who you pay, how often, and what each relationship costs.'],
                        ['tone' => 'amber', 'icon' => '03', 'title' => 'Track what repeats', 'description' => 'Find subscriptions, services, contractors, tools, fees, and annual renewals before they blend into monthly noise.'],
                        ['tone' => 'red', 'icon' => '04', 'title' => 'Catch what changed', 'description' => 'Flag new vendors, price increases, unusual charges, category shifts, and fees that deserve a closer look.'],
                        ['tone' => 'green', 'icon' => '05', 'title' => 'Create a review queue', 'description' => 'Confirm expense context, assign owners, categorize charges, decide what to keep, and mark what needs follow-up.'],
                        ['tone' => 'blue', 'icon' => '06', 'title' => 'Send cleaner context', 'description' => 'Export notes, categories, vendors, and review items your accountant or future self can actually use.']
                    ];
                    
                    foreach ($features as $feature): ?>
                    <div class="col-md-6 col-lg-4">
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

        <section class="ai-advisor">
            <div class="container">
                <h2 class="section-title text-center">Awareness That Keeps Paying Off</h2>
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="ai-text">
                            <p>Saving money is a good reason to start. Staying aware is the reason to come back. Every month, vendors appear, prices move, renewals get closer, fees shift, and transactions need context.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ai-visual">
                            <div class="ai-card">
                                <div class="ai-avatar"></div>
                                <div class="ai-message">
                                    <p>new activity -> vendor ledger -> changes -> review queue -> decisions -> accountant-ready summary</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2 class="section-title text-center">Built for Owners and Bookkeepers</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="feature-card">
                            <div class="feature-icon">[review]</div>
                            <h3>For businesses and the people who keep them organized</h3>
                            <p>Owners can use DoshModo to see what changed before the next month starts. Bookkeepers can use it to turn messy bank, card, and Stripe activity into cleaner review notes before the work moves into QuickBooks or Xero.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <div class="cta-content text-center">
                    <h2>review your money every month</h2>
                    <p>Join the waitlist for DoshModo.</p>
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
