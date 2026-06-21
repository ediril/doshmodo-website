<?php
$title = $title ?? 'DoshModo - Monthly money review';
$description = $description ?? 'See what changed across your bank, card, statement, CSV, and Stripe activity: vendors, recurring spend, renewals, unusual charges, and review items.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php echo $waitlist->renderStyles(); ?>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
