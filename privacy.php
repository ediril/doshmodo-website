<?php 
require_once 'common.php';
$common = new Common();
?>
<?php echo $common->renderHead('Privacy Policy - DoshModo', 'How we protect and handle your information'); ?>

    <?php echo $common->renderPageHeader('Privacy Policy', 'How we protect and handle your information'); ?>

    <main>
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bg-white p-5 rounded-4 shadow-sm">

                            <h2 class="h4 mb-3">TL;DR - Short Version</h2>
                            <p class="mb-3">We collect information to provide better services to our users:</p>
                            <ul class="mb-4">
                                <li>We collect information to provide better services and personalize your experience</li>
                                <li>We never sell your financial data - only use it with your consent</li>
                                <li>We use analytics tools to improve our service</li>
                                <li>Contact us at support@doshmodo.com with questions</li>
                            </ul>

                            <h2 class="h4 mb-3">Information We Collect</h2>
                            <ul class="mb-4">
                                <li><strong>Account Information:</strong> Email address, name, and account preferences</li>
                                <li><strong>Financial Data:</strong> Statements, transactions, vendors, account balances, recurring charges, imported files, exports, and related notes or categories you choose to track</li>
                                <li><strong>Usage Data:</strong> How you interact with our app to improve our services</li>
                                <li><strong>Device Information:</strong> Device type, operating system, and app version</li>
                            </ul>

                            <h2 class="h4 mb-3">How We Use Your Information</h2>
                            <ul class="mb-4">
                                <li>Provide and improve our financial management services</li>
                                <li>Generate spend-audit outputs, recurring vendor analysis, cleanup recommendations, and related reports</li>
                                <li>Ensure the security of your account and data</li>
                                <li>Communicate with you about updates and features</li>
                                <li>Comply with legal obligations</li>
                            </ul>

                            <h2 class="h4 mb-3">Data Security</h2>
                            <p class="mb-4">We use reasonable security measures to protect your financial information, including secure data handling practices appropriate to the service. Your financial data is not sold and is not shared with third parties without your consent except as needed to operate the service or comply with legal obligations.</p>

                            <h2 class="h4 mb-3">Your Rights</h2>
                            <p class="mb-3">You have the right to:</p>
                            <ul class="mb-4">
                                <li>Access and review your personal information</li>
                                <li>Request correction of inaccurate data</li>
                                <li>Delete your account and associated data</li>
                                <li>Export your data in a portable format</li>
                                <li>Opt-out of marketing communications</li>
                            </ul>

                            <h2 class="h4 mb-3">Contact Us</h2>
                            <p class="mb-4">If you have questions about this Privacy Policy or your data, please contact us at <a href="mailto:support@doshmodo.com" class="text-decoration-none" >support@doshmodo.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php echo $common->renderFooter(); ?>

<?php echo $common->renderScripts(); ?>