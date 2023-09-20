<!DOCTYPE html>
<html>
<head>
    <title>Percentage Deduction Calculator</title>
</head>
<body>
    <h1>Percentage Deduction Calculator</h1>
    <form method="post">
        <label for="totalAmount">Total Amount:</label>
        <input type="text" name="totalAmount" required><br>

        <label for="deductionAmount">Deduction Amount:</label>
        <input type="text" name="deductionAmount" required><br>

        <button type="submit" name="calculate">Calculate Deduction</button>
    </form>

    <?php
    if(isset($_POST['calculate'])){
        $totalAmount = floatval($_POST['totalAmount']);
        $deductionAmount = floatval($_POST['deductionAmount']);

        if (!is_numeric($totalAmount) || !is_numeric($deductionAmount)) {
            echo "Please enter valid numeric values.";
        } else {
            $percentageDeduction = (($deductionAmount / $totalAmount) * 100);
            echo "Deducting $deductionAmount from $totalAmount is a deduction of " . number_format($percentageDeduction, 2) . "%.";
        }
    }
    ?>
</body>
</html>
