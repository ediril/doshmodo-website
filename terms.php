<?php 
require_once 'common.php';
$common = new Common();
?>
<?php echo $common->renderHead('Terms of Service - DoshModo', 'The rules and guidelines for using DoshModo'); ?>

    <?php echo $common->renderPageHeader('Terms of Service', 'The rules and guidelines for using DoshModo'); ?>

    <main>
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bg-white p-5 rounded-4 shadow-sm">
                            <h2 class="h4 mb-3">Agreement to Terms</h2>
                            <p class="mb-4">By accessing and using DoshModo, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>

                            <h2 class="h4 mb-3">Description of Service</h2>
                            <p class="mb-4">DoshModo is a spend-audit and recurring spend intelligence application that helps users import financial activity, identify vendors and recurring charges, monitor statement-backed records, and produce cleanup/export workflows for business or personal use.</p>

                            <h2 class="h4 mb-3">User Responsibilities</h2>
                            <p class="mb-3">As a user of DoshModo, you agree to:</p>
                            <ul class="mb-4">
                                <li>You must be 18+ to use DoshModo</li>
                                <li>Use DoshModo within the limits of your plan, workspace, or account type</li>
                                <li>You own your data but grant us permission to provide the service</li>
                                <li>We don't guarantee perfection and aren't liable for damages</li>
                                <li>You can stop using the service anytime</li>
                            </ul>

                            <h2 class="h4 mb-3">Account Security</h2>
                            <p class="mb-3">You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. You agree to:</p>
                            <ul class="mb-4">
                                <li>Provide accurate and complete information when creating your account</li>
                                <li>Keep your account credentials secure and confidential</li>
                                <li>Notify us immediately of any security breaches or unauthorized use</li>
                            </ul>

                            <h2 class="h4 mb-3">Financial Data</h2>
                            <p class="mb-4">DoshModo helps you organize financial activity, statements, vendors, recurring charges, and spend-audit outputs. You are responsible for the accuracy of the data you upload, import, edit, categorize, or export. We provide analysis and workflow tools, but we are not financial advisors, accountants, or tax professionals, and our service does not constitute financial, accounting, tax, or legal advice.</p>

                            <h2 class="h4 mb-3">Intellectual Property</h2>
                            <p class="mb-4">The DoshModo application, its original content, features, and functionality are owned by Newmoon Software and are protected by international copyright, trademark, patent, trade secret, and other intellectual property laws.</p>

                            <h2 class="h4 mb-3">Limitation of Liability</h2>
                            <p class="mb-4">In no event shall DoshModo or Newmoon Software be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses.</p>

                            <h2 class="h4 mb-3">Termination</h2>
                            <p class="mb-4">We may terminate or suspend your account and bar access to the service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever, including breach of these Terms.</p>

                            <h2 class="h4 mb-3">Changes to Terms</h2>
                            <p class="mb-4">We reserve the right to modify these terms at any time. We will notify users of any material changes to these terms through the app or email.</p>

                            <h2 class="h4 mb-3">Contact Information</h2>
                            <p class="mb-4">Questions about the Terms of Service should be sent to us at <a href="mailto:support@doshmodo.com" class="text-decoration-none" >support@doshmodo.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php echo $common->renderFooter(); ?>

<?php echo $common->renderScripts(); ?>