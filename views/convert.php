<?php
$data = new CurrencyController;
$currencies = $data->getAllCurrencies();
?>

<script>
    var Currency = [

        <?php foreach ($currencies as $currency) : ?>
            change<?php echo $currency->id ?> = {
                id: '<?php echo $currency->id ?>',
                exchangerate: '<?php echo $currency->exchangerate ?>'
            },
        <?php endforeach; ?>
    ];
</script>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Currency Exchange</div>

                <div class="card-body bg-light">
                    <div class="form-group">
                        <label for="">Amount</label>
                        <input type="text" class="form-control" id="Amount">
                    </div>
                    <div class="form-group">
                        <label for="">From</label>
                        <select class="form-select" aria-label="Default select example" id="From">
                            <?php foreach ($currencies as $currency) : ?>
                                <option value="<?php echo $currency->id ?>"><?php echo $currency->currency ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">To</label>
                        <select class="form-select" aria-label="Default select example" id="To">
                            <?php foreach (array_reverse($currencies)  as $currency) : ?>
                                <option value="<?php echo $currency->id ?>"><?php echo $currency->currency ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Result</label>
                        <p type="text" class="form-control" id="Result"></p>
                    </div>
                    <div class="form-group pt-3">
                        <button class="form-control btn btn-primary" onclick="transfer()">Transfer</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>