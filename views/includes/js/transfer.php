<?php
$data = new CurrencyController;
$currencies = $data->getAllCurrencies();
?>
<script>
    var Currency = [

        <?php foreach ($currencies as $currency) : ?>
            change<?php echo $currency->id ?> = {
                id: '<?php echo $currency->id ?>',
                from: '<?php echo $currency->from_currency ?>',
                to: '<?php echo $currency->to_currency ?>',
                exchangerate: '<?php echo $currency->exchangerate ?>'
            },
        <?php endforeach; ?>




    ];





    function transfer() {

        var From = document.getElementById("From").value;
        var To = document.getElementById("To").value;

        var Amount = document.getElementById("Amount").value;

        var RATE1 = Currency[From - 1].exchangerate;
        var RATE2 = Currency[To - 1].exchangerate;

        Resultt = Amount * (RATE2 / RATE1);

        document.getElementById("Result").innerHTML = Resultt;

    }
</script>